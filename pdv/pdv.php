<?php
$v_error = "";
$value = "";
$prec = "";

function validate($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    if (empty($_POST["value"])) {
        $v_error = "Input field for value can't be empty";
    } else {
        $value = validate($_POST["value"]);
        $prec  = validate($_POST["prec"]);

        if (!is_numeric($value)) {
            $v_error = "Value needs to be numeric.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDV</title>
</head>
<body>
    <form method="post">
        <input type="text" name="value" placeholder="Enter price">

        <select name="prec">
            <option value="10">10%</option>
            <option value="20" selected>20%</option>
            <option value="25">25%</option>
        </select>

        <br><br>
        <input type="submit" value="Calculate">
    </form>

</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === "POST" && empty($v_error)) {
    $result = $value * (1 + $prec / 100);

    echo "<h2>Result</h2>";
    echo "<p>Price with PDV: $result</p>";
} elseif (!empty($v_error)) {
    echo "<p style='color:red;'>$v_error</p>";
}
?>
