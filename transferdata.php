<?php
include_once "connectdb1.php";

$getid = $conn->prepare('select * FROM recipes');
$getid->execute();
$getallids = $getid->fetchAll(PDO::FETCH_ASSOC);


foreach ($getallids as $get){
    $id = $get['id'];
}

    $data = $conn->prepare('SELECT * FROM recipes WHERE id = :id');
if ($data->execute(array(':id' => $id))) {
    return $data->rowCount();
    $rowcount = $data->rowCount();
} else {
    return false;
}

//for ($i=0; $i < $rowcount; $i++){
//
//}

