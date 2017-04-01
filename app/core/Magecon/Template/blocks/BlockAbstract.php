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

abstract class BlockAbstract extends SimpleView {

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

    public function __construct(array $options = array()) {
        parent::__construct($options);
        $this->_engines = [
        ];
    }

    public function add(BlockAbstract $child) {

    }

    /**
     * @return array
     */
    public function getChildrend(): array {
        return $this->_childrend;
    }

    /**
     * @param array $childrend
     */
    public function setChildrend(array $childrend) {
        $this->_childrend = $childrend;
    }

    /**
     * @return string
     */
    public function getName(): string {
        return $this->_name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name) {
        $this->_name = $name;
    }

    /**
     * @return string
     */
    public function getTemplate(): string {
        return $this->_template;
    }

    /**
     * @param string $template
     */
    public function setTemplate(string $template) {
        $this->_template = $template;
    }


    public function __toString() {
        return $this->_html();
    }

    protected function _prepareLayout() {
    }
    /**
     * Get block html
     * @return string
     */
    protected function _html() {
        // Prepare block layout
        $this->_prepareLayout();
        return $this->render($this->_template);
    }
}