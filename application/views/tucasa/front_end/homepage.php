<html lang="en">
<?php
if (isset($this->session->userdata['logged_in'])) {
$last_name = ($this->session->userdata['logged_in']['last_name']);
$email = ($this->session->userdata['logged_in']['email']);
} else {
header("location: tucasa/front_end/login");
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
   
       <link rel="stylesheet" href="<?php echo base_url()?>assets/css/homepage.css">



<style>


*{
    padding: 0;
    margin: 0;
}

body{
    font-family: Arial, Helvetica, sans-serif;
    background: wheat;
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

.banner{
    height:30px;
    text-align: center;
    color: rgb(32, 25, 10);
    background:linear-gradient(#f6e4f1,#ee8989,#f8ece6);
}

.banner h4{
    display: inline;
    padding: 5px;
    letter-spacing: 1px;
}

.content{
    width:100%;
	margin:0 auto;
    display: grid;
    grid-template-columns: 1fr 3fr 1fr;
    grid-column-gap:0px;
	grid-row-gap:0px;
    padding:0px;
    margin-top:0px;

}

.sub_content{
    height: auto;
}

.sub_content img{
    width: 100%;
    height: 300px;
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
    border-top: 1px solid black;
    border-left: 3px solid transparent;
}

 ul li a:hover{
    background-color: #555;
    color: white;
    border-left-color: #052222;
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

.tittle , .tittle2{
border: 1px solid black;
height: 300px;
background: wheat;
text-align: center;
}

.tittle2 img{
    height: 90%;
}

.tittle, .tittle2 h5{
    font-size: 20px;
    font-style: italic;
    color: rgb(238, 6, 6);
}

.tittle i{
    font-size: 100px;
    text-align: center;
    color: rgb(15, 87, 97);
    margin-top: 70px;
}

.sub_content{
    background: wheat;
}

.footer{
    border-top:3px solid rgb(8, 3, 3);
    height: 50px;
    width: 100%;
    text-align: center;
    grid-column: 1/4;
}
.footer i{
    padding:7px;
    color: rgb(36, 26, 11);
    font-size: 20px;
}

.footer i:hover{
    opacity: 0.7;
}


/*media query for responsiveness */

@media screen and (max-width:720px){
    .header h1{
        font-size:20px;
    }
   .header h3{
       font-size: 15px;
   }

   .content{
    width:100%;
	margin:0 auto;
    display: block;
    
    

}

li{
    display: inline-block;
}
   


}



</style>





</head>
<body>

    <div class="header">
        <h1>TUCASA MZUMBE UNIVERSITY</h1>
        <h3>Electronic Data Management System </h3>
    </div>

    <div class="banner">
        <h4 style="float: left; margin-top:0px">Today: 9/15/2020</h4>
        <h4><?php echo "Hello <b id='welcome'><i>" . $last_name . "</i> !</b>"; ?></h4>
        <h4 style="float: right; margin-top:0px">Year of study: 2020/2021</h4>
    </div>

    <div class="content">
        
        <div class="sub_content">
           <ul>
            <li><a class="active" href="<?php echo base_url() ?>index.php/tucasa/pages/homepage"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/User_particulars"><i class="fas fa-user"></i>My particular</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/payments"><i class="fas fa-user"></i>My payment</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/Timetable"><i class="fas fa-calendar-week"></i>Timetible</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/Leaders"><i class="fas fa-users"></i>Leaders</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/Events"><i class="fas fa-bullhorn"></i>Trend Events</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/Investment"><i class="fas fa-money-check-alt"></i>Investment</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/Library"><i class="fas fa-book"></i>Library</a></li>
            <li><a href="<?php echo base_url() ?>index.php/tucasa/pages/Song_s"> <i class="fas fa-music"></i>Songs</a></li>

            <li><a href="<?php echo base_url() ?>index.php/tucasa/user_authentication/logout">Logout</a></li>
           </ul>
        </div>

        <div class="sub_content"><img name="slide" alt="picha">
            <p>Kwanza, yatupasa daima kukumbuka kuwa Kristo ndiye kiini cha Danieli, kama Alivyo kiini cha Biblia nzima Pili, Danieli ni kitabu kilichopangwa kwa namna inayoonesha uzuri wa kiuandishi na hivyo kuturahishia kuelewa lengo kuu la kitabu hicho. Tatu, twapaswa kuelewa tofauti zilizopo baina ya unabii wa kawaida na unabii wa siku za mwisho.  Hii itatuwezesha kutofautisha baina ya unabii wa Danieli na ule unabii wa kawaida wa manabii wengine kama vile Isaya, Amosi na Yeremia. Nne, tunavyojifunza unabii wa wakati wa Danieli, yatupasa kutambua kuwa vipindi husika vya unabii huo ni virefu vinavyopimwa kwa kanuni ya siku moja ya unabii kuwakilisha mwaka mmoja. Tano, tutakazia kwamba kitabu cha Danieli siyo tu cha unabii ila pia kinahusiana sana na maisha yetu binafsi leo.</p>  
        </div>
        
        <div class="sub_content">

            <div class="tittle">
                <h5><u>Tangazo</u></h5>
                <i class="fas fa-envelope"></i>
            </div>
            <div class="tittle2">
                <h5><u>Daily qoutes</u></h5>
                <img src="T_9.jpg" alt="Dondoo">
               </div>

            </div>

        <div class="footer">
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-instagram-square"></i>
            <i class="fab fa-twitter-square"></i>
            <h3>&#169; 2020</h3></div>
       </div>
</body>

<script>
    var i=0; // start indexing
    var image=[];
    var time=5000; //time in millseconds

// list of image
   image[0]="T_5.jpg";
   image[1]="T_1.jpg";
   image[2]="T_4.jpg";

   function changeImg(){

       document.slide.src=image[i];

       if(i < image.length-1){
           i++;
       }else{
           i=0;
       }

   setTimeout("changeImg()",time);  // it set time for an image to change.
   }

   window.onload=changeImg; // load the image when browser opened.
</script>

</html>