<?php
$files = glob($dir . '/*.php');

foreach ($files as $file) {
	require($file);   
}
?>
Hello!
