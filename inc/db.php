<?php

// class db
// {
//     private $db;
//     private $user;
//     private $host;
//     private $pass;
//     public function __construct($db = 'frutan', $user = 'Farhad', $pass = 'Farhad@1161997')
//     {
//         $this->db = $db;
//         $this->user = $user;
//         $this->pass = $pass;
//         $this->connection();
//     }
//     public function connection()
//     {
//         try {
//             $this->pdo = PDO(
//                 "mysql:host=localhost;dbname={$this->db};",
//                 $this->user,
//                 $this->pass,
//                 [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']
//             );
//         } catch (Exception $e) {
//             die($e->getMessage());
//         }
//     }
// }

function conn()
{
    $user = 'Farhad';
    $db = 'frutan';
    $host = 'localhost';
    $password = 'Farhad@1161997';
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    if ($conn) {
    } else {
        echo 'Not Good';
    }
    return $conn;
}
require_once './inc/functions.php';
?>