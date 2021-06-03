<?php 
    class login extends connect_M_V{
        function default(){
            //    $model = $this->linkmodel("getsv");
            //    $model_fucn = $model->print();
               $this->linkview("login",["title" => "Login"]);
           }
    }
?>