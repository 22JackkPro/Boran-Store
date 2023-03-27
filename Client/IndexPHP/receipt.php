<head>
    <style>
        *{
    margin: 0;
    padding: 0;
}
.body{
    width: 100%;
    height: auto;
    display: flex;
    justify-content: center;
}
.container{
    width: 400px;
    height: auto;
    margin-top: 50px;
    position: relative;
    box-shadow: 5px 10px 70px #8b6666;
    background-color: #f1f1f1;
}
.logo{
    width: 100%;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.logo img{
    background-color: black;
}
.logo span{
    font-size: 18px;
    font-family: 'Courier New', Courier, monospace;
    margin-left: 10px;
}
.client-name{
    width: 100%;
    height: 40px;
    border-top: dashed 1px black;
    border-bottom: dashed 1px black;
    /* background-color: aqua; */
}
h4{
    text-align: center;
    margin-top: 10px;
    color: rgb(71, 71, 71);
}
.main-box{
    width: 100%;
    height: auto;
    margin-top: 15px;
    /* background-color: aqua; */
}
.main-box span{
    margin-left: 18%;
}
.big-box{
    width: 90%;
    height: auto;
    display: grid;
    grid-template-columns: 33% 33% 33%;
    /* gap: 5px; */
    margin-left: 5%;
    margin-top: 5px;
}
.box{
    height: 40px;
    display: flex;
    box-shadow: 0 0 2px gray;
    justify-content: center;
    background-color: white;
}
.title{
    margin-top: 10px;
}
.title span{
    font-size: 13px;
    margin-top: 20px;
}
p{
    position: absolute;
    right: 15px;
    bottom: 10px;
    font-size: 0.75rem;
}
.total{
    width: 100%;
    height: 40px;
    border-top: dashed 1px black;
    border-bottom: dashed 1px black;
    margin-top: 20px;
    margin-bottom: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    /* background-color: red; */
}
    </style>
</head>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./text.css">
</head>
<body>
    <div class="body">
       <div class="container">
         <div class="logo">
            <img src="../image/Header_Image/Logo.png" width="50px" alt="">
            <span>Boran-Store</span>
         </div>
         <div class="client-name">
            <h4>Here is your Receipt</h4>
         </div>
         <div class="main-box">
            <span>Qty</span>
            <span>Product</span>
            <span>Price</span>
         </div>
         <div class="big-box">
           
            <?php 

                include '../DB/Body_DB.php';
                
                if(isset($_POST['Signin']))
                {   
                    $query = "SELECT * FROM `client` WHERE `Name` = '$_POST[user_Name]' AND `PASSWORD` = '$_POST[user_password]'";
                    $result = mysqli_query($conn,$query);
                    if(mysqli_num_rows($result)==1)
                    {
                        $username = $_POST['user_Name'];
                        $userpassword = $_POST['user_password'];

                        $query1 = "SELECT * FROM `client` WHERE  NAME='$username' ";
                        $result1 = mysqli_query($conn,$query1);
                        $row1 = mysqli_fetch_assoc($result1);
                        $cli_name = $row1['NAME'];
                        $cli_password = $row1['PASSWORD'];
                        
                        if($cli_name = $username && $cli_password = $userpassword)
                        {
                            $query2 = "SELECT * FROM `ordered`";
                            $result2 = mysqli_query($conn,$query2);
                            
                            while($row2 = mysqli_fetch_assoc($result2))
                            {
                                $title = $row2['TITLE'];
                                $qty = $row2['QTY'];
                                $price = $row2['PRICE'];
                                $total = $row2['TOTAL'];


                            echo '
                            <div class="box">
                                <div class="title">
                                    <span>'.$qty.'</span>
                                </div>
                            </div>
                            <div class="box">
                                <div class="title">
                                    <span>'.$title.'</span>
                                </div>
                            </div>
                            <div class="box">
                                <div class="title">
                                    <span>$'.$price.'</span>
                                </div>
                            </div>
                            
                            ';

                            }
                            
                            $query3 = "SELECT SUM(TOTAL) AS calculate FROM `ordered`";
                            $result3 = mysqli_query($conn,$query3);
                            while($row3 = mysqli_fetch_assoc($result3))
                            {
                                $payment = $row3['calculate'];
                            }

                            echo '
                            </div>
                                <div class="total">
                                    <span>Total  :   $'.$payment.'</span>
                                </div>
                                ';
                        }  
                                            
                    }else
                    {
                        echo "<script> alert('Wrong Account')</script>";
                        ?>
                            <script>
                                    window.location.href = "./sign-up.php";
                            </script>
                        <?php
                    }
                }
            ?>
            <p>Thank You for Oder</p>
         </div>

         
       </div>
    </div>
</body>
</html>
</body>