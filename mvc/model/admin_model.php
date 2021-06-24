<?php
class admin_model extends Database
{
    function login($post)
    {
        $email = trim($post['email']);
        $password = trim($post['password']);
        $password = hash('sha1', $password);
        $query = " SELECT * FROM  users WHERE email = '$email' AND password = '$password' AND rank = 'admin'";
        $db = $this->read($query);
        if ($db != false) {
            $row = mysqli_fetch_assoc($db);
            $_SESSION["admin"] = [
                'first_character' => strtoupper(substr($row['name'], 0, 1)),
                'adminname' => $row['name'],
                'adminID' => $row['url_address'],
                'adminemail' => $row['email'],
                'adminImage' => $row['image']
            ];
            header("Location:" . ROOT . "admin/ProductList");
        } else {
            return ['error' => "Tài khoản hoặc mật khẩu không chính xác"];
        }
    }
    function add_product($post, $file)
    {
        $product_name = $this->conn->real_escape_string($post['txtName']);
        $product_price = $this->conn->real_escape_string($post['Price']);
        $production_company = $this->conn->real_escape_string($post['txtCompany']);
        $product_quantity  =  $this->conn->real_escape_string($post['quantity']);
        $product_desc = $this->conn->real_escape_string($post['description']);
        $slag_desc = $this->conn->real_escape_string($post['slag']);
        $product_cate = $this->conn->real_escape_string($post['category']);
        $product_status = $post['status'];
        $product_url =  rand(time(), 10000000000);
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date("Y-m-d H:i:s");
        $slag_desc = str_replace(" ", "_", $slag_desc);
        $slag_desc = $this->vn_to_str($slag_desc);
        if (
            !empty($product_name) && !empty($product_price) && !empty($production_company) && !empty($product_quantity)
            && !empty($product_desc) && !empty($slag_desc) && !empty($product_cate) && !empty($product_status)
        ) {
            $total_count = count($file['name']);
            if ($total_count > 0) {
                $query = "INSERT INTO products (product_name, production_company, product_url , description ,category ,price ,quantity,date,slag_description,status)
            VALUE ('$product_name','$production_company','$product_url','$product_desc','$product_cate','$product_price','$product_quantity','$date','$slag_desc','$product_status')";
                $db = $this->insert($query);
                if ($db === false) {
                    return 'Unexpected error';
                }
                for ($i = 0; $i < $total_count; $i++) {
                    $tmpFilePath = $file['tmp_name'][$i];
                    $imagename = $file['name'][$i];
                    $new_img_name = str_replace(" ", "_", $product_url . $imagename);
                    $new_img_name = $this->vn_to_str($new_img_name);
                    if ($tmpFilePath != "") {
                        $temp = $i + 1;
                        if (move_uploaded_file($tmpFilePath, "public/product_image/" . $new_img_name)) {
                            $sql =  "UPDATE products SET image$temp = '$new_img_name' WHERE product_url  = '$product_url'";
                            $db  = $this->update($sql);
                            if ($db = false) {
                                return 'Unexpected error';
                            }
                        }
                    }
                }
                return "complete";
            } else {
                return   'choose at lease one image of product';
            }
        } else {
            return  'Please fill out all field on the form';
        }
    }
    function get_category()
    {
        $array = array();
        $query = "SELECT * FROM categories";
        $result = $this->read($query);
        if ($result != false) {
            while ($row = mysqli_fetch_assoc($result)) {
                $array[] = $row['cate_name'];
            }
        }
        return ['CateList' => $array];
    }
    function get_product_detail_infor($para)
    {
        $array = array();
        $query = "SELECT * FROM products WHERE product_url = '$para'";
        $result = $this->read($query);
        if ($result != false) {
            $row =  mysqli_fetch_assoc($result);
            $array['product_name'] = $row['product_name'];
            $array['production_company'] = $row['production_company'];
            $array['description'] = $row['description'];
            $array['category'] = $row['category'];
            $array['price'] = $row['price'];
            $array['quantity'] = $row['quantity'];
            $array['image1'] = $row['image1'];
            $array['image2'] = $row['image2'];
            $array['image3'] = $row['image3'];
            $array['image4'] = $row['image4'];
            $array['slag_description'] = $row['slag_description'];
            $array['status'] = $row['status'];
        }
        return $array;
    }
    function getProductList()
    {
        $array = array();
        $temparr = array();
        $query = "SELECT * FROM products";
        $result = $this->read($query);
        if ($result != false) {
            while ($row = mysqli_fetch_assoc($result)) {
                $temparr['product_name'] = $row['product_name'];
                $temparr['production_company'] = $row['production_company'];
                $temparr['product_url'] = $row['product_url'];
                $temparr['description'] = $row['description'];
                $temparr['category'] = $row['category'];
                $temparr['price'] = $row['price'];
                $temparr['quantity'] = $row['quantity'];
                $temparr['image1'] = $row['image1'];
                $temparr['image2'] = $row['image2'];
                $temparr['image3'] = $row['image3'];
                $temparr['image4'] = $row['image4'];
                $temparr['date'] = $row['date'];
                $temparr['slag_description'] = $row['slag_description'];
                $temparr['status'] = $row['status'];
                array_push($array, $temparr);
            }
        }
        return ['productList' => $array];
    }
    function getUserList()
    {
        $array = array();
        $temparr = array();
        $query = "SELECT * FROM users";
        $result = $this->read($query);
        if ($result != false) {
            while ($row = mysqli_fetch_assoc($result)) {
                $temparr['url_address'] = $row['url_address'];
                $temparr['name'] = $row['name'];
                $temparr['email'] = $row['email'];
                $temparr['date'] = $row['date'];
                $temparr['image'] = $row['image'];
                $temparr['rank'] = $row['rank'];
                array_push($array, $temparr);
            }
        }
        return ['userList' => $array];
    }
    function ProductEdit($post, $file, $para)
    {
        $product_name = $this->conn->real_escape_string($post['txtName']);
        $product_price = $this->conn->real_escape_string($post['Price']);
        $production_company = $this->conn->real_escape_string($post['txtCompany']);
        $product_quantity  =  $this->conn->real_escape_string($post['quantity']);
        $product_desc = $this->conn->real_escape_string($post['description']);
        $slag_desc = $this->conn->real_escape_string($post['slag']);
        $product_cate = $this->conn->real_escape_string($post['category']);
        $product_status = $post['status'];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date("Y-m-d H:i:s");
        $slag_desc = str_replace(" ", "_", $slag_desc);
        $slag_desc = $this->vn_to_str($slag_desc);
        if (
            !empty($product_name) && !empty($product_price) && !empty($production_company) && !empty($product_quantity)
            && !empty($product_desc) && !empty($slag_desc) && !empty($product_cate) && !empty($product_status)
        ) {
            $total_count = count($file['name']);
            return $total_count;
            if ($total_count > 0){
                $query = "UPDATE  products  SET product_name = '$product_name', production_company = '$production_company', description = '$product_desc' ,category ='$product_cate' ,price  = '$product_price',
                quantity = '$product_quantity',date = '$date',slag_description = '$slag_desc',status = '$product_status' WHERE product_url = '$para'";
                $db = $this->update($query);
                if ($db == false) {
                    return 'Unexpected error';
                }
                for ($i = 0; $i < $total_count; $i++) {
                    $tmpFilePath = $file['tmp_name'][$i];
                    $imagename = $file['name'][$i];
                    $new_img_name = str_replace(" ", "_", $para . $imagename);
                    $new_img_name = $this->vn_to_str($new_img_name);
                    if ($tmpFilePath != "") {
                        $temp = $i + 1;
                        if (move_uploaded_file($tmpFilePath, "public/product_image/" . $new_img_name)) {
                            $sql =  "UPDATE products SET image$temp = '$new_img_name' WHERE product_url  = '$para'";
                            $db  = $this->update($sql);
                            if ($db = false) {
                                return 'Unexpected error';
                            }
                        }
                    }
                }
                return "complete";
            } else {
                return   'choose at lease one image of product';
            }
        } else {
            return  'Please fill out all field on the form';
        }
    }
    function ProductDelete($product_url)
    {
        $query = "DELETE  FROM products WHERE product_url = '$product_url'";
        $result = $this->delete($query);
        if ($result != false) {
            return ['delete_product' => "complete"];
        }
        else
        return ['delete_product' => "Unexpected error"] ;
    }
    function vn_to_str($str)
    {


        $unicode = array(

            'a' => 'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',

            'd' => 'đ',

            'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',

            'i' => 'í|ì|ỉ|ĩ|ị',

            'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',

            'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',

            'y' => 'ý|ỳ|ỷ|ỹ|ỵ',

            'A' => 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',

            'D' => 'Đ',

            'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',

            'I' => 'Í|Ì|Ỉ|Ĩ|Ị',

            'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',

            'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',

            'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ',

        );

        foreach ($unicode as $nonUnicode => $uni) {

            $str = preg_replace("/($uni)/i", $nonUnicode, $str);
        }
        $str = str_replace(' ', '_', $str);

        return $str;
    }
}
