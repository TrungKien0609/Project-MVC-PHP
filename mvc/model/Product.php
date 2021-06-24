<?php
class Product extends Database
{
    function GetProductforHome()
    {
        $array = array();
        $cate = array();
        $query = '';
        $cate = $this->get_category();
        for ($i = 0; $i < count($cate['CateList']); $i++) {
            $temp = $cate['CateList']["$i"];
            if ($i != count($cate['CateList']) - 1) {
                $query .= " ( SELECT  category, product_name, date , image1 , product_url, price  FROM products  WHERE category = '$temp' ORDER BY date DESC LIMIT 3 )  UNION ";
            } else
                $query .= " ( SELECT category, product_name, date, image1 , product_url, price FROM products  WHERE category = '$temp'  ORDER BY date DESC LIMIT 3 ) ";
        }
        $db =  $this->read($query);
        if ($db != false) {
            while ($row =  $db->fetch_assoc()) {
                $array[] = $row;
            }
        }
        return ['ProductList' => $array];
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
    function getAllProducts($category, $page)
    {
        $array =  array();
        $array1 =  array();
        $page = (float)$page;
        if ($category == "all")
            $queryPro = "SELECT * FROM products";
        else 
            $queryPro = "SELECT * FROM products WHERE 	category = '$category' " ;
        $totalpage = ceil(count($this->read($queryPro)->fetch_all(MYSQLI_ASSOC)) / 9);
        $array1['currentpage'] = $page;
        $array1['totalpage'] = $totalpage;
        $array1['link'] = ROOT . "products/category/" . $category . "/";
        $array1['nextpage']  = ($page + 1) < $totalpage ? $page + 1 : $totalpage;
        $array1['prevpage']  = ($page - 1) > 1 ? $page - 1 : 1;
        $array1['category']  = $category;
        if ($page <= $totalpage) {
            $offset = ($page - 1) * 9;
        } else {
            $offset = ($totalpage - 1) * 9;
        }
        if ($category == "all")
            $query = "SELECT * FROM products  LIMIT 9 OFFSET $offset";
        else
            $query = "SELECT * FROM products  WHERE category = '$category' LIMIT 9 OFFSET $offset ";
        $result = $this->read($query);
        if ($result != false) {
            while ($row = mysqli_fetch_assoc($result)) {
                $array[] = $row;
            }
        }

        return [
            'productList' => $array,
            'page' => $array1
        ];
    }
}
