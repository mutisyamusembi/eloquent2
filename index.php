<?php 
require 'vendor/autoload.php';
$message = '';
$error = '';
 if (isset($_POST['join'])){ 

 	if ($_POST['password'] != $_POST['password2']){
 		$error = 'Passwords do not match';
 	}
	else {
		 User::insert([
 		'name' => $_POST['name'],
 		'email'=> $_POST['email'],	
 		'password'=>$_POST['password']
 	]);
 	$message = 'User created successfully';
	}

 }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="view.php">Users<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<div class="container jumbotron mt-5">
<form action="index.php" method="post">
<?php if(!empty($error)):?>
  <div class=" alert alert-danger">
    <?= $error ?>
  </div>  
<?php elseif(!empty($message)): ?>
<div class=" alert alert-success">
    <?= $message ?>
  </div>  
<?php endif ?>
<div class="form-row">
  <div class="form-group col-md-6">
    <label for="name">Name</label>
    <input type="input" class="form-control" name="name" required  >
  </div>
  <div class="form-group col-md-6">
    <label for="email">Email address</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" required >
  </div>
 </div>
 <div class="form-row">
  <div class="form-group col-md-6">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" required minlength="8">
  </div>
   <div class="form-group col-md-6">
    <label for="password2">Confirm Password</label>
    <input type="password" class="form-control" name="password2" required minlength="8">
  </div>
  <button type="submit" name="join" class="btn btn-primary">Join</button>
</div>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

