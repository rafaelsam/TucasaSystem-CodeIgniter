<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Songs</title>


    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="file:///C:/Users/Michael%20Js/Desktop/Tucasa%20Web/fontawesome-free-5.14.0-web/fontawesome-free-5.14.0-web/css/all.css">
   

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

.report{
            border-bottom:3px solid gray;
            padding:2px;
            margin-top:10px;
            background:wheat;
            height:30px;
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
    background-color:lightgreen;
    padding:5px;
    border-radius:5px;
}

.delete{
    background-color:lightblue;
    padding:5px;
    border-radius:5px;
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

<?php
include('header.php');
 ?>

    <div class="navbar">
<form class="fomu" action="action.php" style="padding:5px;">
    <label for="" style="font-size:23px;">Search Song by</label>

     <input type="text" placeholder="album name">
     <input type="text" placeholder="song name" name="search2">
	<input type="submit" value="search">
  </form>


</div>

    <div class="main">

        <div class="left_pannel" style="float: left;">


            <div class="sub_content">
            <ul>
            <li><a  href="<?php echo base_url() ?>index.php/tucasa/pages/homepage"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/User_particulars"><i class="fas fa-user"></i>My particular</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/payments"><i class="fas fa-user"></i>My payment</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/Timetable"><i class="fas fa-calendar-week"></i>Timetible</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/Leaders"><i class="fas fa-users"></i>Leaders</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/Events"><i class="fas fa-bullhorn"></i>Trend Events</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/Investment"><i class="fas fa-money-check-alt"></i>Investment</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/Library"><i class="fas fa-book"></i>Library</a></li>
            <li><a class="active" href="<?php echo base_url() ?>index.php/tucasa/pages/Songs"> <i class="fas fa-music"></i>Songs</a></li>

            <li><a class="Logout" href="logout"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
           </ul>
                
             </div>

        </div>



        <div class="right_pannel" style="float: right;">

        <table id="t01" width=100%>
    
    <tr>
    <th>No.</th>
    <th>Song name</th>
    <th>Album name</th>
    <th>Singer</th>
    <th>Action1</th>
	<th>Action2</th>
   
    </tr>

    <?php

$i=1;

foreach($nyimbo as $row)
{
echo "<tr>";
echo "<td>".$i."</td>";
echo "<td>".$row->song_name."</td>";
echo "<td>".$row->album_name."</td>";
echo "<td>".$row->song_name."</td>";
echo "<td><a class='edit'href='updatedata?id=".$row->song_id."'>Play</a></td>";
echo "<td><a class='delete' href='deletedata?id=".$row->song_id."'>Download</a></td>";
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