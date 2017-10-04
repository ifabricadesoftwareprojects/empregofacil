<!-- *****************************************************************************************************************
         HEADERWRAP
         ***************************************************************************************************************** -->
<div id="headerwrap" style="background-color: #FEFEFE;">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align: left;">                
                <!-- Tab panes -->
                <div class="tab-content">
                    <br />
                        <span class="glyphicon glyphicon-arrow-left"></span>
                        <a href="<?php echo base_url('empresa') ?>" class="btn btn-primary">Voltar para vagas</a>
                        <br />
                        <?php echo $msg ?>
                        <h2 style="color: #000;"><?php echo $num_candidatos ?> usuário<?php echo ($num_candidatos == 1 ? '' : 's') ?> se <?php echo ($num_candidatos == 1 ? 'candidatou' : 'candidataram') ?> para a vaga: "<?php echo $vaga->titulo ?>"</h2>
                        <table class="table table-hover">
                            <thead thead-default>
                                <tr>
                                    <th>Candidato</th>
                                    <th>Mensagem</th>                                    
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($candidatos as $candidato) : ?>
                                <tr>
                                    <td><?php echo $candidato->nome ?></td>
                                    <td><?php echo $candidato->mensagem ?></td>
                                    <td><a href="<?php echo base_url('empresa/ver_curriculo/'.$candidato->idusuario); ?>" class="btn btn-primary">Ver Currículo</a></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- /row -->
    </div> <!-- /container -->
</div><!-- /headerwrap -->