<?php
session_start();
?>
<?php

require_once '../../../functions/db.php';
require_once '../../../functions/activity_added_chart.php';
require_once '../../../functions/utility.php';
$pdo = getConnection();
$result = getMonthlyActivityAdditions($pdo);

$getActivityUsageData = getActivityUsageData($pdo);


$getActivityUsageStats = getActivityUsageStats($pdo, $dbname, 'user_activities', 'activity');

$userCount = getUsersCount($pdo, $dbname, 'users');

$getActivityUsageStatsWeekly = getActivityUsageStatsWeekly($pdo, $dbname, 'user_activities', 'activity');
?>


<!doctype html>
<html lang="en" class="layout-menu-fixed layout-compact" data-assets-path="../../public/assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Prana Wellness App</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="../public/assets/img/favicon/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=../public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="../public/assets/vendor/fonts/iconify-icons.css" />
    <link rel="stylesheet" href="../public/assets/vendor/css/core.css" />
    <link rel="stylesheet" href="../public/assets/css/demo.css" />
    <link rel="stylesheet" href="../public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../public/assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap5.min.css" />
    <script src="../public/assets/vendor/js/helpers.js"></script>
    <script src="../public/assets/js/config.js"></script>

    <style>
        .max-w-500px {
            width: 500px !important;
        }
    </style>
</head>

