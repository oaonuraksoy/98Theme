<?php 
// db_connect.php
function db_connect() {
    global $config;
    try {
        $db = new PDO(
            "mysql:host={$config['db_host']};dbname={$config['db_name']};charset=utf8mb4",
            $config['db_user'],
            $config['db_pass']
        );
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch(PDOException $e) {
        die("Veritabanı bağlantı hatası: " . $e->getMessage());
    }
}


?>