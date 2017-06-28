<div role="tabpanel" class="tab-pane<?php echo ($active == 'empresas' ? ' active' : '') ?>" id="empresas" align="left">
        <br />
        <?php echo $msg ?>
        <br />
        <table class="table table-hover">
            <thead thead-default>
                <tr>
                    <th>Empresa</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($empresas as $empresa) : ?>
                <tr>
                    <td><?php echo $empresa->nome ?></td>
                    <td><?php echo $empresa->email ?></td>
                    <td><a href="<?php echo base_url('administrador') ?>" class="btn btn-primary">Detalhes</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>