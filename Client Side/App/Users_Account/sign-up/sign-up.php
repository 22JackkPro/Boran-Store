

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register from</title>
    <!-- <link rel="stylesheet" href="../CSS/style.css"> -->
    <link rel="stylesheet" href="sign-up.css">
</head>
<body>
    <form action="" class="frm_sign-up" method="post">

        <div class="image">
            <img src="../../../image/Users_account/photo_2023-03-02_19-33-26.jpg" alt="">
        </div>
        <div class="sign_up">
            <div class="title">
                <h3>GET STARTED</h3>
                <p style="font-size:10pt;">Already have an account?<a href="../sign-in/sign-in.php" style="color:black;font-weight:500;text-decoration:none;">Sing in</a></p>
            </div>
            <?php 
                // if(isset($error)) {
                //     foreach($error as $error) {
                //         echo '<span class="error-msg">'.$error.'</span>';
                //     }
                // }


            ?>
            <input type="text" name="name" id="name" placeholder="Enter your name" required>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>
            <!-- <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm your password" required> -->
            <input type="submit" name="submit" id="signin" value="Sign Up">
        </div>
        
        
    </form>
</body>
</html>