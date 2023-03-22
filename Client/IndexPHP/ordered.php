<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .row{
            margin-top: 20px;
        }
        tr th{
            text-align: center;
        }
        tr td{
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
        }
        td img{
            width: 90%;
        }
    </style>

</head>



<?php

    include '../DB/Body_DB.php';
    if(isset($_POST['add_to_cart'])){
        $image = $_POST['image'];
        $title = $_POST['title'];
        $color = $_POST['color'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        $total = $price*$qty;
        $query = "INSERT INTO `ordered`(IMAGE,TITLE,COLOR,PRICE,QTY,TOTAL) VALUES ('$image','$title','$color','$price','$qty','$total')";
        $result = mysqli_query($conn,$query);
    }
    
    
    

?>



</head>
<body>
    <h1>Your items added to cart.</h1>
    <table class="container w-50">
        <tr class="row border-bottom">
            <th class="col"></th>
            <th class="col">image</th>
            <th class="col">title</th>
            <th class="col">quantity</th>
            <th class="col">price</th>
            <th class="col">total</th>
        </tr>


<!------------------------------display row from ordered table--------------------------- -->
    <?php 

    
        $query2 = "SELECT * FROM `ordered`";
        $result2 = mysqli_query($conn,$query2);
    while($row = mysqli_fetch_assoc($result2)){
        
        
        $title2 = $row['TITLE'];
        $image2 = $row['IMAGE'];
        $color2 = $row['COLOR'];
        $price2 = $row['PRICE'];
        $qty2 = $row['QTY'];
        $total = $price2*$qty2;
    echo '
    <tr class="row border-bottom">
            <td class="col"><a href="ordered.php?deleteOnName='.$title2.' " class="btn btn-outline-danger">delete</a></td>
            <td class="col"><img src='.$image2.' alt=""></td>
            <td class="col">'.$title2.'</td>
            <td class="col">'.$qty2.'</td>
            <td class="col">$'.$price2.'</td>
            <td class="col">$'.$total.'</td>
        </tr>

    ';
    }


        // ------------------------------------------sum payment---------------------------------------
        $query3 = "SELECT SUM(TOTAL) AS calculate FROM `ordered`";
        $result3 = mysqli_query($conn,$query3);
            while($row3 = mysqli_fetch_assoc($result3)){
                $payment = $row3['calculate'];
            }
    ?>

    <!-- -----------------------------------button for checkout and back------------------------ -->
        <tr class="row">
            <td class="col">
                <a href="Client_index.php" class="btn btn-danger" style="width:100%;margin: 10px auto">back home</a>
            </td>
            <td class="col">
                <a href="ready_to_buy.php" class="btn btn-primary" style="width:100%;margin: 10px auto">Checkout ($<?php echo $payment; ?>)</a>
            </td>
        </tr>
    </table>
</body>



<!-- ------------------------------------ delete from ordered table-------------------------------- -->
<?php
if(isset($_GET['deleteOnName'])){
    $name = $_GET['deleteOnName'];
    $query4 = "DELETE FROM `ordered` WHERE TITLE='$name' ";
    $result4 = mysqli_query($conn,$query4);

    if($result4){
        header('location:ordered.php');
    }else{
        die(mysqli_error($conn));
    }
}


?>


 


