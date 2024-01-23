<?php
$names=array("abina","sam","taniya","bindu","priya");
echo "<b>Normal array</b><br>";
print_r($names);
echo "<br><b>Ascending array</b><br>";
asort($names);
print_r($names);
echo "<br><b>descending array</b><br>";
arsort($names);
print_r($names);
?>