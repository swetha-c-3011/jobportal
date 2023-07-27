<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384- EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLA SjC" crossorigin="anonymous">
<style>
	
.navbar
{
overflow: hidden; background-color: #333; position:fixed;
top:0; width:100%;
}




.cs{
background-color:white; margin:10px;
padding: 20px;
border: 2px solid black; border-width:2px; border-style:solid; border-color:black;
box-shadow:2px 2px;
}






</style>
<title>Carreer</title>
</head>
 
<body style="background-color:grey;">

<div class="container-fluid">
<nav class="navbar navbar-expand-lg bg-light" style="position:fixed">
<div class="container-fluid">
<a class="navbar-brand" href="#">Navbar</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs- target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria- expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="#">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Features</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Pricing</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-bs- toggle="dropdown" aria-expanded="false">
Dropdown link
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">Action</a></li>
<li><a class="dropdown-item" href="#">Another action</a></li>
<li><a class="dropdown-item" href="#">Something else here</a></li>
</ul>
</li>
</ul>
</div>
</div>
</nav>
<div >


</div>
</div>
<div class="row">
<?php
$sql="SELECT cname,position,jdesc,ctc,skills from jobs";
$result=mysqli_query($conn,$sql);
 
if($result->num_rows>0){ while($rows=$result->fetch_assoc()){ echo'
<div class="col-md-4 bs">
<div class="jobs cs">
<h3 style="test-align:center">'.$rows['position'].'</h3>
<h4 style="text-align:center">'.$rows['cname'].'</h4>
<p style="color: black;text-align:justify;">'.$rows['jdesc'].'</p>
<p style="color: black;"><b>Skills Required:</b>'.$rows['skills'].'</p>
<p style="color: black;"><b>CTC:</b>'.$rows['ctc'].'</p>
<button type="jobs"class="btn btn-primary" data-bs-toggle="modal" href="#exampleModal" role="button" aria-expanded="false" aria- controls="collapseExample">
APPLY NOW!
</button>
</div>
</div>';
}
}
?><div class="modal fade" id="exampleModal" tabindex="-1" aria- labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h1 class="modal-title fs-5" id="exampleModalLabel">Apply For Job</h1>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria- label="Close"></button>
</div>

<div class="modal-body">
<form method="POST">
<div class="mb-3">
<label for="recipient-name" class="col-form-label">Name</label>
<input type="text" class="form-control" name="name">
</div>
<div class="mb-3">
<label for="message-text" class="col-form-label">Applying For</label>
<input type="text" class="form-control" name="apply">
</div>
<div class="mb-3">
<label for="message-text" class="col-form-label">Qualification</label>
<input type="text" class="form-control" name="qual">

</div>
<div class="mb-3">
<label for="message-text" class="col-form-label">Year passout</label>
 
<input type="text" class="form-control" name="year">
</div>

</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs- dismiss="modal">Close</button>
<button type="submit" name="submit1" class="btn btn- primary">Apply</button>
</form>
</div>
</div>
</div>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384- oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/j p3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384- IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>
</html>
