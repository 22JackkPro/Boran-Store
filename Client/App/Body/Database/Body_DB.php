<?php
    $myAPI = 'localhost';
    $myAPIRoot = 'root';
    /**
     * enter your password if you have
     */
    $myAPIpassowrd = '';
    $myAPIname = 'boranstore';
    $conn = new mysqli($myAPI,$myAPIRoot,'',$myAPIname);

    if(!$conn)
    {
        die(mysqli_error($conn));
    }
?>