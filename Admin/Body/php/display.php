<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/display.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<?php

    include '../Database/connection.php';

    $query = "SELECT * FROM `kroma`";
    $result = mysqli_query($conn,$query);

    $col = mysqli_fetch_assoc($result);



?>

<div class="kroma_products">


    <?php
    
        while($col = mysqli_fetch_assoc($result)){
            $id = $col['ID'];
            $image = $col['IMAGE'];
            $title = $col['TITLE'];
            $then = $col['PRICE'];
            $discount = $col['DISCOUNT'];
            $now = $then - ($then*($discount/100));


            echo '
            
            
                <div class="kroma_product">
                    <div class="image">
                        <img class="w-100 h-50 rounded" src="../../../Client/image/Body_Image/'.$image.'" alt="">
                    </div>
                    <div class="title">
                        <b>'.$title.'</b>
                    </div>
                    <div class="thenprice d-flex justify-content-between">
                        <strong>$'.$then.'</strong>
                        <span style="text-decoration:springgreen;">Instock</span>
                    </div>
                    <div class="nowprice d-flex justify-content-between">
                        <p style="text-decoration:indigo;">$'.$now.'</p> 
                       <i style="text-decoration:line-through;color:red">%'.$discount.'</i> 
                    </div>
                    <div class="update_delete d-flex justify-content-between">
                        <a href="" class="btn btn-outline-warning">Update</a>
                        <a href="delete.php?deleteOnid='.$id.'" class="btn btn-outline-danger">Delete</a>
                    </div>
                </div>
            
            
                ';



        }
    
    ?>


    <!-- <div class="kroma_product">
        <div class="image">
            <img class="w-100 h-50 rounded" src="../../../Client/image/Body_Image/image1.jpeg" alt="">
        </div>
        <div class="title">
            <b>Title</b>
        </div>
        <div class="thenprice d-flex justify-content-between">
            <strong>$20</strong>
            <span style="text-decoration:springgreen;">Instoke</span>
        </div>
        <div class="nowprice d-flex justify-content-between">
            <p style="text-decoration:indigo;">$15</p> <i style="text-decoration:line-through;color:red">%10</i>
        </div>
        <div class="update_delete d-flex justify-content-between">
            <a href="" class="btn btn-outline-warning">Update</a>
            <a href="" class="btn btn-outline-danger">Delete</a>
        </div>
    </div> -->





    
</div>
    
</body>
</html>