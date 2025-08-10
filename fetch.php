<?php
require 'config.php';

try{
    $stmt = $pdo->query("SELECT name, message, created_at FROM messages ORDER BY created_at DESC");
    $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e){
    echo $e->getMessage();
    $messages = [];
}
