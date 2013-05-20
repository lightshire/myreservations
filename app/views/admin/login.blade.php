<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">

  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <title>Login</title>
  <link href="{{URL::asset('stylesheets')}}/application.css" media="screen" rel="stylesheet" type="text/css" />
  <!--[if lt IE 9]>
<script src="{{URL::asset('javascripts')}}/html5shiv.js" type="text/javascript"></script>
<script src="{{URL::asset('javascripts')}}" type="text/javascript"></script>
<script src="{{URL::asset('javascripts')}}iefix.js" type="text/javascript"></script>
<link src="{{URL::asset('stylesheets')}}efix.css" media="screen" rel="stylesheet" type="text/css" /><![endif]-->
  <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
</head>
<body class="login">


<div class="container">
  <div class="login-wrapper" style="margin-top: 120px">
    <div style="text-align: center">
      <i class="icon-magic logo-icon"></i>
    </div>
    @if(Session::get('error'))
      {{Alert::error('Login Error has accoured. Please try again')->open()}}
    @endif
    <div id="login-manager">
      <div id="login" class="login-wrapper animated">
        <form action="{{URL::to('login')}}" method="POST">
          <div class="input-group">
            <input type="text" placeholder="email" class="input-transparent" id="email" name="username"/>
            <input type="password" placeholder="password" class="input-transparent" name="password"/>
          </div>
          <button id="login-submit" type="submit" class="login-button">Login</button>
        </form>
      </div>

      <div id="register" class="login-wrapper animated" style="display: none;">
        <form action="http://beer2code.com/themes/plastique/pages/dashboard/stats.html" method="get">
          <div class="input-group">
            <input type="text" placeholder="email" class="input-transparent" />
            <input type="text" placeholder="first name" class="input-transparent"/>
            <input type="text" placeholder="last name" class="input-transparent"/>
            <input type="email" placeholder="confirm password" class="input-transparent"/>
            <input type="password" placeholder="password" class="input-transparent"/>
          </div>
          <button id="register-submit" type="submit" class="login-button">Register</button>
        </form>
      </div>

      <div id="forgot" class="login-wrapper animated" style="display: none;">
        <form action="http://beer2code.com/themes/plastique/pages/dashboard/stats.html" method="get">
          <div class="input-group">
            <input type="text" placeholder="email" class="input-transparent" />
          </div>
          <button id="forgot-submit" type="submit" class="login-button">Recover</button>
        </form>
      </div>

      <div class="inner-well" style="text-align: center; margin: 20px 0;">
        <a href="#" id="login-link" class="button mini rounded gray"><i class="icon-signin"></i> Login</a>
        <a href="#" id="register-link" class="button mini rounded gray"><i class="icon-plus"></i> Register</a>
        <a href="#" id="forgot-link" class="button mini rounded gray"><i class="icon-question-sign"></i> Forgot Password?</a>
      </div>
    </div>
  </div>
</div>
<script type="text/html" id="template-notification">
  <div class="notification animated fadeInLeftMiddle fast">
  </div>
</script>
<script type="text/html" id="template-notifications">
  <div class="container">
    <div class="row" id="notifications-wrapper">
      <div id="notifications" class=" notifications animated">
        <div id="dismiss-all" class="dismiss-all button blue">Dismiss all</div>
        <div id="content">
          <div id="notes"></div>
        </div>
      </div>
    </div>
  </div>
</script>
<script src="{{URL::asset('javascripts')}}/application.js" type="text/javascript"></script>
<script src="{{URL::asset('javascripts')}}/docs.js" type="text/javascript"></script>
<script src="{{URL::asset('javascripts')}}/docs_charts.js" type="text/javascript"></script>
</body>

</html>
