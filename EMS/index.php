<?php

/**
 * Declaration of controller
 */
use controller\Login;

/**
 * global method for getting url
 * @return void
 */

function getUrL()
{
    return sprintf(
        "%s://%s%s",
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
        $_SERVER['SERVER_NAME'],
         explode('/index.php',$_SERVER['SCRIPT_NAME'])[0]
      );
}


function renderRoute() {
    $request = $_SERVER['REQUEST_URI']; //to get current url
    $basePath = explode('/index.php', $_SERVER['SCRIPT_NAME'])[0]|'';
    
    
     if($basePath.'/'===$request)
     {
         echo 'home';
     }
     else if($basePath.'/login'===$request)
     {
        $controller = new \controller\Login();
        $controller->render();
     }
     else if($basePath.'/sign-up'==$request)
     {
         echo 'signup';
     }
     else if($basePath.'/Verify-Login'==$request){
        $controller = new \controller\VerifyLogin();
        $controller->render();
     }
     else if($basePath.'/Dashboard'==$request){
        $controller = new \controller\Dashboard();
        $controller->render();
     }
     else if($basePath.'/Addemployee'==$request){
        $controller = new \controller\Addemployee();
        $controller->render();
     }
     else if($basePath.'/Send_link'==$request){
        $controller = new \controller\Sendlink();
        $controller->render();
     }
     
     else{
         echo'404';
     }
    }


     function autoloader()
    {
        /**
         * Autoload the Classes with Namespace
         */
        spl_autoload_register(function ($className) {

            # DIRECTORY SEPARATORS varies in various platforms
            $ds = DIRECTORY_SEPARATOR;

            # Current Working Directory
            $dir = __DIR__;

            # replace namespace separator with directory separator (prolly not required)
            $className = str_replace('\\', $ds, $className);

            # get full name of file containing the required class
            $file = "{$dir}{$ds}{$className}.php";

            # get file if it is readable
            if (is_readable($file)) {
                require_once $file;
            }
        });
    }

  
  autoloader();  
  renderRoute();

  



 ?>