
```
prana-wellness-app
├─ .htaccess
├─ api
│  ├─ activities
│  │  ├─ add.php
│  │  ├─ addUser.php
│  │  ├─ get.php
│  │  └─ getUser.php
│  └─ auth
│     ├─ login.php
│     ├─ logout.php
│     ├─ signup.php
│     └─ verify-otp.php
├─ backup
│  └─ database
│     └─ activity.sql
├─ functions
│  ├─ activity_added_chart.php
│  ├─ auth.php
│  ├─ db.php
│  └─ utility.php
├─ public
│  ├─ assets
│  │  ├─ css
│  │  │  └─ demo.css
│  │  ├─ img
│  │  │  ├─ avatars
│  │  │  │  ├─ 1.png
│  │  │  │  ├─ 2.png
│  │  │  │  ├─ 3.png
│  │  │  │  └─ 4.png
│  │  │  ├─ backgrounds
│  │  │  │  └─ 1.jpg
│  │  │  ├─ elements
│  │  │  │  ├─ 1.png
│  │  │  │  ├─ 10.png
│  │  │  │  ├─ 11.png
│  │  │  │  ├─ 12.png
│  │  │  │  ├─ 13.png
│  │  │  │  ├─ 14.png
│  │  │  │  ├─ 15.png
│  │  │  │  ├─ 16.png
│  │  │  │  ├─ 17.png
│  │  │  │  ├─ 18.png
│  │  │  │  ├─ 19.png
│  │  │  │  ├─ 2.png
│  │  │  │  ├─ 3.png
│  │  │  │  ├─ 4.png
│  │  │  │  ├─ 5.png
│  │  │  │  ├─ 6.png
│  │  │  │  ├─ 7.png
│  │  │  │  ├─ 8.png
│  │  │  │  └─ 9.png
│  │  │  ├─ favicon
│  │  │  │  └─ favicon.ico
│  │  │  ├─ icons
│  │  │  │  ├─ brands
│  │  │  │  │  ├─ asana.png
│  │  │  │  │  ├─ behance.png
│  │  │  │  │  ├─ dribbble.png
│  │  │  │  │  ├─ facebook.png
│  │  │  │  │  ├─ github.png
│  │  │  │  │  ├─ google.png
│  │  │  │  │  ├─ instagram.png
│  │  │  │  │  ├─ mailchimp.png
│  │  │  │  │  ├─ slack.png
│  │  │  │  │  └─ twitter.png
│  │  │  │  └─ unicons
│  │  │  │     ├─ cc-primary.png
│  │  │  │     ├─ cc-warning.png
│  │  │  │     ├─ chart-success.png
│  │  │  │     ├─ chart.png
│  │  │  │     ├─ paypal.png
│  │  │  │     ├─ wallet-info.png
│  │  │  │     └─ wallet.png
│  │  │  ├─ illustrations
│  │  │  │  ├─ girl-doing-yoga-light.png
│  │  │  │  ├─ man-with-laptop.png
│  │  │  │  └─ page-misc-error-light.png
│  │  │  ├─ layouts
│  │  │  │  ├─ layout-container-light.png
│  │  │  │  ├─ layout-fluid-light.png
│  │  │  │  ├─ layout-without-menu-light.png
│  │  │  │  └─ layout-without-navbar-light.png
│  │  │  └─ logo.png
│  │  ├─ js
│  │  │  ├─ config.js
│  │  │  ├─ dashboards-analytics.js
│  │  │  ├─ extended-ui-perfect-scrollbar.js
│  │  │  ├─ form-basic-inputs.js
│  │  │  ├─ form-validation.js
│  │  │  ├─ main.js
│  │  │  ├─ pages-account-settings-account.js
│  │  │  ├─ ui-modals.js
│  │  │  ├─ ui-popover.js
│  │  │  └─ ui-toasts.js
│  │  └─ vendor
│  │     ├─ css
│  │     │  ├─ core.css
│  │     │  └─ pages
│  │     │     ├─ page-auth.css
│  │     │     ├─ page-icons.css
│  │     │     └─ page-misc.css
│  │     ├─ fonts
│  │     │  └─ iconify-icons.css
│  │     ├─ js
│  │     │  ├─ bootstrap.js
│  │     │  ├─ helpers.js
│  │     │  └─ menu.js
│  │     └─ libs
│  │        ├─ apex-charts
│  │        │  ├─ apex-charts.css
│  │        │  └─ apexcharts.js
│  │        ├─ highlight
│  │        │  ├─ highlight-github.css
│  │        │  ├─ highlight.css
│  │        │  └─ highlight.js
│  │        ├─ jquery
│  │        │  └─ jquery.js
│  │        ├─ masonry
│  │        │  └─ masonry.js
│  │        ├─ perfect-scrollbar
│  │        │  ├─ perfect-scrollbar.css
│  │        │  └─ perfect-scrollbar.js
│  │        └─ popper
│  │           └─ popper.js
│  ├─ dist
│  │  ├─ css
│  │  │  ├─ core.css
│  │  │  └─ pages
│  │  │     ├─ page-auth.css
│  │  │     ├─ page-icons.css
│  │  │     └─ page-misc.css
│  │  ├─ fonts
│  │  │  └─ iconify-icons.css
│  │  ├─ js
│  │  │  ├─ bootstrap.js
│  │  │  ├─ helpers.js
│  │  │  └─ menu.js
│  │  └─ libs
│  │     ├─ apex-charts
│  │     │  ├─ apex-charts.css
│  │     │  └─ apexcharts.js
│  │     ├─ highlight
│  │     │  ├─ highlight-github.css
│  │     │  ├─ highlight.css
│  │     │  └─ highlight.js
│  │     ├─ jquery
│  │     │  └─ jquery.js
│  │     ├─ masonry
│  │     │  └─ masonry.js
│  │     ├─ perfect-scrollbar
│  │     │  ├─ perfect-scrollbar.css
│  │     │  └─ perfect-scrollbar.js
│  │     └─ popper
│  │        └─ popper.js
│  ├─ fonts
│  │  └─ iconify
│  │     └─ iconify.js
│  ├─ html
│  │  ├─ auth-forgot-password-basic.html
│  │  ├─ auth-login-basic.html
│  │  ├─ auth-register-basic.html
│  │  ├─ cards-basic.html
│  │  ├─ extended-ui-perfect-scrollbar.html
│  │  ├─ extended-ui-text-divider.html
│  │  ├─ form-layouts-horizontal.html
│  │  ├─ form-layouts-vertical.html
│  │  ├─ forms-basic-inputs.html
│  │  ├─ forms-input-groups.html
│  │  ├─ icons-boxicons.html
│  │  ├─ index.html
│  │  ├─ layouts-blank.html
│  │  ├─ layouts-container.html
│  │  ├─ layouts-fluid.html
│  │  ├─ layouts-without-menu.html
│  │  ├─ layouts-without-navbar.html
│  │  ├─ pages-account-settings-account.html
│  │  ├─ pages-account-settings-connections.html
│  │  ├─ pages-account-settings-notifications.html
│  │  ├─ pages-misc-error.html
│  │  ├─ pages-misc-under-maintenance.html
│  │  ├─ tables-basic.html
│  │  ├─ ui-accordion.html
│  │  ├─ ui-alerts.html
│  │  ├─ ui-badges.html
│  │  ├─ ui-buttons.html
│  │  ├─ ui-carousel.html
│  │  ├─ ui-collapse.html
│  │  ├─ ui-dropdowns.html
│  │  ├─ ui-footer.html
│  │  ├─ ui-list-groups.html
│  │  ├─ ui-modals.html
│  │  ├─ ui-navbar.html
│  │  ├─ ui-offcanvas.html
│  │  ├─ ui-pagination-breadcrumbs.html
│  │  ├─ ui-progress.html
│  │  ├─ ui-spinners.html
│  │  ├─ ui-tabs-pills.html
│  │  ├─ ui-toasts.html
│  │  ├─ ui-tooltips-popovers.html
│  │  └─ ui-typography.html
│  ├─ js
│  │  ├─ bindActivitys.js
│  │  ├─ bootstrap.js
│  │  ├─ helpers.js
│  │  └─ menu.js
│  ├─ libs
│  │  ├─ apex-charts
│  │  │  ├─ apex-charts.scss
│  │  │  └─ apexcharts.js
│  │  ├─ highlight
│  │  │  ├─ highlight-github.scss
│  │  │  ├─ highlight.js
│  │  │  └─ highlight.scss
│  │  ├─ jquery
│  │  │  └─ jquery.js
│  │  ├─ masonry
│  │  │  └─ masonry.js
│  │  ├─ perfect-scrollbar
│  │  │  ├─ perfect-scrollbar.js
│  │  │  └─ perfect-scrollbar.scss
│  │  └─ popper
│  │     └─ popper.js
│  ├─ tasks
│  │  ├─ build.js
│  │  └─ prod.js
│  └─ view
│     ├─ admin
│     │  ├─ activities.php
│     │  └─ dashboard.php
│     ├─ auth
│     │  ├─ forget.php
│     │  ├─ login.php
│     │  ├─ reset.php
│     │  ├─ signup.php
│     │  └─ two-step.php
│     ├─ config.php
│     ├─ dashboard.php
│     ├─ data-table.php
│     └─ index.php
└─ templates
   ├─ footer.php
   ├─ header.php
   └─ navbar.php

```
```
prana-wellness-app
├─ .htaccess
├─ api
│  ├─ activities
│  │  ├─ add.php
│  │  ├─ addUser.php
│  │  ├─ get.php
│  │  └─ getUser.php
│  └─ auth
│     ├─ login.php
│     ├─ logout.php
│     ├─ signup.php
│     └─ verify-otp.php
├─ backup
│  └─ database
│     └─ activity.sql
├─ functions
│  ├─ activity_added_chart.php
│  ├─ auth.php
│  ├─ db.php
│  └─ utility.php
├─ public
│  ├─ assets
│  │  ├─ css
│  │  │  └─ demo.css
│  │  ├─ img
│  │  │  ├─ avatars
│  │  │  │  ├─ 1.png
│  │  │  │  ├─ 2.png
│  │  │  │  ├─ 3.png
│  │  │  │  └─ 4.png
│  │  │  ├─ backgrounds
│  │  │  │  └─ 1.jpg
│  │  │  ├─ elements
│  │  │  │  ├─ 1.png
│  │  │  │  ├─ 10.png
│  │  │  │  ├─ 11.png
│  │  │  │  ├─ 12.png
│  │  │  │  ├─ 13.png
│  │  │  │  ├─ 14.png
│  │  │  │  ├─ 15.png
│  │  │  │  ├─ 16.png
│  │  │  │  ├─ 17.png
│  │  │  │  ├─ 18.png
│  │  │  │  ├─ 19.png
│  │  │  │  ├─ 2.png
│  │  │  │  ├─ 3.png
│  │  │  │  ├─ 4.png
│  │  │  │  ├─ 5.png
│  │  │  │  ├─ 6.png
│  │  │  │  ├─ 7.png
│  │  │  │  ├─ 8.png
│  │  │  │  └─ 9.png
│  │  │  ├─ favicon
│  │  │  │  └─ favicon.ico
│  │  │  ├─ icons
│  │  │  │  ├─ brands
│  │  │  │  │  ├─ asana.png
│  │  │  │  │  ├─ behance.png
│  │  │  │  │  ├─ dribbble.png
│  │  │  │  │  ├─ facebook.png
│  │  │  │  │  ├─ github.png
│  │  │  │  │  ├─ google.png
│  │  │  │  │  ├─ instagram.png
│  │  │  │  │  ├─ mailchimp.png
│  │  │  │  │  ├─ slack.png
│  │  │  │  │  └─ twitter.png
│  │  │  │  └─ unicons
│  │  │  │     ├─ cc-primary.png
│  │  │  │     ├─ cc-warning.png
│  │  │  │     ├─ chart-success.png
│  │  │  │     ├─ chart.png
│  │  │  │     ├─ paypal.png
│  │  │  │     ├─ wallet-info.png
│  │  │  │     └─ wallet.png
│  │  │  ├─ illustrations
│  │  │  │  ├─ girl-doing-yoga-light.png
│  │  │  │  ├─ man-with-laptop.png
│  │  │  │  └─ page-misc-error-light.png
│  │  │  ├─ layouts
│  │  │  │  ├─ layout-container-light.png
│  │  │  │  ├─ layout-fluid-light.png
│  │  │  │  ├─ layout-without-menu-light.png
│  │  │  │  └─ layout-without-navbar-light.png
│  │  │  └─ logo.png
│  │  ├─ js
│  │  │  ├─ config.js
│  │  │  ├─ dashboards-analytics.js
│  │  │  ├─ extended-ui-perfect-scrollbar.js
│  │  │  ├─ form-basic-inputs.js
│  │  │  ├─ form-validation.js
│  │  │  ├─ main.js
│  │  │  ├─ pages-account-settings-account.js
│  │  │  ├─ ui-modals.js
│  │  │  ├─ ui-popover.js
│  │  │  └─ ui-toasts.js
│  │  └─ vendor
│  │     ├─ css
│  │     │  ├─ core.css
│  │     │  └─ pages
│  │     │     ├─ page-auth.css
│  │     │     ├─ page-icons.css
│  │     │     └─ page-misc.css
│  │     ├─ fonts
│  │     │  └─ iconify-icons.css
│  │     ├─ js
│  │     │  ├─ bootstrap.js
│  │     │  ├─ helpers.js
│  │     │  └─ menu.js
│  │     └─ libs
│  │        ├─ apex-charts
│  │        │  ├─ apex-charts.css
│  │        │  └─ apexcharts.js
│  │        ├─ highlight
│  │        │  ├─ highlight-github.css
│  │        │  ├─ highlight.css
│  │        │  └─ highlight.js
│  │        ├─ jquery
│  │        │  └─ jquery.js
│  │        ├─ masonry
│  │        │  └─ masonry.js
│  │        ├─ perfect-scrollbar
│  │        │  ├─ perfect-scrollbar.css
│  │        │  └─ perfect-scrollbar.js
│  │        └─ popper
│  │           └─ popper.js
│  ├─ dist
│  │  ├─ css
│  │  │  ├─ core.css
│  │  │  └─ pages
│  │  │     ├─ page-auth.css
│  │  │     ├─ page-icons.css
│  │  │     └─ page-misc.css
│  │  ├─ fonts
│  │  │  └─ iconify-icons.css
│  │  ├─ js
│  │  │  ├─ bootstrap.js
│  │  │  ├─ helpers.js
│  │  │  └─ menu.js
│  │  └─ libs
│  │     ├─ apex-charts
│  │     │  ├─ apex-charts.css
│  │     │  └─ apexcharts.js
│  │     ├─ highlight
│  │     │  ├─ highlight-github.css
│  │     │  ├─ highlight.css
│  │     │  └─ highlight.js
│  │     ├─ jquery
│  │     │  └─ jquery.js
│  │     ├─ masonry
│  │     │  └─ masonry.js
│  │     ├─ perfect-scrollbar
│  │     │  ├─ perfect-scrollbar.css
│  │     │  └─ perfect-scrollbar.js
│  │     └─ popper
│  │        └─ popper.js
│  ├─ fonts
│  │  └─ iconify
│  │     └─ iconify.js
│  ├─ html
│  │  ├─ auth-forgot-password-basic.html
│  │  ├─ auth-login-basic.html
│  │  ├─ auth-register-basic.html
│  │  ├─ cards-basic.html
│  │  ├─ extended-ui-perfect-scrollbar.html
│  │  ├─ extended-ui-text-divider.html
│  │  ├─ form-layouts-horizontal.html
│  │  ├─ form-layouts-vertical.html
│  │  ├─ forms-basic-inputs.html
│  │  ├─ forms-input-groups.html
│  │  ├─ icons-boxicons.html
│  │  ├─ index.html
│  │  ├─ layouts-blank.html
│  │  ├─ layouts-container.html
│  │  ├─ layouts-fluid.html
│  │  ├─ layouts-without-menu.html
│  │  ├─ layouts-without-navbar.html
│  │  ├─ pages-account-settings-account.html
│  │  ├─ pages-account-settings-connections.html
│  │  ├─ pages-account-settings-notifications.html
│  │  ├─ pages-misc-error.html
│  │  ├─ pages-misc-under-maintenance.html
│  │  ├─ tables-basic.html
│  │  ├─ ui-accordion.html
│  │  ├─ ui-alerts.html
│  │  ├─ ui-badges.html
│  │  ├─ ui-buttons.html
│  │  ├─ ui-carousel.html
│  │  ├─ ui-collapse.html
│  │  ├─ ui-dropdowns.html
│  │  ├─ ui-footer.html
│  │  ├─ ui-list-groups.html
│  │  ├─ ui-modals.html
│  │  ├─ ui-navbar.html
│  │  ├─ ui-offcanvas.html
│  │  ├─ ui-pagination-breadcrumbs.html
│  │  ├─ ui-progress.html
│  │  ├─ ui-spinners.html
│  │  ├─ ui-tabs-pills.html
│  │  ├─ ui-toasts.html
│  │  ├─ ui-tooltips-popovers.html
│  │  └─ ui-typography.html
│  ├─ js
│  │  ├─ bindActivitys.js
│  │  ├─ bootstrap.js
│  │  ├─ helpers.js
│  │  └─ menu.js
│  ├─ libs
│  │  ├─ apex-charts
│  │  │  ├─ apex-charts.scss
│  │  │  └─ apexcharts.js
│  │  ├─ highlight
│  │  │  ├─ highlight-github.scss
│  │  │  ├─ highlight.js
│  │  │  └─ highlight.scss
│  │  ├─ jquery
│  │  │  └─ jquery.js
│  │  ├─ masonry
│  │  │  └─ masonry.js
│  │  ├─ perfect-scrollbar
│  │  │  ├─ perfect-scrollbar.js
│  │  │  └─ perfect-scrollbar.scss
│  │  └─ popper
│  │     └─ popper.js
│  ├─ tasks
│  │  ├─ build.js
│  │  └─ prod.js
│  └─ view
│     ├─ admin
│     │  ├─ activities.php
│     │  └─ dashboard.php
│     ├─ auth
│     │  ├─ forget.php
│     │  ├─ login.php
│     │  ├─ reset.php
│     │  ├─ signup.php
│     │  └─ two-step.php
│     ├─ config.php
│     ├─ dashboard.php
│     ├─ data-table.php
│     └─ index.php
├─ README.md
└─ templates
   ├─ footer.php
   ├─ header.php
   └─ navbar.php

```