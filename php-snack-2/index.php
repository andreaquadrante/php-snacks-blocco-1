<?php

$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];

$name_length = strlen($name);

if (($name_length >= 3) && (strpos($email, '.') !== false) && (strpos($email, '@') !== false) && (is_numeric($age) == true)) {
    echo "Accesso riuscito!";
} else {
    echo "Accesso negato!";
};

?>