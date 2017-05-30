    <div role="tabpanel" class="tab-pane<?php echo ($active == 'vagas' ? ' active' : '') ?>" id="cursos" align="left">
        <br />
        <?php echo $msg ?>
        <button type="button" class="btn btn-primary" href="#" data-toggle="modal" data-target="#modalVaga">Adicionar Vaga</button></br>
        <table class="table table-hover">
            <thead thead-default>
                <tr>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Faixa Salarial Inicio</th>
                    <th>Faixa Salarial Fim</th>
                    <th>Pré-requisitos</th>
                    <th>Tipo de Contrato</th>
                    <th>Benefícios</th>
                    <th>Status</th>
                    <th>Publicação</th>
                    <th>Visualizações</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cursos as $curso) : ?>
                <tr>
                    <td><?php echo $vaga->titulo ?></td>
                    <td><?php echo $vaga->descricao ?></td>
                    <td><?php echo $vaga->faixa_salarial_inicio ?></td>
                    <td><?php echo $vaga->faixa_salarial_fim ?></td>
                    <td><?php echo $vaga->pre_requisitos ?></td>
                    <td><?php echo $vaga->tipo_contrato ?></td>
                    <td><?php echo $vaga->benefícios ?></td>
                    <td><?php echo $vaga->status_vaga ?></td>
                    <td><?php echo $vaga->data_publicacao ?></td>
                    <td><?php echo $vaga->visualizacoes ?></td>
                    <td><a href="#" data='<?php echo json_encode($vaga) ?>' class="btn btn-primary btn_editar_vaga">Editar</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>