const unDiaCentro = document.getElementById('unDia');
const trabajoFamilias = document.getElementById('familia');


//Agregan evento click a los div abriendo pagina nueva.

unDiaCentro.addEventListener('click', function(){
    window.location.href = "diaCentro.php";
});


trabajoFamilias.addEventListener('click', function(){
    window.location.href= 'trabajoFamilias.php';
});