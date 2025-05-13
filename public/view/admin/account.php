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



  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">

  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css" />

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
              <li class="menu-item active"><a href="javascript:void(0);" class="menu-link">
                  <div class="text-truncate" data-i18n="Account">Account</div>
                </a></li>
              <li class="menu-item"><a href="notification" class="menu-link">
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
                      <a class="nav-link active" href="javascript:void(0);"><i class="icon-base bx bx-user icon-sm me-1_5"></i> Account</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="notification"><i class="icon-base bx bx-bell icon-sm me-1_5"></i> Notifications</a>
                    </li>
                  </ul>
                </div>
                <div class="card mb-6">
                  <!-- Account -->
                  <form id="formAccountSettings" method="POST" onsubmit="return false">
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-6 pb-4 border-bottom">
                        <img
                          src="../public/assets/img/avatars/1.png"
                          alt="user-avatar"
                          class="d-block w-px-100 h-px-100 rounded"
                          id="uploadedAvatar" />
                        <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-3 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload new photo</span>
                            <i class="icon-base bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="upload"
                              class="account-file-input"
                              hidden
                              accept="image/png, image/jpeg" />
                          </label>
                          <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                            <i class="icon-base bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Reset</span>
                          </button>

                          <div>Allowed JPG, GIF or PNG. Max size of 800K</div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body pt-4">

                      <div class="row g-6">
                        <div class="col-md-6">
                          <label for="firstName" class="form-label">Full Name</label>
                          <input
                            class="form-control"
                            type="text"
                            id="firstName"
                            name="firstName"
                            value="John"
                            autofocus />
                        </div>
                        <div class="col-md-6">
                          <label for="lastName" class="form-label">Email</label>
                          <input
                            class="form-control"
                            type="text"
                            id="email"
                            name="email"
                            value=""
                            placeholder="john.doe@example.com" />
                        </div>

                        <div class="col-md-6">
                          <label for="phone" class="form-label">Phone No</label>
                          <input
                            class="form-control"
                            type="tel"
                            id="phone"
                            name="phone"
                            value=""
                            placeholder="Enter your phone number"
                            pattern="[0-9]{10}"
                            maxlength="10" />
                        </div>


                        <div class="col-md-6">
                          <label for="countryName" class="form-label">Country Name</label>
                          <div>
                            <select name="country" id="countryName" class="selectpicker countrypicker" data-style="btn-primary" data-flag="true" data-live-search="true">
                            <option data-tokens="TV Tuvalu" data-icon="inline-flag flag tv" class="option-with-flag" value="TV">Tuvalu</option>
                          </select>

                          </div>


                        </div>


                      </div>
                      <div class="mt-6">
                        <button id="submitBtn" type="submit" class="btn btn-primary me-3">Save changes</button>
                        <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                      </div>

                    </div>

                  </form>
                  <!-- /Account -->
                </div>
                <div class="card">
                  <h5 class="card-header">Delete Account</h5>
                  <div class="card-body">
                    <div class="mb-6 col-12 mb-0">
                      <div class="alert alert-warning">
                        <h5 class="alert-heading mb-1">Are you sure you want to delete your account?</h5>
                        <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                      </div>
                    </div>
                    <form id="formAccountDeactivation" onsubmit="return false">
                      <div class="form-check my-8 ms-2">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          name="accountActivation"
                          id="accountActivation" />
                        <label class="form-check-label" for="accountActivation">I confirm my account deactivation</label>
                      </div>
                      <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
                    </form>
                  </div>
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
  <script src="../public/assets/js/pages-account-settings-account.js"></script>

  <!-- Place this tag before closing body tag for github widget button. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/i18n/defaults-*.min.js"></script>


  <script>
    $(document).ready(function() {
      $('.selectpicker').selectpicker();
    })
  </script>

<script>
document.getElementById("formAccountSettings").addEventListener("submit", async function (e) {
  e.preventDefault();

  const form = document.getElementById("formAccountSettings");
  const formData = new FormData(form);

  // Add image file manually
  const imageFile = document.getElementById("upload").files[0];
  if (imageFile) {
    formData.append("image", imageFile);
  }

  try {
    const response = await fetch("../api/auth/updateProfile.php", {
      method: "POST",
      body: formData
    });

    console.log(formData)

    const result = await response.json();
    console.log( "result", result );

    alert(result.message);
  } catch (error) {
    // console.error("Error:", error);
    alert("Something went wrong!");
  }
});
</script>




</body>

</html>