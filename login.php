<!DOCTYPE html>
<html lang="en-US">
  <!-- figma design: https://www.figma.com/file/jkkuHgZswnclyeA3bsU88T/Real-Estate-Final?node-id=1%3A2 -->
  <head>
    <title>Realestate</title>
    <?php include 'includes/header-includes.php'; ?>
  </head>
  <body class="member-area-body">
    <!-- add header -->
      <?php include 'login-header.php'; ?>

      <div class="member-area">
        <div class="shaded-box" data-aos="fade-up">
          <div class="inner">
            <h1>Login to Kamal</h1>
            <div class="description" >
              Login to the No.1 Real Estate Portal of this region and get Properties at Best Prices.
            </div>
  
            <div class="btns">
              <a href="#" class="btn btn-primary btn-lg with-left-icon mb-3">
                <span><img src="assets/images/icon_facebook.svg" alt="fb"/></span> 
                Continue with Facebook
              </a>
  
              <a href="#" class="btn btn-lg with-left-icon">
                <span><img src="assets/images/google.svg" alt="fb"/></span> 
                Continue with Google
              </a>
            </div>

            <form>
              <h2>Login via Email</h2>
              <div class="form-group">
                <input type="text"class="form-control" placeholder="Enter your email" />
              </div>

              <div class="form-group">
                <input type="password"class="form-control" placeholder="Enter your password" />
              </div>

              <div class="forgot-password-text text-left">
                <a href="#">Forgot Password?</a>
              </div>

              <div class="form-group">
                <button class="btn btn-warning btn-lg search-btn cta" type="submit">Login</button>
              </div>
            </form>

            <p class="text-left">Don’t have an account? 
              <a href="/realestate-html/register.php">Register Now</a>
            </p>
          </div>
        </div>

      </div>

    <!-- login page content -->
    
      
    <!-- add footer -->
    <?php include 'footer.php'; ?>
  </body>
</html>