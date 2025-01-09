<?php

#Caminhos Absolutos

$dirInt="";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$dirInt}");

$bar=(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?"":"/"; //incluir arquivos 

define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$bar}{$dirInt}");

#Banco de Dados

define('HOST','localhost');
define('DB','sistemaCalendario');
define('USER','root');
define('PASS','');


#Incluir arquivos

include (DIRREQ.'/CalendarioEmocoes/lib/composer/vendor/autoload.php');



?>