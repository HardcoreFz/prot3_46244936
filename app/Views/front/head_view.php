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
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    </head>
    <header>
        
        <h1>Pagina principal</h1>
    </header>

<!--No se cierra el html,es como que une todo el codigo el controlador-->