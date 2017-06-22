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
<!-- FIM MODAL DE FOTO -->

<!-- MODAL DE ENDERECO -->       
<div id="modalEndereco" class="modal fade" tabindex="-1" role="dialog" ref="formEndereco">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Adicionar Endereco</h4>

            </div>
            <div class="modal-body">
                <form id="formExperiencia" method="post" action="<?php echo base_url('candidato/cadastrar_endereco') ?>">
                    <input type="hidden" name="id" />
                    <input type="hidden" name="acao" value="" />
                    <div class="form-group">
                        <label for="rua">Rua: </label>
                        <input type="text" name="rua" class="form-control" placeholder="Nome da rua onde mora" value="<?php echo (isset($dados_endereco) ? $dados_endereco['rua'] : '') ?>">
                        <?php echo display_erros(isset($erros['rua']) ? $erros['rua'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="numero">Numero: </label>
                        <input type="number" name="numero" class="form-control" placeholder="333" value="<?php echo (isset($dados_endereco) ? $dados_endereco['numero'] : '') ?>">
                        <?php echo display_erros(isset($erros['numero']) ? $erros['numero'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="complemento">Complemento: </label>
                        <input type="text" name="complemento" class="form-control" placeholder="Complemento" value="<?php echo (isset($dados_endereco) ? $dados_endereco['complemento'] : '') ?>">
                        <?php echo display_erros(isset($erros['complemento']) ? $erros['complemento'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="bairro">Bairro: </label>
                        <input type="text" name="bairro" class="form-control" placeholder="Bairro" value="<?php echo (isset($dados_endereco) ? $dados_endereco['bairro'] : '') ?>">
                        <?php echo display_erros(isset($erros['bairro']) ? $erros['bairro'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="cep">CEP:</label>
                        <input type="text" class="form-control input-lg cep"  placeholder="Ex: 13360-000" name="cep" value="<?php echo (isset($dados_endereco) ? $dados_endereco['cep'] : '') ?>">
                        <?php echo display_erros(isset($erros['cep']) ? $erros['cep'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="cidade">Cidade: </label>
                        <input type="text" name="cidade" class="form-control" placeholder="Cidade" value="<?php echo (isset($dados_endereco) ? $dados_endereco['cidade'] : '') ?>">
                        <?php echo display_erros(isset($erros['cidade']) ? $erros['cidade'] : null) ?>
                    </div>
                    <div class="form-group">
                        <label for="estado">Estado:</label>
                        <select name="estado" class="form-control">
                            <option value="estado">Selecione o Estado</option> 
                            <option value="AC"<?php echo (isset($dados_endereco) && $dados_endereco['estado'] == 'AC') ? ' selected' : '' ?>>Acre</option> 
                            <option value="AL"<?php echo (isset($dados_endereco) && $dados_endereco['estado'] == 'AL') ? ' selected' : '' ?>>Alagoas</option> 
                            <option value="AM"<?php echo (isset($dados_endereco) && $dados_endereco['estado'] == 'AM') ? ' selected' : '' ?>>Amazonas</option> 
                            <option value="AP"<?php echo (isset($dados_endereco) && $dados_endereco['estado'] == 'AP') ? ' selected' : '' ?>>Amapá</option> 
                            <option value="BA"<?php echo (isset($dados_endereco) && $dados_endereco['estado'] == 'BA') ? ' selected' : '' ?>>Bahia</option> 
                            <option value="CE"<?php echo (isset($dados_endereco) && $dados_endereco['estado'] == 'CE') ? ' selected' : '' ?>>Ceará</option> 
                            <option value="DF"<?php echo (isset($dados_endereco) && $dados_endereco['estado'] == 'DF') ? ' selected' : '' ?>>Distrito Federal</option> 
                            <option value="ES"<?php echo (isset($dados_endereco) && $dados_endereco['estado'] == 'ES') ? ' selected' : '' ?>>Espírito Santo</option> 
                            <option value="GO"<?php echo (isset($dados_endereco) && $dados_endereco['estado'] == 'GO') ? ' selected' : '' ?>>Goiás</option> 
                            <option value="MA"<?php echo (isset($dados_endereco) && $dados_endereco['estado'] == 'MA') ? ' selected' : '' ?>>Maranhão</option> 
                            <option value="MT"<?php echo (isset($dados_endereco) && $dados_endereco['estado'] == 'MT') ? ' selected' : '' ?>>Mato Grosso</option> 
                            <option value="MS"<?php echo (isset($dados_endereco) && $dados_endereco['estado'] == 'MS') ? ' selected' : '' ?>>Mato Grosso do Sul</option> 
                            <option value="MG"<?php echo (isset($dados_endereco) && $dados_endereco['estado'] == 'MG') ? ' selected' : '' ?>>Minas Gerais</option> 
                            <option value="PA"<?php echo (isset($dados_endereco) && $dados_endereco['estado'] == 'PA') ? ' selected' : '' ?>>Pará</option> 
                            <option value="PB"<?php echo (isset($dados_endereco) && $dados_endereco['estado'] == 'PB') ? ' selected' : '' ?>>Paraíba</option> 
                            <option value="PR"<?php echo (isset($dados_endereco) && $dados_endereco['estado'] == 'PR') ? ' selected' : '' ?>>Paraná</option> 
                            <option value="PE"<?php echo (isset($dados_endereco) && $dados_endereco['estado'] == 'PE') ? ' selected' : '' ?>>Pernambuco</option> 
                            <option value="PI"<?php echo (isset($dados_endereco) && $dados_endereco['estado'] == 'PI') ? ' selected' : '' ?>>Piauí</option> 
                            <option value="RJ"<?php echo (isset($dados_endereco) && $dados_endereco['estado'] == 'RJ') ? ' selected' : '' ?>>Rio de Janeiro</option> 
                            <option value="RN"<?php echo (isset($dados_endereco) && $dados_endereco['estado'] == 'RN') ? ' selected' : '' ?>>Rio Grande do Norte</option> 
                            <option value="RO"<?php echo (isset($dados_endereco) && $dados_endereco['estado'] == 'RO') ? ' selected' : '' ?>>Rondônia</option> 
                            <option value="RS"<?php echo (isset($dados_endereco) && $dados_endereco['estado'] == 'RS') ? ' selected' : '' ?>>Rio Grande do Sul</option> 
                            <option value="RR"<?php echo (isset($dados_endereco) && $dados_endereco['estado'] == 'RR') ? ' selected' : '' ?>>Roraima</option> 
                            <option value="SC"<?php echo (isset($dados_endereco) && $dados_endereco['estado'] == 'SC') ? ' selected' : '' ?>>Santa Catarina</option> 
                            <option value="SE"<?php echo (isset($dados_endereco) && $dados_endereco['estado'] == 'SE') ? ' selected' : '' ?>>Sergipe</option> 
                            <option value="SP"<?php echo (isset($dados_endereco) && $dados_endereco['estado'] == 'SP') ? ' selected' : '' ?>>São Paulo</option> 
                            <option value="TO"<?php echo (isset($dados_endereco) && $dados_endereco['estado'] == 'TO') ? ' selected' : '' ?>>Tocantins</option> 
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary ">Adicionar Endereço</button>          
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- FIM MODAL DE Endereco -->
<!-- MODAL DE CONTATO -->       
<div id="modalContato" class="modal fade" tabindex="-1" role="dialog" ref="formContato">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Adicionar Contato</h4>
            </div>
            <div class="modal-body">
                <form id="formContato" method="post" action="<?php echo base_url('canditato/cadastrar_contato') ?>">
                    <div class="form-group">
                        <label for="tipo">Tipo:</label>
                        <select name="tipo" class="form-control">
                            <option value="tipo">Selecione o tipo</option> 
                            <option value="telefone"<?php echo (isset($dados_contato) && $dados_contato['tipo'] == 'telefone') ? ' selected' : '' ?>>Telefone</option> 
                            <option value="celular"<?php echo (isset($dados_contato) && $dados_contato['tipo'] == 'celular') ? ' selected' : '' ?>>Celular</option>
                            <option value="email"<?php echo (isset($dados_contato) && $dados_contato['tipo'] == 'email') ? ' selected' : '' ?>>Email</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary ">Cadastrar Contato</button>            
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- FIM MODAL DE CONTATO -->