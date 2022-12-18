<?php
session_start();
?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div >
        <h1 align="center">Rathnayake Gyms</h1>
    </div>
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
   
    <div class="col-sm-5">
        <div>
            <p class="login-box-msg">Sign in</p>

            <form action="verify_user.php" method="post">
                <div class="col-sm-5">
                    <label>Phone</label>
                    <input type="number" class="form-control" name="phone" placeholder="Phone">

                </div>
                <div class="col-sm-5">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">

                </div>
                </br>
                <div class="row">
                   
                    <div class="col-5">
                        <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </div>

            </form>
            <div class="row" style="margin-top: 10px;margin-left: 5px">
                <span>Make a new Account: </span>
                <a href="index.php" style="margin-left: auto;margin-top: -10px">
                    <div>
</br>
                        <button  class="btn btn-warning btn-block">Register</button>
                    </div>
                </a>
            </div>

        </div>
       
    </div>
</div>


</body>


</html>
