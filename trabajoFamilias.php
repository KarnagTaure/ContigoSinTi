<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo con Familias</title>
    <link rel="stylesheet" href="estilo.css">
    <script src="contigoSinTi.js" defer></script>

</head>

<body>

    <div id="botonVolver" class="botones"></div>

    <div id="cabeceroSinTi"></div>

    <div id="imagenEscena" style="background-image: url('elementos/trabajoFamilias/portadaFamilia.png')"></div>

    <div id="situaciones">

        <div id="tiempo" class="botones" 
        style="background-image: url('elementos/materiales/btn_tiempo.png')"
        onclick="cambiarImagenFondo('tiempo')"></div>

        <div id="cooperacion" class="botones" 
        style="background-image: url('elementos/materiales/btn_cooperacion.png')"
        onclick="cambiarImagenFondo('cooperacion')"></div>
       
        <div id="encubrimiento" class="botones" 
        style="background-image: url('elementos/materiales/btn_encubrimiento.png')"
        onclick="cambiarImagenFondo('encubrimiento')"></div>
        
        <div id="permisos" class="botones" 
        style="background-image: url('elementos/materiales/btn_permisos.png')"
        onclick="cambiarImagenFondo('permisos')"></div>
        
        <div id="centro" class="botones" 
        style="background-image: url('elementos/materiales/btn_centro.png')"
        onclick="cambiarImagenFondo('centro')"></div>
        
        <div id="riesgo" class="botones" 
        style="background-image: url('elementos/materiales/btn_riesgo.png')"
        onclick="cambiarImagenFondo('riesgo')"></div>
        
        <div id="proteccion" class="botones" 
        style="background-image: url('elementos/materiales/btn_proteccion.png')"
        onclick="cambiarImagenFondo('proteccion')"></div>
        
        <div id="profesionales" class="botones" 
        style="background-image: url('elementos/materiales/btn_profesionales.png')"
        onclick="cambiarImagenFondo('profesionales')"></div>
        
        <div id="normas" class="botones"
         style="background-image: url('elementos/materiales/btn_normas.png')"
         onclick="cambiarImagenFondo('normas')"></div>


    </div>

    <script>
        const volverMenu = document.getElementById('botonVolver');

        volverMenu.addEventListener('click', function() {
            window.location.href = 'index.php';
        });
    </script>
</body>

</html>