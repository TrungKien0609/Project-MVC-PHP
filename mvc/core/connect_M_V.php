<?php
class connect_M_V
{
    function linkmodel($modelname)
    {
        require_once "./mvc/model/" . $modelname . ".php";
        return new $modelname;
    }
    function linkview($link, $data = [])
    {
        require_once "./mvc/views/" . $link . ".php";
    }
}
