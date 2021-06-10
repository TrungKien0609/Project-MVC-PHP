<?php
class upload extends connect_M_V
{
    function savedImage($param)
    { 
        $im = "./public/user_image/".$param;
        $tail =  mime_content_type($im);
        header("Content-Type: $tail");
        readfile($im);
    }
}
