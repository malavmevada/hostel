<!DOCTYPE html>
<html lang="zxx">
  
<!-- Mirrored from gitapp.top/demo/authfy/demo/login-07.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Jan 2020 09:57:30 GMT -->
<head>
  <!-- Basic Page Needs
  ================================================== -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- For Search Engine Meta Data  -->
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="yoursite.com" />
	
  <title>Authfy : Login-07</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="images-login/icon" href="images-login/favicon-16x16.html"/>
   
  <!-- Main structure css file -->
  <link  rel="stylesheet" href="css-login/login7-style.css">
  
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if IE]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
 <style>

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
 </style>
  </head>
  
  <body>

    <!-- Start Preloader -->
    <div id="preload-block">
      <div class="square-block"></div>
    </div>
    <!-- Preloader End -->
    
    <div class="container-fluid">
      <div class="row">
        <div class="authfy-container col-xs-12 col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
          <div class="col-sm-5 authfy-panel-left">
            <div class="brand-col">
              <div class="headline">
                <!-- brand-logo start -->
                <div class="brand-logo">
                  <img src="images-login/logo-sticky.png" width="150" class="center" alt="logo-sticky.png">
                </div><!-- ./brand-logo -->
                <h2 style="color:#039287" align="center">HOSTEL </h2>
                <h2 style="color:#039287"> MANAGEMENT</h2 >
                <!-- social login buttons start -->
                <div class="row social-buttons">
                  <!-- <div class="col-xs-4 col-sm-4 col-md-12">
                    <a href="#" class="btn btn-block btn-facebook">
                      <i class="fa fa-facebook"></i> <span class="hidden-xs hidden-sm">Signin with facebook</span>
                    </a>
                  </div> -->
                 <!--  <div class="col-xs-4 col-sm-4 col-md-12">
                    <a href="#" class="btn btn-block btn-twitter">
                      <i class="fa fa-twitter"></i> <span class="hidden-xs hidden-sm">Signin with twitter</span>
                    </a>
                  </div> -->
                  <!-- <div class="col-xs-4 col-sm-4 col-md-12">
                    <a href="#" class="btn btn-block btn-google">
                      <i class="fa fa-google-plus"></i> <span class="hidden-xs hidden-sm">Signin with google</span>
                    </a>
                  </div> -->
                </div><!-- ./social-buttons -->
              </div>
            </div>
          </div>
          <div class="col-sm-7 authfy-panel-right">
            <!-- authfy-login start -->
            <div class="authfy-login">
              <!-- panel-login start -->
              <div class="authfy-panel panel-login text-center active">
                <div class="authfy-heading">
                  <h3 class="auth-title">Login to your account</h3>
                  <p>Don’t have an account? <a class="lnk-toggler" data-panel=".panel-signup" href="#">Sign Up</a></p>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <form name="loginForm" class="loginForm" action="validation1.php" method="POST">

                      <div>
                       <!--  <select type="text" name="t" id="type">
                          <option value="admin">Admin</option>
                          <option value="user">User</option>
                          
                          
                        </select> -->
                        Admin:<input type="radio" name="t" value="admin" checked>
                        user:<input type="radio" name="t" value="user">
                      </div>
                      <div class="form-group wrap-input">
                        <input type="email" class="form-control email" name="email_id" placeholder="Email id" required="required">
                        <span class="focus-input"></span>
                      </div>
                      <div class="form-group wrap-input">
                        <div class="pwdMask">
                          <input type="password" class="form-control password" name="password" placeholder="Password" required="required">
                          <span class="focus-input"></span>
                          <span class="fa fa-eye-slash pwd-toggle"></span>
                        </div>
                      </div>
                      <!-- start remember-row -->
                      <div class="row remember-row">
                        <div class="col-xs-6 col-sm-6">
                          <label class="checkbox text-left">
                            <input type="checkbox" value="remember-me">
                            <span class="label-text">Remember me</span>
                          </label>
                        </div>
                        <div class="col-xs-6 col-sm-6">
                          <p class="forgotPwd">
                            <a class="lnk-toggler" data-panel=".panel-forgot" href="#">Forgot password?</a>
                          </p>
                        </div>
                      </div> <!-- ./remember-row -->
                      <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Login </button>
                        <input type="hidden" name="sub" value="submit">
                      </div>
                      </form>

                  </div>
                </div>
              </div> <!-- ./panel-login -->
              <!-- panel-signup start -->
              <div class="authfy-panel panel-signup text-center">
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="authfy-heading">
                      <h3 class="auth-title">Sign up </h3>
                    </div>
                    <form name="signupForm" class="signupForm" action="registration.php" method="POST">
                      <div class="form-group wrap-input">
                        <input type="email" class="form-control" name="email_id" placeholder="Email address" required="required">
                        <span class="focus-input"></span>
                      </div>
                      <div class="form-group wrap-input">
                        <input type="text" class="form-control" name="fullname" placeholder="Full name" required="required">
                        <span class="focus-input"></span>
                      </div>
                      <div class="form-group wrap-input">
                        <input type="number" class="form-control" name="phonenumber" placeholder="Phone-number" required="required">
                        <span class="focus-input"></span>
                      </div>
                      <div class="form-group wrap-input">
                        <div class="pwdMask">
                          <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                          <span class="focus-input"></span>
                          <span class="fa fa-eye-slash pwd-toggle"></span>
                        </div>
                      </div>
                      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
                      <!-- <div class="form-group">
                        <p class="term-policy text-muted small">I agree to the <a href="#">privacy policy</a> and <a href="#">terms of service</a>.</p>
                      </div> -->
<!--                       <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
                      </div> -->
                    </form>
                    <a class="lnk-toggler" data-panel=".panel-login" href="#">Already have an account?</a>
                  </div>
                </div>
              </div> <!-- ./panel-signup -->
              <!-- panel-forget start -->
              <div class="authfy-panel panel-forgot">
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="authfy-heading">
                      <h3 class="auth-title">Recover your password</h3>
                      <p>Fill in your e-mail address below and we will send you an email with further instructions.</p>
                    </div>
                    <form name="forgetForm" class="forgetForm" action="forget.php" method="POST">
                      <div class="form-group wrap-input">
                        <input type="email" class="form-control" name="email_id" placeholder="Email address" required="required">
                        <span class="focus-input"></span>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block" type="submit" >Recover your password</button>
                      </div>
                      <div class="form-group">
                        <a class="lnk-toggler" data-panel=".panel-login" href="#">Already have an account?</a>
                      </div>
                      <div class="form-group">
                        <a class="lnk-toggler" data-panel=".panel-signup" href="#">Don’t have an account?</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div> <!-- ./panel-forgot -->
            </div> <!-- ./authfy-login -->
          </div>
        </div>
      </div> <!-- ./row -->
    </div> <!-- ./container -->
    
    <!-- Javascript Files -->

    <!-- initialize jQuery Library -->
    <script src="js-login/jquery-2.2.4.min.js"></script>
  
    <!-- for Bootstrap js -->
    <script src="js-login/bootstrap.min.js"></script>
  
    <!-- Custom js-->
    <script src="js-login/custom.js"></script>

    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e458394a89cda5a1885d3ce/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  
  </body>	

<!-- Mirrored from gitapp.top/demo/authfy/demo/login-07.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Jan 2020 09:57:35 GMT -->
</html>


