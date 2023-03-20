<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<div class="container-fluid w-100 h-100 bg-secondary-subtle d-flex align-items-center justify-content-center">
    
    <form action="recipe_product.php" method="post" class="d-flex flex-column justify-content-evenly p-5" style="width:500px;height:350px;border-radius:15px;box-shadow: 0 0 3px gray">
        <h4 style="color:peru">Complete your Name and Password</h4>
        <p>I don't have an account. <a href="register.php">Register</a></p>
        <div class="form-floating">
            <input type="text" name="name" id="name" class="form-control" placeholder="name">
            <label for="name" style="color:darkblue">Name</label>
        </div>    
        <div class="form-floating">
            <input type="password" name="password" id="password" class="form-control" placeholder="password">
            <label for="password" style="color:darkblue">Password</label>
        </div>
        <div class="button d-flex justify-content-between" style="width:150px">
            <a href="ordered.php" class="btn btn-secondary">Back</a>
            <input type="submit" name="submit" class="btn btn-primary" value="Continue">
        </div> 
    </form>
</div>