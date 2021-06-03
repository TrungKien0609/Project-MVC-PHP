<?php
class Database
{
    private $conn;
    private $server = DB_HOST;
    private $username = DB_USER;
    private $password = DB_PASS;
    private $dbname = DB_NAME;
    public  $error;
    public function __construct()
    {
        $this->connectDB();
    }
    private function connectDB()
    {
        $this->conn = new mysqli($this->server, $this->username, $this->password, $this->dbname);
        mysqli_query($this->conn, "SET NAMES 'utf8'");
        if (!$this->conn) {
            $this->error = "Connection fail" . $this->conn->connect_error;
            return false;
        }
    }
    public function read($query)
    {
        // $statement = $this->conn->prepare($query);
        // $result = $statement->execute($statement);
        // if ($result->num_rows > 0) {
        //     $data = $result->fetch_all(MYSQLI_ASSOC);
        //     if ($data) {
        //         return $data;
        //     }
        //     return false;
        // }
        $update_row = $this->conn->query($query) or
            die($this->conn->error . __LINE__);
        if ($update_row) {
            return $update_row;
        } else {
            return false;
        }
    }
    public function write($query, $data = array())
    {
    }
}
$db = new Database();
$data = $db->read('SHOW COLUMNS FROM users');
while($row = mysqli_fetch_assoc($data)){
    echo "<pre>";
    print_r($row['Field']);
    echo "</pre>";
}


