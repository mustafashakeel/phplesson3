<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reading a file </title>
</head>

<body>

    <?php
    $filename = "myfile.txt";
    $file = fopen($filename, "r");

    if ($file == false) {
        echo " not able to read ";
        exit();
    }


    $filesize = filesize($filename);
    $text = fread($file, $filesize);

    echo $file;
    echo "<br/>";

    echo $filename;
    echo "<br/>";
    echo $filesize;
    echo "<br/>";
    echo $text;
    fclose($file);



    ?>

</body>

</html>