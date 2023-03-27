<?php
    include('../Controller/Body_DB.php');
?>
<html lang="en">
<head>
    <!--Fonts and icons-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"/>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet"/>
    <link rel="stylesheet" href="../css/Insert_product.css">
    <link rel="stylesheet" href="../css/material-dashboard.min.css">
</head>
<body>
    <?php 
        include("./headerNavbar.php");
        include( "./bodySidebar.php");
    ?>
<div class="Main_Container">
        <h1 class="text-uppercase" style="color: #9b2226;" >INSERT luxury Furniture PRODUCT </h1>
        <div class="contain_form">
            <div class="right_Card">
                <form class="form-style-9" action="" method="post" name="form1" enctype="multipart/form-data">
                    <ul>
                        <!-- Title goes here -->
                        <li>
                            <span>Title</span> <input  name="Title" class="field-style field-full align-left" placeholder="Title" />
                        </li>
                        <!-- Qty goes here -->
                        <li>
                            <span>Qty</span><input   name="Qty" class="field-style field-full align-none" placeholder="Qty" />
                        </li>
                        <!-- Price goes here -->
                        <li>
                            <span>Price</span><input name="Price" class="field-style field-full align-left" placeholder="Price" />
                        </li>
                        <!-- Discount goes here -->
                        <li>
                            <span>Discount</span> <input  name="Discount" class="field-style field-full align-left" placeholder="Discount" />
                        </li>
                         <!-- Size goes here -->
                         <li class="d-flex containSize" >
                            <span>Width</span><input name="Width" class="field-style field-full align-left" placeholder="Width"/>
                            <span>Height</span><input name="Height" class="field-style field-full align-right" placeholder="Height" />
                        </li>
                        <!-- image goes here -->
                        <li>
                            <input type="file" name="myImage" class="field-style field-full align-left" placeholder="image" />
                        </li>
                        <!-- button goes here -->
                        <li>
                            <div class="contain_btn">
                                <a href="./choose_type_product_insert.php" type="submit" name="btnGoback" id="btnGoback" class="btnGoback">Go Back</a>
                                <button type="Insert" name="Insert" id="Insert" class="Insert">Insert</button>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    if(isset($_POST['Insert']))
    {
       
        $fnm = $_FILES["myImage"]["name"];
        $dst = "../../product_image_storage/".$fnm;
        $dst1 = "../../product_image_storage/".$fnm; 
        $date = date('Y-m-d');
        move_uploaded_file($_FILES["myImage"]["tmp_name"],$dst);
        mysqli_query($conn,"INSERT into `ly_furniture_product` values(NULL,'$_POST[Title]','$_POST[Qty]','$_POST[Price]','$_POST[Discount]','$_POST[Width]','$_POST[Height]','$date','$dst1')");
    }
?>