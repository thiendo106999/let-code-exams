<?php

namespace Bootstrap;

class Controller 
{
    function model($model) {
        require_once("./src/models/$model.php");
        
        return new $model; 
    }

    function view($view, $parameters = []) {
        require_once("./src/views/$view.php");
    }
}
?>