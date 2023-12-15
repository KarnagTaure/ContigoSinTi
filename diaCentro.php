<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Un dia en el centro</title>
    <link rel="stylesheet" href="estilo.css">
    <script src="contigoSinTi.js" defer></script>

</head>

<body>


    <div id="botonVolver" class="botones"></div>
    

    <div id="cabeceroSinTi"></div>

    <div id="imagenEscena" style="background-image: url('elementos/unDiaCentro/portadaUnDia.png')"></div>
    <div id="situaciones">
        <div id="convivecia" class="botones" 
        style="background-image: url('elementos/materiales/btn_convivencia.png')"
        onclick="cambiarImagenFondo('convivecia')"></div>
        
        <div id="porLaMañana" class="botones"
        style="background-image: url('elementos/materiales/btn_porLaManana.png')"
        onclick="cambiarImagenFondo('porLaMañana')"></div>
        
        <div id="mediodia" class="botones"
        style="background-image: url('elementos/materiales/btn_alMediodia.png')"
        onclick="cambiarImagenFondo('mediodia')"></div>
        
        <div id="finDeHorario" class="botones"
        style="background-image: url('elementos/materiales/btn_finHorario.png')"
        onclick="cambiarImagenFondo('finDeHorario')"></div>
        
        <div id="tarde" class="botones"
        style="background-image: url('elementos/materiales/btn_porLaTarde.png')"
        onclick="cambiarImagenFondo('tarde')"></div>
        
        <div id="noche" class="botones"
        style="background-image: url('elementos/materiales/btn_porLaNoche.png')"
        onclick="cambiarImagenFondo('noche')"></div>
        
        
        <div id="findes" class="botones"
        style="background-image: url('elementos/materiales/btn_findes.png')"
        onclick="cambiarImagenFondo('findes')"></div>
        
        <div id="plantrabajo" class="botones"
        style="background-image: url('elementos/materiales/btn_planTrabajo.png')"
        onclick="cambiarImagenFondo('plantrabajo')"></div>
        
        <div id="asamblea" class="botones"
        style="background-image: url('elementos/materiales/btn_asamblea.png')"
        onclick="cambiarImagenFondo('asamblea')"></div>

    </div>
    
    <script>
        const volverMenu = document.getElementById('botonVolver');
        

        volverMenu.addEventListener('click', function() {
            window.location.href = 'index.php';
        });
    </script>
</body>

</html>