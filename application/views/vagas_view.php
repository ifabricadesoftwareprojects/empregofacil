<!-- *****************************************************************************************************************
         HEADERWRAP
         ***************************************************************************************************************** -->
<div id="headerwrap" style="background-color: #FEFEFE;">
    <div class="container">
        <div class="row">
            <?php $this->view('sidebar_vaga_view') ?>
            <div class="col-md-9" style="text-align: left;">
                <h1 style="color: #384452;">A busca retornou <?php echo count($vagas) . (count($vagas) == 1 ? ' vaga' : ' vagas');  ?></h1>
                <?php foreach ($vagas as $vaga) : ?>
                <h3 style="color: #384452"> <?php echo $vaga->titulo ?></h3>
                <p><strong>Descrição:</strong> <?php echo $vaga->descricao ?></p>
                <p><strong>Faixa salarial:</strong> <?php echo 'R$' . $vaga->faixa_salarial_inicio ?> à <?php echo 'R$' . $vaga->faixa_salarial_fim ?></p>
                <p><strong>Tipo de Contrato:</strong> <?php echo $vaga->tipo_contrato ?></p>
                <p><a href="<?php echo base_url('vagas/detalhes/' . $vaga->idvaga) ?>" class="btn btn-default">Mais detalhes</a></p>
                <hr>
                <?php endforeach; ?>
            </div>
        </div><!-- /row -->
    </div> <!-- /container -->
</div><!-- /headerwrap -->