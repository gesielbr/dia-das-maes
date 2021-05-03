// CONTADOR DIAS E PRODUTOS

// Obtém a data/hora atual
var data = new Date();

// Guarda cada pedaço em uma variável
var dia = data.getDate(); // 1-31
var mes = data.getMonth(); // 0-11 (zero=janeiro)
var ano4 = data.getFullYear(); // 4 dígitos
var dia_atual = dia + "/" + (mes + 1) + "/" + ano4;

//Número Aleatório
var random = function (start, end) {
  return Math.floor(Math.random() * (end - start + 1) + start);
};
var quantidadeAleatoria = random(15, 25);

$(document).ready(function () {
  $(".data").append(dia_atual);
  $("#p0").append(quantidadeAleatoria);
});

// CONTADOR
$(document).ready(function () {
  var timer1 = "20:00";
  var interval = setInterval(function () {
    var timer = timer1.split(":");
    var minutos = parseInt(timer[0], 10);
    var segundos = parseInt(timer[1], 10);
    --segundos;
    minutos = segundos < 0 ? --minutos : minutos;
    segundos = segundos < 0 ? 59 : segundos;
    segundos = segundos < 10 ? "0" + segundos : segundos;
    $(".min").html(minutos);
    $(".seg").html(segundos);
    $(".countdown").html(minutos + ":" + segundos);
    if (minutos < 0) clearInterval(interval);
    //check if both minutos and segundos are 0
    if (segundos <= 0 && minutos <= 0) clearInterval(interval);
    timer1 = minutos + ":" + segundos;
  }, 1000);
});

//  OWL START
$(function () {
    $("#customers-testimonial").owlCarousel({
      items: 1,
      autoPlay: true,
      slideSpeed: 2000,
      smartSpeed: 250,
      look: true,
      autoPlayHoverPause: true,
    });
  });
