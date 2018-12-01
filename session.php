<?php
   include('process.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($link,"select * from user where email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['firstname'];
   $first_name = $row['firstname'];
   $last_name = $row['lastname'];
   $email = $row['email'];
   $phone = $row['phone'];
   $gender = $row['gender'];
   $country = $row['country'];
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
   }
?>