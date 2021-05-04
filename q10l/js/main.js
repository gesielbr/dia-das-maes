// CONTADOR DIAS E PRODUTOS
// Obtém a data/hora atual
var data = new Date();
// Guarda cada pedaço em uma variável
var dia = data.getDate(); // 1-31
var mes = data.getMonth(); // 0-11 (zero=janeiro)
var ano4 = data.getFullYear(); // 4 dígitos
var str_data = dia + "/" + (mes + 1) + "/" + ano4;

//Número Aleatório
var random = function (start, end) {
  return Math.floor(Math.random() * (end - start + 1) + start);
};
var quantidadeAleatoria = random(15, 25);

$(document).ready(function () {
  $(".data").append(str_data);
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

// CONTADOR 2
$(document).ready(function () {
  var timer2 = "20:00";
  var interval = setInterval(function () {
    var timer = timer2.split(":");
    var minutos = parseInt(timer[0], 10);
    var segundos = parseInt(timer[1], 10);
    --segundos;
    minutos = segundos < 0 ? --minutos : minutos;
    segundos = segundos < 0 ? 59 : segundos;
    segundos = segundos < 10 ? "0" + segundos : segundos;
    $("#min2").html(minutos);
    $("#seg2").html(segundos);
    $(".countdown").html(minutos + ":" + segundos);
    if (minutos < 0) clearInterval(interval);
    //check if both minutos and segundos are 0
    if (segundos <= 0 && minutos <= 0) clearInterval(interval);
    timer2 = minutos + ":" + segundos;
  }, 1000);
});
