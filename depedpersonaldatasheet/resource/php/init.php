<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/depedpersonaldatasheet/resource/php/function.php';

spl_autoload_register(function($class){
  require_once $_SERVER['DOCUMENT_ROOT'].'/depedpersonaldatasheet/resource/class/'.$class.'.php';
});

?>
