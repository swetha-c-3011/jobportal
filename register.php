<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="x-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384- EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLA SjC" crossorigin="anonymous">
<script type="text/javascript"> function Validate() {
var password = document.getElementById("1stPassword").value; var confirmPassword =
document.getElementById("ConfirmPassword").value; if (password != confirmPassword) {
alert("You first Passwords is not similar with 2nd password. Please enter same password in both");
return false;
}
return true;
}
</script>
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
<label for="exampleInputName" class="form-label">Full Name</label>
<input type="text" class="form-control" id="exampleInputName" name="name" >

</div>
<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Email address</label>
<input type="email" id="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">

<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
</div>
<div class="mb-3">
<input type="password" class="form-control" id="1stPassword" class="form- control">password</input>

<br>
</div>
<div class="mb-3">
<input type="password" class="form-control" id="ConfirmPassword" class="form- control">conform password</input>


</div>
<div class="mb-3">
<label for="exampleInputNumber" class="form-label">Phone Number</label>

<input type="tel" id="phone" class="form-control" name="phone" pattern="[0-9]{3}- [0-9]{2}-[0-9]{3}">
</div>

<button type="submit" class="btn btn-primary" name="submit" onclick="return Validate()">SUBMIT</button>
<br>
<p >Already Registered? <a href="login.php"> LOGIN</a></p>
</form>
</div></script>
</body> </html>
