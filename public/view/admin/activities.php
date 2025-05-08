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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/dmuy/MDTimePicker@2.0.1/dist/mdtimepicker.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />
    <script src="../public/assets/vendor/js/helpers.js"></script>
    <script src="../public/assets/js/config.js"></script>


    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.0/css/dataTables.dataTables.css" />

    <style>
        .alert-container {
            top: -5rem;
            animation: slideIn 3s ease 1 forwards;
        }

        @keyframes slideIn {
            0% {
                top: -5rem;
            }

            15% {
                top: 0px;
            }

            85% {
                top: 0px;
            }

            100% {
                top: -5rem;
            }
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
                    <li class="menu-item "><a href="dashboard" class="menu-link"><i
                                class="menu-icon tf-icons bx bx-home-smile"></i>
                            <div class="text-truncate" data-i18n="Dashboards">Dashboards</div><span
                                class="badge rounded-pill bg-danger ms-auto">5</span>
                        </a></li>
                    <li class="menu-item active"><a href="javascript:void(0);" class="menu-link"><i
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

                        <div class="card">
                            <div class="d-flex justify-content-between align-items-center pe-5">
                                <h5 class="card-header">Activities Table</h5>

                                <button type="button" class="btn rounded-pill btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#addActiviteModal">
                                    <span class="icon-base bx bx-plus icon-sm me-2"></span>Add Activite

                                </button>

                            </div>
                            <div id="activitesTable" class="table-responsive text-nowrap max-h-30 ">
                                <table class="table table-borderless">
                                    <thead class="position-sticky top-0 table-dark ">
                                        <tr>
                                            <th>S No.</th>
                                            <th>Activite</th>
                                            <th>Type</th>
                                            <th>State</th>
                                            <th>Min Duration</th>
                                            <th>Max Duration</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="actiityTbody" class="table-border-bottom-0">
                                        <tr>
                                            <td colspan="9" class="text-center">
                                                <div class="spinner-border text-primary" role="status">
                                                    <span class="visually-hidden">Loading...</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <!-- <div class="col-12 col-xxl-8 order-2 order-md-3 order-xxl-2 mb-6 total-revenue mt-5">
                            <div class="card">
                                <div class="row row-bordered g-0">
                                    <div class="col-lg-8">
                                        <div class="card-header d-flex align-items-center justify-content-between">
                                            <div class="card-title mb-0">
                                                <h5 class="m-0 me-2">Activity Used</h5>
                                            </div>
                                            <div class="dropdown"><button class="btn p-0" type="button"
                                                    id="totalRevenue" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="icon-base bx bx-dots-vertical-rounded icon-lg text-body-secondary"></i></button>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="totalRevenue"><a class="dropdown-item"
                                                        href="javascript:void(0);">Select All</a><a
                                                        class="dropdown-item" href="javascript:void(0);">Refresh</a><a
                                                        class="dropdown-item" href="javascript:void(0);">Share</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card-body px-xl-9 py-12 d-flex align-items-center flex-column">
                                            <canvas id="activityChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>


    <!-- Large Modal -->
    <div class="modal fade" id="addActiviteModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel3">Add Activity</h5>
                    <button type="button" class="btn-close  text-white bg-dark" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-6">
                            <label for="nameLarge" class="form-label">Activity Name</label>
                            <input type="text" id="nameLarge" class="form-control" placeholder="Enter Name" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 mb-6">
                            <label for="status" class="form-label">Type of Activity</label>
                            <select onchange="showTimeOption(this);" class="form-select" id="type"
                                aria-label="Default select example">
                                <option value="time">Time Based (Min/Day)</option>
                                <option selected="" value="boolean">Yes/No questions</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-6">
                            <label for="status" class="form-label">Example select</label>
                            <select class="form-select" id="status" aria-label="Default select example">
                                <option selected="" value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div id="timeOptionContainer" style="display:none;">
                        <div class="row align-items-center">
                            <div class="col-md-6 mb-6">
                                <label for="minTime" class="form-label">Min Time</label>
                                <input type="number" id="minTime" class="form-control" placeholder="Enter Name" />
                                <!-- <input type="text" id="minDuration" class="form-control" placeholder="Enter Min Duration" /> -->
                            </div>
                            <div class="col-md-6 mb-6">
                                <label for="minTime" class="form-label">Max Time</label>
                                <input type="number" id="maxTime" class="form-control" placeholder="Enter Name" />
                                <!-- <input type="text" id="minDuration" class="form-control" placeholder="Enter Min Duration" /> -->
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary text-danger" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" onclick="addActivity(this)" class="btn btn-primary d-grid w-25">
                        <div class="spinner-border text-light d-none" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <span class="text">Add</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="aleartContainer" class="position-fixed d-flex justify-content-center w-100 pt-5 alert-container d-none"
        style="z-index: 9999;">
        <div class="alert alert-primary shadow-lg" role="alert">This is a primary alert — check it out!</div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/dmuy/MDTimePicker@2.0.1/dist/mdtimepicker.js"></script>
    <script src="../public/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../public/assets/vendor/libs/popper/popper.js"></script>
    <script src="../public/assets/vendor/js/bootstrap.js"></script>
    <script src="../public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../public/assets/vendor/js/menu.js"></script>
    <script src="../public/assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="../public/assets/js/main.js"></script>
    <script src="../public/assets/js/dashboards-analytics.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.3.0/js/dataTables.js"></script>

    <script src="
https://cdn.jsdelivr.net/npm/chart.js@4.4.9/dist/chart.umd.min.js
"></script>

    <script src="/prana-wellness-app/public/js/bindActivitys.js"></script>



    <script>
        async function loadActivityChart() {
            const res = await fetch('../api/activities/getUser.php');
            const data = await res.json();
            // console.log(data);
            if (data.error) {
                alert('Error fetching data: ' + data.error);
                return;
            }
           let activityes = data.activity;
            const labels = activityes.map(item => item.name);
            const counts = activityes.map(item => item.total_logs);

            const colors = labels.map((_, i) =>
                `hsl(${(i * 360 / labels.length)}, 70%, 60%)`
            );

            const ctx = document.getElementById('activityChart').getContext('2d');
            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Logged Activities',
                        data: counts,
                        backgroundColor: colors,
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        title: {
                            display: true,
                            text: 'Activity Usage Summary'
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }
            });
        }

        loadActivityChart();
    </script>

    <!-- <script>
        document.addEventListener('DOMContentLoaded', () => {
            const ctx = document.getElementById('dounatChat').getContext('2d');
            const data = {
                labels: ['Red', 'Blue', 'Yellow'],
                datasets: [{
                    label: 'Votes',
                    data: [300, 50, 100],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 206, 86, 0.7)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            };

            const config = {
                type: 'doughnut',
                data: data,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        },
                        title: {
                            display: true,
                            text: 'Doughnut Chart Example'
                        }
                    }
                },
            };

            const myDoughnutChart = new Chart(ctx, config);
        });


    </script> -->

    <!-- <script>
        mdtimepicker('#timepicker');
        document.querySelector('#timepicker').addEventListener('timechanged', function (e) {
            console.log(e.value); // gets the input value
            console.log(e.time);  // gets the data-time value
        });
    </script> -->
    <script>
        $(document).ready(function () {
            // $('#activitesTable').DataTable();
        });
        const logout = () => {
            fetch('api/auth/logout.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
            })
                .then(response => response.json()).then(data => { console.log('Success:', data); window.location.href = '/prana-wellness-app'; }).catch(error => { console.error('Error:', error); });
        }

        const showTimeOption = (select) => {
            const selectedValue = select.value;
            const timeInput = document.getElementById('timeOptionContainer');
            if (selectedValue === 'time') {
                timeInput.style.display = 'block';
            } else {
                timeInput.style.display = 'none';
            }
        }


        const addActivity = (btn) => {
            const name = document.getElementById('nameLarge');
            const status = document.getElementById('status');
            const minTime = document.getElementById('minTime');
            const maxTime = document.getElementById('maxTime');
            const type = document.getElementById('type');
            const aleartContainer = document.getElementById('aleartContainer');
            if (name.value === '') {
                name.classList.add('is-invalid');
                return;
            } else {
                name.classList.remove('is-invalid');
            }

            const typeValue = type.value;
            if (typeValue === 'time') {

                if (minTime.value === '') {
                    minTime.classList.add('is-invalid');
                    return;
                } else {
                    minTime.classList.remove('is-invalid');
                }

                if (maxTime.value === '') {
                    maxTime.classList.add('is-invalid');
                    return;
                } else {
                    maxTime.classList.remove('is-invalid');
                }
            }
            const spinner = btn.querySelector('.spinner-border');
            const text = btn.querySelector('.text');



            spinner.classList.remove('d-none');
            text.classList.add('d-none');
            fetch('../api/activities/add.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: new URLSearchParams({
                    name: name.value,
                    type: typeValue,
                    status: status.value,
                    minTime: minTime.value,
                    maxTime: maxTime.value,
                })
            })
                .then(response => response.json())
                .then(data => {
                    console.log('Success:', data);
                    spinner.classList.add('d-none');
                    text.classList.remove('d-none');
                    if (data.success) {
                        const aleart = aleartContainer.querySelector('[role="alert"]');
                        aleart.innerText = 'Activity added successfully!';
                        aleartContainer.classList.remove('d-none');
                        location.reload();
                    } else {

                    }
                })
                .catch(error => {
                    console.error('Error:', error);

                }).finally(() => {
                    spinner.classList.add('d-none');
                    text.classList.remove('d-none');
                }

                );
        }




        const activities = {
            getAll: () => {
                fetch('../api/activities/get.php', {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                })
                    .then(response => response.json())
                    .then(data => {
                        console.log('Success:', data);
                        if (data.success) {
                            bindActivitys(data.activity, document.getElementById('actiityTbody'));
                            const aleart = aleartContainer.querySelector('[role="alert"]');
                            aleart.innerText = 'Activity added successfully!';
                            aleartContainer.classList.remove('d-none');
                            // location.reload();
                        } else {

                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);

                    });
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            // Initialize DataTable
            activities.getAll();
        });
    </script>
</body>

</html>