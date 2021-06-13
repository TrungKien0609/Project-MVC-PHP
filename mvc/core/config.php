<?php
define("WEBSITE_TITLE", "MY SHOP");
// database name
define("DB_HOST", "localhost");
define("DB_NAME", "shoppingDb");
define("DB_USER", "root");
define("DB_PASS", "");
define("DEBUG", true);
$path = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];
$path = str_replace("index.php", "", $path);
define("ROOT", $path);
define("ASSETS", $path . "public/home/");
define("ADMIN", $path . "public/admin/");

//    if(DEBUG){
//        ini_set('display_errors',1);
//    }
//    else
//    {
//        ini_set("display_errors",0);
//    }
