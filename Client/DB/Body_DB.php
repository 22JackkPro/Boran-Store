<?php
    $myAPI = 'localhost';
    $myAPIRoot = 'root';
    /**
     * enter your password if you have
     */
    $myAPIpassowrd = '';
    // old db name = branstore
    // new db name = boran_store
    $myAPIname = 'boran_store';
    $conn = new mysqli($myAPI,$myAPIRoot,$myAPIpassowrd,$myAPIname);

    if(!$conn)
    {
        die(mysqli_error($conn));
    }
?>