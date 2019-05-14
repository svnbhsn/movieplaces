<!DOCTYPE html>

<html>

<head>

    <title>Mit mySQL verbinden</title>
    <meta charset="utf-8">

</head>

<body>
    <h1>Mit der Datenbank verbinden</h1>

    <?php
    mysql_connect('127.0.0.1', 'root', '') or die(mysql_error());
    mysql_select_db('movieplaces') or die(mysql_error());

    $sql = "SELECT * FROM `locations`";
    $query = mysql_query($sql) or die(mysql_error());

    echo '<table border=2>';

    echo '<tr>';
       echo '<th>Name</th>';
       echo '<th>Ort</th>';
       echo '<th>Seite</th>';
       echo '<th>Email</th>';
       echo '<th>Datum</th>';
       echo '<th>Uhrzeit</th>';
	echo '</tr>';
    while($fetch = mysql_fetch_assoc($query)) {

    	echo '<tr>';
    	  echo '<td>' . $fetch['name'] . '</td>';
    	  echo '<td>' . $fetch['ort'] . '</td>';
    	  echo '<td>' . $fetch['seite'] . '</td>';
    	  echo '<td>' . $fetch['email'] . '</td>';
    	  echo '<td>' . $fetch['datum'] . '</td>';
    	  echo '<td>' . $fetch['uhrzeit'] . '</td>';

    	echo '</tr>';
    }
    echo '</table>';

    ?>

</body>

</html>
