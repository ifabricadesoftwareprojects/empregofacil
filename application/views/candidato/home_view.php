<!-- *****************************************************************************************************************
         HEADERWRAP
         ***************************************************************************************************************** -->
<div id="headerwrap" style="background-color: #FEFEFE;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#inicio" aria-controls="home" role="tab" data-toggle="tab">Início</a></li>
                    <li role="presentation"><a href="#meus_dados" aria-controls="meus_dados" role="tab" data-toggle="tab">Meus Dados</a></li>
                    <li role="presentation"><a href="#experiencias" aria-controls="experiencias" role="tab" data-toggle="tab">Experiências</a></li>
                    <li role="presentation"><a href="#cursos" aria-controls="cursos" role="tab" data-toggle="tab">Cursos</a></li>
                    <li role="presentation"><a href="#idiomas" aria-controls="idiomas" role="tab" data-toggle="tab">Idiomas</a></li>
                    <li role="presentation"><a href="#ver_curriculo" aria-controls="ver_curriculo" role="tab" data-toggle="tab">Ver Currículo</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="inicio">
                        Inicio
                    </div>
                    <div role="tabpanel" class="tab-pane" id="meus_dados">
                        <form method="post">

                            <!-- DADOS PESSOAIS-->
                            <fieldset class="">
                                <legend  align="left">Dados Pessoais</legend>
                                <div class="form-group" align="left">
                                    <label for="nome">Nome:</label>
                                    <input type="text" class="form-control"  placeholder="Nome" name="nome">
                                </div>
                                <div class="form-group" align="left">
                                    <label for="nome">Sobrenome:</label>
                                    <input type="text" class="form-control"  placeholder="Sobrenome" name="sobrenome">
                                </div>
                                <div class="form-group" align="left">
                                    <label for="nome">Nascimento:</label>
                                    <input type="text" name="dia" value="dd" class="form-control"> 
                                    <input type="text" name="mes" value="mm" class="form-control"> 
                                    <input type="text" name="ano" value="aaaa" class="form-control">
                                </div>
                                <div class="form-group" align="left">
                                    <label for="nome">CPF:</label>
                                    <input type="text" class="form-control"  placeholder="CPF" name="cpf">
                                </div>
                                <div class="form-group" align="left" >
                                    <label for="nome">Sexo:</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="sexo" value="m" />Masculino 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="sexo" value="f" />Feminino
                                    </label>

                                </div>
                                <div class="form-group" align="left">
                                    <label for="nome">Gênero:</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="genero" value="mhete" />Heterossexual     
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="genero" value="homo" />Homossexual
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="genero" value="bi" />Bissexial
                                    </label>  
                                    <label class="radio-inline">
                                        <input type="radio" name="genero" value="outros" />Outros
                                    </label>  

                                </div>
                                <div class="form-group" align="left">
                                    <label for="nome">Estado Civil:</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="ec" value="solteiro" />Solteiro(a)             
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="ec" value="casado" />Casado(a)
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="ec" value="viuvo" />Viúvo(a)
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="ec" value="divorciado" />Divorciado
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="ec" value="outros" />Outros
                                    </label>
                                </div>
                                <div class="form-group" align="left">
                                    <label for="nome">Foto:</label>
                                    <label for="imagem">Imagem de perfil:</label>
                                    <input type="file" name="imagem" >
                                </div>
                                <div class="form-group" align="left">
                                    <label for="nome">Possui veículo?:</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="veiculo" value="s" />SIM             
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="veiculo" value="n" />NÃO
                                    </label>
                                </div>
                                <div class="form-group" align="left">
                                    <label for="nome">Possui disponibilidade para viajar?:</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="viajar" value="s" />SIM             
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="viajar" value="n" />NÃO
                                    </label>
                                </div>
                                <div class="form-group" align="left" >
                                    <label for="nome">Possui disponibilidade para mudar de residência?:</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="residencia" value="s" />SIM             
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="residencia" value="n" />NÃO
                                    </label>
                                </div>


                            </fieldset>
                            <br />
                            <!-- ENDEREÇO -->
                            <fieldset>
                                <legend  align="left">Dados de Endereço</legend>

                                <div class="form-group" align="left">
                                    <label for="rua">Rua:</label>
                                    <input type="text" class="form-control"  placeholder="Rua" name="rua">
                                </div>
                                <div class="form-group" align="left">
                                    <label for="numero">Numero:</label>
                                    <input type="text" class="form-control"  placeholder="Numero" name="numero">
                                </div>
                                <div class="form-group" align="left">
                                    <label for="bairro">Bairro:</label>
                                    <input type="text" class="form-control"  placeholder="Bairro" name="bairro">
                                </div>
                                <div class="form-group" align="left">
                                    <label for="numero">Numero:</label>
                                    <input type="text" class="form-control"  placeholder="Numero" name="numero">
                                </div>
                                <div class="form-group" align="left">
                                    <label for="estado">Estado:</label>
                                    <select name="estado"> 
                                        <option value="ac">Acre</option> 
                                        <option value="al">Alagoas</option> 
                                        <option value="am">Amazonas</option> 
                                        <option value="ap">Amapá</option> 
                                        <option value="ba">Bahia</option> 
                                        <option value="ce">Ceará</option> 
                                        <option value="df">Distrito Federal</option> 
                                        <option value="es">Espírito Santo</option> 
                                        <option value="go">Goiás</option> 
                                        <option value="ma">Maranhão</option> 
                                        <option value="mt">Mato Grosso</option> 
                                        <option value="ms">Mato Grosso do Sul</option> 
                                        <option value="mg">Minas Gerais</option> 
                                        <option value="pa">Pará</option> 
                                        <option value="pb">Paraíba</option> 
                                        <option value="pr">Paraná</option> 
                                        <option value="pe">Pernambuco</option> 
                                        <option value="pi">Piauí</option> 
                                        <option value="rj">Rio de Janeiro</option> 
                                        <option value="rn">Rio Grande do Norte</option> 
                                        <option value="ro">Rondônia</option> 
                                        <option value="rs">Rio Grande do Sul</option> 
                                        <option value="rr">Roraima</option> 
                                        <option value="sc">Santa Catarina</option> 
                                        <option value="se">Sergipe</option> 
                                        <option value="sp">São Paulo</option> 
                                        <option value="to">Tocantins</option> 
                                    </select>
                                </div>
                                <div class="form-group" align="left">
                                    <label for="cidade">Cidade:</label>
                                    <input type="text" class="form-control"  placeholder="Cidade" name="cidade">
                                </div>
                                <div class="form-group" align="left">
                                    <label for="cep">Cep:</label>
                                    <input type="text" class="form-control"  placeholder="Cep" name="cep">
                                </div>


                            </fieldset>
                            <!-- Contato -->
                            <fieldset>
                                <legend  align="left">Dados de Contato</legend>

                                <div class="form-group" align="left">
                                    <label for="telefone">Telefone:</label>
                                    <input type="text" class="form-control"  placeholder="Telefone" name="telefone">
                                </div>
                                <div class="form-group" align="left">
                                    <label for="email">E-mail:</label>
                                    <input type="text" class="form-control"  placeholder="E-mail" name="email">
                                </div>
                                <div class="form-group" align="left">
                                    <label for="celular">Celular:</label>
                                    <input type="text" class="form-control"  placeholder="Celular" name="celular">
                                </div>

                            </fieldset></br>
                            <fieldset>
                                <legend  align="left">Outras Informações</legend>
                                <div class="form-group" align="left">
                                    <textarea class="form-control" rows="3" name="outras"></textarea>
                                </div>
                            </fieldset></br>
                        </form>
                    </div>


                    <div role="tabpanel" class="tab-pane" id="experiencias">
                        Experiências
                    </div>
                    <div role="tabpanel" class="tab-pane" id="cursos">
                        <div role="tabpanel" class="tab-pane" id="cursos" align="left"></br>
                        <button type="button" class="btn btn-primary " href="#" data-toggle="modal" data-target="#modalCurso">Adicionar Curso</button></br>
                        <table class="table table-hover">
                            <thead thead-default>
                                <tr>
                                    <th>Curso</th>
                                    <th>Descrição</th>
                                    <th>Instituição</th>
                                    <th>Nível</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                </tr>
                                <tr>

                                </tr>
                                <tr>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="idiomas" align="left"></br>
                        <button type="button" class="btn btn-primary " href="#" data-toggle="modal" data-target="#modalIdioma">Adicionar Idioma</button></br>
                        <table class="table table-hover">
                            <thead thead-default>
                                <tr>
                                    <th>Idioma</th>
                                    <th>Entende</th>
                                    <th>Escreve</th>
                                    <th>Fala</th>
                                    <th>Lê</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                </tr>
                                <tr>

                                </tr>
                                <tr>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="ver_curriculo">
                        Ver Currículo
                    </div>
                </div>

            </div>
        </div><!-- /row -->
    </div> <!-- /container -->
