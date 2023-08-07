<?php

class App 
{
    protected $controller = "Home";
    protected $action = "index";
    protected $params=[];

    function __construct()
    {
        $arr = $this->urlProcess();
        // Handle controller
        if (isset($arr[0]) && file_exists("./src/controllers/". $arr[0] .".php")) {
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once("./src/controllers/". $this->controller .".php");

        // Handle action
        if (isset($arr[1])) {
            if (method_exists($this->controller, $arr[1])) {
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }
        // Handle params
        $this->params = $arr ? array_values($arr) : ["index"];

        // Call function
        call_user_func_array([new $this->controller, $this->action], $this->params);
    }

    function urlProcess() {
        if (isset($_GET['url'])) {
            return explode("/", filter_var(trim($_GET['url'])));
        }
    }
}


?>