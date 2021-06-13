<?php
class admin extends connect_M_V
{
    function default()
    {
        if (isset($_SESSION['admin'])) {
            $data['title'] = "ProductList";
            $this->linkview("admin/product_list", $data);
        } else {
            $data['title'] = "Login";
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $model = $this->linkmodel("admin_model");
                $data += $model->login($_POST);
            }
            $this->linkview("admin/login", $data);
        }
    }
    function  logout()
    {
        session_unset();
        $this->linkview("admin/login");
    }
    function ProductList()
    {
        $data['title'] = "ProductList";
        //    $model = $this->linkmodel("getsv");
        //    $model_fucn = $model->print();
        $this->linkview("admin/product_list", $data);
    }
    function UserList()
    {
        //    $model = $this->linkmodel("getsv");
        //    $model_fucn = $model->print();
        $this->linkview("admin/user_list");
    }
    function ProductEdit()
    {
        //    $model = $this->linkmodel("getsv");
        //    $model_fucn = $model->print();
        $this->linkview("admin/product_edit");
    }
    function ProductAdd()
    {
        $data['title'] = "Add Product";
        $model = $this->linkmodel("admin_model");
        $data += $model->get_category();
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $data['error'] = $model->add_product($_POST,$_FILES['ProductImages']);
            $this->linkview("admin/product_add", $data);
            
        }
        $this->linkview("admin/product_add", $data);
    }
    function CategoryList()
    {
        //    $model = $this->linkmodel("getsv");
        //    $model_fucn = $model->print();
        $this->linkview("admin/cate_list");
    }
    function CategoryEdit()
    {
        //    $model = $this->linkmodel("getsv");
        //    $model_fucn = $model->print();
        $this->linkview("admin/cate_edit");
    }
    function CategoryAdd()
    {
        //    $model = $this->linkmodel("getsv");
        //    $model_fucn = $model->print();
        $this->linkview("admin/cate_add");
    }
}
