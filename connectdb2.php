<?php
/**
 * Created by PhpStorm.
 * User: Ruben Flinterman & Kevin van Bommel
 * Date: 12/18/2018
 * Time: 19:27
 */

/**
 * gar-connect.php
 * maakt een connectie met de database 'garage'
 */

$servername = 'localhost';
$dbname = 'nieuw';
$username = 'root';
$password = '';

try
{
    $conn2 = new PDO("mysql:host=$servername;dbname=$dbname",
        $username, $password);
    $conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connectie gelukt <br />
}
catch (PDOException $e)
{
    echo "Connectie mislukt: " . $e->getMessage();
}
if($conn2){
    echo "<script>";
    echo "console.log('Connectie gelukt (DB2)')";
    echo "</script>";
    echo "Connectie gelukt (DB2)";

}else {
    echo "<script>";
    echo "console.log('Connectie mislukt (DB2)')";
    echo "</script>";
    echo "Connectie mislukt (DB2)";
}
echo "<br>";
echo "<br>";
