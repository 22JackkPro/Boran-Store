<?php

    include '../Database/connection.php';

    if(isset($_GET['deleteOnid'])){
        $id = $_GET['deleteOnid'];

        $query = "DELETE FROM `kroma` WHERE ID=$id";
        $result = mysqli_query($conn,$query);

        if($result){
            header('location:display.php');
        }else{
            die(mysqli_error($conn));
        }
    }

?>