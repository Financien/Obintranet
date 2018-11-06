<?php

//load Config
require_once "config/config.php";

//Auto Load Core libraries
spl_autoload_register(function($className){
    require_once "libraries/". $className . ".php";

})

?>