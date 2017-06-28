<div role="tabpanel" class="tab-pane<?php echo ($active == 'meus_dados' ? ' active' : '') ?>" id="meus_dados">
    <br />
    <?php echo $msg ?>
    <form method="post" action="<?php echo base_url('administrador/atualizar_dados') ?>">
        <div class="container">   
            <div class="row">
                <div class="col-lg-8" style="text-align: left;">
                    <!-- DADOS PESSOAIS-->
                    <fieldset>
                        <legend>Dados Pessoais</legend>
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control input-lg"  placeholder="Nome" name="nome" value="<?php echo $usuario->nome ?>">
                            <?php echo display_erros(isset($erros['nome']) ? $erros['nome'] : null) ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control input-lg"  placeholder="Email" name="email" value="<?php echo $usuario->email ?>">
                            <?php echo display_erros(isset($erros['email']) ? $erros['email'] : null) ?>
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha:</label>
                            <input type="password" class="form-control input-lg"  placeholder="Senha" name="senha" value="<?php echo $usuario->senha ?>">
                            <?php echo display_erros(isset($erros['Senha']) ? $erros['Senha'] : null) ?>
                        </div>
                        
                    </fieldset></br>
                </div>
                <div id="myAffix" style="position: fixed; bottom: 45%; display: block; width: 10%; right: 25%;" data-spy="affix" data-offset-bottom="230" > <!--data-spy="affix" data-offset-top="197"-->
                    <button type="submit"  class="btn btn-success btn-lg btn-block">Atualizar Dados</button>  
                </div>
            </div>
        </div>
    </form>
</div>