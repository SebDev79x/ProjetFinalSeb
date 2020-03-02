<?php

$formError = array();
$regexMemberName = '/^([0-9A-Za-zàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð\-\s]{2,50})$/';


if (isset($_POST['submitAddMember'])) {
    $members = new members();
    if (!empty($_POST[''])) {
        if (preg_match($regexMemberName, $_POST['memberName'])) {
            $members->memberName = htmlspecialchars($_POST['memberName']);
        } else {
            $formError['memberName'] = 'Le pseudo ne peut contenir que des lettres majuscules et/ou minuscules, ainsi que des tirets et/ou des espaces.';
        }
    } else {
        $formError['memberName'] = 'Veuillez saisir un pseudo s\'il vous plait';
    }
    if (!empty($_POST['password'])) {
        //voir si on vire le preg_match ou pas.
        if (preg_match($regexMemberName, $_POST['password'])) {
            $members->password = htmlspecialchars($_POST['password']);
        } else {
            $formError['password'] = 'Le prénom ne peut contenir que des lettres majuscules et/ou minuscules, ainsi que des tirets et/ou des espaces.';
        }
    } else {
        $formError['password'] = 'Veuillez saisir votre prénom s\'il vous plait';
    }

 
    if (!empty($_POST['mail'])) {
        if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $patients->mail = htmlspecialchars($_POST['mail']);
        } else {
            $formError['mail'] = 'Veuillez saisir une adresse mail valide s\'il vous plait';
        }
    } else {
        $formError['mail'] = 'Veuillez saisir votre adresse mail s\'il vous plait';
    }
    if (count($formError) == 0) {
        /* patientExists = alias de Count dans la méthode */
        $patientsCount = $patients->checkIfPatientExists();
        var_dump($patientsCount);

        if ($patientsCount->patientExists == 0) {
            if ($patients->addPatient()) {
                echo 'Bravo Seb !';
            } else {
                echo 'Youpi ça ne marche pas!';
            }
            /* $patientIsRegistered = 'Le patient a bien été enregistré.';
              } else {
              $patientIsAlreadyRegistered = 'Le patient existe déjà.';
              } */
        }
    }
}