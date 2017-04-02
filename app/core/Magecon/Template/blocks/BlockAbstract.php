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
 * Date: 25/03/2017
 * Time: 18:31
 */

namespace Magecon\Template\Block;

use Phalcon\Mvc\View\Simple as SimpleView;

/**
 * Class BlockAbstract
 * @package Magecon\Template\Block
 * @Block(
 *     template="blocks/abstract.volt",
 * )
 */
abstract class BlockAbstract extends SimpleView {

    /**
     * The children block
     * @var array
     */
    protected $_childrend = [];
    /**
     * @var string
     */
    protected $_name = "";
    /**
     * Template relative file
     * @var string
     */
    protected $_template = "blocks/abstract.volt";

    /**
     * The template dir must be in views folder in module folder
     * @var string
     */
    protected $_templateDir = "/../views";

    public function __construct(array $options = array()) {
        parent::__construct($options);
        $reflector = new \ReflectionClass(get_class($this));
        $dir = dirname($reflector->getFileName());
        $this->_templateDir = $dir . DS . ".." . DS . "views";
    }

    /**
     * @param BlockAbstract $child
     * @param string $before
     * @param string $after
     * @return BlockAbstract
     */
    public function addChild(BlockAbstract $child, $before = "", $after = "") {
        if ($before) {
            if ($before == "-") {
                $this->_childrend = [$child->getName() => $child] + $this->_childrend;
            }
            if ($this->_childrend[$before]) {
                $idx = array_search($before, array_keys($this->_childrend));
                array_splice($this->_childrend, $idx, 0, [$child->getName() => $child]);
            }
        } elseif ($after && $this->_childrend[$after]) {
            $idx = array_search($after, array_keys($this->_childrend));
            array_splice($this->_childrend, $idx + 1, 0, [$child->getName() => $child]);
        }
        $this->_childrend[$child->getName()] = $child;
        return $this;
    }

    /**
     * @param BlockAbstract|string $child
     * @return BlockAbstract
     */
    public function removeChild($child) {
        if (($child instanceof BlockAbstract) && isset($this->_childrend[$child->getName()])) {
            unset($this->_childrend[$child->getName()]);
        } elseif (is_string($child) && isset($this->_childrend[$child])) {
            unset($this->_childrend[$child]);
        }
        return $this;
    }

    /**
     * @param string $childName
     * @return bool|BlockAbstract
     */
    public function getChildBlock($childName = "") {
        if (isset($this->_childrend[$childName])) {
            return $this->_childrend[$childName];
        } else {
            return false;
        }
    }

    /**
     * @param string $childName
     * @return bool|BlockAbstract
     */
    public function getChildHtml($childName = "") {
        if (isset($this->_childrend[$childName])) {
            return $this->_childrend[$childName]->toHtml();
        } else {
            return false;
        }
    }

    /**
     * @return array
     */
    public function getChildrend(): array {
        return $this->_childrend;
    }

    /**
     * @param array $childrend
     * @return BlockAbstract
     */
    public function setChildrend(array $childrend) {
        $this->_childrend = $childrend;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string {
        return $this->_name;
    }

    /**
     * @param string $name
     * @return BlockAbstract
     */
    public function setName(string $name) {
        $this->_name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getTemplate(): string {
        return $this->_template;
    }

    /**
     * @param string $template
     * @return BlockAbstract
     */
    public function setTemplate(string $template) {
        $this->_template = $template;
        return $this;
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->_html();
    }

    /**
     * @return string
     */
    public function toHtml() {
        return $this->_html();
    }

    /**
     * @return BlockAbstract
     */
    protected function _prepareLayout() {
        return $this;
    }
    /**
     * Get block html
     * Use Phalcon\Mvc\View\SimpleView::render function
     * @return string
     */
    protected function _html() {
        // Prepare block layout
        $this->_prepareLayout();
        return $this->render($this->_templateDir . DS . $this->_template);
    }
}