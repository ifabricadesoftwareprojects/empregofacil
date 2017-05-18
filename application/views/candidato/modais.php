<!-- MODAL DE CURSO -->       
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
                    </div>
                    <div class="form-group">
                        <label for="instituicao">Instituição:</label>
                        <input type="text" name="instituicao" class="form-control" placeholder="Instituição">
                    </div>
                    <div class="form-group">
                        <label for="nivel">Nível:</label>
                        <select name="nivel" class="form-control" >
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
                        <input type="text" name="mes_ano_inicio" class="form-control" placeholder="Ex: 01/1990">
                    </div>
                    <div class="form-group">
                        <label for="mes_ano_fim">Mês/Ano de Término:</label>
                        <input type="text" name="mes_ano_fim" class="form-control" placeholder="Ex: 12/1994">
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
<!-- FIM MODAL DE CURSO -->

<!-- MODAL DE EXPERIENCIA -->       
<div id="modalExperiencia" class="modal fade" tabindex="-1" role="dialog" ref="formExperiencia">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Adicionar Experiência</h4>
            </div>
            <div class="modal-body">
                <form id="formExperiencia" method="post" action="<?php echo base_url('candidato/cadastrar_experiencia') ?>">
                    <input type="hidden" name="id" />
                    <input type="hidden" name="acao" value="" />
                    <div class="form-group">
                        <label for="area">Area:</label>
                        <input type="text" name="area" class="form-control" placeholder="Area onde trabalhou">
                    </div>
                    <div class="form-group">
                        <label for="cargo">Cargo:</label>
                        <input type="text" name="cargo" class="form-control" placeholder="Cargo em que trabalhou">
                    </div>
                    <div class="form-group">
                        <label for="emprego_atual">Emprego atual:</label>
                        <select name="emprego_atual" class="form-control" >
                            <option value="sim">Sim</option>
                            <option value="nao">Não</option>
                        </select>                     
                    </div>
                    
                    <div class="form-group">
                        <label for="nivel_hierarquico">Nível hierarquico:</label>
                        <select name="nivel_hierarquico" class="form-control" >
                            <option value="Presidente">Presidente</option>
                            <option value="Gerente">Gerente</option>
                            <option value="Diretor">Diretor</option>
                            <option value="Coordenador">Coordenador</option>
                            <option value="Encarregado">Encarregado</option>
                            <option value="Outro">Outro</option>
                        </select>
                        <input type="text" name="outro" class="form-control" placeholder="Outro nível herarquico">
                    </div>
                    <div class="form-group">
                        <label for="mes_ano_inicio">Mês/Ano de Início:</label>
                        <input type="text" name="mes_ano_inicio" class="form-control" placeholder="Ex: 01/1990">
                    </div>
                    <div class="form-group">
                        <label for="mes_ano_termino">Mês/Ano de Término:</label>
                        <input type="text" name="mes_ano_termino" class="form-control" placeholder="Ex: 12/1994">
                    </div>
                    <div class="form-group">
                        <label for="atividade_desempenhada">Atividade desempenhada:</label>
                        <textarea class="form-control" rows="3" name="atividade_desempenhada" placeholder="Atividade que exerce discorra" ></textarea>
                    </div>
                     <button type="submit" class="btn btn-primary ">Adicionar Experiência</button>          
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- FIM MODAL DE EXPERIENCIA -->

<!-- MODAL DE IDIOMA -->       
<div id="modalIdioma" class="modal fade" tabindex="-1" role="dialog" ref="formIdioma">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Adiciomar Idioma</h4>
            </div>
            <div class="modal-body">
                <form id="formIdioma" method="post" action="<?php echo base_url('candidato/cadastrar_idioma') ?>">
                    
                    <div class="form-group">
                        <label for="nome_idioma">Nome:</label>
                        <select name="nome_idioma" class="form-control" >
                            <option value="ingles"> Inglês</option>
                            <option value="espanhol"> Espanhol</option>
                            <option value="mandarim"> Mandarim</option>
                            <option value="portugues"> Português</option>
                            <option value="japones"> Japonês</option>
                            <option value="alemao"> Alemão</option>
                            <option value="outro"> Outro</option>
                        </select>
                        <input type="text" name="outro" class="form-control" placeholder="Outro idioma">
                    </div>
                    <div class="form-group" align="left">
                        <label for="entende">Entende: </label></br>

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
                        <label for="escreve">Escreve:</label></br>

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
                        <label for="fala">Fala:</label></br>

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
                        <label for="le">Lê:</label></br>

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

