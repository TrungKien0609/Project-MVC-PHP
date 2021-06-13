<?php
class user extends Database
{
    public $error = array();

    // validate form when form is submited.
    function signup($post)
    {

        $name = trim($post['name']);
        $email = trim($post['email']);
        $password = trim($post['password']);
        $password2 = trim($post['password2']);
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->error['error_email'] = "Email không hợp lệ";
            return $this->error;
        }
        if (empty($name) || !preg_match("/^(?=[a-zA-Z0-9._]{1,10}$)(?!.*[_.]{2})[^_.].*[^_.]$/", $name)) {
            $this->error['error_name'] = "Tên không hợp lệ";
            return $this->error;
        }
        if (strlen($password) < 4 || strlen($password) > 30 || empty($password) || !preg_match("/^(?=[a-zA-Z0-9._]{4,30}$)(?!.*[_.]{2})[^_.].*[^_.]$/", $password)) {
            $this->error['error_password'] = "Mật khẩu không hợp lệ";
            return $this->error;
        }
        if ($password != $password2 || empty($password2)) {
            $this->error['error_retype_password'] = "Mật khẩu phải giống ở trên";
            return $this->error;
        }
        if (
            empty($this->error['error_name']) && empty($this->error['error_email']) && empty($this->error['error_password'])
            && empty($this->error['error_retype_password'])
        ) {
            $rank = "customer";
            $url_address = rand(time(), 10000000);
            $password = hash('sha1', $password);
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $date = date("Y-m-d H:i:s");
            $_SESSION["userinfor"] = [
                'first_character' => strtoupper(substr($name, 0, 1)),
                'username' => $name,
                'userID' => $url_address,
                'useremail' => $email
            ];
            $query = "INSERT INTO users (url_address,name,email,password,date,rank) VALUES ('$url_address','$name','$email',
                '$password','$date','$rank')";
            $db = $this->write($query);
            if ($db){
                return ['result' => "success"];
            }
        }
    }


    // ajax validate form when user typing information


    function checkemail($email)
    {
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return json_encode("Email không hợp lệ", JSON_UNESCAPED_UNICODE);
        } else {
            $query = "SELECT * FROM users WHERE email = '$email'";
            $result = $this->read($query);
            if ($result != false) {
                return json_encode("Email đã tồn tại", JSON_UNESCAPED_UNICODE);
            }
        }
        return  json_encode("ok", JSON_UNESCAPED_UNICODE);
    }
    function checkname($name)
    {
        if (empty($name) || !preg_match("/^(?=[a-zA-Z0-9._]{1,10}$)(?!.*[_.]{2})[^_.].*[^_.]$/", $name)) {
            return json_encode("Tên không hợp lệ", JSON_UNESCAPED_UNICODE);
        } else {
            $query = "SELECT * FROM users WHERE email = '$name'";
            $result = $this->read($query);
            if ($result != false) {
                return json_encode("Tên đã được sử dụng", JSON_UNESCAPED_UNICODE);
            }
        }
        return json_encode("ok", JSON_UNESCAPED_UNICODE);
    }
    function checkpassword($pass)
    {
        if (empty($pass) || !preg_match("/^(?=[a-zA-Z0-9._]{4,30}$)(?!.*[_.]{2})[^_.].*[^_.]$/", $pass)) {
            return json_encode("Mật khẩu không hợp lệ", JSON_UNESCAPED_UNICODE);
        }
        return json_encode("ok", JSON_UNESCAPED_UNICODE);
    }

    function check_retype_pass($retype_pass, $pass)
    {
        if ($retype_pass != $pass) {
            return json_encode("Mật khẩu phải giống ở trên", JSON_UNESCAPED_UNICODE);
        }
        return json_encode("ok", JSON_UNESCAPED_UNICODE);
    }

    function login($post)
    {
        $email = trim($post['email']);
        $password = trim($post['password']);
        $password = hash('sha1', $password);
        $query = " SELECT * FROM  users WHERE email = '$email' AND password = '$password' AND rank = 'customer'";
        $db = $this->read($query);
        if ($db){
            $row = mysqli_fetch_assoc($db);
            $_SESSION["userinfor"] = [
                'first_character' => strtoupper(substr($row['name'], 0, 1)),
                'username' => $row['name'],
                'userID' => $row['url_address'],
                'useremail' => $row['email'],
                'userImage' => $row['image']
            ];
            header("Location:" . ROOT . "Home");
        } else {
            return ['error' => "Tài khoản hoặc mật khẩu không chính xác"];
        }
    }


    function check_user_upload_image($files)
    {
        if (isset($files)) { // if file is upploaded
            $img_name = $files['name']; // getting user uploaded image name
            $img_explode = explode('.', $img_name);
            $img_ext = end($img_explode); // hear we get the extension of an user uploaded img file
            $extensions = ['png', 'jepg', 'jpg']; // these are some valid img ext and  we've stored them in array
            if (in_array($img_ext, $extensions) === true) {
                $tmp_name =  $files['tmp_name'];  // chứa temporary name  của ảnh người dùng trong thư mục $tmp_name   
                // let's explode image and get the last extension like jpg png
                // if  user uploaded img ext is matched with any array extension
                // this will return us current time
                // we need this time because when you uploading user img to in our folder, we rename user file with current time 
                // so all the img file will have a unique name
                // let's move the user uploaded img to our particular folder

                $new_img_name = str_replace(" ", "_", $_SESSION["userinfor"]['userID'] . $img_name);
                $new_img_name = $this->vn_to_str($new_img_name);
                $userId  = $_SESSION["userinfor"]['userID'];
                // dấu . là ý ghép chuổi , lay ten name bang thoi diem upload file ( co ich khi ng dung upload 2 file anh khac nhau nhung trung tên)
                if (move_uploaded_file($tmp_name, "public/user_image/" . $new_img_name)) { // nếu nư ảnh người dùng được upload thành công thì sẽ chuyển file ( tên tạm được tạo ra để move /save file trong thư mục ở máy chủ)
                    // nếu hợp lệ sẽ chuyển file ( tạm đó) trong thư mục ($tmp_name) đến thư mục chứa file images/...... , khúc này sẽ xóa đi file image tạm trong folder
                    $query =  " UPDATE users SET image = '$new_img_name' WHERE url_address  = '$userId' ";
                    $db  = $this->update($query);
                    if (isset($db)) { // if these data inserted
                        if (isset($_SESSION["userinfor"]['userImage'])) {
                            $_SESSION["userinfor"]['userImage'] =  $new_img_name;
                        } else {
                            $_SESSION["userinfor"] += [
                                'userImage' => $new_img_name
                            ];
                        }
                        return json_encode("true", JSON_UNESCAPED_UNICODE);
                    } else {
                        return json_encode("Hãy upload file lại", JSON_UNESCAPED_UNICODE);
                    }
                }
            } else {
                return json_encode(" Vui lòng chọn file - .jpg, .jepg, .png", JSON_UNESCAPED_UNICODE);
            }
        } else {
            return json_encode("Không tải được tiệp", JSON_UNESCAPED_UNICODE);
        }
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
    function  get_user($url)
    {
    }
}
