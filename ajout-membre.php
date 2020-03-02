<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" />

    <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">

    <title>Inscription</title>
</head>

<body class="bodyAddMember">
    <?php include_once 'header.php'; ?>

    <div class="jumbotron bg-dark text-white">
        <?php
        if (empty($_POST) || !empty($errorMessage)) {
        ?>
            <form action="#" method="POST">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                        
                            <!-- 7 Input email formulaire-->
                            <div class="form-group<?= isset($errorMessage) ? ' has-danger' : '' ?>">
                                <label class="form-control-label" for="mail">Votre adresse mail :</label>
                                <input class="form-control <?= isset($errorMessage['mail']) ? 'is-invalid' : '' ?>" name="mail" id="mail" placeholder="ex : john.doe@gmail.com" type="mail" value="<?= !empty($_POST['mail']) ? $_POST['mail'] : '' ?>" />
                                <?php if (isset($errorMessage['mail'])) {
                                ?><p class="text-danger"><?= $errorMessage['mail'] ?></p>
                                <?php } ?>
                            </div>
                          
                            <!-- 9 Input login formulaire-->
                            <div class="form-group<?= isset($errorMessage) ? ' has-danger' : '' ?>">
                                <label class="form-control-label" for="memberName">Choisissez un pseudo : </label>
                                <input class="form-control <?= isset($errorMessage['memberName']) ? 'is-invalid' : '' ?>" name="memberName" id="memberName" placeholder="ex : CatMan" type="text" value="<?= !empty($_POST['memberName']) ? $_POST['memberName'] : '' ?>" />
                                <?php if (isset($errorMessage['memberName'])) {
                                ?><p class="text-danger"><?= $errorMessage['memberName'] ?></p>
                                <?php } ?>
                            </div>
                            <!-- 10 Input about formulaire-->
                           
                            <div class="form-group<?= isset($errorMessage) ? ' has-danger' : '' ?>">
                                <label class="form-control-label" for="password">Mot de passe : </label>
                                <input class="form-control <?= isset($errorMessage['password']) ? 'is-invalid' : '' ?>" name="password" id="password" placeholder="" type="text" value="<?= !empty($_POST['password']) ? $_POST['password'] : '' ?>" />
                                <?php if (isset($errorMessage['password'])) {
                                ?><p class="text-danger"><?= $errorMessage['password'] ?></p>
                                <?php } ?>
                            </div>
                            <div class="form-group<?= isset($errorMessage) ? ' has-danger' : '' ?>">
                                <label class="form-control-label" for="password">Saisissez à nouveau votre mot de passe : </label>
                                <input class="form-control <?= isset($errorMessage['password']) ? 'is-invalid' : '' ?>" name="password" id="password" placeholder="" type="text" value="<?= !empty($_POST['password']) ? $_POST['password'] : '' ?>" />
                                <?php if (isset($errorMessage['password'])) {
                                ?><p class="text-danger"><?= $errorMessage['password'] ?></p>
                                <?php } ?>
                            </div>
                            <div class="form-group<?= isset($errorMessage) ? ' has-danger' : '' ?>">
                                <label class="form-control-label" for="about">Nous vous invitons à vous présenter :</label>
                                <input class="form-control <?= isset($errorMessage['about']) ? 'is-invalid' : '' ?>" name="about" id="about" placeholder="" type="text" value="<?= !empty($_POST['about']) ? $_POST['about'] : '' ?>" />
                                <?php if (isset($errorMessage['about'])) {
                                ?><p class="text-danger"><?= $errorMessage['about'] ?></p>
                                <?php } ?>
                            </div>

                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-2 offset-sm-5">
                                        <input class="fas fa-plus btn btn-danger" id="submitAddMember" name="submitAddMember" type="submit" />
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </form>
    </div>
<?php
        } else {
?> <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 offset-sm-4">
              
                <p><u>Votre adresse eMail</u> : <?= $email ?></p>
                <p><u>Pseudo</u> : <?= $memberName ?></p>
                <p><u>Votre présentation </u> : <?= $about ?></p>
                <p><u>Votre mot de passe </u> : <?= $password ?></p>

            </div>
        </div>
    </div>
<?php
        }
?>
<div class="container-fluid">
    <div class="row ">
        <div class="col-sm-4 offset-sm-4">
            <a href="index.php"><button class="backButton">Revenir à l'accueil</button></a>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="assets/js/main.js"></script>
</body>

</html>