<?php
	function __autoload($class_name){
		require_once 'classes/' . $class_name . '.php';
	}
    include_once "header.php";
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
            <h2>Cadastro de Usuarios</h2>
        </header>

        <?php
        if(isset($_POST['atualizar'])):

            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $rsenha = $_POST['rsenha'];
            $tipo = $_POST['tipo'];

            $usuario->setNome($nome);
            $usuario->setEmail($email);
            $usuario->setSenha($senha);
            $usuario->setRsenha($rsenha);
            $usuario->setTipo($tipo);

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
            <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                <input type="text" name="nome" value="<?php echo $resultado->nome; ?>" placeholder="Nome:" />
            </div>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                <input type="text" name="email" value="<?php echo $resultado->email; ?>" placeholder="E-mail:" />
            </div>

            <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                <input type="text" name="senha" value="<?php echo $resultado->senha; ?>" placeholder="Senha:" />
            </div>

            <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                <input type="text" name="rsenha" value="<?php echo $resultado->rsenha; ?>" placeholder="Repetir Senha:" />
            </div>

            <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                <select name="tipo">
                    <option value="usuario">Usuário</option>
                    <option value="adminstrador">Administrador</option>
                </select>
            </div>

            <input type="hidden" name="id" value="<?php echo $resultado->id; ?>">
            <br />
            <input type="submit" name="atualizar" class="btn btn-primary" value="Atualizar dados">
        </form>

        <?php }else{ ?>


        <form class="form-horizontal" method="post" action="">
            <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                <input type="text" name="nome" placeholder="Nome:" />
            </div>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                <input type="text" name="email" placeholder="E-mail:" />
            </div>

            <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                <input type="text" name="senha" placeholder="Senha:" />
            </div>

            <div class="input-prepend">
                <span class="add-on"><i class="glyphicon glyphicon-pencil"></i></span>
                <input type="text" name="rsenha" placeholder="Repetir Senha:" />
            </div>

            <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                <select class="add-on name="tipo">
                    <option class="add-on" value="usuario">Usuário</option>
                    <option class="add-on" value="adminstrador">Administrador</option>
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