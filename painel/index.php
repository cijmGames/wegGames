<?php require_once('header.php');?>

<div id="content">
    <div class="container-fluid">
        <div class="row">

            <aside id="sidebar" class="col-md-3">
                <?php require_once('aside.php');?>
            </aside><!--aside//-->
            <main id="conteudo" class="col-md-9">
                <div class="main-content">
                    <?php
                        if(isset($_GET['cont']) && $_GET['cont'] == 'user') {
                            require_once('Views/pages/usuarios.php');
                        }elseif(isset($_GET['cont']) && $_GET['cont'] == 'video'){
                            require_once('Views/pages/videos.php');
                        }elseif(isset($_GET['cont']) && $_GET['cont'] == 'top'){
                            require_once('Views/pages/top.php');

                        }else{
                            
                        }
                   ?>
                </div>
            </main><!--//main-->
        </div>
    </div>
</div><!--//#content-->


<?php require_once('footer.php');?>