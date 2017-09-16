<?php
if (empty($_POST['posted'])) {
   header("HTTP/1.0 400 Bad Request", true, 400);
   exit('Please be kind and try filling out the form once more.');
} else {
 
include('dbConfig.php');

$client_name = $_POST['name'];
$client_surnname = $_POST['surname'];
$client_telephone = $_POST['telephone'];
$event_place = $_POST['place'];
$event_time = $_POST['date'];
$insert = "INSERT INTO orders VALUES (Null,'$client_name', '$client_surnname', '$client_telephone', '$event_place', '$event_time')";
if($db->query($insert)===TRUE){
	echo "Record inserted";
	header('Location: orders.php');
}
else {
	echo "Something went wrong, please try again.";
}
$db->close();
}
?>