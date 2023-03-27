<?php
    $Api = 'localhost';
    $ApiDBName = 'boran_store';
    $ApiRoot = 'root';
    /**
     * Password if you have
     */
    $ApiPass = '';
    $conn = mysqli_connect($Api,$ApiRoot,$ApiPass,$ApiDBName) or die( mysqli_error($conn)) ;
?>