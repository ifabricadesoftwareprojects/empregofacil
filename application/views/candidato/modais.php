<!-- MODAL DE CURSO -->       
<div id="modalCurso" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" ref="formCurso"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Adiciomar Curso</h4>
            </div>
            <div class="modal-body">
                <form id="formCurso" method="post" action="<?php echo base_url('candidato/cadastrar_curso') ?>">
                    <input type="hidden" name="id" id="id" />
                    <input type="hidden" name="acao" id="acao" value="salvar" />
                    <div class="form-group">
                        <label for="descricao_curso">Descriçao:</label>
                        <textarea class="form-control" rows="3" name="descricao_curso" placeholder="Descrição do curso" id="descricao_curso"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="instituicao">Instituição:</label>
                        <input type="text" name="instituicao" class="form-control" id="instituicao" placeholder="Instituição">
                    </div>
                    <div class="form-group">
                        <label for="nivel">Nível:</label>
                        <select name="nivel" class="form-control" id="nivel">
                            <option value="Técnico">Técnico</option>
                            <option value="Superior">Superior</option>
                            <option value="Pós-graduação">Pós-graduação</option>
                            <option value="Mestrado">Mestrado</option>
                            <option value="Doutorado">Doutorado</option>
                            <option value="Outro">Outro</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="mes_ano_inicio">Mês/Ano de Início:</label>
                        <input type="text" name="mes_ano_inicio" class="form-control" id="mes_ano_inicio" placeholder="Ex: 01/1990">
                    </div>
                    <div class="form-group">
                        <label for="mes_ano_fim">Mês/Ano de Término:</label>
                        <input type="text" name="mes_ano_fim" class="form-control" id="mes_ano_fim" placeholder="Ex: 12/1994">
                    </div>
                    <div class="form-group">
                        <label for="status_curso">Status:</label>
                        <select name="status_curso" class="form-control" id="status_curso">
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
<!-- FIM MODAL DE CURSO -->

<!-- MODAL DE IDIOMA -->       
<div id="modalIdioma" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Adiciomar Idioma</h4>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="form-group">
                        <label for="txtNome">Nome:</label>
                        <input type="text" name="nome" class="form-control" id="txtNome" placeholder="Nome do idioma">
                    </div>
                    <div class="form-group" align="left">
                        <label for="txtEntende">Entende: </label></br>

                        <label class="radio-inline">
                            <input type="radio" name="entende" value="basico" />Básico             
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="entende" value="intermediario" />Intermédiario
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="entende" value="avancado" />Avançado
                        </label>
                    </div>
                    <div class="form-group" align="left">
                        <label for="txtEscreve">Escreve:</label></br>

                        <label class="radio-inline">
                            <input type="radio" name="escreve" value="basico" />Básico             
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="escreve" value="intermediario" />Intermédiario
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="escreve" value="avancado" />Avançado
                        </label>
                    </div>
                    <div class="form-group" align="left">
                        <label for="txtFala">Fala:</label></br>

                        <label class="radio-inline">
                        <input type="radio" name="fala" value="basico" />Básico             
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="fala" value="intermediario" />Intermédiario
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="fala" value="avancado" />Avançado
                        </label>
                    </div>
                    <div class="form-group" align="left">
                        <label for="txtLe">Lê:</label></br>

                        <label class="radio-inline">
                            <input type="radio" name="le" value="basico" />Básico             
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="le" value="intermediario" />Intermédiario
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="le" value="avancado" />Avançado
                        </label>
                    </div>
                   
                    <button type="submit" class="btn btn-primary ">Adicionar Idioma</button>          
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- FIM MODAL DE IDIOMA --> 

