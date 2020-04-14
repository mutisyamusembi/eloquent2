<?php 
require 'vendor/autoload.php';
$users = User::all();

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $deletedRow = User::where('id',$id)->delete();
    header('location: view.php');
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Users</title>
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
<?php foreach ($users as $user): ?>
<div class="form-row">
  <div class="form-group col-md-6">
     <h4> 
     <?= $user->name ?> 
     </h4> 
    <div class="mb-2">
    Email: <?= $user->email ?>
    </div>
</div>
<div class="form-group col-md-6" >
  <a style="text-align:left" href="view.php?delete=<?php echo $user->id ; ?>"  class="btn btn-danger btn-xs" >Remove</a>
</div>
    
  </div>

<?php endforeach; ?>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
