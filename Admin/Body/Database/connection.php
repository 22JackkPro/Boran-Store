<?php

    $conn = new mysqli('localhost','root','','boranstore');

    if(!$conn){
        die(mysqli_error($conn));
    }

?>