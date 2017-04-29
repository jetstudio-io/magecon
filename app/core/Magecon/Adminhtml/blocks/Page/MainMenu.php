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
 * Time: 19:07
 */

namespace Magecon\Adminhtml\Block\Page;

use Magecon\Adminhtml\Block\Page\Menu\Item;
use Magecon\Template\Block\BlockAbstract;

class MainMenu extends BlockAbstract {

    /**
     * Template relative file
     * @var string
     */
    protected $_template = "blocks/page/menu.html.volt";

    protected $_items = [];

    /**
     * Load menu item in config file
     */
    protected function _prepareLayout() {
        /* @var $configLoader \Magecon\Core\ModuleConfigLoader */
        $configLoader = $this->getDI()->get(\SERVICES::MODULE_CONFIG_LOADER);
        $configLoader->loadModuleConfig('menu', ['area' => 'backend']);
        $this->_processConfig();
    }

    protected function _processConfig() {
        $menuConfig = $this->getDI()->get(\SERVICES::CONFIG)->backend->menu;

        foreach ($menuConfig->items as $itemName => $itemConfig) {
            $itemConfig->level = 0;
            $itemInstance = $this->_getMenuItem($itemConfig);
            if (isset($itemConfig->weight)) {
                $this->_items[$itemConfig->weight] = $itemInstance;
            } else {
                $this->_items[] = $itemInstance;
            }
        }
        ksort($this->_items);
    }

    /**
     * @param $itemConfig
     * @return Item
     */
    protected function _getMenuItem($itemConfig) {
        $itemInstance = new Item($this->_layout);
        $itemInstance->setDI($this->getDI());

        $itemInstance->setTitle($itemConfig->title);

        if (isset($itemConfig->action)) {
            $itemInstance->setAction($itemConfig->action);
        }

        if (isset($itemConfig->icon)) {
            $itemInstance->setIcon($itemConfig->icon);
        }

        if (isset($itemConfig->weight)) {
            $itemInstance->setWeight($itemConfig->weight);
        }

        $itemInstance->setLevel($itemConfig->level);

        if (isset($itemConfig->items)) {
            foreach ($itemConfig->items as $subItemName => $subItemConfig) {
                $subItemConfig->level = $itemConfig->level + 1;
                $subItemInstance = $this->_getMenuItem($subItemConfig);
                if (isset($subItemConfig->weight)) {
                    $weight = $subItemConfig->weight;
                } else {
                    $weight = -1;
                }
                $itemInstance->addItem($subItemInstance, $weight);
            }
            // Sort sub item by weight
            $itemInstance->sortItem();
        }
        return $itemInstance;
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
}