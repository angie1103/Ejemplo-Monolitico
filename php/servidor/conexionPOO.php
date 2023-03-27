<?php
try{
$conn = new PDO('mysql:host=localhost; dbname=matricula', 'root', '');
} catch(PDOException $e){
   echo "Error: ". $e->getMessage();
   die();
}
?>