<?php
    try {
        $cnx= new PDO('mysql:host=localhost;dbname=dsi22_g2_2019','root','');
        $rep= $cnx->query ('SELECT  * FROM students');
    } catch (expectation $e) {
        echo 'erreur ! '.$e->getmessage().'';
    }
?>