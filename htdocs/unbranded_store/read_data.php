<?php
require_once ('server.php');
try{
$sql = "select * from unbrandedStore";

$hasil = $dbh -> prepare ($sql);
$hasil -> execute();

$data = $hasil -> fetchAll (PDO::FETCH_OBJ);
$size = $hasil -> rowCount();

if($size>0){
$json ['data'] = $data;
$json ['success'] = true;
$json ['message'] = 'Success Read Data';
} else{
$json ['success'] = false;
$json ['message'] = 'Error Read Data';
}
}

catch (PDPException $e){
$json ['success'] = false;
$json ['message'] = 'Error read Data'.$e-getmessage();	
} echo json_encode($json);

?>