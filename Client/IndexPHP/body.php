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
        <div class="body-container" style="border-radius: 10px;">
            <img src="../image/footer/image1.jpg" alt="">
        </div>
    </div>
    
    <div class="title">
        <h1 class="d-flex justify-content-center">PRODUCT-STORE</h1>
        <h4 class="d-flex justify-content-center">Here you can check all of our products</h4>
    </div>
    <div class="main-card">
        <div class="card-product">
            <div class="box">
                <img src="../image/Image_product/nomal_Chair_.jpg" alt="">
                <h4 class="text-uppercase mt-3" >classic chair</h4>
            </div>
            <div class="box">
                <img src="../image/Image_product/modernLamps.jpg" alt="">
                <h4 class="text-uppercase mt-3" >modern lamps</h4>
            </div>
            <div class="box">
                <img src="../image/Image_product/pri_chair.jpg" alt="">
                <h4 class="text-uppercase mt-3" >Luxery chair</h4>
            </div>
            <div class="box">
                <img src="../image/Image_product/modernSofa.webp" alt="">
                <h4 class="text-uppercase mt-3" >modern sofa</h4>
            </div>
        </div>
    </div><a href="./product_Detail.php"></a>
    <!-- start krorma products -->
    <h2>FURNITURE PRODUCTS</h2>
        
    <!-- FURNITURE PRODUCT goes here -->
    <div class="container mydiv">
        <div class="row">
            <!-- php goes here-->
            <?php


            $comm = "SELECT * FROM `furniture_product`";
            $result = mysqli_query($conn, $comm);

            while ($row = mysqli_fetch_assoc($result)) 
            {
                $id     = $row['ID'];
                $image  = $row['IMAGE'];
                $title  = $row['TITLE'];
                $date   = $row['DATE'];
                $qty    = $row['QTY'];
                $price          = $row['PRICE'];
                $discount       = $row['DISCOUNT'];
                $final_price    = $price - ($price * ($discount / 100));
                if ($discount  > 0) {
                    echo '
                        <div class="col-md-4 productCard mt-5 mb-5" style="width: 500px;">
                            <div class="bbb_deals">
                                <div class="ribbon ribbon-top-right"><span><small class="cross">x </small>'.$qty.'</span></div>
                                <div class="bbb_deals_title text-uppercase">LUXURY FURNITURE</div>
                                <div class="bbb_deals_slider_container ">
                                    <div class=" bbb_deals_item position-relativ ">
                                        <div class="bbb_deals_image" style="height:350px" >
                                            <div class="dis_numb position-absolute bg-danger">'.$discount.' %OFF</div>
                                            <img src="'.$image.'" alt="" style="height:350px" >
                                        </div>
                                        <div class="bbb_deals_content">
                                            <div class="bbb_deals_info_line d-flex justify-content-between ">
                                                <div class="me"></div>
                                                <div class="bbb_deals_item_price_a ml-auto"><strike>$'.$price.'</strike></div>
                                            </div>
                                            <div class="bbb_deals_info_line d-flex flex-row justify-content-between">
                                                <div class="bbb_deals_item_name">'.$title.'</div>
                                                <div class="bbb_deals_item_price ml-auto">$'.$final_price.'</div>
                                            </div>
                                            <div class="contain_btn mt-3 ">
                                                <span class="d-flex justify-content-between">
                                                    <a class="btn btn-outline-success" href="client_cart1.php?addID='.$id.' ">Add to cart</a>
                                                    <a class="btn btn-outline-secondary" href="./LY_FURNITURE_product_Detail.php?id=' . $id . ' ">Detail</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ';
                }else
                {
                    echo '
                        <div class="col-md-4 productCard mt-5 mb-5" style="width: 500px;">
                            <div class="bbb_deals">
                                <div class="ribbon ribbon-top-right"><span><small class="cross">x </small>'.$qty.'</span></div>
                                <div class="bbb_deals_title text-uppercase">LUXURY FURNITURE</div>
                                <div class="bbb_deals_slider_container">
                                    <div class=" bbb_deals_item position-relativ ">
                                        <div class="bbb_deals_image" style="height:370px" >
                                            <img src="'.$image.'" alt="" style="height:350px">
                                        </div>
                                        <div class="bbb_deals_content">
                                            <div class="bbb_deals_info_line d-flex flex-row justify-content-between">
                                                <div class="bbb_deals_item_name">'.$title.'</div>
                                                <div class="bbb_deals_item_price ml-auto">$'.$price.'</div>
                                            </div>
                                            <div class="contain_btn mt-3 ">
                                                <span class="d-flex justify-content-between">
                                                    <a class="btn btn-outline-success" href="client_cart1.php?addID='.$id.' ">Add to cart</a>
                                                    <a class="btn btn-outline-secondary" href="./LY_FURNITURE_product_Detail.php?id=' . $id . ' ">Detail</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ';
                };
            }
            ?>
        </div>
    </div>
    <!--  LUXURY FURNITURE PRODUCT goes here -->
    <h2>LUXURY FURNITURE PRODUCTS</h2>
    <div class="container mydiv">
        <div class="row">
            <!-- php goes here-->
            <?php


            $comm = "SELECT * FROM `ly_furniture_product`";
            $result = mysqli_query($conn, $comm);

            while ($row = mysqli_fetch_assoc($result)) 
            {
                $id     = $row['ID'];
                $image  = $row['IMAGE'];
                $title  = $row['TITLE'];
                $date   = $row['DATE'];
                $qty    = $row['QTY'];
                $price          = $row['PRICE'];
                $discount       = $row['DISCOUNT'];
                $final_price    = $price - ($price * ($discount / 100));
                if ($discount  > 0) {
                    echo '
                        <div class="col-md-4 productCard mt-5 mb-5" style="width: 500px;">
                            <div class="bbb_deals">
                                <div class="ribbon ribbon-top-right"><span><small class="cross">x </small>'.$qty.'</span></div>
                                <div class="bbb_deals_title text-uppercase">LUXURY FURNITURE</div>
                                <div class="bbb_deals_slider_container ">
                                    <div class=" bbb_deals_item position-relativ ">
                                        <div class="bbb_deals_image" style="height:350px" >
                                            <div class="dis_numb position-absolute bg-danger">'.$discount.' %OFF</div>
                                            <img src="'.$image.'" alt="" style="height:350px" >
                                        </div>
                                        <div class="bbb_deals_content">
                                            <div class="bbb_deals_info_line d-flex justify-content-between ">
                                                <div class="me"></div>
                                                <div class="bbb_deals_item_price_a ml-auto"><strike>$'.$price.'</strike></div>
                                            </div>
                                            <div class="bbb_deals_info_line d-flex flex-row justify-content-between">
                                                <div class="bbb_deals_item_name">'.$title.'</div>
                                                <div class="bbb_deals_item_price ml-auto">$'.$final_price.'</div>
                                            </div>
                                            <div class="contain_btn mt-3 ">
                                                <span class="d-flex justify-content-between">
                                                    <a class="btn btn-outline-success" href="client_cart2.php?addID='.$id.' ">Add to cart</a>
                                                    <a class="btn btn-outline-secondary" href="./LY_FURNITURE_product_Detail.php?id=' . $id . ' ">Detail</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ';
                }else
                {
                    echo '
                        <div class="col-md-4 productCard mt-5 mb-5" style="width: 500px;">
                            <div class="bbb_deals">
                                <div class="ribbon ribbon-top-right"><span><small class="cross">x </small>'.$qty.'</span></div>
                                <div class="bbb_deals_title text-uppercase">LUXURY FURNITURE</div>
                                <div class="bbb_deals_slider_container">
                                    <div class=" bbb_deals_item position-relativ ">
                                        <div class="bbb_deals_image" style="height:370px" >
                                            <img src="'.$image.'" alt="" style="height:350px">
                                        </div>
                                        <div class="bbb_deals_content">
                                            <div class="bbb_deals_info_line d-flex flex-row justify-content-between">
                                                <div class="bbb_deals_item_name">'.$title.'</div>
                                                <div class="bbb_deals_item_price ml-auto">$'.$price.'</div>
                                            </div>
                                            <div class="contain_btn mt-3 ">
                                                <span class="d-flex justify-content-between">
                                                    <a class="btn btn-outline-success" href="client_cart2.php?addID='.$id.' ">Add to cart</a>
                                                    <a class="btn btn-outline-secondary" href="./LY_FURNITURE_product_Detail.php?id=' . $id . ' ">Detail</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ';
                };
            }
            ?>
        </div>
    </div>
</body>
</html>