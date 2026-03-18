<?php
$user_name = $user_email = "";
$user_name_error = $user_email_error = $user_password_error = "";
$success_message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    function validate_data($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    if (!empty($_POST["user_name"])) {
        $user_name = validate_data($_POST["user_name"]);
        if (strlen($user_name) < 3 || strlen($user_name) >= 200) {
            $user_name_error = "Username must be 3-199 characters.";
        } elseif (!preg_match("/^[a-zA-Z0-9_!.]+$/", $user_name)) {
            $user_name_error = "Username can only contain letters, numbers, _!.";
        }
    } else {
        $user_name_error = "Username cannot be empty.";
    }

    if (!empty($_POST["email"])) {
        $user_email = validate_data($_POST["email"]);
        if (!preg_match("/^(?=.{6,254}$)(?=.{1,64}@)[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/", $user_email)) {
            $user_email_error = "Invalid email address.";
        }
    } else {
        $user_email_error = "Email cannot be empty.";
    }

    if (!empty($_POST["password"])) {
        $user_password = $_POST["password"];
        if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $user_password)) {
            $user_password_error = "Password must be 8+ chars, include uppercase, lowercase, number & special char.";
        }
    } else {
        $user_password_error = "Password cannot be empty.";
    }

    if (!$user_name_error && !$user_email_error && !$user_password_error) {

        $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

        $db_hostname      = "localhost"; 
        $db_username      = "root"; 
        $db_password      = ""; 
        $db_database_name = "";
        
        $connection = new mysqli( 
            $db_hostname, $db_username,
            $db_password, $db_database_name 
        );

        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        $query = $connection->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $query->bind_param("sss", $user_name, $user_email, $hashed_password);

        if ($query->execute()) {
            $success_message = "User registered successfully";
            $user_name = $user_email = "";
        } else {
            $user_password_error = "Database error: " . $query->error;
        }

        $connection->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register</title>
<style>
*{box-sizing:border-box;margin:0;padding:0;font-family:'Segoe UI',sans-serif;}
body{background:linear-gradient(135deg,#6a11cb,#2575fc);height:100vh;display:flex;justify-content:center;align-items:center;color:#333;}
.container{background:#fff;padding:40px 30px;border-radius:15px;width:100%;max-width:450px;box-shadow:0 15px 25px rgba(0,0,0,0.2);}
h2{text-align:center;margin-bottom:30px;color:#2575fc;}
form{display:flex;flex-direction:column;}
label{margin-bottom:5px;font-weight:600;}
input[type="text"],input[type="email"],input[type="password"]{padding:12px 15px;margin-bottom:20px;border:1px solid #ccc;border-radius:8px;font-size:16px;transition:0.3s;}
input[type="text"]:focus,input[type="email"]:focus,input[type="password"]:focus{border-color:#2575fc;outline:none;box-shadow:0 0 5px rgba(37,117,252,0.5);}
.error{color:#e74c3c;font-size:14px;margin-top:-15px;margin-bottom:10px;}
.success{color:#27ae60;text-align:center;margin-bottom:15px;}
button{padding:15px;background:#2575fc;color:#fff;border:none;border-radius:8px;font-size:16px;font-weight:bold;cursor:pointer;transition:0.3s;}
button:hover{background:#6a11cb;}
@media(max-width:500px){.container{padding:30px 20px;}}
</style>
</head>
<body>
<div class="container">
<h2>Create Account</h2>
<?php if($success_message) echo "<div class='success'>$success_message</div>"; ?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" novalidate>
<label for="user_name">Username</label>
<input type="text" id="user_name" name="user_name" placeholder="Enter username" required value="<?php echo htmlspecialchars($user_name); ?>">
<?php if($user_name_error) echo "<div class='error'>$user_name_error</div>"; ?>

<label for="email">Email</label>
<input type="email" id="email" name="email" placeholder="Enter email" required value="<?php echo htmlspecialchars($user_email); ?>">
<?php if($user_email_error) echo "<div class='error'>$user_email_error</div>"; ?>

<label for="password">Password</label>
<input type="password" id="password" name="password" placeholder="Enter password" required>
<?php if($user_password_error) echo "<div class='error'>$user_password_error</div>"; ?>

<button type="submit">Register</button>
</form>
</div>
</body>
</html>
