<?php
    include '../App/Body/Database/Body_DB.php';             
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>body-card</title>
    <link rel="stylesheet" href="../CSS/body.css">
    <link rel="stylesheet" href="../../Header/CSS/Client_Header_Navbar.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
    </div>
    <!-- start krorma products -->
    <h2>KRORMA PRODUCT</h2>
    <div class="main-card">
        <div class="main-box">

            <?php 

                $comm = "SELECT * FROM `kroma`";
                $result = mysqli_query($conn,$comm);

                while($row = mysqli_fetch_assoc($result)){
                    $image = $row['IMAGE'];
                    $title = $row['TITLE'];
                    $date = $row['DATE'];
                    $price = $row['PRICE'];
                    $discount = $row['DISCOUNT'];
                    $final_price = $price-($price*($discount/100));
                    if($discount  > 0)
                    {
                        echo '

                        <div class="box-product">
                            <img src="../image/Body_Image/'.$image.'" alt="">
                            <div class="box-detail">
                                <span><strong>'.$title.'</strong><p>'.$date.'</p></span>
                                <span><p style="text-decoration:line-through;">$'.$price.'</p></span>
                                <span><p style="color:blue;">$'.$final_price.'</p><p style="color:red;">%'.$discount.'</p></span>
                                <span><a class="btn btn-outline-warning" href="">Add to cart</a><a  class="btn btn-outline-secondary" href="">Detail</a></span>
                            </div>
                            
                        </div> 
                        
                        ';
                    }else
                    {
                        echo '

                        <div class="box-product">
                            <img src="../image/Body_Image/'.$image.'" alt="">
                            <div class="box-detail">
                                <span><strong>'.$title.'</strong><p>'.$date.'</p></span>
                                <span><p style="color:blue;">$'.$price.'</p></span>
                                <span><a style="margin-top: 35px;" class="btn btn-outline-warning" href="">Add to cart</a><a style="margin-top: 35px;"  class="btn btn-outline-secondary" href="">Detail</a></span>
                            </div>
                        </div> 
                        
                        ';
                    }
                
                }
                
            ?>
            <!-- <div class="box-product">
                <img src="../image/Body_Image/krorma1.jpg" alt="">
                <div class="box-detail">
                    <span><strong>Krorma Khmer</strong><p>0000-00-00</p></span>
                    <span><strong>$20</strong><p>%5</p></span>
                    <span><a class="btn btn-outline-warning" href="">Add to cart</a><a class="btn btn-outline-secondary" href="">Detail</a></span>
                </div>
            </div> -->

            
            
        </div>

        

        


    </div>
    <div class="main-card">
        
        <div class="main-box2">

            


            <div class="box-product">
                <img src="../image/Body_Image/krorma1.jpg" alt="">
                <div class="box-detail">
                    <h3>Krorma Khmer</h3>
                    <h3>20$</h3>
                    <h3><a href="">Detail</a></h3>
                </div>
            </div>
            <div class="box-product">
                <img src="../image/Body_Image/krorma2.jpg" alt="">
                <div class="box-detail">
                    <h3>Krorma Khmer</h3>
                    <h3>20$</h3>
                    <h3><a href="">Detail</a></h3>
                </div>
            </div>
            <div class="box-product">
                <img src="../image/Body_Image/krorma3.jpg" alt="">
                <div class="box-detail">
                    <h3>Krorma Khmer</h3>
                    <h3>20$</h3>
                    <h3><a href="">Detail</a></h3>
                </div>
            </div>
            <div class="box-product">
                <img src="../image/Body_Image/krorma5.jpg" alt="">
                <div class="box-detail">
                    <h3>Krorma Khmer</h3>
                    <h3>20$</h3>
                    <h3><a href="">Detail</a></h3>
                </div>
            </div>
        </div>
    </div>
    <!-- end krorma products -->
    <!-- start karom products -->
    <div class="kaorm">
        <h2>KAORM PRODUCT</h2>
    </div>
    <div class="main-card">
        <div class="main-box">

                

            <?php 

                $comm = "SELECT * FROM `karom`";
                $result = mysqli_query($conn,$comm);

                while($row = mysqli_fetch_assoc($result)){
                    $image = $row['IMAGE'];
                    $title = $row['TITLE'];
                    $date = $row['DATE'];
                    $price = $row['PRICE'];
                    $discount = $row['DISCOUNT'];
                    $final_price = $price-($price*($discount/100));

                    if($discount  > 0)
                    {
                        echo '

                        <div class="box-product">
                            <img src="../image/Body_Image/'.$image.'" alt="">
                            <div class="box-detail">
                                <span><strong>'.$title.'</strong><p>'.$date.'</p></span>
                                <span><p style="text-decoration:line-through;">$'.$price.'</p></span>
                                <span><p style="color:blue;">$'.$final_price.'</p><p style="color:red;">%'.$discount.'</p></span>
                                <span><a class="btn btn-outline-warning" href="">Add to cart</a><a  class="btn btn-outline-secondary" href="">Detail</a></span>
                            </div>
                            
                        </div> 
                        
                        ';
                    }else
                    {
                        echo '

                        <div class="box-product">
                            <img src="../image/Body_Image/'.$image.'" alt="">
                            <div class="box-detail">
                                <span><strong>'.$title.'</strong><p>'.$date.'</p></span>
                                <span><p style="color:blue;">$'.$price.'</p></span>
                                <span><a style="margin-top: 35px;" class="btn btn-outline-warning" href="">Add to cart</a><a style="margin-top: 35px;"  class="btn btn-outline-secondary" href="">Detail</a></span>
                            </div>
                        </div> 
                        
                        ';
                    }
                }

            ?>
            <!-- <div class="box-product">
                <img src="../image/Body_Image/kraom1.jpg" alt="">
                <div class="box-detail">
                    <h3>Kaorm Khmer</h3>
                    <h3>10.5$</h3>
                    <h3><a href="">Detail</a></h3>
                </div>
            </div>
            <div class="box-product">
                <img src="../image/Body_Image/kraom2.jpg" alt="">
                <div class="box-detail">
                    <h3>Karom Khmer</h3>
                    <h3>11.35$</h3>
                    <h3><a href="">Detail</a></h3>
                </div>
            </div>
            <div class="box-product">
                <img src="../image/Body_Image/kraom3.jpg" alt="">
                <div class="box-detail">
                    <h3>Karom Khmer</h3>
                    <h3>8.5$</h3>
                    <h3><a href="">Detail</a></h3>
                </div>
            </div>
            <div class="box-product">
                <img src="../image/Body_Image/kraom4.jpeg" alt="">
                <div class="box-detail">
                    <h3>Karom Khmer</h3>
                    <h3>12.99$</h3>
                    <h3><a href="">Detail</a></h3>
                </div>
            </div> -->
        </div>
    </div>
    <div class="main-card">
        <div class="main-box2k">
            <div class="box-product">
                <img src="../image/Body_Image/kraom1.jpg" alt="">
                <div class="box-detail">
                    <h3>Karom Khmer</h3>
                    <h3>0.5$</h3>
                    <h3><a href="">Detail</a></h3>
                </div>
            </div>
            <div class="box-product">
                <img src="../image/Body_Image/kraom2.jpg" alt="">
                <div class="box-detail">
                    <h3>Karom Khmer</h3>
                    <h3>2.5$</h3>
                    <h3><a href="">Detail</a></h3>
                </div>
            </div>
            <div class="box-product">
                <img src="../image/Body_Image/kraom3.jpg" alt="">
                <div class="box-detail">
                    <h3>Karom Khmer</h3>
                    <h3>99$</h3>
                    <h3><a href="">Detail</a></h3>
                </div>
            </div>
            <div class="box-product">
                <img src="../image/Body_Image/kraom4.jpeg" alt="">
                <div class="box-detail">
                    <h3>Karom Khmer</h3>
                    <h3>20$</h3>
                    <h3><a href="">Detail</a></h3>
                </div>
            </div>
        </div>
    </div>
</body>

</html>