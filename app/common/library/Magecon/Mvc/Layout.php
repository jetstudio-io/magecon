<?php
/**
 * Copyright (c) 2017 MageCon
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */
/**
 * @author Nguyen Van Thiep
 * Date: 05/04/2017
 * Time: 21:36
 */

namespace Magecon\Mvc;

use Magecon\Template\Block\BlockAbstract;
use Phalcon\Config;
use Phalcon\Mvc\View\Simple;

class Layout extends Simple {

    const DEFAULT_MODULE = 'core_frontend';

    protected $_handles = ['default'];
    protected $_processed = FALSE;

    protected $_blocks = [];

    protected $_layoutConfig = null;

    protected $_area = 'frontend';

    protected $_module = '';

    /**
     * Template relative file
     * @var string
     */
    protected $_template = "layout/index.html.volt";

    public function renderBlock() {
        $config = $this->_dependencyInjector->get(\SERVICES::CONFIG);
        $this->_layoutConfig = new Config([]);

        foreach ($this->_handles as $handle) {
            if (isset($config->layout->{$handle})) {
                $handleConfig = $config->layout->{$handle};
                $this->_layoutConfig->merge($handleConfig);
            }
        }
        $this->_process();
    }

    public function addHandleUpdate($handleName) {
        if (!in_array($handleName, $this->_handles)) {
            $this->_handles[] = $handleName;
        }
    }

    /**
     * @return bool
     */
    public function isProcessed(): bool {
        return $this->_processed;
    }

    public function renderLayout() {
        if (!$this->_processed) {
            $this->_processed = TRUE;
            $templateFile = VIEW_PATH . $this->_area . DS . $this->_module . DS . $this->_template;
            if (file_exists($templateFile)) {
                echo $this->render($this->_area . DS . $this->_module . DS . $this->_template);
            } else {
                echo $this->render($this->_area . DS . self::DEFAULT_MODULE . DS . $this->_template);
            }
        }
    }

    /**
     * @param string $childName
     * @return bool|string
     */
    public function getChildHtml($childName = "") {
        if (isset($this->_blocks[$childName])) {
            return $this->_blocks[$childName]->toHtml();
        } else {
            return false;
        }
    }

    /**
     * @param string $childName
     * @return bool|mixed
     */
    public function getChildBlock($childName = "") {
        if (isset($this->_blocks[$childName])) {
            return $this->_blocks[$childName];
        } else {
            return false;
        }
    }

    /**
     * Switch layout to backend area
     */
    public function switchToAdmin() {
        $this->_area = 'backend';
    }

    /**
     * @return string
     */
    public function getArea(): string {
        return $this->_area;
    }

    /**
     * @return string
     */
    public function getModule(): string {
        return $this->_module;
    }

    /**
     * @param string $module
     */
    public function setModule(string $module) {
        $this->_module = $module;
    }

    protected function _process() {
        foreach ($this->_layoutConfig as $key => $value) {
            switch ($key) {
                case 'template' :
                    if (is_string($value)) {
                        $this->_template = $value;
                    }
                    break;
                case 'blocks' :
                    foreach ($value as $blockName => $blockConfig) {
                        $block = $this->_processBlock($blockConfig);
                        $block->setName($blockName);
                        $this->_blocks[$blockName] = $block;
                        //$this->setVar($blockName, $block);
                    }
                    break;
            }
        }
    }

    /**
     * @param $blockConfig
     * @return BlockAbstract
     */
    protected function _processBlock($blockConfig) {
        $type = 'core_template/template';
        if (isset($blockConfig->type)) {
            $type = $blockConfig->type;
        }
        /* @var $block BlockAbstract */
        $block = $this->_getBlockByClassName($type);

        foreach ($blockConfig as $key => $value) {
            switch ($key) {
                case 'template' :
                    if (is_string($value)) {
                        $block->setTemplate($value);
                    }
                    break;
                case 'blocks' :
                    foreach ($value as $blockName => $childConfig) {
                        $child = $this->_processBlock($childConfig);
                        $child->setName($blockName);
                        $block->addChild($child);
                    }
                    break;
            }
        }
        if (isset($blockConfig->actions)) {
            foreach ($blockConfig->actions as $funcName => $params) {
                if (method_exists($block, $funcName)) {
                    foreach ($params as $param) {
                        $block->{$funcName}($param);
                    }
                }
            }
        }

        return $block;
    }

    /**
     * @param string $type
     * @return BlockAbstract
     */
    protected function _getBlockByClassName($type = "core_template/template") {
        // analyse block type in format module_name/block_path
        $moduleName = 'core_template';
        if (preg_match("/(.*)\/(.*)/", $type, $parts)) {
            $moduleName = $parts[1];
            $classPath = $parts[2];
        } else {
            $classPath = $type;
        }
        //get real full class name
        $config = $this->_dependencyInjector->get(\SERVICES::CONFIG);
        $module = $config->{$this->_area}->modules->{$moduleName};
        if (isset($module->namespace)) {
            $namespace = $module->namespace;
        } else {
            $namespace = preg_replace('/Module$/', 'Block', $module["className"]);
        }
        $classPath = explode("_", $classPath);
        foreach ($classPath as $idx => $path) {
            $classPath[$idx] = ucfirst($path);
        }
        $className = $namespace . "\\" . implode("\\", $classPath);

        /* @var $blockInstance BlockAbstract */
        $blockInstance = new $className($this);
        $blockInstance->setModule($moduleName);
        $blockInstance->setDI($this->_dependencyInjector);
        return $blockInstance;
    }
}