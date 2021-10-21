<?php
// Prima Milestone:
// Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
include __DIR__ . '/materiale/database.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- FAVICON -->
        <link rel="shortcut icon" href="./img/my_favicon.png" type="image/x-icon">
        <!-- LEOBOOTSTRAP -->
        <link rel="stylesheet" href="./css/leobootstrap.css">
        <!-- CSS -->
        <link rel="stylesheet" href="./css/style.css">
        <title>Spotify 2.0</title>
    </head>
    <body>
        <!-- HEADER -->
        <header class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-2">
                    <img src="./img/spotify-logo.png" alt="logo header">
                </div>
            </div>
        </header>
        <!-- MAIN -->
        <main>
            <div class="container">
                <div class="row">
                    <?php foreach($database as $song) { ?>
                    <div class="column-12 column-md-5">
                        <div class="card">
                            <img class="poster" src="<?= $song["poster"]?>" alt="<?= $song["title"]?>">
                            <div class="title"><?= strtoupper($song["title"])?></div>
                            <div class="author"><?= $song["author"]?></div>
                            <div class="year"><?= $song["year"]?></div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </main>
    </body>
</html>