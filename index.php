<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contigo no sin ti</title>
    <link rel="stylesheet" href="estilo.css">
   
</head>
<body>


<div id="cabeceroSinTi"></div>


<div id="MenuInicio">
    <div id="presentacion" class="botones">Presentacion</div>
    <div id="profesional" class="botones">Material para el profesional</div>
    <div id="unDia" class="botones"></div>
    <div id="familia" class="botones"></div>
    <div id="agradecimientos" class="botones">Agradecimientos</div>

</div>
<script>
const unDiaCentro = document.getElementById('unDia');
const trabajoFamilias = document.getElementById('familia');


//Agregan evento click a los div abriendo pagina nueva.

unDiaCentro.addEventListener('click', function(){
    window.location.href = "diaCentro.php";
});


trabajoFamilias.addEventListener('click', function(){
    window.location.href= 'trabajoFamilias.php';
});
</script>
</body>
</html>