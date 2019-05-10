<!DOCTYPE html>
<html lang="es">
<head>
    <title><?= $title ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= statics('main.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= statics('punto1.css') ?>" rel="stylesheet" type="text/css">
</head>
<body class="body">
    <?php require 'nav.view.php' ?>
    <h1><?= $main_title ?></h1>

    <section class="seccionPrincipal">
        <h2>Cargue sus datos</h2>

        <p class="advertencia">Obligatorio*</p>

        <form name="formulario" method="post" action="ValidarPunto1" oninput="valorAltura.value = altura.valueAsNumber">
            <label for="nombre">*Nombre: </label>
            <input type="text" name="nombre" value="<?=$nombre?>" maxlength="50" pattern="[A-Za-z\s]+" title="Solo se admiten letras minúsculas,mayúsculas y espacios" required>

            <label for="email">*E-mail: </label>
            <input type="email" name="email" value="<?=$email?>" placeholder="Ingrese dirección de email" title="Ingrese una dirección de email válida: user@dom.com" required>
            
            <label for="lenguaje">Lenguajes </label>
            <select id="1" name="lenguaje" value="<?=$lenguaje?>">
                <option value="C++">C++</option>
                <option value="JAVA">Java</option>
                <option value="Delphi">Delphi</option>
                <option value="Fortran">Fortran</option>
            </select>
            
            <input class="boton" type="submit" value="Enviar" name="Enviar">
            <input type="reset" value="Limpiar">
            
        </form>
    </section>    
</body>
</html>