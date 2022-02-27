  
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>header</title>

      <style>
  
  *{
padding: 0;
margin: 0;
font-family: Arial, Helvetica, sans-serif;
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

@media screen and (max-width:800px){

    .header{
height: 70px;
}

    .header h1{
        font-size:20px;
        padding: 0;
    }
   .header h3{
       font-size: 15px;
   }


   .logo1{
height: 70px;
width: 120px;
float: left;
}

.logo2{
height: 70px;
width: 120px;
float: right;

}

.logo1 img{
height: 70px;
width: 70px;
margin-left: 15px;
}

.logo2 img{
height: 70px;
width: 70px;
margin-right: 15px;
margin-top: -55px;
}

}



@media screen and (max-width:600px){
    .header h1{
        font-size:15px;
        padding: 0;
    }
   .header h3{
       font-size: 10px;
   }

   .logo1{
height: 50px;
width: 90px;
float: left;
}

.logo2{
height: 70px;
width: 90px;
float: right;

}

.logo1 img{
height: 50px;
width: 90px;
margin-left: 10px;
}

.logo2 img{
height: 70px;
width: 90px;
margin-right: 10px;
margin-top: -65px;
}
}



</style>

  </head>

  <body>
      
 
 
  
  <div class="header">
        <div class="logo1"><img src="picha/logo_4.png" alt="logo1"></div>
        <h1>TUCASA MZUMBE UNIVERSITY</h1>
        <div class="logo2"><img src="picha/logo_3.jpg" alt="logo2"></div>
         <h3>Electronic Data Management System </h3>
    </div>

    </body>
  </html>
