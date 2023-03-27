<?php
    include('../Controller/Body_DB.php');
    session_start();
    if(!isset($_SESSION['adminLoginID']))
    {
        header('Location: ./admin_login.php');
    }
?>
<head>
    <!--Fonts and icons-->
     <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"/>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet"/>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/material-dashboard.min.css">
</head>
<body>
    <?php 
        include('./headerNavbar.php');
        include('./bodySidebar.php');
    ?>
    <!-- Dash bord goes here -->
    <div class="container myclass mt-3 me-6">
        <div class="row">
            <div class="col-md-12">
                <?php include('../html/add-item.php'); ?>
            </div>
        </div>
    </div>
</body>
