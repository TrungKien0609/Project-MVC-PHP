<?php 
   class home extends connect_M_V{
       function default(){
        //    $model = $this->linkmodel("getsv");
        //    $model_fucn = $model->print();
           $this->linkview("home",["title" => "Home"]);
       }
   }
?>