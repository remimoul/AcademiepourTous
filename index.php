<?php
define('ROOT', str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));
if ($_GET['action']) {
    $params = explode("/", $_GET['action']);


    if($params[0]!=""){
        $controller = $params[0];
        $action = "";

        if (isset($params[1])){$action =$params[1];}

        require_once(ROOT.'controllers/'.$controller.'.php');

        if(function_exists($action)){
            if(isset($params[2])&& isset($params[3])){
                $action($params[2],$params[3]);
            }elseif (isset($params[2])){
                $action($params[2]);
            }else {
                $action();
            }
        }else{
            echo "page par defaut";
        }

    }



}else {

    require_once('views/accueilView.php');


}
