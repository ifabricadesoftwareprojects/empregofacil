<!-- MODAL DE VAGAS -->       
<div id="modalCurso" class="modal fade" tabindex="-1" role="dialog" ref="formCurso">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Adicionar Curso</h4>
            </div>
            <div class="modal-body">
                <form name="formCurso" id="formCurso" method="post" action="<?php echo base_url('candidato/cadastrar_curso') ?>">
                    <input type="hidden" name="id" />
                    <input type="hidden" name="acao" value="" />
                    <div class="form-group">
                        <label for="descricao_curso">Descriçao:</label>
                        <textarea class="form-control" rows="3" name="descricao_curso" placeholder="Descrição do curso" ></textarea>
                        <?php echo display_erros(isset($erros['descricao_curso']) ? $erros['descricao_curso'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="instituicao">Instituição:</label>
                        <input type="text" name="instituicao" class="form-control" placeholder="Instituição">
                        <?php echo display_erros(isset($erros['instituicao']) ? $erros['instituicao'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="nivel">Nível:</label>
                        <select name="nivel" class="form-control campoextra" campoextra="outro" compara="Outro" >
                            <option value="Técnico">Técnico</option>
                            <option value="Superior">Superior</option>
                            <option value="Pós-graduação">Pós-graduação</option>
                            <option value="Mestrado">Mestrado</option>
                            <option value="Doutorado">Doutorado</option>
                            <option value="Outro">Outro</option>
                        </select>
                        <input type="text" id="outro" name="outro" class="form-control" placeholder="Outro nível" disabled>
                        <?php echo display_erros(isset($erros['nivel']) ? $erros['nivel'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="mes_ano_inicio">Mês/Ano de Início:</label>
                        <input type="text" name="mes_ano_inicio" class="form-control mes_ano" placeholder="Ex: 01/1990">
                        <?php echo display_erros(isset($erros['mes_ano_inicio']) ? $erros['mes_ano_inicio'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="mes_ano_fim">Mês/Ano de Término:</label>
                        <input type="text" name="mes_ano_fim" class="form-control mes_ano" placeholder="Ex: 12/1994">
                    </div>
                    <div class="form-group">
                        <label for="status_curso">Status:</label>
                        <select name="status_curso" class="form-control" >
                            <option value="Em Andamento">Em Andamento</option>
                            <option value="Concluído">Concluído</option>
                            <option value="Desistência">Desistência</option>
                            <option value="Trancado">Trancado</option>
                        </select>
                        
                    </div>
                    <button type="submit" class="btn btn-primary ">Adicionar Curso</button>          
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- FIM MODAL DE VAGAS -->

