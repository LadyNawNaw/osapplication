<?php
define('DB_HOST', getenv('OPENSHIFT_DB_HOST'));
define('DB_USER',getenv('OPENSHIFT_DB_USERNAME'));
define('DB_PASS',getenv('OPENSHIFT_DB_PASSWORD'));
define('DB_NAME',getenv('OPENSHIFT_DB_DBNAME'));
// Create connection
$conn = mysqli_connect(DB_HOST,DB_USER, DB_PASS,DB_NAME);
$sql = "SELECT * FROM os where name like '".$_GET['name']."'";
$result = mysqli_query($conn, $sql);
//if (mysqli_num_rows($result) > 0) {
//$row = mysqli_fetch_assoc($result);
//}
//echo json_encode($row);
//mysqli_close($conn);
$output["OSS"]=array();

while($row = mysqli_fetch_array($result)){
$OS["nom"]=$row["nom"];
$OS["nbusers"]=$row["nbusers"];
 $OS["nbversion"]=$row["nbversion"];
 $OS["nbsmart"]= $row["nbsmart"];
 array_push($output["OSS"],$OS);
}

 echo json_encode($output); 
?>
