<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uwakili</title>
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
    float:right;
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
            <li><a class="active"  href="<?php echo base_url() ?>index.php/tucasa/pages/uwakili">Home</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/miradi">Investment</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/investment_analysis">Investment analysis</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/workers">Workers</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages_display/uwakili_report">My reports</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages_display/uwakili_anoucement">Anoucements</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages_display/uwakili_goal">Goals</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/change_pass">Change password</a></li>
             <li><a href="<?php echo base_url() ?>index.php/tucasa/user_authentication/logout">Logout</a></li> </ul>
             </ul>
         </div>

    </div>


<div class="right_pannel" style="float: right; width: 80%; background:white; height:100vh; overflow:auto;">
    

<div class="report" style="height:auto;">

<h1 style="text-align:center;"><u>Add new Worker</u></h1>
<?php
if (isset($message_display)) {
echo "<div class='message'>";
echo $message_display;
echo "</div>";
}
?>

        <?php
echo "<div class='error_msg'>";
if (isset($error_message)) {
echo $error_message;
}
// echo validation_errors();
echo "</div>";
?>
<form method="post" action="<?php echo site_url("tucasa/data_management/insert_workers")?>" style="padding:10px; margin-top:30px;">

<?php echo form_error('first_name', '<div class="error_msg">', '</div>')?>
<input type="text" name="first_name" placeholder="first name">

<?php echo form_error('last_name', '<div class="error_msg">', '</div>')?>
<input type="text" name="last_name" placeholder="last name">

<?php echo form_error('gender', '<div class="error_msg">', '</div>')?>
<select name="gender" id="gender">
                <option name="gender" >-----Sex---------</option>
                <option name="gender" value="Female">Female</option>
                <option name="gender" value="Male">Male</option>
            </select>

<?php echo form_error('phone_number', '<div class="error_msg">', '</div>')?>
<input type="text" name="phone_number" placeholder="phone number">


<?php echo form_error('place_work', '<div class="error_msg">', '</div>')?>
<select name="place_work" id="place_work">
                <option name="place_work" >-----place of work---------</option>
                <option name="place_work" value="Youtube">Youtube</option>
                <option name="place_work" value="T-Shirt">T-Shirt</option>
                <option name="place_work" value="Cafeteria">Cafeteria</option>
            </select>



<input type="submit" value="Upload">
</form>

</div>






<div class="report" style="height:auto;">
<h1 style="text-align:center;"><u>Add new Investment</u></h1>
<?php
if (isset($message_investment)) {
echo "<div class='message'>";
echo $message_investment;
echo "</div>";
}
?>

        <?php
echo "<div class='error_msg'>";
if (isset($error_investment)) {
echo $error_investment;
}
// echo validation_errors();
echo "</div>";
?>
<?php echo form_error('Name_of_investment', '<div class="error_msg">', '</div>')?>
<form method="post" action="<?php echo site_url("tucasa/data_management/insert_investment")?>" style="padding:10px; margin-top:30px;">
<input type="text" name="Name_of_investment" placeholder="Name of investment">
<input type="submit" value="Upload">
</form>

</div>








<div class="report" style="height:auto;">

<h1 style="text-align:center;"><u>Add Purchases</u></h1>
<?php
if (isset($purchase_message)) {
echo "<div class='message'>";
echo $purchase_message;
echo "</div>";
}
?>

        <?php
echo "<div class='error_msg'>";
if (isset($error_purchase)) {
echo $error_purchase;
}
// echo validation_errors();
echo "</div>";
?>


<form method="post" action="<?php echo site_url("tucasa/data_management/add_purchase")?>" style="padding:10px; margin-top:30px;">

<?php echo form_error('purpose', '<div class="error_msg">', '</div>')?>
<textarea name="purpose" id="purpose" cols="25" rows="6" placeholder="Particulars" style="margin-top:20px;"></textarea>

<?php echo form_error('date_of_upload', '<div class="error_msg">', '</div>')?>
<input type="text" name="date_of_upload" placeholder="Today date:yyyy-mm-dd">

<?php echo form_error('amount', '<div class="error_msg">', '</div>')?>
<input type="text" name="amount" placeholder="Total Amount Tsh">


