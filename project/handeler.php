<?php

$reslt ;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = htmlspecialchars($_POST["num1"]);
    $num2 = htmlspecialchars($_POST["num2"]);
    $op = htmlspecialchars($_POST["op"]);

    switch ($op) {
        case "add":
            $reslt = $num1 + $num2;
            break;
        case "sub":
            $reslt = $num2 - $num1;
            break;
        case"mul":
            $reslt = $num2 * $num1;
            break;
        case "div":
            if (!$num1 == 0) {
                $reslt = $num2 / $num1;
            } else {
                $reslt = "Error: Division by zero";
            }
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Result</title>
  <style>
    body{
        margin: 0;
        padding: 0;
    }
    #cont{
        display: flex;
        align-content: center;
        justify-content: center;
        text-align: center;
        align-items: center;

        width: 100vw;
        height: 100vh;

        background-color: black;

    }
    #cont div {
        display: flex;
        align-content: center;
        justify-content: center;
        text-align: center;

        flex-direction: column;

        width: 900px;
        height: 500px;

        background-color: whitesmoke;
    }
    a{
        text-decoration: none;
        transition: background-color 0.3s ease;
    }
    a:hover {
        transform: scale(1.1);
        color: green;
    }
    #cont div > *{
        color: black;
    }
    span {
        color: green;
    }
  </style>
</head>
<body>
    <div id="cont">
        <div>
            <h2>The Result is: <span><?php echo $reslt; ?></span></h2>
            <a href="calculatorProject.php">Go Back</a>
        </div>
    </div>
</body>
</html>