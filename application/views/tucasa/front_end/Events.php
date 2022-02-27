<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trend Events</title>


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
.kontena{
    display:flex;
    margin-top: 10px;
    box-shadow: 0 16px 48px 0 rgba(0,0,0,0.2);
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
    <div class="header">
        <div class="logo1"><img src="logo_4.png" alt="logo1"></div>
        <h1>TUCASA MZUMBE UNIVERSITY</h1>
        <div class="logo2"><img src="logo_3.jpg" alt="logo2"></div>
         <h3>Electronic Data Management System </h3>
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
            <li><a class="active" href="<?php echo base_url() ?>index.php/tucasa/pages/Events"><i class="fas fa-bullhorn"></i>Trend Events</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/Investment"><i class="fas fa-money-check-alt"></i>Investment</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/Library"><i class="fas fa-book"></i>Library</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/Songs"> <i class="fas fa-music"></i>Songs</a></li>

            <li><a class="Logout" href="logout"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
           </ul>
                
             </div>

        </div>

       

        <div class="right_pannel" style="float: right;">

            <div class="kontena">
            <div class="picha">
                <img src="T_2.jpg" alt="Event" width="300px" height="200px">
            </div>
            <div class="desc">
                <p>The Special event at Dumila 2020</p>
                <i class="fa fa-clock-o" aria-hidden="true"></i>
            </div>
           </div>

           <div class="kontena">
            <div class="picha">
                <img src="T_8.jpg" alt="Event" width="300px" height="200px">
            </div>
            <div class="desc">
                <p>The Special event at Dumila 2020</p>
                <i class="fa fa-clock-o" aria-hidden="true"></i>
            </div>
           </div>

           <div class="kontena">
            <div class="picha">
                <img src="K_1.jpg" alt="Event" width="300px" height="200px">
            </div>
            <div class="desc">
                <p>The Special event at Dumila 2020</p>
                <i class="fa fa-clock-o" aria-hidden="true"></i>
            </div>
           </div>

           <div class="kontena">
            <div class="picha">
                <img src="K_2.jpg" alt="Event" width="300px" height="200px">
            </div>
            <div class="desc">
                <p>The Special event at Dumila 2020</p>
                <i class="fa fa-clock-o" aria-hidden="true"></i>
            </div>
           </div>
           
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