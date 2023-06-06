<?php

require_once "../herkansing periode 3/db.php";

if(isset($_POST['submit'])){
   
    $naam = strip_tags($_POST['voornaam']);
$achternaam = strip_tags($_POST['achternaam']);
$woonplaats = strip_tags($_POST['woonplaats']);
$email = strip_tags($_POST['email']);
$leeftijd = strip_tags($_POST['leeftijd']);


$query = $db->prepare("INSERT INTO studenten (naam, achternaam, woonplaats, email, leeftijd) VALUES (:naam, :achternaam, :woonplaats, :email, :leeftijd)");

$query->bindParam(":naam", $naam);
$query->bindParam(":achternaam", $achternaam);
$query->bindParam(":woonplaats", $woonplaats);
$query->bindParam(":email", $email);
$query->bindParam(":leeftijd", $leeftijd);
$query->execute();


header("Location: ../herkansing periode 3/index.php");





}

?>