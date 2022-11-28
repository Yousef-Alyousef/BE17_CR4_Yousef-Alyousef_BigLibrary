
<?php
$username = "root";
$password = "";
$database = new 
PDO("mysql:host=localhost;dbname=be17_cr4_yousefalyousef_biglibrary; charset=utf8",$username,$password);

$sql =$database->prepare("SELECT * FROM media");
$sql->execute();

foreach($sql AS $result){
}
//var_dump($result);

?>

