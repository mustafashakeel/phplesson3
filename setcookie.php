<?php

setcookie("name", "John", time() + 3600, "/", "", 0);
setcookie("school", "Vanarts", time() + 3600, "/", "", 0);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie </title>
</head>

<body>
    <?php echo " Set Cookie ";
    echo "<br/>";

    echo $_COOKIE["name"];
    echo "<br/>";
    echo $_COOKIE["school"];
    ?>

</body>

</html>