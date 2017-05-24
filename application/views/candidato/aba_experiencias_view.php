    <div role="tabpanel" class="tab-pane<?php echo ($active == 'experiencias' ? ' active' : '') ?>" id="experiencias" align="left">
        </br>
        <?php echo $msg ?>
        <button type="button" class="btn btn-primary" href="#" data-toggle="modal" data-target="#modalExperiencia">Adicionar Experiência</button></br>
        <table class="table table-hover">
            <thead thead-default>
                <tr>
                    <th>Area</th>
                    <th>Cargo</th>
                    <th>Empresa</th>
                    <th>Emprego atual</th>
                    <th>Nível herarquico</th>
                    <th>Início</th>
                    <th>Fim</th>
                    <th>Atividade desempenhada</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($experiencias as $experiencia) : ?>
                <tr>
                    <td><?php echo $experiencia->area ?></td>
                    <td><?php echo $experiencia->cargo ?></td>
                    <td><?php echo $experiencia->empresa ?></td>
                    <td><?php echo $experiencia->emprego_atual ?></td>
                    <td><?php echo $experiencia->nivel_hierarquico ?></td>
                    <td><?php echo $experiencia->mes_ano_inicio ?></td>
                    <td><?php echo $experiencia->mes_ano_termino ?></td>
                    <td><?php echo $experiencia->atividade_desempenhada ?></td>
                    <td><a href="#" data='<?php echo json_encode($experiencia) ?>' class="btn btn-primary btn_editar_experiencia">Editar</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>