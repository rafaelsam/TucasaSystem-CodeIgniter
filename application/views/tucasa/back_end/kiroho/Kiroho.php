<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiroho</title>
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

      .error_msg{
    color:red;
    font-size: 16px;
    }
    
    .message{
    font-weight: bold;
    font-size: 28px;
    color: #6495ED;
    left: 262px;
    width: 500px;
    text-align: center;
    }   
    </style>

</head>

<body>
 
<?php
include('header.php');
 ?>

<div class="navbar">

<form class="fomu" action="action.php" style="padding:5px;">
   

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
            <li><a class="active" href="<?php echo base_url() ?>index.php/tucasa/pages/kiroho"><i class="fas fa-home"></i>Home</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages_display/member_kiroho">View all member</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages_display/kiroho_report">My reports</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages_display/kiroho_anoucement">Anoucements</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages_display/kiroho_goal">Goals</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/change_pass">Change password</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/user_authentication/logout">Logout</a></li>
            
             </ul>
         </div>

    </div>


<div class="right_pannel" style="float: right; width: 80%; background:white;">


<div class="report" style="height:auto;">

<h1 style="text-align:center;"><u>Create Timetable</u></h1>

 <form action="#" style="padding:10px">

Month:
 <select name="event" id="event">
 
<option value="event">January</option>
<option value="event">February</option>
<option value="event">March</option>
<option value="event">April</option>
<option value="event">May</option>
<option value="event">June</option>
<option value="event">July</option>
<option value="event">August</option>
<option value="event">September</option>
<option value="event">October</option>
<option value="event">November</option>
<option value="event">December</option>
<option value="event">----</option>
</select>



Week:
 <select name="event" id="event">
<option value="event">Sunday</option>
<option value="event">Monday</option>
<option value="event">Tuesday</option>
<option value="event">Wenesday</option>
<option value="event">Thursday</option>
<option value="event">Friday</option>
<option value="event">Saturday</option>
<option value="event">----</option>
</select>

Event:
<select name="event" id="event">
<option value="event">Gethsemane</option>
<option value="event">Nakutunuku</option>
<option value="event">Sabbath Night</option>
<option value="event">Sabbath day</option>
<option value="event">Effort</option>
<option value="event">Federation</option>
<option value="event">Kikao</option>
<option value="event">----</option>
</select>
<br><br>
<br>
Location:<input type="text" placeholder="where ?">
 Date:<input type="date">
 <input type="submit" value="Upload">

 </form>

</div>
    
<div class="report" style="height:auto;">
    <h1 style="text-align:center;"><u>Add new report</u></h1>
    <?php
if (isset($uwakili_message)) {
echo "<div class='message'>";
echo $uwakili_message;
echo "</div>";
}
?>

  <?php
echo "<div class='error_msg'>";
if (isset($error_uwakili)) {
echo $error_uwakili;
}
// echo validation_errors();
echo "</div>";
?>
   <form method="post" action="<?php echo site_url("tucasa/pages/Kiroho_report")?>" style="padding:10px; margin-top:30px;">

<?php echo form_error('report_title', '<div class="error_msg">', '</div>')?>
<input type="text" name="report_title" placeholder ="Tittle">

<?php //echo form_error('report_file', '<div class="error_msg">', '</div>')?>
Choose file:<input name="report_file" type="file">

<?php echo form_error('date_report', '<div class="error_msg">', '</div>')?>
<input type="text" name="date_report" placeholder="Today date:yyyy-mm-dd">


<?php echo form_error('category_id', '<div class="error_msg">', '</div>')?>
<select name="category_id" id="category_id">
                <option name="category_id" >-----Report_category--------</option>
                <option name="category_id" value="Chairperson">Chairperson</option>
                <option name="category_id" value="Secretary">Secretary</option>
                <option name="category_id" value="Auditor">Auditor</option>
            </select>

<input type="submit" value="Upload">
 </form>
    </div>



    <div class="report" style="height:auto;">
<?php
if (isset($goal_message)) {
echo "<div class='message'>";
echo $goal_message;
echo "</div>";
}
?>

  <?php
echo "<div class='error_msg'>";
if (isset($error_goal)) {
echo $error_goal;
}
// echo validation_errors();
echo "</div>";
?>
<h1 style="text-align:center;"><u>Add new goal</u></h1>

<form method="post" action="<?php echo site_url("tucasa/pages/Kiroho_goal")?>" style="padding:10px; margin-top:30px;">

<?php echo form_error('goal_title', '<div class="error_msg">', '</div>')?>
<input type="text" name="goal_title" placeholder ="Tittle">

<?php echo form_error('goal_file', '<div class="error_msg">', '</div>')?>
Choose file:<input name="goal_file" type="file">

<?php echo form_error('date_goal', '<div class="error_msg">', '</div>')?>
<input type="text" name="date_goal" placeholder="Today date:yyyy-mm-dd">

<select name="goal_category" id="goal_category">
                <option name="goal_category" >-----Goal_category--------</option>
                <option name="goal_category" value="Chairperson">Chairperson</option>
                <option name="goal_category" value="Secretary">Secretary</option>
                <option name="goal_category" value="Auditor">Auditor</option>
            </select>
<input type="submit" value="Upload">
</form>
</div>

<div class="report" style="height:auto;">
<h1 style="text-align:center;"><u>Add new anounciment</u></h1>
<?php
if (isset($anounciment_message)) {
echo "<div class='message'>";
echo $anounciment_message;
echo "</div>";
}
?>

  <?php
echo "<div class='error_msg'>";
if (isset($error_anounciment)) {
echo $error_anounciment;
}
// echo validation_errors();
echo "</div>";
?>
<form method="post" action="<?php echo site_url("tucasa/pages/Kiroho_anoucemet")?>" style="padding:10px; margin-top:30px;">

<?php echo form_error('maelezo', '<div class="error_msg">', '</div>')?>
<textarea name="maelezo" id="maelezo" cols="25" rows="6" placeholder="Descriptions" style="margin-top:20px;"></textarea>

<?php echo form_error('tangazo_title', '<div class="error_msg">', '</div>')?>
<input type="text" name="tangazo_title" placeholder=" Tittle">

<?php echo form_error('date_anounciment', '<div class="error_msg">', '</div>')?>
<input type="text" name="date_anounciment" placeholder="Today date:yyyy-mm-dd">

<input type="submit" value="Upload">

</form>

</div>

</div>
   
</body>
</html>