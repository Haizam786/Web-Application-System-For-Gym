<?php
session_start();
?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
 <div>
 <?php
    if(!empty($_SESSION['error']))
    {
        ?>
        <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Failure!</strong> <?php echo $_SESSION['error'];
            $_SESSION['error'] = "";
            ?>
        </div>
    <?php
    }
    ?>

<div>
    <div>
        <h1 align="center">Rathnayake Gyms</h1>
    </div>

    <div class="container">
        <div class="col-sm-6">
            <h3>Register a new membership</h3>

            <form action="register_user.php" method="post">

                <div align="left">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name">
                </div>

                <div align="left">
                    <label>Current Weight</label>
                    <input type="number" class="form-control" name="weight" placeholder="Current Weight">

                </div>

                <div align="left">
                    <label>Height</label>
                    <input type="number" class="form-control" name="height" placeholder="Height">

                </div>

                <div align="left">
                    <label>BMI</label>
                    <input type="number" class="form-control" name="bmi" placeholder="BMI">

                </div>

                <div align="left">
                    <label>Age</label>
                    <input type="number" class="form-control" name="age" placeholder="Age">

                </div>

                <div align="left">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Address">

                </div>

                <div align="left">
                    <label>Phone</label>
                    <input type="number" class="form-control" name="phone" placeholder="Phone number">

                </div>
                <div align="left">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">

                </div>
                <div align="left">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_password" placeholder="Retype password">

                </div>

                <div >
                    <button type="submit" name="submit"  class="btn btn-primary btn-block">Register</button>
                </div>

        </form>
        <div  class="col-sm-4">
            <span>Already have an Account?: </span>
            <a href="login.php" style="margin-left: auto;margin-top: -10px">
                <div>
                    <button  class="btn btn-warning btn-block">Login</button>
                </div>
            </a>
        </div>
    </div>

</div>
</div>
</body>
</html>