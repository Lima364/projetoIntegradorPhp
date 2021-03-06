<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- inclusao da linha abaixo - responsivo -->
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <!--  -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <title>Cupom UP! - Página Inicial</title>
</head>

<body>
  <header class="menu">
    <div class="menu_logo"><img src="./imagens/menu_logo.png" alt="logo"></div>
    <nav class="menu_nav">
      <ul class="menu_nav_lista">
        <li><a href="index.html">Página Inicial</a></li>
        <li><a href="perfil.html">Perfil</a></li>
        <li><a href="explorar.html">Explorar</a></li>
        <li><a href="sobre.html">Sobre Nós</a></li>
        <li><a href="contato.html">Contato</a></li>
      </ul>
    </nav>
    <button class="menu_btn_post">Postar Cupom</button>
  </header>
  <main class="conteudo">
    <section class="topo">
      <div class="topo_busca">
        <form action="search" class="search search_form" method="get">
          <input id="btnBusca" class="btn_busca" type="submit" />
          <input id="txtbusca" class="txt_busca" name="q" type="text" value="" placeholder="Buscar cupom" />
        </form>
      </div>
      <form method="get" action="./login_cadastro.html"><button class="topo_btn" type="submit">Login/Cadastro</button>
      </form>
    </section>

    <!--FIM DA NAVBAR E TOPO-->

    <!--INICIO DA PAGINA DE CUPONS-->
    <div class="container">
      <section class="cupons">
        <div class="selecao">
          <nav class="selecao_btn">
            <a class="selecao_btn_a" href="#">Principais</a>
            <span>|</span>
            <a class="selecao_btn_a" href="#">Recentes</a>
          </nav>
        </div>
        <div class="container">
          <div class="row">
            <div class="col">
              <h2 class="mb-5">Ofertas Recentes</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 mt-3">

              <!-- <div class="col-lg-4 col-md-4 col-sm-12"> -->
              <div class="card">
                <img class="card-img-top" src="./imagens/card1.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                  <h5 class="card-title">Starbucks</h5>
                  <p class="card-text">R$ 10,00 de desconto em qualquer bebida.</p>
                  <a href="#" class="btn btn_card" data-toggle="modal" data-target="#sitemodal">Ver cupom</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm mt-3">
              <div class="card">
                <img class="card-img-top" src="./imagens/card2.jpg" alt="Imagem de capa do card">
                <div class="card_up"></div>
                <div class="card-body">
                  <h5 class="card-title">Apple</h5>
                  <p class="card-text">10% de desconto no Iphone 11.</p>
                  <a href="#" class="btn btn_card">Ver cupom</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm mt-3">
              <div class="card">
                <img class="card-img-top" src="./imagens/card3.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                  <h5 class="card-title">Nike</h5>
                  <p class="card-text">Cupom de 20% Off em produtos femininos.</p>
                  <a href="#" class="btn btn_card">Ver cupom</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm mt-3">
              <div class="card">
                <img class="card-img-top" src="./imagens/card4.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                  <h5 class="card-title">Leika</h5>
                  <p class="card-text">15% Off em compras acima de R$200,00.</p>
                  <a href="#" class="btn btn_card">Ver cupom</a>
                </div>
              </div>
            </div>
          </div>
      </section>
    </div>
    <!--FIM DA PAGINA DE CUPONS-->

    <!-- INICIO DO MODAL-->

    <div class="modal" id="sitemodal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"> R$ 10,00 DE DESCONTO EM QUALQUER BEBIDA</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span>X</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <img class="img-avatar" src="./imagens/card1.jpg" alt="Imagem da marca">
                  <hr>
                  <h2 class="content-modal"> Copie o código abaixo para ganhar seu desconto!</h2>
                  <hr>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <br>
                  <script>
                    function copiarTexto() {
                      var textoCopiado = document.getElementById("link");
                      textoCopiado.select();
                      document.execCommand("Copy");
                    }
                  </script>
                  <div class="input-group">
                    <input type="text" id="link" name="link" class="form-control"
                      aria-label="Text input with segmented dropdown button">
                    <div class="input-group-append">
                      <button type="button" id="btn-copiar" class="btn" onClick="copiarTexto()">Copiar
                        Cupom</button>
                      <button type="button" id="btn-copiar" class="btn dropdown-toggle dropdown-toggle-split"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#" onClick="copiarTexto()">Copiar cupom</a>
                        <a class="dropdown-item" href="#">Comentar cupom</a>
                        <a class="dropdown-item" href="#">Reportar cupom</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <span class="dropdown-span">COMPARTILHAR</span>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">WhatsApp</a>
                        <a class="dropdown-item" href="#">Twitter</a>
                        <a class="dropdown-item" href="#">Facebook</a>
                        <a class="dropdown-item" href="#">Instagram</a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div> <br>

            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <hr>
                  <h2 class="content-modal"> Avaliar Cupom</h2>
                </div>
              </div>
            </div>
            <div class="avaliacao">
              <input name="rating" id="star-1" value="1" type="radio" class="radio radio-1" />
              <input name="rating" id="star-2" value="2" type="radio" class="radio radio-2" />
              <input name="rating" id="star-3" value="3" type="radio" class="radio radio-3" />
              <input name="rating" id="star-4" value="4" type="radio" class="radio radio-4" />
              <input name="rating" id="star-5" value="5" type="radio" class="radio radio-5" />
            </div>
          </div>
          <div class="modal-footer">
            <button id="btnfooterfechar" type="button" id="btn-copiar" class="btn-danger btn btn-outline-secondary"
              data-dismiss="modal">Fechar</button>
          </div>

        </div>
      </div>
    </div>

    <!-- FIM DO MODAL-->

  </main>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>