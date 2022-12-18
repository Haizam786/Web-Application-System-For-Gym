<?php
session_start();
if(isset($_SESSION['user_type'])&&!empty($_SESSION['user_type']))
{
    if($_SESSION['user_type']==='1')
      header("Location: admin/index.php"); // If an admin available, once he sign in he will move to admin related pages
    else
        header("Location: ICBT 91.php");
}