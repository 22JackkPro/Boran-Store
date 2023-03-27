<?php
    include('../DB/Body_DB.php');
?>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/product_Detial.css">
</head>
<body>
    <?php 
        include('./Client_Header_navbar.php'); 
    ?>
    <!-- contain detail goes here -->
    <div class="main_contain">
        <div class="container mycontainer">
            <!-- Start Detail main -->
                <?php
                    $id = $_GET['id'];
                    $res = mysqli_query($conn,"SELECT * FROM `furniture_product` WHERE ID = $id");
                    while($row=mysqli_fetch_array($res))
                    { 
                        $Title      =$row["TITLE"];
                        $Qty        =$row["QTY"];
                        $Price      =$row["PRICE"];
                        $Discount   =$row["DISCOUNT"];
                        $Width      =$row["WIDTH"];
                        $Height     =$row["HEIGHT"];
                        $Date       =$row["DATE"];
                        $Image      =$row["IMAGE"];
                    }
                    $final_price;
                    $final_price = $Price-($Price*($Discount/100)); 
                        // conatain image goes here
                        echo '
                            <div class="detail-main">
                                <div class="detail-img-pro">
                                    <img src="'.$Image.'" alt="">
                                </div>
                                <!-- Start detail description -->
                                <div class="description-pro">
                            ';
                        if($Discount > 0 )
                        {
                            echo '
                                    <div class="contain_detail">
                                        <h2>Title : <span>&nbsp; '.$Title.'  </span> </h2>
                                        <h2>Size : <span>&nbsp;'.$Width.'cm</span>&nbsp;X&nbsp;<span>'.$Height.'cm</span> </h2>
                                        <h2>Price : <span>&nbsp;'.$Price.' </span>  </h2>
                                        <h2>Discount : <span>&nbsp; '.$Discount.' </span> </h2>
                                        <h2>Final price : <span>&nbsp;'.$final_price.' </span> </h2>
                                        <h2>Quantity : <span>&nbsp; '.$Qty.' </span> </h2>
                                        <h2>Date : <span>&nbsp; '.$Date.' </span> </h2>
                                    </div>
                                ';
                        }else
                        {
                            echo '
                                    <div class="contain_detail" >
                                        <h2>Title = <span>&nbsp;'.$Title.' </span> </h2>
                                        <h2>Size : <span>&nbsp;'.$Width.'cm</span>&nbsp;X&nbsp;<span'.$Height.'cm</span> </h2>
                                        <h2>Price = <span>&nbsp;'.$Price.' </span> </h2>
                                        <h2>Quantity = <span>&nbsp;'.$Qty.' </span> </h2>
                                        <h2>Date = <span>&nbsp;'.$Date.'</span> </h2>
                                    </div>
                                ';
                        };
                        echo '
                                    <!-- Start Add to card -->
                                    <div class="contain_btn">
                                        <div class="btn">
                                            <a href="./Client_index.php">Go Back</a>
                                        </div>
                                        <div class="btn">
                                            <a href="client_cart1.php?addID='.$id.' ">Add To Card</a>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        ';
                ?>
            
            <!-- Start sugg Prod -->
            <div class="sugg-prod">
                <div class="contain_letters">
                    <h1>Suggest Products</h1>
                </div>
                <div class="contain_sug">
                    <?php
                        $id = $_GET['id'];
                        $res = mysqli_query($conn,"SELECT * FROM `furniture_product` LIMIT 3;");
                        while($row=mysqli_fetch_array($res))
                        {
                            $Title      =$row["TITLE"];
                            $Qty        =$row["QTY"];
                            $Price      =$row["PRICE"];
                            $Discount   =$row["DISCOUNT"];
                            $Width       =$row["WIDTH"];
                            $Height       =$row["HEIGHT"];
                            $Date       =$row["DATE"];
                            $Image      =$row["IMAGE"];
                            $final_price = $Price-($Price*($Discount/100)); 
                            
                            echo '
                                <div class="sugg-box">
                                    <img src=" '.$Image.' " alt="">
                                </div>
                                ';
                        }
                    ?>
                </div>
            </div>
            <!-- End sugg Prod -->
        </div>
    </div>
    <?php
     include('./footer.php')
    ?>
</body>
 
</html>