<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" />
    <!--<link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">-->

    <title>Nous contacter</title>
</head>

<body class="bodyContact">

    <?php include_once 'header.php'; ?>

    <div class="jumbotron bg-dark text-white">
        <?php
        if (empty($_POST) || !empty($errorMessage)) {
        ?>
            <form action="#" method="POST">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <!-- 1 Input lastName formulaire-->
                            <div class="form-group<?= isset($errorMessage) ? ' has-danger' : '' ?>">
                                <label class="form-control-label" for="lastName">Nom :</label>
                                <input class="form-control <?= isset($errorMessage['lastName']) ? 'is-invalid' : '' ?>" name="lastName" id="lastName" placeholder="ex : Doe" type="text" value="<?= !empty($_POST['lastName']) ? $_POST['lastName'] : '' ?>" />
                                <?php if (isset($errorMessage['lastName'])) {
                                ?><p class="text-danger"><?= $errorMessage['lastName'] ?></p>
                                <?php } ?>
                            </div>
                            <!-- 2 Input firstName formulaire-->
                            <div class="form-group<?= isset($errorMessage) ? ' has-danger' : '' ?>">
                                <label class="form-control-label" for="firstName">Prénom :</label>
                                <input class="form-control <?= isset($errorMessage['firstName']) ? 'is-invalid' : '' ?>" name="firstName" id="firstName" placeholder="ex : John" type="text" value="<?= !empty($_POST['firstName']) ? $_POST['firstName'] : '' ?>" />
                                <?php if (isset($errorMessage['firstName'])) {
                                ?><p class="<?= isset($errorMessage['firstName']) ? 'invalid-feedback' : '' ?>"><?= $errorMessage['firstName'] ?></p>
                                <?php } ?>
                            </div>
                            <!-- 3 Input birthDay formulaire-->

                            <!-- 7 Input email formulaire-->
                            <div class="form-group<?= isset($errorMessage) ? ' has-danger' : '' ?>">
                                <label class="form-control-label" for="email">eMail :</label>
                                <input class="form-control <?= isset($errorMessage['email']) ? 'is-invalid' : '' ?>" name="email" id="email" placeholder="ex : john.doe@gmail.com" type="mail" value="<?= !empty($_POST['email']) ? $_POST['email'] : '' ?>" />
                                <?php if (isset($errorMessage['email'])) {
                                ?><p class="text-danger"><?= $errorMessage['email'] ?></p>
                                <?php } ?>
                            </div>
                            <!-- 8 Input phoneNumber formulaire-->
                            <div class="form-group<?= isset($errorMessage) ? ' has-danger' : '' ?>">
                                <label class="form-control-label" for="phoneNumber">Numéro de téléphone : </label>
                                <input class="form-control <?= isset($errorMessage['phoneNumber']) ? 'is-invalid' : '' ?>" name="phoneNumber" id="phoneNumber" placeholder="ex : +33 06 12 34 56 78" type="tel" value="<?= !empty($_POST['phoneNumber']) ? $_POST['phoneNumber'] : '' ?>" />
                                <?php if (isset($errorMessage['phoneNumber'])) {
                                ?><p class="text-danger"><?= $errorMessage['phoneNumber'] ?></p>
                                <?php } ?>
                            </div>
                            <!-- 9 Input login formulaire-->
                            <div class="form-group<?= isset($errorMessage) ? ' has-danger' : '' ?>">
                                <label class="form-control-label" for="login">Pseudo : </label>
                                <input class="form-control <?= isset($errorMessage['login']) ? 'is-invalid' : '' ?>" name="login" id="login" placeholder="ex : CatMan" type="text" value="<?= !empty($_POST['login']) ? $_POST['login'] : '' ?>" />
                                <?php if (isset($errorMessage['login'])) {
                                ?><p class="text-danger"><?= $errorMessage['login'] ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        </div>
 
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <button class="fas fa btn btn-light" id="submitContact" name="submitContact" type="submit">Envoyer</button>
                            </div>
                        </div>
            </form>
    </div>
<?php
        } else {
?> <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 offset-sm-4">
                <p><u>Nom</u> : <?= $lastName ?></p>
                <p><u>Prénom</u> : <?= $firstName ?></p>
                <p><u>Date de naissance</u> : <?= $birthDay ?></p>
                <p><u>Libellé de la voie</u> : <?= $address ?></p>
                <p><u>Code postal</u> : <?= $zipCode ?></p>
                <p><u>Ville</u> : <?= $city ?></p>
                <p><u>Votre adresse eMail</u> : <?= $email ?></p>
                <p><u>Votre numéro de téléphone</u> : <?= $phoneNumber ?></p>
                <p><u>Pseudo</u> : <?= $login ?></p>
                <p><u>Votre présentation </u> : <?= $about ?></p>
                <p><u>Votre mot de passe </u> : <?= $password ?></p>

            </div>
        </div>
    </div>
<?php
        }
?>
<?php include_once 'footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="assets/js/main.js"></script>
</body>

</html>