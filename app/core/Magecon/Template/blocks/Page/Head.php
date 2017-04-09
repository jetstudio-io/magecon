<?php
/**
 * Copyright (c) 2017 magecon
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
 * Date: 08/04/2017
 * Time: 00:39
 */

namespace Magecon\Template\Block\Page;

use Magecon\Template\Block\BlockAbstract;
use Phalcon\Assets\Filters\Cssmin;
use Phalcon\Assets\Filters\Jsmin;
use Phalcon\Assets\Manager;

class Head extends BlockAbstract {

    /**
     * @var Manager
     */
    protected $_assets = null;

    /**
     * @var array
     */
    protected $_items = [];

    /**
     * @param array $param
     * @internal param string $type
     * @internal param string $name
     */
    public function addItem($param = ['type' => 'css', 'path' => '']) {
        if (isset($param['type']) && !empty($param['path'])) {
            switch ($param['type']) {
                case "css":
                    $this->_items['css'][] = $param['path'];
                    break;
                case "js":
                    $this->_items['js'][] = $param['path'];
                    break;
            }
        }
    }

    /**
     * @return string
     */
    protected function _html() {
        $this->_assets = new Manager([
            'sourceBasePath' => BASE_PATH . DS . 'public' . DS,
            'targetBasePath' => BASE_PATH . DS . 'public' . DS,
            ]);
        if (!empty($this->_items["css"])) {
            $cssHeader = $this->_assets
                ->collection("cssHeader");

            $cssHeader->setTargetPath("css/all.css");
            $cssHeader->setTargetUri("/css/all.css");
            foreach ($this->_items["css"] as $css) {
                $cssHeader->addCss($css);
            }
            $cssHeader->join(true);
            $cssHeader->addFilter(new Cssmin());

            $this->_assets->outputCss('cssHeader');
        }

        if (!empty($this->_items["js"])) {
            $jsFooter = $this->_assets
                ->collection("jsFooter");

            $jsFooter->setTargetPath("js/all.js");
            $jsFooter->setTargetUri("/js/all.js");
            foreach ($this->_items["js"] as $js) {
                $jsFooter->addJs($js);
            }
            $jsFooter->join(true);
            $jsFooter->addFilter(new Jsmin());

            $this->_assets->outputJs('jsFooter');
        }
        return "";
    }


}