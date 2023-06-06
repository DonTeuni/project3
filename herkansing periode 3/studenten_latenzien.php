<?php


require_once "../herkansing periode 3/db.php";


$query = $db->prepare("SELECT * FROM studenten");


$query->execute();


$result = $query->fetchAll(PDO::FETCH_ASSOC);


foreach($result as $data){
    echo $data['naam'] . "<br>";
    echo $data['achternaam'] . "<br>";
    echo $data['woonplaats'] . "<br>";
    echo $data['email'] . "<br>";
    echo $data['leeftijd'] . "<br>";
    echo "<br>";
}