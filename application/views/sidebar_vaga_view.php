<div class="col-md-3" style="text-align: left;">
    <h2>Filtros</h2>
    <form class="form-horizontal" action="<?php echo base_url('vagas') ?>/">
        <input type="search" name="q" class="form-control" placeholder="Pesquise por vagas..." value="<?php echo $this->input->get('q') ?>" />
        <button type="submit" class="btn btn-primary btn-block" style="margin-top: 3px;">Pesquisar</button>
    </form>
    <form class="form-horizontal" action="<?php echo base_url('vagas') ?>/">
        <input type="hidden" name="q" value="<?php echo $this->input->get('q') ?>"/>
        <p><strong>Estado:</strong></p>
        <label><input type="checkbox" name="estado[]" value="SP" />São Paulo </label> <br />
        <label><input type="checkbox" name="estado[]" value="RJ" />Rio de Janeiro </label> <br />
        <label><input type="checkbox" name="estado[]" value="MG" />Minas Gerais </label> <br />

        <p><strong>Faixa Salarial:</strong></p>
        <label><input type="radio" name="faixasalario" value="" checked="checked" />Todos </label> <br />
        <label><input type="radio" name="faixasalario" value="0-1000" />Até R$1000,00 </label> <br />
        <label><input type="radio" name="faixasalario" value="1000-2000" />De R$1000,00 à R$2000,00 </label> <br />
        <label><input type="radio" name="faixasalario" value="2000-3000" />De R$2000,00 à R$3000,00 </label> <br />
        <label><input type="radio" name="faixasalario" value="3000-5000" />De R$3000,00 à R$5000,00 </label> <br />
        <label><input type="radio" name="faixasalario" value="5000-n" />Acima de R$5000,00 </label> <br />
        <button type="submit" class="btn btn-primary btn-block" style="margin-top: 3px;">Filtrar</button>
    </form>
</div>