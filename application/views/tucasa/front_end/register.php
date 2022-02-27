<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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


.register_container{
        width: 100%px;
        padding:15px;
        margin: 100px auto;
        margin-top: 10px;
        border: 3px solid gray;
        border-radius: 5px;
        text-align:center;
    }
    
    .kolamu{
        display:flex;
        padding:15px;
        
    }
    .chumba{
        margin-left:10px;
    }
    
    input[type="text"],input[type="password"],input[type="email"],input[type="tel"]{
        height:44px;
        width:240px;
        border:1px solid #000;
        font-size:18px;
        padding-left:45px;
        margin-bottom:20px;
        border-radius: 5px;
        background: #ccb6c1;
    }
    
    input[type="submit"]{
        border:none;
        border-radius: 5px;
        background:chocolate;
        color:#fff;
        height: 44px;
        width: 500px;
        margin-left: 10%;
        margin-top: 0%;
        font-size: 18px;
    }
    
    input[type="submit"]:hover{
        opacity: 0.7;
    }
    

    input[type="date"]{
        height:44px;
        width:240px;
        border-radius: 5px;
        font-size:18px;
        padding-left:45px;
        margin-bottom:20px; 
        background: #ccb6c1;
    }
    
    select{
        background: #ccb6c1;
        border-radius: 5px;
        height: 44px;
        width: 240px;
        border:1px solid #000;
        font-size: 18px;
    }

    .footer{
        text-align: center;
        font-size: 15px;
        margin-top: -10;
        border-top:3px solid gray;
    }
    .footer h3{
        padding: 5px;
    }
    .footer i{
        padding:10px;
        color: rgb(250, 236, 215);
        font-size: 30px;
    }
    
    .footer i:hover{
        opacity: 0.7;
    }

    .error_msg{
    color:red;
    font-size: 16px;
    }
    
    .message{
    position: absolute;
    font-weight: bold;
    font-size: 28px;
    color: #6495ED;
    left: 262px;
    width: 500px;
    text-align: center;
    }
    span{
    color:red;
    }
    


    
/*media query for responsiveness */

