<div class="container" style="width:100%;height:100%;display:flex;align-items:center;justify-content:center">

    <div class="list" style="width:350px;height:700px;box-shadow: 0 0 3px gray;border-radius:15px;padding:15px">

            <h3 style="width:100%;text-align:center">Thank you!</h3>
            <h4 style="width:100%;text-align:center">You have buy products from our site.</h4>

            <div class="item" style="width:100%;display:flex;justify-content:space-evenly;margin-top:10px;">
                <p style="width:40%;color:blue;font-size:16pt;">Title</p>
                <p style="width:20%;color:blue;font-size:16pt;">Quantity</p>
                <p style="width:30%;color:blue;font-size:16pt;text-align:right">Price</p>
            </div>
            <?php 

                include '../DB/Body_DB.php';

                if(isset($_POST['submit'])){
                    $username = $_POST['name'];
                    $userpassword = $_POST['password'];

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
                        echo '
                        <div class="item" style="width:100%;display:flex;justify-content:space-evenly;margin-top:10px;">
                            <p style="width:40%">'.$title.'</p>
                            <p style="width:20%;text-align:center">'.$qty.'</p>
                            <p style="width:30%;text-align:right">'.$price.'</p>
                        </div>
                        
                        ';

                        }
                        
                        echo '
                            <div class="total" style="width:90%;display:flex;justify-content:space-between;margin: 0 auto">
                                <p style="color:darkblue;font-size:14pt">Total</p>
                                <p style="color:darkgreen;font-size:14pt;">'.$price.'</p>
                            </div>
                        ';


                    }

                }
            ?>
            
            <div class="receptionist" style="width:90%;height:auto;margin: 0 auto;display:flex;flex-direction:column;align-items:center">
                    <h4>Receptionist</h4>
                    <p>homolokoko</p>
                </div>
    </div>
                
</div>