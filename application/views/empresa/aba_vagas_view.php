    <div role="tabpanel" class="tab-pane<?php echo ($active == 'vagas' ? ' active' : '') ?>" id="vagas" align="left">
        <br />
        <?php echo $msg ?>
        <button type="button" class="btn btn-primary" href="#" data-toggle="modal" data-target="#modalVaga">Adicionar Vaga</button></br>
        <table class="table table-hover">
            <thead thead-default>
                <tr>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Salário Oferecido</th>
                    <th>Tipo de Contrato</th>
                    <th>Número de Vagas</th>
                    <th>Exibir Dados</th>
                    <th>Acesso Vaga</th>
                    <th>Vaga PCD</th>
                    <th>Status</th>
                    <th>Publicação</th>
                    <th>Horário de trabalho</th>
                    <th>Quantidade de candidato(s)</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vagas as $vaga) : ?>
                <tr>
                    <td><?php echo $vaga->titulo ?></td>
                    <td><?php echo $vaga->descricao ?></td>
                    <td><?php echo $vaga->faixa_salarial_fim ?></td>
                    <td><?php echo $vaga->tipo_contrato ?></td>
                    <td><?php echo $vaga->numero_vagas ?></td>
                    <td><?php echo $vaga->acesso_vaga ?></td>
                    <td><?php echo $vaga->exibir_dados ?></td>
                    <td><?php echo $vaga->vaga_pcd ?></td>
                    <td><?php echo $vaga->status_vaga ?></td>
                    <td><?php echo $vaga->data_publicacao ?></td>
                    <td><?php echo $vaga->horario_trabalho ?></td>
                    <td><?php echo $vaga->quantidade_candidato ?></td>
                    <td><a href="#" data='<?php echo json_encode($vaga) ?>' class="btn btn-primary btn_editar_vaga">Editar</a></td>
                    <td><a href="<?php echo base_url('empresa/candidatos_vaga/' . $vaga->idvaga) ?>" class="btn btn-primary">Candidatos</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>