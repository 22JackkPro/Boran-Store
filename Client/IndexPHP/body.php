<?php
    include '../DB/Body_DB.php';             
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>body-card</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- css goes here -->
    <link rel="stylesheet" href="../CSS/body.css">
</head>
<body>
    <div class="body" style="margin-top: 25px;">
        <div class="body-container">
            <img src="../image/Body_Image/image1.jpeg" alt="">
        </div>
        <div class="logo">
            <img src="../image/Body_Image/Logo.png" alt="">
        </div>
    </div>
    <div class="title">
        <h2>PRODUCT-STORE</h2>
        <h4>Here you can check out our all products!</h4>
    </div>
    <div class="main-card">
        <div class="card-product">
            <div class="box">
                <img src="../image/Body_Image/krorma5.jpg" alt="">
                <h5>Krorma</h5>
            </div>
            <div class="box">
                <img src="../image/Body_Image/krorma1.jpg" alt="">
                <h5>Krorma</h5>
            </div>
            <div class="box">
                <img src="../image/Body_Image/krorma2.jpg" alt="">
                <h5>Krorma</h5>
            </div>
            <div class="box">
                <img src="../image/Body_Image/krorma3.jpg" alt="">
                <h5>Krorma</h5>
            </div>
        </div>
    </div><a href="./product_Detail.php"></a>
    <!-- start krorma products -->
    <h2>KRORMA PRODUCT</h2>
    <div class="main-card">
        <div class="main-box box-inline"> 
            <?php 
                $comm = "SELECT * FROM `kroma`";
                $result = mysqli_query($conn,$comm);

                while($row = mysqli_fetch_assoc($result)){
                    $id     = $row['ID'];
                    $image  = $row['IMAGE'];
                    $title  = $row['TITLE'];
                    $date   = $row['DATE'];
                    $price          = $row['PRICE'];
                    $discount       = $row['DISCOUNT'];
                    $final_price    = $price-($price*($discount/100));
                    $final_price = $price-($price*($discount/100));
                    if($discount  > 0)
                    {
                        echo '
                        <div class="box-product">
                            <img src="'.$image.'" alt="">
                            <div class="box-detail">
                                <span><strong>'.$title.'</strong><p>'.$date.'</p></span>
                                <span><p style="color:red;text-decoration:line-through;">$'.$price.'</p></span>
                                <span><p style="color:blue;">$'.$final_price.'</p><p style="color:red;text-decoration:line-through;">%'.$discount.'</p></span>
                                <span><a class="btn btn-outline-warning" href="Client_index.php?addID='.$id.'">Add to cart</a><a  class="btn btn-outline-secondary" href="./kroma_product_Detail.php?id='.$id.' ">Detail</a></span>
                            </div>
                        </div> 
                        ';
                    }else 
                    {
                        echo '
                        <div class="box-product">
                            <img src="'.$image.'" alt="">
                            <div class="box-detail">
                                <span><strong>'.$title.'</strong><p>'.$date.'</p></span>
                                <span><p style="color:blue;">$'.$price.'</p></span>
                                <span><a style="margin-top: 35px;" class="btn btn-outline-warning" href="Client_index.php?addID='.$id.'">Add to cart</a><a style="margin-top: 35px;"  class="btn btn-outline-secondary" href="./kroma_product_Detail.php?id='.$id.' ">Detail</a></span>
                            </div>
                        </div> 
                        ';
                    }
                }
            ?>        
        </div>
    </div>
    <!-- start khourm products -->
    <h2>Khourm PRODUCT</h2>
    <div class="main-card">
        <div class="main-box box-inline">
            <?php 
                $comm = "SELECT * FROM `khourm`";
                $result = mysqli_query($conn,$comm);

                while($row = mysqli_fetch_assoc($result)){
                    $id     = $row['ID'];
                    $image  = $row['IMAGE'];
                    $title  = $row['TITLE'];
                    $date   = $row['DATE'];
                    $price          = $row['PRICE'];
                    $discount       = $row['DISCOUNT'];
                    $final_price    = $price-($price*($discount/100));
                    if($discount  > 0)
                    {
                        echo '

                        <div class="box-product">
                            <img src="'.$image.'" alt="">
                            <div class="box-detail">
                                <span><strong>'.$title.'</strong><p>'.$date.'</p></span>
                                <span><p style="color:red;text-decoration:line-through;">$'.$price.'</p></span>
                                <span><p style="color:blue;">$'.$final_price.'</p><p style="color:red;text-decoration:line-through;">%'.$discount.'</p></span>
                                <span><a class="btn btn-outline-warning" href="">Add to cart</a><a  class="btn btn-outline-secondary" href="./khourm_product_Detail.php?id='.$id.'">Detail</a></span>
                            </div>
                            
                        </div> 
                        
                        ';
                    }else
                    {
                        echo '

                        <div class="box-product">
                            <img src="'.$image.'" alt="">
                            <div class="box-detail">
                                <span><strong>'.$title.'</strong><p>'.$date.'</p></span>
                                <span><p style="color:blue;">$'.$price.'</p></span>
                                <span><a style="margin-top: 35px;" class="btn btn-outline-warning" href="">Add to cart</a><a style="margin-top: 35px;"  class="btn btn-outline-secondary"  href="./khourm_product_Detail.php?id='.$id.'">Detail</a></span>
                            </div>
                        </div> 
                        
                        ';
                    }
                
                }
                
            ?>        
        </div>
    </div>
</body>

</html>