<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <title>Metronic Admin Theme #3 | Dashboard</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #3 for dashboard & statistics" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
        {{ getChildHtml('head') }}
    </head>
    <body class="page-container-bg-solid page-md">
        <div class="page-wrapper">
            <div class="page-wrapper-row">
                <div class="page-wrapper-top">
                    <!-- BEGIN HEADER -->
                    {{ getChildHtml('header') }}
                    <!-- END HEADER -->
                </div>
            </div>
            <div class="page-wrapper-row full-height">
                <div class="page-wrapper-middle">
                    <!-- BEGIN CONTAINER -->
                    <div class="page-container">
                        <!-- BEGIN CONTENT -->
                        <div class="page-content-wrapper">
                            <!-- BEGIN CONTENT BODY -->
                            <!-- BEGIN PAGE HEAD-->
                            <div class="page-head">
                                <div class="container">
                                    <!-- BEGIN PAGE TITLE -->
                                    <div class="page-title">
                                        <h1>Dashboard
                                            <small>dashboard & statistics</small>
                                        </h1>
                                    </div>
                                    <!-- END PAGE TITLE -->
                                    <!-- BEGIN PAGE TOOLBAR -->
                                    <div class="page-toolbar">
                                        <!-- BEGIN THEME PANEL -->
                                        <div class="btn-group btn-theme-panel">
                                            <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon-settings"></i>
                                            </a>
                                            <div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <h3>THEME COLORS</h3>
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <ul class="theme-colors">
                                                                    <li class="theme-color theme-color-default" data-theme="default">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Default</span>
                                                                    </li>
                                                                    <li class="theme-color theme-color-blue-hoki" data-theme="blue-hoki">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Blue Hoki</span>
                                                                    </li>
                                                                    <li class="theme-color theme-color-blue-steel" data-theme="blue-steel">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Blue Steel</span>
                                                                    </li>
                                                                    <li class="theme-color theme-color-yellow-orange" data-theme="yellow-orange">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Orange</span>
                                                                    </li>
                                                                    <li class="theme-color theme-color-yellow-crusta" data-theme="yellow-crusta">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Yellow Crusta</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <ul class="theme-colors">
                                                                    <li class="theme-color theme-color-green-haze" data-theme="green-haze">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Green Haze</span>
                                                                    </li>
                                                                    <li class="theme-color theme-color-red-sunglo" data-theme="red-sunglo">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Red Sunglo</span>
                                                                    </li>
                                                                    <li class="theme-color theme-color-red-intense" data-theme="red-intense">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Red Intense</span>
                                                                    </li>
                                                                    <li class="theme-color theme-color-purple-plum" data-theme="purple-plum">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Purple Plum</span>
                                                                    </li>
                                                                    <li class="theme-color theme-color-purple-studio" data-theme="purple-studio">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Purple Studio</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 seperator">
                                                        <h3>LAYOUT</h3>
                                                        <ul class="theme-settings">
                                                            <li> Layout
                                                                <select class="theme-setting theme-setting-layout form-control input-sm input-small input-inline tooltips" data-original-title="Change layout type" data-container="body" data-placement="left">
                                                                    <option value="boxed" selected="selected">Boxed</option>
                                                                    <option value="fluid">Fluid</option>
                                                                </select>
                                                            </li>
                                                            <li> Top Menu Style
                                                                <select class="theme-setting theme-setting-top-menu-style form-control input-sm input-small input-inline tooltips" data-original-title="Change top menu dropdowns style" data-container="body"
                                                                    data-placement="left">
                                                                    <option value="dark" selected="selected">Dark</option>
                                                                    <option value="light">Light</option>
                                                                </select>
                                                            </li>
                                                            <li> Top Menu Mode
                                                                <select class="theme-setting theme-setting-top-menu-mode form-control input-sm input-small input-inline tooltips" data-original-title="Enable fixed(sticky) top menu" data-container="body"
                                                                    data-placement="left">
                                                                    <option value="fixed">Fixed</option>
                                                                    <option value="not-fixed" selected="selected">Not Fixed</option>
                                                                </select>
                                                            </li>
                                                            <li> Mega Menu Style
                                                                <select class="theme-setting theme-setting-mega-menu-style form-control input-sm input-small input-inline tooltips" data-original-title="Change mega menu dropdowns style" data-container="body"
                                                                    data-placement="left">
                                                                    <option value="dark" selected="selected">Dark</option>
                                                                    <option value="light">Light</option>
                                                                </select>
                                                            </li>
                                                            <li> Mega Menu Mode
                                                                <select class="theme-setting theme-setting-mega-menu-mode form-control input-sm input-small input-inline tooltips" data-original-title="Enable fixed(sticky) mega menu" data-container="body"
                                                                    data-placement="left">
                                                                    <option value="fixed" selected="selected">Fixed</option>
                                                                    <option value="not-fixed">Not Fixed</option>
                                                                </select>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END THEME PANEL -->
                                    </div>
                                    <!-- END PAGE TOOLBAR -->
                                </div>
                            </div>
                            <!-- END PAGE HEAD-->
                            <!-- BEGIN PAGE CONTENT BODY -->
                            <div class="page-content">
                                <div class="container">
                                    <!-- BEGIN PAGE BREADCRUMBS -->
                                    <ul class="page-breadcrumb breadcrumb">
                                        <li>
                                            <a href="index.html">Home</a>
                                            <i class="fa fa-circle"></i>
                                        </li>
                                        <li>
                                            <span>Dashboard</span>
                                        </li>
                                    </ul>
                                    <!-- END PAGE BREADCRUMBS -->
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
                                        <div class="mt-content-body">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="portlet light ">
                                                        <div class="portlet-title">
                                                            <div class="caption caption-md">
                                                                <i class="icon-bar-chart font-dark hide"></i>
                                                                <span class="caption-subject font-green-steel uppercase bold">Sales Summary</span>
                                                                <span class="caption-helper hide">weekly stats...</span>
                                                            </div>
                                                            <div class="actions">
                                                                <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                                    <label class="btn btn-transparent btn-no-border blue-oleo btn-outline btn-circle btn-sm active">
                                                                        <input type="radio" name="options" class="toggle" id="option1">Today</label>
                                                                    <label class="btn btn-transparent btn-no-border blue-oleo btn-outline btn-circle btn-sm">
                                                                        <input type="radio" name="options" class="toggle" id="option2">Week</label>
                                                                    <label class="btn btn-transparent btn-no-border blue-oleo btn-outline btn-circle btn-sm">
                                                                        <input type="radio" name="options" class="toggle" id="option2">Month</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div class="row list-separated">
                                                                <div class="col-md-3 col-sm-3 col-xs-6">
                                                                    <div class="font-grey-mint font-sm"> Total Sales </div>
                                                                    <div class="uppercase font-hg font-red-flamingo"> 13,760
                                                                        <span class="font-lg font-grey-mint">$</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-3 col-xs-6">
                                                                    <div class="font-grey-mint font-sm"> Revenue </div>
                                                                    <div class="uppercase font-hg theme-font"> 4,760
                                                                        <span class="font-lg font-grey-mint">$</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-3 col-xs-6">
                                                                    <div class="font-grey-mint font-sm"> Expenses </div>
                                                                    <div class="uppercase font-hg font-purple"> 11,760
                                                                        <span class="font-lg font-grey-mint">$</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-3 col-xs-6">
                                                                    <div class="font-grey-mint font-sm"> Growth </div>
                                                                    <div class="uppercase font-hg font-blue-sharp"> 9,760
                                                                        <span class="font-lg font-grey-mint">$</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <ul class="list-separated list-inline-xs hide">
                                                                <li>
                                                                    <div class="font-grey-mint font-sm"> Total Sales </div>
                                                                    <div class="uppercase font-hg font-red-flamingo"> 13,760
                                                                        <span class="font-lg font-grey-mint">$</span>
                                                                    </div>
                                                                </li>
                                                                <li> </li>
                                                                <li class="border">
                                                                    <div class="font-grey-mint font-sm"> Revenue </div>
                                                                    <div class="uppercase font-hg theme-font"> 4,760
                                                                        <span class="font-lg font-grey-mint">$</span>
                                                                    </div>
                                                                </li>
                                                                <li class="divider"> </li>
                                                                <li>
                                                                    <div class="font-grey-mint font-sm"> Expenses </div>
                                                                    <div class="uppercase font-hg font-purple"> 11,760
                                                                        <span class="font-lg font-grey-mint">$</span>
                                                                    </div>
                                                                </li>
                                                                <li class="divider"> </li>
                                                                <li>
                                                                    <div class="font-grey-mint font-sm"> Growth </div>
                                                                    <div class="uppercase font-hg font-blue-sharp"> 9,760
                                                                        <span class="font-lg font-grey-mint">$</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div id="sales_statistics" class="portlet-body-morris-fit morris-chart" style="height: 267px"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="portlet light ">
                                                        <div class="portlet-title">
                                                            <div class="caption caption-md">
                                                                <i class="icon-bar-chart font-dark hide"></i>
                                                                <span class="caption-subject font-green-steel bold uppercase">Member Activity</span>
                                                                <span class="caption-helper">weekly stats...</span>
                                                            </div>
                                                            <div class="actions">
                                                                <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                                    <label class="btn btn-transparent blue-oleo btn-no-border btn-outline btn-circle btn-sm active">
                                                                        <input type="radio" name="options" class="toggle" id="option1">Today</label>
                                                                    <label class="btn btn-transparent blue-oleo btn-no-border btn-outline btn-circle btn-sm">
                                                                        <input type="radio" name="options" class="toggle" id="option2">Week</label>
                                                                    <label class="btn btn-transparent blue-oleo btn-no-border btn-outline btn-circle btn-sm">
                                                                        <input type="radio" name="options" class="toggle" id="option2">Month</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div class="row number-stats margin-bottom-30">
                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                    <div class="stat-left">
                                                                        <div class="stat-chart">
                                                                            <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                                                            <div id="sparkline_bar"></div>
                                                                        </div>
                                                                        <div class="stat-number">
                                                                            <div class="title"> Total </div>
                                                                            <div class="number"> 2460 </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                    <div class="stat-right">
                                                                        <div class="stat-chart">
                                                                            <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                                                            <div id="sparkline_bar2"></div>
                                                                        </div>
                                                                        <div class="stat-number">
                                                                            <div class="title"> New </div>
                                                                            <div class="number"> 719 </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="table-scrollable table-scrollable-borderless">
                                                                <table class="table table-hover table-light">
                                                                    <thead>
                                                                        <tr class="uppercase">
                                                                            <th colspan="2"> MEMBER </th>
                                                                            <th> Earnings </th>
                                                                            <th> CASES </th>
                                                                            <th> CLOSED </th>
                                                                            <th> RATE </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tr>
                                                                        <td class="fit">
                                                                            <img class="user-pic rounded" src="../assets/pages/media/users/avatar4.jpg"> </td>
                                                                        <td>
                                                                            <a href="javascript:;" class="primary-link">Brain</a>
                                                                        </td>
                                                                        <td> $345 </td>
                                                                        <td> 45 </td>
                                                                        <td> 124 </td>
                                                                        <td>
                                                                            <span class="bold theme-font">80%</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fit">
                                                                            <img class="user-pic rounded" src="../assets/pages/media/users/avatar5.jpg"> </td>
                                                                        <td>
                                                                            <a href="javascript:;" class="primary-link">Nick</a>
                                                                        </td>
                                                                        <td> $560 </td>
                                                                        <td> 12 </td>
                                                                        <td> 24 </td>
                                                                        <td>
                                                                            <span class="bold theme-font">67%</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fit">
                                                                            <img class="user-pic rounded" src="../assets/pages/media/users/avatar6.jpg"> </td>
                                                                        <td>
                                                                            <a href="javascript:;" class="primary-link">Tim</a>
                                                                        </td>
                                                                        <td> $1,345 </td>
                                                                        <td> 450 </td>
                                                                        <td> 46 </td>
                                                                        <td>
                                                                            <span class="bold theme-font">98%</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fit">
                                                                            <img class="user-pic rounded" src="../assets/pages/media/users/avatar7.jpg"> </td>
                                                                        <td>
                                                                            <a href="javascript:;" class="primary-link">Tom</a>
                                                                        </td>
                                                                        <td> $645 </td>
                                                                        <td> 50 </td>
                                                                        <td> 89 </td>
                                                                        <td>
                                                                            <span class="bold theme-font">58%</span>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="portlet light tasks-widget ">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="icon-share font-dark hide"></i>
                                                                <span class="caption-subject font-green-steel bold uppercase">Tasks</span>
                                                                <span class="caption-helper">tasks summary...</span>
                                                            </div>
                                                            <div class="actions">
                                                                <div class="btn-group">
                                                                    <a class="btn blue-oleo btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> More
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu pull-right">
                                                                        <li>
                                                                            <a href="javascript:;"> All Project </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;"> AirAsia </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Cruise </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;"> HSBC </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Pending
                                                                                <span class="badge badge-danger"> 4 </span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Completed
                                                                                <span class="badge badge-success"> 12 </span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;"> Overdue
                                                                                <span class="badge badge-warning"> 9 </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div class="task-content">
                                                                <div class="scroller" style="height: 312px;" data-always-visible="1" data-rail-visible1="1">
                                                                    <!-- START TASK LIST -->
                                                                    <ul class="task-list">
                                                                        <li>
                                                                            <div class="task-checkbox">
                                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="task-title">
                                                                                <span class="task-title-sp"> Present 2013 Year IPO Statistics at Board Meeting </span>
                                                                                <span class="label label-sm label-success">Company</span>
                                                                                <span class="task-bell">
                                                                                    <i class="fa fa-bell-o"></i>
                                                                                </span>
                                                                            </div>
                                                                            <div class="task-config">
                                                                                <div class="task-config-btn btn-group">
                                                                                    <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                                        <i class="fa fa-cog"></i>
                                                                                        <i class="fa fa-angle-down"></i>
                                                                                    </a>
                                                                                    <ul class="dropdown-menu pull-right">
                                                                                        <li>
                                                                                            <a href="javascript:;">
                                                                                                <i class="fa fa-check"></i> Complete </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="javascript:;">
                                                                                                <i class="fa fa-pencil"></i> Edit </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="javascript:;">
                                                                                                <i class="fa fa-trash-o"></i> Cancel </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="task-checkbox">
                                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="task-title">
                                                                                <span class="task-title-sp"> Hold An Interview for Marketing Manager Position </span>
                                                                                <span class="label label-sm label-danger">Marketing</span>
                                                                            </div>
                                                                            <div class="task-config">
                                                                                <div class="task-config-btn btn-group">
                                                                                    <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                                        <i class="fa fa-cog"></i>
                                                                                        <i class="fa fa-angle-down"></i>
                                                                                    </a>
                                                                                    <ul class="dropdown-menu pull-right">
                                                                                        <li>
                                                                                            <a href="javascript:;">
                                                                                                <i class="fa fa-check"></i> Complete </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="javascript:;">
                                                                                                <i class="fa fa-pencil"></i> Edit </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="javascript:;">
                                                                                                <i class="fa fa-trash-o"></i> Cancel </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="task-checkbox">
                                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="task-title">
                                                                                <span class="task-title-sp"> AirAsia Intranet System Project Internal Meeting </span>
                                                                                <span class="label label-sm label-success">AirAsia</span>
                                                                                <span class="task-bell">
                                                                                    <i class="fa fa-bell-o"></i>
                                                                                </span>
                                                                            </div>
                                                                            <div class="task-config">
                                                                                <div class="task-config-btn btn-group">
                                                                                    <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                                        <i class="fa fa-cog"></i>
                                                                                        <i class="fa fa-angle-down"></i>
                                                                                    </a>
                                                                                    <ul class="dropdown-menu pull-right">
                                                                                        <li>
                                                                                            <a href="javascript:;">
                                                                                                <i class="fa fa-check"></i> Complete </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="javascript:;">
                                                                                                <i class="fa fa-pencil"></i> Edit </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="javascript:;">
                                                                                                <i class="fa fa-trash-o"></i> Cancel </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="task-checkbox">
                                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="task-title">
                                                                                <span class="task-title-sp"> Technical Management Meeting </span>
                                                                                <span class="label label-sm label-warning">Company</span>
                                                                            </div>
                                                                            <div class="task-config">
                                                                                <div class="task-config-btn btn-group">
                                                                                    <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                                        <i class="fa fa-cog"></i>
                                                                                        <i class="fa fa-angle-down"></i>
                                                                                    </a>
                                                                                    <ul class="dropdown-menu pull-right">
                                                                                        <li>
                                                                                            <a href="javascript:;">
                                                                                                <i class="fa fa-check"></i> Complete </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="javascript:;">
                                                                                                <i class="fa fa-pencil"></i> Edit </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="javascript:;">
                                                                                                <i class="fa fa-trash-o"></i> Cancel </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="task-checkbox">
                                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="task-title">
                                                                                <span class="task-title-sp"> Kick-off Company CRM Mobile App Development </span>
                                                                                <span class="label label-sm label-info">Internal Products</span>
                                                                            </div>
                                                                            <div class="task-config">
                                                                                <div class="task-config-btn btn-group">
                                                                                    <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                                        <i class="fa fa-cog"></i>
                                                                                        <i class="fa fa-angle-down"></i>
                                                                                    </a>
                                                                                    <ul class="dropdown-menu pull-right">
                                                                                        <li>
                                                                                            <a href="javascript:;">
                                                                                                <i class="fa fa-check"></i> Complete </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="javascript:;">
                                                                                                <i class="fa fa-pencil"></i> Edit </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="javascript:;">
                                                                                                <i class="fa fa-trash-o"></i> Cancel </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="task-checkbox">
                                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="task-title">
                                                                                <span class="task-title-sp"> Prepare Commercial Offer For SmartVision Website Rewamp </span>
                                                                                <span class="label label-sm label-danger">SmartVision</span>
                                                                            </div>
                                                                            <div class="task-config">
                                                                                <div class="task-config-btn btn-group">
                                                                                    <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                                        <i class="fa fa-cog"></i>
                                                                                        <i class="fa fa-angle-down"></i>
                                                                                    </a>
                                                                                    <ul class="dropdown-menu pull-right">
                                                                                        <li>
                                                                                            <a href="javascript:;">
                                                                                                <i class="fa fa-check"></i> Complete </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="javascript:;">
                                                                                                <i class="fa fa-pencil"></i> Edit </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="javascript:;">
                                                                                                <i class="fa fa-trash-o"></i> Cancel </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="task-checkbox">
                                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="task-title">
                                                                                <span class="task-title-sp"> Sign-Off The Comercial Agreement With AutoSmart </span>
                                                                                <span class="label label-sm label-default">AutoSmart</span>
                                                                                <span class="task-bell">
                                                                                    <i class="fa fa-bell-o"></i>
                                                                                </span>
                                                                            </div>
                                                                            <div class="task-config">
                                                                                <div class="task-config-btn btn-group dropup">
                                                                                    <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                                        <i class="fa fa-cog"></i>
                                                                                        <i class="fa fa-angle-down"></i>
                                                                                    </a>
                                                                                    <ul class="dropdown-menu pull-right">
                                                                                        <li>
                                                                                            <a href="javascript:;">
                                                                                                <i class="fa fa-check"></i> Complete </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="javascript:;">
                                                                                                <i class="fa fa-pencil"></i> Edit </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="javascript:;">
                                                                                                <i class="fa fa-trash-o"></i> Cancel </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="task-checkbox">
                                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="task-title">
                                                                                <span class="task-title-sp"> Company Staff Meeting </span>
                                                                                <span class="label label-sm label-success">Cruise</span>
                                                                                <span class="task-bell">
                                                                                    <i class="fa fa-bell-o"></i>
                                                                                </span>
                                                                            </div>
                                                                            <div class="task-config">
                                                                                <div class="task-config-btn btn-group dropup">
                                                                                    <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                                        <i class="fa fa-cog"></i>
                                                                                        <i class="fa fa-angle-down"></i>
                                                                                    </a>
                                                                                    <ul class="dropdown-menu pull-right">
                                                                                        <li>
                                                                                            <a href="javascript:;">
                                                                                                <i class="fa fa-check"></i> Complete </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="javascript:;">
                                                                                                <i class="fa fa-pencil"></i> Edit </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="javascript:;">
                                                                                                <i class="fa fa-trash-o"></i> Cancel </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="last-line">
                                                                            <div class="task-checkbox">
                                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="task-title">
                                                                                <span class="task-title-sp"> KeenThemes Investment Discussion </span>
                                                                                <span class="label label-sm label-warning">KeenThemes </span>
                                                                            </div>
                                                                            <div class="task-config">
                                                                                <div class="task-config-btn btn-group dropup">
                                                                                    <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                                        <i class="fa fa-cog"></i>
                                                                                        <i class="fa fa-angle-down"></i>
                                                                                    </a>
                                                                                    <ul class="dropdown-menu pull-right">
                                                                                        <li>
                                                                                            <a href="javascript:;">
                                                                                                <i class="fa fa-check"></i> Complete </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="javascript:;">
                                                                                                <i class="fa fa-pencil"></i> Edit </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="javascript:;">
                                                                                                <i class="fa fa-trash-o"></i> Cancel </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                    <!-- END START TASK LIST -->
                                                                </div>
                                                            </div>
                                                            <div class="task-footer">
                                                                <div class="btn-arrow-link pull-right">
                                                                    <a href="javascript:;">See All Records</a>
                                                                    <i class="icon-arrow-right"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="portlet light ">
                                                        <div class="portlet-title">
                                                            <div class="caption caption-md">
                                                                <i class="icon-bar-chart font-dark hide"></i>
                                                                <span class="caption-subject font-green-steel bold uppercase">Customer Support</span>
                                                                <span class="caption-helper">45 pending</span>
                                                            </div>
                                                            <div class="inputs">
                                                                <div class="portlet-input input-inline input-small ">
                                                                    <div class="input-icon right">
                                                                        <i class="icon-magnifier"></i>
                                                                        <input type="text" class="form-control form-control-solid input-circle" placeholder="search..."> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div class="scroller" style="height: 338px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                                                <div class="general-item-list">
                                                                    <div class="item">
                                                                        <div class="item-head">
                                                                            <div class="item-details">
                                                                                <img class="item-pic rounded" src="../assets/pages/media/users/avatar4.jpg">
                                                                                <a href="" class="item-name primary-link">Nick Larson</a>
                                                                                <span class="item-label">3 hrs ago</span>
                                                                            </div>
                                                                            <span class="item-status">
                                                                                <span class="badge badge-empty badge-success"></span> Open</span>
                                                                        </div>
                                                                        <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="item-head">
                                                                            <div class="item-details">
                                                                                <img class="item-pic rounded" src="../assets/pages/media/users/avatar3.jpg">
                                                                                <a href="" class="item-name primary-link">Mark</a>
                                                                                <span class="item-label">5 hrs ago</span>
                                                                            </div>
                                                                            <span class="item-status">
                                                                                <span class="badge badge-empty badge-warning"></span> Pending</span>
                                                                        </div>
                                                                        <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat tincidunt ut laoreet. </div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="item-head">
                                                                            <div class="item-details">
                                                                                <img class="item-pic rounded" src="../assets/pages/media/users/avatar6.jpg">
                                                                                <a href="" class="item-name primary-link">Nick Larson</a>
                                                                                <span class="item-label">8 hrs ago</span>
                                                                            </div>
                                                                            <span class="item-status">
                                                                                <span class="badge badge-empty badge-primary"></span> Closed</span>
                                                                        </div>
                                                                        <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh. </div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="item-head">
                                                                            <div class="item-details">
                                                                                <img class="item-pic rounded" src="../assets/pages/media/users/avatar7.jpg">
                                                                                <a href="" class="item-name primary-link">Nick Larson</a>
                                                                                <span class="item-label">12 hrs ago</span>
                                                                            </div>
                                                                            <span class="item-status">
                                                                                <span class="badge badge-empty badge-danger"></span> Pending</span>
                                                                        </div>
                                                                        <div class="item-body"> Consectetuer adipiscing elit Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="item-head">
                                                                            <div class="item-details">
                                                                                <img class="item-pic rounded" src="../assets/pages/media/users/avatar9.jpg">
                                                                                <a href="" class="item-name primary-link">Richard Stone</a>
                                                                                <span class="item-label">2 days ago</span>
                                                                            </div>
                                                                            <span class="item-status">
                                                                                <span class="badge badge-empty badge-danger"></span> Open</span>
                                                                        </div>
                                                                        <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, ut laoreet dolore magna aliquam erat volutpat. </div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="item-head">
                                                                            <div class="item-details">
                                                                                <img class="item-pic rounded" src="../assets/pages/media/users/avatar8.jpg">
                                                                                <a href="" class="item-name primary-link">Dan</a>
                                                                                <span class="item-label">3 days ago</span>
                                                                            </div>
                                                                            <span class="item-status">
                                                                                <span class="badge badge-empty badge-warning"></span> Pending</span>
                                                                        </div>
                                                                        <div class="item-body"> Lorem ipsum dolor sit amet, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="item-head">
                                                                            <div class="item-details">
                                                                                <img class="item-pic rounded" src="../assets/pages/media/users/avatar2.jpg">
                                                                                <a href="" class="item-name primary-link">Larry</a>
                                                                                <span class="item-label">4 hrs ago</span>
                                                                            </div>
                                                                            <span class="item-status">
                                                                                <span class="badge badge-empty badge-success"></span> Open</span>
                                                                        </div>
                                                                        <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <!-- BEGIN REGIONAL STATS PORTLET-->
                                                    <div class="portlet light ">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="icon-share font-dark hide"></i>
                                                                <span class="caption-subject font-green-steel bold uppercase">Regional Stats</span>
                                                            </div>
                                                            <div class="actions">
                                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                                    <i class="icon-cloud-upload"></i>
                                                                </a>
                                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                                    <i class="icon-wrench"></i>
                                                                </a>
                                                                <a class="btn btn-circle btn-icon-only btn-default fullscreen" data-container="false" data-placement="bottom" href="javascript:;"> </a>
                                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                                    <i class="icon-trash"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div id="region_statistics_loading">
                                                                <img src="../assets/global/img/loading.gif" alt="loading" /> </div>
                                                            <div id="region_statistics_content" class="display-none">
                                                                <div class="btn-toolbar margin-bottom-10">
                                                                    <div class="btn-group btn-group-circle" data-toggle="buttons">
                                                                        <a href="" class="btn grey-salsa btn-sm active"> Users </a>
                                                                        <a href="" class="btn grey-salsa btn-sm"> Orders </a>
                                                                    </div>
                                                                    <div class="btn-group pull-right">
                                                                        <a href="" class="btn btn-circle grey-salsa btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Select Region
                                                                            <span class="fa fa-angle-down"> </span>
                                                                        </a>
                                                                        <ul class="dropdown-menu pull-right">
                                                                            <li>
                                                                                <a href="javascript:;" id="regional_stat_world"> World </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:;" id="regional_stat_usa"> USA </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:;" id="regional_stat_europe"> Europe </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:;" id="regional_stat_russia"> Russia </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:;" id="regional_stat_germany"> Germany </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div id="vmap_world" class="vmaps display-none"> </div>
                                                                <div id="vmap_usa" class="vmaps display-none"> </div>
                                                                <div id="vmap_europe" class="vmaps display-none"> </div>
                                                                <div id="vmap_russia" class="vmaps display-none"> </div>
                                                                <div id="vmap_germany" class="vmaps display-none"> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END REGIONAL STATS PORTLET-->
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <!-- BEGIN PORTLET-->
                                                    <div class="portlet light ">
                                                        <div class="portlet-title tabbable-line">
                                                            <div class="caption">
                                                                <i class="icon-globe font-dark hide"></i>
                                                                <span class="caption-subject font-green-steel bold uppercase">Feeds</span>
                                                            </div>
                                                            <ul class="nav nav-tabs">
                                                                <li class="active">
                                                                    <a href="#tab_1_1" class="active" data-toggle="tab"> System </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#tab_1_2" data-toggle="tab"> Activities </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <!--BEGIN TABS-->
                                                            <div class="tab-content">
                                                                <div class="tab-pane active" id="tab_1_1">
                                                                    <div class="scroller" style="height: 339px;" data-always-visible="1" data-rail-visible="0">
                                                                        <ul class="feeds">
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-sm label-success">
                                                                                                <i class="fa fa-bell-o"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> You have 4 pending tasks.
                                                                                                <span class="label label-sm label-info"> Take action
                                                                                                    <i class="fa fa-share"></i>
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> Just now </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:;">
                                                                                    <div class="col1">
                                                                                        <div class="cont">
                                                                                            <div class="cont-col1">
                                                                                                <div class="label label-sm label-success">
                                                                                                    <i class="fa fa-bell-o"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="cont-col2">
                                                                                                <div class="desc"> New version v1.4 just lunched! </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col2">
                                                                                        <div class="date"> 20 mins </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-sm label-danger">
                                                                                                <i class="fa fa-bolt"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> Database server #12 overloaded. Please fix the issue. </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 24 mins </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-sm label-info">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 30 mins </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-sm label-success">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 40 mins </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-sm label-warning">
                                                                                                <i class="fa fa-plus"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> New user registered. </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 1.5 hours </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-sm label-success">
                                                                                                <i class="fa fa-bell-o"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> Web server hardware needs to be upgraded.
                                                                                                <span class="label label-sm label-default "> Overdue </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 2 hours </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-sm label-default">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 3 hours </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-sm label-warning">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 5 hours </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-sm label-info">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 18 hours </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-sm label-default">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 21 hours </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-sm label-info">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 22 hours </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-sm label-default">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 21 hours </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-sm label-info">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 22 hours </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-sm label-default">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 21 hours </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-sm label-info">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 22 hours </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-sm label-default">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 21 hours </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-sm label-info">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 22 hours </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="tab_1_2">
                                                                    <div class="scroller" style="height: 290px;" data-always-visible="1" data-rail-visible1="1">
                                                                        <ul class="feeds">
                                                                            <li>
                                                                                <a href="javascript:;">
                                                                                    <div class="col1">
                                                                                        <div class="cont">
                                                                                            <div class="cont-col1">
                                                                                                <div class="label label-sm label-success">
                                                                                                    <i class="fa fa-bell-o"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="cont-col2">
                                                                                                <div class="desc"> New user registered </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col2">
                                                                                        <div class="date"> Just now </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:;">
                                                                                    <div class="col1">
                                                                                        <div class="cont">
                                                                                            <div class="cont-col1">
                                                                                                <div class="label label-sm label-success">
                                                                                                    <i class="fa fa-bell-o"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="cont-col2">
                                                                                                <div class="desc"> New order received </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col2">
                                                                                        <div class="date"> 10 mins </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-sm label-danger">
                                                                                                <i class="fa fa-bolt"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> Order #24DOP4 has been rejected.
                                                                                                <span class="label label-sm label-danger "> Take action
                                                                                                    <i class="fa fa-share"></i>
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 24 mins </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:;">
                                                                                    <div class="col1">
                                                                                        <div class="cont">
                                                                                            <div class="cont-col1">
                                                                                                <div class="label label-sm label-success">
                                                                                                    <i class="fa fa-bell-o"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="cont-col2">
                                                                                                <div class="desc"> New user registered </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col2">
                                                                                        <div class="date"> Just now </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:;">
                                                                                    <div class="col1">
                                                                                        <div class="cont">
                                                                                            <div class="cont-col1">
                                                                                                <div class="label label-sm label-success">
                                                                                                    <i class="fa fa-bell-o"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="cont-col2">
                                                                                                <div class="desc"> New user registered </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col2">
                                                                                        <div class="date"> Just now </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:;">
                                                                                    <div class="col1">
                                                                                        <div class="cont">
                                                                                            <div class="cont-col1">
                                                                                                <div class="label label-sm label-success">
                                                                                                    <i class="fa fa-bell-o"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="cont-col2">
                                                                                                <div class="desc"> New user registered </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col2">
                                                                                        <div class="date"> Just now </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:;">
                                                                                    <div class="col1">
                                                                                        <div class="cont">
                                                                                            <div class="cont-col1">
                                                                                                <div class="label label-sm label-success">
                                                                                                    <i class="fa fa-bell-o"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="cont-col2">
                                                                                                <div class="desc"> New user registered </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col2">
                                                                                        <div class="date"> Just now </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:;">
                                                                                    <div class="col1">
                                                                                        <div class="cont">
                                                                                            <div class="cont-col1">
                                                                                                <div class="label label-sm label-success">
                                                                                                    <i class="fa fa-bell-o"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="cont-col2">
                                                                                                <div class="desc"> New user registered </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col2">
                                                                                        <div class="date"> Just now </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:;">
                                                                                    <div class="col1">
                                                                                        <div class="cont">
                                                                                            <div class="cont-col1">
                                                                                                <div class="label label-sm label-success">
                                                                                                    <i class="fa fa-bell-o"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="cont-col2">
                                                                                                <div class="desc"> New user registered </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col2">
                                                                                        <div class="date"> Just now </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:;">
                                                                                    <div class="col1">
                                                                                        <div class="cont">
                                                                                            <div class="cont-col1">
                                                                                                <div class="label label-sm label-success">
                                                                                                    <i class="fa fa-bell-o"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="cont-col2">
                                                                                                <div class="desc"> New user registered </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col2">
                                                                                        <div class="date"> Just now </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--END TABS-->
                                                        </div>
                                                    </div>
                                                    <!-- END PORTLET-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END PAGE CONTENT INNER -->
                                </div>
                            </div>
                            <!-- END PAGE CONTENT BODY -->
                            <!-- END CONTENT BODY -->
                        </div>
                        <!-- END CONTENT -->
                        <!-- BEGIN QUICK SIDEBAR -->
                        <a href="javascript:;" class="page-quick-sidebar-toggler">
                            <i class="icon-login"></i>
                        </a>
                        <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
                            <div class="page-quick-sidebar">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                                            <span class="badge badge-danger">2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                                            <span class="badge badge-success">7</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                                    <i class="icon-bell"></i> Alerts </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                                    <i class="icon-info"></i> Notifications </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                                    <i class="icon-speech"></i> Activities </a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                                    <i class="icon-settings"></i> Settings </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                                        <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                                            <h3 class="list-heading">Staff</h3>
                                            <ul class="media-list list-items">
                                                <li class="media">
                                                    <div class="media-status">
                                                        <span class="badge badge-success">8</span>
                                                    </div>
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar3.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Bob Nilson</h4>
                                                        <div class="media-heading-sub"> Project Manager </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar1.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Nick Larson</h4>
                                                        <div class="media-heading-sub"> Art Director </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="media-status">
                                                        <span class="badge badge-danger">3</span>
                                                    </div>
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar4.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Deon Hubert</h4>
                                                        <div class="media-heading-sub"> CTO </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar2.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Ella Wong</h4>
                                                        <div class="media-heading-sub"> CEO </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <h3 class="list-heading">Customers</h3>
                                            <ul class="media-list list-items">
                                                <li class="media">
                                                    <div class="media-status">
                                                        <span class="badge badge-warning">2</span>
                                                    </div>
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar6.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Lara Kunis</h4>
                                                        <div class="media-heading-sub"> CEO, Loop Inc </div>
                                                        <div class="media-heading-small"> Last seen 03:10 AM </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="media-status">
                                                        <span class="label label-sm label-success">new</span>
                                                    </div>
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar7.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Ernie Kyllonen</h4>
                                                        <div class="media-heading-sub"> Project Manager,
                                                            <br> SmartBizz PTL </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar8.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Lisa Stone</h4>
                                                        <div class="media-heading-sub"> CTO, Keort Inc </div>
                                                        <div class="media-heading-small"> Last seen 13:10 PM </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="media-status">
                                                        <span class="badge badge-success">7</span>
                                                    </div>
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar9.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Deon Portalatin</h4>
                                                        <div class="media-heading-sub"> CFO, H&D LTD </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar10.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Irina Savikova</h4>
                                                        <div class="media-heading-sub"> CEO, Tizda Motors Inc </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="media-status">
                                                        <span class="badge badge-danger">4</span>
                                                    </div>
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar11.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Maria Gomez</h4>
                                                        <div class="media-heading-sub"> Manager, Infomatic Inc </div>
                                                        <div class="media-heading-small"> Last seen 03:10 AM </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="page-quick-sidebar-item">
                                            <div class="page-quick-sidebar-chat-user">
                                                <div class="page-quick-sidebar-nav">
                                                    <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                                        <i class="icon-arrow-left"></i>Back</a>
                                                </div>
                                                <div class="page-quick-sidebar-chat-user-messages">
                                                    <div class="post out">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                            <span class="datetime">20:15</span>
                                                            <span class="body"> When could you send me the report ? </span>
                                                        </div>
                                                    </div>
                                                    <div class="post in">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Ella Wong</a>
                                                            <span class="datetime">20:15</span>
                                                            <span class="body"> Its almost done. I will be sending it shortly </span>
                                                        </div>
                                                    </div>
                                                    <div class="post out">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                            <span class="datetime">20:15</span>
                                                            <span class="body"> Alright. Thanks! :) </span>
                                                        </div>
                                                    </div>
                                                    <div class="post in">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Ella Wong</a>
                                                            <span class="datetime">20:16</span>
                                                            <span class="body"> You are most welcome. Sorry for the delay. </span>
                                                        </div>
                                                    </div>
                                                    <div class="post out">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                            <span class="datetime">20:17</span>
                                                            <span class="body"> No probs. Just take your time :) </span>
                                                        </div>
                                                    </div>
                                                    <div class="post in">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Ella Wong</a>
                                                            <span class="datetime">20:40</span>
                                                            <span class="body"> Alright. I just emailed it to you. </span>
                                                        </div>
                                                    </div>
                                                    <div class="post out">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                            <span class="datetime">20:17</span>
                                                            <span class="body"> Great! Thanks. Will check it right away. </span>
                                                        </div>
                                                    </div>
                                                    <div class="post in">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Ella Wong</a>
                                                            <span class="datetime">20:40</span>
                                                            <span class="body"> Please let me know if you have any comment. </span>
                                                        </div>
                                                    </div>
                                                    <div class="post out">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                            <span class="datetime">20:17</span>
                                                            <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="page-quick-sidebar-chat-user-form">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Type a message here...">
                                                        <div class="input-group-btn">
                                                            <button type="button" class="btn green">
                                                                <i class="icon-paper-clip"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                                        <div class="page-quick-sidebar-alerts-list">
                                            <h3 class="list-heading">General</h3>
                                            <ul class="feeds list-items">
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-check"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 4 pending tasks.
                                                                    <span class="label label-sm label-warning "> Take action
                                                                        <i class="fa fa-share"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> Just now </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-success">
                                                                        <i class="fa fa-bar-chart-o"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 20 mins </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-danger">
                                                                    <i class="fa fa-user"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 24 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> New order received with
                                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 30 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-success">
                                                                    <i class="fa fa-user"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 24 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-bell-o"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> Web server hardware needs to be upgraded.
                                                                    <span class="label label-sm label-warning"> Overdue </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 2 hours </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-default">
                                                                        <i class="fa fa-briefcase"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 20 mins </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <h3 class="list-heading">System</h3>
                                            <ul class="feeds list-items">
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-check"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 4 pending tasks.
                                                                    <span class="label label-sm label-warning "> Take action
                                                                        <i class="fa fa-share"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> Just now </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-danger">
                                                                        <i class="fa fa-bar-chart-o"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 20 mins </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-default">
                                                                    <i class="fa fa-user"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 24 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> New order received with
                                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 30 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-success">
                                                                    <i class="fa fa-user"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 24 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-warning">
                                                                    <i class="fa fa-bell-o"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> Web server hardware needs to be upgraded.
                                                                    <span class="label label-sm label-default "> Overdue </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 2 hours </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-info">
                                                                        <i class="fa fa-briefcase"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 20 mins </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                                        <div class="page-quick-sidebar-settings-list">
                                            <h3 class="list-heading">General Settings</h3>
                                            <ul class="list-items borderless">
                                                <li> Enable Notifications
                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                <li> Allow Tracking
                                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                <li> Log Errors
                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                <li> Auto Sumbit Issues
                                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                <li> Enable SMS Alerts
                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                            </ul>
                                            <h3 class="list-heading">System Settings</h3>
                                            <ul class="list-items borderless">
                                                <li> Security Level
                                                    <select class="form-control input-inline input-sm input-small">
                                                        <option value="1">Normal</option>
                                                        <option value="2" selected>Medium</option>
                                                        <option value="e">High</option>
                                                    </select>
                                                </li>
                                                <li> Failed Email Attempts
                                                    <input class="form-control input-inline input-sm input-small" value="5" /> </li>
                                                <li> Secondary SMTP Port
                                                    <input class="form-control input-inline input-sm input-small" value="3560" /> </li>
                                                <li> Notify On System Error
                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                <li> Notify On SMTP Error
                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                            </ul>
                                            <div class="inner-content">
                                                <button class="btn btn-success">
                                                    <i class="icon-settings"></i> Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END QUICK SIDEBAR -->
                    </div>
                    <!-- END CONTAINER -->
                </div>
            </div>
            <div class="page-wrapper-row">
                <div class="page-wrapper-bottom">
                    <!-- BEGIN FOOTER -->
                    <!-- BEGIN PRE-FOOTER -->
                    <div class="page-prefooter">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>About</h2>
                                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam dolore. </p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs12 footer-block">
                                    <h2>Subscribe Email</h2>
                                    <div class="subscribe-form">
                                        <form action="javascript:;">
                                            <div class="input-group">
                                                <input type="text" placeholder="mail@email.com" class="form-control">
                                                <span class="input-group-btn">
                                                    <button class="btn" type="submit">Submit</button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>Follow Us On</h2>
                                    <ul class="social-icons">
                                        <li>
                                            <a href="javascript:;" data-original-title="rss" class="rss"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="facebook" class="facebook"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="twitter" class="twitter"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="googleplus" class="googleplus"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="linkedin" class="linkedin"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="youtube" class="youtube"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="vimeo" class="vimeo"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>Contacts</h2>
                                    <address class="margin-bottom-40"> Phone: 800 123 3456
                                        <br> Email:
                                        <a href="mailto:info@metronic.com">info@metronic.com</a>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PRE-FOOTER -->
                    <!-- BEGIN INNER FOOTER -->
                    <div class="page-footer">
                        <div class="container"> 2016 &copy; Metronic Theme By
                            <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
                            <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
                        </div>
                    </div>
                    <div class="scroll-to-top">
                        <i class="icon-arrow-up"></i>
                    </div>
                    <!-- END INNER FOOTER -->
                    <!-- END FOOTER -->
                </div>
            </div>
        </div>
        <!-- BEGIN QUICK NAV -->
        <nav class="quick-nav">
            <a class="quick-nav-trigger" href="#0">
                <span aria-hidden="true"></span>
            </a>
            <ul>
                <li>
                    <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank" class="active">
                        <span>Purchase Metronic</span>
                        <i class="icon-basket"></i>
                    </a>
                </li>
                <li>
                    <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/reviews/4021469?ref=keenthemes" target="_blank">
                        <span>Customer Reviews</span>
                        <i class="icon-users"></i>
                    </a>
                </li>
                <li>
                    <a href="http://keenthemes.com/showcast/" target="_blank">
                        <span>Showcase</span>
                        <i class="icon-user"></i>
                    </a>
                </li>
                <li>
                    <a href="http://keenthemes.com/metronic-theme/changelog/" target="_blank">
                        <span>Changelog</span>
                        <i class="icon-graph"></i>
                    </a>
                </li>
            </ul>
            <span aria-hidden="true" class="quick-nav-bg"></span>
        </nav>
        <div class="quick-nav-overlay"></div>
        <!-- END QUICK NAV -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>