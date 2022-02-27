<!DOCTYPE html>
<html>
<head>
    <title>login form</title>

<meta charset="UTF-8">

<style>
    
*{
    padding: 0;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}

body{
background-color:wheat;
}

.header{
    text-align: center;
    height: 100px;
    width: 100%;
    background: chocolate;
}
.header h1{
    padding: 3px;
}

.logo1{
    height: 100px;
    width: 150px;
    float: left;
}

.logo2{
    height: 100px;
    width: 150px;
    float: right;
    
}

.logo1 img{
    height: 100px;
    width: 100px;
    margin-left: 25px;
}

.logo2 img{
    height: 100px;
    width: 100px;
    margin-right: 25px;
    margin-top: -65px;
    
}

.content{
    margin-top: 10px;
    padding: 5px;
    border: 2px solid gray;
    border-radius: 5px;
    margin: 100px auto;
    width: 300px;
    text-align: center;
}

.content i {
  outline: none;
  position: absolute;
  margin-top:8px;
  padding: 10px;
  margin-left: 13%;

}


.content input[type="text"],input[type="password"]{
    height: 40px;
    width: 200px;
    font-size: 18px;
    border: 1px solid black;
    border-radius: 5px;
    padding: 5px;
    background: #ccb6c1;
}

input[type="submit"]{
    height: 40px;
    width: 200px;
    border: none;
    border-radius: 5px;
    color: white;
    background: chocolate;
    font-size: 18px;
}


input[type="submit"]:hover{
    opacity: 0.7;
}


a{
    color: white;
    text-decoration: none;
    
}


a:hover{
    opacity: 0.7;
}


.footer{
    text-align: center;
    font-size: 15px;
    margin-top: -10;
    border-top:3px solid gray;
}
.footer h3{
    padding: 5px;
}

.footer i{
    padding:10px;
    color: rgb(250, 236, 215);
    font-size: 30px;
}

.footer i:hover{
    opacity: 0.7;
}


.error_msg{
    color:red;
    font-size: 16px;
    }
    
    .message{
    position: absolute;
    font-weight: bold;
    font-size: 28px;
    color: #6495ED;
    left: 262px;
    width: 500px;
    text-align: center;
    }

/*media query for responsiveness */

@media screen and (max-width:800px){
    .header h1{
        font-size:20px;
        text-align:center;
    }
   .header h3{
       font-size: 15px;
   }

   .content i {
       margin-left: 33%;
   }
   
}

@media screen and (max-width:600px){
    .header h1{
        font-size:17px;
        text-align:center;
    }
   .header h3{
       font-size: 14px;
   }

   .content i {
       margin-left: 33%;
   }
   
}

</style>
</head>

<body>
<div class="header">
        <div class="logo1"><img src="<?php echo site_url('tucasa/front_end/picha/logo_3.jpg')?>" alt="logo1"></div>
        <h1>TUCASA MZUMBE UNIVERSITY</h1>
        <div class="logo2"><img src="logo_3.jpg" alt="logo2"></div>
         <h3>Electronic Data Management System </h3>
    </div>
    
    <?php
if (isset($logout_message)) {
echo "<div class='message'>";
echo $logout_message;
echo "</div>";
}
?>
<?php
if (isset($message_display)) {
echo "<div class='message'>";
echo $message_display;
echo "</div>";
}
?>
    <div class="content">
         <h2>Login here</h2><br>

         <?php
echo "<div class='error_msg'>";
if (isset($error_message)) {
echo $error_message;
}
//echo validation_errors();
echo "</div>";
?>

        <form method="post" action="<?php echo site_url("tucasa/user_authentication/user_login_process");?>">
            <?php echo form_error('email', '<div class="error_msg">', '</div>')?>
            <i class="fas fa-user"></i>
            <input type="text" placeholder="email" name="email"><br><br>
           
            <?php echo form_error('password', '<div class="error_msg">', '</div>')?>
            <i class="fas fa-key"></i>
            <input type="password" placeholder="Password" name="password"><br><br>
            <input type="submit" value="Sign in" name="submit">
        </form>

        <br>
        <a href="#">Forget password?</a><br><br>
        <a href="<?php echo base_url() ?>index.php/tucasa/user_authentication/user_registration_page">Sign up here</a>
    </div>

    <div class="footer">
            <i class="fab fa-facebook-square fa-lg"></i>
            <i class="fab fa-instagram-square fa-lg"></i>
            <i class="fab fa-twitter-square fa-lg"></i>
        <h3>&#169; 2020</h3>
    </div>
</body>
</html>