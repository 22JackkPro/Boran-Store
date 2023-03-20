




<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<div class="container-fluid w-100 h-100 bg-secondary-subtle d-flex align-items-center justify-content-center">
    
    <form action="" method="post" class="d-flex flex-column justify-content-evenly p-5" style="width:550px;height:450px;border-radius:15px;box-shadow: 0 0 3px gray">
        <h4 style="color:peru">Complete your Name and Password</h4>
        <div class="name">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="email">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="password">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control">  
        </div>
        <div class="con_password">
            <label for="con_password">Confirm password</label>
            <input type="password" name="con_password" id="con_password" class="form-control">
        </div>
        
        <div class="button d-flex justify-content-between" style="width:150px"><a href="ordered.php" class="btn btn-secondary">Back</a><input type="submit" name="submit" class="btn btn-primary" value="Continue"></div> 

</form>
</div>
<?php 
    include '../DB/Body_DB.php';
    if(isset($_POST['submit'])){
        $new_name = $_POST['name'];
        $new_email = $_POST['email'];
        $new_password = $_POST['password'];
        $new_con_password = $_POST['con_password'];

        if($new_password == $new_con_password){

            $query = "INSERT INTO `client`(NAME,EMAIL,PASSWORD) VALUES ('$new_name','$new_email','$new_password')";
            $result = mysqli_query($conn,$query);

            if($result){
                echo 'Insert succeess';
            }else{
                die(mysqli_error($conn));
            }

        }

    }
?>
