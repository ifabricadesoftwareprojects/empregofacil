<div role="tabpanel" class="tab-pane<?php echo ($active == 'pesquisar_curriculo' ? ' active' : '') ?>" id="pesquisar_curriculo">
    <br />
    <?php echo $msg ?>
    <form method="get">
        <div class="container">   
            <div class="row">
                <div class="col-lg-8" style="text-align: left;">
                    <!-- DADOS PESSOAIS-->
                    <fieldset>
                        <legend>Pesquisar Currículos</legend>
                        
                        <div class="form-group">
                            <label for="nome">Nome do Candidato:</label>
                            <input type="text" class="form-control input-lg"  placeholder="Nome" name="nome" value="">
                        </div>
                        
                        <button type="submit"  class="btn btn-success btn-lg ">Pesquisar</button>
                    </fieldset></br>
                </div>
            </div>
            <?php if(isset($candidatos)) : ?>
            <div class="row">
                <div class="col-lg-12" style="text-align: left;">
                    <h2>Sua busca retornou <?php echo count($candidatos) ?> candidato(s)</h2>
                    <table class="table table-hover">
                        <thead thead-default>
                            <tr>
                                <th>Código do Candidato</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($candidatos as $candidato) : ?>
                            <tr>
                                <td><?php echo $candidato->idusuario ?></td>
                                <td><?php echo $candidato->nome ?></td>
                                <td><?php echo $candidato->email ?></td>
                                <td><td><a href="<?php echo base_url('empresa/ver_curriculo/'.$candidato->idusuario); ?>" class="btn btn-primary">Ver Currículo Completo</a></td></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>        
                    </table>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </form>
</div>