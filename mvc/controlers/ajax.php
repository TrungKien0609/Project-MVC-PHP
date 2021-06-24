<?php
class ajax extends connect_M_V
{
  public $user;
  public $products;
  public $productData =  array();
  function __construct()
  {
    $this->user = $this->linkmodel("user");
    $this->products = $this->linkmodel("Product");
  }
  function checkemail()
  {
    if ($_POST['email']) {
      echo  $this->user->checkemail($_POST['email']);
    }
  }
  function checkname()
  {
    if ($_POST['name']) {
      echo  $this->user->checkname($_POST['name']);
    }
  }
  function checkpassword()
  {
    if ($_POST['password']) {
      echo  $this->user->checkpassword($_POST['password']);
    }
  }
  function check_upload_image()
  {
    if ($_FILES['image_upload']) {
      echo  $this->user->check_user_upload_image($_FILES['image_upload']);
    }
  }
  function category()
  {
    $this->data['title']="Products";
    $this->data +=  $this->model->get_category();
  }
}
