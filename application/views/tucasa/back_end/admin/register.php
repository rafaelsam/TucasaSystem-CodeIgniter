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
        width: 100%;
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
//echo validation_errors();
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
           <?php echo form_error('first_name', '<div class="error_msg">', '</div>')?>
            <input type="text" placeholder="First name" name="first_name"><br>
            </div>

            <div class="chumba">
            <?php echo form_error('middle_name', '<div class="error_msg">', '</div>')?>
            <input type="text" placeholder="Middle name" name="middle_name"><br>
            </div>


            <div class="chumba">
            <?php echo form_error('last_name', '<div class="error_msg">', '</div>')?>
            <input type="text" placeholder="Last name" name="last_name"><br>
            </div>

            <div class="chumba">
            <?php echo form_error('sex', '<div class="error_msg">', '</div>')?>
            <select name="sex" id="sex">
                <option name="sex" >-----Sex---------</option>
                <option name="sex" value="Female">Female</option>
                <option name="sex" value="Male">Male</option>
            </select>
            </div>

     </div>

     <div class="kolamu">
            <div class="chumba">
            <?php echo form_error('phone_number', '<div class="error_msg">', '</div>')?>
            <input type="tel" placeholder="phone number" name="phone_number"><br>
            </div>
                  
     <div class="chumba">
     <?php echo form_error('email', '<div class="error_msg">', '</div>')?>
            <input type="email" placeholder="email" name="email"><br>
            </div>

            <div class="chumba">
            <?php echo form_error('date_of_birth', '<div class="error_msg">', '</div>')?>
            <input type="text" placeholder="birth_date: yyyy-mm-dd" name="date_of_birth"><br>
            </div>

                   <div class="chumba">
                   <?php echo form_error('position', '<div class="error_msg">', '</div>')?>
            <select name="position" id="position"><br>
                <option name="position">--------Position--------</option>
                <option name="position" value="Chairperson">Chairperson</option>
                <option name="position" value="Excutive Secretary">Excutive Secretary</option>
                <option name="position" value="Treasurer">Treasurer</option>
                <option name="position" value="Spiritual and Evangelism Coordinator">Spiritual and Evangelism Coordinator</option>
                <option name="position" value="Librarian">Librarian</option>
                <option name="position" value="Program coordinator">Program coordinator</option>
                <option name="position" value="Communication coordinator">Communication Coordinator</option>
                <option name="position" value="Project Manager">Project Manager</option>
                <option name="position" value="Education Leader">Education Leader</option>
                <option name="position" value="Internal Auditor">Internal Auditor</option>
                <option name="position" value="Medical Missionary Coordinator">Medical Missionary Coordinator</option>
                <option name="position" value="Religious liberty coordinator">Religious liberty coordinator</option>
                <option name="position" value="Member">Member</option>
                <option name="position" value="admin">Admin</option>
            </select>
            </div> 
        </div>

    
            <div class="kolamu">

            <div class="chumba">
            <?php echo form_error('karama', '<div class="error_msg">', '</div>')?>
            <select name="karama" id="karama">
                <option >-------Karama----------</option>
                <option name="karama" value="Mhubiri">Mhubiri</option>
                <option name="karama" value="Mwimbaji">Mwimbaji</option>
                <option name="karama" value="Mkaribishaj">Mkaribishaji</option>
                <option name="karama" value="Mshereheshaji">Mshereheshaji</option>
            </select>
            </div>
    

            <div class="chumba">
            <?php echo form_error('level', '<div class="error_msg">', '</div>')?>
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
            <?php echo form_error('faculty', '<div class="error_msg">', '</div>')?>
            <select name="faculty" id="faculty" onchange="populate(this.id,'program')">
                <option name="faculty" value="">-----Faculty-----</option>
                <option name="faculty" value="Faculty of Science And Technology">Faculty of Science And Technology(FST)</option>
                <option name="faculty" value="Faculty of Social Science(FSS)">Faculty of Social Science(FSS)</option>
                <option name="faculty" value="Faculty of Law(FOL)">Faculty of Law(FOL)</option>
                <option name="faculty" value="School of Public Administration And Management(SOPAM)">School of Public Administration And Management(SOPAM)</option>
                <option name="faculty" value="School of Business(SOB)">School of Business(SOB)</option>
            </select>
            </div>
    

            <div class="chumba">
            <?php echo form_error('program', '<div class="error_msg">', '</div>')?>
            <select name="program" id="program" onChange=populate(this.id,"program" )>
            <option value="">-----Program-----</option>
               </select>
               </div>
         </div>  



         <div class="kolamu">
         <div class="chumba">
            <?php echo form_error('Marital_status', '<div class="error_msg">', '</div>')?>
            <select name="Marital_status" id="Marital_status">
                <option name="Marital_status" >-----Marital status---------</option>
                <option name="Marital_status" value="Single">Single</option>
                <option name="Marital_status" value="Married">Married</option>
                <option name="Marital_status" value="Coupled">Coupled</option>
                <option name="Marital_status" value="Widow">Widow</option>
            </select>
            </div>

            <div class="chumba">
            <?php echo form_error('place_of_residence', '<div class="error_msg">', '</div>')?>
            <select name="place_of_residence" id="place_of_residence">
                <option name="place_of_residence" >-----Place of residence---------</option>
                <option name="place_of_residence" value="Arusha">Arusha</option>
                <option name="place_of_residence" value="Dar er salaam">Dar er salaam</option>
                <option name="place_of_residence" value="Dodoma">Dodoma</option>
                <option name="place_of_residence" value="Kagera">Kagera</option>
            </select>
            </div>


           <div class="chumba">
           <?php echo form_error('kin1_full_name', '<div class="error_msg">', '</div>')?>
            <input type="text" placeholder="Kin 1 Full name" name="kin1_full_name"><br>
            </div>

            <div class="chumba">
            <?php echo form_error('kin1_phone_number', '<div class="error_msg">', '</div>')?>
            <input type="text" placeholder=" Kin 1 phone number" name="kin1_phone_number"><br>
            </div>
     </div>


         <div class="kolamu">

         <div class="chumba">
            <?php echo form_error('kin1_Relation', '<div class="error_msg">', '</div>')?>
            <input type="text" placeholder="Relation" name="kin1_Relation"><br>
            </div>

           <div class="chumba">
           <?php echo form_error('kin2_full_name', '<div class="error_msg">', '</div>')?>
            <input type="text" placeholder="Kin 2 Full name" name="kin2_full_name"><br>
            </div>

            <div class="chumba">
            <?php echo form_error('kin2_phone_number', '<div class="error_msg">', '</div>')?>
            <input type="text" placeholder=" Kin 2 phone number" name="kin2_phone_number"><br>
            </div>


            <div class="chumba">
            <?php echo form_error('kin2_Relation', '<div class="error_msg">', '</div>')?>
            <input type="text" placeholder=" Relation" name="kin2_Relation"><br>
            </div>

     </div>

               <div class="kolamu">

               <div class="chumba">
               <?php echo form_error('Year_of_study', '<div class="error_msg">', '</div>')?>
            <select name="Year_of_study" id="Year_of_study">
                <option name="Year_of_study" >-----Year_of_study---------</option>
                <option name="Year_of_study" value="First Year">First Year</option>
                <option name="Year_of_study" value="Second year">Second year</option>
                <option name="Year_of_study" value="Second year">Third year</option>
            </select>
            </div>

               <div class="chumba">
               <?php echo form_error('baptism', '<div class="error_msg">', '</div>')?>
            <select name="baptism" id="baptism">
                <option name="baptism" >-----Baptism---------</option>
                <option name="baptism" value="YES">YES</option>
                <option name="baptism" value="NO">NO</option>
            </select>
            </div>


            <div class="chumba">
            <?php echo form_error('password', '<div class="error_msg">', '</div>')?>
            <input type="password" placeholder="Password" name="password"><br>
            </div>

            <div class="chumba">
            <?php echo form_error('password', '<div class="error_msg">', '</div>')?>
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

    if(s1.value == "Faculty of Science And Technology"){
        var optionArray = ["|", "Bachelor of Science in Library and information Mangement(BSc.LIM)|Bachelor of Science in Library and information Mangement(BSc.LIM)", 
        "Bachelor of Science in Information Technology and Systems (BSc.ITS)|Bachelor of Science in Information Technology and Systems (BSc.ITS)",
         "Bachelor of Science in Information and Communication Technology with Business(BSc.ICT-B)|Bachelor of Science in Information and Communication Technology with Business(BSc.ICT-B)", 
         "Bachelor of Science in Information and Communication Technology with Management(BSc.ICT-M)|Bachelor of Science in Information and Communication Technology with Management(BSc.ICT-M)",
          "Bachelor of Science in industrial Engneering Management(BSc.IEM)|Bachelor of Science in industrial Engneering Management(BSc.IEM)",
           "Bachelor of Science in Mathematics and ICT with Education(BSc.MIST-EDU)|Bachelor of Science in Mathematics and ICT with Education(BSc.MIST-EDU)",
           "Bachelor of Science in Production and Operation Management(BSc.POM)|Bachelor of Science in Production and Operation Management(BSc.POM)",
           "Bachelor of Science in Applied Statistics(BSc.AS)|Bachelor of Science in Applied Statistics(BSc.AS)",
           "Diploma in Information Technology(DIT)|Diploma in Information Technology(DIT)",
           "Certificate in Information Technology(CIT)|Certificate in Information Technology(CIT)",
         
           ];
    }
    else if(s1.value == "Faculty of Social Science(FSS)"){
        var optionArray = ["|", 
        "Bachelor of Education in commerce and accountacy|Bachelor of Education in commerce and accountacy",
         "Bachelor of Education in Economics and Mathematics|Bachelor of Education in Economics and Mathematics",
          "Bachelor of Education in language and Management|Bachelor of Education in language and Management",
           "Bachelor of science(Economics)-Population and Development|Bachelor of science(Economics)-Population and Development",
           "Bachelor of science(Economics)-Project planning and Management|Bachelor of science(Economics)-Project planning and Management",
           "Bachelor of science in Economics - Economic Planning and Policy|Bachelor of science in Economics - Economic Planning and Policy",
           ];
    }
    else if(s1.value == "Faculty of Law(FOL)"){
        var optionArray = ["|", "Bachelor of Law(LLB)|Bachelor of Law(LLB)",
         "Diploma in Law(DL)|Diploma in Law(DL)", "Certificate in Law(CL)|Certificate in Law(CL)",
         "M in Costitutional and Administrative Law|M in Costitutional and Administrative Law",
         "M  Commercial Law|M  Commercial Law",
         "M  International Law|M  International Law"

         ];
    }
    else if(s1.value == "School of Public Administration And Management(SOPAM)"){
        var optionArray = ["|", "Master of Public Administration(MPA)|Master of Public Administration(MPA)", 
        "Master of Health Systems Management(MHSM)|Master of Health Systems Management(MHSM)", 
        "Master of science in Health Monitoring Evaluation(MSc.HM&E)|Master of science in Health Monitoring Evaluation(MSc.HM&E)",
         "Master of science in local Goverment Management(MSc.LGM)|Master of science in local Goverment Management(MSc.LGM)",
         "Master of science in Human Resource Management(MSc.HRM)|Master of science in Human Resource Management(MSc.HRM)",
         "Master of Leadership and Management(MLM)|Master of Leadership and Management(MLM)",
         "Master of Research  and Public Policy(MRPP)|Master of Research  and Public Policy(MRPP)",
         "Master of Business Administration in Health Management(MBAHM)|Master of Business Administration in Health Management(MBAHM)",
         "Bachelor of Human Resources Management(BHRM)|Bachelor of Human Resources Management(BHRM)",
         "Bachelor of Public Admimistration(BPA)|Bachelor of Public Admimistration(BPA)",
         "Bachelor of Public Admimistration Records and Archieves Management(BPA-RAM)|Bachelor of Public Admimistration Records and Archieves Management(BPA-RAM)",
         "Bachelor of Local Goverment Management(BLGM)|Bachelor of Local Goverment Management(BLGM)",
         "Bachelor of Health Systems Management(BLGM)|Bachelor of Health Systems Management(BLGM)",
         "Certificate in Local Goverment Management(CLGM)|Certificate in Local Goverment Management(CLGM)",
        
         ];
    }
    else if(s1.value == "School of Business(SOB)"){
        var optionArray = ["|", "Master of Business Administration in Corporate Management(MBA-CM)|Master of Business Administration in Corporate Management(MBA-CM)",
         "Master of Science in Accountacy and Finance(MSc.A&F)|Master of Science in Accountacy and Finance(MSc.A&F)", 
         "Master of Science in Procurement and Supply Chain Management(MSc.PSCM)|Master of Science in Procurement and Supply Chain Management(MSc.PSCM)",
          "Master of Science in Enterpreneurship(MSc.Enterpreneurship)|Master of Science in Enterpreneurship(MSc.Enterpreneurship)",
          "Master of Science in Marketing and Management(MSc.MM)|Master of Science in Marketing and Management(MSc.MM)",
          "Bachelor of Accountacy and Finance in Business Sector(BAF-BS)|Bachelor of Accountacy and Finance in Business Sector(BAF-BS)",
          "Bachelor of Accountacy and Finance in Public Sector(BAF-PS)|Bachelor of Accountacy and Finance in Public Sector(BAF-PS)",
          "Bachelor of Business Administration in Marketing Management(BBA-MKT)|Bachelor of Business Administration in Marketing Management(BBA-MKT)",
          "Bachelor of Business Administration in Enterpreneur and Development(BBA-ED)|Bachelor of Business Administration in Enterpreneur and Development(BBA-ED)",
          "Bachelor of Business Administration in Procurement and Logistics Management(BBA-PLM)|Bachelor of Business Administration in Procurement and Logistics Management(BBA-PLM)",
          "Business Management Certificate(BMC)|Business Management Certificate(BMC)",
          "Certificate in Logistics Management (CLGM)|Certificate in Logistics Management (CLGM)",
          ];
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