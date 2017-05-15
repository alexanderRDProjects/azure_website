<?php
//echo $_SERVER["REQUEST_URI"];
include("template.php");
if ($_SERVER["REQUEST_URI"] == "/"){
	include("index.php");
} else if ($_SERVER["REQUEST_URI"] == "/Projects"){
	include("projects.php");
} else {
	echo "<h1>".ltrim($_SERVER["REQUEST_URI"],"//")."</h1>";
}
include("end_template.php");
return true;
?>