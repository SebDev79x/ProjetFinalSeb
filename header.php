        <!-- Bloc contenant NavBar et input recherche avec bouton (membres et articles) -->
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <!--  sticky top ???-->
                    <nav class="navbar navbar-expand-lg navbar-light bg-company-red">
                        <a class="navbar-brand" href="index.php">Val'€stim</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href='ajout-membre.php'>Inscription</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Connexion</a>
                                </li>
                                                               <li class="nav-item">
                                    <a class="nav-link" href="ajout-annonce.php">Ajouter une annonce</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="liste-annonces.php">Voir les dernières annonces</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="liste-membres.php">Rechercher un membre</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catégories</a>
                                    <!-- Menu déroulant NavBar -->
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Jeux Video</a>
                                        <a class="dropdown-item" href="#">Jouets</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                            </ul>
                                <button id="myBtn" class="fas fa-plus btn-xs btn-dark">Qui sommes-nous ?</button>
                           
                        </div>
                    </nav>
                </div>
            </div>
        </div>