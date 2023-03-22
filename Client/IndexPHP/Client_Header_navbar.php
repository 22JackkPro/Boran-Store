<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css goes here -->
    <link rel="stylesheet" href="../CSS/Client_Header_Navbar.css">
    <script src="jquery-3.6.3.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.shop').click(function(){
                $('.order').css('display','flex');
            });
        });
    </script>
</head>

<body>
    <header style="position:sticky;top:0;z-index:100;">
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
                    <a href="./sign-in.php"> Login </a> or <a href="./sign-up.php"> Signup </a>
                </div>
            </nav>
        </div>
        <div class="header-right">
            <div class="search-box">
                <div class="search-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <div class="search-input">
                    <input type="text" class="input" placeholder="Search . . .">
                </div>
            </div>
            <div class="shop">
                <a href="ordered.php"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="login-signup">
                <a href="./sign-in.php"> Account <i class="fa-solid fa-user" style="font-size: 14px;"></i></a>
            </div>
            <div class="hamburger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </header>
        
        
</body>
<script>
    hamburger = document.querySelector(".hamburger");
    nav = document.querySelector("nav");
    hamburger.onclick = function () 
    {
        nav.classList.toggle("active");
    }
</script>