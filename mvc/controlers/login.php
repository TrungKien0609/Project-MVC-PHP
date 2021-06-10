<?php 
    class login extends connect_M_V{
        function default(){
            session_unset();
            $data['title'] = "Login";
            if($_SERVER['REQUEST_METHOD'] == "POST")
            { 
                $user = $this->linkmodel('user');
                $data += $user->login($_POST);
            }
            $this->linkview("login",$data);
           }
    }
?>