<?php
$host     = getenv('DB_HOST') ?: 'ap-little-silence-anhpwz2q-pooler.c-6.us-east-1.aws.neon.tech';
$port     = getenv('DB_PORT') ?: '5432';
$dbname   = getenv('DB_NAME') ?: 'ecommerce_demo';
$username = getenv('DB_USER') ?: 'neondb_owner';
$password = getenv('DB_PASSWORD') ?: 'npg_H7plT5bwrhUM';

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;sslmode=require";
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    die("เชื่อมต่อฐานข้อมูลล้มเหลว: " . $e->getMessage());
}
?>
