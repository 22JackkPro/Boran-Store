<?php
    $myAPI = 'localhost';
    $myAPIRoot = 'root';
    /**
     * enter your password if you have
     */
    $myAPIpassowrd = '';
    $myAPIname = 'branstore';
    $conn = new mysqli($myAPI,$myAPIRoot,$myAPIpassowrd,$myAPIname);

    if(!$conn)
    {
        die(mysqli_error($conn));
    }
?>