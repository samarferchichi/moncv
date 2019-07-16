﻿<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Samar FERCHICHI</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset("/AdminBSBMaterialDesign-master/css/style.min.css") }}">
    <link rel="stylesheet" href="{{ asset("/AdminBSBMaterialDesign-master/css/materialize.css") }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("/AdminBSBMaterialDesign-master/plugins/bootstrap/css/bootstrap.css") }}">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset("/AdminBSBMaterialDesign-master/plugins/node-waves/waves.css") }}">

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset("/AdminBSBMaterialDesign-master/plugins/animate-css/animate.css") }}">

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset("/AdminBSBMaterialDesign-master/plugins/morrisjs/morris.css") }}">

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("/AdminBSBMaterialDesign-master/css/style.css") }}">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset("/AdminBSBMaterialDesign-master/css/themes/all-themes.css") }}">

</head>

<body class="theme-red">
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="/">ADMIN SAMAR-FER - MATERIAL DESIGN</a>
                </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>4 sales made</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy Doe</b> deleted account</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">mode_edit</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy</b> changed name</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> commented your post</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">cached</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> updated status</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-purple">
                                                <i class="material-icons">settings</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Settings updated</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">TASKS</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Footer display issue
                                                <small>32%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Make new buttons
                                                <small>45%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Create new dashboard
                                                <small>54%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Solve transition issue
                                                <small>65%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Answer GitHub questions
                                                <small>92%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../../images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->

            @include('menu')
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>BASIC FORM ELEMENTS</h2>
            </div>
            <!-- Switch Button -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                SWITCH BUTTON
                                <small>Taken from <a href="http://materializecss.com/" target="_blank">materializecss.com</a></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title">Basic Examples</h2>
                            <div class="demo-switch">
                                <div class="switch">
                                    <label>OFF<input type="checkbox" checked><span class="lever"></span>ON</label>
                                </div>
                                <div class="switch">
                                    <label>DISABLED<input type="checkbox" disabled><span class="lever"></span></label>
                                </div>
                            </div>

                            <h2 class="card-inside-title">
                                With Material Design Colors
                                <small>You can use material design colors which examples are <code>.switch-col-pink, .switch-col-teal</code> class</small>
                            </h2>
                            <div class="demo-switch">
                                <div class="row clearfix">
                                    <div class="col-sm-3">
                                        <div class="demo-switch-title">RED</div>
                                        <div class="switch">
                                            <label><input type="checkbox" checked><span class="lever switch-col-red"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="demo-switch-title">PINK</div>
                                        <div class="switch">
                                            <label><input type="checkbox" checked><span class="lever switch-col-pink"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="demo-switch-title">PURPLE</div>
                                        <div class="switch">
                                            <label><input type="checkbox" checked><span class="lever switch-col-purple"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="demo-switch-title">DEEP PURPLE</div>
                                        <div class="switch">
                                            <label><input type="checkbox" checked><span class="lever switch-col-deep-purple"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="demo-switch-title">INDIGO</div>
                                        <div class="switch">
                                            <label><input type="checkbox" checked><span class="lever switch-col-indigo"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="demo-switch-title">BLUE</div>
                                        <div class="switch">
                                            <label><input type="checkbox" checked><span class="lever switch-col-blue"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="demo-switch-title">LIGHT BLUE</div>
                                        <div class="switch">
                                            <label><input type="checkbox" checked><span class="lever switch-col-light-blue"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="demo-switch-title">CYAN</div>
                                        <div class="switch">
                                            <label><input type="checkbox" checked><span class="lever switch-col-cyan"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="demo-switch-title">TEAL</div>
                                        <div class="switch">
                                            <label><input type="checkbox" checked><span class="lever switch-col-teal"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="demo-switch-title">GREEN</div>
                                        <div class="switch">
                                            <label><input type="checkbox" checked><span class="lever switch-col-green"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="demo-switch-title">LIGHT GREEN</div>
                                        <div class="switch">
                                            <label><input type="checkbox" checked><span class="lever switch-col-light-green"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="demo-switch-title">LIME</div>
                                        <div class="switch">
                                            <label><input type="checkbox" checked><span class="lever switch-col-lime"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="demo-switch-title">YELLOW</div>
                                        <div class="switch">
                                            <label><input type="checkbox" checked><span class="lever switch-col-yellow"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="demo-switch-title">AMBER</div>
                                        <div class="switch">
                                            <label><input type="checkbox" checked><span class="lever switch-col-amber"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="demo-switch-title">ORANGE</div>
                                        <div class="switch">
                                            <label><input type="checkbox" checked><span class="lever switch-col-orange"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="demo-switch-title">DEEP ORANGE</div>
                                        <div class="switch">
                                            <label><input type="checkbox" checked><span class="lever switch-col-deep-orange"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="demo-switch-title">BROWN</div>
                                        <div class="switch">
                                            <label><input type="checkbox" checked><span class="lever switch-col-brown"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="demo-switch-title">GREY</div>
                                        <div class="switch">
                                            <label><input type="checkbox" checked><span class="lever switch-col-grey"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="demo-switch-title">BLUE GREY</div>
                                        <div class="switch">
                                            <label><input type="checkbox" checked><span class="lever switch-col-blue-grey"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="demo-switch-title">BLACK</div>
                                        <div class="switch">
                                            <label><input type="checkbox" checked><span class="lever switch-col-black"></span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!--#END# Switch Button -->
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                INPUT
                                <small>Different sizes and widths</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title">Basic Examples</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Username" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" class="form-control" placeholder="Password" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2 class="card-inside-title">Different Widths</h2>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="col-sm-6" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="col-sm-6" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="col-sm-4" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="col-sm-4" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="col-sm-4" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="col-sm-3" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="col-sm-3" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="col-sm-3" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="col-sm-3" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2 class="card-inside-title">Different Sizes</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-lg">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Large Input" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Default Input" />
                                        </div>
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Small Input" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2 class="card-inside-title">Floating Label Examples</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control">
                                            <label class="form-label">Username</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="password" class="form-control">
                                            <label class="form-label">Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-float form-group-lg">
                                        <div class="form-line">
                                            <input type="text" class="form-control" />
                                            <label class="form-label">Large Input</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" />
                                            <label class="form-label">Default Input</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float form-group-sm">
                                        <div class="form-line">SWITCH BUTTON

                                            <label class="form-label">Small Input</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2 class="card-inside-title">Input Status</h2>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line focused">
                                            <input type="text" class="form-control" value="Focused" placeholder="Statu Focused" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line disabled">
                                            <input type="text" class="form-control" placeholder="Disabled" disabled />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
            <!-- Textarea -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>TEXTAREA</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title">Basic Example</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2 class="card-inside-title">
                                Auto Growing Vertical Direction
                                <small>Taken from <a href="https://github.com/jackmoore/autosize/tree/master" target="_blank">github.com/jackmoore/autosize/tree/master</a></small>
                            </h2>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="1" class="form-control no-resize auto-growth" placeholder="Please type what you want... And please don't forget the ENTER key press multiple times :)"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Textarea -->
            <!-- Select -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                SELECT
                                <small>Taken from <a href="https://silviomoreto.github.io/bootstrap-select/" target="_blank">silviomoreto.github.io/bootstrap-select</a></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <select class="form-control show-tick">
                                        <option value="">-- Please select --</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="40">40</option>
                                        <option value="50">50</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <select class="form-control" disabled>
                                        <option value="">Disabled</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="40">40</option>
                                        <option value="50">50</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Select -->
            <!--Bootstrap Date Picker -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                BOOTSTRAP DATE PICKER
                                <small>Taken from <a href="https://github.com/uxsolutions/bootstrap-datepicker" target="_blank">github.com/uxsolutions/bootstrap-datepicker</a></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-xs-3">
                                    <h2 class="card-inside-title">Text Input</h2>
                                    <div class="form-group">
                                        <div class="form-line" id="bs_datepicker_container">
                                            <input type="text" class="form-control" placeholder="Please choose a date...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <h2 class="card-inside-title">Component</h2>
                                    <div class="input-group date" id="bs_datepicker_component_container">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Please choose a date...">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <h2 class="card-inside-title">Range</h2>
                                    <div class="input-daterange input-group" id="bs_datepicker_range_container">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Date start...">
                                        </div>
                                        <span class="input-group-addon">to</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Date end...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--#END# Bootstrap Date Picker -->
            <!--DateTime Picker -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATETIME PICKER
                                <small>Taken from <a href="https://github.com/T00rk/bootstrap-material-datetimepicker" target="_blank">github.com/T00rk/bootstrap-material-datetimepicker</a> with <a href="http://momentjs.com/" target="_blank">momentjs.com</a></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="datepicker form-control" placeholder="Please choose a date...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="timepicker form-control" placeholder="Please choose a time...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="datetimepicker form-control" placeholder="Please choose date & time...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--#END# DateTime Picker -->
            <!-- Checkbox -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CHECKBOX
                                <small>Taken from <a href="http://materializecss.com/" target="_blank">materializecss.com</a></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title">Basic Examples</h2>
                            <div class="demo-checkbox">
                                <input type="checkbox" id="basic_checkbox_1" checked />
                                <label for="basic_checkbox_1">Default</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in" checked />
                                <label for="basic_checkbox_2">Filled In</label>
                                <input type="checkbox" id="basic_checkbox_3" checked disabled />
                                <label for="basic_checkbox_3">Default - Disabled</label>
                                <input type="checkbox" id="basic_checkbox_4" class="filled-in" checked disabled />
                                <label for="basic_checkbox_4">Filled In - Disabled</label>
                            </div>

                            <h2 class="card-inside-title">With Material Design Colors</h2>
                            <div class="demo-checkbox">
                                <input type="checkbox" id="md_checkbox_1" class="chk-col-red" checked />
                                <label for="md_checkbox_1">RED</label>
                                <input type="checkbox" id="md_checkbox_2" class="chk-col-pink" checked />
                                <label for="md_checkbox_2">PINK</label>
                                <input type="checkbox" id="md_checkbox_3" class="chk-col-purple" checked />
                                <label for="md_checkbox_3">PURPLE</label>
                                <input type="checkbox" id="md_checkbox_4" class="chk-col-deep-purple" checked />
                                <label for="md_checkbox_4">DEEP PURPLE</label>
                                <input type="checkbox" id="md_checkbox_5" class="chk-col-indigo" checked />
                                <label for="md_checkbox_5">INDIGO</label>
                                <input type="checkbox" id="md_checkbox_6" class="chk-col-blue" checked />
                                <label for="md_checkbox_6">BLUE</label>
                                <input type="checkbox" id="md_checkbox_7" class="chk-col-light-blue" checked />
                                <label for="md_checkbox_7">LIGHT BLUE</label>
                                <input type="checkbox" id="md_checkbox_8" class="chk-col-cyan" checked />
                                <label for="md_checkbox_8">CYAN</label>
                                <input type="checkbox" id="md_checkbox_9" class="chk-col-teal" checked />
                                <label for="md_checkbox_9">TEAL</label>
                                <input type="checkbox" id="md_checkbox_10" class="chk-col-green" checked />
                                <label for="md_checkbox_10">GREEN</label>
                                <input type="checkbox" id="md_checkbox_11" class="chk-col-light-green" checked />
                                <label for="md_checkbox_11">LIGHT GREEN</label>
                                <input type="checkbox" id="md_checkbox_12" class="chk-col-lime" checked />
                                <label for="md_checkbox_12">LIME</label>
                                <input type="checkbox" id="md_checkbox_13" class="chk-col-yellow" checked />
                                <label for="md_checkbox_13">YELLOW</label>
                                <input type="checkbox" id="md_checkbox_14" class="chk-col-amber" checked />
                                <label for="md_checkbox_14">AMBER</label>
                                <input type="checkbox" id="md_checkbox_15" class="chk-col-orange" checked />
                                <label for="md_checkbox_15">ORANGE</label>
                                <input type="checkbox" id="md_checkbox_16" class="chk-col-deep-orange" checked />
                                <label for="md_checkbox_16">DEEP ORANGE</label>
                                <input type="checkbox" id="md_checkbox_17" class="chk-col-brown" checked />
                                <label for="md_checkbox_17">BROWN</label>
                                <input type="checkbox" id="md_checkbox_18" class="chk-col-grey" checked />
                                <label for="md_checkbox_18">GREY</label>
                                <input type="checkbox" id="md_checkbox_19" class="chk-col-blue-grey" checked />
                                <label for="md_checkbox_19">BLUE GREY</label>
                                <input type="checkbox" id="md_checkbox_20" class="chk-col-black" checked />
                                <label for="md_checkbox_20">BLACK</label>
                            </div>

                            <h2 class="card-inside-title">With Material Design Colors - Filled In</h2>
                            <div class="demo-checkbox">
                                <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red" checked />
                                <label for="md_checkbox_21">RED</label>
                                <input type="checkbox" id="md_checkbox_22" class="filled-in chk-col-pink" checked />
                                <label for="md_checkbox_22">PINK</label>
                                <input type="checkbox" id="md_checkbox_23" class="filled-in chk-col-purple" checked />
                                <label for="md_checkbox_23">PURPLE</label>
                                <input type="checkbox" id="md_checkbox_24" class="filled-in chk-col-deep-purple" checked />
                                <label for="md_checkbox_24">DEEP PURPLE</label>
                                <input type="checkbox" id="md_checkbox_25" class="filled-in chk-col-indigo" checked />
                                <label for="md_checkbox_25">INDIGO</label>
                                <input type="checkbox" id="md_checkbox_26" class="filled-in chk-col-blue" checked />
                                <label for="md_checkbox_26">BLUE</label>
                                <input type="checkbox" id="md_checkbox_27" class="filled-in chk-col-light-blue" checked />
                                <label for="md_checkbox_27">LIGHT BLUE</label>
                                <input type="checkbox" id="md_checkbox_28" class="filled-in chk-col-cyan" checked />
                                <label for="md_checkbox_28">CYAN</label>
                                <input type="checkbox" id="md_checkbox_29" class="filled-in chk-col-teal" checked />
                                <label for="md_checkbox_29">TEAL</label>
                                <input type="checkbox" id="md_checkbox_30" class="filled-in chk-col-green" checked />
                                <label for="md_checkbox_30">GREEN</label>
                                <input type="checkbox" id="md_checkbox_31" class="filled-in chk-col-light-green" checked />
                                <label for="md_checkbox_31">LIGHT GREEN</label>
                                <input type="checkbox" id="md_checkbox_32" class="filled-in chk-col-lime" checked />
                                <label for="md_checkbox_32">LIME</label>
                                <input type="checkbox" id="md_checkbox_33" class="filled-in chk-col-yellow" checked />
                                <label for="md_checkbox_33">YELLOW</label>
                                <input type="checkbox" id="md_checkbox_34" class="filled-in chk-col-amber" checked />
                                <label for="md_checkbox_34">AMBER</label>
                                <input type="checkbox" id="md_checkbox_35" class="filled-in chk-col-orange" checked />
                                <label for="md_checkbox_35">ORANGE</label>
                                <input type="checkbox" id="md_checkbox_36" class="filled-in chk-col-deep-orange" checked />
                                <label for="md_checkbox_36">DEEP ORANGE</label>
                                <input type="checkbox" id="md_checkbox_37" class="filled-in chk-col-brown" checked />
                                <label for="md_checkbox_37">BROWN</label>
                                <input type="checkbox" id="md_checkbox_38" class="filled-in chk-col-grey" checked />
                                <label for="md_checkbox_38">GREY</label>
                                <input type="checkbox" id="md_checkbox_39" class="filled-in chk-col-blue-grey" checked />
                                <label for="md_checkbox_39">BLUE GREY</label>
                                <input type="checkbox" id="md_checkbox_40" class="filled-in chk-col-black" checked />
                                <label for="md_checkbox_40">BLACK</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Checkbox -->
            <!-- Radio -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                RADIO
                                <small>Taken from <a href="http://materializecss.com/" target="_blank">materializecss.com</a></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title">Basic Examples</h2>
                            <div class="demo-radio-button">
                                <input name="group1" type="radio" id="radio_1" checked />
                                <label for="radio_1">Radio - 1</label>
                                <input name="group1" type="radio" id="radio_2" />
                                <label for="radio_2">Radio - 2</label>
                                <input name="group1" type="radio" class="with-gap" id="radio_3" />
                                <label for="radio_3">Radio - With Gap</label>
                                <input name="group1" type="radio" id="radio_4" class="with-gap" />
                                <label for="radio_4">Radio - With Gap</label>
                                <input name="group2" type="radio" id="radio_5" checked disabled />
                                <label for="radio_5">Radio - Disabled</label>
                                <input name="group3" type="radio" id="radio_6" class="with-gap" checked disabled />
                                <label for="radio_6">Radio - Disabled</label>
                            </div>

                            <h2 class="card-inside-title">
                                With Material Design Colors
                                <small>You can use material design colors which examples are <code>.radio-col-pink, .radio-col-cyan</code> class</small>
                            </h2>
                            <div class="demo-radio-button">
                                <input name="group4" type="radio" id="radio_7" class="radio-col-red" checked />
                                <label for="radio_7">RED</label>
                                <input name="group4" type="radio" id="radio_8" class="radio-col-pink" />
                                <label for="radio_8">PINK</label>
                                <input name="group4" type="radio" id="radio_9" class="radio-col-purple" />
                                <label for="radio_9">PURPLE</label>
                                <input name="group4" type="radio" id="radio_10" class="radio-col-deep-purple" />
                                <label for="radio_10">DEEP PURPLE</label>
                                <input name="group4" type="radio" id="radio_11" class="radio-col-indigo" />
                                <label for="radio_11">INDIGO</label>
                                <input name="group4" type="radio" id="radio_12" class="radio-col-blue" />
                                <label for="radio_12">BLUE</label>
                                <input name="group4" type="radio" id="radio_13" class="radio-col-light-blue" />
                                <label for="radio_13">LIGHT BLUE</label>
                                <input name="group4" type="radio" id="radio_14" class="radio-col-cyan" />
                                <label for="radio_14">CYAN</label>
                                <input name="group4" type="radio" id="radio_15" class="radio-col-teal" />
                                <label for="radio_15">TEAL</label>
                                <input name="group4" type="radio" id="radio_16" class="radio-col-green" />
                                <label for="radio_16">GREEN</label>
                                <input name="group4" type="radio" id="radio_17" class="radio-col-light-green" />
                                <label for="radio_17">LIGHT GREEN</label>
                                <input name="group4" type="radio" id="radio_18" class="radio-col-lime" />
                                <label for="radio_18">LIME</label>
                                <input name="group4" type="radio" id="radio_19" class="radio-col-yellow" />
                                <label for="radio_19">YELLOW</label>
                                <input name="group4" type="radio" id="radio_20" class="radio-col-amber" />
                                <label for="radio_20">AMBER</label>
                                <input name="group4" type="radio" id="radio_21" class="radio-col-orange" />
                                <label for="radio_21">ORANGE</label>
                                <input name="group4" type="radio" id="radio_22" class="radio-col-deep-orange" />
                                <label for="radio_22">DEEP ORANGE</label>
                                <input name="group4" type="radio" id="radio_23" class="radio-col-brown" />
                                <label for="radio_23">BROWN</label>
                                <input name="group4" type="radio" id="radio_24" class="radio-col-grey" />
                                <label for="radio_24">GREY</label>
                                <input name="group4" type="radio" id="radio_25" class="radio-col-blue-grey" />
                                <label for="radio_25">BLUE GREY</label>
                                <input name="group4" type="radio" id="radio_26" class="radio-col-black" />
                                <label for="radio_26">BLACK</label>
                            </div>

                            <h2 class="card-inside-title">
                                With Material Design Colors - With Gap
                                <small>Add to <code>.with-gap</code> class</small>
                            </h2>
                            <div class="demo-radio-button">
                                <input name="group5" type="radio" id="radio_30" class="with-gap radio-col-red" checked />
                                <label for="radio_30">RED</label>
                                <input name="group5" type="radio" id="radio_31" class="with-gap radio-col-pink" />
                                <label for="radio_31">PINK</label>
                                <input name="group5" type="radio" id="radio_32" class="with-gap radio-col-purple" />
                                <label for="radio_32">PURPLE</label>
                                <input name="group5" type="radio" id="radio_33" class="with-gap radio-col-deep-purple" />
                                <label for="radio_33">DEEP PURPLE</label>
                                <input name="group5" type="radio" id="radio_34" class="with-gap radio-col-indigo" />
                                <label for="radio_34">INDIGO</label>
                                <input name="group5" type="radio" id="radio_35" class="with-gap radio-col-blue" />
                                <label for="radio_35">BLUE</label>
                                <input name="group5" type="radio" id="radio_36" class="with-gap radio-col-light-blue" />
                                <label for="radio_36">LIGHT BLUE</label>
                                <input name="group5" type="radio" id="radio_37" class="with-gap radio-col-cyan" />
                                <label for="radio_37">CYAN</label>
                                <input name="group5" type="radio" id="radio_38" class="with-gap radio-col-teal" />
                                <label for="radio_38">TEAL</label>
                                <input name="group5" type="radio" id="radio_39" class="with-gap radio-col-green" />
                                <label for="radio_39">GREEN</label>
                                <input name="group5" type="radio" id="radio_40" class="with-gap radio-col-light-green" />
                                <label for="radio_40">LIGHT GREEN</label>
                                <input name="group5" type="radio" id="radio_41" class="with-gap radio-col-lime" />
                                <label for="radio_41">LIME</label>
                                <input name="group5" type="radio" id="radio_42" class="with-gap radio-col-yellow" />
                                <label for="radio_42">YELLOW</label>
                                <input name="group5" type="radio" id="radio_43" class="with-gap radio-col-amber" />
                                <label for="radio_43">AMBER</label>
                                <input name="group5" type="radio" id="radio_44" class="with-gap radio-col-orange" />
                                <label for="radio_44">ORANGE</label>
                                <input name="group5" type="radio" id="radio_45" class="with-gap radio-col-deep-orange" />
                                <label for="radio_45">DEEP ORANGE</label>
                                <input name="group5" type="radio" id="radio_46" class="with-gap radio-col-brown" />
                                <label for="radio_46">BROWN</label>
                                <input name="group5" type="radio" id="radio_47" class="with-gap radio-col-grey" />
                                <label for="radio_47">GREY</label>
                                <input name="group5" type="radio" id="radio_48" class="with-gap radio-col-blue-grey" />
                                <label for="radio_48">BLUE GREY</label>
                                <input name="group5" type="radio" id="radio_49" class="with-gap radio-col-black" />
                                <label for="radio_49">BLACK</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Radio -->

        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="../../plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="../../plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="../../plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="../../plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>
</html>
