<?php
class Database
{
    public $conn;
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
        $result = $this->conn->query($query) or
            die($this->conn->error . __LINE__);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }
    public function write($query)
    {
        $row = $this->conn->query($query) or die($this->conn->error . __LINE__);
        if ($row) {
            return $row;
        } else {
            return false;
        }
    }
    public function insert($query)
    {
        $row  = $this->conn->query($query) or die($this->conn->error . __LINE__);
        if($this->conn->affected_rows == 1)
        return $row;
        return false;
    }
    public function update($query)
    {
        $row  = $this->conn->query($query) or die($this->conn->error . __LINE__);
        if($this->conn->affected_rows == 1)
        return $row;
        return false;
    }
    public function delete($query)
    {
        $row  = $this->conn->query($query) or die($this->conn->error . __LINE__);
        if($this->conn->affected_rows == 1)
        return $row;
        return false;
    }
}


// echo "<pre>";
// print_r($data);
// echo "</pre>";
