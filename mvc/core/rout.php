<?php
class rout
{
    private $controler = "home";
    private $action = "default";
    private $para = [];
    public function __construct()
    {
        $arr = $this->geturl();
        if (file_exists("./mvc/controlers/".strtolower($arr[0]).".php")) {
            $this->controler = $arr[0];
            unset($arr[0]);
        }
        require_once "./mvc/controlers/".$this->controler.".php";
        if(isset($arr[1])){
            if (method_exists($this->controler, $arr[1])) {
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }
        $this->param = $arr ? array_values($arr) : [];
        
        call_user_func_array([new $this->controler, $this->action], $this->para);
    }
    function geturl()
    {
        if (isset($_GET['url'])) {
            return explode("/", filter_var(trim($_GET['url'], "/"), FILTER_SANITIZE_URL));
        }
    }
}
