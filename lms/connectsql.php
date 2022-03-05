

<?php
$serverName = "WASEEM-PC\SQLEXPRESS"; //serverName\instanceName
  try {  
    $conn = new PDO( "sqlsrv:server=$serverName;Database =zukulee");   
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );   
  } catch( PDOException $e ) {  
     die( "Connection could not be established - " . $e->getMessage() );   
  } 

  echo "Connection established";

$getUsers = $conn->prepare("SELECT * FROM tbl_test");
$getUsers->execute();
$users = $getUsers->fetchAll();
printer($users);


function printer($arr){
	echo '<pre>';
	print_r($arr);
	}
?>
