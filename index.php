<?php
$charArray = array_merge(range('A', 'Z'), range('a', 'z'),[1,2,3,4,5,6,7,8,9,0,"+","-","!","*"]);
if (isset($_GET["passwordLen"])) {
    $passwordLen = $_GET["passwordLen"];
}else{
    $passwordLen = "unset";
}
include "passwordGen.php";
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>

<body>
    <form action="index.php" method="GET">
        <label for="passwordLen">Password Length: </label>
        <input type="number" name="passwordLen" required>
        <input type="submit">
    </form>
    <div>
        GENERATED PASSWORD:
        <?php
            passGenerator($passwordLen,$charArray);
        ?>
    </div>
</body>

</html>