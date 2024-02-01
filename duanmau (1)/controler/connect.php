<?php
define("DB_HOST","localhost");
define("DB_NAME","nguoidung");
define("DB_USER","root");
define("DB_PWD","");


    try {
        $conn = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NAME,DB_USER,DB_PWD);
        // thiết lập lỗi PDO thành ngoại lệ
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
?>