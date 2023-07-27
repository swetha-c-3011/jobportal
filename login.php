<?php include 'config.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="x-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384- EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLA SjC" crossorigin="anonymous">
<style> form{
background-color:white; margin-top:60em; margin-left:30em; margin-right:10em; padding:30px;
box-shadow: 10px 10px 8px 10px #888888;
}
body{
background-image:url("https://img.freepik.com/free-vector/hand-painted- watercolor-pastel-sky-background_23-2148902771.jpg?w=2000");
}
</style>
<title>Register</title>

</head>
<body>
<div class="container">
<form method="POST">

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label" >Email address</label>
<input type="email" class="form-control" id="exampleInputEmail1" aria- describedby="emailHelp" name="email">
<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
</div>
<div class="mb-3">
 
<label for="exampleInputPassword1" class="form-label">Password</label>
<input type="password" class="form-control" id="exampleInputPassword1" name="password" pattern="(?=.\d)(?=.[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
<br>
<button type="submit" class="btn btn-primary" name="login">login</button>
</div>
</div>

<br>

</form>

</body>
</html>
