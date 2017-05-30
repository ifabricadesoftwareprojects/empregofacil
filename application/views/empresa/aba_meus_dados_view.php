<div role="tabpanel" class="tab-pane<?php echo ($active == 'meus_dados' ? ' active' : '') ?>" id="meus_dados">
    <br />
    <?php echo $msg ?>
    <form method="post" action="<?php echo base_url('empresa/atualizar_dados') ?>">
        <div class="container">   
            <div class="row">
                <div class="col-lg-8" style="text-align: left;">
                    <!-- DADOS PESSOAIS-->
                    <fieldset>
                        <legend>Dados Pessoais</legend>
                        
                        <div class="form-group">
                            <label for="nome">Nome da Empresa:</label>
                            <input type="text" class="form-control input-lg"  placeholder="Nome" name="nome" value="<?php echo $empresa->nome ?>">
                            <?php echo display_erros(isset($erros['nome']) ? $erros['nome'] : null) ?>
                        </div>

                        <div class="form-group">
                            <label for="razao_social">Razão Social:</label>
                            <input type="text" class="form-control input-lg"  placeholder="Razão Social da Empresa" name="razao_social" value="<?php echo $empresa->razao_social ?>">
                        </div>
                        <div class="form-group">
                            <label for="cnpj">CNPJ:</label>
                            <input type="text" class="form-control input-lg cnpj"  placeholder="Ex: 11.111.111/0001-00" name="cnpj" value="<?php echo $empresa->cnpj ?>">
                            <?php echo display_erros(isset($erros['cnpj']) ? $erros['cnpj'] : null) ?>
                        </div>
                        <div class="form-group">
                            <label for="Site">Site:</label>
                            <input type="text" class="form-control input-lg"  placeholder="Site" name="site" value="<?php echo $empresa->site ?>">
                            <?php echo display_erros(isset($erros['site']) ? $erros['site'] : null) ?>
                        </div>
                        <div class="form-group">
                            <label for="ramo_atividade">Descreva o Ramo de Atividade da Empresa:</label>
                            <textarea class="form-control input-lg" rows="5" name="ramo_atividade"><?php echo $empresa->ramo_atividade ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="descricao">Insira uma descrição sobre a empresa</label>
                            <textarea class="form-control input-lg" rows="5" name="descricao"><?php echo $empresa->descricao ?></textarea>
                        </div>
                    </fieldset>
                    <!-- ENDEREÇO -->
                    <!-- Contato -->
                    <fieldset>
                        <legend>Dados de Contato</legend>

                        <div class="form-group">
                            <label for="telefone">Telefone (com DDD):</label>
                            <input type="text" class="form-control input-lg telefone"  placeholder="Ex: (19)3333-4444" name="telefone" >
                        </div>
                        <div class="form-group">
                            <label for="celular">Celular (com DDD):</label>
                            <input type="text" class="form-control input-lg celular"  placeholder="Ex: (19)99999-8888" name="celular">
                        </div>

                    </fieldset></br>
                </div>
                <div id="myAffix" style="position: fixed; bottom: 45%; display: block; width: 10%; right: 25%;" data-spy="affix" data-offset-bottom="230" > <!--data-spy="affix" data-offset-top="197"-->
                    <button type="submit"  class="btn btn-success btn-lg btn-block">Atualizar Dados</button>  
                </div>
            </div>
        </div>
    </form>
</div>