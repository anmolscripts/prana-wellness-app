<!doctype html>

<html
    lang="en"
    class="layout-menu-fixed layout-compact"
    data-assets-path="../public/assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Prana Wellness App</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../public/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="../public/assets/vendor/fonts/iconify-icons.css" />

    <!-- Core CSS -->
    <!-- build:css assets/vendor/css/theme.css  -->

    <link rel="stylesheet" href="../public/assets/vendor/css/core.css" />
    <link rel="stylesheet" href="../public/assets/css/demo.css" />

    <!-- Vendors CSS -->

    <link rel="stylesheet" href="../public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- endbuild -->

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../public/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

    <script src="../public/assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo"><a href="index" class="app-brand-link gap-2"><span
                            class="app-brand-logo demo"><img src="../public/assets/img/logo.png" alt=""
                                class="w-50 h-auto"></span></a><a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto"><i
                            class="bx bx-chevron-left d-block d-xl-none align-middle"></i></a></div>
                <div class="menu-divider mt-0"></div>
                <div class="menu-inner-shadow"></div>
                <ul class="menu-inner py-1">
                    <li class="menu-item "><a href="dashboard" class="menu-link"><i
                                class="menu-icon tf-icons bx bx-home-smile"></i>
                            <div class="text-truncate" data-i18n="Dashboards">Dashboards</div><span
                                class="badge rounded-pill bg-danger ms-auto">5</span>
                        </a></li>
                    <li class="menu-item "><a href="activities" class="menu-link"><i
                                class="menu-icon tf-icons bx bx-run"></i>
                            <div class="text-truncate" data-i18n="Dashboards">Activities</div><span
                                class="badge rounded-pill bg-danger ms-auto">5</span>
                        </a></li>

                    <li class="menu-item active"><a href="javascript:void(0);" class="menu-link menu-toggle"><i
                                class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div class="text-truncate" data-i18n="Account Settings">Account Settings</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item "><a href="account" class="menu-link">
                                    <div class="text-truncate" data-i18n="Account">Account</div>
                                </a></li>
                            <li class="menu-item active"><a href="javascript:void(0);" class="menu-link">
                                    <div class="text-truncate" data-i18n="Notifications">Notifications</div>
                                </a></li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav
                    class="layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                            <i class="icon-base bx bx-menu icon-md"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center justify-content-end" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center me-auto">
                            <div class="nav-item d-flex align-items-center">
                                <span class="w-px-22 h-px-22"><i class="icon-base bx bx-search icon-md"></i></span>
                                <input
                                    type="text"
                                    class="form-control border-0 shadow-none ps-1 ps-sm-2 d-md-block d-none"
                                    placeholder="Search..."
                                    aria-label="Search..." />
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-md-auto">
                            <!-- Place this tag where you want the button to render. -->
                            <li class="nav-item lh-1 me-4">
                                <a
                                    class="github-button"
                                    href="https://github.com/themeselection/sneat-bootstrap-html-admin-template-free"
                                    data-icon="octicon-star"
                                    data-size="large"
                                    data-show-count="true"
                                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub">Star</a>
                            </li>

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a
                                    class="nav-link dropdown-toggle hide-arrow p-0"
                                    href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="../public/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../public/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-0">John Doe</h6>
                                                    <small class="text-body-secondary">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider my-1"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="icon-base bx bx-user icon-md me-3"></i><span>My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="icon-base bx bx-cog icon-md me-3"></i><span>Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span class="d-flex align-items-center align-middle">
                                                <i class="flex-shrink-0 icon-base bx bx-credit-card icon-md me-3"></i><span class="flex-grow-1 align-middle">Billing Plan</span>
                                                <span class="flex-shrink-0 badge rounded-pill bg-danger">4</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider my-1"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <i class="icon-base bx bx-power-off icon-md me-3"></i><span>Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="nav-align-top">
                                    <ul class="nav nav-pills flex-column flex-md-row mb-6 gap-md-0 gap-2">
                                        <li class="nav-item">
                                            <a class="nav-link" href="account   "><i class="icon-base bx bx-user icon-sm me-1_5"></i> Account</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" href="javascript:void(0);"><i class="icon-base bx bx-bell icon-sm me-1_5"></i> Notifications</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card">
                                    <!-- Notifications -->
                                    <div class="card-body">
                                        <h5 class="mb-1">Recent Devices</h5>
                                        <span class="card-subtitle">We need permission from your browser to show notifications.
                                            <span class="notificationRequest"><span class="text-primary">Request Permission</span></span></span>
                                        <div class="error"></div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Type</th>
                                                    <th class="text-nowrap text-center">Email</th>
                                                    <th class="text-nowrap text-center">Browser</th>
                                                    <th class="text-nowrap text-center">App</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap text-heading">New for you</td>
                                                    <td>
                                                        <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                                            <input class="form-check-input" type="checkbox" id="defaultCheck1" checked />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                                            <input class="form-check-input" type="checkbox" id="defaultCheck2" checked />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                                            <input class="form-check-input" type="checkbox" id="defaultCheck3" checked />
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap text-heading">Account activity</td>
                                                    <td>
                                                        <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                                            <input class="form-check-input" type="checkbox" id="defaultCheck4" checked />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                                            <input class="form-check-input" type="checkbox" id="defaultCheck5" checked />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                                            <input class="form-check-input" type="checkbox" id="defaultCheck6" checked />
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap text-heading">A new browser used to sign in</td>
                                                    <td>
                                                        <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                                            <input class="form-check-input" type="checkbox" id="defaultCheck7" checked />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                                            <input class="form-check-input" type="checkbox" id="defaultCheck8" checked />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                                            <input class="form-check-input" type="checkbox" id="defaultCheck9" />
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap text-heading">A new device is linked</td>
                                                    <td>
                                                        <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                                            <input class="form-check-input" type="checkbox" id="defaultCheck10" checked />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                                            <input class="form-check-input" type="checkbox" id="defaultCheck11" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                                            <input class="form-check-input" type="checkbox" id="defaultCheck12" />
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="text-body mb-6">When should we send you notifications?</h6>
                                        <form action="javascript:void(0);">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <select id="sendNotification" class="form-select" name="sendNotification">
                                                        <option selected>Only when I'm online</option>
                                                        <option>Anytime</option>
                                                    </select>
                                                </div>
                                                <div class="mt-6">
                                                    <button type="submit" class="btn btn-primary me-3">Save changes</button>
                                                    <button type="reset" class="btn btn-outline-secondary">Discard</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /Notifications -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->


                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    

    <!-- Core JS -->

    <script src="../public/assets/vendor/libs/jquery/jquery.js"></script>

    <script src="../public/assets/vendor/libs/popper/popper.js"></script>
    <script src="../public/assets/vendor/js/bootstrap.js"></script>

    <script src="../public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../public/assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->

    <script src="../public/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>