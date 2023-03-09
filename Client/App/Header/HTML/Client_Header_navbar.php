
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/Client_Header_Navbar.css">
    
</head>

<body>
    <header>
        <div class="header-left">
            <div class="Headerlogo">
                <img src="../image/Header_Image/Logo.png" alt="">
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="" class="active"></i>Home</a>
                    </li>
                    <li>
                        <a href="">Products</a>
                    </li>
                    <li>
                        <a href="">Abouts</a>
                    </li>
                </ul>
                <div class="login-signup">
                    <a href=""> Login </a> or <a href=""> Signup </a>
                </div>
            </nav>
        </div>
        <div class="header-right">
            <form class="search-box" method="post" action="../App/Header/HTML/search.php">
                <div class="search-input">
                    <input type="text" name="search" class="input" placeholder="Search . . .">
                </div>
                <div class="search-icon">
                    <input type="submit" value="Search" style="border:none;background:none;">
                </div>
            </form>
            <div class="shop">
                <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="login-signup">
                <a href="../App/Users_Account/sign-in/sign-in.php"> Account <i class="fa-solid fa-user" style="font-size: 14px;"></i></a>
            </div>
            <div class="hamburger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </header>
    <script src="../JS/Header.navbar.js"></script>
</body>