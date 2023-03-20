<?php
    include("../DB/Body_DB.php");
?>
<html lang="en">
<head>
    <!-- <link rel="stylesheet" href="../CSS/style.css"> -->
    <link rel="stylesheet" href="../CSS/sign-up.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <div class="container_signup" style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;
                        background-image:url(../../product_image_storage/wallpaper2you_252314.jpg);background-size:cover;">
    <form action="" class="frm_sign-up" style="background:none;" >

            <div class="image">
            <img src="../image/Body_Image/image1.jpeg" alt="">
            </div>
            <div class="sign_up">
                <div class="title">
                    <h3>GET STARTED</h3>
                    <p style="font-size:10pt;">Already have an account?<a href="./sign-in.php" style="color:black;font-weight:500;text-decoration:none;">Sing in</a></p>
                </div>
                <input type="text" name="name" id="name" placeholder="Name" class="form-control" style="background:none;border:none;">
                <input type="email" id="email" name="email" placeholder="Email" class="form-control" style="background:none;border:none;">
                <input type="password" name="password" id="password" placeholder="Password" class="form-control" style="background:none;border:none;">
                <input type="submit" value="Sign Up" class="btn btn-secondary" style="border-radius:15px;">
            </div>
            
            
        </form>
</div>
    
</body>
</html>