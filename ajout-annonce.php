<?php $choice = 'announceCategory'; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Création Annonce Val'€stim</title>
</head>

<body class="bodyAddAnnounce">
    <?php include_once 'header.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center mt-2 text-danger">
                <h2>Ajout Annonce</h2>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 mx-auto">
                <form action="ajout-annonce.php" method="POST">
                    <!-- ternaire : si 1ère exp est vraie, alors 2ème exp, sinon 3ème exp-->
                    <!-- Choix entre les 2 catégories-->
                    <div>
                        <label>Catégorie</label>
                        <select name="announceCategory">
                            <option disabled selected>Catégorie de votre article</option>
                            <option value="vg">Jeux Vidéo</option>
                            <option value="toys">Jouets</option>
                        </select>
                    </div>
                    <!-- CONDITION CHOIX CATEGORIE par le MEMBRE-->
                    <?php if ($choice == 'vg') : ?>
                        <!-- FORMULAIRE CREATION annonce JV-->
                        <div class="vgForm">
                            <!-- TYPE article JV-->
                            <div>
                                <label>Type</label>
                                <select name="announceSubcategory">
                                    <option disabled selected>Sous-Catégorie Jeux Vidéo(s)</option>
                                    <option value="system">Console</option>
                                    <option value="game">Jeu</option>
                                    <option value="accessory">Accessoire</option>
                                </select>
                            </div>
                            <!-- ETAT article JV-->
                            <div>
                                <label>Etat</label>
                                <select name="announceCondition">
                                    <option disabled selected>Etat de votre article</option>
                                    <option value="brandNewSealed">Neuf</option>
                                    <option value="pristineCondition">Comme neuf</option>
                                    <option value="excellentCondition">Très bon état</option>
                                    <option value="goodCondition">Bon état</option>
                                    <option value="acceptableCondition">Etat correct</option>
                                    <option value="poorCondition">Etat moyen ou mauvais état</option>
                                </select>
                            </div>
                            <!-- COMPLETUDE article JV-->
                            <div>
                                <label>Boite / Notice</label>
                                <select name="announceCompleteness">
                                    <option disabled selected>Complétude de votre article</option>
                                    <option value="complete">AVEC boîte ET notice</option>
                                    <option value="boxWithoutNotice">AVEC boîte SANS notice</option>
                                    <option value="noticeWithoutBox">SANS boîte AVEC Notice </option>
                                    <option value="loose">SANS boîte NI notice</option>
                                </select>
                            </div>
                            <!-- TITRE annonce JV-->
                            <div class="form-group frame <?= isset($formError) ? ' has-danger' : '' ?>">
                                <label for="title"><span>Titre de votre annonce</span> :</label>
                                <input class="form-control <?= isset($formError['title']) ? 'is-invalid' : '' ?>" type="text" name="title" id="title" placeholder="ex : Super Mario World" value="<?= !empty($_POST['title']) ? $_POST['title'] : '' ?>">
                                <?php if (isset($formError['title'])) : ?>
                                    <p class="text-danger"><?= $formError['title'] ?></p>
                                <?php endif; ?>
                            </div>
                            <!-- DESCRIPTIF annonce JV-->
                            <div>
                                <label for="descriptive"><span>Descriptif</span> :</label>
                                <textarea class="form-control <?= isset($formError['descriptive']) ? 'is-invalid' : '' ?>" type="text" name="descriptive" id="descriptive" placeholder="ex : cartouche dont l'état..." value="<?= !empty($_POST['descriptive']) ? $_POST['descriptive'] : '' ?>">
                                </div>
                                                                    </div>
                                                                    <?php else : ?>
                                                       <!-- FORMULAIRE CREATION annonce TOY-->
                                <div class="toyForm">
                            <!-- TYPE article TOY-->
                                <div>
                                    <label>Type</label>
                                    <select name="announceSubcategory">
                                        <option disabled selected>Sous-Catégorie Jouets</option>
                                        <option value="character">Figurine</option>
                                        <option value="diecast">Voiture Miniature</option>
                                        <option value="other">Autre</option>
                                    </select>
                                </div>
                            <!-- ETAT article TOY-->
                                <div>
                                    <label>Etat</label>
                                    <select name="announceCondition">
                                        <option disabled selected>Etat de votre article</option>
                                        <option value="brandNewSealed">Neuf</option>
                                        <option value="pristineCondition">Comme neuf</option>
                                        <option value="excellentCondition">Très bon état</option>
                                        <option value="goodCondition">Bon état</option>
                                        <option value="acceptableCondition">Etat correct</option>
                                        <option value="poorCondition">Etat moyen ou mauvais état</option>
                                    </select>
                                </div>
                            <!-- COMPLETUDE article TOY-->
                                <div>
                                    <label>Boite / Notice</label>
                                    <select name="announceCompleteness">
                                        <option disabled selected>Complétude de votre article</option>
                                        <option value="complete">AVEC boîte ET notice</option>
                                        <option value="boxWithoutNotice">AVEC boîte SANS notice</option>
                                        <option value="noticeWithoutBox">SANS boîte AVEC Notice </option>
                                        <option value="loose">SANS boîte NI notice</option>
                                    </select>
                                </div>
                            <!-- MARQUE article TOY-->
                                <div>
                                    <label for="brand"><span>Marque</span> :</label>
                                    <input class="form-control <?= isset($formError['brand']) ? 'is-invalid' : '' ?>" type="text" name="brand" id="brand" placeholder="ex : HotWheels" value="<?= !empty($_POST['brand']) ? $_POST['brand'] : '' ?>">
                                </div>
                                                            <!-- MODELE article TOY-->
                                <div>
                                    <label for="model"><span>Modèle</span> :</label>
                                    <input class="form-control <?= isset($formError['model']) ? 'is-invalid' : '' ?>" type="text" name="model" id="model" placeholder="ex : Rodger Dodger" value="<?= !empty($_POST['model']) ? $_POST['model'] : '' ?>">
                                </div>
                            <!-- TITRE annonce TOY-->
                                <div class="form-group frame <?= isset($formError) ? ' has-danger' : '' ?>">
                        <label for="title"><span>Titre</span> :</label>
                        <input class="form-control <?= isset($formError['title']) ? 'is-invalid' : '' ?>" type="text" name="title" id="title" placeholder="ex : Voiture HotWheels" value="<?= !empty($_POST['title']) ? $_POST['title'] : '' ?>">
                        <?php if (isset($formError['title'])) : ?>
                            <p class="text-danger"><?= $formError['title'] ?></p>
                        <?php endif; ?>
                            </div>
                                                        <!-- DESCRIPTIF annonce TOY-->
                                <div>
                                    <label for="descriptive"><span>Descriptif</span> :</label>
                                    <textarea class="form-control <?= isset($formError['descriptive']) ? 'is-invalid' : '' ?>" type="text" name="descriptive" id="descriptive" placeholder="ex : étiquette défraîchie, coins de la boîte usés..." value="<?= !empty($_POST['descriptive']) ? $_POST['descriptive'] : '' ?>">
                        </textarea>
                                </div>
                                </div>
                        <?php endif; ?>
                                                                                <!-- BOUTON SUBMIT-->
                                            <div class="col-lg-4 col-md-6 col-sm-6 mx-auto">
                    <div class="text-center mb-2">
                        <button type="submit" class="btn btn-danger" name="addAnnounce" id="addAnnounce">Valider votre annonce</button>
                    </div>
                    </div>
                </form>
            </div>
            </div>
            </div>
    <?php include_once 'footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
