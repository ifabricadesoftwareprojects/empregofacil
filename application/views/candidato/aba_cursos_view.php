    <div role="tabpanel" class="tab-pane<?php echo ($active == 'cursos' ? ' active' : '') ?>" id="cursos" align="left">
        <br />
        <?php echo $msg ?>
        <button type="button" class="btn btn-primary" href="#" data-toggle="modal" data-target="#modalCurso">Adicionar Curso</button></br>
        <table class="table table-hover">
            <thead thead-default>
                <tr>
                    <th>Curso</th>
                    <th>Instituição</th>
                    <th>Nível</th>
                    <th>Início</th>
                    <th>Fim</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cursos as $curso) : ?>
                <tr>
                    <td><?php echo $curso->descricao_curso ?></td>
                    <td><?php echo $curso->instituicao ?></td>
                    <td><?php echo $curso->nivel ?></td>
                    <td><?php echo $curso->mes_ano_inicio ?></td>
                    <td><?php echo $curso->mes_ano_fim ?></td>
                    <td><?php echo $curso->status_curso ?></td>
                    <td><a href="#" data='<?php echo json_encode($curso) ?>' class="btn btn-primary btn_editar_curso">Editar</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

