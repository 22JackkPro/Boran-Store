<?php

    // echo 'Quantity = '.$_POST['qty'];
    // echo '</br>';
    // echo 'Color = '.'<div class="div" style='.'width:100px;height:100px;background-color:'.$_POST['color'].'></div>';
    // echo '</br>';
    // echo 'Title = '.$_POST['title'];
    // echo '</br>';
    // echo 'Total ='.$_POST['price']*$_POST['qty'];
    // echo '</br>';
    // echo 'Image = '.$_POST['image'];

?>





<?php

    include '../DB/Body_DB.php';
    if(isset($_POST['add_to_cart'])){
        $image = $_POST['image'];
        $title = $_POST['title'];
        $color = $_POST['color'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        $query = "INSERT INTO `ordered`(IMAGE,TITLE,COLOR,PRICE,QTY) VALUES ('$image','$title','$color','$price','$qty')";
        $result = mysqli_query($conn,$query);
    }
    
    
    

?>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <div class="odered" style="width:400px;height:auto;margin: 0 auto">
        <!-- <div class="item d-flex p-2 bg-secondary-subtle w-auto h-auto mt-1">
            <div class="image text-center" style="width:200px;height:200px;">
                <img style="width:100%;height:100%" src="../../product_image_storage/1655806680best-furniture-stores-in-bangalore-banner.jpg" alt="">        
            </div>
            <div class="list_item" style="width:100px;height:200px;margin-left:10px;">
                <p>Name : </p>
                <p>Color : </p>
                <p>Price : </p>
                <p>Quantity : </p>
                <p>Total</p>
            </div>
            <div class="item_name" style="width:100px;height:200px;margin-left:5px;text-align:right">
            <p>funiture1</p>
            <p style="width:100%;height:10px;margin-top:28px;background:red;text-align:right"></p>
            <p>100</p>
            <p>2</p>
            <p>200</p>
            </div>

        </div> -->

    <?php 
        $query2 = "SELECT * FROM `ordered`";
        $result2 = mysqli_query($conn,$query2);
    while($row = mysqli_fetch_assoc($result2)){
        
        
        $title2 = $row['TITLE'];
        $image2 = $row['IMAGE'];
        $color2 = $row['COLOR'];
        $price2 = $row['PRICE'];
        $qty2 = $row['QTY'];
        $total = $price2*$qty2;
    echo '
    <div class="item d-flex p-2 bg-secondary-subtle w-auto h-auto mt-1 rounded">
        <div class="image text-center" style="width:200px;height:200px;">
            <img style="width:100%;height:100%;border-radius:10px" src=" '.$image2.' " alt="">        
        </div>
        <div class="list_item" style="width:100px;height:200px;margin-left:10px;font-weight:bold">
            <p>Name : </p>
            <p>Color : </p>
            <p>Price : </p>
            <p>Quantity : </p>
            <p>Total</p>
        </div>
        <div class="item_name" style="width:100px;height:200px;margin-left:5px;text-align:right">
        <p>'.$title2.'</p>
        <p style="width:100%;height:10px;margin-top:28px;background:'.$color2.';text-align:right"></p>
        <p>'.$price2.'</p>
        <p>'.$qty2.'</p>
        <p>'.$total.'</p>
        </div>

    </div>

    ';
    }
    echo '<a href="ready_to_buy.php" class="btn btn-primary" style="width:400px;margin: 10px auto">Ready to Buy</a>';
   ?>
</div>


 


