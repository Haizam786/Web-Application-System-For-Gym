<?php include_once 'auth.php'?>
<?php
session_start();
    include_once 'connection.php'; //establishing database connection
   
if(isset($_POST['phone']) && !empty($_POST['phone']))
{
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $sql = "Select * from users where phone = $phone and password = $password";
    
    $result = $conn->query($sql);
    if($result->num_rows>0)
    {
        $data = $result->fetch_assoc();
        $name = $data['name'];
        $weight = $data['weight'];
        $height = $data['height'];
        $bmi = $data['bmi'];
        $age = $data['age'];
        $address = $data['address'];
        $phone = $data['phone'];
        $user_type = $data['user_type'];
        $id = $data['id'];

        $_SESSION['name'] = $name;
        $_SESSION['weight'] = $weight;
        $_SESSION['height'] = $height;
        $_SESSION['bmi'] = $bmi;
        $_SESSION['age'] = $age;
        $_SESSION['address'] = $address;
        $_SESSION['phone'] = $phone;
        $_SESSION['user_type'] = $user_type;
       

        $_SESSION['error'] = "";
        if($user_type==2) 
            header("Location: ICBT 91.php");
    }
    else{
         $_SESSION['error'] = "Authentication Error";
        header("Location: login.php");
    }
    
}
?>