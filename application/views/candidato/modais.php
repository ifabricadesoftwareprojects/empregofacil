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
                        <textarea class="form-control" rows="3" name="descricao_curso" placeholder="Descrição do curso" ><?php echo (isset($dados_curso) ? $dados_curso['descricao_curso'] : '') ?></textarea>
                        <?php echo display_erros(isset($erros['descricao_curso']) ? $erros['descricao_curso'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="instituicao">Instituição:</label>
                        <input type="text" name="instituicao" class="form-control" placeholder="Instituição" value="<?php echo (isset($dados_curso) ? $dados_curso['instituicao'] : '') ?>">
                        <?php echo display_erros(isset($erros['instituicao']) ? $erros['instituicao'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="nivel">Nível:</label>
                        <select name="nivel" class="form-control campoextra" campoextra="outro" compara="Outro" >
                            <option value="Técnico"<?php echo (isset($dados_curso) && $dados_curso['nivel'] == 'Técnico') ? ' selected' : '' ?>>Técnico</option>
                            <option value="Superior"<?php echo (isset($dados_curso) && $dados_curso['nivel'] == 'Superior') ? ' selected' : '' ?>>Superior</option>
                            <option value="Pós-graduação"<?php echo (isset($dados_curso) && $dados_curso['nivel'] == 'Pós-graduação') ? ' selected' : '' ?>>Pós-graduação</option>
                            <option value="Mestrado"<?php echo (isset($dados_curso) && $dados_curso['nivel'] == 'Mestrado') ? ' selected' : '' ?>>Mestrado</option>
                            <option value="Doutorado"<?php echo (isset($dados_curso) && $dados_curso['nivel'] == 'Doutorado') ? ' selected' : '' ?>>Doutorado</option>
                            <option value="Outro"<?php echo (isset($dados_curso) && $dados_curso['nivel'] == 'Outro') ? ' selected' : '' ?>>Outro</option>
                        </select>
                        <input type="text" id="outro" name="outro" class="form-control" placeholder="Outro nível" disabled>
                        <?php echo display_erros(isset($erros['nivel']) ? $erros['nivel'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="mes_ano_inicio">Mês/Ano de Início:</label>
                        <input type="text" name="mes_ano_inicio" class="form-control mes_ano" placeholder="Ex: 01/1990" value="<?php echo (isset($dados_curso) ? $dados_curso['mes_ano_inicio'] : '') ?>">
                        <?php echo display_erros(isset($erros['mes_ano_inicio']) ? $erros['mes_ano_inicio'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="mes_ano_fim">Mês/Ano de Término:</label>
                        <input type="text" name="mes_ano_fim" class="form-control mes_ano" placeholder="Ex: 12/1994" value="<?php echo (isset($dados_curso) ? $dados_curso['mes_ano_fim'] : '') ?>">
                    </div>
                    <div class="form-group">
                        <label for="status_curso">Status:</label>
                        <select name="status_curso" class="form-control" >
                            <option value="Em Andamento" <?php echo (isset($dados_curso) && $dados_curso['status_curso'] == 'Em Andamento') ? ' selected' : '' ?>>Em Andamento</option>
                            <option value="Concluído"<?php echo (isset($dados_curso) && $dados_curso['status_curso'] == 'Concluído') ? ' selected' : '' ?>>Concluído</option>
                            <option value="Desistência"<?php echo (isset($dados_curso) && $dados_curso['status_curso'] == 'Desistência') ? ' selected' : '' ?>>Desistência</option>
                            <option value="Trancado"<?php echo (isset($dados_curso) && $dados_curso['status_curso'] == 'Trancado') ? ' selected' : '' ?>>Trancado</option>
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
                        <input type="text" name="area" class="form-control" placeholder="Area onde trabalhou" value="<?php echo (isset($dados_experiencia) ? $dados_experiencia['area'] : '') ?>">
                        <?php echo display_erros(isset($erros['area']) ? $erros['area'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="empresa">Empresa/Organização/Instituição:</label>
                        <input type="text" name="empresa" class="form-control" placeholder="Nome da empresa/organização/instituição onde trabalhou" value="<?php echo (isset($dados_experiencia) ? $dados_experiencia['empresa'] : '') ?>">
                        <?php echo display_erros(isset($erros['empresa']) ? $erros['empresa'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="cargo">Cargo:</label>
                        <input type="text" name="cargo" class="form-control" placeholder="Cargo em que trabalhou" value="<?php echo (isset($dados_experiencia) ? $dados_experiencia['cargo'] : '') ?>">
                        <?php echo display_erros(isset($erros['cargo']) ? $erros['cargo'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="emprego_atual">Emprego atual:</label>
                        <select name="emprego_atual" class="form-control" >
                            <option value="Sim" <?php echo (isset($dados_experiencia) && $dados_experiencia['emprego_atual'] == 'Sim') ? ' selected' : '' ?>>Sim</option>
                            <option value="Não" <?php echo (isset($dados_experiencia) && $dados_experiencia['emprego_atual'] == 'Não') ? ' selected' : '' ?>>Não</option>
                        </select>                     
                        <?php echo display_erros(isset($erros['emprego_atual']) ? $erros['emprego_atual'] : null) ?>
                    </div>
                    
                    <div class="form-group">
                        <label for="nivel_hierarquico">Nível hierarquico:</label>
                        <select name="nivel_hierarquico" class="form-control campoextra" campoextra="outro_nivel" compara="Outro">
                            <option value="Presidente" <?php echo (isset($dados_experiencia) && $dados_experiencia['nivel_hierarquico'] == 'Presidente') ? ' selected' : '' ?>>Presidente</option>
                            <option value="Gerente" <?php echo (isset($dados_experiencia) && $dados_experiencia['nivel_hierarquico'] == 'Gerente') ? ' selected' : '' ?>>Gerente</option>
                            <option value="Diretor" <?php echo (isset($dados_experiencia) && $dados_experiencia['nivel_hierarquico'] == 'Diretor') ? ' selected' : '' ?>>Diretor</option>
                            <option value="Coordenador" <?php echo (isset($dados_experiencia) && $dados_experiencia['nivel_hierarquico'] == 'Coordenador') ? ' selected' : '' ?>>Coordenador</option>
                            <option value="Encarregado" <?php echo (isset($dados_experiencia) && $dados_experiencia['nivel_hierarquico'] == 'Encarregado') ? ' selected' : '' ?>>Encarregado</option>
                            <option value="Outro" <?php echo (isset($dados_experiencia) && $dados_experiencia['nivel_hierarquico'] == 'Outro') ? ' selected' : '' ?>>Outro</option>
                        </select>
                        <input type="text" id="outro_nivel" name="outro_nivel" class="form-control" placeholder="Outro nível herarquico" disabled >
                        <?php echo display_erros(isset($erros['nivel_hierarquico']) ? $erros['nivel_hierarquico'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="mes_ano_inicio">Mês/Ano de Início:</label>
                        <input type="text" name="mes_ano_inicio" class="form-control mes_ano" placeholder="Ex: 01/1990" value="<?php echo (isset($dados_experiencia) ? $dados_experiencia['mes_ano_inicio'] : '') ?>">
                        <?php echo display_erros(isset($erros['mes_ano_inicio']) ? $erros['mes_ano_inicio'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="mes_ano_termino">Mês/Ano de Término:</label>
                        <input type="text" name="mes_ano_termino" class="form-control mes_ano" placeholder="Ex: 12/1994" value="<?php echo (isset($dados_experiencia) ? $dados_experiencia['mes_ano_termino'] : '') ?>">
                        <?php echo display_erros(isset($erros['mes_ano_termino']) ? $erros['mes_ano_termino'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="atividade_desempenhada">Atividade desempenhada:</label>
                        <textarea class="form-control" rows="3" name="atividade_desempenhada" placeholder="Atividade que exerce discorra" ><?php echo (isset($dados_experiencia) ? $dados_experiencia['atividade_desempenhada'] : '') ?></textarea>
                        <?php echo display_erros(isset($erros['atividade_desempenhada']) ? $erros['atividade_desempenhada'] : null) ?>
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
                        <select name="descricao_idioma" class="form-control campoextra" campoextra="outro_idioma" compara="Outro">
                            <option value="Inglês">Inglês</option>
                            <option value="Espanhol">Espanhol</option>
                            <option value="Mandarim">Mandarim</option>
                            <option value="Português">Português</option>
                            <option value="Japonês">Japonês</option>
                            <option value="Alemão">Alemão</option>
                            <option value="Outro">Outro</option>
                        </select>
                        <input type="text" id="outro_idioma" name="outro_idioma" class="form-control" placeholder="Outro idioma" disabled>
                        <?php echo display_erros(isset($erros['descricao_idioma']) ? $erros['descricao_idioma'] : null) ?>
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
                        <?php echo display_erros(isset($erros['entende']) ? $erros['entende'] : null) ?>
                    </div>
                    <div class="form-group" align="left">
                        <label for="escreve" >Escreve:</label></br>

                        <label class="radio-inline">
                            <input type="radio" name="escreve" value="Básico" />Básico             
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="escreve" value="Intermediário" />Intermédiario
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="escreve" value="Avançado" />Avançado
                        </label>
                        <?php echo display_erros(isset($erros['escreve']) ? $erros['escreve'] : null) ?>
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
                        <?php echo display_erros(isset($erros['fala']) ? $erros['fala'] : null) ?>
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
                        <?php echo display_erros(isset($erros['le']) ? $erros['le'] : null) ?>
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

