<?php
$user=$_REQUEST['username'];
$pass=$_REQUEST['password'];

$host='localhost';
$us='root';
$pa='';
$db='login';

$con=mysqli_connect($host,$us,$pa,$db);
if ($con->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo("<center>Connected successfully..!");
}

if ($user==='Rifaz Rafaideen' and $pass==='Rifaz123'){
    echo('Logged in successfully');
}
else{
    echo('Incorrect user name or password');
}

$stmt->close();
$con->close();
?>
<img id=skills src="company.png" width=100%>