<!DOCTYPE html>
<html lang="en">

<head>
    <title>Manage Account</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

</head>

<body class="app">
    <header class="app-header fixed-top">
        <div class="app-header-inner">
            <div class="container-fluid py-2">
                <div class="app-header-content">
                    <div class="row justify-content-between align-items-center">

                        <div class="col-auto">
                            <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    viewBox="0 0 30 30" role="img">
                                    <title>Menu</title>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                        stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
                                </svg>
                            </a>
                        </div><!--//col-->

                        <div class="app-utilities col-auto">
                            <div class="app-utility-item app-user-dropdown dropdown">
                                <a class="dropdown-toggle" id="user-dropdown-toggle" data-toggle="dropdown"
                                    href="#" role="button" aria-expanded="false">
                                    <img src="assets/images/admin.png" alt="" srcset=""></a>
                                <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
                                    <li><a class="dropdown-item" href="account.html">Account</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="login.html">Log Out</a></li>
                                </ul>
                            </div><!--//app-user-dropdown-->

                        </div><!--//app-utilities-->
                    </div><!--//row-->
                </div><!--//app-header-content-->
            </div><!--//container-fluid-->
        </div><!--//app-header-inner-->
        <div id="app-sidepanel" class="app-sidepanel">
            <div id="sidepanel-drop" class="sidepanel-drop"></div>
            <div class="sidepanel-inner d-flex flex-column">
                <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
                <div class="app-branding">
                    <a class="app-logo" href="index.html"><i class="fa fa-graduation-cap fa-2x"></i><span
                            class="logo-text"> FMS | ADMIN</span></a>

                </div><!--//app-branding-->

                <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
                    <ul class="app-menu list-unstyled accordion" id="menu-accordion">
                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link" href="index.html">
                                <span class="nav-icon"><i class="fa fa-home"></i></span>
                                <span class="nav-link-text">Dashboard</span>
                            </a><!--//nav-link-->
                        </li><!--//nav-item-->
                        <li class="nav-item has-submenu">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link submenu-toggle" href="#" data-toggle="collapse"
                                data-target="#submenu-2" aria-expanded="false" aria-controls="submenu-2">
                                <span class="nav-icon"><i class="fa fa-users"></i></span>
                                <span class="nav-link-text">Student</span>
                                <span class="submenu-arrow"><i
                                        class="fa fa-angle-down"></i></span><!--//submenu-arrow-->
                            </a><!--//nav-link-->
                            <div id="submenu-2" class="collapse submenu submenu-2" data-parent="#menu-accordion">
                                <ul class="submenu-list list-unstyled">
                                    <li class="submenu-item"><a class="submenu-link" href="add_student.html">Add
                                            Student</a></li>
                                    <li class="submenu-item"><a class="submenu-link" href="manage_student.html">Manage
                                            Student</a></li>
                                </ul>
                            </div>
                        </li><!--//nav-item-->
                        <li class="nav-item has-submenu">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link submenu-toggle" href="#" data-toggle="collapse"
                                data-target="#submenu-3" aria-expanded="false" aria-controls="submenu-3">
                                <span class="nav-icon"><i class="fa fa-school"></i></span>
                                <span class="nav-link-text">Class</span>
                                <span class="submenu-arrow"><i
                                        class="fa fa-angle-down"></i></span><!--//submenu-arrow-->
                            </a><!--//nav-link-->
                            <div id="submenu-3" class="collapse submenu submenu-3" data-parent="#menu-accordion">
                                <ul class="submenu-list list-unstyled">
                                    <li class="submenu-item"><a class="submenu-link" href="add_class.html">Add
                                            Class</a></li>
                                    <li class="submenu-item"><a class="submenu-link" href="manage_class.html">Manage
                                            Class</a></li>
                                </ul>
                            </div>
                        </li><!--//nav-item-->
                        <li class="nav-item has-submenu">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link submenu-toggle" href="#" data-toggle="collapse"
                                data-target="#submenu-5" aria-expanded="false" aria-controls="submenu-5">
                                <span class="nav-icon"><i class="fa fa-question"></i></span>
                                <span class="nav-link-text">Questionaires</span>
                                <span class="submenu-arrow"><i
                                        class="fa fa-angle-down"></i></span><!--//submenu-arrow-->
                            </a><!--//nav-link-->
                            <div id="submenu-5" class="collapse submenu submenu-5" data-parent="#menu-accordion">
                                <ul class="submenu-list list-unstyled">
                                    <li class="submenu-item"><a class="submenu-link" href="category.html">Manage
                                            Category</a></li>
                                    <li class="submenu-item"><a class="submenu-link"
                                            href="add_questionaire.html">Manage Questionaire</a></li>
                                </ul>
                            </div>
                        </li><!--//nav-item-->
                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link" href="evaluation.html">
                                <span class="nav-icon"><i class="fa fa-table"></i></span>
                                <span class="nav-link-text">Evaluation</span>
                            </a><!--//nav-link-->
                        </li><!--//nav-item-->
                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link" href="comments.html">
                                <span class="nav-icon"><i class="fa fa-comments"></i></span>
                                <span class="nav-link-text">Comments</span>
                            </a><!--//nav-link-->
                        </li><!--//nav-item-->
                    </ul><!--//app-menu-->
                </nav><!--//app-nav-->
            </div><!--//sidepanel-inner-->
        </div><!--//app-sidepanel-->
    </header><!--//app-header-->

    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title text-success"><span class="nav-icon"><i class="fa fa-folder"></i></span>
                    Manage Account</h1>
                <hr class="mb-4">
                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">

                            <div class="app-card-body">
                                <form class="settings-form">
                                    <div class="mb-3">
                                        <label for="setting-input-3" class="form-label">Old Password</label>
                                        <input type="password" class="form-control" id="setting-input-3"
                                            value="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-3" class="form-label">New Password</label>
                                        <input type="password" class="form-control" id="setting-input-3"
                                            value="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-3" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="setting-input-3"
                                            value="">
                                    </div>
                                    <button type="submit" class="btn app-btn-primary">Save</button>
                                </form>
                            </div><!--//app-card-body-->

                        </div><!--//app-card-->
                    </div>
                </div><!--//row-->

                <hr class="my-4">
            </div><!--//container-fluid-->
        </div><!--//app-content-->

    </div><!--//app-wrapper-->


    <!-- Javascript -->
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script>

</body>

</html>
