<?php
if (isset($_FILES['image'])) {

    // name of the file 
    $filename = $_FILES['image']['name'];

    // size of the file 
    $filesize = $_FILES['image']['size'];

    // setup a temporary name 
    $file_tmp = $_FILES['image']['tmp_name'];

    // get the file type 
    $file_type = $_FILES['image']['type'];


    echo "File Name is " . $filename;
    echo "<br/> File Size is " . $filesize;
    echo "<br/> Tmp file name " . $file_tmp;
    echo "<br/> File Type is : " . $file_type;

    if (move_uploaded_file($file_tmp, "images/" . $filename)) {
        echo " successfully uploaded ";
    } else {
        echo "upload failed";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" value="Upload">
    </form>

</body>

</html>