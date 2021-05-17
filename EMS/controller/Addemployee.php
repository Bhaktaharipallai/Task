<?php
namespace controller;


class Addemployee
{
    public function render()
    {
        
        $this->renderView('add_employee_view');  
    }


    public function renderView($viewFile)
    {
        # DIRECTORY SEPARATORS varies in various platforms
        $ds = DIRECTORY_SEPARATOR;

        # root directory of the project
        $dir = explode('/index.php',$_SERVER['SCRIPT_FILENAME'])[0];

        # replace namespace separator with directory separator (prolly not required)
     

        # get full name of file containing the required class
        $file = "{$dir}{$ds}view{$ds}{$viewFile}.php";
     

        # get file if it is readable
        if (is_readable($file)) {
            require_once $file;
        }
    }
}
?>