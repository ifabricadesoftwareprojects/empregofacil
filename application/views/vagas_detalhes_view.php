<!-- *****************************************************************************************************************
         HEADERWRAP
         ***************************************************************************************************************** -->
<div id="headerwrap" style="background-color: #FEFEFE;">
    <div class="container">
        <div class="row">
            <?php $this->view('sidebar_vaga_view') ?>
            <div class="col-md-9" style="text-align: left;">
                <h1 style="color: #384452"> <?php echo $vaga->titulo ?></h1>
                <p><strong>Descrição:</strong><br /><?php echo $vaga->descricao ?></p>
                <p><strong>Faixa salarial:</strong><br /><?php echo 'R$' . $vaga->faixa_salarial_inicio ?> à <?php echo 'R$' . $vaga->faixa_salarial_fim ?></p>
                <p><strong>Tipo de Contrato:</strong><br /><?php echo $vaga->tipo_contrato ?></p>
                <p><strong>Requisitos:</strong><br /><?php echo $vaga->pre_requisitos ?></p>
                <p><strong>Benefícios:</strong><br /><?php echo $vaga->beneficios ?></p>
                <p><strong>Data de publicação da vaga:</strong><br /><?php echo $vaga->data_publicacao ?></p>
                <hr>
                <p><?php echo $vaga->descricao_empresa ?></p>
                <hr>
                <?php if ($logado === true) : ?>
                    <?php if ($candidatado === true) : ?>
                    <button class="btn btn-success">Você já se candidatou a essa vaga</button>
                    <?php else : ?>
                    <a href="<?php echo base_url('vagas/candidatar/' . $vaga->idvaga) ?>" class="btn btn-primary">Canditar-se a essa vaga</a>
                    <?php endif; ?>
                <?php else : ?>
                <a href="#" data-toggle="modal" data-target="#modalEntrar" class="btn btn-primary">Efetue o login para se candidatar-se a essa vaga</a>
                <hr>
                <?php endif; ?>
                <p><a href="javascript:history.back(-1)">Voltar</a></p>
            </div>
        </div><!-- /row -->
    </div> <!-- /container -->
</div><!-- /headerwrap -->