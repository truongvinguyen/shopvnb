<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>uAdmin - Professional, Responsive and Flat Admin Template</title>

        <meta name="description" content="uAdmin is a Professional, Responsive and Flat Admin Template created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="../assets/css/bootstrap.css">

        <!-- Related styles of various javascript plugins -->
        <link rel="stylesheet" href="../assets/css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="../assets/css/main.css">

        <!-- Load a specific file here from ../assets/css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="../assets/css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
        <script src="../assets/js/vendor/modernizr-respond.min.js"></script>
    </head>

    <!-- Add the class .fixed to <body> for a fixed layout on large resolutions (min: 1200px) -->
    <!-- <body class="fixed"> -->
    <body>
        <!-- Page Container -->
        <div id="page-container">
            <!-- Header -->
            <!-- Add the class .navbar-fixed-top or .navbar-fixed-bottom for a fixed header on top or bottom respectively -->
            <!-- <header class="navbar navbar-inverse navbar-fixed-top"> -->
            <!-- <header class="navbar navbar-inverse navbar-fixed-bottom"> -->
           
            <!-- END Header -->

            <!-- Inner Container -->
            <div id="inner-container">
                <!-- Sidebar -->
                <aside id="page-sidebar" class="collapse navbar-collapse navbar-main-collapse">
                    <!-- Sidebar search -->
                    <form id="sidebar-search" action="page_search_results.html" method="post">
                        <div class="input-group">
                            <input type="text" id="sidebar-search-term" name="sidebar-search-term" placeholder="Search..">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                    <!-- END Sidebar search -->

                    <!-- Primary Navigation -->
                    <nav id="primary-nav">
                        <ul>
                            <li>
                                <a href="?act=homeadmin"><i class="fa fa-fire"></i>Dashboard</a>
                            </li>
                           
                         
                            <li>
                                <a href="#"><i class="fa fa-th-list"></i>Loại sản phẩm</a>
                                <ul>
                                    <li>
                                        <a href="?act=xemdm"><i class="fa fa-file-text"></i>Danh sách loại</a>
                                    </li>
                                    <li>
                                        <a href="?act=themdm"><i class="fa fa-exclamation-triangle"></i>Thêm loại</a>
                                    </li>
                                 
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-table"></i>Sản phẩm</a>
                                <ul>
                                    <li>
                                        <a href="?act=list_sp"><i class="fa fa-tint"></i>Danh sách sản phẩm</a>
                                    </li>
                                    <li>
                                        <a href="?act=addproduct"><i class="fa fa-th"></i>Thêm sản phẩm</a>
                                    </li>
                        
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-leaf"></i>Đơn hàng</a>
                                <ul>
                                    <li>
                                        <a href="page_animations.html"><i class="fa fa-certificate animation-pulse"></i>Danh sách đơn hàng</a>
                                    </li>
                                    <li>
                                        <a href="page_gallery.html"><i class="fa fa-picture-o"></i>thêm đơn hàng</a>
                                    </li>
                                   
                                   
                                </ul>
                            </li>
                       
                        </ul>
                    </nav>
                    <!-- END Primary Navigation -->

               
                </aside>