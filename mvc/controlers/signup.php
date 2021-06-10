<?php 
    class signup extends connect_M_V{
        function default(){
            $data['title'] = "Signup";
            if($_SERVER['REQUEST_METHOD'] == "POST")
            { 
                $user = $this->linkmodel('user');
                $data += $user->signup($_POST);
            }
            $this->linkview("signup",$data);
        }
}
