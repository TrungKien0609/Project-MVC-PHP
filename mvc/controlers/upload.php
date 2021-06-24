<?php
class upload extends connect_M_V
{
    function UserImage($param)
    { 
        $im = "./public/user_image/".$param;
        $tail =  mime_content_type($im);
        header("Content-Type: $tail");
        readfile($im);
    }
    function ProductImages($param)
    {
        $im = "./public/product_image/".$param;
        $tail =  mime_content_type($im);
        header("Content-Type: $tail");
        readfile($im);
    }
}
