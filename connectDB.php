<?php
     define('_HOST_NAME','localhost');
     define('_DATABASE_NAME','movieplaces');
     define('_DATABASE_USER_NAME','root');
     define('_DATABASE_PASSWORD','');
 
     $dbcon = new MySQLi(_HOST_NAME,_DATABASE_USER_NAME,_DATABASE_PASSWORD,_DATABASE_NAME);
  
     if($dbcon->connect_errno)
     {
       die("Keine Verbidung möglich! : -> ".$dbcon->connect_error);
     }