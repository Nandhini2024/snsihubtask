<html> 
    <head>
</head>
<body>

<?php  
// define variables to empty values  
$nameErr = $emailErr = $passErr = $cpassErr = $addressErr = "";  
$name = $email = $pass = $confirmpass = $address = "";  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
    //String Validation  
        if (emptyempty($_POST["name"])) {  
             $nameErr = "Name is required";  
        } else {  
            $name = input_data($_POST["name"]);  
                // check if name only contains letters and whitespace  
                if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                    $nameErr = "Only alphabets and white space are allowed";  
                }  
        }  
          
        //Email Validation   
        if (emptyempty($_POST["email"])) {  
                $emailErr = "Email is required";  
        } else {  
                $email = input_data($_POST["email"]);  
                // check that the e-mail address is well-formed  
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                    $emailErr = "Invalid email format";  
                }  
         }  
         if (emptyempty($_POST["address"])) {
            $address = "";
          } else {
            $address = input_data($_POST["address"]);
          }
}
         function input_data($data) {  
            $data = trim($data);  
            $data = stripslashes($data);  
            $data = htmlspecialchars($data);  
            return $data;  
          }  
          ?>
          
          <h2>Registration Form</h2>  
<span class = "error">* required field </span>  
<br><br>  
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >    
    Name:   
    <input type="text" name="name">  
    <span class="error">* <?php echo $nameErr; ?> </span>  
    <br><br>  
    E-mail:   
    <input type="email" name="email">  
    <span class="error">* <?php echo $emailErr; ?> </span>  
    <br><br>
    Password:   
    <input type="password" name="pass">  
    <span class="error">* <?php echo $passErr; ?> </span>  
    <br><br>
    C password:   
    <input type="password" name="confirmpass">  
    <span class="error">* <?php echo $cpassErr; ?> </span>  
    <br><br>
    address:   
    <textarea name="address" id="address" rows="8" cols="35"></textarea>
    <span class="error">* <?php echo $addressErr; ?> </span>  
    <br><br>
    <input type="submit" name="submit" value="Submit">
    </form>

    <?php  
    if(isset($_POST['submit'])) {  
    if($nameErr == "" && $emailErr == "") {  
        echo "<h3 color = #FF0001> <b>You have sucessfully registered.</b> </h3>";  
        echo "<h2>Your Input:</h2>";  
        echo "Name: " .$name;  
        echo "<br>";  
        echo "Email: " .$email;  
        echo "<br>";  
        echo "Password: " .$pass;  
        echo "<br>";  
        echo "Confirmpass: " .$confirmpass;  
        echo "<br>";  
        echo "Address: " .$address;  
        echo "<br>";  
        
    } else {  
        echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";  
    }  
    }  
?>  

</body>
</html>


// Password vaidation
// function login(){
// var pwrd=document.getElementById("password").value;
//       var passregex=/^(?=.*[a-z])(?=.*[A-Z])(?=.*[\d])(?=.*[@#$&])[a-zA-Z\d@#$&]{8,16}$/;
//       if(passregex.test(pwrd)){
//         alert("success");}
//               else{
//                 alert("invalid");
//               }
//       }