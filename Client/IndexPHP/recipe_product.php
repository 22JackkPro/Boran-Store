<div class="container" style="width:100%;height:100%;display:flex;align-items:center;justify-content:center">

    <div class="list" style="width:300px;height:650px;box-shadow: 0 0 3px gray;padding:15px">

            <h4 style="width:100%;text-align:center">Receipt</h>
            <h3 style="width:100%;text-align:center;color:blue"><?php if(isset($_POST['Signin'])) echo $_POST['user_Name']; ?></h3>
            <h5 style="width:100%;text-align:center">Thank you for buy products from our site.</h5>

            <div class="item" style="width:100%;display:flex;justify-content:space-evenly;margin-top:10px;">
                <p style="width:40%;color:blue;font-size:16pt;">Title</p>
                <p style="width:20%;color:blue;font-size:16pt;">Quaility</p>
                <p style="width:30%;color:blue;font-size:16pt;text-align:right">Price</p>
            </div>
            <?php 

                include '../DB/Body_DB.php';

                if(isset($_POST['Signin'])){
                    $username = $_POST['user_Name'];
                    $userpassword = $_POST['user_password'];

                    $query1 = "SELECT * FROM `client` WHERE  NAME='$username' ";
                    $result1 = mysqli_query($conn,$query1);
                    $row1 = mysqli_fetch_assoc($result1);
                    $cli_name = $row1['NAME'];
                    $cli_password = $row1['PASSWORD'];
                    if($cli_name = $username && $cli_password = $userpassword){
                        $query2 = "SELECT * FROM `ordered`";
                        $result2 = mysqli_query($conn,$query2);
                        
                        while($row2 = mysqli_fetch_assoc($result2)){
                            $title = $row2['TITLE'];
                            $qty = $row2['QTY'];
                            $price = $row2['PRICE'];
                            $total = $row2['TOTAL'];

                            

                        echo '
                        <div class="item" style="width:100%;display:flex;justify-content:space-evenly;margin-top:10px;">
                            <p style="width:40%">'.$title.'</p>
                            <p style="width:20%;text-align:center">'.$qty.'</p>
                            <p style="width:30%;text-align:right">$'.$price.'</p>
                        </div>
                        
                        ';

                        }
                        
                        $query3 = "SELECT SUM(TOTAL) AS calculate FROM `ordered`";
                        $result3 = mysqli_query($conn,$query3);
                        while($row3 = mysqli_fetch_assoc($result3)){
                            $payment = $row3['calculate'];
                        }

                        echo '
                        <div class="item" style="width:100%;display:flex;justify-content:space-evenly;color:white;margin-top:10px; background:gray">
                            <p style="width:40%">Payment</p>
                            <p style="width:30%;text-align:right">$'.$payment.'</p>
                        </div>
                        ';
                      
                     


                    }

                }
            ?>
            
            <div class="receptionist" style="width:90%;height:auto;margin: 0 auto;display:flex;flex-direction:column;align-items:center">
                    <h4>Receptionist</h4>
                </div>
    </div>
                
</div>