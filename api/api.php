<?php
 include '../db.php';

 $db = new Database("localhost", "url_short", "root", "root" );
 $db = $db->connect();

$response = array();
if($db){
$sql = "SELECT * FROM urls";
$result = mysqli_query($db, $sql);
if($result){
    $i=0;
    while($row = mysqli_fetch_assoc($result)){
        $response[$i]['id'] = $row ['id'];
        $response[$i]['long_url'] = $row ['long_url'];
        $i++;
    }
    echo json_encode($response, JSON_PRETTY_PRINT);
}
}



?>