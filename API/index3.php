<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	George
	<br>
	Javacript
	<br>
	<div id='text'>This is a div that has just been printed</div>

	<br>
	Naira to dollar converter

	<input id ="amount">
	<button onclick="convertUSD()">Calculate</button>

	<div id="final">Nothing yet</div>

	<script type="text/javascript">

		var boy = "Enoch your head";

		var food =['fufu','amala'];

		//alert(food[1]);

		console.log("hello world");

		var text = document.getElementById('text');

		text.innerHTML = "i just change the content of the div"

		console.log(text);

		function convertUSD(){

			var Naira_value = document.getElementById('amount').value;

			if (Naira_value > 0) {

			var USD_equi = Naira_value * 470.00;
			document.getElementById('final').innerHTML = USD_equi; 
			
			console.log(typeof Naira_value);
		}

		else{

			document.getElementById('final').innerHTML = "please enter a number";
		}

		}

	</script>
</body>
</html>

<!-- <?php



?> -->