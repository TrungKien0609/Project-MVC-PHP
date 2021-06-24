<?php
class home extends connect_M_V
{
    function default()
    {
        $model = $this->linkmodel("Product");
        $data['title']  =  "Home" ;
        $data +=  $model->get_category();
        $data += $model->GetProductforHome();
        $this->linkview("home", $data);
    }
}
