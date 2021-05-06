<?php
try{
    $db = new PDO("mysql:host=localhost; dbname=proje_planlama","root","");

}catch(PDOException $e){
    print $e -> getMessage();
}
?>