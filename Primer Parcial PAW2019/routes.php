<?php

$app->router->define([
    '' => 'controllers/index.php',
    'about' => 'controllers/about.php',
    'about/us' => 'controllers/about-us.php',
    'contact' => 'controllers/contact.php',
    'Punto1' => 'controllers/punto1.php',
    'Punto1Validado' => 'controllers/punto1.validado.php',
    'ValidarPunto1' => 'controllers/llamaValidarPunto1.php'
]);
