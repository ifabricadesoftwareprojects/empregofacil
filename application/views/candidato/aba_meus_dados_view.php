<div role="tabpanel" class="tab-pane<?php echo ($active == 'meus_dados' ? ' active' : '') ?>" id="meus_dados">
    <br />
    <?php echo $msg ?>
    <form method="post" action="<?php echo base_url('candidato/atualizar_dados') ?>">
        <div class="container">   
            <div class="row">
                <div class="col-lg-8" style="text-align: left;">
                    <!-- DADOS PESSOAIS-->
                    <fieldset>
                        <legend>Dados Pessoais</legend>
                        <div class="form-group">
                            <img src="<?php echo get_src_foto_candidato($candidato->foto) ?>" alt="#" class="img-rounded">
                            <button type="button" class="btn btn-primary" href="#" data-toggle="modal" data-target="#modalFoto">Alterar Foto</button>
                        </div>
                        
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control input-lg"  placeholder="Nome" name="nome" value="<?php echo $candidato->nome ?>">
                        </div>

                        <div class="form-group">
                            <label for="nome_social">Como deseja ser chamado?:</label>
                            <input type="text" class="form-control input-lg"  placeholder="Como deseja ser chamado?" name="nome_social" value="<?php echo $candidato->nome_social ?>">
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF:</label>
                            <input type="text" class="form-control input-lg"  placeholder="Ex: 111.111.111-11" name="cpf" value="<?php echo $candidato->cpf ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control input-lg"  placeholder="Email" name="email" value="<?php echo $candidato->email ?>">
                        </div>

                        <div class="form-group">
                            <label for="data_nascimento">Nascimento:</label>
                            <input type="date" name="data_nascimento" value="<?php echo $candidato->data_nascimento ?>" class="form-control input-lg" placeholder="Ex: 01/01/2001"> 
                        </div>

                        <div class="form-group">
                            <label for="sexo">Sexo:</label>
                            <select name="sexo" class="form-control input-lg">
                                <option value="Masculino"<?php echo $candidato->sexo == 'Masculino' ? ' selected' : '' ?>>Masculino</option>
                                <option value="Feminino"<?php echo $candidato->sexo == 'Feminino' ? ' selected' : '' ?>>Feminino</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="genero">Gênero:</label>
                            <select name="genero" class="form-control input-lg">
                                <option value="Heterossexual"<?php echo $candidato->genero == 'Heterossexual' ? ' selected' : '' ?>>Heterossexual</option>
                                <option value="Homossexual"<?php echo $candidato->genero == 'Homossexual' ? ' selected' : '' ?>>Homossexual</option>
                                <option value="Bissexual"<?php echo $candidato->genero == 'Bissexual' ? ' selected' : '' ?>>Bissexual</option>
                                <option value="Travesti"<?php echo $candidato->genero == 'Travesti' ? ' selected' : '' ?>>Travesti</option>
                                <option value="Transexual "<?php echo $candidato->genero == 'Transexual' ? ' selected' : '' ?>>Transexual</option>
                                <option value="Transgênero "<?php echo $candidato->genero == 'Transgênero' ? ' selected' : '' ?>>Transgênero</option>
                                <option value="Outro"<?php echo $candidato->genero == 'Outro' ? ' selected' : '' ?>>Outro</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="estado_civil">Estado Civil:</label>
                            <select name="estado_civil" class="form-control input-lg">
                                <option value="Solteiro"<?php echo $candidato->estado_civil == 'Solteiro' ? ' selected' : '' ?>>Solteiro(a)</option>
                                <option value="Casado"<?php echo $candidato->estado_civil == 'Casado' ? ' selected' : '' ?>>Casado(a)</option>
                                <option value="Divorciado"<?php echo $candidato->estado_civil == 'Divorciado' ? ' selected' : '' ?>>Divorciado(a)</option>
                                <option value="Viúvo"<?php echo $candidato->estado_civil == 'Viúvo' ? ' selected' : '' ?>>Viúvo(a)</option>
                                <option value="Outro"<?php echo $candidato->estado_civil == 'Outro' ? ' selected' : '' ?>>Outro(a)</option>
                            </select>
                        </div>

                        
                        
                        <div class="form-group">
                            <label for="portador_deficiencia">Possui algum tipo de deficiência?:</label>
                            <select id="portador_deficiencia" name="portador_deficiencia" class="form-control input-lg campoextra" campoextra="descricao_deficiencia" compara="Sim">
                                <option value="Sim"<?php echo $candidato->portador_deficiencia == 'Sim' ? ' selected' : '' ?>>Sim</option>
                                <option value="Nao"<?php echo $candidato->portador_deficiencia == 'Nao' ? ' selected' : '' ?> selected="selected">Não</option>
                            </select>
                            <label class="form-group">
                                <input type="text" disabled="disabled" class="form-control"  placeholder="Descrição da deficiência" id="descricao_deficiencia" name="descricao_deficiencia">
                            </label>
                        </div>
                        
                        <div class="form-group">
                            <label for="tipo_habilitacao">Tipo Habilitação (CNH): </label>
                            <select name="tipo_habilitacao" class="form-control input-lg">
                                <option value="N"<?php echo $candidato->tipo_habilitacao == 'N' ? ' selected' : '' ?>>Não possuo habilitação</option>
                                <option value="A"<?php echo $candidato->tipo_habilitacao == 'A' ? ' selected' : '' ?>>A</option>
                                <option value="B"<?php echo $candidato->tipo_habilitacao == 'B' ? ' selected' : '' ?>>B</option>
                                <option value="C"<?php echo $candidato->tipo_habilitacao == 'C' ? ' selected' : '' ?>>C</option>
                                <option value="D"<?php echo $candidato->tipo_habilitacao == 'D' ? ' selected' : '' ?>>D</option>
                                <option value="E"<?php echo $candidato->tipo_habilitacao == 'E' ? ' selected' : '' ?>>E</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="veiculo_proprio">Possui veículo próprio?:</label>
                            <select name="veiculo_proprio" class="form-control input-lg">
                                <option value="Sim"<?php echo $candidato->veiculo_proprio == 'Sim' ? ' selected' : '' ?>>Sim</option>
                                <option value="Nao"<?php echo $candidato->veiculo_proprio == 'Nao' ? ' selected' : '' ?>>Não</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="disponibilidade_viajar">Possui disponibilidade para viajar?:</label>
                            <select name="disponibilidade_viajar" class="form-control input-lg">
                                <option value="Sim"<?php echo $candidato->disponibilidade_viajar == 'Sim' ? ' selected' : '' ?>>Sim</option>
                                <option value="Nao"<?php echo $candidato->disponibilidade_viajar == 'Nao' ? ' selected' : '' ?>>Não</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="disponibilidade_mudar_residencia">Possui disponibilidade de mudar de residencia?:</label>
                            <select name="disponibilidade_mudar_residencia" class="form-control input-lg">
                                <option value="Sim"<?php echo $candidato->disponibilidade_mudar_residencia == 'Sim' ? ' selected' : '' ?>>Sim</option>
                                <option value="Nao"<?php echo $candidato->disponibilidade_mudar_residencia == 'Nao' ? ' selected' : '' ?>>Não</option>
                            </select>
                        </div>
                    </fieldset>
                    <!-- ENDEREÇO -->
                    <!-- Contato -->
                    <fieldset>
                        <legend>Dados de Contato</legend>

                        <div class="form-group">
                            <label for="telefone">Telefone:</label>
                            <input type="text" class="form-control input-lg"  placeholder="Telefone" name="telefone">
                        </div>
                        <div class="form-group">
                            <label for="celular">Celular:</label>
                            <input type="text" class="form-control input-lg"  placeholder="Celular" name="celular">
                        </div>

                    </fieldset></br>
                    <fieldset>
                        <legend>Outras Informações</legend>
                        <div class="form-group">
                            <textarea class="form-control input-lg" rows="5" name="outras_informacoes"><?php echo $candidato->outras_informacoes ?></textarea>
                        </div>
                    </fieldset></br>
                </div>
                <div id="myAffix" style="position: fixed; bottom: 40%; display: block; width: 10%; right: 25%;" data-spy="affix" data-offset-bottom="230" > <!--data-spy="affix" data-offset-top="197"-->
                    <button type="submit"  class="btn btn-success btn-lg btn-block">Atualizar Dados</button>  
                </div>
            </div>
        </div>
    </form>
</div>