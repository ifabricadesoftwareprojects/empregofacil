<!-- MODAL DE VAGAS -->       
<div id="modalVaga" class="modal fade" tabindex="-1" role="dialog" ref="formVaga">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Adicionar Vaga</h4>
            </div>
            <div class="modal-body">
                <form name="formVaga" id="formVaga" method="post" action="<?php echo base_url('empresa/cadastrar_vaga') ?>">
                    <input type="hidden" name="id" />
                    <input type="hidden" name="acao" value="" />
                    <div class="form-group">
                        <label for="titulo">Título:</label>
                        <input type="text" name="titulo" class="form-control" placeholder="Titulo">
                        <?php echo display_erros(isset($erros['titulo']) ? $erros['titulo'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descriçao:</label>
                        <textarea class="form-control" rows="3" name="descricao" placeholder="Descrição da vaga" ></textarea>
                        <?php echo display_erros(isset($erros['descricao']) ? $erros['descricao'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="faixa_salarial_inicio">Faixa salarial inícial:</label>
                        <input type="number" name="faixa_salarial_inicio" class="form-control" placeholder="2.000">
                        <?php echo display_erros(isset($erros['faixa_salarial_inicio']) ? $erros['faixa_salarial_inicio'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="faixa_salarial_fim">Faixa salarial final:</label>
                        <input type="number" name="faixa_salarial_fim" class="form-control" placeholder="2.000">
                        <?php echo display_erros(isset($erros['faixa_salarial_fim']) ? $erros['faixa_salarial_fim'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="pre_requisitos">Pré requisitos:</label>
                        <textarea class="form-control" rows="3" name="pre_requisitos" placeholder="Pré requisitos" ></textarea>
                        <?php echo display_erros(isset($erros['pre_requisitos']) ? $erros['pre_requisitos'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="tipo_contrato">Contrato:</label>
                        <input type="text" name="tipo_contrato" class="form-control" placeholder="Tipo de contrato">
                        <?php echo display_erros(isset($erros['tipo_contrato']) ? $erros['tipo_contrato'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="beneficios">Benefícios:</label>
                        <textarea class="form-control" rows="3" name="beneficios" placeholder="Beneficios" ></textarea>
                        <?php echo display_erros(isset($erros['beneficios']) ? $erros['beneficios'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="status_vaga">Status da vaga:</label>
                        <input type="text" name="status_vaga" class="form-control" placeholder="Status da vaga">
                        <?php echo display_erros(isset($erros['status_vagas']) ? $erros['status_vagas'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="data_publicacao">Data de publicação:</label>
                        <input disabled type="date" name="data_publicacao" class="form-control input-lg" placeholder="Ex: 01/01/2001"> 
                        <div class="form-group">
                            <label for="visualizacoes">Visualizações:</label>
                            <input disabled type="text" name="visualizacoes" class="form-control" placeholder="Visualização">

                        </div>

                        <button type="submit" class="btn btn-primary ">Adicionar Vaga</button>          
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- FIM MODAL DE VAGAS -->

