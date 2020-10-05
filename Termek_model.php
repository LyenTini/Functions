<?php 
require "Adatbazis.php";
class Termek_model extends Adatbazis
{
    public function get_termekek()
    {
        $result = $this->conn->query("SELECT * FROM data");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}

?>