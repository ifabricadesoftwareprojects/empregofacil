$(document).ready(function(){
    //Limpar o form quando o usuário fechar o modal
    $('.close').click(function(){
        console.log('#' + $(this).attr('ref'));
       $('#' + $(this).attr('ref')).trigger('reset');
    });
    
    //Carregar os dados do curso no modal para editar
    $('.btn_editar_curso').click(function(){
        var dados = $.parseJSON($(this).attr('data'));
        
        $('#id').val(dados.idcurso);
        $('#descricao_curso').val(dados.descricao_curso);
        $('#instituicao').val(dados.instituicao);
        $('#nivel').val(dados.nivel).change();
        $('#mes_ano_inicio').val(dados.mes_ano_inicio);
        $('#mes_ano_fim').val(dados.mes_ano_fim);
        $('#status_curso').val(dados.status_curso).change();
        
        $('#modalCurso').modal();
    });
    
    //Carregar os dados do curso no modal para editar
    $('.btn_editar_experiencia').click(function(){
        var dados = $.parseJSON($(this).attr('data'));
        
        $('#id').val(dados.idexperiencia);
        $('#cargo').val(dados.cargo);
        $('#atividade_desempenhada').val(dados.atividade_desempenhada);
        $('#nivel_hierarquico').val(dados.nivel_hierarquico).change();
        $('#area').val(dados.area);
        $('#mes_ano_inicio').val(dados.mes_ano_inicio);
        $('#mes_ano_termino').val(dados.mes_ano_termino);
        $('#emprego_atual').val(dados.emprego_atual).change();
        
        $('#modalExperiencia').modal();
    });
});