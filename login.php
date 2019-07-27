
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" style="background: url(img/akru1.jpg);
background-attachment: fixed; background-size: cover;">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sign_in.css">

</head>
<body>


  <!-- MENU / NAVBAR START -->

    <!-- MENU / NAVBAR START -->

  <div class="main">
      <nav>
        <img src="img/uu_logo.jpg" alt="" width="100px" height="50px" style="float:left;padding:15px;">
        <ul>

          <li><a href="home.html" title="">HOME</a></li>
          <li><a href="about_us.html" title="">ABOUT US</a></li>
          <li><a href="our_teacher.html" title="">OUR TEACHER</a></li>
          <li><a href="" title="">SUBJECTS</a></li>
          <li><a href="sign_in.html" title="">LOGIN</a></li>
  <!-- 				<li><a href="" title="">Home</a></li>
   -->

   <form class="form-inline search" action="login.php" method="post">
     <div class="Search-M">
       <input class="form-control search-M " type="search" placeholder="Search" aria-label="Search">
</div>

  <div class="btn-S">
    <button class="btn btn-success btn-search " type="submit">Search</button>
  </div>


      </form>
    </ul>
  </nav>
</div>

  <!-- MENU / NAVBAR END -->

  <!-- MENU / NAVBAR END -->



<div class="signin">
  <form class="fc" action="login.php" method="post">
    <!-- display validation errors here......  -->
    <?php include('errors.php'); ?>
    <!-- <h2 Style="color:">Log In</h2> -->
      <img class="login_img"src="img/log.png" height="150px; width:150px;"alt="">
      <br><br><br>
        <input type="text" name="username"placeholder="Username" value=""><br><br><br>
        <input type="password" name="password"placeholder="Password" value=""><br><br>

        <a href=" "><input type="button" name="login" value="LOGIN"></a><br><br>

        <div class="" id="container">
          <a href="#" style="margin-right:0px;font-size:13px;font-family=Tahoma,Geneva,sans-serif;">Reset password
        </a>
          <a href="#" style="margin-right:0px;font-size:13px;font-family=Tahoma,Geneva,sans-serif;">Forget password
      </a>
    </div>
        <br><br>
          Don't have account? <a href="register.php">&nbsp;Sign Up</a>
 </form>
</div>
 <br> <br> <br>

<!-- GRID is START -->

  <div class="grid_container">
    <div class="grid-item">
      <h2>Contact Us</h2>
        <br>
          <p class="">Address : Uttara 6 No Sector</p>
          <p class="">Email : fardoushjahanara@gmail.com</p>
          <p class="">Phone number : +880172945862</p>
        </div>
    <div class="grid-item">
      <a href="feedback.html"><h3 class=" "> CHECK REVIEW</h3></a>
    </div>
    <div class="grid-item">
      <h3 class=""><b>STAY IN TOUCH</b></h3>
<br>

  <p class="my-4 text-center">
       <a  class="fb" href="http://www.facebook.com"><i class="fa fa-facebook" style="font-size:30px;color:white;"></i></a>


       <a  class="sky" href="http://www.skype.com"><i class="fa fa-skype" style="font-size:30px;color:white;"></i></a>
       <a  class="twitter" href="http://www.twitter.com"><i class="fa fa-twitter" style="font-size:30px;color:white;"></i></a>

       <a  class="linkedin" href="http://www.linkedin.com"><i class="fa fa-linkedin" style="font-size:30px;color:white;"></i></a>

       <a  class="gmail" href="http://www.gmail.com"><i class="fa fa-google" style="font-size:30px;color:white;"></i></a>


     </p>
    </div>

  </div>

  <!-- <br><br><br><br> -->
  <!-- GRID IS END -->
 <!-- Footer is start  -->
      <div class="main-footer ">
        <div class="footer-copyright  footer">© 2019 Copyright

      </div>
      <!-- FOOTER IS END -->









  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
