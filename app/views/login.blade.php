<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ORB | Login</title>
<link href="../assets/css/styles.css" rel="stylesheet" type="text/css">

<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<script type="text/javascript" src="../assets/js/vendors/horisontal/modernizr.custom.js"></script>
</head>

<body>
<div class="colorful-page-wrapper">
  <div class="center-block">
    <div class="login-block">

      {{Form::open(['url'=>'users/login-check','method'=>'post','id'=>'login-form','class'=>'orb-form'])}}
      
        <header>
          <div class="image-block"><img src="../assets/images/logo.png" alt="User" /></div>
          Login to ORB <small>Have no account? &#8212; <a href="#">Register</a></small></header>
        <fieldset>
          <section>
            <div class="row">
              <label class="label col col-4">E-mail</label>
              <div class="col col-8">
                <label class="input"> <i class="icon-append fa fa-user"></i>
                  <input type="email" name="email">
                </label>
              </div>
            </div>
          </section>
          <section>
            <div class="row">
              <label class="label col col-4">Password</label>
              <div class="col col-8">
                <label class="input"> <i class="icon-append fa fa-lock"></i>
                  <input type="password" name="password">
                </label>
                <div class="note"><a href="#">Forgot password?</a></div>
              </div>
            </div>
          </section>
          <section>
            <div class="row">
              <div class="col col-4"></div>
              <div class="col col-8">
                <label class="checkbox">
                  <input type="checkbox" name="remember" checked>
                  <i></i>Keep me logged in</label>
              </div>
            </div>
          </section>
        </fieldset>
        <footer>
          <button type="submit" class="btn btn-default">Log in</button>
        </footer>
      {{Form::close()}}
    </div>
    <div class="using-social-header">Sign In Using Social Profiles</div>
    <div class="social-buttons">
      <ul class="social">
        <li><a href="http://facebook.com/"><i class="entypo-facebook-circled"></i></a></li>
        <li><a href="http://google.com/"><i class="entypo-gplus-circled"></i></a></li>
        <li><a href="http://twitter.com/"><i class="entypo-twitter-circled"></i></a></li>
      </ul>
    </div>
    <div class="copyrights"> ORB Power Admin Dashboard Template <br>
      Created by DazeinCreative &copy; 2014 </div>
  </div>
</div>

<!--Scripts--> 
<!--JQuery--> 
<script type="text/javascript" src="../assets/js/vendors/jquery/jquery.min.js"></script> 
<script type="text/javascript" src="../assets/js/vendors/jquery/jquery-ui.min.js"></script> 

<!--Forms--> 
<script type="text/javascript" src="../assets/js/vendors/forms/jquery.form.min.js"></script> 
<script type="text/javascript" src="../assets/js/vendors/forms/jquery.validate.min.js"></script> 
<script type="text/javascript" src="../assets/js/vendors/forms/jquery.maskedinput.min.js"></script> 
<script type="text/javascript" src="../assets/js/vendors/jquery-steps/jquery.steps.min.js"></script> 

<!--NanoScroller--> 
<script type="text/javascript" src="../assets/js/vendors/nanoscroller/jquery.nanoscroller.min.js"></script> 

<!--Sparkline--> 
<script type="text/javascript" src="../assets/js/vendors/sparkline/jquery.sparkline.min.js"></script> 

<!--Main App--> 
<script type="text/javascript" src="../assets/js/scripts.js"></script>



<!--/Scripts-->

</body>
</html>