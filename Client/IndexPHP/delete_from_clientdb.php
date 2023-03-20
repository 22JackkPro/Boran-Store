<?php

    include '../DB/Body_DB.php';

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