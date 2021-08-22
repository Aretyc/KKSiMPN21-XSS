<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS stored </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <form class="container" action="#" method="post" >
        <p>Nowy komentarz</p>
        <input type="text"  class="form-control" id="coment" >
        <button  type="submit" class="btn btn-primary my-3">Dodaj</button>
    </form>

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
            echo  $row["comment"];
        }
        } else {
        echo "0 results";
        }
        $conn->close();
    
    
    ?>
</body>
</html>