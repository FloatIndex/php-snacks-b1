<?php
$nameError = "ACCESSO NEGATO: il nome dev'essere lungo almeno 4 caratteri";
$ageError = "ACCESSO NEGATO: età non valida";
$emailError = "ACCESSO NEGATO: email non valida";
$missingDataError = "ACCESSO NEGATO: dati mancanti";
$accessMessage = "ACCESSO RIUSCITO";

if(empty($_GET['name']) || empty($_GET['age']) || empty($_GET['email'])) {
    echo "<p>$missingDataError</p>";
} elseif(strlen($_GET['name']) <= 3) {
    echo "<p>$nameError</p>";
} elseif(!is_numeric($_GET['age'])) {
    echo "<p>$ageError</p>";
} elseif(!strpos($_GET['email'], '@') || !strpos($_GET['email'], '.')) {
    echo "<p>$emailError</p>";
} else {
    echo "<h3>$accessMessage</h3>";
}

/*
per fare in modo che il programma non si fermi al primo if non verificato
e vengano visualizzati tutti gli errori generati, creo un array di errori
*/

/*
$errors = [];
$accessMessage = "ACCESSO RIUSCITO";

if(empty($_GET['name']) || empty($_GET['age']) || empty($_GET['email'])) {
    $errors[] = "Dati mancanti";
} else {
    if(strlen($_GET['name']) <= 3) {
        $errors[] = "Il nome dev'essere lungo almeno 4 caratteri";
    }
    if(!is_numeric($_GET['age'])) {
        $errors[] = "Età non valida";
    }
    if(!strpos($_GET['email'], '@') || !strpos($_GET['email'], '.')) {
        $errors[] = "Email non valida";
    }
}

if(count($errors) > 0) {
    foreach($errors as $error) {
        echo "<p>$error</p>";
    }
} else {
    echo "<h3>$accessMessage</h3>";
}
*/

?>