<?php echo form_error('investment', '<div class="error_msg">', '</div>')?>
<select name="investment" id="investment">
                <option name="investment" >-----Investment---------</option>
                <option name="investment" value="Youtube">Youtube</option>
                <option name="investment" value="T-Shirt">T-Shirt</option>
                <option name="investment" value="Cafeteria">Cafeteria</option>
            </select>

            <input type="submit" value="Upload">
</form>
</div>



<div class="report" style="height:auto;">

<h1 style="text-align:center;"><u>Add Sales</u></h1>
<?php
if (isset($sales_message)) {
echo "<div class='message'>";
echo $sales_message;
echo "</div>";
}
?>

        <?php
echo "<div class='error_msg'>";
if (isset($error_sales)) {
echo $error_sales;
}
// echo validation_errors();
echo "</div>";
?>
<form method="post" action="<?php echo site_url("tucasa/pages/add_sales")?>" style="padding:10px; margin-top:30px;">

<?php echo form_error('particulars', '<div class="error_msg">', '</div>')?>
<textarea name="particulars" id="particulars" cols="25" rows="6" placeholder="Particulars" style="margin-top:20px;"></textarea>

<?php echo form_error('date_of_upload_sales', '<div class="error_msg">', '</div>')?>
<input type="text" name="date_of_upload_sales" placeholder="Today date:yyyy-mm-dd">

<?php echo form_error('amount_sale', '<div class="error_msg">', '</div>')?>
<input type="text" name="amount_sale" placeholder="Total Amount Tsh">


<?php echo form_error('investment', '<div class="error_msg">', '</div>')?>
<select name="investment_sales" id="investment">
                <option name="investment" >-----Investment---------</option>
                <option name="investment" value="Youtube">Youtube</option>
                <option name="investment" value="T-Shirt">T-Shirt</option>
                <option name="investment" value="Cafeteria">Cafeteria</option>
            </select>

            <input type="submit" value="Upload">
</form>
</div>



<div class="report" style="height:auto;">
<h1 style="text-align:center;"><u>Add Revenue</u></h1>

<?php
if (isset($revenue_message)) {
echo "<div class='message'>";
echo $revenue_message;
echo "</div>";
}
?>


 <?php
echo "<div class='error_msg'>";
if (isset($error_revenue)) {
echo $error_revenue;
}
// echo validation_errors();
echo "</div>";
?>



<form method="post" action="<?php echo site_url("tucasa/data_management/add_revenue")?>" style="padding:10px; margin-top:30px;">

<?php echo form_error('particulars_revenue', '<div class="error_msg">', '</div>')?>
<textarea name="particulars_revenue" id="particulars" cols="25" rows="6" placeholder="Particulars" style="margin-top:20px;"></textarea>

<?php echo form_error('date_of_upload_revenue', '<div class="error_msg">', '</div>')?>
<input type="text" name="date_of_upload_revenue" placeholder="Today date:yyyy-mm-dd">

<?php echo form_error('amount_revenue', '<div class="error_msg">', '</div>')?>
<input type="text" name="amount_revenue" placeholder="Total Amount Tsh">

<?php echo form_error('investment_revenue', '<div class="error_msg">', '</div>')?>
<select name="investment_revenue" id="investment">
                <option name="investment" >-----Investment---------</option>
                <option name="investment" value="Youtube">Youtube</option>
                <option name="investment" value="T-Shirt">T-Shirt</option>
                <option name="investment" value="Cafeteria">Cafeteria</option>
            </select>
<input type="submit" value="Upload">
</form>
</div>





<div class="report" style="height:auto;">
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

<h1 style="text-align:center;"><u>Add new report</u></h1>

<form method="post" action="<?php echo site_url("tucasa/pages/uwakili_report")?>" style="padding:10px; margin-top:30px;">

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

<form method="post" action="<?php echo site_url("tucasa/pages/uwakili_goal")?>" style="padding:10px; margin-top:30px;">

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
<h1 style="text-align:center;"><u>Add new anounciment</u></h1>
<form method="post" action="<?php echo site_url("tucasa/pages/uwakili_anoucement")?>" style="padding:10px; margin-top:30px;">

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