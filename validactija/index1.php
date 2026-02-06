<?php
$name = $email = $comment = "";
$name_error = $email_error = $comment_error = "";

function validate_passed_data($data) {
    return htmlspecialchars(stripslashes(trim($data)), ENT_QUOTES, 'UTF-8');
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (empty($_POST["name"])) {
        $name_error = "Name is required";
    } else {
        $name = validate_passed_data($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
            $name_error = "Name can only contain letters and spaces";
        }
    }

    if (empty($_POST["email"])) {
        $email_error = "Email is required";
    } else {
        $email = validate_passed_data($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Invalid email format";
        }
    }

    if (empty($_POST["comment"])) {
        $comment_error = "Comment is required";
    } else {
        $comment = validate_passed_data($_POST["comment"]);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacija Unosa I</title>
    <style>
        :root {
            --color-success: green;
            --color-error: red;
        }

        .success {
            color: var(--color-success);
        }

        .error {
            color: var(--color-error);
        }

        textarea {
            max-width: 200px;
        }
    </style>
</head>
<body>
    <form method="post">
    <label>Name:</label><br>
    <input type="text" name="name">
    <span class="error"><?php echo $name_error; ?></span><br><br>

    <label>Email:</label><br>
    <input type="text" name="email">
    <span class="error"><?php echo $email_error; ?></span><br><br>

    <label>Comment:</label><br>
    <textarea name="comment"></textarea>
    <span class="error"><?php echo $comment_error; ?></span><br><br>

    <input type="submit" value="Send">
</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" &&
    empty($name_error) &&
    empty($email_error) &&
    empty($comment_error)) {

    echo "<h2>Sent Form</h2>";
    echo "<p class='success'>Name: $name</p>";
    echo "<p class='success'>Email: $email</p>";
    echo "<p class='success'>Comment: $comment</p>";
}
?>
