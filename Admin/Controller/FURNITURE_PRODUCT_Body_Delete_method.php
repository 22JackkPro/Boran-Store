<?php
    include "./Body_DB.php";
    $id = $_GET['id'];
    ?>
        <script>
            if (confirm("Are you sure ?") == true) 
            {
                //furniture product table 
                <?php
                    mysqli_query($conn,"DELETE FROM `furniture_product` WHERE id=$id");
                    header("Location: ../html/FURNITURE_PRODUCT_Product_table.php");
                ?>
            } else 
            {
                <?php
                    header("Location: ../html/FURNITURE_PRODUCT_Product_table.php");
                ?>
            }
        </script>
    <?php
?>
  