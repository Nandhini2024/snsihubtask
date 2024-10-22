<html>
<head>
    <style>
        p{
            background-color:green;
        }
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
    <h1>form</h1>
    <input type="text" placeholder="Enter your name" name="name"/><br><br>
    Password: <input type="text" placeholder="Enter your password" name="pass" id="password"/><br><br>
    <button>Check</button>
    <!-- <button onclick="back()">Back</button> -->

</form></div></div>
<?php
$con=mysqli_connect("localhost","root","","cars");

$check="SELECT * FROM duplicatetable WHERE name = '$_POST[name]' and password = '$_POST[pass]'";
$rs = mysqli_query($con,$check);
$data = mysqli_fetch_array($rs, MYSQLI_NUM);
if($data[0] > 1) {
    echo 
    // "<p>Login Success</p><br/>";
    '<script type="text/javascript">

            window.onload = function () { alert("Login Success");  }
            window.location.href="miniprojectgrocery.php";

// </script>';
}
else
{
   echo 
'<script type="text/javascript">

            window.onload = function () { alert("Invalid Credentials"); 
                alert("Please register");  }

</script>';

redirect('formvalidation.php');
header("Location: formvalidation.php");

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
</body>
    </html>



