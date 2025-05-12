<?php session_start(); ?>
<?php

require_once '../../functions/db.php';
require_once '../../functions/userFunctions/activity_user_chart.php';
require_once '../../functions/userFunctions/userUtility.php';

$userId = $_SESSION['user']['id'];
$pdo = getConnection();
// $result = getMonthlyActivityAdditions($pdo);

$getActivityUsageData = getUserActivityUsageData($pdo, $userId);


$getActivityUsageStats = getActivityUsageStats($pdo, $dbname, 'user_activities', 'activity', $userId);

// $userCount = getUsersCount($pdo, $dbname, 'users');

// $getActivityUsageStatsWeekly = getActivityUsageStatsWeekly($pdo, $dbname, 'user_activities', 'activity');
?>

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
                    <div id="activitesTable" class="table-responsive text-nowrap max-h-30 ">
                      <table class="table table-borderless">
                        <thead class="position-sticky top-0 table-dark ">
                          <tr>
                            <th>S No.</th>
                            <th>Activite Name</th>
                            <th>Type</th>
                            <th>Time Duration</th>
                            <th>Yes/No</th>
                            <th>Score</th>
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
                </div>
                <!-- <footer class="content-footer footer bg-footer-theme">
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
                </footer> -->
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
                      <div class="d-flex gap-2 mb-3">

                        <!-- <div class="row"> -->
                        <div class="w-100">
                          <label for="activitySelect" class="form-label">Activity Name</label>
                          <select id="activitySelect" class="form-control w-100">
                            <option value="none">Select Activity</option>
                          </select>
                        </div>
                        <!-- </div> -->


                        <div style="display: none;" id="yesNoBox" class="w-25">
                          <label for="status" class="form-label">Select Yes Or No</label>
                          <select class="form-select" id="status" aria-label="Default select example">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>


                        <div class="w-25" id="timeOptionContainer" style="display:none;">
                          <div class="">
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


              <!-- delete pop up show -->

              <div class="col-lg-4 col-md-6">
                <!-- <small class="fw-medium">Toggle Between Modals</small> -->
                <div class="mt-4">
                  <!-- <button
                              type="button"
                              class="btn btn-primary"
                             
                              >
                              Launch modal
                            </button> -->

                  <!-- Modal 1-->
                  <div
                    class="modal fade"
                    id="modalToggle"
                    aria-labelledby="modalToggleLabel"
                    tabindex="-1"
                    style="display: none"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content ">
                        <div class="modal-header">

                          <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        </div>
                        <div class="pb-12" style="display: flex; flex-direction: column; justify-content: center;  align-items: center; ">
                          <div class="modal-body fs-5">
                            Are You sure , You want to delete activity ?
                          </div>

                          <div style="column-gap: 2rem;" class="d-flex ">
                            <div class="">
                              <button onclick="deleteUserActivity()"
                                class="btn btn-danger deleteButton"
                                data-bs-dismiss="modal"
                                aria-label="Close">
                                Delete
                              </button>
                            </div>
                            <div class="">
                              <button
                                class="btn btn-primary"
                                data-bs-dismiss="modal"
                                aria-label="Close">
                                Cancel
                              </button>
                            </div>
                          </div>
                        </div>



                      </div>
                    </div>
                  </div>
                  <!-- Modal 2-->

                </div>
              </div>


              <!-- aactvitity histrory -->

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


              <!-- Total Revenue -->

              <!--/ Total Revenue -->

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
  <script src="/prana-wellness-app/public/js/userBindActivity.js"></script>


