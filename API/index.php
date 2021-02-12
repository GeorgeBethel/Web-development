<?php


$string = "this is a string";

echo $string;

echo '<br>';

$array = array('sola','tunde',343,);

echo "<pre>";

print_r($array);

$multi_dim = array(

array('boy1'=>'sola',
	'boy2'=>'george', 
	'dope', 
	45=>'6777'
),
	$multi_dim3 = array('boy3' => 'John' , 7878)
);

print_r($multi_dim);

echo $multi_dim[1][0];

echo "<br>";

foreach ($multi_dim[0] as $a => $b) {
	echo $b.' is '.$a.'<br>';
}

// rubrics cube



?>