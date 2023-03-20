<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../CSS/style.css"> -->
    <link rel="stylesheet" href="../CSS/sign-in.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <div class="container_signin" style="width:100vw;height:100vh;display:flex;align-items:center;justify-content:center;
     background-image:url(../../product_image_storage/wallpaper2you_252314.jpg);background-size:cover;">
            <form action="" class="frm_sign-in">

            <div class="sign_in">
                <div class="title">
                    <h3>WELCOME BACK</h3>
                    <p>Not registered? <a href="./sign-up.php" style= "color:black;font-weight:500;text-decoration:none; ">Sign up</a> </p>
                </div>
                <input type="text" name="name" id="name" placeholder="Name"class="form-control" style="background:none;border:none;">
                <input type="password" name="password" id="password" placeholder="Password"class="form-control" style="background:none;border:none;">
                <input type="submit" name="signin" id="signin" value="Sign In" class="btn btn-secondary" style="border-radius:15px;">
            </div>
            <div class="image">
                <img src="../image/Body_Image/image1.jpeg" alt="">
            </div>
            
        </form>
    </div>
    
</body>


</html>