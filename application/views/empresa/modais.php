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
                        <input type="text" name="titulo" class="form-control" placeholder="Titulo" value="<?php echo (isset($dados_vaga) ? $dados_vaga['titulo'] : '') ?>">
                        <?php echo display_erros(isset($erros['titulo']) ? $erros['titulo'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descriçao:</label>
                        <textarea class="form-control" rows="3" name="descricao" placeholder="Descrição da vaga"><?php echo (isset($dados_vaga) ? $dados_vaga['descricao'] : '') ?></textarea>
                        <?php echo display_erros(isset($erros['descricao']) ? $erros['descricao'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="faixa_salarial_inicio">Faixa salarial inícial:</label>
                        <input type="number" name="faixa_salarial_inicio" class="form-control" placeholder="2.000" value="<?php echo (isset($dados_vaga) ? $dados_vaga['faixa_salarial_inicio'] : '') ?>">
                        <?php echo display_erros(isset($erros['faixa_salarial_inicio']) ? $erros['faixa_salarial_inicio'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="faixa_salarial_fim">Faixa salarial final:</label>
                        <input type="number" name="faixa_salarial_fim" class="form-control" placeholder="2.000" value="<?php echo (isset($dados_vaga) ? $dados_vaga['faixa_salarial_fim'] : '') ?>">
                        <?php echo display_erros(isset($erros['faixa_salarial_fim']) ? $erros['faixa_salarial_fim'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="pre_requisitos">Pré requisitos:</label>
                        <textarea class="form-control" rows="3" name="pre_requisitos" placeholder="Pré requisitos"><?php echo (isset($dados_vaga) ? $dados_vaga['pre_requisitos'] : '') ?></textarea>
                        <?php echo display_erros(isset($erros['pre_requisitos']) ? $erros['pre_requisitos'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="tipo_contrato">Tipo de contratação:</label>
                        <select name="tipo_contrato" class="form-control">
                            <option value="Estagio"<?php echo (isset($dados_vaga) && $dados_vaga['tipo_contrato'] == 'Estagio') ? ' selected' : '' ?>>Estagio</option>
                            <option value="Temporaria"<?php echo (isset($dados_vaga) && $dados_vaga['tipo_contrato'] == 'Temporaria') ? ' selected' : '' ?>>Temporaria</option>
                            <option value="Permanente"<?php echo (isset($dados_vaga) && $dados_vaga['tipo_contrato'] == 'Permanente') ? ' selected' : '' ?>>Permanente</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="beneficios">Outros incentivos:</label>
                        <textarea class="form-control" rows="3" id ="beneficios" name="beneficios" placeholder="Benefícios"><?php echo (isset($dados_vaga) ? $dados_vaga['beneficios'] : '') ?></textarea>
                        <?php echo display_erros(isset($erros['beneficios']) ? $erros['beneficios'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="numero_vagas">Quantidade de Vagas:</label>
                        <input type="text" name="numero_vagas" class="form-control" placeholder="Número de Vagas" value="<?php echo (isset($dados_vaga) ? $dados_vaga['numero_vagas'] : '') ?>">
                        <?php echo display_erros(isset($erros['numero_vagas']) ? $erros['numero_vagas'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="acesso_vaga">Visualização:</label>
                        <select name="acesso_vaga" class="form-control">
                            <option value="Livre"<?php echo (isset($dados_vaga) && $dados_vaga['acesso_vaga'] == 'Livre') ? ' selected' : '' ?>>Livre</option>
                            <option value="Restrita"<?php echo (isset($dados_vaga) && $dados_vaga['acesso_vaga'] == 'Restrita') ? ' selected' : '' ?>>Restrita</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exibir_dados">Exibir Infornmações da empresa para a vaga:</label>
                        <select name="exibir_dados" class="form-control">
                            <option value="Sim"<?php echo (isset($dados_vaga) && $dados_vaga['acesso_vaga'] == 'Sim') ? ' selected' : '' ?>>Sim</option>
                            <option value="Nao"<?php echo (isset($dados_vaga) && $dados_vaga['acesso_vaga'] == 'Nao') ? ' selected' : '' ?>>Não</option>
                        </select>
                    </div>    
                    <div class="form-group">
                        <label for="vaga_pcd">Vaga para Deficiente:</label>
                        <select id="vaga_pcd" name="vaga_pcd" class="form-control" campoextra="descricao_pcd" compara="Sim">
                            <option value="Não"<?php echo (isset($dados_vaga) && $dados_vaga['vaga_pcd'] == 'Não') ? ' selected' : '' ?>>Não</option>
                            <option value="Sim"<?php echo (isset($dados_vaga) && $dados_vaga['vaga_pcd'] == 'Sim') ? ' selected' : '' ?>>Sim</option>
                        </select>
                        <label class="form-group">
                            <input type="text" disabled="disabled" class="form-control"  placeholder="Descrição da deficiência" id="descricao_pcd" name="descricao_pcd">
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="status_vaga">Status da vaga:</label>
                        <select name="status_vaga" class="form-control">
                            <option value="Ativa"<?php echo (isset($dados_vaga) && $dados_vaga['status_vaga'] == 'Ativa') ? ' selected' : '' ?>>Ativa</option>
                            <option value="Inativa"<?php echo (isset($dados_vaga) && $dados_vaga['status_vaga'] == 'Inativa') ? ' selected' : '' ?>>Inativa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="data_publicacao">Data de publicação:</label>
                        <input type="text" name="data_publicacao" class="form-control" value="<?php echo date('d/m/Y') ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="visualizacoes">Visualizações:</label>
                        <input disabled type="text" name="visualizacoes" class="form-control" placeholder="Visualização">
                        <button type="submit" class="btn btn-primary ">Adicionar Vaga</button>          
                    </div>
                </form>    
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- FIM MODAL DE VAGAS -->
</div>

