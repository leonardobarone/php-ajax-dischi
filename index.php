<?php
// Prima Milestone:
// Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
include __DIR__ . '/materiale/database.php';
?>

<!DOCTYPE html>
<html lang="en">
    <?php require_once __DIR__ . '/partials/templates/head.php'; ?>
    <body>
        <?php require_once __DIR__ . '/partials/templates/header.php'; ?>
        <?php require_once __DIR__ . '/partials/templates/main.php'; ?>
    </body>
</html>