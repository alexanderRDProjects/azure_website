<?php
//echo $_SERVER["REQUEST_URI"];
include("Scripts/template.php");
if ($_SERVER["REQUEST_URI"] == "/"){
	include("Scripts/index.php");
} else if ($_SERVER["REQUEST_URI"] == "/Projects"){
	include("Scripts/projects.php");
} else {
	echo "<h1>".ltrim($_SERVER["REQUEST_URI"],"//")."</h1>";
}
include("Scripts/end_template.php");
return true;
?>