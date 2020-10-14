<?php
session_start();

require('../config.php');
session_destroy();
session_start();

$_SESSION["message"]["type"] = "success";
$_session["message"]["content"] = "Vous etes deconnecté";

header('Location: '. NAME_FOLDER_PROJECT . '/index.php');
