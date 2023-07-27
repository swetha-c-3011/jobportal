<?php include 'header.php'?>"
<?php include 'config.php'?>
<!-- Page content -->
<div class="content">
<p>
<button type="jobs"class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria- controls="collapseExample">
Post Job
</button>

</p>
<div class="collapse" id="collapseExample">
<div class="card card-body">
<form action="indexd.php" method="POST">
<div class="mb-3">
<label for="companyName" class="form-label" >Company Name</label>
<input type="text" class="form-control" id="exampleInputcompanyName" name="cname">

</div>
<div class="mb-3">
<label for="exampleInputPosition" class="form-label">Position</label>
<input type="text" class="form-control" id="exampleInputPosition" name="position">
</div>
<div class="mb-3">
<label for="Description" class="form-label">Job description</label>
<input type="text" class="form-control" id="exampleInputjdesc" name="jdesc" >
</div>
<div class="mb-3">
<label for="Description" class="form-label">SKILLS</label>
<input type="text" class="form-control" id="exampleInputskills" name="skills">
</div>

<div class="mb-3">
<label for="CTC "class="form-label">CTC</label>
<input type="text" class="form-control" id="exampleInputctc" name="ctc">
</div>
<button type="submit" class="btn btn-primary" name="jobs">Submit</button>
</form>
</div>
</div>
<table class="table">
 
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Company Name</th>
<th scope="col">Position</th>
<th scope="col">CTC</th>
</tr>
</thead>
<?php $sql="SELECT `cname`,`position`,`ctc` FROM `jobs`";
$conn=mysqli_connect($server,$username,$password,$database); if($conn->connect_error){
die("Connection failed:".$conn->connect_error);
}
else{
echo("yes");
}
$result=mysqli_query($conn,$sql);
$i=0;
if($result->num_rows > 0) { while($rows = $result->fetch_assoc()){ echo"
<tbody>
<tr>
<td>".++$i."</td>
<td>".$rows['cname']."</td>
<td>".$rows['position']."</td>
<td>".$rows['ctc']."</td>
</tr>";
}
}
?>
</tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384- oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/j p3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384- IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script</body> </html>
