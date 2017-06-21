<div class="col-md-3" style="text-align: left;">
    <h2>Filtros</h2>
    <form class="form-horizontal" action="<?php echo base_url('vagas') ?>/">
        <input type="search" name="q" class="form-control" placeholder="Pesquise por vagas..." value="<?php echo $this->input->get('q') ?>" />
        <button type="submit" class="btn btn-primary btn-block" style="margin-top: 3px;">Pesquisar</button>
    </form>
    <form>
        <p><strong>Estado:</strong></p>
        <input type="checkbox" />São Paulo <br />
        <input type="checkbox" />Rio de Janeiro <br />
        <input type="checkbox" />Minas Gerais <br />

        <p><strong>Faixa Salarial:</strong></p>
        <input type="checkbox" />Até R$1000,00 <br />
        <input type="checkbox" />De R$1000,00 à R$2000,00 <br />
        <input type="checkbox" />De R$2000,00 à R$3000,00 <br />
        <input type="checkbox" />Acima de R$3000,00 <br />
    </form>
</div>