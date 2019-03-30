<?php
include_once "connectdb1.php";

//Get info
$data = $conn->prepare("
SELECT *
FROM accounts
");
$data->execute();
$getdata = $data->fetchAll(PDO::FETCH_ASSOC);

$allaccounts = $getdata;
while ($allaccounts) {
    include_once "connectdb2.php";
    $data2 = $conn2->prepare("
   SELECT *
   FROM roles
   WHERE roles.name = " . $allaccounts['role'] . "
");
    $data2->execute();
}

