<?php

function url_for($script_path){
    // add the leading '/' if not present
    if($script_path[0] != '/'){
        $script_path = "/" .$script_path;
    }
    return WWW_ROOT . $script_path;
}

function u($string=""){
    return urlencode($string);
}

function raw_u($string=""){
    return rawurlencode($string);
}

function error_404(){
    header($_SERVER["SERVER_PROTOCOL"]. "404 not found");
}

function error_500(){
    header($_SERVER["SERVER_PROTOCOL"]. "500 not found");
}

function redirect_to($location){
    header("Location: " . $location);
}

function is_post_request(){
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request(){
    return $_SERVER['REQUEST_METHOD'] == 'GET';
}
function is_pull_request(){
    return $_SERVER['REQUEST_METHOD'] == 'PULL';
}
function is_DELETE_request(){
    return $_SERVER['REQUEST_METHOD'] == 'DELETE';
}