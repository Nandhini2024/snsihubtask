
<html lang="en">
     <head>
<meta charset="utf-8">
<meta content="width=device width, initial scale=1.0" name="viewport" >
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<script src="https://kit.fontawesome.com/7eb6e8db67.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="my.css">
<title>Reset Password</title>
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
            font-family: Georgia;

        }
        form h2{
            text-align:center;
        }
        form button{
            align:center;
            color: white;
            background-color: purple;
            margin-left:30%;
            width:30%;

        }
        .error {color: #FF0000;}
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
            <div class="details"> 
            <?php
$nameErr = $emailErr = $passErr =  $cpassErr = $addressErr = "";
$name = $email = $pass = $cpass = $address = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["pass"])) {
        $passErr = "Password is required";
      } else {
        $pass = test_input($_POST["pass"]);
       $pass1='/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/';
          if(!preg_match($pass1, $pass)) {
            $passErr =  "Password should contain lowercase, uppercase,number,special characters!";
        }
        
      }
      
      if (empty($_POST["cpass"])) {
        $cpassErr = "Confirm Password is required";
      }
      else {
        $cpass = test_input($_POST["cpass"]);
       $pass2='/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/';
          if(!preg_match($pass2, $cpass)) {
          $cpassErr = "Confirm Password and password should be same";
          return false;
    }
        
      }
      
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
<form action="" method="POST">
    <h2>Credential Reset</h2><br>
    <table>
     <tr>
        <td>Email: </td> 
    <td style="width:70%"><input type="text"  name="email"/></td>
    </tr>
    <tr>
         <td>New Password: </td>
       <td><input type="password" name="pass" id="password1" value="<?php echo $pass;?>">
    <span class="error">* <?php echo $passErr;?></span></td>  
    <!-- <td style="width:70%"><input type="password" name="pass" id="password"/> </td> -->
    </tr>
    <tr>
        <td>Confirm Password: </td>
        <td><input type="password" name="cpass" id="password2" value="<?php echo $cpass;?>">
    <span class="error">*<?php echo $cpassErr; ?></span></td> 
    <!-- <td style="width:70%"><input type="password" name="cpass" id="cpassword"/> </td> -->
    </tr>
    <td></td> 
    <td style="width:70%"><input type="checkbox" onclick="showpassword()">showpassword </td>

    </tr>   
       </table>
       <br>
       <button type="submit" onclick="reset()">Reset Password</button>
</form>

</div></div> 
<?php
    $con = new mysqli("localhost","root","","cars");
    if($con->connect_error)
    {
        echo"Connection failed";
    }
else{
    echo "Connection success";
}
    $email=$_POST['email'];
$newp=$_POST['pass'];
$cnewpass=$_POST['cpass'];
if($newp==$cnewpass)
{
  $update_pwd=("update miniprojectregister set password='$newp', confirmpassword='$cnewpass' where email='$email'");

  if($con->query($update_pwd)===TRUE)
  {
  echo "<br>"."table updated";
  }
  else{
      echo "table not updated, plz check it";
  } 
   echo"Update Sucessfully !!!";
   header("Location: miniprojectlogin.php");
  }
else{
  echo "Connection failed";
  }
?>

<script> 
                function grocery(){
                  window.location="miniprojectgrocery.php";
                }
                function minimart(){
                    window.location="miniproject.php";
                        }
  function showpassword(){
  var pass_word=document.getElementById("password1");
  var cpass_word=document.getElementById("password2");
// console.log("err");
  if(pass_word.type === "password")
  if(pass_word.type === "password" && cpass_word.type === "password")

  {
    pass_word.type="text";
    cpass_word.type="text";

  }else{
    pass_word.type="password";
    cpass_word.type="password";

  }
}
function reset(){
  window.location="miniprojectlogin.php";
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