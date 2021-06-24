<?php
class admin extends connect_M_V
{
    function default()
    {
        if (isset($_SESSION['admin'])) {
            $this->ProductList();
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
        $model = $this->linkmodel("admin_model");
        $data += $model->getProductList();
        $this->linkview("admin/product_list", $data);
    }
    function UserList()
    {
        $data['title'] = "UserList";
        $model = $this->linkmodel("admin_model");
        $data += $model->getUserList();
        $this->linkview("admin/user_list", $data);
    }
    function ProductEdit($para)
    {
        $data['title'] = "ProductEdit";
        $model = $this->linkmodel("admin_model");
        $data += $model->get_category();
        $data['product_detail'] =  $model->get_product_detail_infor($para);
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $data['result'] = $model->ProductEdit($_POST, $_FILES['ProductImages'], $para);
            $this->linkview("admin/product_edit", $data);
        }
        $this->linkview("admin/product_edit", $data);
    }
    function ProductDelete($para){
        $data['title'] = "ProductList";
        $model = $this->linkmodel("admin_model");
        $data += $model->ProductDelete($para);
        $data += $model->getProductList();
        $this->linkview("admin/product_list", $data);
    }
    function ProductAdd()
    {
        $data['title'] = "Add Product";
        $model = $this->linkmodel("admin_model");
        $data += $model->get_category();
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $data['result'] = $model->add_product($_POST, $_FILES['ProductImages']);
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
