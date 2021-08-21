<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS reflected </title>
</head>
<body>
    Witaj, 
    <?php  if(isset($_GET["imie"])) echo $_GET["imie"];  ?>
    
</body>
</html>