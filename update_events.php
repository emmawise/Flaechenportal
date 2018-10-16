<?php  
/**Erhält von events.js das JSON aller events aus der API und speichert es auf dem Server zwischen*/
$string = $_POST['myData'];
$file = "./data/events.json";
file_put_contents($file, $string);
?>
