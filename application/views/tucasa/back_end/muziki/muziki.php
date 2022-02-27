<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muziki</title>
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

</div>


<div class="left_pannel" style="float: left; width: 20%;background: #ccb6c1;">


        <div class="sub_content">
            <ul class="nav_ul">
            <li><a class="active" href="<?php echo base_url() ?>index.php/tucasa/pages/muziki"><i class="fas fa-home"></i>Home</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/songs">Songs</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/singers">View all Singers</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/singer_group">Groups/Choir</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages_display/muziki_report">My reports</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages_display/muziki_anoucement">Anoucements</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages_display/muziki_goal">Goals</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/change_pass">Change password</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/user_authentication/logout">Logout</a></li> </ul>

            
             </ul>
         </div>

    </div>


<div class="right_pannel" style="float: right; width: 80%; background:white;">
    

<div class="report" style="height:auto;">

<h1 style="text-align:center;"><u>Add new Song</u></h1>
<?php
if (isset($song_message)) {
echo "<div class='message'>";
echo $song_message;
echo "</div>";
}
?>

  <?php
echo "<div class='error_msg'>";
if (isset($error_song)) {
echo $error_song;
}
// echo validation_errors();
echo "</div>";
?>
<form method="post" action="<?php echo site_url("tucasa/pages/new_song")?>" style="padding:10px; margin-top:30px;">

<?php echo form_error('song_name', '<div class="error_msg">', '</div>')?>
<input type="text" name="song_name" placeholder="Song name">


<?php echo form_error('album_name', '<div class="error_msg">', '</div>')?>
<input type="text" name="album_name" placeholder="Album name">


<?php echo form_error('singers', '<div class="error_msg">', '</div>')?>
<select name="singers" id="singers">
<option value="">------Singers-------</option>
<option value="Down the Cross">Down the Cross</option>
<option value="Tulia kwa Yesu">Tulia kwa Yesu</option>
<option value="Sonda ya Dilu">Sonda ya Dilu</option>
<option value="The Voice">The Voice</option>  
<option value="The Voice">Tucasa choir</option>      
 </select>


 <input type="submit" value="Upload">

 </form>

</div>

<div class="report" style="height:auto;">

<h1 style="text-align:center;"><u>Add new Group</u></h1>
<?php
if (isset($group_message)) {
echo "<div class='message'>";
echo $group_message;
echo "</div>";
}
?>

  <?php
echo "<div class='error_msg'>";
if (isset($error_group)) {
echo $error_group;
}
// echo validation_errors();
echo "</div>";
?>
<form method="post" action="<?php echo site_url("tucasa/pages/new_group")?>" style="padding:10px; margin-top:30px;">

<?php echo form_error('group_name', '<div class="error_msg">', '</div>')?>
<input type="text" name="group_name" placeholder="Group name">


<?php echo form_error('date_creation', '<div class="error_msg">', '</div>')?>
<input type="text" name="date_creation" placeholder="Date of creation">


<?php echo form_error('capacity', '<div class="error_msg">', '</div>')?>
<input type="text" name="capacity" placeholder="Capacity">

<?php echo form_error('descr', '<div class="error_msg">', '</div>')?>
<textarea name="descr" id="maelezo" cols="25" rows="6" placeholder="Descriptions" style="margin-top:20px;"></textarea>
<input type="submit" value="Upload">
 </form>
</div>


<div class="report" style="height:auto;">
<?php
if (isset($leader_message)) {
echo "<div class='message'>";
echo $leader_message;
echo "</div>";
}
?>
  <?php
echo "<div class='error_msg'>";
if (isset($error_leader)) {
echo $error_leader;
}
// echo validation_errors();
echo "</div>";
?>
<h1 style="text-align:center;"><u>Add Group leaders</u></h1>

<form method="post" action="<?php echo site_url("tucasa/pages/group_leader")?>" style="padding:10px; margin-top:30px;">

<?php echo form_error('first_name', '<div class="error_msg">', '</div>')?>
<input type="text" name="first_name" placeholder="first name">


<?php echo form_error('last_name', '<div class="error_msg">', '</div>')?>
<input type="text" name="last_name" placeholder="last name"><br><br>
<br>
<br>

<?php echo form_error('position', '<div class="error_msg">', '</div>')?>
<select name="position" id="position">
                <option name="position" >----Position--------</option>
                <option name="position" value="Chairperson">Chair</option>
                <option name="position" value="Secretary">Secretary</option>
                <option name="position" value="Auditor">Mhazini</option>
            </select>


<?php echo form_error('group', '<div class="error_msg">', '</div>')?>
<select name="group" id="group">
<option value="">---Groups--</option>
<option value="Down the Cross">Down the Cross</option>
<option value="Tulia kwa Yesu">Tulia kwa Yesu</option>
<option value="Sonda ya Dilu">Sonda ya Dilu</option>
<option value="The Voice">The Voice</option>
</select>
 <input type="submit" value="Upload">

 </form>

</div>



<div class="report" style="height:auto;">
<h1 style="text-align:center;"><u>Add new Singer</u></h1>
<?php
if (isset($singer_message)) {
echo "<div class='message'>";
echo $singer_message;
echo "</div>";
}
?>

  <?php
echo "<div class='error_msg'>";
if (isset($error_singer)) {
echo $error_singer;
}
// echo validation_errors();
echo "</div>";
?>
<form method="post" action="<?php echo site_url("tucasa/pages/new_singer")?>" style="padding:10px; margin-top:30px;">

<?php echo form_error('first name', '<div class="error_msg">', '</div>')?>
<input type="text" name="first_name" placeholder="first name">


<?php echo form_error('last name', '<div class="error_msg">', '</div>')?>
<input type="text" name="last_name" placeholder="last name">


<br>
<br>


<?php echo form_error('melody', '<div class="error_msg">', '</div>')?>
<select name="melody" id="melody">
<option value="">---melody--</option>
<option value="first">first</option>
<option value="second">second</option>
<option value="Third">Third</option>
<option value="fourth-Base">fourth-Base</option>
</select>

<?php echo form_error('phone_number', '<div class="error_msg">', '</div>')?>
<input type="text" name="phone_number" placeholder="Phone number">


<?php echo form_error('group of', '<div class="error_msg">', '</div>')?>
<select name="group_of" id="group">
<option value="">---Groups--</option>
<option value="Down the Cross">Down the Cross</option>
<option value="Tulia kwa Yesu">Tulia kwa Yesu</option>
<option value="Sonda ya Dilu">Sonda ya Dilu</option>
<option value="The Voice">The Voice</option>
</select>

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
   <form method="post" action="<?php echo site_url("tucasa/pages/muziki_report")?>" style="padding:10px; margin-top:30px;">

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

<form method="post" action="<?php echo site_url("tucasa/pages/muziki_goal")?>" style="padding:10px; margin-top:30px;">

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
<form method="post" action="<?php echo site_url("tucasa/pages/muziki_anoucement")?>" style="padding:10px; margin-top:30px;">

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