<body>

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo"><a href="index" class="app-brand-link gap-2"><span
                            class="app-brand-logo demo"><img src="../public/assets/img/logo.png" alt=""
                                class="w-50 h-auto"></span></a><a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto"><i
                            class="bx bx-chevron-left d-block d-xl-none align-middle"></i></a></div>
                <div class="menu-divider mt-0"></div>
                <div class="menu-inner-shadow"></div>
                <ul class="menu-inner py-1">
                    <li class="menu-item active"><a href="javascript:void(0);" class="menu-link"><i
                                class="menu-icon tf-icons bx bx-home-smile"></i>
                            <div class="text-truncate" data-i18n="Dashboards">Dashboards</div><span
                                class="badge rounded-pill bg-danger ms-auto">5</span>
                        </a></li>
                    <li class="menu-item"><a href="activities" class="menu-link"><i
                                class="menu-icon tf-icons bx bx-run"></i>
                            <div class="text-truncate" data-i18n="Dashboards">Activities</div><span
                                class="badge rounded-pill bg-danger ms-auto">5</span>
                        </a></li>

                    <li class="menu-item"><a href="javascript:void(0);" class="menu-link menu-toggle"><i
                                class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div class="text-truncate" data-i18n="Account Settings">Account Settings</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a href="account" class="menu-link">
                                    <div class="text-truncate" data-i18n="Account">Account</div>
                                </a></li>
                            <li class="menu-item"><a href="notification" class="menu-link">
                                    <div class="text-truncate" data-i18n="Notifications">Notifications</div>
                                </a></li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <div class="layout-page">
                <nav class="layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none"><a
                            class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)"><i
                                class="icon-base bx bx-menu icon-md"></i></a></div>
                    <div class="navbar-nav-right d-flex align-items-center justify-content-end" id="navbar-collapse">
                        <div class="navbar-nav align-items-center me-auto">
                            <div class="nav-item d-flex align-items-center"><span class="w-px-22 h-px-22"><i
                                        class="icon-base bx bx-search icon-md"></i></span><input type="text"
                                    class="form-control border-0 shadow-none ps-1 ps-sm-2 d-md-block d-none"
                                    placeholder="Search..." aria-label="Search..." /></div>
                        </div>
                        <ul class="navbar-nav flex-row align-items-center ms-md-auto">
                            <li class="nav-item lh-1 me-4"><a class="github-button"
                                    href="https://github.com/themeselection/sneat-bootstrap-html-admin-template-free"
                                    data-icon="octicon-star" data-size="large" data-show-count="true"
                                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub">Star</a>
                            </li>
                            <li class="nav-item navbar-dropdown dropdown-user dropdown"><a
                                    class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online"><img src="../public/assets/img/avatars/1.png" alt
                                            class="w-px-40 h-auto rounded-circle" /></div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online"><img
                                                            src="../public/assets/img/avatars/1.png" alt
                                                            class="w-px-40 h-auto rounded-circle" /></div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-0">John Doe</h6><small
                                                        class="text-body-secondary">Admin</small>
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
                                                class="icon-base bx bx-cog icon-md me-3"></i><span>Settings</span></a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><span
                                                class="d-flex align-items-center align-middle"><i
                                                    class="flex-shrink-0 icon-base bx bx-credit-card icon-md me-3"></i><span
                                                    class="flex-grow-1 align-middle">Billing Plan</span><span
                                                    class="flex-shrink-0 badge rounded-pill bg-danger">4</span></span></a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider my-1"></div>
                                    </li>
                                    <li><a onclick="logout()" class="dropdown-item" href="javascript:void(0);"><i
                                                class="icon-base bx bx-power-off icon-md me-3"></i><span>Log
                                                Out</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-xxl-12 mb-6 order-0">

                                <div class="card">
                                    <div class="d-flex align-items-start row">
                                        <div class="col-sm-7">
                                            <div class="card-body">
                                                <h5 class="card-title text-primary mb-3">Welcome back <span
                                                        class="text-uppercase"><?php print_r($_SESSION['user']['name']); ?></span>
                                                    🎉</h5>
                                                <div class="row">

                                                    <div class="col-12">
                                                        <div class="card-body ps-0 pb-4">
                                                            <span class="d-block fw-medium mb-1 fs-5">Total Users </span>
                                                            <h4 class="card-title mb-0 text-warning fs-1" id="counter">0</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 text-center text-sm-left">
                                            <div class="card-body pb-0 px-0 px-md-6"><img
                                                    src="../public/assets/img/illustrations/man-with-laptop.png"
                                                    height="175" alt="View Badge User" /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div cclass="col-12 col-xxl-8 order-2 order-md-3 order-xxl-2 mb-5 ">
                                <div class="card">
                                    <h3 class="fs-4 text-center">Activity Uses History</h3>
                                    <div class="row g-0">


                                        <div class="col-lg-8">
                                            <div class="card-body">
                                                <div class=" mt-0">

                                                    <div class="card">
                                                        <div id="activitesTable" class="table-responsive max-h-30 rounded-5">
                                                            <table class="table table-dark table-borderless table-striped ">
                                                                <thead class="position-sticky top-0 ">
                                                                    <tr>
                                                                        <th width="75px">S No.</th>
                                                                        <th>Activite</th>
                                                                        <th class="text-center">Type</th>
                                                                        <th class="text-center">%</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="actiityTbody" class="table-border-bottom-0">

                                                                    <?php
                                                                    $activites = $getActivityUsageStats['activities'];
                                                                    if (!empty($activites)):
                                                                        foreach ($activites as $index => $activity):
                                                                    ?>
                                                                            <tr>
                                                                                <td><?php echo $index + 1; ?></td>
                                                                                <td><?php echo $activity['activity_name']; ?></td>
                                                                                <td class="text-center"> <span class="badge <?php echo $activity['activity_type'] == 'time' ? 'bg-label-warning' : 'bg-label-info'; ?> me-1"><?php echo strtoupper($activity['activity_type']); ?></span></td>
                                                                                <td>
                                                                                    <span class="badge rounded-pill bg-danger ms-auto fs-6"><?php echo $activity['percentage']; ?>%</span>
                                                                                </td>
                                                                            </tr>

                                                                    <?php endforeach;
                                                                    endif; ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 align-self-center">
                                            <div class="card-body">
                                                <div id="activityDonutChart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row mt-5">
                                <div class="col-md-12 col-lg-12 col-xl-12 order-0 mb-6">
                                    <div class="card h-100">
                                        <div class="card-header d-flex justify-content-between">
                                            <div class="card-title mb-0">
                                                <h5 class="mb-1 me-2">Weakly Report</h5>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center mb-6">
                                                <div class="d-flex flex-column align-items-center gap-1">
                                                    <h3 class="mb-1"><?= array_sum($getActivityUsageStatsWeekly['series']); ?></h3><small>Total Orders</small>
                                                </div>
                                                <div id="orderStatisticsChart"></div>
                                            </div>
                                            <?php if (isset($getActivityUsageStatsWeekly['activities']) && !empty($getActivityUsageStatsWeekly['activities'])): ?>
                                                <div class="list-group list-group-flush gap-2">
                                                    <?php foreach ($getActivityUsageStatsWeekly['activities'] as $activity): ?>
                                                        <button type="button" class="btn btn-outline-primary d-flex justify-content-between align-items-center flex-grow-1 text-start gap-3 px-2">
                                                            <span>
                                                                <?= $activity['activity_name']; ?>
                                                            </span>
                                                            <span class="badge"><?= $activity['usage_count']; ?></span>
                                                        </button>

                                                    <?php endforeach; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-md-6 col-lg-6 order-1 mb-6">
                                    <div class="card h-100">
                                        <div class="card-header nav-align-top">
                                            <ul class="nav nav-pills flex-wrap row-gap-2" role="tablist">
                                                <li class="nav-item"><button type="button" class="nav-link active"
                                                        role="tab" data-bs-toggle="tab"
                                                        data-bs-target="#navs-tabs-line-card-income"
                                                        aria-controls="navs-tabs-line-card-income"
                                                        aria-selected="true">Income </button></li>
                                                <li class="nav-item"><button type="button" class="nav-link"
                                                        role="tab">Expenses</button></li>
                                                <li class="nav-item"><button type="button" class="nav-link"
                                                        role="tab">Profit</button></li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content p-0">
                                                <div class="tab-pane fade show active" id="navs-tabs-line-card-income"
                                                    role="tabpanel">
                                                    <div class="d-flex mb-6">
                                                        <div class="avatar flex-shrink-0 me-3"><img
                                                                src="../public/assets/img/icons/unicons/wallet.png"
                                                                alt="User" /></div>
                                                        <div>
                                                            <p class="mb-0">Total Balance</p>
                                                            <div class="d-flex align-items-center">
                                                                <h6 class="mb-0 me-1">$459.10</h6><small
                                                                    class="text-success fw-medium"><i
                                                                        class="icon-base bx bx-chevron-up icon-lg"></i>42.9%
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="incomeChart"></div>
                                                    <div
                                                        class="d-flex align-items-center justify-content-center mt-6 gap-3">
                                                        <div class="flex-shrink-0">
                                                            <div id="expensesOfWeek"></div>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0">Income this week</h6><small>$39k less than last
                                                                week</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>



                            <div class="col-12 col-xxl-12 mt-5 total-revenue mt-5">
                                <div class="card">
                                    <div class="row row-bordered g-0">
                                        <div class="col-lg-12">
                                            <div class="card-header d-flex align-items-center justify-content-between">
                                                <div class="card-title mb-0">
                                                    <h5 class="m-0 me-2">Total Activites Added</h5>
                                                </div>
                                            </div>
                                            <div id="yearlyActivityChart" class="px-3"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl">
                            <div
                                class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                                <div class="mb-2 mb-md-0">&#169;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>, made with ❤️ by <a href="https://themeselection.com" target="_blank"
                                        class="footer-link">ThemeSelection</a>
                                </div>
                                <div class="d-none d-lg-inline-block"><a
                                        href="https://themeselection.com/item/category/admin-templates/" target="_blank"
                                        class="footer-link me-4">Admin Templates</a><a
                                        href="https://themeselection.com/license/" class="footer-link me-4"
                                        target="_blank">License</a><a
                                        href="https://themeselection.com/item/category/bootstrap-admin-templates/"
                                        target="_blank" class="footer-link me-4">Bootstrap Dashboard</a><a
                                        href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
                                        target="_blank" class="footer-link me-4">Documentation</a><a
                                        href="https://github.com/themeselection/sneat-bootstrap-html-admin-template-free/issues"
                                        target="_blank" class="footer-link">Support</a></div>
                            </div>
                        </div>
                    </footer>
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <script src="../public/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../public/assets/vendor/libs/popper/popper.js"></script>
    <script src="../public/assets/vendor/js/bootstrap.js"></script>
    <script src="../public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../public/assets/vendor/js/menu.js"></script>
    <script src="../public/assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="../public/assets/js/main.js"></script>
    <script src="../public/assets/js/dashboards-analytics.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.min.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/countup.js@2.6.2/dist/countUp.umd.js"></script>



    <script>
        const counter = new countUp.CountUp('counter', <?php echo $userCount ?>); // Replace 1234 with your target number
        if (!counter.error) {
            counter.start();
        } else {
            console.error(counter.error);
        }
    </script>
    <script>
        console.log('getPercentageFromArray', <?php echo json_encode(getPercentageFromArray($getActivityUsageStatsWeekly['series'])); ?>);
        const chartData = <?php echo json_encode($result); ?>;


        let cardColor, headingColor, legendColor, labelColor, shadeColor, borderColor, fontFamily;
        cardColor = config.colors.cardColor;
        headingColor = config.colors.headingColor;
        legendColor = config.colors.bodyColor;
        labelColor = config.colors.textMuted;
        borderColor = config.colors.borderColor;
        fontFamily = config.fontFamily;
        const totalRevenueChartEl = document.querySelector('#yearlyActivityChart');
        const last12Months = chartData.labels;
        const activityData = chartData.data; // Or fetched from DB via AJAX

        const totalRevenueChartOptions = {
            series: [{
                name: 'Activity Score',
                data: activityData
            }],
            chart: {
                height: 300,
                stacked: true,
                type: 'bar',
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '30%',
                    borderRadius: 8
                }
            },
            colors: [config.colors.primary],
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
                width: 6,
                lineCap: 'round',
                colors: [cardColor]
            },
            legend: {
                show: true,
                horizontalAlign: 'left',
                position: 'top',
                labels: {
                    colors: legendColor
                }
            },
            grid: {
                strokeDashArray: 7,
                borderColor: borderColor
            },
            xaxis: {
                categories: last12Months,
                labels: {
                    style: {
                        fontSize: '13px',
                        fontFamily: fontFamily,
                        colors: labelColor
                    }
                }
            },
            yaxis: {
                labels: {
                    style: {
                        fontSize: '13px',
                        fontFamily: fontFamily,
                        colors: labelColor
                    }
                }
            }
        };

        if (totalRevenueChartEl !== null) {
            const totalRevenueChart = new ApexCharts(totalRevenueChartEl, totalRevenueChartOptions);
            totalRevenueChart.render();
        }





        // 
        const weaklyChart = <?php echo json_encode($getActivityUsageStatsWeekly); ?>;
        const chartOrderStatistics = document.querySelector('#orderStatisticsChart'),
            orderChartConfig = {
                chart: {
                    height: 165,
                    width: 136,
                    type: 'donut',
                    offsetX: 15
                },
                labels: weaklyChart.labels,
                series: weaklyChart.series,
                colors: [config.colors.success, config.colors.primary, config.colors.secondary, config.colors.info],
                stroke: {
                    width: 5,
                    colors: [cardColor]
                },
                dataLabels: {
                    enabled: false,
                    formatter: function(val, opt) {
                        return parseInt(val);
                    }
                },
                legend: {
                    show: false
                },
                grid: {
                    padding: {
                        top: 0,
                        bottom: 0,
                        right: 15
                    }
                },
                states: {
                    hover: {
                        filter: {
                            type: 'none'
                        }
                    },
                    active: {
                        filter: {
                            type: 'none'
                        }
                    }
                },
                plotOptions: {
                    pie: {
                        donut: {
                            size: '75%',
                            labels: {
                                show: true,
                                value: {
                                    fontSize: '1.125rem',
                                    fontFamily: fontFamily,
                                    fontWeight: 500,
                                    color: headingColor,
                                    offsetY: -17,
                                    formatter: function(val) {
                                        return parseInt(val) + '';
                                    }
                                },
                                name: {
                                    offsetY: 17,
                                    fontFamily: fontFamily
                                },
                                total: {
                                    show: true,
                                    fontSize: '13px',
                                    color: legendColor,
                                    label: 'Weekly',
                                    formatter: function(w) {
                                        return weaklyChart.series[0];
                                    }
                                }
                            }
                        }
                    }
                }
            };
        if (typeof chartOrderStatistics !== undefined && chartOrderStatistics !== null) {
            const statisticsChart = new ApexCharts(chartOrderStatistics, orderChartConfig);
            statisticsChart.render();
        }
    </script>


    <script>
        const getActivityUsageData = <?php echo json_encode($getActivityUsageData); ?>;
        var options = {
            chart: {
                type: 'donut',
                height: 350
            },
            series: getActivityUsageData.data,
            labels: getActivityUsageData.labels,
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 300
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }],
            legend: {
                show: false
            }
        };

        var chart = new ApexCharts(document.querySelector("#activityDonutChart"), options);
        chart.render();
    </script>

    <script>
        const logout = () => {
            fetch('api/auth/logout.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
            }).then(response => response.json()).then(data => {
                console.log('Success:', data);
                window.location.href = '/prana-wellness-app';
            }).catch(error => {
                console.error('Error:', error);
            });
        }
    </script>
</body>

</html>