</body>

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
        // console.log('Success:', data);
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

  let allactivityNames = "";

  const fetchAllActvity = async () => {

    try {
      let allActvity = await fetch("api/activities/get.php")
      allActvity = await allActvity.json()

      allActvity = allActvity.activity
      allactivityNames = allActvity


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



    actvityAditionOnModal()

  });

  const actvityAditionOnModal = () => {
    let selectedOption = select.options[select.selectedIndex];
    let type = selectedOption.getAttribute('type');
    let selectedOptionValue = selectedOption.value
    debugger;
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

  }

  const userAddedActivity = document.getElementById("userAddedActivity")
  const addActivity = () => {

    let selectedOption = select.options[select.selectedIndex];
    let selectedOptionValue = selectedOption.value
    if (selectedOptionValue == "none") {
      return

    }

    


    const activityYesNo = document.getElementById("status").value
    let type = selectedOption.getAttribute('type');
    let activityName = selectedOption.innerHTML;
    let activityId = selectedOption.value;

    let activityTypeValue = ""
    let activitydata
    let actvityType = ""

    if (type == "time") {
      if (activityTime.value < 0 || activityTime.value == null || activityTime.value == "") {
      alert("Please enter activity duration")
      return
    }


      let value = activityTime.value
      activityTypeValue = `<input type="text"   activity-id="${activityId}" class="form-control me-2"  value="${value}" readonly />`
      activitydata = value
      actvityType = "time"
    } else {

      activityTypeValue = `<input type="text"  activity-id="${activityId}" value="${activityYesNo}" class="form-control me-2" readonly />`;
      activitydata = activityYesNo
      actvityType = "boolean"
    }

    userAddedActivity.innerHTML += `
  <div data-activityId = "${activityId}" class="row w-100 mb-2">
  <div class="col-9">
    <input  type="text" activity-type = "${actvityType}" data-activity = "${activitydata}" id="${activityId}" value="${activityName}" class="form-control  me-2 userAddedActivities" readonly /> 
  </div>
  <div class="col-2"> 
  ${activityTypeValue}
  </div>

  <div class="col-1" > 
  <button activityId="${activityId}" class="btn btn-danger minusBtn"><i class='bx bxs-trash-alt text-white fs-5 pe-none'></i></button>

  </div>
    
    
  </div>`;


    const valueToRemove = activityId; // replace with the value you want to remove

    const optionToRemove = Array.from(select.options).find(option => option.value === valueToRemove);

    if (optionToRemove) {
      select.removeChild(optionToRemove);
    }

     timeOptionContainer.style.display = "none"
      yesNoBox.style.display = "none"

  }

  const activitySubmit = async () => {
    const inputs = document.querySelectorAll('input.userAddedActivities');
    const session = <?php echo json_encode($_SESSION['user']); ?>;
    const userAddedActivity = Array.from(inputs).map(input => ({
      activity: input.getAttribute('data-activity'),
      id: input.id,
      value: input.value,
      userId: session.id,
    }));

    try {
      let result = await fetch("api/activities/addUser.php", {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams({


          userAddedActivity: JSON.stringify(userAddedActivity)

        })
      })

      result = await result.json()
      alert("actvity successfully added")
      window.location.reload()
      // console.log(result);

    } catch (error) {

    }


  }


  document.addEventListener('click', function(e) {
    if (e.target.matches('.minusBtn')) {
      const icon = e.target;
      const activityId = icon.getAttribute('activityId');
      const parentDiv = document.querySelector(`[data-activityId="${activityId}"]`);
      if (parentDiv) {

        // console.log(parentDiv)

        const activityId = parentDiv.getAttribute('data-activityId');
        const input = document.getElementById(activityId);
        const activityType = input.getAttribute('activity-type');
        const id = input.id;
        const value = input.value;
        // console.log(input)

        let options = `<option type = "${activityType}"  value="${id}">${value}</option>`
        select.innerHTML += options;

        parentDiv.remove();
        console.log(`Removed div with activityId: ${activityId}`);
      } else {
        console.log(`No matching div found for activityId: ${activityId}`);
      }
    }
  });


  const userId = <?php echo json_encode($_SESSION['user']); ?>;

  const activities = {

    getAll: () => {
      fetch('api/activities/userAddedActivity.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
          },

          body: new URLSearchParams({
            userId: userId.id
          })
        })
        .then(response => response.json())
        .then(data => {



          userSavedActivity = data.activity

          const merged = userSavedActivity.map(itemB => {
            const match = allactivityNames.find(itemA => itemA.id == itemB.activity_id);
            return {
              ...itemB,
              name: match ? match.name : null,
              type: match ? match.type : null


            };
          });


          // console.log(merged , "merged")

          if (data.success) {
            bindActivitys(merged, document.getElementById('actiityTbody'));
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



  let activity_id_delete = ""
  document.addEventListener("click", function(e) {
    const deleteBtn = e.target.closest("button[activity-id]");

    if (deleteBtn) {
      activity_id_delete = deleteBtn.getAttribute("activity-id");

      // deleteUserActivity(activityId);
    }
  });

  const deleteUserActivity = async () => {

    if (activity_id_delete == "") {
      alert("something went wrong")
      return;
    }

    try {
      let result = await fetch("api/activities/deleteUserActivity.php", {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams({
          userId: userId.id,
          activityId: activity_id_delete

        })
      })

      result = await result.json()
      console.log(result);
      window.location.reload()


    } catch (error) {

    }

  }

  document.addEventListener('DOMContentLoaded', function() {
    // Initialize DataTable
    activities.getAll();
  });
</script>



<!-- activity uses -->
<script>
  console.log('testing', <?= json_encode($getActivityUsageData) ?>);
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

</html>