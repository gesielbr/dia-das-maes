$(document).ready(function () {
  setTimeout(function () {
    toastr.options.positionClass = "toast-bottom-left";
    toastr.options.closeButton = true;
    toastr.options.timeOut = 3000;
    toastr.info(
      "<b>Garanta o seu Também!</b><br>11 novas pessoas compraram nos últimos 30min."
    );
  }, 5000);

  setTimeout(function () {
    toastr.success(
      "<b>Luana Araújo acabou de Comprar 3 Unidades!</b><br>Restam Apenas 11 Unidades!"
    );
  }, 10000);

  setTimeout(function () {
    toastr.success(
      "<b>Alana Dias acabou de Comprar Varigold!</b><br>Garanta o seu Também!"
    );
  }, 20000);

  setTimeout(function () {
    toastr.info(
      "<b>Corra e Aproveite a Promoção!</b><br>Apenas 07 unidades disponíveis."
    );
  }, 30000);

  setTimeout(function () {
    toastr.success(
      "<b>Compre agora o seu Varigold!</b><br>O Estoque está esgotando!"
    );
  }, 45000);

  setTimeout(function () {
    toastr.info(
      "<b>Últimas unidades disponíveis!</b><br>Adquira agora seu Varigold"
    );
  }, 60000);

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
});

$(document).ready(function () {
  $(".data").append(str_data);
  $("#p0").append(quantidadeAleatoria);
});

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
    $("#min").html(minutos);
    $("#seg").html(segundos);
    $(".countdown").html(minutos + ":" + segundos);
    if (minutos < 0) clearInterval(interval);
    //check if both minutos and segundos are 0
    if (segundos <= 0 && minutos <= 0) clearInterval(interval);
    timer2 = minutos + ":" + segundos;
  }, 1000);
});

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
