<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muziki goals</title>
    <style>

    
       
    body{
            background: #ccb6c1;
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

textarea{
    border:2px solid gray;
    border-radius:5px;
}
       
select{
        background: #ccb6c1;
        border-radius: 5px;
        height: 44px;
        width: 240px;
        border:1px solid #000;
        font-size: 18px;
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
    </style>

</head>

<body>
 
<?php
include('header.php');
 ?>

<div class="navbar">


</div>


<div class="left_pannel" style="float: left; width: 20%;background: #ccb6c1;">


<div class="sub_content">
            <ul class="nav_ul">
            <li><a  href="<?php echo base_url() ?>index.php/tucasa/pages/muziki"><i class="fas fa-home"></i>Home</a></li>
             <li><a  href="<?php echo base_url() ?>index.php/tucasa/pages/songs">Songs</a></li>
             <li><a  href="<?php echo base_url() ?>index.php/tucasa/pages/singers">View all Singers</a></li>
             <li><a  href="<?php echo base_url() ?>index.php/tucasa/pages/singer_group">Groups/Choir</a></li>
             <li><a  href="<?php echo base_url() ?>index.php/tucasa/pages_display/muziki_report">My reports</a></li>
             <li><a  href="<?php echo base_url() ?>index.php/tucasa/pages_display/muziki_anoucement">Anoucements</a></li>
             <li><a class="active" href="<?php echo base_url() ?>index.php/tucasa/pages_display/muziki_goal">Goals</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/change_pass">Change password</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/user_authentication/logout">Logout</a></li> </ul>

            
             </ul>
         </div>

    </div>


<div class="right_pannel" style="float: right; width: 80%; background:white;">

<table id="t01" width=100%>
  <tr>
    <th>Sr No</th>
    <th>Tittle</th>
    <th>Uploaded Date</th>
	<th>Action1</th>
	<th>Action2</th>
    <th>Action3</th>
  </tr>

  <?php

  $i=1;

  foreach($display as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->name."</td>";
  echo "<td>".$row->date_of_upload."</td>";
  echo "<td><a class='view' href='deletedata?id=".$row->goals_id."'>View</a></td>";
  echo "<td><a class='edit'href='updatedata?id=".$row->goals_id."'>Edit</a></td>";
  echo "<td><a class='delete' href='deletedata?id=".$row->goals_id."'>Delete</a></td>";
    echo "</tr>";
  $i++;
  }
   ?>
</table>


</div>


</div>
   
</body>
</html>