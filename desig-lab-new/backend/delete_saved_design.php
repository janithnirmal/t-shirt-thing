<?php
require_once("app/database_driver.php");
require_once("app/response_sender.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["id"])) {
    $id = $_POST["id"];

    // Delete the design from the database
    $database = new database_driver();
    $query = "DELETE FROM `saved_designs` WHERE `id` = ?";
    $db_response = $database->execute_query($query, "i", [$id]);

   
}
?>
