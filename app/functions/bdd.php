<?php
$dsn = 'mysql:host=localhost:3306;dbname=FinanceManager';
$username = 'spide';
$password = 'nougat';

try {
    $link = new PDO($dsn, $username, $password);

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();  

}



?>