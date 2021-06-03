<?php 
    class detailproduct extends connect_M_V{
        function default(){
            //    $model = $this->linkmodel("getsv");
            //    $model_fucn = $model->print();
               $this->linkview("detailproduct",["title" => "DetailProduct"]);
           }
    }
?>