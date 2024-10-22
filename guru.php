<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $passErr =  $cpassErr = $addressErr = "";
$name = $email = $pass = $cpass = $address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }  
  
  if (empty($_POST["pass"])) {
    $passErr = "Password is required";
  } else {
    $pass = test_input($_POST["pass"]);
    // check if e-mail address is well-formed
   $pass1='/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/';
      if(!preg_match($pass1, $pass)) {
        $passErr =  "Password should contain lowercase, uppercase,number,special characters!";
    }
    
  }
  
  if (empty($_POST["cpass"])) {
    $cpassErr = "Confirm Password is required";
  }
  else {

  //   if(!$cpass!=$pass){
  //     $cpassErr = "Confirm Password and password should be same";
    // }
    $cpass = test_input($_POST["cpass"]);
    // check if e-mail address is well-formed
   $pass2='/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/';
      if(!preg_match($pass2, $cpass)) {
      $cpassErr = "Confirm Password and password should be same";
      return false;
}
    
  }
  
  if (empty($_POST["address"])) {
    $addressErr = "Address is Required";
  } else {
    $address = test_input($_POST["address"]);
  } 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Password: <input type="password" name="pass" value="<?php echo $pass;?>">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>
  Confirm Password: <input type="password" name="cpass" value="<?php echo $cpass;?>">
  <span class="error">*<?php echo $cpassErr; ?></span>
  <br><br>
  
  Address: <textarea name="address" rows="5" cols="40" value="<?php echo $address;?>"></textarea>
  <span class="error">*<?php echo $addressErr; ?></span>

  <br><br>
  
  <input type="submit" onclick="submit()" name="submit" value="Submit">  
</form>

<?php  
   
    if(isset($_POST['submit'])) {  
     
              if($nameErr == "" && $emailErr == "" && $passErr == "" && $cpassErr == "" && $addressErr == "")
        {
            header("Location: miniprojectoffers.php");        
        }
        
      }
      else {  
        echo "<h3>You didn't filled up the form correctly.!</h3>";  
    }  
?>  




</body>
</html>