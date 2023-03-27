<?php
    include('../Controller/Body_DB.php');
?>
<head>
    <!--Fonts and icons-->
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"/>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet"/>
    <link rel="stylesheet" href="../css/material-dashboard.min.css">
    <!-- css goes here -->
    <link rel="stylesheet" href="../css/Product_table.css">
</head>
<body>
  <!-- include sidebar and header here -->
  <?php 
      include("./headerNavbar.php");
      include("./bodySidebar.php");
  ?>
  <!-- table gose here -->
  <div class="main_container_table">
    <div class="myheader">
      <div class="contain_header">
        <!-- btn go back -->
        <a class="btnGoback" href="../html/choose_type_product_view_table.php">Go back</a>
        <!-- letters  -->
        <h3>MANAGERMENT TOOL</h3>
        <!-- add more product btn -->
        <a class="btnAdd" href="./LY_FURNITURE_PRODUCT_Insert_product.php">ADD MORE</a>
      </div>
    </div>
    <div class="mytable">
      <table class="content-table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Image</th>
              <th>Title</th>
              <th>Price</th>
              <th>Discount Price</th>
              <th>Full price</th>
              <th>Size</th>
              <th>QTY</th>
              <th>Date</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
              $comm = "SELECT * FROM `ly_furniture_product`";
              $result = mysqli_query($conn,$comm);

              while($row = mysqli_fetch_assoc($result))
              {
                  $id = $row['ID'];
                  $image = $row['IMAGE'];
                  $title = $row['TITLE'];
                  $date = $row['DATE'];
                  $price = $row['PRICE'];
                  $discount = $row['DISCOUNT'];
                  $width = $row["WIDTH"];
                  $height = $row["HEIGHT"];
                  $qty = $row["QTY"];
                  $final_price = $price-($price*($discount/100));
                  echo '
                      <tr>
                          <td> <span>'.$id.'</span> </td>
                          <td><img src="'.$image.' " alt=""></td>
                          <td> <span> '.$title.' </span></td>
                          <td> <span>'.$price.'$</span> </td>
                          <td> <span class="my_dis" >'.$discount.'%</span> </td>
                          <td> <span>'.$final_price.'$ </span></td>
                          <td> <span>'.$width.'cm</span> X <span>'.$height.'cm</span>  </td>
                          <td> <span>'.$qty.'</span> </td>
                          <td> <span>'.$date.'</span> </td>
                          <td>
                              <a href="./LY_FURNITURE_PRODUCT_Product_update.php?id='.$id.'" class="btnView">View</a>
                              <a href="../Controller/LY_FURNITURE_PRODUCT_Body_Delete_method.php?id='.$id.' " onclick="return confirmDelete()" class="btnDelete">Delete</a>
                          </td>
                      </tr>
                      ' ;
              };
            ?>
          </tbody>
        </table>
      </div>
    </div>
    
</body>
<script>
  function confirmDelete()
  {
    return confirm("Are you sure ? ");
  }
</script>
