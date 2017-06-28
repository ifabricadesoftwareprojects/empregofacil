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
                        
                        
                    </fieldset></br>
                </div>
                <div id="myAffix" style="position: fixed; bottom: 45%; display: block; width: 10%; right: 25%;" data-spy="affix" data-offset-bottom="230" > <!--data-spy="affix" data-offset-top="197"-->
                    <button type="submit"  class="btn btn-success btn-lg btn-block">Atualizar Dados</button>  
                </div>
            </div>
        </div>
    </form>
</div>