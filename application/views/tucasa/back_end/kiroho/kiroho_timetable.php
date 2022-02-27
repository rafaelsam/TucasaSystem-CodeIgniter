<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timetable</title>
    <style>

body{
            background: #ccb6c1;
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
            height:150px;
            padding:10px;
            margin-top:10px;
            background:wheat;
        }

        select{
        background: #ccb6c1;
        border-radius: 5px;
        height: 44px;
        width: 240px;
        border:1px solid #000;
        font-size: 18px;
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
       
    </style>

</head>

<body>
 
<?php
include('header.php');
 ?>

<div class="navbar">

<form class="fomu" action="action.php" style="padding:5px;">
    <label for="" style="font-size:23px;">Search member by</label>

     <input type="text" placeholder="Level">
     <input type="text" placeholder="Faculty">
     <input type="text" placeholder="Program">
     <input type="text" placeholder="member name" name="search2">
	<input type="submit" value="search">
  </form>

</div>




<div class="left_pannel" style="float: left; width: 20%;background: #ccb6c1;">


        <div class="sub_content">
            <ul class="nav_ul">
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/kiroho"><i class="fas fa-home"></i>Home</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/member_kiroho">View all member</a></li>
             <li><a  class="active" href="<?php echo base_url() ?>index.php/tucasa/pages/kiroho_timetable">Timetable</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/kiroho_report">My reports</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/kiroho_anoucement">Anoucements</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/kiroho_goal">Goals</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/change_pass">Change password</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/user_authentication/logout">Logout</a></li>

             </ul>
         </div>

    </div>


<div class="right_pannel" style="float: right; width: 80%; background:white;">


<div class="report">


</div>

<div class="report">


</div>

<div class="report">


</div>


</div>
   
</body>
</html>