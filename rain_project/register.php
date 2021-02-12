<?php



require "inc/conn.php";
require "inc/functions.php";

if (post('fullname') and post('email') and post('password') and post('role')){

    $fullname = post('fullname');
    $email = post('email');
    $password = post('password');
    $role = post('role');

    $sql = "SELECT id FROM registered_users WHERE email='$email'";
    $query =mysqli_query($conn, $sql);

    if($query->num_rows == 0){

      $sql2 = "insert into registered_users (fullname,email,password,role) values('$fullname','$email','$password','$role')";
      if (mysqli_query($conn, $sql2)) { 
        
        echo "sucessful";

      }

    }



}

?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Signin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="assets/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form method="post">
    <img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Register</h1>
    <p>Not registered? <a href="login.php" style="color: inherit;"> Sign up <a> </p>
      <input type="name" class="form-control" name="fullname" placeholder="Full name" required autofocus>
      <select class="form-select" name="role">
        <option>Select Role</option>
        <option value="Intern">Intern</option>
        <option value="Trainee">Trainee</option>
        <option value="Staff">Staff</option>
      </select>
    <input type="email" class="form-control" name="email" placeholder="Email address" required>
    <input type="password" class="form-control" name="password" placeholder="password" required>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>

  </form>
</main>


    
  </body>
</html>
