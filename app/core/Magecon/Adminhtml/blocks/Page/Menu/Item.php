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
 * Date: 15/04/2017
 * Time: 23:08
 */

namespace Magecon\Adminhtml\Block\Page\Menu;

use Magecon\Template\Block\BlockAbstract;

class Item extends BlockAbstract {
    /**
     * Template relative file
     * @var string
     */
    protected $_template = "blocks/page/menu/item.html.volt";

    /**
     * @var string
     */
    protected $_title = '';

    /**
     * Menu item level
     * 0 : Parent item
     * @var int
     */
    protected $_level = 0;

    /**
     * @var string
     */
    protected $_action = '';

    /**
     * @var string
     */
    protected $_icon = '';

    /**
     * @var array(Item)
     */
    protected $_items = [];

    protected $_weight = -1;

    /**
     * @return int
     */
    public function getLevel(): int {
        return $this->_level;
    }

    /**
     * @param int $level
     */
    public function setLevel(int $level) {
        $this->_level = $level;
    }

    /**
     * @return string
     */
    public function getAction(): string {
        return $this->_action;
    }

    /**
     * @param string $action
     */
    public function setAction(string $action) {
        $config = $this->getDI()->get(\SERVICES::CONFIG);
        if (isset($config->area) && ($config->area == 'backend')) {
            $this->_action = $config->application->backendUriPrefix . $action;
        } else {
            $this->_action = $action;
        }
    }

    /**
     * @return string
     */
    public function getIcon(): string {
        return $this->_icon;
    }

    /**
     * @param string $icon
     */
    public function setIcon(string $icon) {
        $this->_icon = $icon;
    }

    /**
     * @return array
     */
    public function getItems(): array {
        return $this->_items;
    }

    /**
     * @param array $items
     */
    public function setItems(array $items) {
        $this->_items = $items;
    }

    /**
     * @param Item $item
     * @param int $idx
     * @return Item
     */
    public function addItem(Item $item, $idx = -1) {
        if ($idx >= 0) {
            $this->_items[$idx] = $item;
        } else {
            $this->_items[] = $item;
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getWeight(): int {
        return $this->_weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight(int $weight) {
        $this->_weight = $weight;
    }

    /**
     * @return $this
     */
    public function sortItem() {
        ksort($this->_items);
        return $this;
    }

    /**
     * @return bool
     */
    public function hasItem() {
        return !empty($this->_items);
    }

    /**
     * @return string
     */
    public function getTitle(): string {
        return $this->_title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title) {
        $this->_title = $title;
    }
}