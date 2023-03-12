<?php
    $Api = 'localhost';
    $ApiDBName = 'branstore';
    $ApiRoot = 'root';
    /**
     * Password if you have
     */
    $ApiPass = '';
    $conn = mysqli_connect($Api,$ApiRoot,$ApiPass,$ApiDBName) or die( mysqli_error($conn)) ;
?>