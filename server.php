<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'redbytes', 'roquib', 'login-demo');

// REGISTER USER button is clicked
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $student_id = mysqli_real_escape_string($db, $_POST['student_id']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone_no = mysqli_real_escape_string($db, $_POST['phone_no']);
  $batch = mysqli_real_escape_string($db, $_POST['batch']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstname)) {
    array_push($errors, "First name is required");
  }
  if (empty($lastname)) {
    array_push($errors, "Last name is required");
  }
  if (empty($username)) {
    array_push($errors, "username is required");
  }
  if (empty($student_id)) {
    array_push($errors, "Student ID is required");
  }
  if (empty($email)) {
    array_push($errors, "Email is required");
  }
  if (empty($phone_no)) {
    array_push($errors, "Phone number is required");
  }
  if (empty($batch)) {
    array_push($errors, "Batch is required");
  }
  if (empty($password_1)) {
    array_push($errors, "Password is required");
  }
  if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
  }
  //if there is no error and save user to database
  // first check the database to make sure
  // a user does not already exist with the same username and/or email

  // next.....
  // $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  // $result = mysqli_query($db, $user_check_query);
  // $user = mysqli_fetch_assoc($result);
  //
  // if ($user) { // if user exists
  //   if ($user['username'] === $username) {
  //     array_push($errors, "Username already exists");
  //   }
  //
  //   if ($user['email'] === $email) {
  //     array_push($errors, "email already exists");
  //   }
  // }
  // next.....

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = $password_1; //encrypt the password before saving in the database
    $query = "INSERT INTO person (firstname,lastname,username,student_id, email,phone_no,batch,password)
  			  VALUES('$firstname','$lastname','$username','$student_id', '$email', '$phone_no','$batch','$password')";
    mysqli_query($db, $query);
    // step 2
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: subject.php'); //redirect to home page
  }
}

// ...

// LOGIN USER
if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    // $password = md5($password);
    // $password = crypt($password);
    $query = "SELECT * FROM person WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    } else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}
