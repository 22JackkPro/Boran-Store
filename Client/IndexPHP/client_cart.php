<!-- ----------------------------------Connection---------------------------------------------- -->
<?php
    include '../DB/Body_DB.php';
?>


<script src="jquery-3.6.3.min.js"></script>

<script>
    $(document).ready(function(){

        $('.close').click(function(){
            $('.cart').hide();
        });

    });
</script>






<ul class="cart  rounded"  style="background:whitesmoke; z-index: 10; ">


        <li style="width:100%;height:auto;box-shadow: 0 0 1px black;margin-top:10px;" class="rounded p-1 d-flex align-items-center">
            <p style="width:20%;text-align:center;margin-top:15px;">Image</p>
            <p style="width: 25%;text-align:center;margin-top:15px;">Title</p>
            <p style="width:10%;text-align:center;margin-top:15px;" >%off</p>
            <p style="width:15%;text-align:center;margin-top:15px;">$0</p>
            <p style="width:20%;text-align:center;margin-top:15px;">Amo</p>
           <p style="width:5%;text-align:center;margin-top:18px;" class="close"><i class="fa-solid fa-circle-xmark fs-4"></i></p>
        </li>
        



        <?php

            $query = "SELECT * FROM `clientcart`";
            $result = mysqli_query($conn,$query);

            while($row = mysqli_fetch_assoc($result)){
                $id = $row['ID'];
                $image = $row['IMAGE'];
                $title = $row['TITLE'];
                $discount = $row['DISCOUNT'];
                $price = $row['PRICE'];
                $qty = $row['QTY'];
                $final_price = $price - ($price*($discount/100));



                #-----------------------------------------Display table rows from client cart table----------------------------------------#
                echo '
                
                    <li style="width:100%;height:auto;box-shadow: 0 0 1px black;margin-top:10px;" class="rounded p-1 d-flex align-items-center">
                        <img style="width:20%;height:100%;" src='.$image.' alt="" class="rounded">
                        <p style="width: 25%;text-align:center;margin-top:15px;">'.$title.'</p>
                        <p style="width:10%;text-align:center;margin-top:15px;text-decoration:line-through;color:red;" >%'.$discount.'</p>
                        <p style="width:15%;text-align:center;margin-top:15px;color:blue;">$'.$final_price.'</p>
                        <p style="width:10%;text-align:center;margin-top:15px;">'.$qty.'</p>
                        <!-- <a style="width:10%;text-align:center;" href=""><i class="fa-solid fa-circle-info fs-4"></i></a> -->
                        <a style="width:20%;text-align:center;" href="./delete_from_clientdb.php?deleteClientId='.$id.' "><i class="fa-solid fa-circle-xmark fs-4"></i></a>
                    </li>
                
                ';
            }
        ?>





        
        <!-- <li style="width:100%;height:auto;box-shadow: 0 0 1px black;margin-top:10px;" class="rounded p-1 d-flex align-items-center">
            <img style="width:20%;height:100%;" src="../image/Body_image/image1.jpeg" alt="" class="rounded">
            <p style="width: 25%;text-align:center;margin-top:15px;">Title</p>
            <p style="width:10%;text-align:center;margin-top:15px;" >%50</p>
            <p style="width:15%;text-align:center;margin-top:15px;">100</p>
            <p style="width:10%;text-align:center;margin-top:15px;">99</p>
            <a style="width:10%;text-align:center;" href=""><i class="fa-solid fa-circle-info fs-4"></i></a>
            <a style="width:10%;text-align:center;" href=""><i class="fa-solid fa-circle-xmark fs-4"></i></a>
        </li> -->


        
      

        
        <li style="float:right;width:30%;height:auto;margin-top:10px;" class="rounded p-1 d-flex justify-content-between">
          <a href="" class="btn btn-outline-warning">Pre order</a>
            <a href="" class="btn btn-outline-primary">Buy</a>
        </li>


    
        
      


      <!-- <a href="../../../Index/Client_index.php"></a> -->

 </ul>