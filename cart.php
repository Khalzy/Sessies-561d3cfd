<?php

session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Bit Academy</title>
</head>

<body>
    <h1>Skateboard <small>(#1)</small></h1>
    <h1>Basketbal <small>(#2)</small></h1>
    <h1>Skeelers <small>(#3)</small></h1>





</body>

</html>

<?php




if (isset($_POST['num'])) {
    $_SESSION['Input'] = $_POST['num'];


    if ($_POST['num'] <= 3 && $_POST['num'] >= 1) {
    } else {
        echo "Only Numbers between 1 & 3";
        exit;
    }
}




if (isset($_POST['num'])) {
    $_SESSION['Input'] = $_POST['num'];

    echo "<h1>Gekozen item is: #{$_SESSION['Input']}</h1>";
} else {
    echo '<form method="POST">
    Keuze:<input type="number" name="num">
    <input type="submit" value="Submit" onclick="">
</form>';
}
