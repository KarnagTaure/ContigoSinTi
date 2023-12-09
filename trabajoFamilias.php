<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo con Familias</title>
    <link rel="stylesheet" href="estilo.css">
  
</head>
<body>

<div id="botonVolver" class="botones">1</div>
<div id="botonSiguiente2" class="botones" ></div>

<div id="cabeceroSinTi"></div>

<div id="imagenEscena" ></div>

<div id="situaciones">


</div>
<?php
    // Incluye el archivo contarCarpetas.php
    include 'contarCarpetas.php';
    
    // Define la ruta del directorio
    $rutaDirectorio = './elementos'; // Cambia la ruta según tu directorio
    
    // Llama a la función contarCarpetas
    $numeroDeCarpetas = contarCarpetas($rutaDirectorio);
    
   // echo "<h1>Número de carpetas: $numeroDeCarpetas</h1>";
    ?>
    <script>
    const volverMenu = document.getElementById('botonVolver');
    var numeroDeCarpetasJS = <?php echo $numeroDeCarpetas; ?>;

    volverMenu.addEventListener('click', function(){
    window.location.href= 'index.php';
    });
    </script>
</body>
</html>