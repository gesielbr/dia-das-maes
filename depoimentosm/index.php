<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link rel="icon" href="img/fav_icon.jpg" sizes="32x32" />

    <!-- FONTAWESOME -->
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />

    <!-- Toast CSS -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"
      rel="stylesheet"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css?v=1" />

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <?php include './links.php'?>

    <!-- Facebook Pixel Code -->
    <script>
      !(function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
          n.callMethod
            ? n.callMethod.apply(n, arguments)
            : n.queue.push(arguments);
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = "2.0";
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s);
      })(
        window,
        document,
        "script",
        "https://connect.facebook.net/en_US/fbevents.js"
      );
      fbq("init", "<?php echo $pixel ?>");
      fbq("track", "PageView");
    </script>

    <!-- Google Tag Manager -->
    <script>
      (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, "script", "dataLayer", "GTM-WQ375Q8");
    </script>
    <!-- End Google Tag Manager -->
    <title>Q10Gold - Depoimentos</title>
  </head>

  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript
      ><iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-WQ375Q8"
        height="0"
        width="0"
        style="display: none; visibility: hidden"
      ></iframe
    ></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <section class="header">
      <div class="container">
        <div class="row d-flex justify-content-center align-items-center text-center">
          <div class="col">
            <img width="60" class="img-fluid" src="img/logo.png" alt="" />
          </div>
        </div>
      </div>
    </section>

    <section class="destaque">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <p class="m-0">
              ÚLTIMAS UNIDADES! Aproveite essa oferta que é por tempo limitado.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="voce-sofre-com-algum-desses-problemas">
      <div class="container">
        <div class="row">
          <div class="col-md-6 align-self-center d-none d-md-flex">
            <img
              width="500"
              class="img-fluid"
              src="imagens/medico_topo.webp"
              alt=""
              srcset=""
            />
          </div>
          <div class="col-md-6">
            <h2 class="text-center text-md-left pb-2">
              Você sofre diariamente com algum desses problemas?
            </h2>
            <ul>
              <li>
                <i class="fas fa-check-circle"></i> Rugas e linhas de expressão
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Flacidez e falta de
                elasticidade no rosto e braços
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Danos causados por radicais
                livres
              </li>
              <li><i class="fas fa-check-circle"></i> Seios caídos</li>
              <li>
                <i class="fas fa-check-circle"></i> Unhas e cabelos fracos
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Falta de energia e
                disposição
              </li>
            </ul>
            <p class="text-center text-md-left">
              Então se você é uma mulher determinada e deseja
              <span> tratar definitivamente TODOS esses problemas, </span>
              conheça o único produto que PODE E VAI te ajudar, Q10 Gold.
            </p>
            <button type="button" class="btn btn-lg btn-block botao-topo mb-4">
              <span>Quero comprar</span><br />
              COM DESCONTO EXCLUSIVO!
            </button>
            <img
              class="img-fluid mb-4"
              src="imagens/icones_topo.webp"
              alt=""
              srcset=""
            />
          </div>
        </div>
      </div>
    </section>
    <section class="separador"></section>

    <section class="segredo-da-formula">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h2 class="mb-3">
              O <span>segredo da fórmula</span> de sucesso está aqui!
            </h2>
            <p class="sub-title mb-3 mb-sm-5">
              O Q10 Gold foi desenvolvido com ativos rigorosamente selecionados
              que combatem, reduzem e previnem as rugas e linhas de expressão
              com máxima eficiência e em poucos dias.
            </p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div
              class="row justify-content-center text-center text-sm-left pb-2 pb-sm-4"
            >
              <div class="col-md-4">
                <img
                  class="img-fluid"
                  src="imagens/acido_pantotenico.webp"
                  alt=""
                  srcset=""
                />
              </div>
              <div class="col-md-8 pr-3 pr-sm-0">
                <h3>Ácido Pantotênico</h3>
                <p class="mb-3 mb-sm-0">
                  Ativo essencial no metabolismo para evitar que o corpo possua
                  deficiência de nutrientes, evitando queda de cabelos,
                  dermatites e vitiligo. Além disso, atua como hidratante e
                  regenerador para a pele.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div
              class="row justify-content-center text-center text-sm-left pb-2 pb-sm-4"
            >
              <div class="col-md-4">
                <img
                  class="img-fluid"
                  src="imagens/complexo_b.webp"
                  alt=""
                  srcset=""
                />
              </div>
              <div class="col-md-8 pr-3 pr-sm-0">
                <h3>Complexo B</h3>
                <p class="mb-3 mb-sm-0">
                  Auxilia na luminosidade e tonalidade da pele, sendo
                  responsável por restaurar, suavizar e amaciar as áreas
                  danificadas, aumentando a resistência e controlando a produção
                  excessiva de sebo.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div
              class="row justify-content-center text-center text-sm-left pb-2 pb-sm-4"
            >
              <div class="col-md-4">
                <img
                  class="img-fluid"
                  src="imagens/biotina.webp"
                  alt=""
                  srcset=""
                />
              </div>
              <div class="col-md-8 pr-3 pr-sm-0">
                <h3>Biotina</h3>
                <p class="mb-3 mb-sm-0">
                  Ajuda no metabolismo de carboidratos, proteínas e gorduras,
                  melhorando a saúde da pele. A ausência desse nutriente pode
                  fazer com que a pele fique seca, escamosa e mais suscetível a
                  danos.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div
              class="row justify-content-center text-center text-sm-left pb-2 pb-sm-4"
            >
              <div class="col-md-4">
                <img
                  class="img-fluid"
                  src="imagens/vitamina_a.webp"
                  alt=""
                  srcset=""
                />
              </div>
              <div class="col-md-8 pr-3 pr-sm-0">
                <h3>Vitamina A</h3>
                <p class="mb-3 mb-sm-0">
                  Ativo poderoso que age diretamente na renovação celular e
                  síntese de colágeno, combatendo a flacidez, oleosidade e,
                  automaticamente, tornando a pele mais jovem e saudável.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div
              class="row justify-content-center text-center text-sm-left pb-2 pb-sm-4"
            >
              <div class="col-md-4">
                <img
                  class="img-fluid"
                  src="imagens/coenzima_q10.webp"
                  alt=""
                  srcset=""
                />
              </div>
              <div class="col-md-8 pr-3 pr-sm-0">
                <h3>Coenzima Q10</h3>
                <p class="mb-3 mb-sm-0">
                  Elimina todos os radicais que aceleram o envelhecimento além
                  de proteger as células de futuros danos, mantendo sua pele
                  saudável.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div
              class="row justify-content-center text-center text-sm-left pb-2 pb-sm-4"
            >
              <div class="col-md-4">
                <img
                  class="img-fluid"
                  src="imagens/vitamina_c.webp"
                  alt=""
                  srcset=""
                />
              </div>
              <div class="col-md-8 pr-3 pr-sm-0">
                <h3>Vitamina C</h3>
                <p class="mb-3 mb-sm-0">
                  Substância indispensável no combate ao envelhecimento, pois
                  atua prevenindo e suavizando as rugas e linhas de expressões.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div
              class="row justify-content-center text-center text-sm-left pb-2 pb-sm-4"
            >
              <div class="col-md-4">
                <img
                  class="img-fluid"
                  src="imagens/vitamina_e.webp"
                  alt=""
                  srcset=""
                />
              </div>
              <div class="col-md-8 pr-3 pr-sm-0">
                <h3>Vitamina E</h3>
                <p class="mb-3 mb-sm-0">
                  É um poderoso antioxidante, ou seja, combate os radicais
                  livres e mantém a pele jovem e saudável por mais tempo.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <button type="button" class="btn btn-lg btn-block botao-padrao">
              Quero eliminar as rugas!
            </button>
          </div>
        </div>
      </div>
    </section>
    <section class="separador"></section>

    <section class="midia">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h2>O que a mídia fala sobre o <span>poderoso Q10 Gold?</span></h2>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-6 pb-3">
            <div class="img-container">
              <img src="imagens/uol.webp" class="img-fluid" alt="" srcset="" />
            </div>
            <p>
              "Cápsulas que suavizam as rugas estão sendo chamadas de a nova
              fonte da juventude entre as Celebridades...”
            </p>
          </div>
          <div class="col-md-6 pb-3">
            <div class="img-container">
              <img src="imagens/g1.webp" class="img-fluid" alt="" srcset="" />
            </div>
            <p>
              "Composto milagroso em forma de cápsulas, promete acabar
              definitivamente com as rugas e linhas de expressão sem sair de
              casa!”
            </p>
          </div>
          <div class="col-md-6 pb-3">
            <div class="img-container">
              <img
                src="imagens/globoreporter.webp"
                class="img-fluid"
                alt=""
                srcset=""
              />
            </div>
            <p>
              “Se tornou possível tratar as rugas sem procedimentos estéticos
              caros e dolorosos. Novas cápsulas prometem eliminar o problema
              pela raiz.”
            </p>
          </div>
          <div class="col-md-6 pb-3">
            <div class="img-container">
              <img src="imagens/r7.webp" class="img-fluid" alt="" srcset="" />
            </div>
            <p>
              “... Quando a fórmula entra em contato com a pele, é possível
              senti-la se “esticando” e amenizando a cada aplicação as rugas e
              linhas de expressões...”
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="separador"></section>

    <section class="depoimentos-que-transformaram-vidas">
      <div class="container">
        <div class="row text-center pb-3">
          <div class="col-md-12">
            <h2>
              Depoimentos de clientes que
              <span> transformaram suas vidas do dia pra noite </span> com Q10
              Gold!
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 pb-3">
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
              <iframe
                class="embed-responsive-item"
                src="https://www.youtube.com/embed/Tt5fcsCJzoQ"
              ></iframe>
            </div>
          </div>
          <div class="col-md-6 pb-3">
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
              <iframe
                class="embed-responsive-item"
                src="https://www.youtube.com/embed/7Uudt2kjL2M"
              ></iframe>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-12">
            <button
              type="button"
              class="btn btn-lg btn-block botao-padrao mb-4 mt-1"
            >
              Quero eliminar as rugas!
            </button>
            <img
              width="400"
              class="img-fluid mb-4"
              src="imagens/icones_topo.webp"
              alt=""
              srcset=""
            />
          </div>
        </div>
      </div>
    </section>

    <section class="essas-mulheres-que-acabaram-com-as-rugas">
      <div class="destaque mb-5">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="m-0">
                Essas mulheres que acabaram com as rugas de forma rápida e
                simples, sem sacrifícios!
              </h2>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6 pb-3">
            <img class="img-fluid" src="imagens/depoimento_01.webp" alt="" />
          </div>
          <div class="col-md-6 pb-3">
            <img class="img-fluid" src="imagens/depoimento_02.webp" alt="" />
          </div>
          <div class="col-md-6 pb-3">
            <img class="img-fluid" src="imagens/depoimento_03.webp" alt="" />
          </div>
          <div class="col-md-6 pb-3">
            <img class="img-fluid" src="imagens/depoimento_04.webp" alt="" />
          </div>
        </div>
      </div>
    </section>
    <section class="separador"></section>

    <section class="conheca-mulheres-que-tiveram-suas-vidas-tranformadas">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h2>
              Conheça mulheres que tiveram
              <span>suas vidas transformadas!</span>
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 pb-3">
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
              <iframe
                class="embed-responsive-item"
                src="https://www.youtube.com/embed/-C4qrR-KOTc"
              ></iframe>
            </div>
          </div>
          <div class="col-md-6 pb-3">
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
              <iframe
                class="embed-responsive-item"
                src="https://www.youtube.com/embed/tIAR8KE3nEA"
              ></iframe>
            </div>
          </div>
          <div class="col-md-6 pb-3">
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
              <iframe
                class="embed-responsive-item"
                src="https://www.youtube.com/embed/AN2YvgwHD_A"
              ></iframe>
            </div>
          </div>
          <div class="col-md-6 pb-3">
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
              <iframe
                class="embed-responsive-item"
                src="https://www.youtube.com/embed/SdaIRMNUBt8"
              ></iframe>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-12">
            <button
              type="button"
              class="btn btn-lg btn-block botao-padrao mb-4 mt-1"
            >
              SIM! Quero eliminar as rugas!
            </button>
            <img
              width="400"
              class="img-fluid mb-4"
              src="imagens/icones_topo.webp"
              alt=""
              srcset=""
            />
          </div>
        </div>
      </div>
    </section>
    <section class="separador"></section>

    <section class="kits">
      <div class="container">
        <div class="row text-center pb-3 mb-4">
          <div class="col-md-12">
            <h2 class="title-kits">
              Escolha a <span>melhor opção</span> para você!
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="row justify-content-center">
              <!-- KIT 3 + 3 -->
              <div class="col-lg-4 pb-4">
                <a href="<?php echo $kit3 ?>">
                  <div class="card">
                    <div class="card-body card-cor-fundo-kits text-center">
                      <div
                        class="row d-flex justify-content-center align-items-center no-gutters bg-roxo"
                      >
                        <div class="col-2 col-md-2 bg-cinza py-2">
                          <div class="row no-gutters">
                            <div class="col-md-12">
                              <p class="percentual-desconto-maior-desconto">
                                51%
                              </p>
                            </div>
                          </div>
                          <div class="row no-gutters">
                            <div class="col-md-12">
                              <p class="off-maior-desconto">OFF</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-10 col-md-10 bg-roxo">
                          <div class="row no-gutters">
                            <div class="col blinking">
                              <div class="row no-gutters">
                                <div class="col-md-12">
                                  <h4 class="maior-desconto">Maior desconto</h4>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <h3 class="titulo-kits">
                        Compre 3 e <span>ganhe +3 grátis</span>
                      </h3>
                      <img
                        width="84%"
                        class="img-fluid py-2"
                        src="img/q10_kit-topo_13_05_21.webp"
                        alt="Card image cap"
                      />
                      <!-- SETAS E VALORES -->
                      <div
                        class="row d-flex justify-content-center align-items-center no-gutters"
                      >
                        <div class="col-3">
                          <img
                            class="img-fluid blinking seta-esquerda"
                            src="img/seta_esquerda.webp"
                            width="50%"
                            alt=""
                          />
                        </div>
                        <div class="col-6">
                          <p class="informacoes">
                            <span class="de-por">De R$ 942,00</span><br />
                            <span class="por">Por <span>R$ 459,00</span></span
                            ><br />
                            <span class="por-apenas-kits"
                              >ou em <span>até 12x</span> de</span
                            ><br />
                            <span class="valor-kits">R$ 50,83</span>
                          </p>
                        </div>
                        <div class="col-3">
                          <img
                            class="img-fluid blinking seta-direita"
                            src="img/seta_direita.webp"
                            width="50%"
                            alt=""
                          />
                        </div>
                      </div>
                      <!-- BOTAO -->
                      <div class="row pt-sm-3 pt-md-4 pt-lg-0">
                        <div class="col-12">
                          <button
                            type="button"
                            class="btn btn-lg btn-block botao-kit mb-2"
                          >
                            Comprar Agora
                          </button>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <p>
                            <span class="contem">Contém:</span> 6 frascos de Q10
                            Gold
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="row">
                  <div class="col-md-12">
                    <img
                      class="img-fluid py-3"
                      src="img/banner_frete.webp"
                      alt=""
                      srcset=""
                    />
                  </div>
                </div>
              </div>
              <!-- KIT 2 + 1 -->
              <div class="col-lg-4 pb-4">
                <a href="<?php echo $kit2 ?>">
                  <div class="card">
                    <div class="card-body card-cor-fundo-kits text-center">
                      <div
                        class="row d-flex justify-content-center align-items-center no-gutters bg-cinza"
                      >
                        <div class="col-2 col-md-2 bg-roxo py-2">
                          <div class="row no-gutters">
                            <div class="col-md-12">
                              <p class="percentual-desconto">38%</p>
                            </div>
                          </div>
                          <div class="row no-gutters">
                            <div class="col-md-12">
                              <p class="off">OFF</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-10">
                          <div class="row no-gutters">
                            <div class="col">
                              <h4 class="o-mais-vendido">Mais vendido</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                      <h3 class="titulo-kits">
                        Compre 2 e <span>ganhe +1 grátis</span>
                      </h3>
                      <img
                        width="80%"
                        class="img-fluid py-2"
                        src="img/q10_kit02_13_05_21.webp"
                        alt="Card image cap"
                      />
                      <!-- SETAS E VALORES -->
                      <div
                        class="row d-flex justify-content-center align-items-center no-gutters"
                      >
                        <div class="col-3">
                          <img
                            class="img-fluid blinking seta-esquerda"
                            src="img/seta_esquerda.webp"
                            width="50%"
                            alt=""
                          />
                        </div>
                        <div class="col-6">
                          <p class="informacoes">
                            <span class="de-por">De R$471,00</span><br />
                            <span class="por">Por <span>R$ 289,86</span></span
                            ><br />
                            <span class="por-apenas-kits"
                              >ou em <span>até 12x</span> de</span
                            ><br />
                            <span class="valor-kits">R$ 32,10</span>
                          </p>
                        </div>
                        <div class="col-3">
                          <img
                            class="img-fluid blinking seta-direita"
                            src="img/seta_direita.webp"
                            width="50%"
                            alt=""
                          />
                        </div>
                      </div>
                      <!-- BOTAO -->
                      <div class="row pt-2 pt-sm-3 pt-md-4 pt-lg-0">
                        <div class="col-12">
                          <button
                            type="button"
                            class="btn btn-lg btn-block botao-kit mb-2"
                          >
                            Comprar Agora
                          </button>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <p>
                            <span class="contem">Contém:</span> 3 frascos de Q10
                            Gold
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="row">
                  <div class="col-md-12">
                    <img
                      class="img-fluid py-3"
                      src="img/banner_frete.webp"
                      alt=""
                      srcset=""
                    />
                  </div>
                </div>
              </div>
              <!-- KIT 1 -->
              <div class="col-lg-4">
                <a href="<?php echo $kit1 ?>">
                  <div class="card">
                    <div class="card-body card-cor-fundo-kits text-center">
                      <div
                        class="row d-flex justify-content-center align-items-center no-gutters bg-cinza"
                      >
                        <div class="col-2 col-md-2 bg-roxo py-2">
                          <div class="row no-gutters">
                            <div class="col-md-12">
                              <p class="percentual-desconto">21%</p>
                            </div>
                          </div>
                          <div class="row no-gutters">
                            <div class="col-md-12">
                              <p class="off">OFF</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-10">
                          <div class="row no-gutters">
                            <div class="col">
                              <h4 class="experimente">Experimente</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                      <h3 class="titulo-kits">Compre 1 Q10 Gold</h3>
                      <img
                        width="80%"
                        class="img-fluid py-2"
                        src="img/q10_kit01_13_05_21.webp"
                        alt="Card image cap"
                      />
                      <!-- SETAS E VALORES -->
                      <div
                        class="row d-flex justify-content-center align-items-center no-gutters"
                      >
                        <div class="col-3">
                          <img
                            class="img-fluid blinking seta-esquerda"
                            src="img/seta_esquerda.webp"
                            width="50%"
                            alt=""
                          />
                        </div>
                        <div class="col-6">
                          <p class="informacoes">
                            <span class="de-por">De R$199,80</span><br />
                            <span class="por">Por <span>R$ 157,00</span></span
                            ><br />
                            <span class="por-apenas-kits"
                              >ou em <span>até 6x</span> de</span
                            ><br />
                            <span class="valor-kits">R$ 30,08</span>
                          </p>
                        </div>
                        <div class="col-3">
                          <img
                            class="img-fluid blinking seta-direita"
                            src="img/seta_direita.webp"
                            width="50%"
                            alt=""
                          />
                        </div>
                      </div>
                      <!-- BOTAO -->
                      <div class="row pt-2 pt-sm-3 pt-md-4 pt-lg-0">
                        <div class="col-12">
                          <button
                            type="button"
                            class="btn btn-lg btn-block botao-kit mb-2"
                          >
                            Comprar Agora
                          </button>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <p>
                            <span class="contem">Contém:</span> 1 frasco de Q10
                            Gold
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="separador"></section>

    <section class="garantia">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-6">
            <h2 class="d-block d-md-none text-center text-sm-left pb-3">
              Satisfação garantida ou <span>seu dinheiro de volta!</span>
            </h2>
            <img
              src="imagens/garantia.webp"
              class="img-fluid pb-3 pb-sm-0"
              alt=""
            />
          </div>
          <div class="col-md-6">
            <h2 class="d-none d-md-block pb-3">
              Satisfação garantida ou <span>seu dinheiro de volta!</span>
            </h2>
            <p class="pb-3">
              Ou suas rugas acabam, ou compramos o Q10 Gold de volta de você! É
              isso mesmo! Se por algum motivo, dentro do prazo de 30 dias você
              não tiver resultados, nós compraremos os frascos de volta. Mesmo
              que algum dos potes já esteja violado, pagaremos o mesmo preço que
              você pagou por eles cheios.
            </p>
            <button
              type="button"
              class="btn btn-lg btn-block botao-padrao mb-4 mt-1"
            >
              Quero eliminar as rugas!
            </button>
          </div>
        </div>
      </div>
    </section>

    <section class="perguntas-frequentes">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12 pb-3">
            <h2>Perguntas Frequentes</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div id="accordion">
              <div class="card bordas-accordion">
                <a
                  class="btn-link collapsed"
                  data-toggle="collapse"
                  href="#collapseOne"
                  aria-expanded="false"
                >
                  <div class="card-header accordion">O que é o Q10 Gold?</div>
                </a>
                <div id="collapseOne" class="collapse" data-parent="#accordion">
                  <div class="card-body conteudo-acordion">
                    É um complexo vitamínico que regenera as células e combate
                    os radicais livres, os grandes causadores das rugas e linhas
                    de expressão, proporcionando também um melhor
                    condicionamento físico, fornecendo mais energia, prevenindo
                    doenças como Alzheimer e Parkinson, além de cuidar do
                    coração prevenindo infartos ele estabiliza os batimentos
                    cardíacos
                  </div>
                </div>
              </div>
              <div class="card bordas-accordion">
                <a
                  class="btn-link collapsed"
                  data-toggle="collapse"
                  href="#collapseTwo"
                  aria-expanded="false"
                >
                  <div class="card-header accordion">
                    Como a cápsula age no corpo?
                  </div>
                </a>
                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                  <div class="card-body conteudo-acordion">
                    As cápsulas Q10 Gold, foram desenvolvidas com uma nova
                    tecnologia na produção de cápsulas. Tecnologia essa que no
                    momento do contato da cápsula com o organismo ela solta
                    gradativamente os ativos vitamínicos, começando a agir desde
                    o primeiro contato.
                  </div>
                </div>
              </div>
              <div class="card bordas-accordion">
                <a
                  class="btn-link collapsed"
                  data-toggle="collapse"
                  href="#collapseThree"
                  aria-expanded="false"
                >
                  <div class="card-header accordion">
                    Quantas vezes ao dia devo tomar a cápsula?
                  </div>
                </a>
                <div
                  id="collapseThree"
                  class="collapse"
                  data-parent="#accordion"
                >
                  <div class="card-body conteudo-acordion">
                    É recomendado tomar duas cápsulas por dia. De manhã, logo
                    após o café da manhã e na noite, após o jantar. Vale
                    ressaltar que o efeito da cápsula varia de pessoa para
                    pessoa e que os hábitos de vida podem gerar diferentes
                    resultados.
                  </div>
                </div>
              </div>
              <div class="card bordas-accordion">
                <a
                  class="collapsed btn-link"
                  data-toggle="collapse"
                  href="#collapseFour"
                >
                  <div class="card-header accordion">
                    É seguro tomar as cápsulas?
                  </div>
                </a>
                <div
                  id="collapseFour"
                  class="collapse"
                  data-parent="#accordion"
                >
                  <div class="card-body conteudo-acordion">
                    As cápsulas de Q10 Gold, funcionam como um complexo
                    vitamínico, pois sua fórmula é a base de vitaminas
                    essenciais para o bom desenvolvimento do organismo humano,
                    então o torna segura, mas não dispense a orientação do seu
                    médico.
                  </div>
                </div>
              </div>
              <div class="card bordas-accordion">
                <a
                  class="collapsed btn-link"
                  data-toggle="collapse"
                  href="#collapseFive"
                >
                  <div class="card-header accordion">
                    Como potencializar os resultados?
                  </div>
                </a>
                <div
                  id="collapseFive"
                  class="collapse"
                  data-parent="#accordion"
                >
                  <div class="card-body conteudo-acordion">
                    Os resultados das cápsulas Q10 Gold podem ser
                    potencializados através de uma dieta rica em vitaminas e
                    também com exercícios físicos, melhorando a absorção dos
                    nutrientes pelo organismo.
                  </div>
                </div>
              </div>
              <div class="card bordas-accordion">
                <a
                  class="collapsed btn-link"
                  data-toggle="collapse"
                  href="#collapseSix"
                >
                  <div class="card-header accordion">
                    Existem efeitos colaterais?
                  </div>
                </a>
                <div id="collapseSix" class="collapse" data-parent="#accordion">
                  <div class="card-body conteudo-acordion">
                    A coenzima Q10 é SEGURA para a maioria dos adultos quando
                    tomada por via oral. Embora a maioria das pessoas tolere bem
                    a coenzima Q10, ela pode causar alguns efeitos colaterais
                    leves, incluindo dores de estômago, perda de apetite,
                    náusea, vômito e diarréia. Pode causar erupções cutâneas
                    alérgicas em algumas pessoas.
                  </div>
                </div>
              </div>
              <div class="card bordas-accordion">
                <a
                  class="collapsed btn-link"
                  data-toggle="collapse"
                  href="#collapseSeven"
                >
                  <div class="card-header accordion">
                    Além da flacidez, onde mais o Q10 Gold pode me ajudar?
                  </div>
                </a>
                <div
                  id="collapseSeven"
                  class="collapse"
                  data-parent="#accordion"
                >
                  <div class="card-body conteudo-acordion">
                    <p>
                      Os estudos apontam que a suplementação desta enzima ajuda
                      nos tratamentos de:
                    </p>

                    <ul>
                      <li>Doença Alzheimer</li>
                      <li>Doença de Parkinson</li>
                      <li>
                        Doenças cardiovasculares (Insuficiência cardíaca,
                        isquemias, síndrome metabólica,)
                      </li>
                      <li>envelhecimento do corpo</li>
                      <li>Diminuição da fertilidade</li>
                      <li>Diminuição da inflamação corporal</li>
                      <li>Doenças do rim</li>
                      <li>Síndrome da deficiência mitocondrial FIBROMIALGIA</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="selos">
      <div class="container">
        <div
          class="row d-flex justify-content-center align-items-center text-center"
        >
          <div class="col-6 col-xl-2 col-lg-4 col-md-4 col-sm-4">
            <img class="img-fluid" src="img/selo-google.webp" alt="" />
          </div>
          <div class="col-6 col-xl-2 col-lg-4 col-md-4 col-sm-4">
            <img class="img-fluid" src="img/selo-ssh.webp" alt="" />
          </div>
          <div class="col-6 col-xl-2 col-lg-4 col-md-4 col-sm-4">
            <img
              class="img-fluid"
              src="img/compra-segura-triptoz.webp"
              alt=""
            />
          </div>
          <div class="col-6 col-xl-2 col-lg-4 col-md-4 col-sm-4">
            <img class="img-fluid" src="img/anvisa-triptoz.webp" alt="" />
          </div>
          <div class="col-6 col-xl-2 col-lg-4 col-md-4 col-sm-4">
            <img class="img-fluid" src="img/logo_monetizze.webp" alt="" />
          </div>
          <div class="col-6 col-xl-2 col-lg-4 col-md-4 col-sm-4">
            <img class="img-fluid" src="img/selo-ggc.webp" alt="" />
          </div>
        </div>
      </div>
    </section>

    <section id="rodape">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-3 col-xl-3 text-center">
            <h2 class="mb-2 mb-sm-2 mb-md-3">Contato</h2>
            <p class="telefone">(51) 3658-4790</p>
            <p class="email">contato@grupogoldclub.com</p>
            <p class="termos">
              <a
                href="https://q10gold.com.br/termos-e-condicoes/"
                style="text-decoration: none; color: #212529"
                >Termos e Condições
              </a>
            </p>
            <p class="trocas">
              <a
                href="https://q10gold.com.br/termos-e-condicoes/"
                style="text-decoration: none; color: #212529"
                >Trocas e Devoluções
              </a>
            </p>
          </div>
          <div class="col-6 col-md-6 col-lg-3 col-xl-3 text-center">
            <h2 class="mb-2 mb-sm-2 mb-md-3">Formas de Pagamentos</h2>
            <img class="img-rodape" src="img/pagamento.webp" />
          </div>
          <div class="col-6 col-md-6 col-lg-3 col-xl-3 text-center">
            <h2 class="mb-2 mb-sm-2 mb-md-3">Formas de Entrega</h2>
            <img
              class="img-rodape correios"
              src="img/correios-pac-sedex.webp"
            />
          </div>
          <div class="col-12 col-md-6 col-lg-3 col-xl-3 text-center">
            <h2 class="mb-2 mb-sm-2 mb-md-3">Fale Conosco</h2>
            <a
              href="https://api.whatsapp.com/send?phone=555197063167&text=(M)%20%20Quero%20saber%20mais%20sobre%20o%20Q10%20Gold!"
              ><img class="img-rodape whats" src="img/fale-conosco.webp"
            /></a>
          </div>
        </div>
      </div>
    </section>

    <section class="footer">
      <div class="container">
        <div class="row text-center text-white">
          <div class="col-md-12">
            <p>
              Copyright 2021 © Q10 Gold. Todos os direitos reservados a Gold
              Club.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="whatsapp-rolante">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <a
              href="https://api.whatsapp.com/send?phone=555197063167&text=(M)%20%20Quero%20saber%20mais%20sobre%20o%20Q10%20Gold!"
            >
              <img class="botao-whats" src="img/whatsapp.png" />
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>

    <!-- Funções -->
    <script src="https://www.youtube.com/player_api"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
