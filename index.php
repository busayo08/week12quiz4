<!DOCTYPE html>
<html>
<head>
    <?php include 'process.php';
    session_start();
    ?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIGN UP PAGE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
   
</head>
<body>
    <?php
         
        $message = ''; 
        if(isset($_POST['submit'])){
            // username and password sent from form 
            
            $myusername = mysqli_real_escape_string($link,$_POST['email']);
            $mypassword = mysqli_real_escape_string($link,$_POST['pass']);    
     

            $sql1 = "Select * from user where `email` = '$myusername' and `pass` = '$mypassword'";
            $query = mysqli_query($link, $sql1) or die(mysql_error());
            $result = mysqli_fetch_array($query);
            $count = mysqli_num_rows($query);
            if ($count ==1 ) {
                $_SESSION['login_user'] = $myusername;
                
                header("location: success.html");
            } else {
                $message = "<p>Invalid login credentials</p>";
               
            }}
    ?>
<section id="bg">
    <div class="form-bg">
        <br>
        <form class="form" name="regForm" action=""  method="POST">
            <fieldset>           
                <legend><b>LOGIN:</b></legend>
               <?php echo $message; ?><br>
                   
                <label for="email">Email:</label>           <br> 
                <input type="text" name="email" id="email">           <br>    
                <label for="password">Password:</label>         <br>   
                <input type="password" name="pass" id="password">           <br>    
                <input type="submit" name="submit" value="Login" >     
            </fieldset> 
     </form>  
    </div> <!-- /form -->
</section>
  
</body>
</html>