<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
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
                <img src="../images/user.png" width="48" height="48" alt="User" />
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
            <h2>HELPER CLASSES</h2>
        </div>
        <!-- Text Styles -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            TEXT STYLES
                            <small>You can use classes which names are <code>.font-bold, .font-italic, .font-underline, .font-line-through, .font-overline</code></small>
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
                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                                <p>
                                    <b>Normal</b>
                                </p>
                                <p>Default text</p>
                                <p class="col-pink">Text pink color</p>
                                <p class="col-cyan">Text cyan color</p>
                                <p class="col-teal">Text teal color</p>
                                <p class="col-orange">Text orange color</p>
                                <p class="col-blue-grey">Text blue grey color</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                                <p>
                                    <b>Bold</b>
                                </p>
                                <p class="font-bold">Default text</p>
                                <p class="font-bold col-pink">Text pink color</p>
                                <p class="font-bold col-cyan">Text cyan color</p>
                                <p class="font-bold col-teal">Text teal color</p>
                                <p class="font-bold col-orange">Text orange color</p>
                                <p class="font-bold col-blue-grey">Text blue grey color</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                                <p>
                                    <b>Italic</b>
                                </p>
                                <p class="font-italic">Default text</p>
                                <p class="font-italic col-pink">Text pink color</p>
                                <p class="font-italic col-cyan">Text cyan color</p>
                                <p class="font-italic col-teal">Text teal color</p>
                                <p class="font-italic col-orange">Text orange color</p>
                                <p class="font-italic col-blue-grey">Text blue grey color</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                                <p>
                                    <b>Underline</b>
                                </p>
                                <p class="font-underline">Default text</p>
                                <p class="font-underline col-pink">Text pink color</p>
                                <p class="font-underline col-cyan">Text cyan color</p>
                                <p class="font-underline col-teal">Text teal color</p>
                                <p class="font-underline col-orange">Text orange color</p>
                                <p class="font-underline col-blue-grey">Text blue grey color</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                                <p>
                                    <b>Line Through</b>
                                </p>
                                <p class="font-line-through">Default text</p>
                                <p class="font-line-through col-pink">Text pink color</p>
                                <p class="font-line-through col-cyan">Text cyan color</p>
                                <p class="font-line-through col-teal">Text teal color</p>
                                <p class="font-line-through col-orange">Text orange color</p>
                                <p class="font-line-through col-blue-grey">Text blue grey color</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                                <p>
                                    <b>Overline</b>
                                </p>
                                <p class="font-overline">Default text</p>
                                <p class="font-overline col-pink">Text pink color</p>
                                <p class="font-overline col-cyan">Text cyan color</p>
                                <p class="font-overline col-teal">Text teal color</p>
                                <p class="font-overline col-orange">Text orange color</p>
                                <p class="font-overline col-blue-grey">Text blue grey color</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Text Styles -->
        <!-- Font Sizes -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            FONT SIZES
                            <small>You can use the classes which samples are <code>.font-6, .font-10, .font-24</code> The number of can use between 6 - 50px which are near the <b>.font-</b></small>
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
                            <div class="col-md-2">
                                <div class="font-6">font-6</div>
                            </div>
                            <div class="col-md-2">
                                <div class="font-10">font-10</div>
                            </div>
                            <div class="col-md-2">
                                <div class="font-12">font-12</div>
                            </div>
                            <div class="col-md-2">
                                <div class="font-15">font-15</div>
                            </div>
                            <div class="col-md-2">
                                <div class="font-20">font-20</div>
                            </div>
                            <div class="col-md-2">
                                <div class="font-24">font-24</div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-2">
                                <div class="font-32">font-32</div>
                            </div>
                            <div class="col-md-2">
                                <div class="font-40">font-40</div>
                            </div>
                            <div class="col-md-2">
                                <div class="font-42">font-42</div>
                            </div>
                            <div class="col-md-2">
                                <div class="font-45">font-45</div>
                            </div>
                            <div class="col-md-2">
                                <div class="font-48">font-48</div>
                            </div>
                            <div class="col-md-2">
                                <div class="font-50">font-50</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Font Sizes -->
        <!-- Text Aligns -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            TEXT ALIGNS
                            <small>You can use classes which names are <code>.align-left, .align-center, .align-right, .align-justify</code></small>
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
                            <div class="col-md-3">
                                <p class="align-left">
                                    <b>Align Left</b>
                                </p>
                                <div class="align-left">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                            <div class="col-md-3">
                                <p class="align-center">
                                    <b>Align Center</b>
                                </p>
                                <div class="align-center">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                            <div class="col-md-3">
                                <p class="align-right">
                                    <b>Align Right</b>
                                </p>
                                <div class="align-right">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                            <div class="col-md-3">
                                <p class="align-justify">
                                    <b>Align Justify</b>
                                </p>
                                <div class="align-justify">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Text Aligns -->
        <!-- Margin & Padding Spaces -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            MARGIN & PADDING SPACES
                            <small>You can use classes which names are <code>.m-t-10, .m-t--10, .m-r-5, .p-t-10, .p-b-5</code></small>
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
                        <p>
                            <b>Margins</b>
                        </p>
                        <div class="row clearfix">
                            <div class="col-md-2">
                                <span class="col-red font-bold">M</span>argin <span class="col-red font-bold">T</span>op <span class="col-red font-bold">10</span>px &rarr; <code>.m-t-10</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">M</span>argin <span class="col-red font-bold">T</span>op <span class="col-red font-bold">0</span>px &rarr; <code>.m-t-0</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">M</span>argin <span class="col-red font-bold">T</span>op <span class="col-red font-bold">-10</span>px &rarr; <code>.m-t--10</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">M</span>argin <span class="col-red font-bold">L</span>eft <span class="col-red font-bold">35</span>px &rarr; <code>.m-l-35</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">M</span>argin <span class="col-red font-bold">L</span>eft <span class="col-red font-bold">0</span>px &rarr; <code>.m-l-0</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">M</span>argin <span class="col-red font-bold">L</span>eft <span class="col-red font-bold">-35</span>px &rarr; <code>.m-l--35</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">M</span>argin <span class="col-red font-bold">B</span>ottom <span class="col-red font-bold">15</span>px &rarr; <code>.m-b-15</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">M</span>argin <span class="col-red font-bold">B</span>ottom <span class="col-red font-bold">0</span>px &rarr; <code>.m-b-0</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">M</span>argin <span class="col-red font-bold">B</span>ottom <span class="col-red font-bold">-20</span>px &rarr; <code>.m-b--20</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">M</span>argin <span class="col-red font-bold">R</span>ight <span class="col-red font-bold">30</span>px &rarr; <code>.m-r-30</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">M</span>argin <span class="col-red font-bold">R</span>ight <span class="col-red font-bold">0</span>px &rarr; <code>.m-r-0</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">M</span>argin <span class="col-red font-bold">R</span>ight <span class="col-red font-bold">-30</span>px &rarr; <code>.m-r--30</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">ALL M</span>argin <span class="col-red font-bold">0</span>px &rarr; <code>.margin-0</code>
                            </div>
                        </div>

                        <p class="m-t-25">
                            <b>Paddings</b>
                        </p>
                        <div class="row clearfix">
                            <div class="col-md-2">
                                <span class="col-red font-bold">P</span>adding <span class="col-red font-bold">T</span>op <span class="col-red font-bold">10</span>px &rarr; <code>.p-t-10</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">P</span>adding <span class="col-red font-bold">T</span>op <span class="col-red font-bold">0</span>px &rarr; <code>.p-t-0</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">P</span>adding <span class="col-red font-bold">L</span>eft <span class="col-red font-bold">35</span>px &rarr; <code>.p-l-35</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">P</span>adding <span class="col-red font-bold">L</span>eft <span class="col-red font-bold">0</span>px &rarr; <code>.p-l-0</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">P</span>adding <span class="col-red font-bold">B</span>ottom <span class="col-red font-bold">15</span>px &rarr; <code>.p-b-15</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">P</span>adding <span class="col-red font-bold">B</span>ottom <span class="col-red font-bold">0</span>px &rarr; <code>.p-b-0</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">P</span>adding <span class="col-red font-bold">R</span>ight <span class="col-red font-bold">30</span>px &rarr; <code>.p-r-30</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">P</span>adding <span class="col-red font-bold">R</span>ight <span class="col-red font-bold">0</span>px &rarr; <code>.p-r-0</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">ALL P</span>adding <span class="col-red font-bold">0</span>px &rarr; <code>.padding-0</code>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Margin & Padding Spaces -->
        <!-- Special Class For User Entered Browser -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            SPECIAL CLASSES FOR EVERY BROWSERS
                            <small>When the user start the usage this theme, we put the browser info inside the <code>html</code> as class</small>
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
                        Putting classes are <code>.ie10, .ie11, .edge, .opera, .chrome, .firefox, .safari</code> to class inside of <code>html</code> element. So you can create new classes for run only you specified browser(s).
                        <p class="m-t-25"><b>Example</b></p>
                            <pre><code class="language-css"><b>/* It will be work only IE10 */</b>
html.ie10 .menu .list {
   background-color: #CC0000;
}
<b>/* It will be work only Google Chrome */</b>
html.chrome .right-sidebar .header {
   font-size: 15px;
   font-weight: bold;
}</code></pre><p>&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Special Class For User Entered Browser -->
    </div>
</section>

<!-- Jquery Core Js -->
<script src="../plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="../plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="../plugins/node-waves/waves.js"></script>

<!-- Custom Js -->
<script src="../js/admin.js"></script>

<!-- Demo Js -->
<script src="../js/demo.js"></script>
</body>

</html>
