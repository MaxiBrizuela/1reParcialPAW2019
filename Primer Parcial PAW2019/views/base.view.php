<!DOCTYPE html>
<html lang="es">
<head>
    <title><?= $title ?></title>
    <meta charset="utf-8" />
    <link href="<?= statics('main.css') ?>" rel="stylesheet" type="text/css">
    <script src="js/grafica.js"></script>
    <script>
        grafica.armar("contenedor");
    </script>
</head>
<body>
    <?php require 'nav.view.php' ?>
    <h1>Primer Parcial</h1>
    <?= $content ?>
    <div id="contenedor">
        
    </div>
    
</body>
</html>
