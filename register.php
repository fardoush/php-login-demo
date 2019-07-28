<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" style="background: url(img/on6.jpg);
background-attachment: fixed; background-size: cover;
">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/sign_up.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>


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

        <form class="form-inline search">
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



  <br> <br>
  <br> <br>


  <!-- REGISTATION -->
  <div class="signup">
    <form class="" action="server.php" method="post">
      <!-- display validation errors here......  -->
      <?php include('errors.php'); ?>
      <h2 style="color:#fff">Sign Up</h2>
      <br>
      <br>
      <input type="text" name="firstname" placeholder="First Name" value="" required-1> <br><br>
      <input type="text" name="lastname" placeholder="Last Name" value="" required:1> <br><br>
      <input type="text" name="username" placeholder="Username" value="" required:1> <br><br>
      <input type="text" name="student_id" placeholder="Student ID" value="" required:1> <br><br>
      <input type="text" name="email" placeholder="Email " value="" required:1> <br><br>

      <input type="text" name="phone_no" placeholder="Phone NO" value="" required:1> <br><br>
      <input type="text" name="batch" placeholder="Batch No" value=""> <br><br>
      <input type="password" name="password_1" placeholder="Password " value=""> <br><br>
      <input type="password" name="password_2" placeholder="Conform Password" value=""> <br><br>
      <button type="submit" name="submit" style="background-color : #F23593; color:white; font-size:30px;padding :5px; border:none;border-radius: 8px;">Sign</button>

      <!-- <input type="button" name="submit" value="Sign "> <br><br> -->
      <div class="" id="msg">Already have a account? <a href="login.php">Sign In</a>
      </div>

  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <!-- END REGISTATION -->

  <!-- GRID IS START -->
  <div class="grid_container">
    <div class="grid-item">
      <h2>Contact Us</h2>
      <br>
      <p class="">Address : Uttara 6 No Sector</p>
      <p class="">Email : fardoushjahanara@gmail.com</p>
      <p class="">Phone number : +880172945862</p>
    </div>

    <div class="grid-item">
      <a href="feedback.html">
        <h3 class=" "> CHECK REVIEW</h3>
      </a>
    </div>
    <div class="grid-item">
      <h3 class=""><b>STAY IN TOUCH</b></h3>
      <p class="my-4 text-center">

        <a class="fb" href="http://www.facebook.com"><i class="fa fa-facebook" style="font-size:30px;color:white;"></i></a>
        <a class="sky" href="http://www.skype.com"><i class="fa fa-skype" style="font-size:30px;color:white;"></i></a>
        <a class="twitter" href="http://www.twitter.com"><i class="fa fa-twitter" style="font-size:30px;color:white;"></i></a>

        <a class="linkedin" href="http://www.linkedin.com"><i class="fa fa-linkedin" style="font-size:30px;color:white;"></i></a>

        <a class="gmail" href="http://www.gmail.com"><i class="fa fa-google" style="font-size:30px;color:white;"></i></a>
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



</body>

<