<h1> Gesamte Auflistung der Drehorte!</h1>
<p>Hier finden Sie alle Drehorte, die wir bei uns hinterlegt haben.</p>
<div class="col-lg-6">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Filmtitel oder Location">
        <span class="input-group-btn">
            <button class="btn btn-default" type="button">Suchen!</button>
        </span>
    </div>
    <hr>
    <!-- /input-group -->
</div>
<!-- /.col-lg-6 -->
<br>
<br>

<hr>

<!-- HIER DANN DIE TABELLE! -->
<?php

    $con = mysqli_connect('localhost', 'root', '');
    $db_select = mysqli_select_db($con, 'movieplaces');

    $sql = "SELECT * FROM `data`";
    $query = mysqli_query($con, $sql);


echo '<table class="tg" class="table-responsive" style="undefined;table-layout: fixed;">';
    echo '<colgroup>';
        echo '<col style="width: 146px">';  
        echo '<col style="width: 136px">';  
        echo '<col style="width: 136px">';  
        echo '<col style="width: 136px">';  
        echo '<col style="width: 136px">'; 
        echo '<col style="width: 136px">';    
    echo '</colgroup>';

    echo '<tr>';
       echo '<th class="tg-0o0u">Location</th>';
       echo '<th class="tg-0o0u">Ort</th>';
       echo '<th class="tg-0o0u">Webseite</th>';
       echo '<th class="tg-0o0u">Email</th>';
       echo '<th class="tg-0o0u">Datum</th>';
       echo '<th class="tg-0o0u">Uhrzeit</th>';
	echo '</tr>';


        while($fetch = mysqli_fetch_assoc($query)) {

    	echo '<tr>';
    	  echo '<td align=center> <a href="#!/hobbingen" id="s_hobbingen">' . $fetch['name'] . '</td>';
        
    	  echo '<td align=center>' . $fetch['ort'] . '</td>';
    	  echo '<td align=center> <a href="' . $fetch['seite'] . '">Webseite</td>';
    	  echo '<td align=center> <a href="mailto:' . $fetch['email'] .'">Kontaktieren</td>';
    	  echo '<td align=center>' . $fetch['datum'] . '</td>';
    	  echo '<td align=center>' . $fetch['uhrzeit'] . '</td>';

    	echo '</tr>';
    }
    echo '</table>';

echo '</table>';
?>
<!-- ENDE DER TABELLE -->
<br>



<div class="col-md-12 text-center">
    <p>Wenn Sie noch andere Kennen und uns diese Mitteilen möchten, dann benutzen Sie bitte den Button.</p>
    <button class="btn btn-primary" onclick="window.location.replace('database.php')" style="height: 40px; width:250px;"> Location Hinzufügen/Bearbeiten! </button>
</div>



</div>

<script src="js/ajax.js"></script>
