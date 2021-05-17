<?php
namespace model;
use model\Database;

class Admin
{
    private $pdo;
    public function __construct()
    {
        $this->pdo=new Database();
    }
    public function loginAdmin($adminname,$password)
    {
        $pdo=$this->pdo->getConnection();
        $stmt=$pdo->prepare('SELECT * FROM admin WHERE name=\''.$adminname.'\' and password=\''.$password.'\'');
        $stmt->execute(); 
        return count($stmt->fetchAll())>0;
    }
}