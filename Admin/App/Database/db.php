<?php 

    $host = "localhost";
    $username = "root";
    $password = "";;
    $database = "dbdashboard";


    //Creating database connection
    $Dbcontext = mysqli_connect($host, $username, $password, $database);


    //Check database connection
    if (!$Dbcontext) {
        die("Connection Failed:". mysqli_connect_error());
    }else {
        echo "Connection successfully";
    }


?>
