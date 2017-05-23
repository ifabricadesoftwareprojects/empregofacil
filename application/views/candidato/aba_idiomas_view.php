    <div role="tabpanel" class="tab-pane<?php echo ($active == 'idiomas' ? ' active' : '') ?>" id="idiomas" align="left">
        <br />
        <?php echo $msg ?>
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
               <?php foreach ($idiomas as $idioma) : ?>
                <tr>
                    <td><?php echo $idioma->descricao_idioma ?></td>
                    <td><?php echo $idioma->entende ?></td>
                    <td><?php echo $idioma->escreve ?></td>
                    <td><?php echo $idioma->fala ?></td>
                    <td><?php echo $idioma->le ?></td>
                    <td><a href="#" data='<?php echo json_encode($idioma) ?>' class="btn btn-primary btn_editar_idioma">Editar</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
