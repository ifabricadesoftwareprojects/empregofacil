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
                        <select name="nivel" class="form-control campoextra" campoextra="outro" compara="Outro" >
                            <option value="Técnico">Técnico</option>
                            <option value="Superior">Superior</option>
                            <option value="Pós-graduação">Pós-graduação</option>
                            <option value="Mestrado">Mestrado</option>
                            <option value="Doutorado">Doutorado</option>
                            <option value="Outro">Outro</option>
                        </select>
                        <input type="text" id="outro" name="outro" class="form-control" placeholder="Outro nível" disabled>
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
                        <select name="nivel_hierarquico" class="form-control campoextra" campoextra="outroNivel" compara="Outro">
                            <option value="Presidente">Presidente</option>
                            <option value="Gerente">Gerente</option>
                            <option value="Diretor">Diretor</option>
                            <option value="Coordenador">Coordenador</option>
                            <option value="Encarregado">Encarregado</option>
                            <option value="Outro">Outro</option>
                        </select>
                        <input type="text" id="outroNivel" name="outroNivel" class="form-control" placeholder="Outro nível herarquico" disabled>
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
                    <input type="hidden" name="id" />
                    <input type="hidden" name="acao" value="" />
                    <div class="form-group">
                        <label for="descricao_idioma">Nome:</label>
                        <select name="descricao_idioma" class="form-control campoextra" campoextra="outroIdioma" compara="Outro">
                            <option value="Inglês">Inglês</option>
                            <option value="Espanhol">Espanhol</option>
                            <option value="Mandarim">Mandarim</option>
                            <option value="Português">Português</option>
                            <option value="Japonês">Japonês</option>
                            <option value="Alemão">Alemão</option>
                            <option value="Outro">Outro</option>
                        </select>
                        <input type="text" id="outroIdioma" name="outroIdioma" class="form-control" placeholder="Outro idioma" disabled>
                    </div>
                    <div class="form-group" align="left">
                        <label for="entende">Entende: </label></br>

                        <label class="radio-inline">
                            <input type="radio" name="entende" value="Básico" />Básico             
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="entende" value="Intermediário" />Intermédiario
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="entende" value="Avançado" />Avançado
                        </label>
                    </div>
                    <div class="form-group" align="left">
                        <label for="escreve">Escreve:</label></br>

                        <label class="radio-inline">
                            <input type="radio" name="escreve" value="Básico" />Básico             
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="escreve" value="Intermediário" />Intermédiario
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="escreve" value="Avançado" />Avançado
                        </label>
                    </div>
                    <div class="form-group" align="left">
                        <label for="fala">Fala:</label></br>

                        <label class="radio-inline">
                        <input type="radio" name="fala" value="Básico" />Básico             
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="fala" value="Intermediário" />Intermédiario
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="fala" value="Avançado" />Avançado
                        </label>
                    </div>
                    <div class="form-group" align="left">
                        <label for="le">Lê:</label></br>

                        <label class="radio-inline">
                            <input type="radio" name="le" value="Básico" />Básico             
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="le" value="Intermediário" />Intermédiario
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="le" value="Avançado" />Avançado
                        </label>
                    </div>
                   
                    <button type="submit" class="btn btn-primary ">Adicionar Idioma</button>          
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- FIM MODAL DE IDIOMA --> 

<!-- MODAL DE FOTO -->       
<div id="modalFoto" class="modal fade" tabindex="-1" role="dialog" ref="formFoto">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Foto do Perfil</h4>
            </div>
            <div class="modal-body">
                <form id="formFoto" method="post" action="<?php echo base_url('candidato/foto') ?>" enctype="multipart/form-data">
                    <input type="hidden" name="acao" value="upload" />
                    <div class="form-group">
                        <img src="<?php echo get_src_foto_candidato($candidato->foto) ?>" alt="#" class="img-rounded">
                    </div>
                    <div class="form-group">                        
                        <label for="foto">Carregar Nova Foto:</label>
                        <input type="file" name="foto" class="form-control">
                    </div>
                     <button type="submit" class="btn btn-primary ">Atualizar Foto</button>
                     <button type="button" class="btn" data-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- FIM MODAL DE EXPERIENCIA -->

