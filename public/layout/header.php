<?php #session_start();

define('BASE_URL', '/prana-wellness-app/');
define('ADMIN_URL', '/prana-wellness-app/admin/');
$user = $_SESSION['user'] ?? false;
$admin = $_SESSION['user']['permission'] == 'admin' ? true : false;
// $currentUrlPath = dirname($_SERVER['PHP_SELF']);

$currentUrlPath = dirname($_SERVER['PHP_SELF']);

// Find position of "/public"
$publicPos = strpos($currentUrlPath, '/public');

// Get path up to and including "/public"
$publicPath = substr($currentUrlPath, 0, $publicPos + strlen('/public'));
?>
<!doctype html>
<html lang="en" class="layout-menu-fixed layout-compact" data-assets-path="<?= $publicPath ?>/assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Prana Wellness App</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="<?= $publicPath ?>/assets/img/favicon/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=<?= $publicPath ?>+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="<?= $publicPath ?>/assets/vendor/fonts/iconify-icons.css" />
    <link rel="stylesheet" href="<?= $publicPath ?>/assets/vendor/css/core.css" />
    <link rel="stylesheet" href="<?= $publicPath ?>/assets/css/demo.css" />
    <link rel="stylesheet" href="<?= $publicPath ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?= $publicPath ?>/assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap5.min.css" />




    <!-- date picker -->

    <script src="<?= $publicPath ?>/assets/vendor/js/helpers.js"></script>
    <script src="<?= $publicPath ?>/assets/js/config.js"></script>

    <style>
        body {
            /*
            background: linear-gradient(45deg,
                    #f7fee7,
                    #f0fdf4,
                    #f0fdfa,
                    #f0fdfa,
                    #ecfeff,
                    #f0f9ff,
                    #eff6ff,
                    #eef2ff,
                    #f5f3ff);
        }
                    */
                    background-color: #f1f5f9;

        .max-w-500px {
            width: 500px !important;
        }

        body {
            /* background-image: url('<?= $publicPath ?>/assets/img/bg-2.jpg');
            background-size: cover;
            background-attachment: fixed; */
            /* backdrop-filter: brightness(0.2); */
        }

        .menu,
        .card {
            background-color: rgba(255, 255, 255, 1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);


        }

        .bg-blur-white {
            background-color: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(5px);
        }
    </style>
</head>

<body>


    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo"><a href="index" class="app-brand-link gap-2"><span
                            class="app-brand-logo demo"><img src="<?= $publicPath ?>/assets/img/logo.png" alt=""
                                class="w-50 h-auto"></span></a><a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto"><i
                            class="bx bx-chevron-left d-block d-xl-none align-middle"></i></a></div>
                <div class="menu-divider mt-0"></div>
                <div class="menu-inner-shadow"></div>
                <ul class="menu-inner py-1">
                    <li class="menu-item" data-aside="<?= $admin ? 'admin/' : '' ?>dashboard"><a
                            href="<?= $admin ? ADMIN_URL : '' ?>dashboard" class="menu-link"><i
                                class="menu-icon tf-icons bx bx-home-smile"></i>
                            <div class="text-truncate" data-i18n="Dashboards">Dashboards</div>
                        </a></li>

                    <li class="menu-item" data-aside="<?= $admin ? 'admin/' : '' ?>activities"><a
                            href="<?= $admin ? ADMIN_URL : '' ?>activities" class="menu-link"><i
                                class="menu-icon tf-icons bx bx-run"></i>
                            <div class="text-truncate" data-i18n="Dashboards">Activities</div>
                        </a></li>

                    <?php if ($admin): ?>
                        <li class="menu-item" data-aside="<?= $admin ? 'admin/' : '' ?>appearance"><a
                                href="<?= $admin ? ADMIN_URL : '' ?>appearance" class="menu-link"><i
                                    class="menu-icon tf-icons bx bx-layout"></i>
                                <div class="text-truncate" data-i18n="Dashboards">Appearance</div><span
                                    class="badge rounded-pill bg-danger ms-auto">5</span>
                            </a></li>
                    <?php endif; ?>

                    <li class="menu-item"
                        data-aside="<?= $admin ? 'admin/' : '' ?>account,<?= $admin ? 'admin/' : '' ?>notification"><a
                            href="javascript:void(0);" class="menu-link menu-toggle"><i
                                class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div class="text-truncate" data-i18n="Account Settings">Account Settings</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item" data-aside="<?= $admin ? 'admin/' : '' ?>account"><a
                                    href="<?= $admin ? ADMIN_URL : '' ?>account" class="menu-link">
                                    <div class="text-truncate" data-i18n="Account">Account</div>
                                </a></li>
                            <li class="menu-item" data-aside="<?= $admin ? 'admin/' : '' ?>notification"><a
                                    href="<?= $admin ? ADMIN_URL : '' ?>notification" class="menu-link">
                                    <div class="text-truncate" data-i18n="Notifications">Notifications</div>
                                </a></li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <div class="layout-page">
                <nav class="layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme ps-3 pe-2"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none"><a
                            class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)"><i
                                class="icon-base bx bx-menu icon-md"></i></a></div>
                    <div class="navbar-nav-right d-flex align-items-center justify-content-end" id="navbar-collapse">
                        <div class="navbar-nav align-items-center me-auto">
                            <div class="nav-item d-flex align-items-center">
                                <h2 class="fs-4 text-warning m-0">PRANTHON</h2>
                            </div>
                        </div>
                        <ul class="navbar-nav flex-row align-items-center ms-md-auto gap-3 shadow-lg p-2 rounded-4">

                            <li class="nav-item navbar-dropdown dropdown-user dropdown"><a
                                    class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online"><img
                                            src="<?= $publicPath ?>/uploads/<?= $user['image_path']; ?>" alt
                                            class="w-px-40 h-auto rounded-circle" /></div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online"><img
                                                            src="<?= $publicPath ?>/assets/img/avatars/1.png" alt
                                                            class="w-px-40 h-auto rounded-circle" /></div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-0"><?= $user['name'] ?></h6><small
                                                        class="text-body-secondary"><?= $user['permission']; ?></small>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li>
                                        <div class="dropdown-divider my-1"></div>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i
                                                class="icon-base bx bx-user icon-md me-3"></i><span>My
                                                Profile</span></a></li>
                                    <li><a class="dropdown-item" href="#"><i
                                                class="icon-base bx bx-cog icon-md me-3"></i><span>Notification</span></a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider my-1"></div>
                                    </li>
                                    <li><a onclick="logout()" class="dropdown-item" href="javascript:void(0);"><i
                                                class="icon-base bx bx-power-off icon-md me-3"></i><span>Log
                                                Out</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <p class="fs-5 m-0 pe-3"><?= $_SESSION['user']['name']; ?></p>
                            </li>
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        // Get current path without leading slash
                        let currentPath = window.location.pathname.replace(/^\/+/, '');
                        currentPath = currentPath.split('/')[1];

                        // Select all menu items with data-aside
                        let menuItems = document.querySelectorAll('.menu-item[data-aside]');

                        menuItems.forEach(item => {
                            // Get all the values from data-aside, split by comma
                            let asideValues = item.getAttribute('data-aside').split(',');

                            // If current path matches any of the data-aside values, add 'active'
                            if (asideValues.includes(currentPath)) {
                                item.classList.add('active');

                                // Optionally, add active class to parent toggle if it exists
                                let parentToggle = item.closest('.menu-sub')?.closest('.menu-item');
                                if (parentToggle) {
                                    parentToggle.classList.add('active');
                                }
                            }
                        });

                    });
                </script>