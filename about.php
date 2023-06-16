<?php
    $con = mysqli_connect('localhost','root');

    if($con) {
        echo "Connection Successful";
    }
    else{
        echo "Connection Failed";
    }

    mysqli_select_db($con, 'myproject36478');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

    mysqli_query($con, $query);
    header('location:index.php#sign');
?>
