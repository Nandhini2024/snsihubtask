<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

$nameErr = $emailErr = $passErr = $cpassErr = $addressErr = "";
$name = $email = $pass = $cpass = $address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["pass"])) {
        $passErr = "Password is required";
    } else {
        $pass = test_input($_POST["pass"]);
        $passPattern = '/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/';
        if (!preg_match($passPattern, $pass)) {
            $passErr = "Password should contain lowercase, uppercase, number, and special characters!";
        }
    }

    if (empty($_POST["cpass"])) {
        $cpassErr = "Confirm Password is required";
    } else {
        $cpass = test_input($_POST["cpass"]);
        if ($pass !== $cpass) {
            $cpassErr = "Passwords do not match";
        }
    }

    if (empty($_POST["address"])) {
        $addressErr = "Address is required";
    } else {
        $address = test_input($_POST["address"]);
    }

    if (empty($nameErr) && empty($emailErr) && empty($passErr) && empty($cpassErr) && empty($addressErr)) {
        $con = new mysqli("localhost", "root", "", "taskrecluse");

        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        $stmt = $con->prepare("INSERT INTO users (name, email, password, address) VALUES (?, ?, ?, ?)");
        $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
        $stmt->bind_param("ssss", $name, $email, $hashedPassword, $address);

        if ($stmt->execute()) {
            echo "<p class='text-success'>Registration successful. <a href='login.php'>Login here</a></p>";
        } else {
            echo "<p class='text-danger'>Error: " . $stmt->error . "</p>";
        }

        $stmt->close();
        $con->close();
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #EDD582; /* Light background color for the whole page */
        }
        .container {
            max-width: 600px;
            margin-top: 50px;
            padding: 30px;
            background-color: #F6FA78; /* White background color for the container */
            border-radius: 8px; /* Rounded corners for the container */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        }
        .form-control.is-invalid {
            border-color: pink;
        }
        .invalid-feedback {
            display: block;
        }
        .btn-primary {
            background-color: #B4A909;
            border-color: #461803;
        }
        .btn-primary:hover {
            background-color: #9AB409;
            border-color: #461803;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Registration Page</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control <?php echo !empty($nameErr) ? 'is-invalid' : ''; ?>" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>">
                <div class="invalid-feedback"><?php echo $nameErr; ?></div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control <?php echo !empty($emailErr) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
                <div class="invalid-feedback"><?php echo $emailErr; ?></div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control <?php echo !empty($passErr) ? 'is-invalid' : ''; ?>" id="password" name="pass">
                <div class="invalid-feedback"><?php echo $passErr; ?></div>
            </div>

            <div class="mb-3">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control <?php echo !empty($cpassErr) ? 'is-invalid' : ''; ?>" id="cpassword" name="cpass">
                <div class="invalid-feedback"><?php echo $cpassErr; ?></div>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control <?php echo !empty($addressErr) ? 'is-invalid' : ''; ?>" id="address" name="address" rows="3"><?php echo htmlspecialchars($address); ?></textarea>
                <div class="invalid-feedback"><?php echo $addressErr; ?></div>
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
        </form>
        <p class="mt-3">Already registered? <a href="miniprojectlogin.php">Login here</a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
