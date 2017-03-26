<?php
/**
 * Copyright (c) 2017  MageCon
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
 * Date: 24/03/2017
 * Time: 15:38
 */

namespace Magecon\Cli\Tasks;

use Magecon\Cms\Model\Block;
use Phalcon\Cli\Task;

/**
 * Automatically take model metadata and update table
 * Command:
 * php run migration:action
 * Class MigrationTask
 * @package Magecon\Cli
 */

class MigrationTask extends Task {

    /**
     *
     */
    public function mainAction() {
        $block = new Block();
        /* @var $blockMeta \Phalcon\Mvc\Model\MetaData\Redis */
        $blockMeta = $block->getModelsMetaData();
        print_r($blockMeta->getDataTypes($block));
    }

    public function updateAction() {
        echo "in update action\n";
    }
}