@media screen and (max-width:720px){
    .header h1{
        font-size:20px;
    }
   .header h3{
       font-size: 15px;
   }
  
.register_container{
    width: 400px;
    border: 1px solid black;
    border-radius: 5px;
    text-align: center;
    margin: 60px auto;
    margin-top: 8px;
}

input[type="submit"]{
    border:none;
    border-radius: 5px;
    background:chocolate;
    color:#fff;
    height: 44px;
    width: 200px;
    margin-left: 0%;
    margin-top: 0%;
    font-size: 18px;
}

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


    <div class="register_container">
        <h2>Register here</h2>

<?php

echo "<div class='error_msg'>";
echo validation_errors();
echo "</div>";

echo"<br/>";

echo "<div class='error_msg'>";
if (isset($message_display)) {
echo $message_display;
}
echo "</div>";

?>


        <form method="post" action="<?php echo site_url("tucasa/user_authentication/new_user_registration")?>">

    <div class="kolamu">
           <div class="chumba">
            <input type="text" placeholder="First name" name="first_name"><br>
            </div>

            <div class="chumba">
            <input type="text" placeholder="Middle name" name="middle_name"><br>
            </div>


            <div class="chumba">
            <input type="text" placeholder="Last name" name="last_name"><br>
            </div>

            <div class="chumba">
            <input type="text" placeholder="sex" name="sex"><br>
            </div>

     </div>

     <div class="kolamu">
            <div class="chumba">
            <input type="tel" placeholder="phone number" name="phone_number"><br>
            </div>
                  
     <div class="chumba">
            <input type="email" placeholder="email" name="email"><br>
            </div>

     <div class="chumba">
            <input type="date" name="date_of_birth"><br>
            </div>

                   <div class="chumba">
            <select name="position" id="position"><br>
                <option name="position">--------Position--------</option>
                <option name="position" value="Chair person">Chair person</option>
                <option name="position" value="Secretary">Secretary</option>
                <option name="position" value="Mhazini">Mhazini</option>
                <option name="position" value="Kiroho">Kiroho</option>
                <option name="position" value="Librarian">Librarian</option>
                <option name="position" value="Program coordinator">Program coordinator</option>
                <option name="position" value="Mratibu wa Muziki">Mratibu wa Muziki</option>
                <option name="position" value="Miradi na Uwakili">Miradi na Uwakili</option>
                <option name="position" value="Mawasiliano">Mawasiliano</option>
                <option name="position" value="Auditor">Auditor</option>
                <option name="position" value="Huduma kwa jamii">Huduma kwa jamii</option>
                <option name="position" value="Uhuru wa dini">Uhuru wa dini</option>
                <option name="position" value="Member">Member</option>
                <option name="position" value="admin">admin</option>
            </select>
            </div> 
        </div>

    
            <div class="kolamu">

            <div class="chumba">
            
            <select name="karama" id="karama">
                <option >-------Karama----------</option>
                <option name="karama" value="Mhubiri">Mhubiri</option>
                <option name="karama" value="Mwimbaji">Mwimbaji</option>
                <option name="karama" value="Mkaribishaj">Mkaribishaji</option>
                <option name="karama" value="Mshereheshaji">Mshereheshaji</option>
            </select>
            </div>
    

            <div class="chumba">
           
            <select name="level" id="level">
                <option name="level">---------Level-----------</option>
                <option name="level" value="Certificate">Certificate</option>
                <option name="level" value="Diploma">Diploma</option>
                <option name="level" value="Degree" >Degree</option>
                <option name="level" value="Master" >Masters</option>
                <option name="level" value="Phd"  >Phd</option>
            </select>

            </div>
    

            <div class="chumba">
          
            <select name="faculty" id="faculty" onchange="populate(this.id,'program')">
                <option name="faculty" value="">-----Faculty-----</option>
                <option name="faculty" value="FST">FST</option>
                <option name="faculty" value="FSS">FSS</option>
                <option name="faculty" value="LLB">LLB</option>
                <option name="faculty" value="SOPAM">SOPAM</option>
                <option name="faculty" value="SOB">SOB</option>
            </select>
            </div>
    

            <div class="chumba">
           
            <select name="program" id="program">
            <option value="">-----Program-----</option>
               </select>
               </div>
         </div>  

               <div class="kolamu">
               <div class="chumba">
            
            <select name="baptism" id="baptism">
                <option name="baptism" >-----Baptism---------</option>
                <option name="baptism" value="YES">YES</option>
                <option name="baptism" value="NO">NO</option>
            </select>
            </div>


            <div class="chumba">
            <input type="password" placeholder="Password" name="password"><br>
            </div>

            <div class="chumba">
            <input type="password" placeholder="Confirm password" name="confirm_pass"><br>
            </div>
            
         </div>   
            
            <input type="submit" value="Sign up">
        </form>
    </div>

    <div class="footer">
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-instagram-square"></i>
            <i class="fab fa-twitter-square"></i>
        <h3>&#169; 2020</h3>
    </div>

</body>

<script type="text/javascript">

function populate(s1,s2){
    var s1 = document.getElementById(s1);
    var s2 = document.getElementById(s2);
    s2.innerHTML="";

    if(s1.value == "FST"){
        var optionArray = ["|", "ITS|ITS", "ICTB|ICTB", "ICTM|ICTM", "IM|IM", "AS|AS", "MICT-EDU|MICT-EDU"];
    }
    else if(s1.value == "FSS"){
        var optionArray = ["|", "F|F", "G|G", "H|H", "I|I"];
    }
    else if(s1.value == "LLB"){
        var optionArray = ["|", "L|L", "K|K", "D|D", "C|C"];
    }
    else if(s1.value == "SOPAM"){
        var optionArray = ["|", "M|M", "N|N", "O|O", "P|P"];
    }
    else if(s1.value == "SOB"){
        var optionArray = ["|", "B|B", "R|R", "S|S", "Q|Q"];
    }

    for(var option in optionArray){
      var pair = optionArray[option].split("|");
      var newOption=document.createElement("option");
      newOption.value=pair[0];
      newOption.innerHTML=pair[1];
      s2.options.add(newOption);
    }
}

</script>

</html>