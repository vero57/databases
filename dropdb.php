<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "absensi_XIISIJA";

try{
    $konek = new PDO("mysql:host=$server", $user, $password);
    $konek->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DROP DATABASE $db";
    $konek->exec($sql);
    echo "Database absensi_XIISIJA berhasil dihapus";
} catch (PDOException $e){
    echo $sql . "\n" . $e->getMessage();
}
$konek =null;
?>