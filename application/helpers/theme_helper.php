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

