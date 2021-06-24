<?php
class products extends connect_M_V
{
    private $data = array();
    private $model;
     function __construct()
    {
        $this->model = $this->linkmodel("Product");
        $this-> data['title']  =  "Products";
        $this-> data +=  $this-> model->get_category();
    }
    function default()
    {
        $this->Category("all");
        $this->linkview("products", $this->data);
    }
    function Category($category, $page = "1"){
        $this-> data += $this -> model -> getAllProducts($category,$page);
        // echo "<pre>";
        // var_dump($this->data);
        // echo "</pre>";
        $this->linkview("products", $this->data);
    }

}
