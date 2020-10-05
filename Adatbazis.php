<?php 
    class Adatbazis
    {
        private $db_host = "localhost";
        private $db_login = "root";
        private $db_pass = "";
        private $db_name = "allfunctions";
        public $conn;

        public function __construct()
        {
            $this->conn= new mysqli($this->db_host, $this->db_login, $this->db_pass, $this->db_name);
        }

        public function __destruct()
        {
            $this->conn->close();
        }

    }
 ?>