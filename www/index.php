
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
    <form class="container mt-5" action="#" method="post" enctype="multipart/form-data" >
        <h3>Nowy obraz</h3>
        <input type="file" class="form-control" id="inputGroupFile01">
        <button  type="submit" class="btn btn-primary my-3">Dodaj</button>
    </form>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12"><h3>Obrazy</h3></div>
            <?php include './getImages.php'?>
        </div>
    </div>

</body>
</html>
