<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afya</title>
    <style>

    
       
    body{
            background: #ccb6c1;
        }

        .navbar{
            width: 100%;
            height: 50px;
            background:wheat;
            text-align:center;
            border-bottom:3px solid gray;
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


    .row{
    margin-top:10px;
    width: 100%;
    display: flex;
    text-align: center;
    background-color: wheat;
}

.kolamu{
    flex: 20%;
    padding: 15px;
    
}
.kontena{
    margin-top: 10px;
    box-shadow: 0 16px 48px 0 rgba(0,0,0,0.2);
}
img{
    width:200px;
    height:200px;
}


.navbar2{
	height:40px;
	background-color:wheat;
	margin-top:10px;
    text-align:center;
    border-bottom:3px solid gray;
    padding:5px;
}


.navbar2 ul{
	float:none;
    padding:0px;
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

    </style>

</head>

<body>
 
<?php
include('header.php');
 ?>

<div class="navbar">

<form class="fomu" action="action.php" style="padding:5px;">
    <label for="" style="font-size:23px;">Search Book by:</label>

     <input type="text" placeholder="Author name">
     <input type="text" placeholder="Publisher name">
     <input type="text" placeholder="Book name" name="search2">
	<input type="submit" value="search">
  </form>

</div>


<div class="left_pannel" style="float: left; width: 20%;background: #ccb6c1;">


<div class="sub_content">

<ul class="nav_ul">
<li><a  href="<?php echo base_url() ?>index.php/tucasa/pages/mkutubi">Home</a></li>
<li><a  class="active" href="<?php echo base_url() ?>index.php/tucasa/pages/books">View uploaded Books</a></li>
 <li><a href="<?php echo base_url() ?>index.php/tucasa/pages_display/mkutubi_report">My reports</a></li>
 <li><a  href="<?php echo base_url() ?>index.php/tucasa/pages_display/mkutubi_anoucement">Anoucements</a></li>
 <li><a href="<?php echo base_url() ?>index.php/tucasa/pages_display/mkutubi_goal">Goals</a></li>
 <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/change_pass">Change password</a></li>
 <li><a href="<?php echo base_url() ?>index.php/tucasa/user_authentication/logout">Logout</a></li> </ul>

 </ul>
</div>

    </div>


<div class="right_pannel" style="float: right; width: 80%; background:white;">

<!-- Navbar2 -->
<div class="navbar2">

 <ul>
<li><a href="<?php echo base_url() ?>index.php/tucasa/pages/books">Unabii</a></li>
<li><a href="<?php echo base_url() ?>index.php/tucasa/pages/mahusiano">Mahusiano & Ndoa</a></li>
<li><a class="active" href="<?php echo base_url() ?>index.php/tucasa/pages/afya">Afya</a></li>
<li><a href="<?php echo base_url() ?>index.php/tucasa/pages/lesoni">Lesoni</a></li>
<li><a href="<?php echo base_url() ?>index.php/tucasa/pages/makala">Makala</a></li>
<li><a href="<?php echo base_url() ?>index.php/tucasa/pages/magazeti">Magazeti & Vijuzuu</a></li>

</ul>

</div>


<!-- End of navbar2 -->

<div class="row">

<div class="kolamu">
    <div class="kontena">
    <div class="picha">
        <img src="picha/sabato.jpg" alt="leader">
    </div>
    <div class="desc">
        <h2>Chair</h2>
        <h3>Amosi Kichele</h3>
        <h4>0763437821</h4>
    </div>
</div>
    
<div class="kontena">
    <div class="picha">
    <img src="picha/sabato.jpg" alt="leader">
    </div>
    <div class="desc">
        <h2>Chair</h2>
        <h3>Amosi Kichele</h3>
        <h4>0763437821</h4>
    </div>
</div>

<div class="kontena">
    <div class="picha">
    <img src="picha/sabato.jpg" alt="leader">
    </div>
    <div class="desc">
        <h2>Chair</h2>
        <h3>Amosi Kichele</h3>
        <h4>0763437821</h4>
    </div>
</div>
</div>

<div class="kolamu">
<div class="kontena">
<div class="picha">
<img src="picha/sabato.jpg" alt="leader">
</div>
<div class="desc">
    <h2>Chair</h2>
    <h3>Amosi Kichele</h3>
    <h4>0763437821</h4>
</div>
</div>

<div class="kontena">
<div class="picha">
<img src="picha/sabato.jpg" alt="leader">
</div>
<div class="desc">
    <h2>Chair</h2>
    <h3>Amosi Kichele</h3>
    <h4>0763437821</h4>
</div>
</div>

<div class="kontena">
<div class="picha">
<img src="picha/sabato.jpg" alt="leader">
</div>
<div class="desc">
    <h2>Chair</h2>
    <h3>Amosi Kichele</h3>
    <h4>0763437821</h4>
</div>
</div>
</div>

<div class="kolamu">
<div class="kontena">
<div class="picha">
<img src="picha/sabato.jpg" alt="leader">
</div>
<div class="desc">
    <h2>Chair</h2>
    <h3>Amosi Kichele</h3>
    <h4>0763437821</h4>
</div>
</div>

<div class="kontena">
<div class="picha">
<img src="picha/sabato.jpg" alt="leader">
</div>
<div class="desc">
    <h2>Chair</h2>
    <h3>Amosi Kichele</h3>
    <h4>0763437821</h4>
</div>
</div>

<div class="kontena">
<div class="picha">
<img src="picha/sabato.jpg" alt="leader">
</div>
<div class="desc">
    <h2>Chair</h2>
    <h3>Amosi Kichele</h3>
    <h4>0763437821</h4>
</div>
</div>
</div>

<div class="kolamu">
<div class="kontena">
<div class="picha">
<img src="picha/sabato.jpg" alt="leader">
</div>
<div class="desc">
    <h2>Chair</h2>
    <h3>Amosi Kichele</h3>
    <h4>0763437821</h4>
</div>
</div>

<div class="kontena">
<div class="picha">
<img src="picha/sabato.jpg" alt="leader">
</div>
<div class="desc">
    <h2>Chair</h2>
    <h3>Amosi Kichele</h3>
    <h4>0763437821</h4>
</div>
</div>

<div class="kontena">
<div class="picha">
<img src="picha/sabato.jpg" alt="leader">
</div>
<div class="desc">
    <h2>Chair</h2>
    <h3>Amosi Kichele</h3>
    <h4>0763437821</h4>
</div>
</div>
</div>

</div>


</div>
   
</body>
</html>