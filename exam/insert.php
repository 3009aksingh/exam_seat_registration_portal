<?php
include 'conn.php';

if(isset($_POST['done'])){
  
  $username = $_POST['username'];
  $password = $_POST['password'];
  $q = "INSERT INTO `exam`(`username`, `password`) VALUES ('$username','$password')";

  $query = mysqli_query($con,$q);
}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>
    Admin Login
  </title>
    <link rel="stylesheet" type="text/css" href="./css/style2.css">
</head>
<body>
   <header>
   	 <div class="container">
   	 	<div id="brand">
   	 		<h1><span class="highlight">PHCET</span> Rasayani</h1>
   	 	</div>
   	 </div>
   </header>

  <section>
    <div class="main-section">
      <h2>
        Login
      </h2>
      <hr />
      <h3>
        Welcome to Admin Portal
      </h3>
      <form method="_POST">
      <p>
        <input type="text" placeholder="Username" name = "username" required>
      </p>
      <p>
        <input type="password" placeholder="Password" name = "password" required>
      </p>
      <p>
        <button name = "done">
          Log In
        </button>

      </p>
    </form>
    </div>
  </section>

  <footer>
    <p>Student community, Copyright &copy; 2020</p>
   </footer>
</body>
</html>