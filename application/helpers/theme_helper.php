<?php

function get_alert_code($msg, $status)
{
    if($msg == '' || is_null($msg)){
        return '';
    }
    $lista_status = array('success', 'info', 'warning', 'danger');
    if(!in_array($status, $lista_status)){
        return '';
    }
    return '<div class="alert alert-'. $status .'" role="alert">'.$msg.'</div>';
}

function get_src_foto_candidato($img)
{
    $dir_fotos = "assets/fotos/";
    if(is_null($img) || !file_exists($dir_fotos . $img)){
        return base_url("assets/img/semImg.png");
    }
    return base_url($dir_fotos . $img);
}

function display_erros($erro)
{
    if(is_null($erro)){
        return '';
    }
    if(!is_array($erro)){
        return '<span style="font-size: 10px; color: red; font-style: italic;">'.$erro.'</span>';
    }
    else{
        $todos_erros = '';
        foreach ($erro as $err){
            $todos_erros .= '<span style="font-size: 10px; color: red; font-style: italic;">'.$err.'</span><br />';
        }
        return $todos_erros;
    }
    return '';
}

