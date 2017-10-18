<!-- *****************************************************************************************************************
         HEADERWRAP
         ***************************************************************************************************************** -->
<div id="headerwrap" style="background-color: #FEFEFE;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation"<?php echo ($active == 'inicio' || $active == '' ? ' class="active"' : '') ?>><a href="#inicio" aria-controls="home" role="tab" data-toggle="tab">Início</a></li>
                    <li role="presentation"<?php echo ($active == 'meus_dados' ? ' class="active"' : '') ?>><a href="#meus_dados" aria-controls="meus_dados" role="tab" data-toggle="tab">Meus Dados</a></li>
                    <li role="presentation"<?php echo ($active == 'vagas' ? ' class="active"' : '') ?>><a href="#vagas" aria-controls="vagas" role="tab" data-toggle="tab">Vagas</a></li>
                    <li role="presentation"<?php echo ($active == 'pesquisar_curriculo' ? ' class="active"' : '') ?>><a href="#pesquisar_curriculo" aria-controls="pesquisar_curriculo" role="tab" data-toggle="tab">Pesquisar Currículos</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <?php 
                        foreach ($abas as $aba){
                            $this->view($template_folder . '/' . $prefixo . $aba . $sufixo);
                        }
                    ?>
                </div>
            </div>
        </div><!-- /row -->
    </div> <!-- /container -->
</div><!-- /headerwrap -->

<?php $this->view($template_folder . '/' . 'modais'); ?>