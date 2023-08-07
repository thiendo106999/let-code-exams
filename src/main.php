<?php

require_once("./src/boostrap/app.php");
require_once("./src/boostrap/controller.php");

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
?>