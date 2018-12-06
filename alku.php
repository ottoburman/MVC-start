<?php
include("models/model1_chat.php");// haetaan model1-malli
include("control_chat.php");// haetaan tähän kontrolleri
$ohjain = new Ohjain();
if (isset($_GET["toiminto"])) {
    $toiminto = $_GET["toiminto"];
} else {
    $toiminto = "lista";
}
$ohjain->$toiminto();
?>
