<?php 
echo "<svg viewBox='0 0 500 500'>";
$lines = file('circle.txt');
$rArr=file('rect.txt');

// Loop through our array, show HTML source as HTML source; and line numbers too.
foreach ($lines as $line) {
$c = explode(",", $line);
echo "<circle cx='$c[0]' cy='$c[1]' r='$c[2]' style='$c[3]' />";
}

foreach ($rArr as $rect) {
$r = explode(",", $rect);
echo "<rect x='$r[0]' y='$r[1]' width='$r[2]' height='$r[3]' style='$r[4]' />";
}

echo "</svg>";
?>
