<?php

class DBController
{
    // Database Connection Properties

    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    public $database = "ezrigs";
    protected $db_port = "3307";
    // connection property
    public $con = null;

    // call constructor
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database, $this->db_port);
        if ($this->con->connect_error){
            echo "Fail " . $this->con->connect_error;
        }
        //echo 'Connection successful';
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    // for mysqli closing connection
    protected function closeConnection(){
        if ($this->con != null ){
            $this->con->close();
            $this->con = null;
        }
    }
}
$db = new DBController();

