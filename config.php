<?php
$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn=mysqli_connect($server,$username,$password,$database); if($conn->connect_error){
die("Connection failed:".$conn->connect_error);
}
else{
echo("yes");
}
echo ""; if(isset($_POST['submit2'])){
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['phone_no'];
$password=$_POST['password'];
$sql="INSERT INTO user( `Name`, `email`, `password`,`phone_no`) VALUES ('$name','$email','$password','$number')";
if(mysqli_query($conn,$sql)){
echo "Records inserted successfully.";
}else{
echo "ERROR: Could not able to execute $sql.".mysqli_error($conn);
}
}
session_start(); if(isset($_POST['login'])){
$email=$_POST['email'];
$password=$_POST['password'];
$query="SELECT * FROM user WHERE `email`='$email'AND
`password`='$password'";
$result=mysqli_query($conn,$query); if(mysqli_num_rows($result)===1){
 
header("Location:indexd.php");
}


// $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
// if(mysqli_fetch_row($result)>0){
//	header("Location:indexd.php");

// } else{
echo 'emailid or password incorrect';
}
}
else{
echo "error";
}
if(isset($_POST['jobs'])){
$cname=$_POST['cname'];
$pos=$_POST['position'];
$jdesc=$_POST['jdesc'];
$skills=$_POST['skills'];
$CTC=$_POST['ctc'];
$sql="INSERT INTO jobs (`cname`, `position`, `jdesc`,`skills`,`ctc`) VALUES ('$cname','$pos','$jdesc','$skills','$CTC')";
if(mysqli_query($conn,$sql)){ echo "New Job Posted";
}else{
echo "ERROR: Failed to post the job $sql, ". mysqli_error($conn);
}
}
if(isset($_POST['submit1'])){
$name=$_POST['name'];
$qual=$_POST['qual'];
$apply=$_POST['apply'];
$year=$_POST['year'];
$sql="INSERT INTO `canditates`( `name`, `apply`, `qual`, `year`) VALUES ('$name','$apply','$qual','$year')";
mysqli_query($conn,$sql);
}
// mysqli_close($conn);
?>
