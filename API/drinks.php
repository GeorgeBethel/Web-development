<?php

// $drinks_list = array(

// 	'Fanta' => 150 , 
// 	'Coca-cola'=> 150, 
// 	'Biggy apple'=> 150,
// 	'smoov'=>200,
// 	'wine'=> 1500,
// 	'montain dew'=>150,
// 	'ferroz'=>200
// );

$raw_drinks =file_get_contents("http://192.168.88.20/api.php"); 
$drinks_list = unserialize($raw_drinks);


?>



<!DOCTYPE html>
<html>
<head>
	<title>Drinks</title>
</head>
<body>


	Select Drink
	<br>
	<br>
	<select id="drink">
		<!-- <option value="value">Coca-cola</option> -->
		<!-- <option value="value">Fanta</option>
		<option value="value">Biggy apple</option> -->

		<?php

			foreach ($drinks_list as $name => $amount) {

				echo "<option value='$amount'>$name</option>";
			}
			?>
	</select>

	<br>
	<br>

How many drinks?

<br>
<br>

	<!-- <button type="sumbit" onclick="drinksAvailable()">Avaible drinks</button> -->

	<input type="number" name="" id="number_of_drinks">

	<button type="sumbit" onclick="drinkAmount()">Calculate price</button>
	<br>
	<div id="price_of_drink"> Nothing yet!</div>

	<div id="available drinks"> Nothing yet!</div>

	<script type="text/javascript">
		
		function drinkAmount(){

			var drink_amount = document.getElementById('drink').value;

			var drink = document.getElementById('drink').value;

			var total_price_of_drinks = drink * document.getElementById('number_of_drinks').value;

			document.getElementById('price_of_drink').innerHTML = total_price_of_drinks;


		}

// function drinksAvailable(){

// 	document.getElementById('available drinks').innerHTML = <?php //print_r($drinks_list) ?>;

// }

		

	</script>
</body>
</html>


<?php





?>