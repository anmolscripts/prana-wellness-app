<!doctype html>







































<!-- =========================================================
* Sneat -  | v3.0.0
==============================================================

* Product Page: https://themeselection.com/item/sneat-dashboard-pro-bootstrap/
* Created by: ThemeSelection

      * License: You must have a valid license purchased in order to legally use the theme for your project.
    
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->



<html
  lang="en"
  class=" layout-wide  customizer-hide"
  dir="ltr"
  data-skin="default"
  data-public-path="../public"
  data-template="vertical-menu-template"
  data-bs-theme="light">

<st>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <meta name="robots" content="noindex" />

  <title>Demo: Login Basic - Pages | Sneat - Bootstrap Dashboard PRO</title>



  <!-- Canonical SEO -->
  <meta name="description" content="Sneat is the best bootstrap 5 dashboard for responsive web apps. Streamline your app development process with ease." />

  <meta name="keywords" content="Sneat bootstrap dashboard, sneat bootstrap 5 dashboard, themeselection, html dashboard, web dashboard, frontend dashboard, responsive bootstrap theme" />
  <meta property="og:title" content="Sneat Bootstrap 5 Dashboard PRO by ThemeSelection" />
  <meta property="og:type" content="product" />
  <meta property="og:url" content="https://themeselection.com/item/sneat-dashboard-pro-bootstrap/" />
  <meta property="og:image" content="https://themeselection.com/wp-content/uploads/edd/2024/08/sneat-dashboard-pro-bootstrap-smm-image.png" />
  <meta property="og:description" content="Sneat is the best bootstrap 5 dashboard for responsive web apps. Streamline your app development process with ease." />
  <meta property="og:site_name" content="ThemeSelection" />
  <link rel="canonical" href="https://themeselection.com/item/sneat-dashboard-pro-bootstrap/" />





  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../public/assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="../public/assets/vendor/fonts/iconify-icons.css" />

  <!-- Core CSS -->
  <!-- build:css public/assets/vendor/css/theme.css  -->


  <link rel="stylesheet" href="../public/assets/vendor/libs/pickr/pickr-themes.css" />

  <link rel="stylesheet" href="../public/assets/vendor/css/core.css" />
  <link rel="stylesheet" href="../public/assets/css/demo.css" />


  <!-- Vendors CSS -->

  <link rel="stylesheet" href="../public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- endbuild -->

  <!-- Vendor -->
  <link rel="stylesheet" href="../public/assets/vendor/libs/@form-validation/form-validation.css" />

  <!-- Page CSS -->
  <!-- Page -->
  <link rel="stylesheet" href="../public/assets/vendor/css/pages/page-auth.css" />

  <!-- Helpers -->
  <script src="../public/assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="../public/assets/vendor/js/template-customizer.js"></script>

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

  <script src="../public/assets/js/config.js"></script>

  <style>
    .form-error-message {
      height: 0;
      overflow: hidden;
      padding: 0;
      margin: 0;
      animation: fadeIn 0.3s ease-in-out forwards;
      --height: 2.5rem;
    }

    .activate-account-message {
      --height: 3.5rem;
    }

    @keyframes fadeIn {
      to {
        height: var(--height);
        padding: .5rem;
        margin: .5rem 0;
      }
    }
  </style>
  </head>

  <body>



    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">


          <div id="loginCarousel" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="card px-sm-6 px-0">
                  <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                      <a href="../" class="app-brand-link gap-2">
                        <span class="app-brand-logo demo">
                          <img src="../public/assets/img/logo.png" alt="" class="w-100 h-auto">
                        </span>
                      </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-1 text-black">Welcome to Prana! 👋</h4>

                    <form id="formAuthentication" class="mb-6">
                      <div class="mb-6 form-control-validation">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" autofocus />
                      </div>
                      <div id="emailErrorMessage" class="alert alert-danger form-error-message d-none" role="alert">This is a danger alert — check it out!</div>
                      <div id="activateAccountMessage" class="alert alert-dark form-error-message activate-account-message d-none" role="alert">
                        <button name="email-submit-btn" type="button" onclick="sendOtp(this, true)"
                          class="btn btn-dark d-grid w-100">
                          <div class="spinner-border text-light d-none" role="status">
                            <span class="visually-hidden">Loading...</span>
                          </div>
                          <span class="text">Activate Account</span>
                        </button>
                      </div>
                      <button name="email-submit-btn" type="button" onclick="sendOtp(this)"
                        class="btn btn-primary d-grid w-100">
                        <div class="spinner-border text-light d-none" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div>
                        <span class="text">Send OTP</span>
                      </button>

                    </form>
                    <p class="text-center">
                      <span>New on our platform?</span>
                      <a href="signup">
                        <span>Create an account</span>
                      </a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card px-sm-6 px-0">
                  <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                      <a href="../" class="app-brand-link gap-2">
                        <span class="app-brand-logo demo">
                          <img src="../public/assets/img/logo.png" alt="" class="w-100 h-auto">
                        </span>
                      </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-1 text-dark">Two Step Verification 💬</h4>
                    <p class="text-start mb-6">
                      We sent a verification code to your mobile. Enter the code from the mobile in
                      the field below.
                      <span id="emailField" class="fw-medium d-block mt-1 text-heading">******1234</span>
                    </p>
                    <p class="mb-0">Type your 6 digit security code</p>
                    <form id="twoStepsForm">
                      <div class="mb-6 form-control-validation">
                        <div
                          class="auth-input-wrapper d-flex align-items-center justify-content-between numeral-mask-wrapper">
                          <input type="tel"
                            class="form-control auth-input h-px-50 text-center numeral-mask mx-sm-1 mt-2 otp-input"
                            maxlength="1" autofocus required />
                          <input type="tel"
                            class="form-control auth-input h-px-50 text-center numeral-mask mx-sm-1 mt-2 otp-input"
                            maxlength="1" required />
                          <input type="tel"
                            class="form-control auth-input h-px-50 text-center numeral-mask mx-sm-1 mt-2 otp-input"
                            maxlength="1" required />
                          <input type="tel"
                            class="form-control auth-input h-px-50 text-center numeral-mask mx-sm-1 mt-2 otp-input"
                            maxlength="1" required />
                          <input type="tel"
                            class="form-control auth-input h-px-50 text-center numeral-mask mx-sm-1 mt-2 otp-input"
                            maxlength="1" required />
                          <input type="tel"
                            class="form-control auth-input h-px-50 text-center numeral-mask mx-sm-1 mt-2 otp-input"
                            maxlength="1" required />
                        </div>
                        <!-- Create a hidden field which is combined by 3 fields above -->
                        <input type="hidden" name="otp" />
                      </div>
                      <div id="OTPErrorMessage" class="alert alert-danger form-error-message d-none" role="alert">This is a danger alert — check it out!</div>
                      <button type="button" name="varify-OTP-submit-btn" onclick="varifySignUp(this)" class="btn btn-primary d-grid w-100 mb-6">Verify my account</button>
                      <div class="text-center">
                        Didn't get the code?
                        <a onclick="sendOtp(this)" href="javascript:void(0);">
                          <div class="spinner-border text-light d-none" style="width:1rem; height: 1rem;" role="status">
                            <span class="visually-hidden">Loading...</span>
                          </div>
                          <span class="text">Resend</span>
                        </a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- / Content -->






    <!-- Core JS -->
    <!-- build:js public/assets/vendor/js/theme.js  -->


    <script src="../public/assets/vendor/libs/jquery/jquery.js"></script>

    <script src="../public/assets/vendor/libs/popper/popper.js"></script>
    <script src="../public/assets/vendor/js/bootstrap.js"></script>
    <script src="../public/assets/vendor/libs/@algolia/autocomplete-js.js"></script>



    <script src="../public/assets/vendor/libs/pickr/pickr.js"></script>



    <script src="../public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>


    <script src="../public/assets/vendor/libs/hammer/hammer.js"></script>

    <script src="../public/assets/vendor/libs/i18n/i18n.js"></script>


    <script src="../public/assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../public/assets/vendor/libs/@form-validation/popular.js"></script>
    <script src="../public/assets/vendor/libs/@form-validation/bootstrap5.js"></script>
    <script src="../public/assets/vendor/libs/@form-validation/auto-focus.js"></script>

    <!-- Main JS -->

    <script src="../public/assets/js/main.js"></script>


    <!-- Page JS -->
    <script src="../public/assets/js/pages-auth.js"></script>
    <script src="../public/js/utility.js"></script>

    <script>
      const myCarousel = document.getElementById('loginCarousel');
      const carousel = new bootstrap.Carousel(myCarousel);
      const emailField = document.getElementById('emailField');
      const sendOtp = (e, activeAccount = false) => {
        const email = document.getElementById('email');
        const emailErrorMessage = document.getElementById('emailErrorMessage');
        const activateAccountMessage = document.getElementById('activateAccountMessage');
        if (email.value === '') {
          email.classList.add('is-invalid');
          email.classList.remove('is-valid');
          return;
        } else {
          e.querySelector('.spinner-border').classList.remove('d-none');
          e.querySelector('.text').classList.add('d-none');
          e.removeAttribute('disabled');
          if (emailField) {
            emailField.innerText = email.value;
          }
          let data = {};
          if (activeAccount) {
            data = {
              email: email.value,
              activate: activeAccount
            }
          } else {
            data = {
              email: email.value
            }
          }
          fetch('../api/auth/login.php', {
              method: 'POST',
              headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
              },
              body: new URLSearchParams(data)
            })
            .then(response => response.json())
            .then(data => {
              console.log(data);
              if (data.success) {
                email.classList.remove('is-invalid');
                email.classList.add('is-valid');
                emailErrorMessage.classList.add('d-none');
                if(activeAccount) {
                  document.querySelector('[name="varify-OTP-submit-btn"]').setAttribute('onclick', 'varifySignUp(this, true)');
                }

                carousel.to(1);
              } else if (data.activate === false) {
                email.classList.remove('is-invalid');
                email.classList.add('is-valid');
                emailErrorMessage.innerText = data.message;
                emailErrorMessage.classList.remove('d-none');
                activateAccountMessage.classList.remove('d-none');
                activateAccountMessage.querySelector('button').focus();
              } else {
                email.classList.add('is-invalid');
                email.classList.remove('is-valid');
                emailErrorMessage.innerText = data.message;
                emailErrorMessage.classList.remove('d-none');
                email.focus();
              }

            })
            .catch(error => {
              console.error('Error:', error);
            }).finally(() => {
              e.querySelector('.spinner-border').classList.add('d-none');
              e.querySelector('.text').classList.remove('d-none');
              e.removeAttribute('disabled');
            });
        }
      }



      let otpValue = [];
      const varifySignUp = (e, activeateAccount = false) => {
        // e.preventDefault();
        const otps = document.querySelectorAll('.otp-input');
        const OTPErrorMessage = document.getElementById('OTPErrorMessage');
        console.log(otps);
        otpValue = [];
        if (otps.length > 0) {
          otps.forEach(otp => {
            otpValue.push(otp.value);
            console.log(otp.value)
          });
        }

        const otp = otpValue.join('');
        const email = document.getElementById('email').value;
       let data = {};
        if (activeateAccount) {
          data = {
            email: email,
            otp: otp,
            activate: activeateAccount
          }
        } else {
          data = {
            email: email,
            otp: otp
          }
        }
        fetch('../api/auth/verify-otp.php', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: new URLSearchParams(data)
          })
          .then(response => response.json())
          .then(data => {
            console.log(data);
            if (data.success) {
              otps.forEach(otp => {
                otp.classList.remove('is-invalid');
                otp.classList.add('is-valid');
              });
              OTPErrorMessage.classList.add('d-none');
              if (data.user.permission === 'admin') {
                localStorage.setItem('user', JSON.stringify(data.user));
                window.location.href = '../admin/dashboard';
              } else {
                localStorage.setItem('user', JSON.stringify(data.user));
                window.location.href = '../dashboard';
              }
            } else {
              otps.forEach(otp => {
                otp.classList.add('is-invalid');
                otp.classList.remove('is-valid');
              });
              OTPErrorMessage.innerText = data.message;
              OTPErrorMessage.classList.remove('d-none');
              otps[otps.length - 1].focus();
            }
          })
          .catch(error => {
            console.error('Error:', error);
          }).finally(() => {
            e.querySelector('.spinner-border').classList.add('d-none');
            e.querySelector('.text').classList.remove('d-none');
            e.removeAttribute('disabled');
          });
      }

      document.addEventListener('DOMContentLoaded', () => {
        // Handel Email input
        const email = Array.from(document.querySelectorAll('#email'));
        const emailSubmitBtn = document.querySelector('[name="email-submit-btn"]');
        setupFieldNavigator(email, emailSubmitBtn, {
          mode: 'text',
          autoAdvance: true
        });
        // Handel varify-OTP-submit-btn
        const otpFields = Array.from(document.querySelectorAll('.otp-input'));
        const otpSubmit = document.querySelector('[name="varify-OTP-submit-btn"]');
        setupFieldNavigator(otpFields, otpSubmit, {
          mode: 'numeric',
          autoAdvance: true
        });
      });
    </script>
  </body>

</html>

<!-- beautify ignore:end -->