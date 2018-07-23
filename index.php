<!DOCTYPE html>
<html class='no-js' lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>Sign in</title>
    <meta content='lab2023' name='author'>
    <meta content='' name='description'>
    <meta content='' name='keywords'>
    <link href="assets/stylesheets/application-a07755f5.css" rel="stylesheet" type="text/css" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/images/favicon.ico" rel="icon" type="image/ico" />
    
  </head>
  <body class='login'>
    <div class='wrapper'>
      <div class='row'>
        <div class='col-lg-12'>
          <div class='brand text-center'>
            <h1>
              <div>
                  <img src="assets/images/logi.jpg" style="height: 80px; width: 80px " class=" logo-icon img-circle">
              </div>
              E-DIARY
            </h1>
          </div>
        </div>
      </div>
      <div class='row'>
        <div class='col-lg-12'>
          <form method="post" action="log_connect.php">
            <fieldset class='text-center'>
              <legend>Login to your account</legend>
              <div class='form-group'>
                <input class='form-control glyphicon glyphicon-user' placeholder='Username' name="username" type='text'>
              </div>
              <div class='form-group'>
                <input class='form-control glyphicon glyphicon-lock' placeholder='Password' name="password" type='password'>
              </div>
              <div class='text-center'>
                <div class='checkbox'>
                  <label>
                    <input type='checkbox'>
                    Remember me on this computer
                  </label>
                </div>
                  <button class="login100-form-btn " name="login">Login</button>
                <br>
                  <a href="sign_up.php" class="login100-form-btn "> Sign up </a>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <!-- Javascripts -->
    <script src="jquery.min.js" type="text/javascript"></script><script src="jquery-ui.min.js" type="text/javascript"></script><script src="modernizr.min.js" type="text/javascript"></script><script src="assets/javascripts/application-985b892b.js" type="text/javascript"></script>
    <!-- Google Analytics -->
    <script>
      var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
      (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
  </body>
</html>
