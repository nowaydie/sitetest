<?php
class Db {
    public function dbf($sql) { // Подключение к базе 
        $servername = "localhost";
        $user = "root";
        $password = "";
        $database = "aviabilet";
        $db = mysqli_connect($servername, $user, $password, $database);
        $res = mysqli_query($db, $sql);
        return $res;
        $dbc = myslqi_close($db);
    }
}
?>