</div><!-- /headerwrap -->

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


<!-- MODAL DE CURSO -->       
<div id="modalCurso" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Adiciomar Curso</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url('candidato/cadastrar_curso') ?>">
                    <div class="form-group">
                        <label for="txtDescricao">Descriçao:</label>
                        <textarea class="form-control" rows="3" name="descricao_curso" placeholder="Descrição do curso"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="txtInstituicao">Instituição:</label>
                        <input type="text" name="instituicao" class="form-control" id="txtInstituicao" placeholder="Instituição">
                    </div>
                    <div class="form-group">
                        <label for="cmbNivel">Nível:</label>
                        <select name="nivel" class="form-control" id="cmbNivel">
                            <option value="Técnico">Técnico</option>
                            <option value="Superior">Superior</option>
                            <option value="Pós-graduação">Pós-graduação</option>
                            <option value="Mestrado">Mestrado</option>
                            <option value="Doutorado">Doutorado</option>
                            <option value="Outro">Outro</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="txtMesAnoInicio">Mês/Ano de Início:</label>
                        <input type="text" name="mes_ano_inicio" class="form-control" id="txtMesAnoInicio" placeholder="Ex: 01/1990">
                    </div>
                    <div class="form-group">
                        <label for="txtMesAnoFim">Mês/Ano de Término:</label>
                        <input type="text" name="mes_ano_fim" class="form-control" id="txtMesAnoFim" placeholder="Ex: 12/1994">
                    </div>
                    <div class="form-group">
                        <label for="cmbStatus">Status:</label>
                        <select name="status_curso" class="form-control" id="cmbStatus">
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