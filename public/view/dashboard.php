<!doctype html>

<html lang="en" class="layout-menu-fixed layout-compact" data-assets-path="public/assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Demo: Dashboard - Analytics | Sneat - Bootstrap Dashboard FREE</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="public/assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="public/assets/vendor/fonts/iconify-icons.css" />

  <!-- Core CSS -->
  <!-- build:css public/assets/vendor/css/theme.css  -->

  <link rel="stylesheet" href="public/assets/vendor/css/core.css" />
  <link rel="stylesheet" href="public/assets/css/demo.css" />

  <!-- Vendors CSS -->

  <link rel="stylesheet" href="public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- endbuild -->

  <link rel="stylesheet" href="public/assets/vendor/libs/apex-charts/apex-charts.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="public/assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

  <script src="public/assets/js/config.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="index" class="app-brand-link gap-2">
            <span class="app-brand-logo demo">
              <img src="public/assets/img/logo.png" alt="" class="w-50 h-auto">
            </span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left d-block d-xl-none align-middle"></i>
          </a>
        </div>

        <div class="menu-divider mt-0"></div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboards -->
          <li class="menu-item active">
            <a href="javascript:void(0);" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-smile"></i>
              <div class="text-truncate" data-i18n="Dashboards">Dashboards</div>
              <span class="badge rounded-pill bg-danger ms-auto">5</span>
            </a>
          </li>

          <!-- Layouts -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-layout"></i>
              <div class="text-truncate" data-i18n="Layouts">Layouts</div>
            </a>

            <ul class="menu-sub">
              <li class="menu-item">
                <a href="layouts-without-menu.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Without menu">Without menu</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="layouts-without-navbar.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Without navbar">Without navbar</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="layouts-fluid.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Fluid">Fluid</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="layouts-container.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Container">Container</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="layouts-blank.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Blank">Blank</div>
                </a>
              </li>
            </ul>
          </li>

          <!-- Front Pages -->


          <!-- Apps & Pages -->
          <!-- Pages -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
              <div class="text-truncate" data-i18n="Account Settings">Account Settings</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="pages-account-settings-account.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Account">Account</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="pages-account-settings-notifications.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Notifications">Notifications</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="pages-account-settings-connections.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Connections">Connections</div>
                </a>
              </li>
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
                <input type="text" class="form-control border-0 shadow-none ps-1 ps-sm-2 d-md-block d-none"
                  placeholder="Search..." aria-label="Search..." />
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-md-auto">
              <!-- Place this tag where you want the button to render. -->
              <li class="nav-item lh-1 me-4">
                <a class="github-button"
                  href="https://github.com/themeselection/sneat-bootstrap-html-admin-template-free"
                  data-icon="octicon-star" data-size="large" data-show-count="true"
                  aria-label="Star themeselection/sneat-html-admin-template-free on GitHub">Star</a>
              </li>

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="public/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="public/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
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
                        <i class="flex-shrink-0 icon-base bx bx-credit-card icon-md me-3"></i><span
                          class="flex-grow-1 align-middle">Billing Plan</span>
                        <span class="flex-shrink-0 badge rounded-pill bg-danger">4</span>
                      </span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider my-1"></div>
                  </li>
                  <li>
                    <a onclick="logout()" class="dropdown-item" href="javascript:void(0);">
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
              <div class="col-xxl-12 mb-6 order-0">
                <div class="card">
                  <div class="d-flex align-items-start row">
                    <div class="col-sm-7">
                      <div class="card-body">
                        <h5 class="card-title text-primary mb-3">Congratulations John! 🎉</h5>

                        <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                      </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                      <div class="card-body pb-0 px-0 px-md-6">
                        <img src="public/assets/img/illustrations/man-with-laptop.png" height="175"
                          alt="View Badge User" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="col-xxl-4 col-lg-12 col-md-4 order-1">
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-6 mb-6">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between mb-4">
                          <div class="avatar flex-shrink-0">
                            <img src="public/assets/img/icons/unicons/chart-success.png" alt="chart success"
                              class="rounded" />
                          </div>
                          <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                              <i class="icon-base bx bx-dots-vertical-rounded text-body-secondary"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                              <a class="dropdown-item" href="javascript:void(0);">View More</a>
                              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                          </div>
                        </div>
                        <p class="mb-1">Profit</p>
                        <h4 class="card-title mb-3">$12,628</h4>
                        <small class="text-success fw-medium"><i class="icon-base bx bx-up-arrow-alt"></i>
                          +72.80%</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-6 mb-6">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between mb-4">
                          <div class="avatar flex-shrink-0">
                            <img src="public/assets/img/icons/unicons/wallet-info.png" alt="wallet info"
                              class="rounded" />
                          </div>
                          <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                              <i class="icon-base bx bx-dots-vertical-rounded text-body-secondary"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                              <a class="dropdown-item" href="javascript:void(0);">View More</a>
                              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                          </div>
                        </div>
                        <p class="mb-1">Sales</p>
                        <h4 class="card-title mb-3">$4,679</h4>
                        <small class="text-success fw-medium"><i class="icon-base bx bx-up-arrow-alt"></i>
                          +28.42%</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->

              <!-- my activity -->

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

              <div class="modal fade" id="addActiviteModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel3">Add Activity</h5>
                      <button type="button" class="btn-close  text-white bg-dark" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div style="display: flex; column-gap: 2rem;">

                        <!-- <div class="row"> -->
                        <div class="col mb-6">
                          <label for="activitySelect" class="form-label">Activity Name</label>
                          <select id="activitySelect" class="form-control">
                            <option value="none">Select Activity</option>
                          </select>
                        </div>
                        <!-- </div> -->


                        <div style="display: none;" id="yesNoBox" class="col-md-4 mb-6">
                          <label for="status" class="form-label">Select Yes Or No</label>
                          <select class="form-select" id="status" aria-label="Default select example">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>


                        <div id="timeOptionContainer" style="display:none;">
                          <div class="col-md-6 mb-6">
                            <label for="minTime" class="form-label">Time Duration</label>
                            <input type="number" id="minTime" class="form-control" placeholder="Enter Time Duration" />
                          </div>
                        </div>

                      </div>

                      <div style="display: none;" id="addActivity">

                        <button type="button" onclick="addActivity(this)" class="btn btn-primary d-grid w-25">
                          <span class="text">Add</span>
                        </button>

                      </div>


                      <div style="margin-top: 2rem;" id="userAddedActivity">

                      </div>


                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-label-secondary text-danger" data-bs-dismiss="modal">
                        Close
                      </button>
                      <button type="button" onclick="activitySubmit(this)" class="btn btn-primary d-grid w-25">
                        <div class="spinner-border text-light d-none" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div>
                        <span class="text">Submit</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>



              <!-- Total Revenue -->
              <div class="col-12 col-xxl-8 order-2 order-md-3 order-xxl-2 mb-6 total-revenue">
                <div class="card">
                  <div class="row row-bordered g-0">
                    <div class="col-lg-8">
                      <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="card-title mb-0">
                          <h5 class="m-0 me-2">Total Revenue</h5>
                        </div>
                        <div class="dropdown">
                          <button class="btn p-0" type="button" id="totalRevenue" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="icon-base bx bx-dots-vertical-rounded icon-lg text-body-secondary"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalRevenue">
                            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                          </div>
                        </div>
                      </div>
                      <div id="totalRevenueChart" class="px-3"></div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card-body px-xl-9 py-12 d-flex align-items-center flex-column">
                        <div class="text-center mb-6">
                          <div class="btn-group">
                            <button type="button" class="btn btn-outline-primary">
                              <script>
                                document.write(new Date().getFullYear() - 1);
                              </script>
                            </button>
                            <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="javascript:void(0);">2021</a></li>
                              <li><a class="dropdown-item" href="javascript:void(0);">2020</a></li>
                              <li><a class="dropdown-item" href="javascript:void(0);">2019</a></li>
                            </ul>
                          </div>
                        </div>

                        <div id="growthChart"></div>
                        <div class="text-center fw-medium my-6">62% Company Growth</div>

                        <div class="d-flex gap-11 justify-content-between">
                          <div class="d-flex">
                            <div class="avatar me-2">
                              <span class="avatar-initial rounded-2 bg-label-primary"><i
                                  class="icon-base bx bx-dollar icon-lg text-primary"></i></span>
                            </div>
                            <div class="d-flex flex-column">
                              <small>
                                <script>
                                  document.write(new Date().getFullYear() - 1);
                                </script>
                              </small>
                              <h6 class="mb-0">$32.5k</h6>
                            </div>
                          </div>
                          <div class="d-flex">
                            <div class="avatar me-2">
                              <span class="avatar-initial rounded-2 bg-label-info"><i
                                  class="icon-base bx bx-wallet icon-lg text-info"></i></span>
                            </div>
                            <div class="d-flex flex-column">
                              <small>
                                <script>
                                  document.write(new Date().getFullYear() - 2);
                                </script>
                              </small>
                              <h6 class="mb-0">$41.2k</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Total Revenue -->
              <div class="col-12 col-md-8 col-lg-12 col-xxl-4 order-3 order-md-2 profile-report">
                <div class="row">
                  <div class="col-6 mb-6 payments">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between mb-4">
                          <div class="avatar flex-shrink-0">
                            <img src="public/assets/img/icons/unicons/paypal.png" alt="paypal" class="rounded" />
                          </div>
                          <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                              <i class="icon-base bx bx-dots-vertical-rounded text-body-secondary"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                              <a class="dropdown-item" href="javascript:void(0);">View More</a>
                              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                          </div>
                        </div>
                        <p class="mb-1">Payments</p>
                        <h4 class="card-title mb-3">$2,456</h4>
                        <small class="text-danger fw-medium"><i class="icon-base bx bx-down-arrow-alt"></i>
                          -14.82%</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 mb-6 transactions">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between mb-4">
                          <div class="avatar flex-shrink-0">
                            <img src="public/assets/img/icons/unicons/cc-primary.png" alt="Credit Card"
                              class="rounded" />
                          </div>
                          <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                              <i class="icon-base bx bx-dots-vertical-rounded text-body-secondary"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="cardOpt1">
                              <a class="dropdown-item" href="javascript:void(0);">View More</a>
                              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                          </div>
                        </div>
                        <p class="mb-1">Transactions</p>
                        <h4 class="card-title mb-3">$14,857</h4>
                        <small class="text-success fw-medium"><i class="icon-base bx bx-up-arrow-alt"></i>
                          +28.14%</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 mb-6 profile-report">
                    <div class="card h-100">
                      <div class="card-body">
                        <div
                          class="d-flex justify-content-between align-items-center flex-sm-row flex-column gap-10 flex-wrap">
                          <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                            <div class="card-title mb-6">
                              <h5 class="text-nowrap mb-1">Profile Report</h5>
                              <span class="badge bg-label-warning">YEAR 2022</span>
                            </div>
                            <div class="mt-sm-auto">
                              <span class="text-success text-nowrap fw-medium"><i
                                  class="icon-base bx bx-up-arrow-alt"></i> 68.2%</span>
                              <h4 class="mb-0">$84,686k</h4>
                            </div>
                          </div>
                          <div id="profileReportChart"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- Order Statistics -->
              <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-6">
                <div class="card h-100">
                  <div class="card-header d-flex justify-content-between">
                    <div class="card-title mb-0">
                      <h5 class="mb-1 me-2">Order Statistics</h5>
                      <p class="card-subtitle">42.82k Total Sales</p>
                    </div>
                    <div class="dropdown">
                      <button class="btn text-body-secondary p-0" type="button" id="orederStatistics"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-base bx bx-dots-vertical-rounded icon-lg"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                        <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                        <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                        <a class="dropdown-item" href="javascript:void(0);">Share</a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-6">
                      <div class="d-flex flex-column align-items-center gap-1">
                        <h3 class="mb-1">8,258</h3>
                        <small>Total Orders</small>
                      </div>
                      <div id="orderStatisticsChart"></div>
                    </div>
                    <ul class="p-0 m-0">
                      <li class="d-flex align-items-center mb-5">
                        <div class="avatar flex-shrink-0 me-3">
                          <span class="avatar-initial rounded bg-label-primary"><i
                              class="icon-base bx bx-mobile-alt"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                          <div class="me-2">
                            <h6 class="mb-0">Electronic</h6>
                            <small>Mobile, Earbuds, TV</small>
                          </div>
                          <div class="user-progress">
                            <h6 class="mb-0">82.5k</h6>
                          </div>
                        </div>
                      </li>
                      <li class="d-flex align-items-center mb-5">
                        <div class="avatar flex-shrink-0 me-3">
                          <span class="avatar-initial rounded bg-label-success"><i
                              class="icon-base bx bx-closet"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                          <div class="me-2">
                            <h6 class="mb-0">Fashion</h6>
                            <small>T-shirt, Jeans, Shoes</small>
                          </div>
                          <div class="user-progress">
                            <h6 class="mb-0">23.8k</h6>
                          </div>
                        </div>
                      </li>
                      <li class="d-flex align-items-center mb-5">
                        <div class="avatar flex-shrink-0 me-3">
                          <span class="avatar-initial rounded bg-label-info"><i
                              class="icon-base bx bx-home-alt"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                          <div class="me-2">
                            <h6 class="mb-0">Decor</h6>
                            <small>Fine Art, Dining</small>
                          </div>
                          <div class="user-progress">
                            <h6 class="mb-0">849k</h6>
                          </div>
                        </div>
                      </li>
                      <li class="d-flex align-items-center">
                        <div class="avatar flex-shrink-0 me-3">
                          <span class="avatar-initial rounded bg-label-secondary"><i
                              class="icon-base bx bx-football"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                          <div class="me-2">
                            <h6 class="mb-0">Sports</h6>
                            <small>Football, Cricket Kit</small>
                          </div>
                          <div class="user-progress">
                            <h6 class="mb-0">99</h6>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--/ Order Statistics -->

              <!-- Expense Overview -->
              <div class="col-md-6 col-lg-4 order-1 mb-6">
                <div class="card h-100">
                  <div class="card-header nav-align-top">
                    <ul class="nav nav-pills flex-wrap row-gap-2" role="tablist">
                      <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                          data-bs-target="#navs-tabs-line-card-income" aria-controls="navs-tabs-line-card-income"
                          aria-selected="true">
                          Income
                        </button>
                      </li>
                      <li class="nav-item">
                        <button type="button" class="nav-link" role="tab">Expenses</button>
                      </li>
                      <li class="nav-item">
                        <button type="button" class="nav-link" role="tab">Profit</button>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <div class="tab-content p-0">
                      <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                        <div class="d-flex mb-6">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="public/assets/img/icons/unicons/wallet.png" alt="User" />
                          </div>
                          <div>
                            <p class="mb-0">Total Balance</p>
                            <div class="d-flex align-items-center">
                              <h6 class="mb-0 me-1">$459.10</h6>
                              <small class="text-success fw-medium">
                                <i class="icon-base bx bx-chevron-up icon-lg"></i>
                                42.9%
                              </small>
                            </div>
                          </div>
                        </div>
                        <div id="incomeChart"></div>
                        <div class="d-flex align-items-center justify-content-center mt-6 gap-3">
                          <div class="flex-shrink-0">
                            <div id="expensesOfWeek"></div>
                          </div>
                          <div>
                            <h6 class="mb-0">Income this week</h6>
                            <small>$39k less than last week</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Expense Overview -->

              <!-- Transactions -->
              <div class="col-md-6 col-lg-4 order-2 mb-6">
                <div class="card h-100">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Transactions</h5>
                    <div class="dropdown">
                      <button class="btn text-body-secondary p-0" type="button" id="transactionID"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-base bx bx-dots-vertical-rounded icon-lg"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                        <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                        <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                        <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-4">
                    <ul class="p-0 m-0">
                      <li class="d-flex align-items-center mb-6">
                        <div class="avatar flex-shrink-0 me-3">
                          <img src="public/assets/img/icons/unicons/paypal.png" alt="User" class="rounded" />
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                          <div class="me-2">
                            <small class="d-block">Paypal</small>
                            <h6 class="fw-normal mb-0">Send money</h6>
                          </div>
                          <div class="user-progress d-flex align-items-center gap-2">
                            <h6 class="fw-normal mb-0">+82.6</h6>
                            <span class="text-body-secondary">USD</span>
                          </div>
                        </div>
                      </li>
                      <li class="d-flex align-items-center mb-6">
                        <div class="avatar flex-shrink-0 me-3">
                          <img src="public/assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                          <div class="me-2">
                            <small class="d-block">Wallet</small>
                            <h6 class="fw-normal mb-0">Mac'D</h6>
                          </div>
                          <div class="user-progress d-flex align-items-center gap-2">
                            <h6 class="fw-normal mb-0">+270.69</h6>
                            <span class="text-body-secondary">USD</span>
                          </div>
                        </div>
                      </li>
                      <li class="d-flex align-items-center mb-6">
                        <div class="avatar flex-shrink-0 me-3">
                          <img src="public/assets/img/icons/unicons/chart.png" alt="User" class="rounded" />
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                          <div class="me-2">
                            <small class="d-block">Transfer</small>
                            <h6 class="fw-normal mb-0">Refund</h6>
                          </div>
                          <div class="user-progress d-flex align-items-center gap-2">
                            <h6 class="fw-normal mb-0">+637.91</h6>
                            <span class="text-body-secondary">USD</span>
                          </div>
                        </div>
                      </li>
                      <li class="d-flex align-items-center mb-6">
                        <div class="avatar flex-shrink-0 me-3">
                          <img src="public/assets/img/icons/unicons/cc-primary.png" alt="User" class="rounded" />
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                          <div class="me-2">
                            <small class="d-block">Credit Card</small>
                            <h6 class="fw-normal mb-0">Ordered Food</h6>
                          </div>
                          <div class="user-progress d-flex align-items-center gap-2">
                            <h6 class="fw-normal mb-0">-838.71</h6>
                            <span class="text-body-secondary">USD</span>
                          </div>
                        </div>
                      </li>
                      <li class="d-flex align-items-center mb-6">
                        <div class="avatar flex-shrink-0 me-3">
                          <img src="public/assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                          <div class="me-2">
                            <small class="d-block">Wallet</small>
                            <h6 class="fw-normal mb-0">Starbucks</h6>
                          </div>
                          <div class="user-progress d-flex align-items-center gap-2">
                            <h6 class="fw-normal mb-0">+203.33</h6>
                            <span class="text-body-secondary">USD</span>
                          </div>
                        </div>
                      </li>
                      <li class="d-flex align-items-center">
                        <div class="avatar flex-shrink-0 me-3">
                          <img src="public/assets/img/icons/unicons/cc-warning.png" alt="User" class="rounded" />
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                          <div class="me-2">
                            <small class="d-block">Mastercard</small>
                            <h6 class="fw-normal mb-0">Ordered Food</h6>
                          </div>
                          <div class="user-progress d-flex align-items-center gap-2">
                            <h6 class="fw-normal mb-0">-92.45</h6>
                            <span class="text-body-secondary">USD</span>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--/ Transactions -->
            </div>
          </div>
          <!-- / Content -->

          <!-- Footer -->
          <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl">
              <div
                class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  &#169;
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link">ThemeSelection</a>
                </div>
                <div class="d-none d-lg-inline-block">
                  <a href="https://themeselection.com/item/category/admin-templates/" target="_blank"
                    class="footer-link me-4">Admin Templates</a>

                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/item/category/bootstrap-admin-templates/" target="_blank"
                    class="footer-link me-4">Bootstrap Dashboard</a>

                  <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank" class="footer-link me-4">Documentation</a>

                  <a href="https://github.com/themeselection/sneat-bootstrap-html-admin-template-free/issues"
                    target="_blank" class="footer-link">Support</a>
                </div>
              </div>
            </div>
          </footer>
          <!-- / Footer -->

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

  <script src="public/assets/vendor/libs/jquery/jquery.js"></script>

  <script src="public/assets/vendor/libs/popper/popper.js"></script>
  <script src="public/assets/vendor/js/bootstrap.js"></script>

  <script src="public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="public/assets/vendor/js/menu.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="public/assets/vendor/libs/apex-charts/apexcharts.js"></script>

  <!-- Main JS -->

  <script src="public/assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="public/assets/js/dashboards-analytics.js"></script>

  <!-- Place this tag before closing body tag for github widget button. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>

  <script>
    const logout = () => {
      fetch('api/auth/logout.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded', // or 'application/json' if you prefer
          },
        })
        .then(response => response.json()) // or response.text() if PHP returns plain text
        .then(data => {
          console.log('Success:', data);
          window.location.href = '/prana-wellness-app'; // Redirect to index.php after logout
        })
        .catch(error => {
          console.error('Error:', error);
        });
    }

    // fetch Activities
    const select = document.getElementById('activitySelect');
    const timeOptionContainer = document.getElementById("timeOptionContainer")
    const yesNoBox = document.getElementById("yesNoBox")
    const addActivityBtn = document.getElementById("addActivity")

    const activityTime = document.getElementById("minTime")
    const activityYesNo = document.getElementById("status").value




    const fetchAllActvity = async () => {

      try {
        let allActvity = await fetch("api/activities/get.php")
        allActvity = await allActvity.json()
        allActvity = allActvity.activity

        // console.log(allActvity , select)
        // debugger;

        let options = '';
        allActvity.map(activity => {
          options += `<option type = "${activity.type}"  value="${activity.id}">${activity.name}</option>`;
        });

        select.innerHTML += options;
      } catch (error) {

        console.log("error", error)

      }
    }

    fetchAllActvity()



    select.addEventListener("change", () => {



      let selectedOption = select.options[select.selectedIndex];
      let type = selectedOption.getAttribute('type');
      let selectedOptionValue = selectedOption.value

      if (selectedOptionValue != "none") {
        if (type == "time") {
          timeOptionContainer.style.display = "block"
          yesNoBox.style.display = "none"
          addActivityBtn.style.display = "block"

        } else {
          yesNoBox.style.display = "block"
          timeOptionContainer.style.display = "none"
          addActivityBtn.style.display = "block"

        }
      } else {
        timeOptionContainer.style.display = "none"
        yesNoBox.style.display = "none"
        addActivityBtn.style.display = "none"
      }

    });

    const userAddedActivity = document.getElementById("userAddedActivity")
    const addActivity = () => {
      let selectedOption = select.options[select.selectedIndex];
      let type = selectedOption.getAttribute('type');
      let activityName = selectedOption.innerHTML;
      let activityValue = selectedOption.value;

      let activityTypeValue = ""
      let activitydata
      if (type == "time") {
        let value = activityTime.value
        activityTypeValue = `<input type="text"  id="${activityValue}" class="form-control me-2"  value="${value}" readonly />`
        activitydata = value
      } else {

        activityTypeValue = `<input type="text" id="${activityValue}" value="${activityYesNo}" class="form-control me-2" readonly />`;
        activitydata = activityYesNo
      }

      userAddedActivity.innerHTML += `
  <div class="d-flex align-items-center mb-3">
    <input type="text" data-activity = "${activitydata}" id="${activityValue}" value="${activityName}" class="form-control me-2 userAddedActivities" readonly />
    ${activityTypeValue}
  </div>`;



    }

    const activitySubmit = () => {
      const inputs = document.querySelectorAll('input.userAddedActivities');

      const result = Array.from(inputs).map(input => ({
        activity: input.getAttribute('data-activity'),
        id: input.id,
        value: input.value
      }));

      console.log(result);

    }
  </script>
</body>

</html>