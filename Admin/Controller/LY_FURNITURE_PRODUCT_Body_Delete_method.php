<?php
    include "./Body_DB.php";
    // mysqli_query($conn,"DELETE FROM `kroma` WHERE id=$userID");
    // header("Location: ../Index/Admin_index.php");
    $id = $_GET['id'];
    ?>
        <script>
            if (confirm("Are you sure ?") == true) 
            {
                //ly_furniture_product
                <?php
                    mysqli_query($conn,"DELETE FROM `ly_furniture_product` WHERE id=$id");
                    header("Location: ../html/LY_FURNITURE_PRODUCT_Product_table.php");
                ?>
            } else 
            {
                <?php
                    header("Location: ../html/LY_FURNITURE_PRODUCT_Product_table.php");
                ?>
            }
        </script>
    <?php
?>
