<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sidenavbar</title>


   
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

    </style>
</head>

<body>

    <div class="left_pannel" style="float: left; width: 20%;background: #ccb6c1;">


        <div class="sub_content">
            <ul class="nav_ul">
             <li><a class="active" href="#"><i class="fas fa-home"></i>Menu</a></li>
 
             <li><a href="member.php">View all members</a></li>
             <li><a href="report.php">My reports</a></li>
             <li><a href="anoucement.php">Anoucements</a></li>
             <li><a href="goal.php">Goals</a></li>
             <li><a href="change_pass.php">Change password</a></li>
             <li><a href="login.php">Logout</a></li>
            
             </ul>
         </div>

    </div>


</body>
</html>