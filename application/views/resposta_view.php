<!-- *****************************************************************************************************************
         HEADERWRAP
         ***************************************************************************************************************** -->
        <div id="headerwrap" style="background-color: #FEFEFE;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php echo $resposta_titulo ?></h2>
                        <p><?php echo $resposta_msg ?></p>
                        <?php if ($link_login === true) : ?>
                        <p><a href="#" class="btn btn-success" data-toggle="modal" data-target="#modalEntrar">Clique aqui para efetuar o login</a></p>
                        <?php endif; ?>
                    </div>
                </div><!-- /row -->
            </div> <!-- /container -->
        </div><!-- /headerwrap -->