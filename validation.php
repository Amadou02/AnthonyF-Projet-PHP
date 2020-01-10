<?php
$isSubmitted = false;
//variables msg d'alerte champs mal saisis
$lastname = $mail = $phone = $subject = $city = $msg = '';
//regex pour les contrôle du formulaire
$regexName = "/^[A-Za-zéÉ][A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+((-| )[A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+)?$/";
$regexTel = "/^((\+33)|(0))([67])([0-9]{2}){4}$/";
//tableau d'erreurs
$errors = [];
//contrôle du formulaire après envoi
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $isSubmitted = true;
    //contôle du nom
    $lastname = trim(filter_input(INPUT_POST,'your-name',FILTER_SANITIZE_STRING));
    if (empty($lastname)) {
        $errors['lastname'] = 'Veuillez renseigner le nom';
    } elseif (!preg_match($regexName, $lastname)) {
        $errors['lastname'] = 'Votre nom contient des caractères non autorisés !';
    }
    //contôle de l'email
    $mail = trim(htmlspecialchars($_POST['your-email']));
    if (empty($mail)) {
        $errors['mail'] = 'Veuillez renseigner votre email';
    } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $errors['mail'] = 'L\' email  n\'est pas valide!';
    }
     //contôle du téléphone
    $phone = trim(htmlspecialchars($_POST['your-tel-615']));
    if (empty($phone)) {
        $errors['phone'] = 'Veuillez renseigner votre téléphone';
    } elseif (!preg_match($regexTel, $phone)) {
        $errors['phone'] = 'Le format du téléphone n\'est pas valide!';
    }
    //contôle du textarea "écrire un sujet"
    $subject = trim(filter_input(INPUT_POST,'your-subject',FILTER_SANITIZE_STRING));
    if (empty($subject)) {
        $errors['subject'] = 'Veuillez entrer un sujet';
    } 
    //contôle de la ville
    $city =  trim(filter_input(INPUT_POST,'your-ville',FILTER_SANITIZE_STRING));
    if (empty($city)) {
        $errors['city'] = 'Veuillez renseigner votre ville';
    } elseif (!preg_match($regexName, $city)) {
        $errors['city'] = 'Le format de la ville n\'est pas valide!';
    }
    //contôle du textarea "écrire un message"
    $msg = trim(filter_input(INPUT_POST,'your-message',FILTER_SANITIZE_STRING));
    if (empty($msg)) {
        $errors['msg'] = 'Veuillez entrer un message';
    } 
  //fin des contôles après envoi du formulaire
 }
?>