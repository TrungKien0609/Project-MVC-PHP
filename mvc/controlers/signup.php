<?php 
    class signup extends connect_M_V{
        function default(){
            if($_SERVER['REQUEST_METHOD'] == "POST")
            {

            }
            $this->linkview("signup",["title" => "Signup"]);
           }
    }
