<?php
if (isset($_POST["View"])){
	$f = filter_var($_POST["View"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	if (file_exists("example.".$f.".php")){
		highlight_file("example.".$f.".php"); 
	}
}
