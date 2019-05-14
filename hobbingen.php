<style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 100%;
        margin: auto;
    }

</style>

<body>
    <h1>Hobbiton - Eine Tour durch das Auenland!</h1>
    <p>Haben Sie "Der Herr der Ringe" oder "Der Hobbit" gesehen? Dann lieben sie eventuell wie wir das Auenland. </p>
    <p>Wussten Sie das man in Neuseeland immer noch das Auenland besuchen kann?</p>
    <p>Man kann sogar eine Tour machen um alles hautnah erleben zu können. Ein absolutes muss für Fans!</p>
    <div class="container-fluid">
        <br>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/hobbiton/ho1.png" alt="ho_start" width="830" height="400">
                    <div class="carousel-caption">
                        <h3>Hobbiton</h3>
                        <p>In Matamata (Neuseeland)</p>
                    </div>
                </div>

                <div class="item">
                    <img src="img/hobbiton/ho3.png" alt="Chania" width="830" height="400">
                    <div class="carousel-caption">
                        <h3>Hobbiton</h3>
                        <p>Original Kulissen aus den "Herr der Ringe" und "Der Hobbit" Filmen</p>
                    </div>
                </div>

                <div class="item">
                    <img src="img/hobbiton/ho2.png" alt="ho_night" width="830" height="400">
                    <div class="carousel-caption">
                        <h3>Hobbiton</h3>
                        <p>Der schöne Anblick der Kulisse bei Nacht</p>
                    </div>
                </div>

                <div class="item">
                    <img src="img/hobbiton/ho4.png" alt="ho_tour" width="830" height="400">
                    <div class="carousel-caption">
                        <h3>Hobbiton</h3>
                        <p>Direkt vor Ort alles ansehen können</p>
                    </div>
                </div>

                <div class="item">
                    <img src="img/hobbiton/ho5.png" alt="ho_inside" width="830" height="400">
                    <div class="carousel-caption">
                        <h3>Hobbiton</h3>
                        <p>Blick inerhalb der Gebäude</p>
                    </div>
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <hr>

    <!-- Google Maps-->

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d570265.4630193709!2d175.48048575079312!3d-37.85321532867324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d6dab6237e84a77%3A0x24ff7cd6a8f521a6!2sHobbiton+Movie+Set!5e0!3m2!1sde!2sde!4v1465992840191" width="830" height="350" frameborder="0" style="border:1" allowfullscreen></iframe>
    <hr>

    <!-- TAAAAAAAABEEEEEEEELLEEEEEEEEEEEEEEEEEEE -->
<?php

    require_once 'connectDB.php';

    $sql = "SELECT * FROM `data` WHERE id='1'";
    $query = mysqli_query($dbcon, $sql);


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
<br>

<!--
    <div class="col-md-12 text-center">
        <button class="btn btn-primary" onclick="href='#!bearbeiten'" id='s_bearbeiten' style="height: 40px; width:200px;"> Ändern </button>
    </div>
-->



    </div>
    <script src="js/ajax.js"></script>
