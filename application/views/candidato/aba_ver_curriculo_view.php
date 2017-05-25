    <div role="tabpanel" class="tab-pane<?php echo ($active == 'ver_curriculo' ? ' active' : '') ?>" id="ver_curriculo">
        <br />
        <?php echo $msg ?>
        <div class="container" style="min-height: 500px;">   
            <div class="row">
                <div class="col-lg-8" style="text-align: left;">
                    <h2>Dados Pessoais</h2>
                    <div class="info_curriculo" style="margin-left: 30px;">
                        <p><strong>Nome:</strong> <?php echo $candidato->nome ?></p>
                        <p><strong>Email:</strong> <?php echo $candidato->email ?></p>
                        <p><strong>CPF:</strong> <?php echo $candidato->cpf ?></p>
                        <p><strong>Estado Civil:</strong> <?php echo $candidato->estado_civil ?></p>
                        <p><strong>Data de Nascimento:</strong> <?php echo converte_data($candidato->data_nascimento) ?></p>
                        <p><strong>Sexo:</strong> <?php echo $candidato->sexo ?></p>
                        <p><strong>Gênero:</strong> <?php echo $candidato->genero ?></p>
                        <p><strong>Possui algum tipo de deficiência?</strong> <?php echo $candidato->portador_deficiencia ?></p>
                        <?php if($candidato->portador_deficiencia == "Sim") : ?>
                        <p><strong>Descrição da Deficiência:</strong> <?php echo $candidato->descricao_deficiencia ?></p>
                        <?php endif; ?>
                        <p><strong>Tipo de Habilitação:</strong> <?php echo $candidato->tipo_habilitacao ?></p>
                        <p><strong>Possui veículo próprio?</strong> <?php echo $candidato->veiculo_proprio ?></p>
                        <p><strong>Tem disponibilidade para viajar?</strong> <?php echo $candidato->disponibilidade_viajar ?></p>
                        <p><strong>Tem disponibilidade para mudar de cidade?</strong> <?php echo $candidato->disponibilidade_mudar_residencia ?></p>
                    </div>
                    <?php if(count($experiencias) > 0) : ?>
                    <h2>Experiências Profissionais</h2>
                    <div class="info_curriculo" style="margin-left: 30px;">
                        <ul>
                        <?php foreach ($experiencias as $experiencia) : ?>
                            <li>
                                <?php echo '<span class="titulo">' . $experiencia->empresa . "</span>"  ?>
                                <br />
                                <span class="corpo"><strong>Cargo: </strong><?php echo $experiencia->cargo ?></span>
                                <br />
                                <span class="corpo">De <?php echo $experiencia->mes_ano_inicio . " à " . ($experiencia->mes_ano_termino == '' ? '-' : $experiencia->mes_ano_termino) . ($experiencia->emprego_atual == 'sim' ? ' (Emprego Atual)' : '') ?></span>
                                <br />
                                <span class="corpo">Atividades Desempenhadas: <?php echo $experiencia->atividade_desempenhada ?></span>
                            </li>                       
                        <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    
                    <?php if(count($cursos) > 0) : ?>
                    <h2>Formação Acadêmica</h2>
                    <div class="info_curriculo" style="">
                        <ul>
                        <?php foreach ($cursos as $curso) : ?>
                        <li>
                            <?php echo "<strong>" . $curso->nivel . " em " . $curso->descricao_curso . "</strong>, " . $curso->instituicao ?>
                            <br />
                            De <?php echo $curso->mes_ano_inicio . " à " . $curso->mes_ano_fim . " (" . $curso->status_curso . ")" ?>
                        </li>  
                    <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    
                    <?php if(count($idiomas) > 0) : ?>
                    <h2>Idiomas</h2>
                    <div class="info_curriculo" style="">
                        <ul>
                        <?php foreach ($idiomas as $idioma) : ?>
                        <li>
                            <p><strong>Nome:</strong> <?php echo $idioma->descricao_idioma ?></p>
                            <p><strong>Lê:</strong> <?php echo $idioma->le ?></p>
                            <p><strong>Escreve:</strong> <?php echo $idioma->escreve ?></p>
                            <p><strong>Fala:</strong> <?php echo $idioma->fala ?></p>
                            <p><strong>Entende:</strong> <?php echo $idioma->entende ?></p>
                        </li>  
                    <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    <h2>Informações Adicionais</h2>
                    <div class="info_curriculo" style="margin-left: 30px;">
                        <p> <?php echo $candidato->outras_informacoes ?></p>
                        
                    </div>
                </div>               
                <div id="myAffix" style="position: fixed; bottom: 45%; display: block; width: 10%; right: 25%;" data-spy="affix" data-offset-bottom="230" > <!--data-spy="affix" data-offset-top="197"-->
                    <a href="<?php echo base_url('candidato/pdf') ?>" class="btn btn-success btn-lg btn-block" target="blank">Gerar PDF</a>  
                </div>
            </div>
        </div>
    </div>