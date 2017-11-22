
$(document).ready(function(){
    //Limpar o form quando o usuário fechar o modal
    $('.modal').on('hidden.bs.modal', function(){
       $('#' + $(this).attr('ref')).trigger('reset');
       $('#' + $(this).attr('ref') + ' input[name="id"]').val('');
       $('#' + $(this).attr('ref') + ' input[name="acao"]').val('');
    });
    
    //Fechar o alerta automaticamente
    $(".alert").fadeTo(2000, 500).fadeOut(750, function(){
        $(".alert").alert('close');
    });
    
    //Carregar os dados do curso no modal para editar
    $('.btn_editar_curso').click(function(){
        var dados = $.parseJSON($(this).attr('data'));
        
        $('#formCurso input[name="id"').val(dados.idcurso);
        $('#formCurso textarea[name="descricao_curso"]').val(dados.descricao_curso);
        $('#formCurso input[name="instituicao"]').val(dados.instituicao);
        $('#formCurso select[name="nivel"]').val(dados.nivel).change();
        $('#formCurso input[name="mes_ano_inicio"]').val(dados.mes_ano_inicio);
        $('#formCurso input[name="mes_ano_fim"]').val(dados.mes_ano_fim);
        $('#formCurso select[name="status_curso"]').val(dados.status_curso).change();
        $('#formCurso input[name="acao"]').val('editar');
        
        $('#modalCurso').modal();
    });
    
    //Carregar os dados do curso no modal para editar
    $('.btn_editar_experiencia').click(function(){
        var dados = $.parseJSON($(this).attr('data'));
        
        $('#formExperiencia input[name="id"').val(dados.idexperiencia);
        $('#formExperiencia input[name="cargo"').val(dados.cargo);
        $('#formExperiencia textarea[name="atividade_desempenhada"').val(dados.atividade_desempenhada);
        $('#formExperiencia select[name="nivel_hierarquico"').val(dados.nivel_hierarquico).change();
        $('#formExperiencia input[name="area"').val(dados.area);
        $('#formExperiencia input[name="empresa"').val(dados.empresa);
        $('#formExperiencia input[name="mes_ano_inicio"').val(dados.mes_ano_inicio);
        $('#formExperiencia input[name="mes_ano_termino"').val(dados.mes_ano_termino);
        $('#formExperiencia select[name="emprego_atual"').val(dados.emprego_atual).change();
        $('#formExperiencia input[name="acao"]').val('editar');
        
        $('#modalExperiencia').modal();
    });
    
    $('.btn_editar_idioma').click(function(){
        var dados = $.parseJSON($(this).attr('data'));
        
        $('#formIdioma input[name="id"').val(dados.ididioma);
        $('#formIdioma select[name="descricao_idioma"]').val(dados.descricao_idioma).change();
        $('#formIdioma input[name="entende"][value="'+dados.entende+'"]').attr('checked', 'checked'); 
        $('#formIdioma input[name="escreve"][value="'+dados.escreve+'"]').attr('checked', 'checked'); 
        $('#formIdioma input[name="fala"][value="'+dados.fala+'"]').attr('checked', 'checked'); 
        $('#formIdioma input[name="le"][value="'+dados.le+'"]').attr('checked', 'checked'); 
        $('#formIdioma input[name="acao"]').val('editar');
        
        $('#modalIdioma').modal();
    });
    
    $('.btn_editar_endereco').click(function(){
        var dados = $.parseJSON($(this).attr('data'));
        
        $('#formEndereco input[name="id"').val(dados.idendereco);
        $('#formEndereco select[name="zona_moradia"]').val(dados.zona_moradia).change();
        $('#formEndereco input[name="rua"]').val(dados.rua);
        $('#formEndereco input[name="numero"]').val(dados.numero);
        $('#formEndereco input[name="complemento"]').val(dados.complemento);
        $('#formEndereco input[name="bairro"]').val(dados.bairro);
        $('#formEndereco input[name="cep"]').val(dados.cep);
        $('#formEndereco input[name="cidade"]').val(dados.cidade);
        $('#formEndereco select[name="estado"]').val(dados.estado).change();
        $('#formEndereco input[name="acao"]').val('editar');
        
        $('#modalEndereco').modal();
    });
    
    $('.campoextra').change(function(){
        
       var valor = $(this).val();
       
       var campo = '#' + $(this).attr('campoextra');
       var compara = $(this).attr('compara');
       
       
       if(valor === compara){
           
           
           $(campo).attr("disabled", false);
       }
       else{
           $(campo).val("");
           $(campo).attr("disabled", true);
       }
    });
});

    