<?php
    $username = $_POST['username'];

    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else {
        $stmt = $conn->prepare("insert into registration(username)
            values(?)")
        $stmt->bind_param("s",$username);
        $stmt->execute();
        echo "registration Successfully...";
        $stmt->close();
        $conn->close();
            
    }
?>