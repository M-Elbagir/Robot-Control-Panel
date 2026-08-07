<?php
$host = "sql313.infinityfree.com";     
$user = "if0_42403737";                
$pass = "baZvay38LAp5LMF";           
$dbname = "if0_42403737_control_panel";  

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "فشل الاتصال: " . $conn->connect_error]));
}
?>
