<?php 
    class products extends connect_M_V{
        function default(){
            //    $model = $this->linkmodel("getsv");
            //    $model_fucn = $model->print();
               $this->linkview("products",["title" => "Products"]);
           }
    }
?>