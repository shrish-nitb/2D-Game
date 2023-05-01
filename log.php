<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['name'];
  $ip = $_REQUEST['ip'];
  $time = $_REQUEST['time'];
  $score = $_REQUEST['score'];
  $stamp = $_REQUEST['stamp'];
	$file = 'people.txt';
	// Open the file to get existing content
	$current = file_get_contents($file);
	// Append a new person to the file
	$current .= "['".$name."', '".$ip."', '".$time."', '".$score."', '".$stamp."']";
	// Write the contents back to the file
	file_put_contents($file, $current);
}
?>