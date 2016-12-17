<?php require_once 'head.php';?>
      <!--Inicio Pagina 1-->
        <div id="page-1"class="banner">
            <div class="btn-login">
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          Login
        </button>
        <div class="collapse" id="collapseExample">
          <div class="well">
              <form action="head.php" method="post">
                  <div class="login">
                      <input type="text" name="login" placeholder="EMAIL">
                  </div>
                  <div class="login">
                      <input type="password" name="senha" placeholder="SENHA">
                  </div>
                  <div class="btn-ir">
                      <button type="submit" name="entrar" value="entrar">Entrar</button>
                      <button type="submit" value="#cdt"><a href="#cdt">Cadastre-se</a></button>
                  </div>
              </form>

          </div>
        </div>
            </div>
            <div class="lancamento">
                <h3><i class="fa fa-gamepad"></i> LANÇAMENTOS</h3>
                <div class="videos">
                    <iframe  src="https://www.youtube.com/embed/nlW175pnJjI" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="videos">
                    <iframe  src="https://www.youtube.com/embed/7bAyciSC5xc" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            
        </div>
      <div class="banner-um">
          <div class="cadastro" id="cdt">
              <h2>Cadastre-se</h2>
              <form action="#" method="post">
                  <input type="text" name="nome" placeholder="NOME">
                  <input type="text" name="email" placeholder="EMAIL">
                  <input type="password" name="senha" placeholder="SENHA">
                  <input type="password" name="senha" placeholder="REPETIR SENHA">
                  <button type="submit" value="cadastrar"> Cadastrar</button>
              </form>
          </div>
          <div class="rede-social">
              <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
      </div>
      <?php require_once 'footer.php';?>  
        
