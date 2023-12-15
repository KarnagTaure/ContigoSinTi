const imagenEscenaDiv = document.getElementById("imagenEscena");



function cambiarImagenFondo(id) {
  switch (id) {
    case "convivecia":
      imagenEscenaDiv.style.backgroundImage =
        'url("elementos/unDiaCentro/diaenelcentro_1.png")';
      break;

    case "porLaMañana":
      imagenEscenaDiv.style.backgroundImage =
        'url("elementos/unDiaCentro/diaenelcentro_2.png")';
      break;
    case "mediodia":
      imagenEscenaDiv.style.backgroundImage =
        'url("elementos/unDiaCentro/diaenelcentro_3.png")';
      break;
    case "finDeHorario":
      imagenEscenaDiv.style.backgroundImage =
        'url("elementos/unDiaCentro/diaenelcentro_4.png")';
      break;
    case "tarde":
      imagenEscenaDiv.style.backgroundImage =
        'url("elementos/unDiaCentro/diaenelcentro_5.png")';
      break;
    case "noche":
      imagenEscenaDiv.style.backgroundImage =
        'url("elementos/unDiaCentro/diaenelcentro_6.png")';
      break;
    case "findes":
      imagenEscenaDiv.style.backgroundImage =
        'url("elementos/unDiaCentro/diaenelcentro_7.png")';
      break;
    case "plantrabajo":
      imagenEscenaDiv.style.backgroundImage =
        'url("elementos/unDiaCentro/diaenelcentro_8.png")';
      break;
    case "asamblea":
      imagenEscenaDiv.style.backgroundImage =
        'url("elementos/unDiaCentro/diaenelcentro_9.png")';
      break;

      // opciones par Trabajo con Familias

    case "tiempo":
      imagenEscenaDiv.style.backgroundImage =
        'url("elementos/trabajofamilias/trabajoconfamilia_1.png")';
      break;
    case "cooperacion":
      imagenEscenaDiv.style.backgroundImage =
        'url("elementos/trabajofamilias/trabajoconfamilia_2.png")';
      break;
    case "encubrimiento":
      imagenEscenaDiv.style.backgroundImage =
        'url("elementos/trabajofamilias/trabajoconfamilia_3.png")';
      break;
    case "permisos":
      imagenEscenaDiv.style.backgroundImage =
        'url("elementos/trabajofamilias/trabajoconfamilia_4.png")';
      break;
    case "centro":
      imagenEscenaDiv.style.backgroundImage =
        'url("elementos/trabajofamilias/trabajoconfamilia_5.png")';
      break;
    case "riesgo":
      imagenEscenaDiv.style.backgroundImage =
        'url("elementos/trabajofamilias/trabajoconfamilia_6.png")';
      break;
    case "proteccion":
      imagenEscenaDiv.style.backgroundImage =
        'url("elementos/trabajofamilias/trabajoconfamilia_7.png")';
      break;
    case "profesionales":
      imagenEscenaDiv.style.backgroundImage =
        'url("elementos/trabajofamilias/trabajoconfamilia_8.png")';
      break;
    case "normas":
      imagenEscenaDiv.style.backgroundImage =
        'url("elementos/trabajofamilias/trabajoconfamilia_9.png")';
      break;
    
  }
}
