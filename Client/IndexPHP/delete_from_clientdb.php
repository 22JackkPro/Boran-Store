<?php

    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'branstore';

    $conn = new mysqli($hostname,$username,$password,$dbname);

    if(isset($_GET['deleteClientId'])){
        
        $p_id = $_GET['deleteClientId'];

        $query = "DELETE FROM `clientcart` WHERE ID=$p_id ";

        $result = mysqli_query($conn,$query);

        if($result){
            header('location:Client_index.php');
        }else{
            die(mysqli_error($conn));
        }
    }

?>