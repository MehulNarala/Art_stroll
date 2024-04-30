<?php
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $phoneNumber = $_POST['phoneNumber'];

    //Database connection
    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection Failed  :  '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(fullName, email, password, gender, phoneNumber)
            values (?, ?, ?, ?, ?)");}
        $stmt->bind_param("ssssi",$fullName, $email, $password, $gender, $phoneNumber);
        $stmt->execute();
        echo "registration successfully...";
        $stmt->close();
        $conn->close();
?>