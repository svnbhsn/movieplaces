<?php

require_once 'connectDB.php';

/* code for data insert */
if(isset($_POST['save']))
{

     $name = $con->real_escape_string($_POST['name']);
     $country = $con->real_escape_string($_POST['country']);
     $email = $con->real_escape_string($_POST['email']);
     $timefrom = $con->real_escape_string($_POST['timefrom']);
    // $timeto = $con->real_escape_string($_POST['timeto']);
 
  $SQL = $con->query("INSERT INTO locations(name,ort,email,time) VALUES('$name','$country','$email','$timefrom)");
  
  if(!$SQL)
  {
   echo $con->error;
  } 
}
/* code for data insert */



?>