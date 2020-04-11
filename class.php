<?php
include_once('dbconnect.php');
    function escape($string) {
            return htmlentities($string, ENT_QUOTES, 'UTF-8');
    }
 
class User extends DBCon{

    public function __construct(){

        parent::__construct();
    }

    public function verifyi($Pass, $hash){
        $a = "ctytdrlkdr6e";
        $b = $a.md5($Pass).$a;
        $c = password_verify($b, $hash);
        if (hashi($Pass) == $c){
        return $c;
        }
    }

    public function hashi($Pass){
        $a = "ctytdrlkdr6e";
        $b = $a.md5($Pass).$a;
        $c = password_hash($b, PASSWORD_DEFAULT);
        return $c;
    }

     public function UserSlip($table, $id){
        $SQL = "SELECT * FROM ".$table;
        $SQL .= " WHERE id = '"$id"'";
        $array = array();
        $query = mysqli_query($this->conn, $SQL);
        while ($row = mysqli_fetch_assoc($query)) {
            $array[] = $row;
        }
        return $array;

    }

}
?>