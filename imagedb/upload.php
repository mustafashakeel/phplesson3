<?php
require_once "conf.php";

if (isset($_POST["submit"])) {
    if (!empty($_FILES["image"]['name'])) {
        // lets get file info 
        $filename = basename($_FILES["image"]['name']);
        // get file extension using pathinfo https://www.w3schools.com/php/func_filesystem_pathinfo.asp
        $fileType = pathinfo($filename, PATHINFO_EXTENSION);

        $allow_types = array('jpg', 'png', 'webp', 'jpeg', 'gif');
    }
}
