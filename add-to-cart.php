<?php

require('config.php');
require('init.php');

if (isset($_GET["id_product"])) {
    $id_product = $_GET["id_product"];
    $stmt = $dbh->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$id_product]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!isset($_SESSION["cart"][$id_product])) {
        $result = array_merge($result, array("quantity" => 1));
        $_SESSION["cart"][$id_product] = $result; // array("id" => $_GET["id_product"]);
    } else {
        $quantity = $_SESSION["cart"][$id_product]["quantity"];
        $quantity++;
        $result = array_merge($result, array("quantity" => $quantity));
        $_SESSION["cart"][$id_product] = $result;
    }
}

$_SESSION["message"]["type"] = "success";
$_SESSION["message"]["content"] = "Produit bien ajouté";

header('Location: '.NAME_FOLDER_PROJECT . '/index.php');
