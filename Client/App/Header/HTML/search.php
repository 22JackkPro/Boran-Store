<?php

    $search =  $_POST['search'];
    include '../../Body/Database/Body_DB.php';

    
    $query = "SELECT * FROM `karom` WHERE TITLE='$search'";
    // $query = "SELECT * FROM `kroma` WHERE TITLE='$search'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);

    $id = $row['ID'];
    $image = $row['IMAGE'];
    $title = $row['TITLE'];
    $date = $row['DATE'];
    $price = $row['PRICE'];
    $discount = $row['DISCOUNT'];
    $final_price = $price-($price*($discount/100));
    

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../Body/CSS/body.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <?php
    
        echo '

        <div class="box-product" style="width:250px;">
            <img src="../../../image/Body_Image/'.$image.'" alt="">
            <div class="box-detail">
                <span><strong>'.$title.'</strong><p>'.$date.'</p></span>
                <span><p style="text-decoration:line-through;">$'.$price.'</p></span>
                <span><p style="color:blue;">$'.$final_price.'</p><p style="color:red;">%'.$discount.'</p></span>
                <span><a class="btn btn-outline-warning" href="">Add to cart</a><a  class="btn btn-outline-secondary" href="">Detail</a></span>
            </div>
        
        </div> 
    
        ';

    ?>
</body>
</html>