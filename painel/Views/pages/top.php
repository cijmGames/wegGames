<?php
	function __autoload($class_name){
		require_once 'classes/' . $class_name . '.php';
	}

?>

<body>

                    
      <?php
    
        $usuario = new Usuarios();

        if(isset($_POST['cadastrar'])):

            $nome  = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $rsenha = $_POST['rsenha'];
            $tipo = $_POST['tipo'];

            $usuario->setNome($nome);
            $usuario->setEmail($email);
            $usuario->setSenha($senha);
            $usuario->setRsenha($rsenha);
            $usuario->settipo($tipo);

            # Insert
            if($usuario->insert()){
                echo "Inserido com sucesso!";
            }

        endif;

      ?>
        <header class="masthead">
            <h2>Cadastro dos Top</h2>
        </header>

        <?php 
        if(isset($_POST['atualizar'])):

            $id = $_POST['id'];
            $categoria = $_POST['categoria'];
            $link = $_POST['link'];
            $titulo = $_POST['titulo'];
            $titulo2 = $_POST['titulo2'];
            $sintese = $_POST['sintese'];

            $usuario->setNome($categoria);
            $usuario->setEmail($link);
            $usuario->setSenha($titulo);
            $usuario->setRsenha($titulo2);
            $usuario->setTipo($sintese);

            if($usuario->update($id)){
                echo "Atualizado com sucesso!";
            }

        endif;
        ?>

        <?php
        if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):

            $id = (int)$_GET['id'];
            if($usuario->delete($id)){
                echo "Deletado com sucesso!";
            }

        endif;
        ?>

        <?php
        if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){

            $id = (int)$_GET['id'];
            $resultado = $usuario->find($id);
        ?>

        <form method="post" action="">
        
            
            
            
            
            </div>

            <input type="hidden" name="id" value="<?php echo $resultado->id; ?>">
            <br />
            <input type="submit" name="atualizar" class="btn btn-primary" value="Atualizar dados">                  
        </form>

        <?php }else{ ?>


        <form method="post" action="">
            <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                <input type="text" name="categoria" value="<?php //echo //$resultado->nome; ?>" placeholder="categoria:" />
            </div>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                <input type="text" name="link" value="<?php //echo //$resultado->email; ?>" placeholder="link:" />
            </div>

            <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                <input type="text" name="titulo" value="<?php //echo// $resultado->senha; ?>" placeholder="titulo:" />
            </div>

            <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                <input type="text" name="titulo2" value="<?php //echo //$resultado->rsenha; ?>" placeholder="titulo2 :" />
            </div>
            
            <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                <input type="text" name="sintese" value="<?php //echo //$resultado->rsenha; ?>" placeholder="sintese :" />
            </div>
          
              <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                <input type="text" name="processador min." value="<?php //echo $resultado->rsenha; ?>" placeholder="processador min.:" />
            </div>
            
            <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                <input type="text" name="memoria min." value="<?php //echo $resultado->rsenha; ?>" placeholder="memoria min.:" />
            </div>
            
              <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                <input type="text" name="placa de video min." value="<?php //echo $resultado->rsenha; ?>" placeholder="placa de video min.:" />
            </div>
            
              <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                <input type="text" name="espaço min." value="<?php //echo $resultado->rsenha; ?>" placeholder="espaço min.:" />
            </div>
            
            
             <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                <input type="text" name="processador max." value="<?php //echo $resultado->rsenha; ?>" placeholder="processador max.:" />
            </div>
            
            
             <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                <input type="text" name="memoria max." value="<?php //echo $resultado->rsenha; ?>" placeholder="memoria max.:" />
            </div>
            
             <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                <input type="text" name="placa de video max." value="<?php//echo// $resultado->rsenha; ?>" placeholder="placa de video max.:" />
            </div>
            
            
             <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                <input type="text" name="espaço max." value="<?php// echo// $resultado->rsenha; ?>" placeholder="espaço max.:" />
            </div>
             
            <div class="videos">
                      <iframe src="" frameborder="0" allowfullscreen></iframe>
                      </div>
            
            


            <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                <select name="tipo">
                    <option value="usuario">Usuário</option>
                    <option value="adminstrador">Administrador</option>
                </select>
            </div>


            <br />
            <input type="submit" name="cadastrar" class="btn btn-primary" value="Cadastrar dados">                  
        </form>

        <?php } ?>

        <table class="table table-hover">
            
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome:</th>
                    <th>E-mail:</th>
                    <th>Tipo:</th>
                    <th>Ações:</th>
                </tr>
            </thead>
            
            <?php foreach($usuario->findAll() as $key => $value): ?>


            <tbody>
                <tr>
                    <td><?php echo $value->id; ?></td>
                    <td><?php echo $value->nome; ?></td>
                    <td><?php echo $value->email; ?></td>
                    <td><?php echo $value->tipo; ?></td>

                    <td>
                        <?php echo "<a href='index.php?acao=editar&id=" . $value->id . "'>Editar</a>"; ?>
                        <?php echo "<a href='index.php?acao=deletar&id=" . $value->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?>
                    </td>
                </tr>
            </tbody>

            <?php endforeach; ?>

        </table>



<script src="js/jQuery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>