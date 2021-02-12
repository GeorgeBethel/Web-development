<?php 

// to print a string in php use echo and print_r
// print_r works for both string and array but echo does not work on string

// var_dump(expression) for getting more information about the variable

// print_r($_POST); 
if(isset($_POST["name"])){

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if ($name == "George Okoroafor" AND $email == "georgebethel5@gmail.com" AND $password == "george_AI") {
	

	echo "<script> alert('Login sucessful!')</script>";
}

else{

echo "<script> alert('Incorrect email or password')</script>";
	
}

}


// echo $name;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothify page | Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="nav"><button style="float: right;">SIGN IN</button></div>

    <div class="main">
        <div class="login_box">
            <center>
            	<form method="post" action="index.php">
                <div class="name" style="font-size: small;">
                    Username:<input type="text" name="name" placeholder="GeorgeBethel" style="font-size: small;">
                </div>
                <br>
                <div class="email" style="font-size: small;">
                    Email:&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<input name="email" type="text" placeholder="georgebethe5@gmail.com" style="font-size: small;">
                </div>
                <br>
                <div class="password" style="font-size: small;">
                    Password:&nbsp;<input name ="password" type="text" placeholder="password" style="font-size: small;">
                </div>
                <br>
                <div class="submit">
                    <input type="submit" value="Sign up">
                </div>

            </form>
            </center>
        </div>
    </div>

    <div class="footer"></div>
    
</body>
</html>