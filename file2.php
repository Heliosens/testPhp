<?php

if(isset($_FILES['userFile'])){
    if($_FILES['userFile']['error'] === 0){
        $allowedMimesTypes = ['image/jpeg', 'image/jpeg', 'image/png'];
        if(in_array($_FILES['userFile']['type'], $allowedMimesTypes)){
            $tmp_name = $_FILES["userFile"]["tmp_name"];
            $name = $_FILES["userFile"]["name"];
            move_uploaded_file($tmp_name, $name); // place le fichier
            echo "fichier envoyé<br>";
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
}
else{
    echo "Vous n'avez pas envoyé de fichier";
}
