<div role="tabpanel" class="tab-pane<?php echo ($active == 'candidatos' ? ' active' : '') ?>" id="candidatos" align="left">
        <br />
        <?php echo $msg ?>
        <br />
        <table class="table table-hover">
            <thead thead-default>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>CPF</th>
                    <th>Sexo</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($candidatos as $candidato) : ?>
                <tr>
                    <td><?php echo $candidato->nome ?></td>
                    <td><?php echo $candidato->email ?></td>
                    <td><?php echo $candidato->cpf ?></td>
                    <td><?php echo $candidato->sexo ?></td>
                    <td><a href="<?php echo base_url('administrador') ?>" class="btn btn-primary">Detalhes</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>