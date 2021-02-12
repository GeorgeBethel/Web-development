<pre>

<?php

echo $string ='abcdefghijklm';

//substr($string, 4);
echo substr($string, 4);

echo "<br>";

echo substr($string, 4,7);

echo "<br>";

?>

replace string:

<?php

echo str_replace('abc', 'xxx', $string);

echo '<br>';


?>

capitalizing string:

<?php


echo strtoupper($string);


?>

split string to array using str split:

<?php

$array = str_split($string);

print_r($array);

?>

