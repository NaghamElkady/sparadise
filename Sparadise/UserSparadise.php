<?php
require_once 'config.php' ; 
$conn = new mysqli($hn,$un,$pw,$db); 

if ($conn ->connect_error) die ($conn->connect_error);

$Fullname = $_POST['Fullname']; 
$email = $_POST['email'];
$pswd = $_POST['pswd'];

echo $instphone . $instemail . $instpswd . $insttype;


$query= "insert into SparadiseCustomers values('Nagham Elkady','nagham@gmail.com','123456')";
$result = $conn -> query ($query); 
if (!$result) 
// die ($conn->error);
echo "no insert";

else echo 'your record has been added successfully'; 

//$result -> close() ; 
$conn -> close () ; 



?>