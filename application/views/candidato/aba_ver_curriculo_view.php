    <div role="tabpanel" class="tab-pane<?php echo ($active == 'ver_curriculo' ? ' active' : '') ?>" id="ver_curriculo">
        <br />
        <?php echo $msg ?>
        <div class="container">   
            <div class="row">
                <div class="col-lg-8" style="text-align: left;">
                    <h2>Dados Pessoais</h2>
                    <div class="info_curriculo" style="margin-left: 30px;">
                        <p><strong>Nome:</strong> <?php echo $candidato->nome ?></p>
                        <p><strong>Email:</strong> <?php echo $candidato->email ?></p>
                        <p><strong>Data de Nascimento:</strong> <?php echo $candidato->data_nascimento ?></p>
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
                    <h2>Experiências Profissionais</h2>
                    <div class="info_curriculo" style="margin-left: 30px;">
                    <?php foreach ($experiencias as $experiencia) : ?>
                        <p><strong>Descrição:</strong> <?php echo $experiencia->atividade_desempenhada ?></p>
                        <p><strong>Cargo:</strong> <?php echo $experiencia->cargo ?>
                        <p><strong>Área:</strong> <?php echo $experiencia->area ?>
                        <p><strong>Nível Hierárquico:</strong> <?php echo $experiencia->nivel_hierarquico ?>
                        <p><strong>Emprego Atual?</strong> <?php echo $experiencia->emprego_atual ?>
                        <p><strong>Início:</strong> <?php echo $experiencia->mes_ano_inicio ?>
                        <p><strong>Fim:</strong> <?php echo $experiencia->mes_ano_termino ?>                            
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>