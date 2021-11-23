<?php

    $ambil_Json = file_get_contents('data/pizza.json');
    $rubah_Json = json_decode($ambil_Json, true);
    $menu = $rubah_Json["menu"];

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>RestFull PHP</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="img/pizza/supreme.jpg" height="40px" width="40px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">All Menu</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h3>All Menu</h3>
            </div>
        </div>

        <div class="row">
            <?php
                foreach($menu as $data) :
            ?>
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="img/pizza/<?= $data["gambar"]; ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?= $data["nama"]; ?></h5>
                        <p class="card-text"><?= $data["deskripsi"] ?></p>
                        <h5 class="card-title" style="color:red;">Rp. <?= number_format( $data["harga"]); ?></h5>
                        <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>