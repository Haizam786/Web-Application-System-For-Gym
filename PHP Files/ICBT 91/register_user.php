<?php
session_start();
include_once 'connection.php';
if(isset($_POST['submit'])) //if the form is submited successfully
{
    $phone = $_POST['phone']; //checking the phone number first
    $query = "Select * from users where phone = $phone"; //check the phone number  it is duplicated
    $result = $conn->query($query);
    if($result->num_rows>0)
    {
        $_SESSION['error'] = "Phone Number Already Exist"; //if the phone number is already available
        header('Location: index.php'); //return to registration form  
    }                                                           
    else
    {
        $name = $_POST['name'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $bmi = $_POST['bmi'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        if($password == $confirm_password) //check if the member enterd the same password
        {
            $query = "Insert into users (name,weight,height,bmi,age,address,phone,password,user_type) values ('$name','$weight','$height','$bmi','$age','$address','$phone','$password','2')";
            if($conn->query($query)===true)
            {
              echo"Details Added Successfully!";
            }


            $_SESSION['error'] = "";
        }else
        {
            $_SESSION['error'] = "Password does not match";
            header('Location: index.php');
            
        }
    }
}
else
{
    header("index.php");
}
?>