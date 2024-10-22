<?php
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);

    $con = new mysqli("localhost", "root", "", "taskrecluse");

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $stmt = $con->prepare("SELECT password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashedPassword);
        $stmt->fetch();
        if (password_verify($password, $hashedPassword)) {
            $_SESSION['email'] = $email;
            header("Location: miniprojectgrocery.php");
            exit();
        } else {
            $error = "Invalid password.";
        }
    } else {
        $error = "No account found with that email.";
    }

    $stmt->close();
    $con->close();
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
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #EDD582;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 400px;
            padding: 20px;
            background-color: #F6FA78;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #B4A909;
            border-color: #461803;
        }
        .btn-primary:hover {
            background-color: #9AB409;
            border-color: #461803;
        }

        .btn-secondary {
            background-color: #B4A909;
            border-color: #461803;
        }
        .btn-secondary:hover {
            background-color: #9AB409;
            border-color: #461803;
        }
        .text-danger {
            color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Login Page</h2>
        <form action="" method="post">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control <?php echo !empty($emailErr) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
        <?php if (!empty($emailErr)): ?>
            <div class="invalid-feedback">
                <?php echo $emailErr; ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control <?php echo !empty($passErr) ? 'is-invalid' : ''; ?>" id="password" name="password">
        <?php if (!empty($passErr)): ?>
            <div class="invalid-feedback">
                <?php echo $passErr; ?>
            </div>
        <?php endif; ?>
    </div>

    <button type="submit" class="btn btn-primary w-100">Login</button>
    <button type="button" class="btn btn-secondary w-100 mt-2" onclick="window.history.back();">Back</button>

</form>

        <p class="mt-3 text-center">Not registered? <a href="miniprojectregistration.php">Register here</a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
