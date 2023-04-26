 <div class="navbar-area">
     <div class="mobile-nav">
         <div class="container">
             <div class="mobile-menu">
                 <div class="logo">
                     <a href="index.html">
                         <img src="assets/img/logo.png" alt="logo" class="">
                     </a>
                 </div>
             </div>
         </div>
     </div>



     <div class="desktop-nav">
         <div class="container">

             <nav class="navbar navbar-expand-md navbar-light">
                 <a class="navbar-brand" href="index">
                     <img src="assets/img/logo.png" alt="logo" width="150px" class="ms-4">
                 </a>
                 <div class="collapse navbar-collapse mean-menu">
                     <ul class="navbar-nav m-auto">
                         <li class="nav-item">
                             <a class="nav-link active" href="{{ url('index') }}">Acceuil</a>
                         </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 SRTK
                                 <i class="bx bx-chevron-down"></i>
                             </a>
                             <ul class="dropdown-menu">
                                 <li class="nav-item">
                                     <a href="presentation.php" class="nav-link">Présentation</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="recrutements.php" class="nav-link">Récrutements</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="qualite.php" class="nav-link">Qualité</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="securite.php" class="nav-link">Sécurité</a>
                                 </li>

                             </ul>

                         </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 Abonnement
                                 <i class="bx bx-chevron-down"></i>

                             </a>
                             <ul class="dropdown-menu">
                                 <li class="nav-item">
                                     <a href="#" class="nav-link">Urbain
                                         <i class="bx bx-chevron-right"></i>
                                     </a>
                                     <ul class="dropdown-menu">
                                         <li class="nav-item">
                                             <a class="nav-link" href="{{ url('urbain_scolaire') }}">Scolaire</a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" href="{{ url('urbain_ordinaire') }}">Ordinaire</a>
                                             </a>
                                         </li>
                                     </ul>
                                 </li>
                                 <li class="nav-item">
                                     <a href="#" class="nav-link">Régional
                                         <i class="bx bx-chevron-right"></i>
                                     </a>
                                     <ul class="dropdown-menu">
                                         <li class="nav-item">
                                             <a class="nav-link" href="{{ url('regional_scolaire') }}">Scolaire</a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" href="{{ url('regional_ordinaire') }}">Ordinaire</a>
                                         </li>
                                     </ul>
                                 </li>

                             </ul>
                         </li>

                         <li class="nav-item">
                             <a href="" class="nav-link">Réservation
                                 <i class="bx bx-chevron-down"></i>
                             </a>
                             <ul class="dropdown-menu">
                                 <li class="nav-item">
                                     <a href="reservation.php" class="nav-link">Réservation ticket
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="horaire.php" class="nav-link">Horaires Régionaux et Interurbain
                                     </a>
                                 </li>
                             </ul>
                         </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link">Communications
                                 <i class="bx bx-chevron-down"></i>
                             </a>
                             <ul class="dropdown-menu">
                                 <li class="nav-item">
                                     <a href="accee_information.php" class="nav-link">Accès à l'information
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="appel_doffre.php" class="nav-link">Appel d'offres
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="communication_media.php" class="nav-link">Communication média
                                     </a>
                                 </li>
                             </ul>
                         </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link">Galerie
                                 <i class="bx bx-chevron-down"></i>
                             </a>
                             <ul class="dropdown-menu">
                                 <li class="nav-item">
                                     <a href="photos.php" class="nav-link">Photos
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="videos.php" class="nav-link">Videos
                                     </a>
                                 </li>
                             </ul>
                         </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link">A propos
                                 <i class="bx bx-chevron-down"></i>
                             </a>
                             <ul class="dropdown-menu">
                                 <li class="nav-item">
                                     <a href="actualite.php" class="nav-link">Actualités
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="evenements.php" class="nav-link">Évenements
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="activite.php" class="nav-link">Activités
                                     </a>
                                 </li>

                             </ul>
                         </li>
                         <li class="nav-item">
                             <a href="contact.php" class="nav-link">
                                 Contact
                             </a>
                         </li>

                     </ul>

                 </div>

                 <div class="sidebar-widget search">
                     <form class="search-form">
                         <input class="form-control" name="search" placeholder="Chercher..." type="text">
                         <button class="search-button" type="submit">
                             <i class="bx bx-search"></i>
                         </button>
                     </form>
                 </div>

             </nav>
         </div>
     </div>
     <div class="others-option-for-responsive">
         <div class="container">
             <div class="dot-menu">
                 <div class="inner">
                     <div class="circle circle-one"></div>
                     <div class="circle circle-two"></div>
                     <div class="circle circle-three"></div>
                 </div>
             </div>
             <div class="container">
                 <div class="option-inner">
                     <div class="others-option justify-content-center d-flex align-items-center">
                         <div class="get-quote">
                             <div class="sidebar-widget search">
                                 <form class="search-form">
                                     <input class="form-control" name="search" placeholder="Chercher..."
                                         type="text">
                                     <button class="search-button" type="submit">
                                         <i class="bx bx-search"></i>
                                     </button>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
