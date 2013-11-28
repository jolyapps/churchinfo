
<?php
session_start();
if(isset($_SESSION['usr']) && isset($_SESSION['pswd'])){
    header('location:welcome.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>DCLM Church Locations Form | ...your spiritual welfare is our concern</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/flat-ui.css" rel="stylesheet">
    <link href="css/demo.css" rel="stylesheet">

    <link rel='SHORTCUT ICON' href='http://dclmstream.s3.amazonaws.com/img/favicon.ico' type='image/x-icon'/>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container"><!-- /row --><!-- /row --><!-- /row --><!-- /row --><!-- /row --><!-- /row --><!-- /.demo-row --><!-- /icon font row -->

      <center><h1 class="demo-section-title mbl pbl">DCLM Church Locations Worldwide</h1></center>
      <div class="row demo-samples"><!-- /todo list --><!-- /video -->
      </div><!-- /tiles -->

      <div class="login">
        <div class="login-screen">
          <div class="login-icon">
            <img src="images/login/dclm.png" alt="Welcome to Mail App" />
            <h4>Welcome Sir, <small>Please LogIn</small></h4>
          </div>

          <form name="login-form" id="login" action="in.php" method="post">
          <div class="login-form">
            <div class="form-group">
              <input type="text" class="form-control login-field" value="" placeholder="Enter your name" id="login-name" name="usr" />
              <label class="login-field-icon fui-user" for="login-name"></label>
            </div>

            <div class="form-group">
              <input type="password" class="form-control login-field" value="" placeholder="Password" id="login-pass" name="pswd" />
              <label class="login-field-icon fui-lock" for="login-pass"></label>
            </div>

              <input type="submit" class="btn btn-primary btn-lg btn-block" name="login" value="Login" placeholder="Login"/>
                  
            <a class="login-link" href="mailto:info@deeperlifeonline.org?Subject=Forgotten%20Password%20for%20Church%20Location%20Login">Lost your password?</a>
          </div>
          </form>
        </div>
      </div>

      <div class="row"></div> <!-- /download area -->

    </div> <!-- /container -->

    <footer>
      <div class="container">
        <div class="row"><!-- /col-md-7 -->

          <div class="col-md-5"></div>
        </div>
      </div>
    </footer>
    
    <!-- Load JS here for greater good =============================-->
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/bootstrap-switch.js"></script>
    <script src="js/flatui-checkbox.js"></script>
    <script src="js/flatui-radio.js"></script>
    <script src="js/jquery.tagsinput.js"></script>
    <script src="js/jquery.placeholder.js"></script>
    <script src="js/jquery.stacktable.js"></script>
    <script src="http://vjs.zencdn.net/4.1/video.js"></script>
    <script src="js/application.js"></script>
  </body>
</html>