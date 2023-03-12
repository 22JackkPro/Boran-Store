<!-- ----------------------------------Connection---------------------------------------------- -->
<?php
    include '../DB/Body_DB.php';
?>





<!-- ------------------------------------Selected from kroma table--------------------------- -->
<?php
      

      if(isset($_GET['addID'])){
          $p_id = $_GET['addID'];

          #--------------------------select row from kroma tablet-------------------------------
          $p_query = "SELECT * FROM `kroma` WHERE ID=$p_id ";
          $p_result = mysqli_query($conn,$p_query);
          $p_row = mysqli_fetch_assoc($p_result);
          $p_title = $p_row['TITLE'];
          $p_image = $p_row['IMAGE'];
          $p_price = $p_row['PRICE'];
          $p_discount = $p_row['DISCOUNT'];



          #-------------------------insert to client cart table-----------------------------------------
          $cli_query = "INSERT INTO  `clientcart`(ID,TITLE,IMAGE,PRICE,DISCOUNT) VALUES ($p_id,'$p_title','$p_image',$p_price,$p_discount)";
          $cli_result = mysqli_query($conn,$cli_query);

          
          if($cli_result){
              header('location:Client_index.php');
          }else{
              die(mysqli_error($conn));
          }

      }
    
    ?>