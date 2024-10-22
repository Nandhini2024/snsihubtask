<html lang="en">
     <head>
<meta charset="utf-8">
<meta content="width=device width, initial scale=1.0" name="viewport" >
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<script src="https://kit.fontawesome.com/7eb6e8db67.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="my.css">
<title>Registration Page</title>
<style type="text/css">
.wrapper{
                background-color: rgb(253, 251, 108);
                 width: 100%;
                 height: 10%;
                 top:0px;
                 position: sticky;
                 
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
        .container h2{
            text-align:"center";
            font-family: Georgia;

        }
        .details{
            background-color: antiquewhite;
            border: 2px solid black;
        height: 70%;
        width: 50%;
        position: absolute;
        top: 20%;
        left: 25%;
        }
        form{
            margin-top:10px;
            margin-left:10px;
            font-family: Georgia;
        }
        form h4{
            text-align:center;
        }
        form button{
            align:center;
            color: white;
            background-color: purple;
            margin-left:20%;
            width:50%;
        }
        .error {color: #FF0000;}


</style>
        </head>
        <body>
            <section>
                <!-- <div id="box"">   
                 <p style="text-align: center;">Launching application</p>
</div> -->
            
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

            <div class="details">   
          
            <!-- <form action="miniprojectlogin.php" method="POST"> -->
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            <h4>Registration Page</h4><br>
<table>
     <tr>
        <td>Name: </td> 
    <td style="width:70%">
      <!-- <input type="text" name="name" id="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br> -->
  <input type="text" name="name" id="name"/>
 </td>
    </tr>
    <tr>
    <td>Email: </td> 
    <td><input type="email" name="email" id="email"/> </td>
    </tr>
    <tr>
    <td>Password: </td> 
    <td><input type="password" name="pass" id="password1"/> </td>
    </tr>
    <tr>
    <td>Confirm Password: </td> 
    <td><input type="password" name="cpass" id="password2"/> </td>
    </tr>
    <tr>
    <td>Address: </td> 
    <td><textarea name="address" id="address" rows="8" cols="35"></textarea><br></br>
   </td>
    </tr>
           
    </table><br>
    <button type="submit" onclick="register1()">Register</button> 
</form>
        </div></div>   
<?php
$con = new mysqli("localhost","root","","cars");
if($con->connect_err){
    echo "Connection failed";
}
else{
    echo "Connection success";
}
//  $table = "create table miniprojectregister(name varchar(20),email varchar(30),password varchar(20),confirmpassword varchar(20),address varchar(40))";
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
$insert="insert into miniprojectregister (name,email,password,confirmpassword,address) values('$name','$email','$password','$confirmpassword','$address')";
if($con->multi_query($insert)===TRUE)
{
    // echo "values inserted";
    // header("Location: miniprojectoffers.php");
    echo 
    "<p>Login Success</p><br/>";
    header("Location: miniprojectoffers.php");        
  }
else{
    echo "values not inserted, plz check it";
}
?>
<script>

                function grocery(){
                  window.location="miniprojectgrocery.php";
                }
                function minimart(){
                    window.location="miniproject.php";
                        }
                        function register1(){
                    window.location="miniprojectoffers.php";
                        }                      
function SelectRedirect(){
    switch(document.getElementById('login').value)
    {
        case "Login Page":
        window.location="miniprojectlogin.php";
        break;

        case "Register Page":
        window.location="miniprojectregistration.php";
        break;
    }   
}
            </script> 
            
       
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
                
        </body>
        </html>