// JavaScript source code

$(document).ready(function () {
    //Limpar o form quando o usu�rio fechar o modal
    $('.modal').on('hidden.bs.modal', function () {
        $('#' + $(this).attr('ref')).trigger('reset');
        $('#' + $(this).attr('ref') + ' input[name="id"]').val('');
        $('#' + $(this).attr('ref') + ' input[name="acao"]').val('');
    });

    //Fechar o alerta automaticamente
    $(".alert").fadeTo(2000, 500).fadeOut(750, function () {
        $(".alert").alert('close');
    });

    //Carregar os dados da vaga no modal para editar
    $('.btn_editar_vaga').click(function () {
        var dados = $.parseJSON($(this).attr('data'));

        $('#formVaga input[name="id"').val(dados.idvaga);
        $('#formVaga input[name="titulo"').val(dados.titulo);
        $('#formVaga textarea[name="descricao_vaga"]').val(dados.descricao_vaga);
        $('#formVaga input[name="faixa_salarial_inicio"').val(dados.faixa_salarial_inicio);
        $('#formVaga input[name="faixa_salarial_fim"').val(dados.faixa_salarial_fim);
        $('#formVaga textarea[name="pre_requisitos"]').val(dados.pre_requisitos);
        $('#formVaga input[name="tipo_contrato"').val(dados.tipo_contrato);
        $('#formVaga textarea[name="benefecios"]').val(dados.benefecios);
        $('#formVaga input[name="status_vaga"').val(dados.status_vaga);
        $('#formVaga input[name="data_publicacao"').val(dados.data_publicacao);
        //$('#formVaga input[name="visualizacoes"').val(dados.visualizacoes);
        $('#formVaga input[name="acao"]').val('editar');

        $('#modalVaga').modal();
    });

    
});
