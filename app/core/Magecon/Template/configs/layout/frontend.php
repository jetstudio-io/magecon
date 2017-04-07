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
 * Date: 07/04/2017
 * Time: 00:26
 */

return new \Phalcon\Config([
    'layout' => [
        'defaults' => [
            'template' => "layout/index.html.volt",
            'blocks' => [
                'head' => [
                    'type' => 'core_template/head',
                    'actions' => [
                        'addItem' => [
                            'type'  => 'skin_css',
                            'name'  => 'test.css'
                        ],
                    ],
                ],
                'after_body_start' => [
                    'type' => 'core_template/container',
                ],
                'header' => [
                    'type' => 'core_template/container',
                ],
                'left' => [
                    'type' => 'core_template/container',
                ],
                'content' => [
                    'type' => 'core_template/container',
                    'blocks' => [
                        'main_content' => [
                            'type' => 'core_template/template',
                            'template' => 'blocks/content.html.volt',
                        ],
                    ],
                ],
                'right' => [
                    'type' => 'core_template/container',
                ],
                'footer' => [
                    'type' => 'core_template/container',
                ],
                'before_body_end' => [
                    'type' => 'core_template/container',
                ],
            ],
        ]
    ]
]);