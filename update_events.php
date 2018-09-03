		<?php  
$string = $_POST['myData'];

echo ($string);
$file = "./data/events.json";
file_put_contents($file, $string);

	?>
