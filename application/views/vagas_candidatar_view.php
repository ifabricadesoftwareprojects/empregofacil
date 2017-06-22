<!-- *****************************************************************************************************************
         HEADERWRAP
         ***************************************************************************************************************** -->
<div id="headerwrap" style="background-color: #FEFEFE;">
    <div class="container">
        <div class="row">
            <?php $this->view('sidebar_vaga_view') ?>
            <div class="col-md-9" style="text-align: left;">
                <?php echo $msg ?>
                <h1 style="color: #384452"> Candidatar-se à vaga "<?php echo $vaga->titulo ?>"</h1>
                <p><strong>Descrição:</strong><br /><?php echo $vaga->descricao ?></p>
                <p><strong>Empresa:</strong><br /><?php echo $vaga->nome ?></p>
                <p><strong>Candidato:</strong><br /><?php echo $this->session->nome ?></p>
                <?php if ($candidatado === true) : ?>
                <button type="button" class="btn btn-success">Você já se candidatou a essa vaga</button>
                <?php else : ?>
                <form method="post" action="<?php echo base_url('vagas/candidatar/' . $vaga->idvaga) ?>">
                <div class="form-group">
                    <textarea class="form-control" rows="5" name="mensagem" placeholder="Deixe uma mensagem"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Confirmar</button>
                </form>
                <?php endif; ?>
                <hr>
                <p><a href="javascript:history.back(-1)">Voltar</a></p>
            </div>
        </div><!-- /row -->
    </div> <!-- /container -->
</div><!-- /headerwrap -->