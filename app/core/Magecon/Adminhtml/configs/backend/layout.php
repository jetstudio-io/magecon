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
        'default' => [
            'template' => "layout/index.html.volt",
            'blocks' => [
                'head' => [
                    'type' => 'core_template/page_head',
                    'actions' => [
                        'setTitle' => ["title" => "e-commerce framework on Phalcon"],
                        'addItem' => [
                            //GLOBAL MANDATORY STYLES
                            ['type' => 'css', 'path' => 'assets/global/plugins/font-awesome/css/font-awesome.css'],
                            ['type' => 'css', 'path' => 'assets/global/plugins/simple-line-icons/simple-line-icons.css'],
                            ['type' => 'css', 'path' => 'assets/global/plugins/bootstrap/css/bootstrap.min.css'],
                            ['type' => 'css', 'path' => 'assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'],

                            //GLOBAL MANDATORY STYLES
                            ['type' => 'css', 'path' => 'assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css'],
                            ['type' => 'css', 'path' => 'assets/global/plugins/morris/morris.css'],
                            ['type' => 'css', 'path' => 'assets/global/plugins/fullcalendar/fullcalendar.min.css'],
                            ['type' => 'css', 'path' => 'assets/global/plugins/jqvmap/jqvmap/jqvmap.css'],

                            //THEME GLOBAL STYLES
                            ['type' => 'css', 'path' => 'assets/global/css/components-md.min.css'],
                            ['type' => 'css', 'path' => 'assets/global/css/plugins-md.min.css'],

                            //THEME LAYOUT STYLES
                            ['type' => 'css', 'path' => 'assets/layouts/layout3/css/layout.min.css'],
                            ['type' => 'css', 'path' => 'assets/layouts/layout3/css/themes/default.min.css'],
                            ['type' => 'css', 'path' => 'assets/layouts/layout3/css/custom.min.css'],
                        ],
                    ],
                ],
                'after_body_start' => [
                    'type' => 'core_template/container',
                ],
                'header' => [
                    'type' => 'core_template/page_header',
                    'template' => 'blocks/header.html.volt',
                    'blocks' => [
                        'main_menu' => [
                            'type' => 'core_adminhtml/page_mainMenu'
                        ]
                    ],
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
                            'blocks' => [
                                'content.top' => [
                                    'type' => 'core_template/template',
                                    'template' => 'blocks/content/top.html.volt',
                                ],
                            ],
                        ],
                    ],
                ],
                'right' => [
                    'type' => 'core_template/container',
                ],
                'footer' => [
                    'type' => 'core_template/template',
                    'template' => 'blocks/footer.html.volt'
                ],
                'js_footer' => [
                    'type' => 'core_template/page_head',
                    'actions' => [
                        'addItem' => [
                            //CORE PLUGINS
                            ['type' => 'js', 'path' => 'assets/global/plugins/jquery.min.js'],
                            ['type' => 'js', 'path' => 'assets/global/plugins/bootstrap/js/bootstrap.min.js'],
                            ['type' => 'js', 'path' => 'assets/global/plugins/js.cookie.min.js'],
                            ['type' => 'js', 'path' => 'assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js'],
                            ['type' => 'js', 'path' => 'assets/global/plugins/jquery.blockui.min.js'],
                            ['type' => 'js', 'path' => 'assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js'],

                            //PAGE LEVEL PLUGINS
                            ['type' => 'js', 'path' => 'assets/global/plugins/moment.min.js'],
                            ['type' => 'js', 'path' => 'assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js'],
                            ['type' => 'js', 'path' => 'assets/global/plugins/morris/morris.min.js'],
                            ['type' => 'js', 'path' => 'assets/global/plugins/morris/raphael-min.js'],
                            ['type' => 'js', 'path' => 'assets/global/plugins/counterup/jquery.waypoints.min.js'],
                            ['type' => 'js', 'path' => 'assets/global/plugins/counterup/jquery.counterup.min.js'],
                            ['type' => 'js', 'path' => 'assets/global/plugins/fullcalendar/fullcalendar.min.js'],
                            ['type' => 'js', 'path' => 'assets/global/plugins/flot/jquery.flot.min.js'],
                            ['type' => 'js', 'path' => 'assets/global/plugins/flot/jquery.flot.resize.min.js'],
                            ['type' => 'js', 'path' => 'assets/global/plugins/flot/jquery.flot.categories.min.js'],
                            ['type' => 'js', 'path' => 'assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js'],
                            ['type' => 'js', 'path' => 'assets/global/plugins/jquery.sparkline.min.js'],
                            ['type' => 'js', 'path' => 'assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js'],
                            ['type' => 'js', 'path' => 'assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js'],
                            ['type' => 'js', 'path' => 'assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js'],
                            ['type' => 'js', 'path' => 'assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js'],
                            ['type' => 'js', 'path' => 'assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js'],
                            ['type' => 'js', 'path' => 'assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js'],
                            ['type' => 'js', 'path' => 'assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js'],

                            //THEME GLOBAL SCRIPTS
                            ['type' => 'js', 'path' => 'assets/global/scripts/app.min.js'],

                            //PAGE LEVEL SCRIPTS
                            ['type' => 'js', 'path' => 'assets/pages/scripts/dashboard.min.js'],

                            //THEME LAYOUT SCRIPTS
                            ['type' => 'js', 'path' => 'assets/layouts/layout3/scripts/layout.min.js'],
                            ['type' => 'js', 'path' => 'assets/layouts/layout3/scripts/demo.min.js'],
                            ['type' => 'js', 'path' => 'assets/layouts/global/scripts/quick-sidebar.min.js'],
                            ['type' => 'js', 'path' => 'assets/layouts/global/scripts/quick-nav.min.js'],
                        ],
                    ],
                ],
                'before_body_end' => [
                    'type' => 'core_template/container',
                ],
            ],
        ],
        'core_adminhtml_index_notFound' => [
            'template' => "layout/index.html.volt",
            'blocks' => [
                'head' => [
                    'actions' => [
                        'setTitle' => ["title" => "Not found | Backend"],
                        'addItem' => [
                            ['type' => 'css', 'path' => 'assets/pages/css/error.min.css'],
                        ]
                    ],
                ],
                'content' => [
                    'blocks' => [
                        'main_content' => [
                            'type' => 'core_template/template',
                            'template' => 'blocks/page/notfound.html.volt',
                        ],
                    ],
                ],
            ],
        ]
    ]
]);