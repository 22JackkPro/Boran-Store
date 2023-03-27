<?php
    include('../Controller/Body_DB.php');
    session_start();
    if(!isset($_SESSION['adminLoginID']))
    {
        header('Location: ./admin_login.php');
    }
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!--Fonts and icons-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"/>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet"/>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/material-dashboard.min.css">
</head>

<body class="g-sidenav-show bg-gray-100">
    <!-- header -->
    <?php include('../html/headerNavbar.php'); ?>

    <!-- Sidebar -->
    <?php include('./bodySidebar.php'); ?>

    <main class="main-content border-radius-lg">
    <!-- Navbar -->

    <!-- Footer -->
    <?php include('./footer.php'); ?>

    <!-- Dash bord goes here -->
    <div class="container myclass mt-5 me-10">
        <div class="row">
            <div class="col-md-12">
                <?php include('../html/add-item.php'); ?>
            </div>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="../App/JS/bootstrap.bundle.min.js"></script>
    <script src="../App/JS/perfect-scrollbar.min.js"></script>
    <script src="../App/JS/smooth-scrollbar.min.js"></script>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
</body>

