<?php
    include('../Controller/Body_DB.php');
    $id = $_GET['id'];
    $Title      ='';
    $Price      ='';
    $Discount   ='';
    $Width      ='';
    $Height     ='';
    $Image      ='';
    $Date       ='';
    $Qty        ='';
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
    $final_price = $Price-($Price*($Discount/100)); 
?>
<html>
    <head>
         <!--Fonts and icons-->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"/>
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet"/>
        <!-- CSS -->
        <link rel="stylesheet" href="../css/material-dashboard.min.css">
        <!-- CSS own page -->
        <link rel="stylesheet" href="../css/Product_Update_Detail.css">
    </head>
    <body>
        <?php
            include('./headerNavbar.php');
            include('./bodySidebar.php');
        ?>
        <div class="Main_Container">
            <div class="left_Card">
                
                <img src="<?php echo $Image; ?> " alt="">
            </div>
            <div class="right_Card">
                <form class="form-style-9" action="" method="post" name="form1" enctype="multipart/form-data">
                    <ul>
                        <!-- id goes here -->
                        <li>
                            <span>id</span>  <input value="<?php echo $id; ?>" type="ID" name="id" class="field-style field-full align-left" placeholder="ID" readonly />
                        </li>
                        <!-- Title goes here -->
                        <li>
                            <span>Title</span> <input value="<?php echo $Title; ?>" name="Title" class="field-style field-full align-left" placeholder="Title" />
                        </li>
                        <!-- Qty goes here -->
                        <li>
                            <span>Qty</span><input value="<?php echo $Qty; ?>"  name="Qty" class="field-style field-full align-none" placeholder="Qty" />
                        </li>
                        <!-- Price goes here -->
                        <li>
                            <span>Price</span><input value="<?php echo $Price; ?>"$  name="Price" class="field-style field-full align-left" placeholder="Price" />
                        </li>
                        <!-- Discount goes here -->
                        <li>
                            <span>Discount</span> <input value="<?php echo $Discount; ?>"% name="Discount" class="field-style field-full align-left" placeholder="Discount" />
                        </li>
                        <!-- Size goes here -->
                        <li class="d-flex containSize" >
                            <span>Width</span><input value="<?php echo $Width; ?>" name="Width" class="field-style field-full align-left" placeholder="Width"/>
                            <span>Height</span><input value="<?php echo $Height; ?>" name="Height" class="field-style field-full align-right" placeholder="Height" />
                        </li>
                        <!-- Date goes here -->
                        <li>
                            <span>Date</span><input value="<?php echo $Date; ?>" name="Date" class="field-style field-full align-left" placeholder="Date" readonly />
                        </li>
                        <!-- final_price goes here -->
                        <li>
                            <span>final_price</span><input value="<?php echo $final_price; ?>$" name="final_price" class="field-style field-full align-left" placeholder="Full price" readonly />
                        </li>
                        <!-- image goes here -->
                        <li>
                            <input type="file" name="myImage" class="field-style field-full align-left" placeholder="image" />
                        </li>
                        <!-- button goes here -->
                        <li>
                            <div class="containBTN" >
                                <a href="./FURNITURE_PRODUCT_Product_table.php" type="submit" name="btnGoback" id="btnGoback" class="btnGoback">Go Back</a>
                                <button type="Update" name="Update" id="Update" class="Update">
                                    Update
                                </button>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </body>
</html>  
    <?php
        if(isset($_POST['Update']))
        {
            $fnm = $_FILES["myImage"]["name"];
            if($fnm=="")
            {
                if(!empty($_POST['Title']) && !empty($_POST['Price']) && !empty($_POST['Width']) && !empty($_POST['Height']) && !empty($_POST['Qty']))
                {
                    mysqli_query($conn,"UPDATE `furniture_product` SET  TITLE='$_POST[Title]', QTY='$_POST[Qty]', PRICE='$_POST[Price]', DISCOUNT='$_POST[Discount]', WIDTH='$_POST[Width]', HEIGHT='$_POST[Height]' WHERE ID=$id ");
                    ?>
                        <script>
                            window.location.href = "./FURNITURE_PRODUCT_Product_table.php";
                        </script>
                    <?php
                }else
                {
                    ?>
                        <script>
                            alert("You must complete the form");
                        </script>
                    <?php
                }
             }else
            {
                $dst = "../../product_image_storage/".$fnm;
                $dst1 = "../../product_image_storage/".$fnm; 
                move_uploaded_file($_FILES["myImage"]["tmp_name"],$dst);
                mysqli_query($conn,"UPDATE `furniture_product` SET  TITLE='$_POST[Title]', QTY='$_POST[Qty]', PRICE='$_POST[Price]', DISCOUNT='$_POST[Discount]', WIDTH='$_POST[Width]', HEIGHT='$_POST[Height]',IMAGE='$dst1' WHERE ID=$id ");
                // header("Location: ./FURNITURE_PRODUCT_Product_table.php");
                ?>
                    <script>
                        window.location.href = "./FURNITURE_PRODUCT_Product_table.php";
                    </script>
                <?php
            }
        }
    ?>