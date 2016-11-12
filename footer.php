<!--rodapé-->
        <footer class="rodape bgd">
            <a href="#top" class="voltar"><img src="http://c1.quickcachr.fotos.sapo.pt/i/of4067933/8576165_jicsk.png" alt="topo" title="Topo"></a>
            <p>&COPY; Copyright WEB GAMES - Todos os direitos reservados.</p>
        </footer>
        <script src="http://code.jquery.com/jquery-3.1.0.min.js"></script> 
        <script>
            //abrir menu //
            $(".btn-menu").click(function(){
                $(".menu").show();
            });
            //feixar menu //
            $(".btn-close").click(function(){
                $(".menu").hide();
            });
            
            
        </script>
        <script>
                var $doc = $('html, body');
                $('.voltar').click(function() {
                    $doc.animate({
                        scrollTop: $( $.attr(this, 'href') ).offset().top
                    }, 800);
                    return false;
                });
            </script>
    </body>
</html>