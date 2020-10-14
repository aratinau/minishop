<?php
session_start();

require('../config.php');

unset($_SESSION["user"]);

$_SESSION["message"]["type"] = "success";
$_session["message"]["content"] = "Vous etes deconnecté";

header('Location: '. NAME_FOLDER_PROJECT . '/index.php');
