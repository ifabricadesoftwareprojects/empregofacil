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

