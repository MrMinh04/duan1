<?php

/**
 * Kết nối đến CSDL để làm việc
 */
//Thông tin của CSDL
$host = "localhost";
$dbname = "du_an_1";
$username = "root";
$password = "";

//Kết nối
try {
    $conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Lỗi kết nối CSDL: -> " . $e->getMessage();
}