<?php
$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = "";
$DB_NAME = "bey_and_booking";

$con = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if($con->connect_errno > 0) {
    die('Connection failed [' . $db->connect_error . ']');
}

$tableName  = 'category';
$backupFile = 'backup/category.sql';
$query      = "SELECT * INTO OUTFILE '$backupFile' FROM $tableName";
print_r($query);
exit();
$result = mysqli_query($con,$query);
if($result){
    echo "success";
}
else{
 echo "file...";
}
?>
