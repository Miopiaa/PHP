<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto Dev Web</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    
  </head>
  <body>
    <!--BODY-->
    
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> 
          <a class="navbar-brand" href="#">Rafão Códigos</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="sobre">Sobre</a></li>
            <li><a href="contato">Contato</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="box">
      <section class="banner">
        <div class="overlay"></div>
        <div class="container chamada-banner">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2><?php echo htmlentities('<');?>Rafão.Códigos<?php echo htmlentities('>');?></h2>
              <p>O cara que sabe o que tá fazendo (Ou não).</p>
              <a href="">Saiba Mais!</a>
            </div><!--COL-MD-12-->
          </div><!--ROW-->
        </div>
      </section>
      <section class="cadastro-lead">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-6">
              <h2>Ente na nossa lista!</h2>
            </div>
            <div class="col-md-6">
              <form method="post">
                <input type="text" name="nome"><input type="submit" value="Enviar">
              </form>
            </div>
          </div>
        </div>
      </section>

      <section class="depoimento text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>Depoimento</h2>
                <blockquote>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate tempora aliquam molestias voluptate labore neque earum enim, suscipit impedit quae facilis voluptatem iusto aut minima laudantium est fugiat quam consequatur!</p>
                </blockquote>
            </div>
          </div>
        </div>
      </section>

      <section class="diferenciais text-center">
        <h2>Conheça nossa empresa</h2>
        <div class="container diferenciais-container">
          <div class="row ">
            <div class="col-md-4">
              <h3><span class="glyphicon glyphicon-glass"></span></h3>
              <h2>Diferencial #1</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta aspernatur accusamus laborum quis facilis? Ducimus eveniet hic animi sint quibusdam dicta? Velit cum cupiditate eligendi, laborum tenetur adipisci assumenda natus.</p>
            </div>

            <div class="col-md-4">
              <h3><span class="glyphicon glyphicon-star"></span></h3>
              <h2>Diferencial #1</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta aspernatur accusamus laborum quis facilis? Ducimus eveniet hic animi sint quibusdam dicta? Velit cum cupiditate eligendi, laborum tenetur adipisci assumenda natus.</p>
            </div>

            <div class="col-md-4">
              <h3><span class="glyphicon glyphicon-heart"></span></h3>
              <h2>Diferencial #1</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta aspernatur accusamus laborum quis facilis? Ducimus eveniet hic animi sint quibusdam dicta? Velit cum cupiditate eligendi, laborum tenetur adipisci assumenda natus.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="equipe">
        <h2>Equipe</h2>
        <div class="container equipe-container">
          <div class="row">
            <div class="col-md-6">
              <div class="equipe-single">
                <div class="row">
                  <div class="col-md-2">
                    <div class="user-picture">
                    <div class="user-picture-child"></div>
                    </div>
                  </div>
                  <div class="col-md-10">
                    <h3>Rafael</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque consequuntur quo sapiente ut facere sint, repudiandae nobis delectus dolore ab illo alias laboriosam dicta debitis maxime nisi perspiciatis. Illo, consectetur.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="equipe-single">
              <div class="row">
                  <div class="col-md-2">
                    <div class="user-picture">
                      <div class="user-picture-child"></div>
                    </div>
                  </div>
                  <div class="col-md-10">
                    <h3>Rafael</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque consequuntur quo sapiente ut facere sint, repudiandae nobis delectus dolore ab illo alias laboriosam dicta debitis maxime nisi perspiciatis. Illo, consectetur.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!--equipe-container-->
      </section>

      <section class="final-site">
        <div class="container">
          <div class="row">

            <div class="col-md-6">
              <h2>Fale conosco</h2>
              <form>
                <div class="form-group">
                  <label for="email">Nome:</label>
                  <input type="text" name="nome" class="form-control" id="nome">
                </div>

                <div class="form-group">
                  <label for="email">E-mail:</label>
                  <input type="email" name="email" class="form-control" id="email">
                </div>

                <div class="form-group">
                  <label for="email">Mensagem:</label>
                  <textarea class="form-control"></textarea>
                </div>
                
                <button type="submit" class="btn btn-default">Submit</button>
              </form> 
            </div>

            <div class="col-md-6">
            <h2>Nossos Planos</h2>
            <table class="table">
                <thead>
                  <tr>
                    <th>Plano Semanal</th>
                    <th>Plano Diário</th>
                    <th>Plano Anual</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>R$199,00</td>
                    <td>R$299,00</td>
                    <td>R$399,00</td>
                  </tr>
                  <tr>
                    <td>R$199,00</td>
                    <td>R$299,00</td>
                    <td>R$399,00</td>
                  </tr>
                  <tr>
                    <td>R$199,00</td>
                    <td>R$299,00</td>
                    <td>R$399,00</td>
                  </tr>
                </tbody>
            </table>

            </div>
          </div>
        </div>
      </section>

      <footer>
        <p class="text-center">Todos os direitos reservados!</p>
      </footer>
    </div><!--BOX-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

   <!--FIM BODY-->
  </body>
</html>