<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $connection = mysqli_connect('localhost', 'root', '', 'formTest');

    if ($connection) {
        echo "Connection established";
        
        $sql = "INSERT INTO data (name, email, phone) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($connection, $sql);
        
        mysqli_stmt_bind_param($stmt, 'sss', $name, $email, $phone);
        
        $result = mysqli_stmt_execute($stmt);
        
        if ($result) {
            echo "Data inserted Successfully\n";
        } else {
            echo "Data transmission Failed\n";
            die(mysqli_error($connection));
        }
        
        mysqli_stmt_close($stmt);
        mysqli_close($connection);
    } else {
        echo "Connection Failed";
        die(mysqli_error($connection));
    }
}
?>

