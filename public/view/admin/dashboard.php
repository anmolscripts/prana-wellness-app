<?php include_once '../../layout/header.php'; ?>
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