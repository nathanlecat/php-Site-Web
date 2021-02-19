<?php
session_start();
?>

<?php

// initializing variables
$name = "";
$username = "";
$usn = "";
$email    = "";
$errors = array();
$reg_date = date("Y/m/d");

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'onlineshop');


// REGISTER USER
if (isset($_POST['reg_user'])) {
 $first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$user_password=$_POST['password'];
$mobile=$_POST['telephone'];
$address1=$_POST['lieu'];
$address2=$_POST['pays'];

$password = md5($user_password);

mysqli_query($db,"insert into user_info(first_name, last_name,email,password,mobile,address1,address2) values ('$first_name','$last_name','$email','$password','$mobile','$address1','$address2')")
			or die ("Query 1 is inncorrect........");
mysqli_close($db);
    header('location: login.php');
  }





if (isset($_POST['user_username']) && isset($_POST['password'])) {
  $user_username = mysqli_real_escape_string($db, $_POST['user_username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  if (empty($user_username)) {
    array_push($errors, "email is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }
$password = md5($password);
  if (count($errors) == 0) {
    if ($result = $db->query("SELECT * FROM user_info WHERE first_name='$user_username'")) {
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $_SESSION['first_name'] =  $row["first_name"];
          echo '<br>';
          $_SESSION['password'] = $row["password"];
          echo '<br>'."\r\n";
          $_SESSION['uid'] =  $row["user_id"];
          echo '<br>'."\r\n";
          $_SESSION['success'] = "You are now logged in";
          header('location: ../index.php');
        }
      } else {
        header('location: login.php');
      }

     /* if (mysqli_num_rows($result) == 1) {
        $_SESSION['first_name'] = $user_username;
        $_SESSION['password'] = $password;
        $_SESSION['uid'] = $uid;
        $_SESSION['success'] = "You are now logged in";
         header('location: ../index.php');
         }else {
           array_push($errors, "Wrong username/password combination");
         }*/
    }

   /* $password = $password;
    $query = "SELECT * FROM user_info WHERE first_name='$user_username' AND password='$password'";
    var_dump($password);
    var_dump($query);
    $results = mysqli_query($db, $query);
    var_dump($results);
     var_dump(mysqli_query($db, $query));

    if (mysqli_num_rows($results) == 1) {
       $_SESSION['email'] = $email;
      $_SESSION['first_name'] = $user_username;
      $_SESSION['success'] = "You are now logged in";*/
     /* header('location: ../index.php'); */
   /* }else {
      array_push($errors, "Wrong username/password combination");
    }*/
  }

}




?>

