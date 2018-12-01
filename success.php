<!DOCTYPE html>
<html>
<head>
    <?php
        include('session.php');
    ?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    
</head>
<style>
    #content{
        margin-left:250px;
    }
    .bio_title{
        background: blue;
        text-align: center;
        color: white;
        display: inline-block;
        width: 300px;
    }
    .bio_content{
        display: inline-block;
        border: 2px solid blue;
        width: 400px;
    }
</style>
<body>
    <section id="bg">
    <div class="header">
        <h1>Welcome! <?php echo $login_session; ?></h1>
    </div>
    </section>
    <section id="content">
        <div class="bio_title">First Name:</div>
        <div Class="bio_content"><?php echo $first_name;?></div>
        <br>
        <div class="bio_title">Last Name:</div>
        <div Class="bio_content"><?php echo $last_name;?></div>
        <br>
        
        <p style="background:blue;color:white;text-align:center; width:200px;"><a onclick="javascript:ShowHide('HiddenDiv')">Read More</a></p>
        
        <div class="mid" id="HiddenDiv" style="display: none;">
        <div class="bio_title">Email Address:</div>
        <div Class="bio_content"><?php echo $email;?></div>
        <br>
        <div class="bio_title">Phone Number:</div>
        <div Class="bio_content"><?php echo $phone;?></div>
        <br>
        <div class="bio_title">Gender:</div>
        <div Class="bio_content"><?php echo $gender;?></div>
        <br>
        <div class="bio_title">Country:</div>
        <div Class="bio_content"><?php echo $country;?></div>
        </div>
        <a style="background:blue;color:white;text-align:center; width:400px;" href="logout.php">Logout</a>
    </section>
</body>
<script>
function ShowHide(divId)
{
    if(document.getElementById(divId).style.display == 'none')
    {
        document.getElementById(divId).style.display='block';
    }
    else
    {
        document.getElementById(divId).style.display = 'none';
    }
}
</script>
</html>