<?php
namespace model;
class Database
{
    public function getConnection()
    {
        $host='127.0.0.1:3308';
        $user='root';
        $pass='';
        $dbname='ems';
        $dsn="mysql:host=$host;dbname=$dbname";
        $pdo=new \PDO($dsn,$user,$pass);
        return $pdo;
    }
}
?>