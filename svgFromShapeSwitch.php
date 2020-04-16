<?php 
//svgFromShapeSwitch.php

$shapeArr=file('shapes.txt',FILE_IGNORE_NEW_LINES);
foreach ($shapeArr as $line) {
$c = explode(",", $line);
switch ($c[0]) {
    case "svgOpen":
        echo "<svg viewBox='$c[1]'>\n";
        break;
    case "circle":
        echo "<circle cx='$c[1]' cy='$c[2]' r='$c[3]' style='$c[4]' />\n";
        break;
    case "rect":
        echo "<rect x='$c[1]' y='$c[2]' width='$c[3]' height='$c[4]' style='$c[5]' />\n";
        break;
    case "svgClose":
        echo "</svg>";
        break;
    default:
        echo "\n";
	}
}

?>
 
