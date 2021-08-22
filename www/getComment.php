<?php 
    $servername = "db";
    $username = "root";
    $password = "admin";
    $dbname = "xss";
    

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT comment FROM comments";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    
        echo '<div class="card my-2">
                <div class="card-body">
                    '.$row["comment"].'
                </div>
            </div>
            ';
    }
    } else {
    echo "brak komentarzy";
    }
    $conn->close();


?>