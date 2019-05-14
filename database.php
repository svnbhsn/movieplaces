<?php

include_once("connectDB.php");
 /* code for connection and database selection */


/* code for data insert */
if(isset($_POST['save']))
{

     $name = $dbcon->real_escape_string($_POST['name']);
     $ort = $dbcon->real_escape_string($_POST['ort']);
     $seite = $dbcon->real_escape_string($_POST['seite']);
     $email = $dbcon->real_escape_string($_POST['email']);
     $datum = $dbcon->real_escape_string($_POST['datum']);
     $uhrzeit = $dbcon->real_escape_string($_POST['uhrzeit']);
 
  $SQL = $dbcon->prepare("INSERT INTO data(name,ort,seite,email,datum,uhrzeit) VALUES(?,?,?,?,?,?)");
  $SQL->bind_param("ssssss",$name,$ort,$seite,$email,$datum,$uhrzeit);
  $SQL->execute();
  
  if(!$SQL)
  {
   echo $MySQLiconn->error;
  } 
}
/* code for data insert */


/* code for data delete */
if(isset($_GET['del']))
{
 $SQL = $dbcon->prepare("DELETE FROM data WHERE id=".$_GET['del']);
 $SQL->bind_param("i",$_GET['del']);
 $SQL->execute();
 header("Location: drehorte2.php");
}
/* code for data delete */



/* code for data update */
if(isset($_GET['edit']))
{
 $SQL = $dbcon->query("SELECT * FROM data WHERE id=".$_GET['edit']);
 $getROW = $SQL->fetch_array();
}

if(isset($_POST['update']))
{
 $SQL = $dbcon->prepare("UPDATE data SET name=?, ort=?,seite=?,email=?,datum=?,uhrzeit=? WHERE id=?");
 $SQL->bind_param("ssssssi",$_POST['name'],$_POST['ort'],$_POST['seite'],$_POST['email'],$_POST['datum'],$_POST['uhrzeit'],$_GET['edit']);
 $SQL->execute();
 header("Location: drehorte2.php");
}
/* code for data update */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+SC" rel="stylesheet">

    <title>Movie Places</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- Custom styles for this template -->
    <link href="css/style2.css" rel="stylesheet">
    <link href="css/datenbank.css" rel="stylesheet">
    




</head>
    <body>
    <header>
        <div class="logo">
            <a href=""><img class="img-responsive" src="img/logo.png" alt="Movie Places" /></a>
        </div>
    </header>

    <!-- Navbar -->
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#!/home" id="m_home">Startseite</a></li>
                    <li><a href="#!/locations" id="m_locations">Drehorte</a></li>
                    <li><a href="#!/about" id="m_about">Über Uns</a></li>
                    <li><a href="#!/contact" id="m_kontakt">Kontakt</a></li>
                    <li><a href="drehorte2.php" id="m_database">Datenbank</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>



    <!-- Begin page content -->
    <section>
    <div class="container-fluid" id="main">
    
<h1 align="center";>Hier lässt sich die Datenbank bearbeiten!</h1> 
<fieldset>
<div id="form" align="center";>
<form method="post">
<table width="100%" border="1" cellpadding="15">
<tr>
<td><input type="text" name="name" placeholder="Name" id="nameInput" value="<?php if(isset($_GET['edit'])) echo $getROW['name'];  ?>" /></td>
</tr>
<tr>
<td><input type="text" name="ort" placeholder="Ort" id="countryInput" value="<?php if(isset($_GET['edit'])) echo $getROW['ort'];  ?>" /></td>
</tr>
<tr>
<td><input type="text" name="seite" placeholder="Webseite" value="<?php if(isset($_GET['edit'])) echo $getROW['seite'];  ?>" /></td>
</tr>
<tr>
<td><input type="text" name="email" placeholder="Email" value="<?php if(isset($_GET['edit'])) echo $getROW['email'];  ?>" /></td>
</tr>
<tr>
<td><input type="text" name="datum" placeholder="Datum" value="<?php if(isset($_GET['edit'])) echo $getROW['datum'];  ?>" /></td>
</tr>
<tr>
<td><input type="text" name="uhrzeit" placeholder="Uhrzeit" value="<?php if(isset($_GET['edit'])) echo $getROW['uhrzeit'];  ?>" /></td>
</tr>
<tr>
<td>
<?php
if(isset($_GET['edit']))
{
 ?>
 <button type="submit" name="update">Aktualisieren</button>
 <?php
}
else
{
 ?>
 <button type="submit" name="save">Speichern</button>
 <?php
}
?>
</td>
</tr>
</table>
</form>
</fieldset>

<br /><br />


<?php
$res = $dbcon->query("SELECT * FROM data");
    
echo '<table class="tg" class="table-responsive" style="undefined;table-layout: fixed; margin-left:-3%;">';
    echo '<colgroup>';
        echo '<col style="width: 136px">';  
        echo '<col style="width: 126px">';  
        echo '<col style="width: 126px">';  
        echo '<col style="width: 126px">';  
        echo '<col style="width: 126px">'; 
        echo '<col style="width: 126px">';
        echo '<col style="width: 126px">'; 
        echo '<col style="width: 126px">'; 
    echo '</colgroup>';

    echo '<tr>';
       echo '<th class="tg-0o0u">Location</th>';
       echo '<th class="tg-0o0u">Ort</th>';
       echo '<th class="tg-0o0u">Webseite</th>';
       echo '<th class="tg-0o0u">Email</th>';
       echo '<th class="tg-0o0u">Datum</th>';
       echo '<th class="tg-0o0u">Uhrzeit</th>';
       echo '<th class="tg-0o0u">Bearbeiten</th>';
       echo '<th class="tg-0o0u">Löschen</th>';
	echo '</tr>';
    

while($row=$res->fetch_array())
{
 ?>
    <tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['ort']; ?></td>
    <td><?php echo $row['seite']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['datum']; ?></td>
    <td><?php echo $row['uhrzeit']; ?></td>
    <td><a href="?edit=<?php echo $row['id']; ?>" onclick="return confirm('Möchten Sie den Eintrag wirklich bearbeiten?'); " >Bearbeiten</a></td>
    <td><a href="?del=<?php echo $row['id']; ?>" onclick="return confirm('Möchten Sie den Eintrag wirklich löschen?'); " >Löschen</a></td>
    </tr>
    <?php
}

?>
</table>
</div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div id="fo_left">
            ©2016 Movie Places
        </div>

        <div id="fo_right">
            <li>
                <ul><a href="#!/about" id="f_about">Über Uns</a></ul>
                <ul>|</ul>
                <ul><a href="#!/contact" id="f_kontakt">Kontakt</a></ul>
                <ul>|</ul>
                <ul><a href="#!/impressum" id="f_impressum">Impressum</a></ul>
            </li>
        </div>
    </footer>
 
    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="js/jquery-ui-1.9.2.custom.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ajax.js"></script>
    <!--
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script language="javascript" type="text/javascript" src="js/gMaps.js"></script>
    -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>
<script src="js/autofill.js"></script>
