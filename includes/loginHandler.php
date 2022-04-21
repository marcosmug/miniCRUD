<?php
session_start();
include "connect.php";
$stmt = $connect->prepare("SELECT * FROM user");
$stmt->execute();
if ($stmt->rowCount() > 0) {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        if ($_POST["username"] == $result["username"]){
            if ($_POST["password"] == $result["password"]){
                $_SESSION["username"] = $result["username"];
                $_SESSION["rol"] = $result["rol"];
            }
        }
    }
}

header("Location: ../index.php");
exit;
                     ?>