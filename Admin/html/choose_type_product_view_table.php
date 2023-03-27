<!DOCTYPE html>
<html lang="en">
<head>
   <!--Fonts and icons-->
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"/>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet"/>
    <link rel="stylesheet" href="../css/material-dashboard.min.css">
    <link rel="stylesheet" href="../css/choose_type_product_view_table.css">
</head>
<body>
    <?php 
        include('./headerNavbar.php');
        include("./bodySidebar.php");
    ?>
    <div class="Main_container">
        <h1>CHOOSE PRODUCT TYPE TO VIEW</h1>
        <div class="contain_pro_types">
            <!-- kroma type -->
            <a href="./FURNITURE_PRODUCT_Product_table.php">
                <div class="card productCard">
                    <img src="../image/new_image/1655806680best-furniture-stores-in-bangalore-banner.jpg" 
                        class="card-img-top"
                        alt="img">
                    <div class="card-body myletters">
                        <h4 class="text-uppercase" >Furniture product type</h4>
                        <p class="card-text text-uppercase">
                            VIEW your Furniture product here
                        </p>
                    </div>
                </div>
            </a>
            <!-- khorm type -->
            <a href="./LY_FURNITURE_PRODUCT_Product_table.php">
                <div class="card productCard">
                    <img src="../image/new_image/download (1).jpg" 
                        class="card-img-top"
                        alt="img">
                    <div class="card-body myletters ">
                        <h4>luxury Furniture product type</h4>
                        <p class="card-text text-uppercase">
                            VIEW your luxury Furniture product here
                        </p>
                    </div>
                </div>
            </a>
        </div>  
    </div>
</body>
</html>