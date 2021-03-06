<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Login - I need a friend.</title>
    <meta name="description" content="Login - I need a friend.">
    <meta name="author" content="kyrozyn">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Login - I need a friend.">
    <meta property="og:site_name" content="I need a friend.">
    <meta property="og:description" content="Login - I need a friend.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="https://raw.githubusercontent.com/Kyrozyn/ineedfriend/master/assets/img/favicon.ico">
    <link rel="icon" type="image/png" sizes="192x192" href="https://raw.githubusercontent.com/Kyrozyn/ineedfriend/master/assets/img/logo-ori.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://raw.githubusercontent.com/Kyrozyn/ineedfriend/master/assets/img/logo-ori.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{asset('assets/css/dashmix.min.css')}}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>

<div id="page-container">
    @yield('content')
</div>
<!-- END Page Container -->

<!--
    Dashmix JS Core

    Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
    to handle those dependencies through webpack. Please check out assets/_js/main/bootstrap.js for more info.

    If you like, you could also include them separately directly from the assets/js/core folder in the following
    order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

    assets/js/core/jquery.min.js
    assets/js/core/bootstrap.bundle.min.js
    assets/js/core/simplebar.min.js
    assets/js/core/jquery-scrollLock.min.js
    assets/js/core/jquery.appear.min.js
    assets/js/core/js.cookie.min.js
-->
<script src="{{asset('assets/js/dashmix.core.min.js')}}"></script>

<!--
    Dashmix JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at assets/_js/main/app.js
-->
<script src="{{asset('assets/js/dashmix.app.min.js')}}"></script>

<!-- Page JS Plugins -->
<script src="{{asset('assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>

<!-- Page JS Code -->
<script src="{{asset('assets/js/pages/op_auth_signin.min.js')}}"></script>
</body>
</html>
