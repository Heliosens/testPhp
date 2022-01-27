<?php

if(isset($_FILES['userFile']) && $_FILES['userFile']['error'] === 0){
    $allowedMimesTypes = ['text/plain'];
    if(in_array($_FILES['userFile']['type'], $allowedMimesTypes)){
        $tmp_name = $_FILES["userFile"]["tmp_name"];
        $name = $_FILES["userFile"]["name"];
        move_uploaded_file($tmp_name, $name);

        foreach ($_FILES["userFile"] as $key => $value) {
            echo "$key => $value <br>";
        }
    }
    else {
        echo "Vous avez fourni un mauvais type de fichier";
    }
}
else {
    echo "Une erreur s'est produite en uplodant votre fichier";
}
