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
                <div class="col-xl-10" style="border: 5px solid red;">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6"  >
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                    <img src="../image/Users_account/download (1).png"
                                        style="width: 120px; height:100px;" alt="logo">
                                    <h4 class="mt-1 mb-5 pb-1">SIGN UP </h4>
                                    </div>
                                    <form class="form-style-9" action="" method="post" name="form1" enctype="multipart/form-data">
                                        <ul>
                                            <!-- Admin Account goes here -->
                                            <li>
                                                <span>Name</span> <input  name="user_Name" class="field-style field-full align-left" placeholder="Your Name" />
                                            </li>
                                            <!-- Admin Account goes here -->
                                            <li>
                                                <span>Email</span> <input type="email"  name="user_email" class="field-style field-full align-left" placeholder="Your Email" />
                                            </li>
                                            <!-- Admin Password goes here -->
                                            <li>
                                                <span>Password</span><input type="password" name="user_password" class="field-style field-full align-none" placeholder="Password" />
                                            </li>
                                        </ul>
                                        <span class="d-flex align-items-center justify-content-center mb-2" > already have an account ?&nbsp; <a href="./sign-in.php">Sign In here</a> </span>
                                        <!-- button goes here -->
                                        <div class="d-flex align-items-center justify-content-between pb-4">
                                            <a href="./Client_index.php"><button type="button" name="GoBack" class="btn btn-info">GO Back</button></a>
                                            <button type="SignUP" name="SignUP" class="btn btn-outline-danger">Sign Up</button>                                
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
    if(isset($_POST['SignUP']))
    {
        if(!empty($_POST['user_Name']) && !empty($_POST['user_email']) && !empty($_POST['user_password']) )
        {
            $date = date('Y-m-d');
            mysqli_query($conn,"INSERT into `client` values(NULL,'$_POST[user_Name]','$_POST[user_email]','$_POST[user_password]',$date)");
            ?>
                <script>
                        window.location.href = "./ready_to_buy.php";
                </script>
            <?php
        }else
        {
            echo "<script> alert('You must complete the form')</script>";
        }
    }
?>
