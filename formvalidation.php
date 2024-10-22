<html>
    <head>
        <style>
                              .wrapper{
                background-color: rgb(253, 251, 108);
                 width: 100%;
                 height: 10%; } 
                
.minimart_head{
    display: flex;
    flex-wrap: wrap;
}
.minimart{
    background-color: rgb(248, 183, 6);
    border-radius: 20%;
    margin-left: 20%;
    margin-top: 1%;
}
.minimart2{
    background-color: rgb(248, 183, 6);
    border-radius: 20%;
    margin-left: 30%;
    margin-top: 1%;
}
.minimart:hover{
   background-color: beige; 
} 
#login{
    background-color: rgb(248, 183, 6);
    border-radius: 20%;
    margin-left: 19%;
    margin-top: 1%;

  }
         .container{
    height: 100%;
    width: 100%;
    background-color: rgb(250, 138, 46);
    position: relative;
    border: 2px solid black;
        }
        .details{
            background-color: antiquewhite;
            border: 2px solid black;
        height: 60%;
        width: 50%;
        position: absolute;
        top: 20%;
        left: 25%;
        }
        form{
            margin-top:10px;
            margin-left:10px;
        }
        form button{
            align:center;
            color: white;
            background-color: purple;
            margin-left:20%;
            width:50%;

        }
        </style>
</head>
<body>
<section>            
            <div class="wrapper">
                 <div class="minimart_head">
                 <button class="minimart" onclick="minimart()">miniMart</button>
                    <button class="minimart" onclick="grocery()">Grocery</button>
                    <!-- <i class="fa-solid fa-cart-shopping" style="top:10px;"></i> -->
                    <select id="login" onchange="SelectRedirect();">
                        <option value="LOGIN">Login</option>
                    <option value="Login Page">Login Page</option>
                    <option value="Register Page">Register Page</option>
                </select>
               </div>                                  
</div></section>

<div class="container"> 
            <div class="details">             
            <form action="" method="POST">
        Name: <input type="text" name="name" id="name"/><br><br>
        Email: <input type="text" name="email" id="email"/><br><br>
        Password: <input type="text" name="pass" id="password"/><br><br>
        Confirm Password: <input type="text" name="cpass" id="confimpassword"/><br><br>
        Address: <input type="text" name="address" id="address"/> <br><br>
    
        <button>Insert</button> 
        

</form>
        </div></div>   
<?php
$con = new mysqli("localhost","root","","cars");
if($con->connect_err){
    echo "Connectio failed";
}
else{
    echo "Connection success";
}
//  $table = "create table parrot(name varchar(20),email varchar(30),password varchar(20),confirmpassword varchar(20),address varchar(40))";
// if($con->query($table)===TRUE)
// {
//     echo "<br>"."table created";
// }
// else {
//     echo "table not created";
// }
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['pass'];
$confirmpassword=$_POST['cpass'];
$address=$_POST['address'];
$insert="insert into parrot (name,email,password,confirmpassword,address) values('$name','$email','$password','$confirmpassword','$address')";
if($con->multi_query($insert)===TRUE)
{
    echo "values inserted";
}
else{
    echo "values not inserted, plz check it";
}
?>
<script>
    function minimart(){
  window.location="miniproject.php";
}
    function grocery(){
                  window.location="miniprojectgrocery.php";
                }
                function SelectRedirect(){
    switch(document.getElementById('login').value)
    {
        case "Login Page":
        window.location="miniprojectlogin.html";
        break;

        case "Register Page":
        window.location="miniprojectregistration.php";
        break;
    }   
}
                </script>
</body>
    </html>