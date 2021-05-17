<?php
namespace controller;
use model\Admin;


class VerifyLogin
{  
    public function render(){
        $adminInfo =$this->fetchFromPost();
        $adminobj=new Admin();
        if ($adminInfo['adminname'] && $adminInfo['password']) {
            $isAdmin = $adminobj->loginAdmin($adminInfo['adminname'], $adminInfo['password']);
            if ($isAdmin) {
                #session_set=>true=>message
                header("Location:".getUrL()."/Dashboard");
            } else {
                header("Location:".getUrL()."/");
            }
        }
            else
            {
                header("Location:".getUrL()."/");
            }
        
        }

    public function fetchFromPost(){
        return [
            'adminname'=>isset($_POST) && isset($_POST['adminname'])?$_POST['adminname']:false,
            'password'=>isset($_POST) && isset($_POST['password'])?$_POST['password']:false
        ];
    }

}
   
?>