<?php
/*Использовать PDO  подключение и кодинг в ООП*/
Class BD {
    private $host = "127.0.0.1";
    private $user = "archer";
    private $pass = "22676523853725";
    private $bd = "users";
    private $charset="utf-8";

     function connect(){

        /*Подключение к БД*/
        $dsn ="mysql:host=$this->host;dbname=$this->bd;$this->charset";

        $opt = array(
            PDO::ATTR_ERRMODE    => PDO::ERRMODE_EXCEPTION,

            PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC
        );
        $pdo = new PDO($dsn,$this->user,$this->pass,$opt);

    }
}





/*

$stmt = $pdo->query('SELECT `login`,`fio` FROM users');
while ($row = $stmt->fetch())
{
    echo $row['login'] . "\n";
    echo $row['fio'] . "\n";
}
*/



