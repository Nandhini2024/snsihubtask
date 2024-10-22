<html lang="en">
     <head>
<meta charset="utf-8">
<meta content="width=device width, initial scale=1.0" name="viewport" >
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<script src="https://kit.fontawesome.com/7eb6e8db67.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="my.css">
<title>Login Page</title>
<style type="text/css">
.wrapper{
                background-color: rgb(253, 251, 108);
                 width: 100%;
                 height: 10%;
                 top:0px;
                 position: sticky;
                 ;
                 } 
.minimart_head{
    display: flex;
    flex-wrap: wrap;
}
#minimart{
    background-color: rgb(248, 183, 6);
    border-radius: 20%;
    margin-left: 20%;
    margin-top: 1%;
    border-color: black;
      font-family: Georgia;
}
#minimart:hover{
  background-color: #F6A333; 
} 
#login{
    background-color: rgb(248, 183, 6);
    border-radius: 20%;
    margin-left: 30%;
    margin-top: 1%;
    width: 15%;
    border-color: black;
      font-family: Georgia;
  }
  #login:hover{
   background-color: #F6A333; 
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
            
            <div class="wrapper">
                 <div class="minimart_head">
                  <button type="button" class="btn" id="minimart" onclick="minimart()">miniMart</button>

                 <button type="button" class="btn" id="minimart" onclick="grocery()">Grocery</button>
<select class="form-select" aria-label="Default select example" id="login" onchange="SelectRedirect();">
  <option selected>Login menu</option>
  <option  value="Login Page">Login Page</option>
  <option  value="Register Page">Register Page</option>
</select>
                                 </div>                                  
</div></section>

<div class="container">               
       <!-- <h2>Login Page</h2> --> 

            <div class="details"> 
<form action="" method="POST">
    <h1>Login form</h1>
    UserName:<input type="text" placeholder="Enter your name" name="name"/><br><br>
    Password: <input type="text" placeholder="Enter your password" name="pass" id="password"/><br><br>
    <button>Check</button>
    <!-- <button onclick="back()">Back</button> -->

</form></div></div> 
<?php
$con=mysqli_connect("localhost","root","","cars");

$check="SELECT * FROM miniprojectregister WHERE name = '$_POST[name]' and password = '$_POST[pass]'";
$rs = mysqli_query($con,$check);
$data = mysqli_fetch_array($rs, MYSQLI_NUM);
if($data[0] > 1) {
    echo 
    "<p>Login Success</p><br/>";
    header("Location: miniprojectoffers.php");

}
else
{
   echo 
   '<script>console.log("Invalid Credentials!"); </script>';
// "Invalid Credentials";
//    header("Location: miniprojectregistration.php");


// redirect('Location: formvalidation.php');

// header("Location: formvalidation.php");
    // $insert="insert into duplicatetable (name,email,password,confirmpassword,address) values('$name','$email','$password','$confirmpassword','$address')";
    // if (mysqli_query($con,$insert))
    // {
    //     echo "You are now registered<br/>";
    // }
    // else
    // {
    //     echo "Error adding user in database<br/>";
    // }
}
?>

<script> 
//   setTimeout (function(){
//                 document.getElementById("box").style.display='none';},3000);   
//                 function grocery(){
//                   window.location="miniprojectgrocery.php";

//                 } 
                function grocery(){
                  window.location="miniprojectgrocery.php";
                }
                function minimart(){
                    window.location="miniproject.php";
                        }
                
function SelectRedirect(){
    switch(document.getElementById('login').value)
    {
        case "Login Page":
        window.location="l.php";
        break;

        case "Register Page":
        window.location="r.php";
        break;
    }   
}
            </script> 
            
       
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
                
        </body>
        </html>