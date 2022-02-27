<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My payments</title>
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
        <h4>Welcome: Rafael Samwel</h4>
        <h4 style="float: right; margin-top:0px">Year of study: 2020/2021</h4>
    </div>



<div class="left_pannel" style="float: left; height:500px; width: 20%;">

<div class="sub_content">
           <ul>
           <li><a  href="<?php echo base_url() ?>index.php/tucasa/pages/homepage"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/User_particulars"><i class="fas fa-user"></i>My particular</a></li>
            <li><a class="active" href="<?php echo base_url() ?>index.php/tucasa/pages/payments"><i class="fas fa-user"></i>My payment</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/Timetable"><i class="fas fa-calendar-week"></i>Timetible</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/Leaders"><i class="fas fa-users"></i>Leaders</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/Events"><i class="fas fa-bullhorn"></i>Trend Events</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/Investment"><i class="fas fa-money-check-alt"></i>Investment</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/Library"><i class="fas fa-book"></i>Library</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/Songs"> <i class="fas fa-music"></i>Songs</a></li>

            <li><a class="Logout" href="logout"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
           </ul>
        </div>
    </div>


<div class="right_pannel" style="float: right; margin-top:-5px; width: 80%; height:500px; overflow:auto;">

<div class="report">
<h2 style="color: rgb(27, 19, 23); text-align: center;  background-color: cornflowerblue; height: 35px; padding: 5px;">Ada</h2>

<p>The Amount required to be paid each Year for ada is 5000/= Tsh only.</p>
<p><b>Recommended:</b>Try to pay at a right time to allow other activities to be done at right time in effecient way. </p>
<p><i>Be blessed !</i></p>
<table id="t01" width=100%>
    
    <tr>
    <th>Date of payment</th>
    <th>Amount paid(Tsh)</th>
    <th>Total Amount(Tsh)</th>
    <th>Debit</th>
    </tr>

       <tr>
       <td>2020/10/13</td>
       <td>5000/=</td>
       <td>5000/=</td>
       <td>10000/=</td>
       </tr>
       
       <tr>
       <td>2020/10/13</td>
       <td>5000/=</td>
       <td>5000/=</td>
       <td>10000/=</td>
       </tr>
       <tr>
       <td>2020/10/13</td>
       <td>5000/=</td>
       <td>5000/=</td>
       <td>10000/=</td>
       </tr>
       
    </table>
   
    <h2 style="color: rgb(27, 19, 23); text-align: center;  background-color: cornflowerblue; height: 35px; padding: 5px;">Michango mingine</h2>
            
    <table id="t01" width=100%>
    
    <tr>
    <th>Date of payment</th>
    <th>Amount paid(Tsh)</th>
    <th>Total Amount(Tsh)</th>
    </tr>

       <tr>
       <td>2020/10/13</td>
       <td>5000/=</td>
       <td>5000/=</td>
       </tr>
       
       <tr>
       <td>2020/10/13</td>
       <td>5000/=</td>
       <td>5000/=</td>
       </tr>
       <tr>
       <td>2020/10/13</td>
       <td>5000/=</td>
       <td>5000/=</td>
       </tr>
       
    </table>

</div>
      
<div class="footer">
    <i class="fab fa-facebook-square"></i>
    <i class="fab fa-instagram-square"></i>
    <i class="fab fa-twitter-square"></i>
    <h2>&#169; 2020</h2>
    </div>


</body>
</html>