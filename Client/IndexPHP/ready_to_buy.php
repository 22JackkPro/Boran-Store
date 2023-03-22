<?php
    include('../DB/Body_DB.php');
?>
<head>
    <link rel="stylesheet" href="../CSS/sign-in.css">
    <link rel="stylesheet" href="../css/material-dashboard.min.css">
</head>
<body>
    <section class="h-100 gradient-form" style="background-color: white;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6"  >
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                    <img src="../image/Users_account/download (1).png"
                                        style="width: 120px; height:100px;" alt="logo">
                                    <h4 class="mt-1 mb-5 pb-1">SIGN IN YOUR ACC HERE</h4>
                                    </div>
                                    <form class="form-style-9" action="receipt.php" method="post" name="form1" enctype="multipart/form-data">
                                        <ul>
                                            <!-- Admin Account goes here -->
                                            <li>
                                                <span>Name</span> <input  name="user_Name" class="field-style field-full align-left" placeholder="Your Name" />
                                            </li>
                                            <!-- Admin Password goes here -->
                                            <li>
                                                <span>Password</span><input type="password" name="user_password" class="field-style field-full align-none" placeholder="Password" />
                                            </li>
                                        </ul>
                                        <span class="d-flex align-items-center justify-content-center mb-2" > Don't have account ?&nbsp; <a href="./register.php">Sing Up here</a> </span>
                                        <!-- button goes here -->
                                        <div class="d-flex align-items-center justify-content-between pb-4">
                                            <a href="./Client_index.php"><button type="button" name="GoBack" class="btn btn-outline-danger">GO Back</button></a>
                                            <button type="submit" name="Signin" class="btn btn-outline-success">Continue</button>                                
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- left side goes here -->
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <img class="w-100 h-100" src="../image/Users_account/image1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<?php
    if(isset($_POST['Signin']))
    {
       
        $query = "SELECT * FROM `client` WHERE `Name` = '$_POST[user_Name]' AND `PASSWORD` = '$_POST[user_password]'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1)
        {
            ?>
                <script>
                        window.location.href = "./recipe_product.php";
                </script>
            <?php
            
        }else
        {
            echo "<script> alert('Wrong Acc')</script>";
            ?>
                <script>
                        window.location.href = "./sign-up.php";
                </script>
            <?php
        }
    }
?>