<html lang="en">
<?php
if (isset($this->session->userdata['logged_in'])) {
$last_name = ($this->session->userdata['logged_in']['last_name']);
$email = ($this->session->userdata['logged_in']['email']);
} else {
header("location: tucasa/front_end/login");
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member view</title>


    <style>
          *{
    padding: 0;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}

body{
    background-color: wheat;
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

.navbar{
            width: 100%;
            height: 50px;
            background:wheat;
            text-align:center;
        }

ul{
    list-style-type: none;
    margin: 0;
    padding: 0;
}

 li a {
    display: block;
    color: #000;
    padding: 8px 0 8px 16px;
    text-decoration: none;
    border: 1px solid black;
    border-right:none;
    border-top:none;
   
}

 ul li a:hover{
    background-color: #555;
    color: white;
}

.active {
    background-color: rgb(53, 20, 20);
    color: white;
}


        .report{
            border-bottom:3px solid gray;
            height:150px;
            padding:10px;
            margin-top:10px;
            background:wheat;
        }

     input[type="text"],input[type="date"]{
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
    width: 90px;
    border: none;
    border-radius: 5px;
    color: white;
    background: chocolate;
    font-size: 18px;
}

input[type="submit"]:hover{
  opacity:0.7;
}


.left_pannel{
    width: 20%;
    height: 500px;
}

.right_pannel{
    width: 80%;
    overflow: auto;
    height: 500px;
}
.banner{
    height:30px;
    text-align: center;
    color: rgb(32, 25, 10);
    background:linear-gradient(#f6e4f1,#ee8989,#f8ece6);
}

th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color: #f1f1c1;
}
table#t01 th	{
    background-color: black;
    color: white;
}

 a{
    text-decoration:none;
    color:black;
}

.footer{
    border-top:3px solid black;
    height: 50px;
    width: 100%;
    text-align: center;
    background:wheat;
    margin-top:510px;
}
.footer i{
    padding:7px;
    color: rgb(36, 26, 11);
    font-size: 20px;
}

.footer i:hover{
    opacity: 0.7;
}
    </style>



</head>
<body>
    <div class="header">
        <div class="logo1"><img src="logo_4.png" alt="logo1"></div>
        <h1>TUCASA MZUMBE UNIVERSITY</h1>
        <div class="logo2"><img src="logo_3.jpg" alt="logo2"></div>
         <h3>Electronic Data Management System </h3>
    </div>

    <div class="banner">
      <h4><?php echo "Welcome <b id='welcome'><i>" . $last_name . "</i> !</b>"; ?></h4>
           </div>
   
<div class="left_pannel" style="float: left; width: 20%;background: #ccb6c1;">


<div class="sub_content">
    <ul class="nav_ul">
    <li><a  href="<?php echo base_url() ?>index.php/tucasa/pages/home">Home</a></li>
     <li><a href="<?php echo base_url() ?>index.php/tucasa/hello/dispdata">View members</a></li>
     <li><a class="active" href="<?php echo base_url() ?>index.php/tucasa/pages/member_analysis_admin">Member Analysis</a></li>
     <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/register">Add new member</a></li>
     <li><a href="<?php echo base_url() ?>index.php/tucasa/data_management/change_pass">Change password</a></li>
     <li><a href="<?php echo base_url() ?>index.php/tucasa/user_authentication/logout">Logout</a></li>

     </ul>
 </div>
</div>


<div class="right_pannel" style="float: right; width: 80%; background:white; height:500px; overflow:auto;">
    




</div>
    

    <div class="footer">
    <i class="fab fa-facebook-square"></i>
    <i class="fab fa-instagram-square"></i>
    <i class="fab fa-twitter-square"></i>
    <h2>&#169; 2020</h2>
    </div>
