<?php
    if(isset($_POST['submit'])){
        $num1 = $_POST['num1'];
        $op = $_POST['operator'];
        $num2 = $_POST['num2'];
        $result = 0;

        switch($op){
            case "+":
                $result =  $num1 + $num2;
            break;
            case "-":
                $result =  $num1 - $num2;
            break;
            case "*":
                $result =  $num1 * $num2;
            break;
            case "/":
                $result =  $num1 / $num2;
            break;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Simple Calculator</title>
</head>
<body>
    <form method="POST">
        <h1 class="title">Calculator in PHP</h1>
        <p>Operators: <b>+</b>  <b>-</b>  <b>*</b>  <b>/</b></p>
        <input type="text" name="num1" class="send-box" placeholder="First Number">
        <input type="text" name="operator" class="send-box" placeholder="Operator">
        <input type="text" name="num2" class="send-box" placeholder="Second Number"><br>
        <input type="submit" value="Done!" class="btn" name="submit">
    </form>
    <input type="text" name="result" class="send-box" value="<?= $result ?>" disabled>
</body>
</html>