<?php 
    if($_SERVER['REQUEST_METHOD']==="POST"){
        if(isset($_POST["comment"]))
        {
            $servername = "db";
            $username = "root";
            $password = "admin";
            $dbname = "xss";
            
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            

            $stmt = $conn->prepare("INSERT INTO comments(comment) VALUES (?)");
            $stmt->bind_param("s", $_POST["comment"]);
            $stmt->execute();
            $conn->close();
        }
    } 
?>