<!doctype html>
<html lang="en" class="layout-menu-fixed layout-compact" data-assets-path="../../public/assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Demo: Dashboard - Analytics | Sneat - Bootstrap Dashboard FREE</title>
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
                    <li class="menu-item "><a href="javascript:void(0);" class="menu-link"><i
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
                                class="menu-icon tf-icons bx bx-layout"></i>
                            <div class="text-truncate" data-i18n="Layouts">Layouts</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a href="layouts-without-menu.html" class="menu-link">
                                    <div class="text-truncate" data-i18n="Without menu">Without menu</div>
                                </a></li>
                            <li class="menu-item"><a href="layouts-without-navbar.html" class="menu-link">
                                    <div class="text-truncate" data-i18n="Without navbar">Without navbar</div>
                                </a></li>
                            <li class="menu-item"><a href="layouts-fluid.html" class="menu-link">
                                    <div class="text-truncate" data-i18n="Fluid">Fluid</div>
                                </a></li>
                            <li class="menu-item"><a href="layouts-container.html" class="menu-link">
                                    <div class="text-truncate" data-i18n="Container">Container</div>
                                </a></li>
                            <li class="menu-item"><a href="layouts-blank.html" class="menu-link">
                                    <div class="text-truncate" data-i18n="Blank">Blank</div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="javascript:void(0);" class="menu-link menu-toggle"><i
                                class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div class="text-truncate" data-i18n="Account Settings">Account Settings</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a href="pages-account-settings-account.html" class="menu-link">
                                    <div class="text-truncate" data-i18n="Account">Account</div>
                                </a></li>
                            <li class="menu-item"><a href="pages-account-settings-notifications.html" class="menu-link">
                                    <div class="text-truncate" data-i18n="Notifications">Notifications</div>
                                </a></li>
                            <li class="menu-item"><a href="pages-account-settings-connections.html" class="menu-link">
                                    <div class="text-truncate" data-i18n="Connections">Connections</div>
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
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>S No.</th>
                                            <th>Activite</th>
                                            <th>Min Duration</th>
                                            <th>Max Duration</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        <tr>
                                            <td>
                                                <span>Angular Project</span>
                                            </td>
                                            <td>Albert Cook</td>
                                            <td>10:00</td>
                                            <td>
                                                20:00
                                                <!-- <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
                                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                        aria-label="Lilian Fuller"
                                                        data-bs-original-title="Lilian Fuller">
                                                        <img src="../public/assets/img/avatars/1.png" alt="Avatar"
                                                            class="rounded-circle">
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                        aria-label="Sophia Wilkerson"
                                                        data-bs-original-title="Sophia Wilkerson">
                                                        <img src="../public/assets/img/avatars/2.png" alt="Avatar"
                                                            class="rounded-circle">
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                        aria-label="Christina Parker"
                                                        data-bs-original-title="Christina Parker">
                                                        <img src="../public/assets/img/avatars/3.png" alt="Avatar"
                                                            class="rounded-circle">
                                                    </li>
                                                </ul> -->
                                            </td>
                                            <td><span class="badge bg-label-primary me-1">Active</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown"><i
                                                            class="icon-base bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="icon-base bx bx-edit-alt me-1"></i> Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="icon-base bx bx-trash me-1"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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



    <!-- <script>
        mdtimepicker('#timepicker');
        document.querySelector('#timepicker').addEventListener('timechanged', function (e) {
            console.log(e.value); // gets the input value
            console.log(e.time);  // gets the data-time value
        });
    </script> -->
    <script>
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
                        alert(data.message);
                        location.reload();
                    } else {
                        alert(data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    spinner.classList.add('d-none');
                    text.classList.remove('d-none');
                });
        }
    </script>
</body>

</html>