<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>CityStars Properties | Admin Panel</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/admin/') }}/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/admin/') }}/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/admin/') }}/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/admin/') }}/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/admin/') }}/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ asset('public/assets/admin/') }}/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/admin/') }}/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{ asset('public/assets/admin/') }}/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{ asset('public/assets/admin/') }}/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{ asset('public/assets/admin/') }}/pages/css/login.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> </head>
<!-- END HEAD -->

<body class=" login">
<!-- BEGIN LOGO -->
<div class="logo">
  
      <img class="image-responsive" style="height:150px" src="{{ asset('public/assets/admin/') }}/pages/img/logo.png">
      <h2 style="color:#312e2e">CityStars Properties </h2>

<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content" style="background-color: #fff;-webkit-border-radius: 7px;-moz-border-radius: 7px;-ms-border-radius: 7px;-o-border-radius: 7px;border-radius: 7px;width: 400px;margin: 40px auto 10px;padding: 30px;overflow: hidden;position: relative; box-shadow: 0px 0px 3px 1px rgba(0,0,0,.08);">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" action="{{ route('admin.login.post') }}" method="post">
        {!! csrf_field() !!}

        <h3 style="color: #0e0e0e!important;background-color: #720000;margin: -30px -30px 30px -30px;font-size: 2rem;padding: 20px 0;color: #fff !important;" class="form-title font-green">Sign In</h3>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> Enter any E-mail and password. </span>
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">E-Mail Address</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="E-Mail"  name="email" value="{{ old('email') }}"/>
            @if ($errors->has('email'))
                <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" />
            @if ($errors->has('password'))
                <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
            @endif
        </div>

        <div class="form-actions">
            <button style="background-color: #201f1f;" type="submit" class="btn green uppercase">Login</button>
            <label class="rememberme check">
                <input type="checkbox" name="remember" value="1" />Remember </label>
            <a href="{{ url('/password/reset') }}" id="forget-password" class="forget-password">Forgot Password?</a>
        </div>
    </form>
    <!-- END LOGIN FORM -->


</div>
<div class="copyright"> <?=date("Y");?> © Developed By Digitree. </div>
<!--[if lt IE 9]>
<script src="{{ asset('public/assets/admin/') }}/global/plugins/respond.min.js"></script>
<script src="{{ asset('public/assets/admin/') }}/global/plugins/excanvas.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="{{ asset('public/assets/admin/') }}/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="{{ asset('public/assets/admin/') }}/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{ asset('public/assets/admin/') }}/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="{{ asset('public/assets/admin/') }}/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="{{ asset('public/assets/admin/') }}/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="{{ asset('public/assets/admin/') }}/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="{{ asset('public/assets/admin/') }}/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="{{ asset('public/assets/admin/') }}/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('public/assets/admin/') }}/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="{{ asset('public/assets/admin/') }}/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<script src="{{ asset('public/assets/admin/') }}/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{ asset('public/assets/admin/') }}/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('public/assets/admin/') }}/pages/scripts/login.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->
</body>
</html>



