<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
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

        .navbar{
            width: 100%;
            height: 50px;
            background:wheat;
            text-align:center;
        }

        .report{
            border-bottom:3px solid gray;
            height:auto;
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

textarea{
    border:2px solid gray;
    border-radius:5px;
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

.edit{
    background-color:green;
    padding:5px;
    border-radius:5px;
}

.delete{
    background-color:chocolate;
    padding:5px;
    border-radius:5px;
}

.view{

background-color:lightgreen;
padding:5px;
border-radius:5px;
}

.footer{
    border-top:3px solid gray;
    height: 50px;
    width: 100%;
    text-align: center;
    background:wheat;
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

<div class="navbar">

<form style="padding:5px;" method="post" action="<?php echo site_url("tucasa/hello/searchdata")?>">

     <input type="text" name="name" placeholder="member name">
	<input type="submit"  value="search">
  </form>

</div>

<div class="left_pannel" style="float: left; width: 20%;background: #ccb6c1;height:500px;">

<div class="sub_content">
    <ul class="nav_ul">
    <li><a  href="<?php echo base_url() ?>index.php/tucasa/pages/home">Home</a></li>
     <li><a class="active" href="<?php echo base_url() ?>index.php/tucasa/hello/dispdata">View members</a></li>
     <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/member_analysis_admin">Member Analysis</a></li>
     <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/register">Add new member</a></li>
     <li><a href="<?php echo base_url() ?>index.php/tucasa/data_management/change_pass">Change password</a></li>
     <li><a href="<?php echo base_url() ?>index.php/tucasa/user_authentication/logout">Logout</a></li>

     </ul>
 </div>

</div>

<div class="right_pannel" style="float: right; width: 80%; background:white; height:500px; overflow:auto;">
    
<div class="report" style="overfolw:auto; height:500px;">

<table id="t01" width=100%>
  <tr>
    <th>Sr No</th>
    <th>First name</th>
    <th>middle name</th>
    <th>last name</th>
    <th>phone number</th>
	<th>Action1</th>
	<th>Action2</th>
    <th>Action3</th>
  </tr>

  <?php

  $i=1;

  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->first_name."</td>";
  echo "<td>".$row->middle_name."</td>";
  echo "<td>".$row->last_name."</td>";
  echo "<td>".$row->phone_number."</td>";
  echo "<td><a class='view' href='viewdata?id=".$row->member_id."'>View</a></td>";
  echo "<td><a class='edit'href='updatedata?id=".$row->member_id."'>Edit</a></td>";
  echo "<td><a class='delete' href='deletedata?id=".$row->member_id."'>Delete</a></td>";
    echo "</tr>";
  $i++;
  }
   ?>
</table>

</div>
</div>


<div class="footer">
    <i class="fab fa-facebook-square"></i>
    <i class="fab fa-instagram-square"></i>
    <i class="fab fa-twitter-square"></i>
    <h2>&#169; 2020</h2>
    </div>
</body>
</html>