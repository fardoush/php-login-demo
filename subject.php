


<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>


<!DOCTYPE html>
<html lang="en" style="background: url(img/tech.jpg);
background-attachment: fixed; background-size: cover;
">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SUBJECTS</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/subject.css">
  <link rel="stylesheet" href="img/back.jpg">
</head>
<body>
  <!-- MENU / NAVBAR START -->

  <div class="main">
  		<nav>
  			<img src="img/uu_logo.jpg" alt="" width="100px" height="50px" style="float:left;padding:15px;">
  			<ul>

  				<li><a href="" title="">HOME</a></li>
  				<li><a href="about_us.html" title="">ABOUT US</a></li>
  				<li><a href="our_teacher.html" title="">OUR TEACHER</a></li>
  				<li><a href="" title="">SUBJECTS</a></li>
  				<li><a href="sign_in.html" title="">LOGIN</a></li>
  <!-- 				<li><a href="" title="">Home</a></li>
   -->

   <form class="form-inline ">
        <input class="form-control " type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success " type="submit">Search</button>
      </form>

  			</ul>


  		</nav>

  	</div>

  <!-- MENU / NAVBAR END -->
<!-- START -->
<!-- <div class="selector">

  <h2> Subject Selector</h2>
</div> -->
<div class="sub_php">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p> <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="subject.php?logout='1'" style="color: black; float:right;font-size:20px; padding:20px; "><b>Logout<b></a> </p> <br><br>
        <div class="selector">

          <h2> Subject Selector</h2>
        </div>
    <?php endif ?>
</div>

<div class="container">
  <!-- <div class="SELECT">
    <h1>  SUBJECT SELECTOR</h1>
    <br>
  </div> -->

  <!-- 1 -->
<div class="box">
  <div class="imgBox">
  <a href="https://www.facebook.com"> <img src="img/cp.jpg" alt="""></a>
  </div>

</div>
<!-- 2 -->
<div class="box">

<div class="imgBox">
    <a href="https://www.facebook.com"> <img src="img/c++.png" alt="" ></a>
</div>
</div>
<!-- 3 -->
<div class="box">

  <div class="imgBox">
    <a href="https://www.facebook.com"> <img src="img/java.jpg" alt="" style="width:250px; height:200px; float:left;"></a>

  </div>
</div>
<!-- 4 -->
<div class="box">
  <div class="imgBox">
    <a href="https://www.facebook.com"> <img src="img/os.jpg" alt="" style="width:250px; height:200px; float:left;"></a>

  </div>
</div>
<!-- 5 -->
<div class="box">
  <div class="imgBox">
    <a href="js.html"> <img src="img/js.png" alt="" style="width:250px; height:200px; float:left;"></a>

  </div>
</div>
<!-- 6 -->
<div class="box">
  <div class="imgBox">
    <a href="https://www.facebook.com"> <img src="img/php.gif" alt="" style="width:250px; height:200px; float:left;"></a>

  </div>
</div>
<!-- 7 -->
<div class="box">
  <div class="imgBox">
    <a href="https://www.facebook.com"> <img src="img/a3.jpg" alt="" style="width:250px; height:200px; float:left;"></a>
</div>
</div>
<!-- 8 -->
<div class="box">
  <div class="imgBox">
    <a href="https://www.facebook.com"> <img src="img/a3.jpg" alt="" style="width:250px; height:200px; float:left;"></a>
</div>
</div>
</div>

<BR> <BR>

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
   <a href="feedback.html"><h3 class=" "> CHECK REVIEW</h3></a>
    </div>
    <div class="grid-item">
      <h3 class=""><b>STAY IN TOUCH</b></h3>
<BR>

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


</body>
</html>
