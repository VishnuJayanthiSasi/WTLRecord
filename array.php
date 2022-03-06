<!DOCTYPE html>
<html>
<body>

<?php
$languages = array("PHP", "Java", "Python");
sort($languages);


$clength = count($languages);
for($x = 0; $x < $clength; $x++)
{
echo $languages[$x];
echo "<br>";
}
?>


</body>
</html>