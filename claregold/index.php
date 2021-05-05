<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- TITLE -->
    <title>CLAREGOLD OFERTA</title>

    <!-- FAV ICON -->
    <link rel="icon" href="img/favicon.ico" sizes="32x32" />

    <!-- FONTAWESOME -->
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />

    <!-- BOOTSTRAP CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />

    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Toast CSS -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"
      rel="stylesheet"
    />

    <!-- OWL CAROUSEL -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css"
      integrity="sha512-X/RSQYxFb/tvuz6aNRTfKXDnQzmnzoawgEQ4X8nZNftzs8KFFH23p/BA6D2k0QCM4R0sY1DEy9MIY9b3fwi+bg=="
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.css"
      integrity="sha512-itF/9I/NigY9u4ukjw9s7/kG6SC7LJ5Q4pRNMnTbGZAsO4/RSUelfVuYBk8AkSk23qEcucIqdUlzzpy2qf7jGg=="
      crossorigin="anonymous"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css?v=1" />

    <!-- ROBOTO FONT -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&amp;display=swap"
      rel="stylesheet"
    />

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
      fbq("track", "ViewContent");
    </script>

    <noscript
      ><img
        height="1"
        width="1"
        style="display: none"
        src="https://www.facebook.com/tr?id=<?php echo $pixel ?>&ev=PageView&noscript=1"
      />
    </noscript>
    <!-- End Facebook Pixel Code -->

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
      })(window, document, "script", "dataLayer", "GTM-PTWLL86");
    </script>
    <!-- End Google Tag Manager -->
  </head>

  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript
      ><iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-PTWLL86"
        height="0"
        width="0"
        style="display: none; visibility: hidden"
      ></iframe
    ></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Blank Page Code -->
    <img
      src="<?php echo $paginaembranco ?>"
      height="0"
      width="0"
      style="display: none"
    />

    <!-- START LOGO -->
    <section class="logo">
      <div class="container">
        <div
          class="row d-flex justify-content-center align-items-center text-center"
        >
          <div class="col-md-12">
            <img
              width="100"
              class="img-fluid"
              src="img/logo_claregold.webp"
              alt=""
              srcset=""
            />
          </div>
        </div>
      </div>
    </section>
    <!-- END LOGO -->

    <!-- START BANNER DESK -->
    <a href="#kits">
      <section class="destaque d-none d-sm-block"></section>
    </a>
    <!-- END BANNER -->

    <!-- START BANNER MOBILE  -->
    <section class="banner-mobile d-block d-sm-none">
      <div class="container">
        <a href="#kits">
          <div
            class="row d-flex justify-content-center align-items-center text-center"
          >
            <div class="col-md-12">
              <img
                width="260"
                class="img-fluid py-2"
                src="img/logo.png"
                alt=""
                srcset=""
              />
            </div>
            <div class="col-md-12">
              <img
                width="150"
                class="img-fluid py-1"
                src="img/compre_leve.png"
                alt=""
                srcset=""
              />
            </div>
            <div class="col-md-12">
              <img
                width="280"
                class="img-fluid py-1"
                src="img/kit.png"
                alt=""
                srcset=""
              />
            </div>
            <div class="col-md-12">
              <img
                class="img-fluid py-1"
                src="img/preco.png"
                alt=""
                srcset=""
              />
            </div>
            <div class="col-md-12">
              <img
                class="img-fluid pb-2"
                src="img/botao.png"
                alt=""
                srcset=""
              />
            </div>
            <div class="col-md-12">
              <img
                class="img-fluid py-2"
                src="img/icones.png"
                alt=""
                srcset=""
              />
            </div>
          </div>
        </a>
      </div>
    </section>
    <!-- END TOPO NOVO  -->

    <!-- START AVISO -->
    <section class="aviso">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12 pb-2">
            <h4 class="mb-0">Estoque disponível por pouco tempo!!</h4>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-12 pb-2">
            <p class="mb-0">
              Devido a grande demanda, restaram apenas
              <span> ALGUMAS UNIDADES DISPONÍVEIS </span> em nosso estoque.
              Garanta o seu <span>AGORA</span>, pois deve acabar HOJE
              <span class="data"></span>.
            </p>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-12">
            <p class="oferta-expira mb-0">Oferta expira em</p>
            <p class="horario">
              <span class="min">15</span>:<span class="seg">50</span>
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- END AVISO -->

    <!-- START KITS -->
    <section class="kits" id="kits">
      <div class="container">
        <div class="row text-center pb-3">
          <div class="col-md-12">
            <h2 class="mb-4"><span>Escolha agora mesmo o</span> seu kit!</h2>
            <p class="mt-4">
              Aproveite essa chance única de garantir o clareador de manchas
              mais eficaz do mercado, o ClareGold!
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="row justify-content-center">
              <!-- KIT 3 -->
              <div class="col-lg-4 pb-5 pb-lg-0">
                <a href="<?php echo $kit3_claregold_oferta_maes ?>">
                  <div class="card">
                    <div class="card-body card-cor-fundo-kits text-center">
                      <div
                        class="row d-flex justify-content-center align-items-center no-gutters bg-escuro"
                      >
                        <div class="col-2 col-md-2 bg-roxo py-2">
                          <div class="row no-gutters">
                            <div class="col-md-12">
                              <p class="percentual-desconto">+57%</p>
                            </div>
                          </div>
                          <div class="row no-gutters">
                            <div class="col-md-12">
                              <p class="off">OFF</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-10 col-md-10 bg-escuro">
                          <div class="row no-gutters">
                            <div class="col text-right">
                              <i class="fas fa-trophy-alt trofeu"></i>
                            </div>
                            <div class="col blinking">
                              <div class="row no-gutters">
                                <div class="col">
                                  <p class="o-mais">O MAIS</p>
                                </div>
                              </div>
                              <div class="row no-gutters">
                                <div class="col">
                                  <p class="vendido">VENDIDO</p>
                                </div>
                              </div>
                            </div>
                            <div class="col text-left">
                              <i class="fas fa-trophy-alt trofeu"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <h3 class="titulo-kits">
                        Compre 3<br />
                        <span>e ganhe +3 grátis +1 Body Gold</span>
                      </h3>
                      <img
                        class="img-fluid py-2"
                        src="img/claregold_kit03.png"
                        alt="Card image cap"
                      />
                      <!-- SETAS E VALORES -->
                      <div
                        class="row d-flex justify-content-center align-items-center no-gutters"
                      >
                        <div class="col-3 text-right">
                          <img
                            class="img-fluid blinking seta-esquerda"
                            src="img/seta_esquerda.webp"
                            alt=""
                          />
                        </div>
                        <div class="col-6">
                          <p class="informacoes">
                            <span class="de-por">De R$ 799,60</span><br />
                            <span class="por">Por <span>R$ 347,70</span></span
                            ><br />
                            <span class="por-apenas"
                              >ou em <span>até 12x</span> de</span
                            ><br />
                            <span class="valor">R$ 38,50</span>
                          </p>
                        </div>
                        <div class="col-3 text-left">
                          <img
                            class="img-fluid blinking seta-direita"
                            src="img/seta_direita.webp"
                            alt=""
                          />
                        </div>
                      </div>
                      <!-- BOTAO -->
                      <div class="row pt-sm-3 pt-md-4 pt-lg-0">
                        <div class="col-12">
                          <button
                            type="button"
                            class="btn btn-lg btn-block botao mb-2"
                          >
                            Comprar Agora
                          </button>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <p>
                            <span class="contem">Contém:</span> 6 frascos de
                            ClareGold + 1 frasco de Body Gold
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <!-- KIT 2 -->
              <div class="col-lg-4 pb-5 pb-lg-0">
                <a href="<?php echo $kit2_claregold_oferta_maes ?>">
                  <div class="card">
                    <div class="card-body card-cor-fundo-kits text-center">
                      <div
                        class="row d-flex justify-content-center align-items-center no-gutters bg-cinza"
                      >
                        <div class="col-2 col-md-2 bg-roxo py-2">
                          <div class="row no-gutters">
                            <div class="col-md-12">
                              <p class="percentual-desconto">+33%</p>
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
                              <h4>Clareamento Intenso</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                      <h3 class="titulo-kits">
                        Compre 2 <br />
                        <span>e ganhe +1 grátis +1 Body Gold</span>
                      </h3>
                      <img
                        class="img-fluid py-2"
                        src="img/claregold_kit02.png"
                        alt="Card image cap"
                      />
                      <!-- SETAS E VALORES -->
                      <div
                        class="row d-flex justify-content-center align-items-center no-gutters"
                      >
                        <div class="col-3 text-right">
                          <img
                            class="img-fluid blinking seta-esquerda"
                            src="img/seta_esquerda.webp"
                            alt=""
                          />
                        </div>
                        <div class="col-6">
                          <p class="informacoes">
                            <span class="de-por">De R$ 399,80</span><br />
                            <span class="por">Por <span>R$ 267,80</span></span
                            ><br />
                            <span class="por-apenas"
                              >ou em <span>até 12x</span> de</span
                            ><br />
                            <span class="valor">R$ 29,66</span>
                          </p>
                        </div>
                        <div class="col-3 text-left">
                          <img
                            class="img-fluid blinking seta-direita"
                            src="img/seta_direita.webp"
                            alt=""
                          />
                        </div>
                      </div>
                      <!-- BOTAO -->
                      <div class="row pt-2 pt-sm-3 pt-md-4 pt-lg-0">
                        <div class="col-12">
                          <button
                            type="button"
                            class="btn btn-lg btn-block botao mb-2"
                          >
                            Comprar Agora
                          </button>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <p>
                            <span class="contem">Contém:</span> 3 frascos de
                            ClareGold + 1 frasco de Body Gold
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <!-- KIT 1 -->
              <div class="col-lg-4">
                <a href="<?php echo $kit1_claregold_oferta_maes ?>">
                  <div class="card">
                    <div class="card-body card-cor-fundo-kits text-center">
                      <div
                        class="row d-flex justify-content-center align-items-center no-gutters bg-cinza"
                      >
                        <div class="col-2 col-md-2 bg-roxo py-2">
                          <div class="row no-gutters">
                            <div class="col-md-12">
                              <p class="percentual-desconto">+26%</p>
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
                              <h4>Experimente</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                      <h3 class="titulo-kits">Leve 1 Claregold</h3>
                      <img
                        class="img-fluid py-2 mt-4"
                        src="img/claregold_kit01.png"
                        alt="Card image cap"
                      />
                      <!-- SETAS E VALORES -->
                      <div
                        class="row d-flex justify-content-center align-items-center no-gutters"
                      >
                        <div class="col-3 text-right">
                          <img
                            class="img-fluid blinking seta-esquerda"
                            src="img/seta_esquerda.webp"
                            alt=""
                          />
                        </div>
                        <div class="col-6">
                          <p class="informacoes">
                            <span class="de-por">De R$199,80</span><br />
                            <span class="por">Por <span>R$ 147,90</span></span
                            ><br />
                            <span class="por-apenas"
                              >ou em <span>até 6x</span> de</span
                            ><br />
                            <span class="valor">R$ 28,34</span>
                          </p>
                        </div>
                        <div class="col-3 text-left">
                          <img
                            class="img-fluid blinking seta-direita"
                            src="img/seta_direita.webp"
                            alt=""
                          />
                        </div>
                      </div>
                      <!-- BOTAO -->
                      <div class="row pt-2 pt-sm-3 pt-md-4 pt-lg-0">
                        <div class="col-12">
                          <button
                            type="button"
                            class="btn btn-lg btn-block botao mb-2"
                          >
                            Comprar Agora
                          </button>
                        </div>
                      </div>
                      <div class="row pb-4">
                        <div class="col-md-12">
                          <p>
                            <span class="contem">Contém:</span> 1 frasco de
                            ClareGold
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
    <!-- END KITS -->

    <!-- START EBOOK -->
    <!-- <div class="ebook">
      <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col-md-6 text-center order-2 order-sm-1">
            <img
              width="450"
              class="img-fluid pb-4 pb-sm-0"
              src="img/ebook.webp"
              alt=""
              srcset=""
            />
          </div>
          <div class="col-md-6 text-center text-sm-left order-1 order-sm-2">
            <h2>
              Além de tratar as suas manchas você ainda ganha um
              <span> livro digital exclusivo </span> com dicas para
              potencializar o seu tratamento!
            </h2>
            <p>
              Neste livro, você receberá dicas e informações exclusivas que você
              deve e pode tomar para potencializar o seu tratamento e perceber
              os resultados cada vez mais rápido!
            </p>
          </div>
        </div>
      </div>
    </div> -->
    <!-- END EBOOK -->

    <!-- START VIDEO -->
    <section class="video">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2><span>ClareGold</span> funciona?</h2>
            <p class="pb-3">
              Veja alguns depoimentos enviados pelas nossas clientes!
            </p>
          </div>
        </div>
        <div class="row d-flex justify-content-center text-center">
          <div class="col-md-6 mb-4">
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
              <iframe
                class="embed-responsive-item"
                src="https://www.youtube.com/embed/krqec0ImrEM"
              ></iframe>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
              <iframe
                class="embed-responsive-item"
                src="https://www.youtube.com/embed/4U69n6_6dFw"
              ></iframe>
            </div>
          </div>
        </div>
        <div class="row d-flex justify-content-center text-center">
          <div class="col-md-6 mb-4">
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
              <iframe
                class="embed-responsive-item"
                src="https://www.youtube.com/embed/sJHvsJk42FA"
              ></iframe>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
              <iframe
                class="embed-responsive-item"
                src="https://www.youtube.com/embed/zBi4M_Ns_lg"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END VIDEO -->

    <!-- START CONFIRA OS DEPOIMENTOS -->
    <section class="depoimentos">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center py-3">
            <h2><span>Confira depoimentos de quem</span> usa o claregold!</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <img
              class="img-fluid pb-4 pb-sm-0"
              src="img/depoimento_01.webp"
              alt=""
              srcset=""
            />
          </div>
          <div class="col-md-4">
            <img
              class="img-fluid pb-4 pb-sm-0"
              src="img/depoimento_02.webp"
              alt=""
              srcset=""
            />
          </div>
          <div class="col-md-4">
            <img
              class="img-fluid pb-4 pb-sm-0"
              src="img/depoimento_03.webp"
              alt=""
              srcset=""
            />
          </div>
        </div>
      </div>
    </section>
    <!-- END CONFIRA OS DEPOIMENTOS -->

    <!-- START ANVISA -->
    <section class="anvisa">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center">
            <h2 class="text-center text-sm-left d-block d-md-none pb-3">
              <span>Eficácia e excelência</span> aprovadas pela anvisa!
            </h2>
            <img
              width="300"
              class="img-fluid pb-4 pb-sm-0"
              src="img/anvisa.webp"
              alt="certificado Anvisa"
              srcset=""
            />
          </div>
          <div class="col-md-6">
            <h2 class="text-center text-sm-left d-none d-md-block">
              <span>Eficácia e excelência</span> aprovadas pela anvisa!
            </h2>
            <p>
              O ClareGold passou em todos os testes de qualidade, segurança e
              eficácia, recebendo a aprovação da ANVISA sob o número de registro
              6.7416.0008.801-5. Sendo um dos poucos produtos que realmente traz
              resultados de forma natural, sem procedimentos invasivos
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- END ANVISA -->

    <!-- START GARANTIA -->
    <section class="anvisa garantia">
      <div class="container">
        <div class="row">
          <h2 class="text-center text-sm-left d-block d-md-none pb-3">
            <span>Garantia</span> que só o ClareGold oferece!
          </h2>
          <div class="col-md-6 text-center">
            <img
              width="300"
              class="img-fluid pb-4 pb-sm-0"
              src="img/selo-garantia.webp"
              alt="certificado Anvisa"
              srcset=""
            />
          </div>
          <div class="col-md-6">
            <h2 class="text-center text-sm-left d-none d-md-block">
              <span>Garantia</span> que só o ClareGold oferece!
            </h2>
            <p>
              O produto é aprovado pela <span>ANVISA</span> e
              <span>MINISTÉRIO DA SAÚDE,</span> por isso não oferece riscos a
              sua segurança e se compromete a entregar resultados satisfatórios
              que façam o cliente realizado com o produto e consigo mesmo.
            </p>
            <p>
              O produto é tão confiável que, se dentro de 30 dias (a partir da
              data de recebimento) você não tiver resultados, você poderá enviar
              seus frascos que nós nos responsabilizaremos de devolver todo o
              seu investimento. Ou seja, você não tem nada a perder!
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- END GARANTIA -->

    <!-- START CONTADOR -->
    <!-- <div class="container">
      <div class="row mt-3">
        <div class="col-12 d-flex justify-content-center">
          <div class="min-e-segundo">
            <div class="quadrado">
              <div class="conteudo-square">
                <p class="min">19</p>
                <p>Minutos</p>
              </div>
            </div>
            <div class="quadrado">
              <div class="conteudo-square">
                <p class="seg">59</p>
                <p>Segundos</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- END CONTADOR -->

    <!-- START PERGUNTAS FREQUENTES -->
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
                  <div class="card-header accordion">
                    Qual a forma que utiliza o produto?
                  </div>
                </a>
                <div id="collapseOne" class="collapse" data-parent="#accordion">
                  <div class="card-body conteudo-acordion">
                    O uso de ClareGold é diário, sendo recomendado o uso pela
                    manhã e noite, com a pele limpa, aplicar uma pequena
                    quantidade do produto diretamente nas manchas que deseja
                    tratar, com movimentos leves até total absorção do produto
                    pela pele, pela manhã é imprescindível o uso de protetor
                    solar com fator igual ou maior que 50 FPS.
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
                  <div class="card-header accordion">Formas de Pagamento</div>
                </a>
                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                  <div class="card-body conteudo-acordion">
                    Trabalhamos com duas formas de pagamentos com boleto
                    bancário no valor à vista e com cartões de crédito, podendo
                    parcelar em até 12 vezes.
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
                    ClareGold contém acido?
                  </div>
                </a>
                <div
                  id="collapseThree"
                  class="collapse"
                  data-parent="#accordion"
                >
                  <div class="card-body conteudo-acordion">
                    Sim, ele contém ácido hialurônico que acelera a redução de
                    manchas e o rejuvenescimento da pele.
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
                    Quantas aplicações rende um frasco?
                  </div>
                </a>
                <div
                  id="collapseFour"
                  class="collapse"
                  data-parent="#accordion"
                >
                  <div class="card-body conteudo-acordion">
                    Cada frasco rende aproximadamente 30 aplicações. O
                    tratamento recomendado é de 6 meses, reduzindo cerca de 80%
                    das manchas na pele.
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
                    As manchas voltam depois de interromper o tratamento?
                  </div>
                </a>
                <div
                  id="collapseFive"
                  class="collapse"
                  data-parent="#accordion"
                >
                  <div class="card-body conteudo-acordion">
                    odo tratamento estético quando interrompido pode ter
                    resultados diferentes do esperado. Lembrando que melasma não
                    tem cura, o ClareGold auxilia no tratamento de manchas na
                    pele e melasma, clareando gradativamente até se tornar
                    imperceptível, é muito importante que faça o tratamento
                    corretamente e passe protetor solar diariamente.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END PERGUNTAS FREQUENTES -->

    <!-- START SELOS -->
    <section class="selos">
      <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col-6 col-xl-2 col-lg-4 col-md-4 col-sm-4">
            <img class="img-fluid" src="img/selo-google.png" alt="" />
          </div>
          <div class="col-6 col-xl-2 col-lg-4 col-md-4 col-sm-4">
            <img class="img-fluid" src="img/selo-ssh.png" alt="" />
          </div>
          <div class="col-6 col-xl-2 col-lg-4 col-md-4 col-sm-4">
            <img class="img-fluid" src="img/compra-segura-triptoz.png" alt="" />
          </div>
          <div class="col-6 col-xl-2 col-lg-4 col-md-4 col-sm-6">
            <img class="img-fluid" src="img/anvisa-triptoz.png" alt="" />
          </div>
          <div
            class="col-6 col-xl-2 col-lg-4 col-md-4 col-sm-6"
            style="font-size: 11px"
          >
            <img class="img-fluid" src="img/logo_monetizze.png" alt="" />
          </div>
          <div class="col-6 col-xl-2 col-lg-4 col-md-4 col-sm-12">
            <img class="img-fluid" src="img/selo-ggc-1.png" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- END SELOS -->

    <!-- START RODAPÉ -->
    <div id="rodape">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-3 col-xl-3 text-center">
            <h2 class="mb-2 mb-sm-2 mb-md-3">Contato</h2>
            <p class="telefone">(51) 3658-4790</p>
            <p class="email">contato@grupogoldclub.com</p>
            <p class="termos">
              <a
                href="https://www.claregold.com.br/termos-e-condicoes/"
                style="text-decoration: none; color: #212529"
                >Termos e Condições
              </a>
            </p>
            <p class="trocas">
              <a
                href="https://www.claregold.com.br/termos-e-condicoes/"
                style="text-decoration: none; color: #212529"
                >Trocas e Devoluções
              </a>
            </p>
          </div>
          <div class="col-6 col-md-6 col-lg-3 col-xl-3 text-center">
            <h2 class="mb-2 mb-sm-2 mb-md-3">Formas de Pagamentos</h2>
            <img
              class="img-rodape"
              src="img/pagamento.png"
            />
          </div>
          <div class="col-6 col-md-6 col-lg-3 col-xl-3 text-center">
            <h2 class="mb-2 mb-sm-2 mb-md-3">Formas de Entrega</h2>
            <img
              class="img-rodape correios"
              src="img/correios-pac-sedex.png"
            />
          </div>
          <div class="col-12 col-md-6 col-lg-3 col-xl-3 text-center">
            <h2 class="mb-2 mb-sm-2 mb-md-3">Fale Conosco</h2>
            <a
              href="https://api.whatsapp.com/send?phone=5551995630424&text=%20Oi,%20quero%20saber%20mais%20sobre%20o%20Claregold.%20"
              ><img
                class="img-rodape whats"
                src="img/fale-conosco.png"
            /></a>
          </div>
          <div class="col-md-12">
            <p class="copyright">
              Copyright © Claregold. Todos os direitos reservados a Gold Club.
              CNPJ 26.747.518/0001-87.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- END RODAPÉ -->

    <!-- START WHATS ROLANTE  -->
    <div id="whatsapp-rolante">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <a
              href="https://api.whatsapp.com/send?phone=5551995630424&text=%20Oi,%20quero%20saber%20mais%20sobre%20o%20Claregold.%20"
            >
              <img
                class="botao-whats"
                src="img/whatsapp.png"
              />
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- END WHATS ROLANTE -->

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
    <script src="js/main.js"></script>

    <!-- OAS JS-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script type="text/javascript">
      AOS.init({
        duration: 1500,
      });
    </script>

    <!-- OWL START -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"
      integrity="sha512-9CWGXFSJ+/X0LWzSRCZFsOPhSfm6jbnL+Mpqo0o8Ke2SYr8rCTqb4/wGm+9n13HtDE1NQpAEOrMecDZw4FXQGg=="
      crossorigin="anonymous"
    ></script>
  </body>
</html>
