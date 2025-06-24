<!doctype html>

<html lang="es">
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<title>Pagina principal</title> esto se reemplaza-->
        <title> <?php echo ($titulo); ?></title>

        <!-- bootstrap local,se reemplaza por php
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/miestilo.css">
-->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/miestilo.css'); ?> " rel="stylesheet">

    </head>
    <header>
        <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
        <h1>Pagina principal</h1>
    </header>

<!--No se cierra el html,es como que une todo el codigo el controlador-->