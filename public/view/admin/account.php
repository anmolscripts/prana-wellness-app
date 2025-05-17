<?php 

require_once('../../../functions/auth.php'); 

requireLogin();
if(!is_admin()){
    http_response_code(403);
    header('Location: /prana-wellness-app/403');
    exit;
}

?>

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
                          src=""
                          alt="user-avatar"
                          class="d-block w-px-100 h-px-100 rounded"
                          id="profilePic" />
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
                            readonly />
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
                            <select name="country" id="countryName" class="selectpicker countrypicker" data-style="btn-primary" data-flag="true" data-live-search="true" value="">
                              <!-- <option data-tokens="TV Tuvalu" data-icon="inline-flag flag tv" class="option-with-flag" value="TV">Tuvalu</option> -->
                              <option data-tokens="AF Afghanistan" data-icon="inline-flag flag af" class="option-with-flag" value="AF">Afghanistan</option>
                              <option data-tokens="AL Albania" data-icon="glyphicon inline-flag flag al" class="option-with-flag" value="AL">Albania</option>
                              <option data-tokens="DZ Algeria" data-icon="inline-flag flag dz" class="option-with-flag" value="DZ">Algeria</option>
                              <option data-tokens="AS American Samoa" data-icon="inline-flag flag as" class="option-with-flag" value="AS">American Samoa</option>
                              <option data-tokens="AD Andorra" data-icon="inline-flag flag ad" class="option-with-flag" value="AD">Andorra</option>
                              <option data-tokens="AO Angola" data-icon="inline-flag flag ao" class="option-with-flag" value="AO">Angola</option>
                              <option data-tokens="AI Anguilla" data-icon="inline-flag flag ai" class="option-with-flag" value="AI">Anguilla</option>
                              <option data-tokens="AQ Antarctica" data-icon="inline-flag flag aq" class="option-with-flag" value="AQ">Antarctica</option>
                              <option data-tokens="AG Antigua and Barbuda" data-icon="inline-flag flag ag" class="option-with-flag" value="AG">Antigua and Barbuda</option>
                              <option data-tokens="AR Argentina" data-icon="inline-flag flag ar" class="option-with-flag" value="AR">Argentina</option>
                              <option data-tokens="AM Armenia" data-icon="inline-flag flag am" class="option-with-flag" value="AM">Armenia</option>
                              <option data-tokens="AW Aruba" data-icon="inline-flag flag aw" class="option-with-flag" value="AW">Aruba</option>
                              <option data-tokens="AU Australia" data-icon="inline-flag flag au" class="option-with-flag" value="AU">Australia</option>
                              <option data-tokens="AT Austria" data-icon="inline-flag flag at" class="option-with-flag" value="AT">Austria</option>
                              <option data-tokens="AZ Azerbaijan" data-icon="inline-flag flag az" class="option-with-flag" value="AZ">Azerbaijan</option>
                              <option data-tokens="BS Bahamas" data-icon="inline-flag flag bs" class="option-with-flag" value="BS">Bahamas</option>
                              <option data-tokens="BH Bahrain" data-icon="inline-flag flag bh" class="option-with-flag" value="BH">Bahrain</option>
                              <option data-tokens="BD Bangladesh" data-icon="inline-flag flag bd" class="option-with-flag" value="BD">Bangladesh</option>
                              <option data-tokens="BB Barbados" data-icon="inline-flag flag bb" class="option-with-flag" value="BB">Barbados</option>
                              <option data-tokens="BY Belarus" data-icon="inline-flag flag by" class="option-with-flag" value="BY">Belarus</option>
                              <option data-tokens="BE Belgium" data-icon="inline-flag flag be" class="option-with-flag" value="BE">Belgium</option>
                              <option data-tokens="BZ Belize" data-icon="inline-flag flag bz" class="option-with-flag" value="BZ">Belize</option>
                              <option data-tokens="BJ Benin" data-icon="inline-flag flag bj" class="option-with-flag" value="BJ">Benin</option>
                              <option data-tokens="BM Bermuda" data-icon="inline-flag flag bm" class="option-with-flag" value="BM">Bermuda</option>
                              <option data-tokens="BT Bhutan" data-icon="inline-flag flag bt" class="option-with-flag" value="BT">Bhutan</option>
                              <option data-tokens="BO Bolivia" data-icon="inline-flag flag bo" class="option-with-flag" value="BO">Bolivia</option>
                              <option data-tokens="BA Bosnia and Herzegovina" data-icon="inline-flag flag ba" class="option-with-flag" value="BA">Bosnia and Herzegovina</option>
                              <option data-tokens="BW Botswana" data-icon="inline-flag flag bw" class="option-with-flag" value="BW">Botswana</option>
                              <option data-tokens="BV Bouvet Island" data-icon="inline-flag flag bv" class="option-with-flag" value="BV">Bouvet Island</option>
                              <option data-tokens="BR Brazil" data-icon="inline-flag flag br" class="option-with-flag" value="BR">Brazil</option>
                              <option data-tokens="IO British Indian Ocean Territory" data-icon="inline-flag flag io" class="option-with-flag" value="IO">British Indian Ocean Territory</option>
                              <option data-tokens="BN Brunei Darussalam" data-icon="inline-flag flag bn" class="option-with-flag" value="BN">Brunei Darussalam</option>
                              <option data-tokens="BG Bulgaria" data-icon="inline-flag flag bg" class="option-with-flag" value="BG">Bulgaria</option>
                              <option data-tokens="BF Burkina Faso" data-icon="inline-flag flag bf" class="option-with-flag" value="BF">Burkina Faso</option>
                              <option data-tokens="BI Burundi" data-icon="inline-flag flag bi" class="option-with-flag" value="BI">Burundi</option>
                              <option data-tokens="KH Cambodia" data-icon="inline-flag flag kh" class="option-with-flag" value="KH">Cambodia</option>
                              <option data-tokens="CM Cameroon" data-icon="inline-flag flag cm" class="option-with-flag" value="CM">Cameroon</option>
                              <option data-tokens="CA Canada" data-icon="inline-flag flag ca" class="option-with-flag" value="CA">Canada</option>
                              <option data-tokens="CV Cape Verde" data-icon="inline-flag flag cv" class="option-with-flag" value="CV">Cape Verde</option>
                              <option data-tokens="KY Cayman Islands" data-icon="inline-flag flag ky" class="option-with-flag" value="KY">Cayman Islands</option>
                              <option data-tokens="CF Central African Republic" data-icon="inline-flag flag cf" class="option-with-flag" value="CF">Central African Republic</option>
                              <option data-tokens="TD Chad" data-icon="inline-flag flag td" class="option-with-flag" value="TD">Chad</option>
                              <option data-tokens="CL Chile" data-icon="inline-flag flag cl" class="option-with-flag" value="CL">Chile</option>
                              <option data-tokens="CN China" data-icon="inline-flag flag cn" class="option-with-flag" value="CN">China</option>
                              <option data-tokens="CX Christmas Island" data-icon="inline-flag flag cx" class="option-with-flag" value="CX">Christmas Island</option>
                              <option data-tokens="CC Cocos (Keeling) Islands" data-icon="inline-flag flag cc" class="option-with-flag" value="CC">Cocos (Keeling) Islands</option>
                              <option data-tokens="CO Colombia" data-icon="inline-flag flag co" class="option-with-flag" value="CO">Colombia</option>
                              <option data-tokens="KM Comoros" data-icon="inline-flag flag km" class="option-with-flag" value="KM">Comoros</option>
                              <option data-tokens="CG Congo" data-icon="inline-flag flag cg" class="option-with-flag" value="CG">Congo</option>
                              <option data-tokens="CD Congo, the Democratic Republic of the" data-icon="inline-flag flag cd" class="option-with-flag" value="CD">Congo, the Democratic Republic of the</option>
                              <option data-tokens="CK Cook Islands" data-icon="inline-flag flag ck" class="option-with-flag" value="CK">Cook Islands</option>
                              <option data-tokens="CR Costa Rica" data-icon="inline-flag flag cr" class="option-with-flag" value="CR">Costa Rica</option>
                              <option data-tokens="CI Cote D'Ivoire" data-icon="inline-flag flag ci" class="option-with-flag" value="CI">Cote D'Ivoire</option>
                              <option data-tokens="HR Croatia" data-icon="inline-flag flag hr" class="option-with-flag" value="HR">Croatia</option>
                              <option data-tokens="CU Cuba" data-icon="inline-flag flag cu" class="option-with-flag" value="CU">Cuba</option>
                              <option data-tokens="CY Cyprus" data-icon="inline-flag flag cy" class="option-with-flag" value="CY">Cyprus</option>
                              <option data-tokens="CZ Czech Republic" data-icon="inline-flag flag cz" class="option-with-flag" value="CZ">Czech Republic</option>
                              <option data-tokens="DK Denmark" data-icon="inline-flag flag dk" class="option-with-flag" value="DK">Denmark</option>
                              <option data-tokens="DJ Djibouti" data-icon="inline-flag flag dj" class="option-with-flag" value="DJ">Djibouti</option>
                              <option data-tokens="DM Dominica" data-icon="inline-flag flag dm" class="option-with-flag" value="DM">Dominica</option>
                              <option data-tokens="DO Dominican Republic" data-icon="inline-flag flag do" class="option-with-flag" value="DO">Dominican Republic</option>
                              <option data-tokens="EC Ecuador" data-icon="inline-flag flag ec" class="option-with-flag" value="EC">Ecuador</option>
                              <option data-tokens="EG Egypt" data-icon="inline-flag flag eg" class="option-with-flag" value="EG">Egypt</option>
                              <option data-tokens="SV El Salvador" data-icon="inline-flag flag sv" class="option-with-flag" value="SV">El Salvador</option>
                              <option data-tokens="GQ Equatorial Guinea" data-icon="inline-flag flag gq" class="option-with-flag" value="GQ">Equatorial Guinea</option>
                              <option data-tokens="ER Eritrea" data-icon="inline-flag flag er" class="option-with-flag" value="ER">Eritrea</option>
                              <option data-tokens="EE Estonia" data-icon="inline-flag flag ee" class="option-with-flag" value="EE">Estonia</option>
                              <option data-tokens="ET Ethiopia" data-icon="inline-flag flag et" class="option-with-flag" value="ET">Ethiopia</option>
                              <option data-tokens="FK Falkland Islands (Malvinas)" data-icon="inline-flag flag fk" class="option-with-flag" value="FK">Falkland Islands (Malvinas)</option>
                              <option data-tokens="FO Faroe Islands" data-icon="inline-flag flag fo" class="option-with-flag" value="FO">Faroe Islands</option>
                              <option data-tokens="FJ Fiji" data-icon="inline-flag flag fj" class="option-with-flag" value="FJ">Fiji</option>
                              <option data-tokens="FI Finland" data-icon="inline-flag flag fi" class="option-with-flag" value="FI">Finland</option>
                              <option data-tokens="FR France" data-icon="inline-flag flag fr" class="option-with-flag" value="FR">France</option>
                              <option data-tokens="GF French Guiana" data-icon="inline-flag flag gf" class="option-with-flag" value="GF">French Guiana</option>
                              <option data-tokens="PF French Polynesia" data-icon="inline-flag flag pf" class="option-with-flag" value="PF">French Polynesia</option>
                              <option data-tokens="TF French Southern Territories" data-icon="inline-flag flag tf" class="option-with-flag" value="TF">French Southern Territories</option>
                              <option data-tokens="GA Gabon" data-icon="inline-flag flag ga" class="option-with-flag" value="GA">Gabon</option>
                              <option data-tokens="GM Gambia" data-icon="inline-flag flag gm" class="option-with-flag" value="GM">Gambia</option>
                              <option data-tokens="GE Georgia" data-icon="inline-flag flag ge" class="option-with-flag" value="GE">Georgia</option>
                              <option data-tokens="DE Germany" data-icon="inline-flag flag de" class="option-with-flag" value="DE">Germany</option>
                              <option data-tokens="GH Ghana" data-icon="inline-flag flag gh" class="option-with-flag" value="GH">Ghana</option>
                              <option data-tokens="GI Gibraltar" data-icon="inline-flag flag gi" class="option-with-flag" value="GI">Gibraltar</option>
                              <option data-tokens="GR Greece" data-icon="inline-flag flag gr" class="option-with-flag" value="GR">Greece</option>
                              <option data-tokens="GL Greenland" data-icon="inline-flag flag gl" class="option-with-flag" value="GL">Greenland</option>
                              <option data-tokens="GD Grenada" data-icon="inline-flag flag gd" class="option-with-flag" value="GD">Grenada</option>
                              <option data-tokens="GP Guadeloupe" data-icon="inline-flag flag gp" class="option-with-flag" value="GP">Guadeloupe</option>
                              <option data-tokens="GU Guam" data-icon="inline-flag flag gu" class="option-with-flag" value="GU">Guam</option>
                              <option data-tokens="GT Guatemala" data-icon="inline-flag flag gt" class="option-with-flag" value="GT">Guatemala</option>
                              <option data-tokens="GN Guinea" data-icon="inline-flag flag gn" class="option-with-flag" value="GN">Guinea</option>
                              <option data-tokens="GW Guinea-Bissau" data-icon="inline-flag flag gw" class="option-with-flag" value="GW">Guinea-Bissau</option>
                              <option data-tokens="GY Guyana" data-icon="inline-flag flag gy" class="option-with-flag" value="GY">Guyana</option>
                              <option data-tokens="HT Haiti" data-icon="inline-flag flag ht" class="option-with-flag" value="HT">Haiti</option>
                              <option data-tokens="HM Heard Island and Mcdonald Islands" data-icon="inline-flag flag hm" class="option-with-flag" value="HM">Heard Island and Mcdonald Islands</option>
                              <option data-tokens="VA Holy See (Vatican City State)" data-icon="inline-flag flag va" class="option-with-flag" value="VA">Holy See (Vatican City State)</option>
                              <option data-tokens="HN Honduras" data-icon="inline-flag flag hn" class="option-with-flag" value="HN">Honduras</option>
                              <option data-tokens="HK Hong Kong" data-icon="inline-flag flag hk" class="option-with-flag" value="HK">Hong Kong</option>
                              <option data-tokens="HU Hungary" data-icon="inline-flag flag hu" class="option-with-flag" value="HU">Hungary</option>
                              <option data-tokens="IS Iceland" data-icon="inline-flag flag is" class="option-with-flag" value="IS">Iceland</option>
                              <option data-tokens="IN India" data-icon="inline-flag flag in" class="option-with-flag" value="IN">India</option>
                              <option data-tokens="ID Indonesia" data-icon="inline-flag flag id" class="option-with-flag" value="ID">Indonesia</option>
                              <option data-tokens="IR Iran, Islamic Republic of" data-icon="inline-flag flag ir" class="option-with-flag" value="IR">Iran, Islamic Republic of</option>
                              <option data-tokens="IQ Iraq" data-icon="inline-flag flag iq" class="option-with-flag" value="IQ">Iraq</option>
                              <option data-tokens="IE Ireland" data-icon="inline-flag flag ie" class="option-with-flag" value="IE">Ireland</option>
                              <option data-tokens="IL Israel" data-icon="inline-flag flag il" class="option-with-flag" value="IL">Israel</option>
                              <option data-tokens="IT Italy" data-icon="inline-flag flag it" class="option-with-flag" value="IT">Italy</option>
                              <option data-tokens="JM Jamaica" data-icon="inline-flag flag jm" class="option-with-flag" value="JM">Jamaica</option>
                              <option data-tokens="JP Japan" data-icon="inline-flag flag jp" class="option-with-flag" value="JP">Japan</option>
                              <option data-tokens="JO Jordan" data-icon="inline-flag flag jo" class="option-with-flag" value="JO">Jordan</option>
                              <option data-tokens="KZ Kazakhstan" data-icon="inline-flag flag kz" class="option-with-flag" value="KZ">Kazakhstan</option>
                              <option data-tokens="KE Kenya" data-icon="inline-flag flag ke" class="option-with-flag" value="KE">Kenya</option>
                              <option data-tokens="KI Kiribati" data-icon="inline-flag flag ki" class="option-with-flag" value="KI">Kiribati</option>
                              <option data-tokens="KP North Korea" data-icon="inline-flag flag kp" class="option-with-flag" value="KP">North Korea</option>
                              <option data-tokens="KR South Korea" data-icon="inline-flag flag kr" class="option-with-flag" value="KR">South Korea</option>
                              <option data-tokens="KW Kuwait" data-icon="inline-flag flag kw" class="option-with-flag" value="KW">Kuwait</option>
                              <option data-tokens="KG Kyrgyzstan" data-icon="inline-flag flag kg" class="option-with-flag" value="KG">Kyrgyzstan</option>
                              <option data-tokens="LA Lao People's Democratic Republic" data-icon="inline-flag flag la" class="option-with-flag" value="LA">Lao People's Democratic Republic</option>
                              <option data-tokens="LV Latvia" data-icon="inline-flag flag lv" class="option-with-flag" value="LV">Latvia</option>
                              <option data-tokens="LB Lebanon" data-icon="inline-flag flag lb" class="option-with-flag" value="LB">Lebanon</option>
                              <option data-tokens="LS Lesotho" data-icon="inline-flag flag ls" class="option-with-flag" value="LS">Lesotho</option>
                              <option data-tokens="LR Liberia" data-icon="inline-flag flag lr" class="option-with-flag" value="LR">Liberia</option>
                              <option data-tokens="LY Libyan Arab Jamahiriya" data-icon="inline-flag flag ly" class="option-with-flag" value="LY">Libyan Arab Jamahiriya</option>
                              <option data-tokens="LI Liechtenstein" data-icon="inline-flag flag li" class="option-with-flag" value="LI">Liechtenstein</option>
                              <option data-tokens="LT Lithuania" data-icon="inline-flag flag lt" class="option-with-flag" value="LT">Lithuania</option>
                              <option data-tokens="LU Luxembourg" data-icon="inline-flag flag lu" class="option-with-flag" value="LU">Luxembourg</option>
                              <option data-tokens="MO Macao" data-icon="inline-flag flag mo" class="option-with-flag" value="MO">Macao</option>
                              <option data-tokens="MK Macedonia, the Former Yugoslav Republic of" data-icon="inline-flag flag mk" class="option-with-flag" value="MK">Macedonia, the Former Yugoslav Republic of</option>
                              <option data-tokens="MG Madagascar" data-icon="inline-flag flag mg" class="option-with-flag" value="MG">Madagascar</option>
                              <option data-tokens="MW Malawi" data-icon="inline-flag flag mw" class="option-with-flag" value="MW">Malawi</option>
                              <option data-tokens="MY Malaysia" data-icon="inline-flag flag my" class="option-with-flag" value="MY">Malaysia</option>
                              <option data-tokens="MV Maldives" data-icon="inline-flag flag mv" class="option-with-flag" value="MV">Maldives</option>
                              <option data-tokens="ML Mali" data-icon="inline-flag flag ml" class="option-with-flag" value="ML">Mali</option>
                              <option data-tokens="MT Malta" data-icon="inline-flag flag mt" class="option-with-flag" value="MT">Malta</option>
                              <option data-tokens="MH Marshall Islands" data-icon="inline-flag flag mh" class="option-with-flag" value="MH">Marshall Islands</option>
                              <option data-tokens="MQ Martinique" data-icon="inline-flag flag mq" class="option-with-flag" value="MQ">Martinique</option>
                              <option data-tokens="MR Mauritania" data-icon="inline-flag flag mr" class="option-with-flag" value="MR">Mauritania</option>
                              <option data-tokens="MU Mauritius" data-icon="inline-flag flag mu" class="option-with-flag" value="MU">Mauritius</option>
                              <option data-tokens="YT Mayotte" data-icon="inline-flag flag yt" class="option-with-flag" value="YT">Mayotte</option>
                              <option data-tokens="MX Mexico" data-icon="inline-flag flag mx" class="option-with-flag" value="MX">Mexico</option>
                              <option data-tokens="FM Micronesia, Federated States of" data-icon="inline-flag flag fm" class="option-with-flag" value="FM">Micronesia, Federated States of</option>
                              <option data-tokens="MD Moldova, Republic of" data-icon="inline-flag flag md" class="option-with-flag" value="MD">Moldova, Republic of</option>
                              <option data-tokens="MC Monaco" data-icon="inline-flag flag mc" class="option-with-flag" value="MC">Monaco</option>
                              <option data-tokens="MN Mongolia" data-icon="inline-flag flag mn" class="option-with-flag" value="MN">Mongolia</option>
                              <option data-tokens="MS Montserrat" data-icon="inline-flag flag ms" class="option-with-flag" value="MS">Montserrat</option>
                              <option data-tokens="MA Morocco" data-icon="inline-flag flag ma" class="option-with-flag" value="MA">Morocco</option>
                              <option data-tokens="MZ Mozambique" data-icon="inline-flag flag mz" class="option-with-flag" value="MZ">Mozambique</option>
                              <option data-tokens="MM Myanmar" data-icon="inline-flag flag mm" class="option-with-flag" value="MM">Myanmar</option>
                              <option data-tokens="NA Namibia" data-icon="inline-flag flag na" class="option-with-flag" value="NA">Namibia</option>
                              <option data-tokens="NR Nauru" data-icon="inline-flag flag nr" class="option-with-flag" value="NR">Nauru</option>
                              <option data-tokens="NP Nepal" data-icon="inline-flag flag np" class="option-with-flag" value="NP">Nepal</option>
                              <option data-tokens="NL Netherlands" data-icon="inline-flag flag nl" class="option-with-flag" value="NL">Netherlands</option>
                              <option data-tokens="NC New Caledonia" data-icon="inline-flag flag nc" class="option-with-flag" value="NC">New Caledonia</option>
                              <option data-tokens="NZ New Zealand" data-icon="inline-flag flag nz" class="option-with-flag" value="NZ">New Zealand</option>
                              <option data-tokens="NI Nicaragua" data-icon="inline-flag flag ni" class="option-with-flag" value="NI">Nicaragua</option>
                              <option data-tokens="NE Niger" data-icon="inline-flag flag ne" class="option-with-flag" value="NE">Niger</option>
                              <option data-tokens="NG Nigeria" data-icon="inline-flag flag ng" class="option-with-flag" value="NG">Nigeria</option>
                              <option data-tokens="NU Niue" data-icon="inline-flag flag nu" class="option-with-flag" value="NU">Niue</option>
                              <option data-tokens="NF Norfolk Island" data-icon="inline-flag flag nf" class="option-with-flag" value="NF">Norfolk Island</option>
                              <option data-tokens="MP Northern Mariana Islands" data-icon="inline-flag flag mp" class="option-with-flag" value="MP">Northern Mariana Islands</option>
                              <option data-tokens="NO Norway" data-icon="inline-flag flag no" class="option-with-flag" value="NO">Norway</option>
                              <option data-tokens="OM Oman" data-icon="inline-flag flag om" class="option-with-flag" value="OM">Oman</option>
                              <option data-tokens="PK Pakistan" data-icon="inline-flag flag pk" class="option-with-flag" value="PK">Pakistan</option>
                              <option data-tokens="PW Palau" data-icon="inline-flag flag pw" class="option-with-flag" value="PW">Palau</option>
                              <option data-tokens="PS Palestinian Territory, Occupied" data-icon="inline-flag flag ps" class="option-with-flag" value="PS">Palestinian Territory, Occupied</option>
                              <option data-tokens="PA Panama" data-icon="inline-flag flag pa" class="option-with-flag" value="PA">Panama</option>
                              <option data-tokens="PG Papua New Guinea" data-icon="inline-flag flag pg" class="option-with-flag" value="PG">Papua New Guinea</option>
                              <option data-tokens="PY Paraguay" data-icon="inline-flag flag py" class="option-with-flag" value="PY">Paraguay</option>
                              <option data-tokens="PE Peru" data-icon="inline-flag flag pe" class="option-with-flag" value="PE">Peru</option>
                              <option data-tokens="PH Philippines" data-icon="inline-flag flag ph" class="option-with-flag" value="PH">Philippines</option>
                              <option data-tokens="PN Pitcairn" data-icon="inline-flag flag pn" class="option-with-flag" value="PN">Pitcairn</option>
                              <option data-tokens="PL Poland" data-icon="inline-flag flag pl" class="option-with-flag" value="PL">Poland</option>
                              <option data-tokens="PT Portugal" data-icon="inline-flag flag pt" class="option-with-flag" value="PT">Portugal</option>
                              <option data-tokens="PR Puerto Rico" data-icon="inline-flag flag pr" class="option-with-flag" value="PR">Puerto Rico</option>
                              <option data-tokens="QA Qatar" data-icon="inline-flag flag qa" class="option-with-flag" value="QA">Qatar</option>
                              <option data-tokens="RE Reunion" data-icon="inline-flag flag re" class="option-with-flag" value="RE">Reunion</option>
                              <option data-tokens="RO Romania" data-icon="inline-flag flag ro" class="option-with-flag" value="RO">Romania</option>
                              <option data-tokens="RU Russian Federation" data-icon="inline-flag flag ru" class="option-with-flag" value="RU">Russian Federation</option>
                              <option data-tokens="RW Rwanda" data-icon="inline-flag flag rw" class="option-with-flag" value="RW">Rwanda</option>
                              <option data-tokens="SH Saint Helena" data-icon="inline-flag flag sh" class="option-with-flag" value="SH">Saint Helena</option>
                              <option data-tokens="KN Saint Kitts and Nevis" data-icon="inline-flag flag kn" class="option-with-flag" value="KN">Saint Kitts and Nevis</option>
                              <option data-tokens="LC Saint Lucia" data-icon="inline-flag flag lc" class="option-with-flag" value="LC">Saint Lucia</option>
                              <option data-tokens="PM Saint Pierre and Miquelon" data-icon="inline-flag flag pm" class="option-with-flag" value="PM">Saint Pierre and Miquelon</option>
                              <option data-tokens="VC Saint Vincent and the Grenadines" data-icon="inline-flag flag vc" class="option-with-flag" value="VC">Saint Vincent and the Grenadines</option>
                              <option data-tokens="WS Samoa" data-icon="inline-flag flag ws" class="option-with-flag" value="WS">Samoa</option>
                              <option data-tokens="SM San Marino" data-icon="inline-flag flag sm" class="option-with-flag" value="SM">San Marino</option>
                              <option data-tokens="ST Sao Tome and Principe" data-icon="inline-flag flag st" class="option-with-flag" value="ST">Sao Tome and Principe</option>
                              <option data-tokens="SA Saudi Arabia" data-icon="inline-flag flag sa" class="option-with-flag" value="SA">Saudi Arabia</option>
                              <option data-tokens="SN Senegal" data-icon="inline-flag flag sn" class="option-with-flag" value="SN">Senegal</option>
                              <option data-tokens="SC Seychelles" data-icon="inline-flag flag sc" class="option-with-flag" value="SC">Seychelles</option>
                              <option data-tokens="SL Sierra Leone" data-icon="inline-flag flag sl" class="option-with-flag" value="SL">Sierra Leone</option>
                              <option data-tokens="SG Singapore" data-icon="inline-flag flag sg" class="option-with-flag" value="SG">Singapore</option>
                              <option data-tokens="SK Slovakia" data-icon="inline-flag flag sk" class="option-with-flag" value="SK">Slovakia</option>
                              <option data-tokens="SI Slovenia" data-icon="inline-flag flag si" class="option-with-flag" value="SI">Slovenia</option>
                              <option data-tokens="SB Solomon Islands" data-icon="inline-flag flag sb" class="option-with-flag" value="SB">Solomon Islands</option>
                              <option data-tokens="SO Somalia" data-icon="inline-flag flag so" class="option-with-flag" value="SO">Somalia</option>
                              <option data-tokens="ZA South Africa" data-icon="inline-flag flag za" class="option-with-flag" value="ZA">South Africa</option>
                              <option data-tokens="GS South Georgia and the South Sandwich Islands" data-icon="inline-flag flag gs" class="option-with-flag" value="GS">South Georgia and the South Sandwich Islands</option>
                              <option data-tokens="ES Spain" data-icon="inline-flag flag es" class="option-with-flag" value="ES">Spain</option>
                              <option data-tokens="LK Sri Lanka" data-icon="inline-flag flag lk" class="option-with-flag" value="LK">Sri Lanka</option>
                              <option data-tokens="SD Sudan" data-icon="inline-flag flag sd" class="option-with-flag" value="SD">Sudan</option>
                              <option data-tokens="SR Suriname" data-icon="inline-flag flag sr" class="option-with-flag" value="SR">Suriname</option>
                              <option data-tokens="SJ Svalbard and Jan Mayen" data-icon="inline-flag flag sj" class="option-with-flag" value="SJ">Svalbard and Jan Mayen</option>
                              <option data-tokens="SZ Swaziland" data-icon="inline-flag flag sz" class="option-with-flag" value="SZ">Swaziland</option>
                              <option data-tokens="SE Sweden" data-icon="inline-flag flag se" class="option-with-flag" value="SE">Sweden</option>
                              <option data-tokens="CH Switzerland" data-icon="inline-flag flag ch" class="option-with-flag" value="CH">Switzerland</option>
                              <option data-tokens="SY Syrian Arab Republic" data-icon="inline-flag flag sy" class="option-with-flag" value="SY">Syrian Arab Republic</option>
                              <option data-tokens="TW Taiwan" data-icon="inline-flag flag tw" class="option-with-flag" value="TW">Taiwan</option>
                              <option data-tokens="TJ Tajikistan" data-icon="inline-flag flag tj" class="option-with-flag" value="TJ">Tajikistan</option>
                              <option data-tokens="TZ Tanzania, United Republic of" data-icon="inline-flag flag tz" class="option-with-flag" value="TZ">Tanzania, United Republic of</option>
                              <option data-tokens="TH Thailand" data-icon="inline-flag flag th" class="option-with-flag" value="TH">Thailand</option>
                              <option data-tokens="TL Timor-Leste" data-icon="inline-flag flag tl" class="option-with-flag" value="TL">Timor-Leste</option>
                              <option data-tokens="TG Togo" data-icon="inline-flag flag tg" class="option-with-flag" value="TG">Togo</option>
                              <option data-tokens="TK Tokelau" data-icon="inline-flag flag tk" class="option-with-flag" value="TK">Tokelau</option>
                              <option data-tokens="TO Tonga" data-icon="inline-flag flag to" class="option-with-flag" value="TO">Tonga</option>
                              <option data-tokens="TT Trinidad and Tobago" data-icon="inline-flag flag tt" class="option-with-flag" value="TT">Trinidad and Tobago</option>
                              <option data-tokens="TN Tunisia" data-icon="inline-flag flag tn" class="option-with-flag" value="TN">Tunisia</option>
                              <option data-tokens="TR Turkey" data-icon="inline-flag flag tr" class="option-with-flag" value="TR">Turkey</option>
                              <option data-tokens="TM Turkmenistan" data-icon="inline-flag flag tm" class="option-with-flag" value="TM">Turkmenistan</option>
                              <option data-tokens="TC Turks and Caicos Islands" data-icon="inline-flag flag tc" class="option-with-flag" value="TC">Turks and Caicos Islands</option>
                              <option data-tokens="TV Tuvalu" data-icon="inline-flag flag tv" class="option-with-flag" value="TV">Tuvalu</option>
                              <option data-tokens="UG Uganda" data-icon="inline-flag flag ug" class="option-with-flag" value="UG">Uganda</option>
                              <option data-tokens="UA Ukraine" data-icon="inline-flag flag ua" class="option-with-flag" value="UA">Ukraine</option>
                              <option data-tokens="AE United Arab Emirates" data-icon="inline-flag flag ae" class="option-with-flag" value="AE">United Arab Emirates</option>
                              <option data-tokens="GB United Kingdom" data-icon="inline-flag flag gb" class="option-with-flag" value="GB">United Kingdom</option>
                              <option data-tokens="US United States of America" data-icon="inline-flag flag us" class="option-with-flag" value="US">United States of America</option>
                              <option data-tokens="UM United States Minor Outlying Islands" data-icon="inline-flag flag um" class="option-with-flag" value="UM">United States Minor Outlying Islands</option>
                              <option data-tokens="UY Uruguay" data-icon="inline-flag flag uy" class="option-with-flag" value="UY">Uruguay</option>
                              <option data-tokens="UZ Uzbekistan" data-icon="inline-flag flag uz" class="option-with-flag" value="UZ">Uzbekistan</option>
                              <option data-tokens="VU Vanuatu" data-icon="inline-flag flag vu" class="option-with-flag" value="VU">Vanuatu</option>
                              <option data-tokens="VE Venezuela" data-icon="inline-flag flag ve" class="option-with-flag" value="VE">Venezuela</option>
                              <option data-tokens="VN Viet Nam" data-icon="inline-flag flag vn" class="option-with-flag" value="VN">Viet Nam</option>
                              <option data-tokens="VG Virgin Islands, British" data-icon="inline-flag flag vg" class="option-with-flag" value="VG">Virgin Islands, British</option>
                              <option data-tokens="VI Virgin Islands, U.S." data-icon="inline-flag flag vi" class="option-with-flag" value="VI">Virgin Islands, U.S.</option>
                              <option data-tokens="WF Wallis and Futuna" data-icon="inline-flag flag wf" class="option-with-flag" value="WF">Wallis and Futuna</option>
                              <option data-tokens="EH Western Sahara" data-icon="inline-flag flag eh" class="option-with-flag" value="EH">Western Sahara</option>
                              <option data-tokens="YE Yemen" data-icon="inline-flag flag ye" class="option-with-flag" value="YE">Yemen</option>
                              <option data-tokens="ZM Zambia" data-icon="inline-flag flag zm" class="option-with-flag" value="ZM">Zambia</option>
                              <option data-tokens="ZW Zimbabwe" data-icon="inline-flag flag zw" class="option-with-flag" value="ZW">Zimbabwe</option>
                              <option data-tokens="AX Åland Islands" data-icon="inline-flag flag ax" class="option-with-flag" value="AX">Åland Islands</option>
                              <option data-tokens="BQ Bonaire, Sint Eustatius and Saba" data-icon="inline-flag flag bq" class="option-with-flag" value="BQ">Bonaire, Sint Eustatius and Saba</option>
                              <option data-tokens="CW Curaçao" data-icon="inline-flag flag cw" class="option-with-flag" value="CW">Curaçao</option>
                              <option data-tokens="GG Guernsey" data-icon="inline-flag flag gg" class="option-with-flag" value="GG">Guernsey</option>
                              <option data-tokens="IM Isle of Man" data-icon="inline-flag flag im" class="option-with-flag" value="IM">Isle of Man</option>
                              <option data-tokens="JE Jersey" data-icon="inline-flag flag je" class="option-with-flag" value="JE">Jersey</option>
                              <option data-tokens="ME Montenegro" data-icon="inline-flag flag me" class="option-with-flag" value="ME">Montenegro</option>
                              <option data-tokens="BL Saint Barthélemy" data-icon="inline-flag flag bl" class="option-with-flag" value="BL">Saint Barthélemy</option>
                              <option data-tokens="MF Saint Martin (French part)" data-icon="inline-flag flag mf" class="option-with-flag" value="MF">Saint Martin (French part)</option>
                              <option data-tokens="RS Serbia" data-icon="inline-flag flag rs" class="option-with-flag" value="RS">Serbia</option>
                              <option data-tokens="SX Sint Maarten (Dutch part)" data-icon="inline-flag flag sx" class="option-with-flag" value="SX">Sint Maarten (Dutch part)</option>
                              <option data-tokens="SS South Sudan" data-icon="inline-flag flag ss" class="option-with-flag" value="SS">South Sudan</option>
                              <option data-tokens="XK Kosovo" data-icon="inline-flag flag xk" class="option-with-flag" value="XK">Kosovo</option>
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
                    <form id="formAccountDeactivation">
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
    document.getElementById("formAccountSettings").addEventListener("submit", async function(e) {
      e.preventDefault();

      const form = document.getElementById("formAccountSettings");
      const formData = new FormData(form);
      const session = <?php echo json_encode($_SESSION['user']); ?>;

      console.log(session.email)

      // Add image file manually
      const imageFile = document.getElementById("upload").files[0];
      if (imageFile) {
        formData.append("image", imageFile);
      }
      formData.append("adminId", session.id)


      try {
        const response = await fetch("../api/auth/updateProfile.php", {
          method: "POST",
          body: formData
        });

        console.log(formData)

        const result = await response.json();
        console.log("result", result);



        location.reload()
      } catch (error) {
        // console.error("Error:", error);
        alert("Something went wrong!");
      }
    });

    const session = <?php echo json_encode($_SESSION['user']); ?>;
    const adminEmail = document.getElementById("email")
    const adminName = document.getElementById("firstName")
    const profilePic = document.getElementById("profilePic")
    const phone = document.getElementById("phone")
    const countryName = document.getElementById("countryName")


    const getProfileData = async () => {

      try {
        let adminDetails = await fetch("../api/auth/getProfileData.php", {
          method: "POST",
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
          },

          body: new URLSearchParams({
            email: session.email
          })

        })
        adminDetails = await adminDetails.json()
        const baseUrl = window.location.origin;
        let img = `${baseUrl}/prana-wellness-app/public/uploads/${adminDetails.message.imgPath}`;
        profilePic.src = img;
        phone.value = adminDetails.message.phoneNo;
        adminEmail.value = adminDetails.message.email;
        adminName.value = adminDetails.message.name;
        // countryName.value = adminDetails.message.country;
        $('#countryName').selectpicker('val', [adminDetails.message.country]);
        // countryName.querySelector(`[value="${adminDetails.message.country}`).setAttribute('selected','');
        console.log(adminDetails.message);
        console.log(countryName.querySelector(`[value="${adminDetails.message.country}`));

        // window.location.reload()

      } catch (error) {
        console.log("varun" , error);
      }

    }

    getProfileData()


    document.getElementById('formAccountDeactivation').addEventListener('submit', async function(e) {
      e.preventDefault();
      const isConfirmed = document.getElementById('accountActivation').checked;

      if (!isConfirmed) {
        alert('Please confirm account deactivation.');
        return;
      }

      // Example API endpoint (replace with your actual API)
      const apiUrl = '../api/auth/deactivate.php';

      try {
        const response = await fetch(apiUrl, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
          },

          body: new URLSearchParams({
            email: session.email,
            deactivate: true,
          })
        });

        const result = await response.json();
        console.log(result)

        const pathSegments = window.location.pathname.split('/');
        const basePath = '/' + pathSegments[1] + '/'; // e.g., "prana-wellness-app"
        const baseUrl = window.location.origin + basePath;
        console.log(baseUrl);

        // window.location.href = `${baseUrl}/auth/signup`;

        if(result.success)
        {
          window.location.href = `${baseUrl}/auth/signup`;
        }


      } catch (error) {
        console.error('Error:', error);
        alert('Something went wrong. Please try again later.');
      }
    });
  </script>




</body>

</html>