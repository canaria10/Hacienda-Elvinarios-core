<?php
try {
$db = new pdo('mysql:host=localhost;dbname=accdb','root','');
echo "Mysql Connected!";
} catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>