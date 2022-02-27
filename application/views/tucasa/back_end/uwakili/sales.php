<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales</title>
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


        .report{
            border-bottom:3px solid gray;
            height:150px;
            padding:10px;
            margin-top:10px;
            background:wheat;
            overflow:auto;
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

    .navbar2{
            width: 100%;
            height: 50px;
            background:wheat;
            text-align:center;
        }


    .navbar2 ul{
	float:right;
    padding:5px;
}


.navbar2 ul li{
	display:inline-block;
}

.navbar2 ul li a{
	text-decoration:none;
	color:black;
	padding:10px;
	border:1px solid gray;
	border-radius:10px;
    background:#ccb6c1;
}


.navbar2 ul li a:hover{
	opacity:0.7;
	background:#ccb6c1;
	color:#000;
}


.navbar2 .active {
    background-color: rgb(53, 20, 20);
    color: white;
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
    </style>

</head>

<body>
 
<?php
include('header.php');
 ?>

<div class="navbar2">

<!-- Navbar2 -->

 <ul>
 <li><a  href="<?php echo base_url() ?>index.php/tucasa/pages/Investment_analysis">Purchases</a></li>
<li><a class="active" href="<?php echo base_url() ?>index.php/tucasa/pages/sales">Sales</a></li>
<li><a href="<?php echo base_url() ?>index.php/tucasa/pages/income">Income/Revinues</a></li>
<li><a  href="<?php echo base_url() ?>index.php/tucasa/pages/expenses">Expenses</a></li>
<li><a  href="<?php echo base_url() ?>index.php/tucasa/pages/profit_loss">Profits & Losses</a></li>

</ul>
<!-- End of navbar2 -->

</div>


<div class="left_pannel" style="float: left; width: 20%;background: #ccb6c1;">

<div class="sub_content">
            <ul class="nav_ul">
            <li><a   href="<?php echo base_url() ?>index.php/tucasa/pages/uwakili">Home</a></li>
             <li><a  href="<?php echo base_url() ?>index.php/tucasa/pages/miradi">Investment</a></li>
             <li><a class="active" href="<?php echo base_url() ?>index.php/tucasa/pages/investment_analysis">Investment analysis</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/workers">Workers</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages_display/uwakili_report">My reports</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages_display/uwakili_anoucement">Anoucements</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages_display/uwakili_goal">Goals</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/change_pass">Change password</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/user_authentication/logout">Logout</a></li> </ul>
             </ul>
         </div>

    </div>


<div class="right_pannel" style="float: right; width: 80%; background:white;">

<h1 style="text-align:center;"><u>Mgahawa</u></h1>

<div class="report">

<table id="t01" width=100%>
    
    <tr>
    <th>Date</th>
    <th>Particulars</th>
    <th>Amount (Tsh)</th>
    <th>Edit</th>
    <th>Delete</th>
    </tr>

       <tr>
       <td>09/10/2020</td>
       <td>Cash sales</td>
       <td>45000/=</td>
       <td><a href="#" class="edit">Edit</a></td>
       <td><a href="#" class="delete">Delete</a></td>
       </tr>
       <tr>
       <td>09/10/2020</td>
       <td>Cash sales</td>
       <td>45000/=</td>
       <td><a href="#" class="edit">Edit</a></td>
       <td><a href="#" class="delete">Delete</a></td>
       </tr>
       
       <tr>
       <td>09/10/2020</td>
       <td>Cash sales</td>
       <td>45000/=</td>
       <td><a href="#" class="edit">Edit</a></td>
       <td><a href="#" class="delete">Delete</a></td>
       </tr>
       
       <tr>
       <td>09/10/2020</td>
       <td>Cash sales</td>
       <td>45000/=</td>
       <td><a href="#" class="edit">Edit</a></td>
       <td><a href="#" class="delete">Delete</a></td>
       </tr>
       
       <tr>
       <td>09/10/2020</td>
       <td>cash sales</td>
       <td>45000/=</td>
       <td><a href="#" class="edit">Edit</a></td>
       <td><a href="#" class="delete">Delete</a></td>
       </tr>
       
       <tr>
       <td>09/10/2020</td>
       <td>Cash sales</td>
       <td>45000/=</td>
       <td><a href="#" class="edit">Edit</a></td>
       <td><a href="#" class="delete">Delete</a></td>
       </tr>
       
</table>

</div>

</div>   
</body>
</html>