<!-- ----------------------------------Connection---------------------------------------------- -->
<?php
    include '../DB/Body_DB.php';

    if(isset($_GET['addID'])){
        $id = $_GET['addID'];
        $query = "SELECT * FROM `furniture_product` WHERE ID=$id";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result);
        $image = $row['IMAGE'];
        $title = $row['TITLE'];
        $price = $row['PRICE']-$row['PRICE']*($row['DISCOUNT']/100);
        $qty = $row['QTY'];
        $total = $price*$qty;

        echo '
        <div class="container w-100 h-100 d-flex align-items-center justify-content-center ">
            <form action="ordered.php" method="post" class="w-50 h-50 d-flex">
                <div class="image w-50 p-3">
                    <input type="hidden" name="image" value=" '.$image.' ">
                    <img src='.$image.' alt="" class="w-100 h-100 rounded">
                </div>
                <div class="detai w-50 d-flex flex-column p-3">
                    <span style="display:flex"><strong>Title : </strong>&nbsp;&nbsp;'.$title.'<input style="border:none;background:none" type="hidden" name="title" id="" value=" '.$title.' "></span>
                    <span style="margin-top:15px;display:flex;"><strong>Price : </strong>&nbsp;&nbsp;'.$price.'<input style="border:none;background:none" type="hidden" name="price" id="" value=" '.$price.' "></span>
                    <span style="margin-top:15px;display:flex;"><strong>Quantity : </strong>&nbsp;&nbsp;<input style="width:100px;margin-top:-8px;" type="number" value="1" name="qty" class="form-control"></span>
                    <p style="background-color:greenyellow;margin-top:5px;">Select qty of product you want to buy</p>
                    <input type="submit" name="add_to_cart" value="add to cart" class="btn btn-outline-info w-100 mt-auto">
                    <a href="Client_index.php" class="btn btn-outline-secondary w-100 mt-auto">Cancel</a>
                </div>
            </form>
        </div>
        ';
    }
?>

        
    
    

    



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

