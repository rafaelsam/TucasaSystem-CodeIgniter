<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
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



<div class="left_pannel" style="float: left; width: 20%;background: #ccb6c1;height:500px;">


<div class="sub_content">
    <ul class="nav_ul">
     <li><a  href="<?php echo base_url() ?>index.php/tucasa/pages/chair"><i class="fas fa-home"></i>Home</a></li>
     <li><a class="active" href="<?php echo base_url() ?>index.php/tucasa/pages/member">View all members</a></li>
     <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/member_analysis">Member analysis</a></li>
     <li><a href="<?php echo base_url() ?>index.php/tucasa/pages_display/report">My reports</a></li>
     <li><a href="<?php echo base_url() ?>index.php/tucasa/pages_display/anoucement">Anoucements</a></li>
     <li><a href="<?php echo base_url() ?>index.php/tucasa/pages_display/goal">Goals</a></li>
     <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/change_pass">Change password</a></li>
     <li><a href="<?php echo base_url() ?>index.php/tucasa/user_authentication/logout">Logout</a></li>

    
     </ul>
 </div>

</div>



<div class="right_pannel" style="float: right; width: 80%; background:white; height:500px;">
    

    <div class="report" style="overfolw:auto;">
    <table id="t01" width=100%>
    
    <tr>
    <th>First name</th>
    <th>Middle name</th>
    <th>Last name</th>
    <th>Email</th>
    <th>Phone number</th>
    <th>Action1</th>
	<th>Action2</th>
    <th>Action3</th>
    </tr>

    <?php
    
    if($fetch_data->num_rows() > 0){
        $i=1;
        foreach($fetch_data->result() as $row){

            echo "<tr>";
            echo "<td>".$i."</td>";
            echo "<td>".$row->first_name."</td>";
            echo "<td>".$row->middle_name."</td>";
            echo "<td>".$row->last_name."</td>";
            echo "<td>".$row->phone_number."</td>";
            echo "<td><a class='view' href='viewdata?id=".$row->member_id."'>View</a></td>";
            echo "<td><a class='edit' href='updatedata?id=".$row->member_id."'>Edit</a></td>";
            echo "<td><a class='delete' href='deletedata?id=".$row->member_id."' onClick='return confirm('Are you sure ?')' >Delete</a></td>";
              echo "</tr>";
            $i++;

        }

    }else{

        ?>

        <tr>
            <td>No data found </td>
        </tr>
        <?php
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