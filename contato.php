<?php require_once './head.php'; ?>
<div class="inside-banner bgd">
        <div class="container-fluid"> 
            <h2>CONTATO<span><a href="index.php">Home</a> / Contato</span></h2>
        </div>
</div>
<div class="contatos-web">
    <div class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15302.446096594724!2d-49.4274471!3d-16.4951969!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf19b8a7ce7d2392c!2sQuality+Info!5e0!3m2!1spt-BR!2sbr!4v1480173996217" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="container">
          <main class="contato">
            <h5>Fale Conosco</h5>
            <form action="contato.php" method="post" name="form_contato">
                  <input type="text" name="nome" placeholder="NOME">
                  <input type="text" name="email" placeholder="EMAIL">
                  <textarea placeholder="DEIXE AQUI SEU COMENTÁRIO" name="msg"></textarea>
                  <button type="submit" value="enviar">Enviar</button>
                  <button type="reset" value="limpar">Limpar</button>
              </form>
           </main>
    </div>
      </div>
<?php require_once './php_email/email-contatos.php';?>
<?php require_once './footer.php'; ?>
