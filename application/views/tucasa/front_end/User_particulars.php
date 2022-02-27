<html lang="en">
<?php
if (isset($this->session->userdata['logged_in'])) {
$last_name = ($this->session->userdata['logged_in']['last_name']);
$first_name = ($this->session->userdata['logged_in']['first_name']);
$middle_name = ($this->session->userdata['logged_in']['middle_name']);
$phone_number = ($this->session->userdata['logged_in']['phone_number']);
$date_of_birth = ($this->session->userdata['logged_in']['date_of_birth']);
$position = ($this->session->userdata['logged_in']['position']);
$sex = ($this->session->userdata['logged_in']['sex']);
$faculty_id = ($this->session->userdata['logged_in']['faculty_id']);
$level_id = ($this->session->userdata['logged_in']['level_id']);
$program_id = ($this->session->userdata['logged_in']['program_id']);
$kin1_phone_number = ($this->session->userdata['logged_in']['kin1_phone_number']);
$kin2_phone_number = ($this->session->userdata['logged_in']['kin2_phone_number']);
$kin1_full_name = ($this->session->userdata['logged_in']['kin1_full_name']);
$kin2_full_name = ($this->session->userdata['logged_in']['kin2_full_name']);
$kin1_relation = ($this->session->userdata['logged_in']['kin1_relation']);
$kin2_relation = ($this->session->userdata['logged_in']['kin2_relation']);
$place_of_residence = ($this->session->userdata['logged_in']['place_of_residence']);
$marital_status = ($this->session->userdata['logged_in']['marital_status']);
$email = ($this->session->userdata['logged_in']['email']);
$Year_of_study = ($this->session->userdata['logged_in']['Year_of_study']);
//$karama = ($this->session->userdata['logged_in']['karama']);
$baptism = ($this->session->userdata['logged_in']['baptism']);
} else {
header("location: tucasa/front_end/login");
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My particular</title>
    <style>

*{
    padding: 0;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}

       
    body{
        background:wheat;
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



.banner{
    height:40px;
    text-align: center;
    color: rgb(32, 25, 10);
    background:linear-gradient(#f6e4f1,#ee8989,#f8ece6);
}

.banner h4{
    display: inline;
    padding: 5px;
    letter-spacing: 1px;
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

.logout{
    margin-top: 50%;
    border-bottom:1px solid black ;
    background: brown;
}

.logout:hover{
    background: rgb(226, 74, 74);
}

        .report{
            border-bottom:3px solid gray;
            padding:2px;
            margin-top:10px;
            background:wheat;
            
        }

        table#t01{
    padding: 5px;
    width: 100%;
}

table#t01 tr:nth-child(even) {
    background-color: #f1f1f1;
}
table#t01 th {
    color: white;
    background-color: rgb(31, 1, 1);
}

 .right_pannel h3{
    color: rgb(2, 7, 0);
    background: cornflowerblue;
    border-bottom: 2px solid sienna
}

input[type="submit"]{
    background-color: blueviolet;
    color: cornsilk;
    font-size: 18px;
    width: 100px;
    margin-left: 15px;
    height: 40px;
    cursor: pointer;

}


.footer{
    border-top:3px solid wheat;
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


    <div class="banner">
        <h4 style="float: left; margin-top:0px">Today: 9/15/2020</h4>
        <h4><?php echo "Hello <b id='welcome'><i>" . $last_name . "</i> !</b>"; ?></h4>
        <h4 style="float: right; margin-top:0px">Year of study: 2020/2021</h4>
    </div>



<div class="left_pannel" style="float: left; height:500px; width: 20%;">

<div class="sub_content">
           <ul>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/homepage"><i class="fas fa-home"></i>Home</a></li>
            <li><a class="active" href="<?php echo base_url() ?>index.php/tucasa/pages/User_particulars"><i class="fas fa-user"></i>My particular</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/payments"><i class="fas fa-user"></i>My payment</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/Timetable"><i class="fas fa-calendar-week"></i>Timetible</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/Leaders"><i class="fas fa-users"></i>Leaders</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/Events"><i class="fas fa-bullhorn"></i>Trend Events</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/Investment"><i class="fas fa-money-check-alt"></i>Investment</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/Library"><i class="fas fa-book"></i>Library</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/Songs"> <i class="fas fa-music"></i>Songs</a></li>

            <li><a href="<?php echo base_url() ?>index.php/tucasa/user_authentication/logout">Logout</a></li>
           </ul>
        </div>
    </div>


<div class="right_pannel" style="float: right; margin-top:-5px; width: 80%; height:500px; overflow:auto;">

<div class="report">

<h3>PERSONAL DETAILS</h3>
    <img src="Avatar.jpg" alt="My profile" width="100px" height="100px">
    <table id="t01" width=100%>
    
    <tr>
    <th>First name</th>
    <th>Middle name</th>
    <th>Last name</th>
    <th>Email</th>
    <th>Sex</th>
    <th>Phone number</th>
    <th>Date of birth</th>
    <th>Place of Residence</th>
	<th>Marital status</th>
    </tr>

    <?php
    
            echo "<tr>";
            echo "<td>".$first_name."</td>";
            echo "<td>".$middle_name."</td>";
            echo "<td>".$last_name."</td>";
            echo "<td>".$email."</td>";
            echo "<td>".$sex."</td>";
            echo "<td>".$phone_number."</td>";
            echo "<td>".$date_of_birth."</td>";
            echo "<td>".$place_of_residence."</td>";
            echo "<td>".$marital_status."</td>";
              echo "</tr>";
           
    
    ?>
      
    </table>
<br><br>
<br><br>
    <h3>NEXT OF KINS</h3>
    KIN 1:
    <table id="t01">

        <tr>
            <th>NAMES</th>
            <th>PHONE NUMBER</th>
            <th>RELATION</th>

        </tr>
        <?php
    
    echo "<tr>";
    echo "<td>".$kin1_full_name."</td>";
    echo "<td>".$kin1_phone_number."</td>";
    echo "<td>".$kin1_relation."</td>";
      echo "</tr>";
   

?>
    </table>
    <br><br>
    <br>
    KIN 2:
    <table id="t01">

        <tr>
            <th>NAMES</th>
            <th>PHONE NUMBER</th>
            <th>RELATION</th>

        </tr>
        <?php
    
    echo "<tr>";
    echo "<td>".$kin2_full_name."</td>";
    echo "<td>".$kin2_phone_number."</td>";
    echo "<td>".$kin2_relation."</td>";
      echo "</tr>";
   

?>
    </table>

    <br><br>
    <br><br>
    <h3>ACADEMIC DETAILS</h3>
    <table id="t01">

        <tr>
            <th>LEVEL</th>
            <th>FACULTY</th>
            <th>PROGRAM</th>
            <th>YEAR OF STUDY</th>

        </tr>
        <?php
    
    echo "<tr>";
    echo "<td>".$level_id."</td>";
    echo "<td>".$faculty_id."</td>";
    echo "<td>".$program_id."</td>";
    echo "<td>".$Year_of_study."</td>";
      echo "</tr>";
   

?>
    </table>
<br><br>
<br><br>
    <h3>RELIGIOUS DETAILS</h3>
    <table id="t01">

        <tr>
            <th>POSITION</th>
            <th>KARAMA</th>
            <th>BAPTISED</th>
            
            
        </tr>
        <?php
    
    echo "<tr>";
    echo "<td>".$position."</td>";
   // echo "<td>".$karama."</td>";
    echo "<td>".$baptism."</td>";
      echo "</tr>";
   

?>
    </table>
    <br><br>
<br>
<h4><i>Leave your comment here if you have any dought about your details above!</i></h4>
    <form action="#">
        <textarea name="comment" id="" cols="30" rows="10" placeholder="Type here"></textarea>
<br>
        <input type="submit" name="submit" value="Send">
    </form>

</div>

<div class="footer">
    <i class="fab fa-facebook-square"></i>
    <i class="fab fa-instagram-square"></i>
    <i class="fab fa-twitter-square"></i>
    <h2>&#169; 2020</h2>
    </div>


</body>
</html>