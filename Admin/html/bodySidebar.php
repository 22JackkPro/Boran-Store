<?php
  include('../Controller/Body_DB.php');
?>
<head>
  <!--Fonts and icons-->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"/>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet"/>
  <link rel="stylesheet" href="../css/material-dashboard.min.css">
  <!-- own css -->
  <link rel="stylesheet" href="../css/bodysidebar.css">
</head>
<body>
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-7 fixed-start ms-3 bg-gradient-dark " id="sidenav-main">
      <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="#">
          <span class="ms-1 font-weight-bold text-white"><h2 class ="nav-link-text text-white">Dashboard</h2></span>
        </a>
      </div>
      <hr class="horizontal light mt-0 mb-2">
      <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <!-- Dashboard table -->         
            <li class="nav-item">
              <a class="nav-link text-white " href="./Admin_index.php">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">dashboard</i>
                </div>
                <span class="nav-link-text ms-1">Dashboard</span>
              </a>
            </li>
            <!-- Insert table -->
            <li class="nav-item">
              <a class="nav-link text-white " href="./choose_type_product_insert.php">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">table_view</i>
                </div>
                <span class="nav-link-text ms-1">Insert</span>
              </a>
            </li>
            <!-- View table -->
            <li class="nav-item">
              <a class="nav-link text-white " href="./choose_type_product_view_table.php">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">receipt_long</i>
                </div>
                <span class="nav-link-text ms-1">View table</span>
              </a>
            </li>
            <!-- line -->
            <li class="nav-item mt-3">
              <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
            <!-- Sign In -->
            <li class="nav-item">
              <form method="POST">
                <button name="logOut" style="background: none; border: none; " >
                  <a name="logOut" class="nav-link text-white ">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                      <i class="material-icons opacity-10">login</i>
                    </div>
                    <span class="nav-link-text ms-1">Sign out</span>
                  </a>
                </button>
              </form>
            </li>
        </ul>
      </div> 
  </aside>
</body>
<?php
  if(isset($_POST['logOut']))
  {
    session_destroy();
    ?>
      <!-- <script>
        window.location.href = "./admin_login.php";
      </script> -->
    <?php
    echo '<script>  window.location.href = "./admin_login.php"; </script>';
  }
?>