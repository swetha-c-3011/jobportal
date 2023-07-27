<!DOCTYPE html>
<html lang="en">
<head>
<title>DashBoard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384- EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLA SjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font- awesome/6.2.0/css/all.min.css" integrity="sha512- xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9Bma mE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>	
.sidebar { margin: 0; margin-top:2px; padding: 0; width: 200px;
background-color: #f1f1f1; position: fixed;
height: 100%; overflow: auto;
}

/* Sidebar links */
.sidebar a { display: block; color: black; padding: 16px;
 
text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
background-color: #04AA6D; color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) { background-color: #555; color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content { margin-top:60px;
margin-left: 200px; padding: 1px 16px; height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */ @media screen and (max-width: 700px) {
.sidebar { width: 100%; height: auto;
position: relative;
}
.sidebar a {float: left;} div.content {margin-left: 0;}
}


/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
.sidebar a {
text-align: center; float: none;
}
}
.navbar{
overflow: hidden;
 
background-color: #333; position:fixed;
top:0; width:100%;
}
</style>
</head>
<body>
<div>
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
<div class="sidebar">
<a class="active" href="indexd.php">Jobs</a>
 
<a class="active" href="#jobs.php">Canditate Applied</a>
<a href="#contact">Contact</a>
<a href="#about">About</a>
</div>
