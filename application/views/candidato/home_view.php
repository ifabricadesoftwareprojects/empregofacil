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
                    <li role="presentation"<?php echo ($active == 'experiencias' ? ' class="active"' : '') ?>><a href="#experiencias" aria-controls="experiencias" role="tab" data-toggle="tab">Experiências</a></li>
                    <li role="presentation"<?php echo ($active == 'cursos' ? ' class="active"' : '') ?>><a href="#cursos" aria-controls="cursos" role="tab" data-toggle="tab">Cursos</a></li>
                    <li role="presentation"<?php echo ($active == 'idiomas' ? ' class="active"' : '') ?>><a href="#idiomas" aria-controls="idiomas" role="tab" data-toggle="tab">Idiomas</a></li>
                    <li role="presentation"<?php echo ($active == 'ver_curriculo' ? ' class="active"' : '') ?>><a href="#ver_curriculo" aria-controls="ver_curriculo" role="tab" data-toggle="tab">Ver Currículo</a></li>
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