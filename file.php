<?php

if(isset($_FILES['userFile']) && $_FILES['userFile']['error'] === 0){

    $allowedMimesTypes = ['text/plain'];
    if(in_array($_FILES['userFile']['type'], $allowedMimesTypes)){
        $maxSize = 2 * 1024 * 1024; //2Mo
        if((int)$_FILES['userFile']['size'] <= $maxSize){
            $tmp_name = $_FILES["userFile"]["tmp_name"];
            $name = getRandomName($_FILES["userFile"]["name"]);
            move_uploaded_file($tmp_name, $name);
            echo "fichier envoyé<br>";
        }
        else {
            echo "le poids du fichier est trop élevé";
        }
    }
    else {
        echo "Vous avez fourni un mauvais type de fichier";
    }
}
else {
    echo "Une erreur s'est produite en uplodant votre fichier";
}

// set new name with random string
function getRandomName (string $regularName) : string {
    $infos = pathinfo($regularName);
    try {
        $bytes = random_bytes(15);
    }
    catch (Exception $e){
        $bytes = openssl_random_pseudo_bytes(15);
    }
    return bin2hex($bytes) . "." . $infos['extension'];
}
