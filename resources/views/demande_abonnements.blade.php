<!doctype html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/css/animate.min.css">

    <link rel="stylesheet" href="assets/css/boxicons.min.css">

    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">

    <link rel="stylesheet" href="assets/css/flaticon.css">

    <link rel="stylesheet" href="assets/css/meanmenu.min.css">

    <link rel="stylesheet" href="assets/css/nice-select.min.css">

    <link rel="stylesheet" href="assets/css/odometer.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/dark.css">

    <link rel="stylesheet" href="assets/css/responsive.css">

    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="assets/js/jquery.min.js"></script>
    <title>SRTK</title>
</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>


    <header class="header-area">

        <div class="top-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-10">
                        <ul class="header-left-content">
                            <li>
                                <a href="lien_utiles.php">Liens utiles</a>

                            </li>
                            <li>
                                <a href="plan_de_site.php">Plan du site</a>

                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-2">
                        <div class="header-right-content">
                            <ul class="flag-area">
                                <li class="flag-item-top">
                                    <a href="#" class="flag-bar">
                                        <img src="assets/img/flag/france.png" alt="Image">
                                        <span>FR</span>
                                    </a>
                                    <ul class="flag-item-bottom">
                                        <li class="flag-item">
                                            <a href="#" class="flag-link">
                                                <img src="assets/img/flag/uk.png" alt="Image">
                                                EN
                                            </a>
                                        </li>
                                        <li class="flag-item">
                                            <a href="#" class="flag-link">
                                                <img src="assets/img/flag/tunisie.png" alt="Image">
                                                AR
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @section('content-header')
        </header>
        <?php $page_name = 'Demande abonnement'; ?>
        <?php $bg_num = 3; ?>
        @include('banner')



        <!-- --------------------------------------------------------------------------------------------------- -->
        <div class="d-flex justify-content-center">
            <section class="checkout-area ptb-100">
                <div class="">
                    <div class="d-flex justify-content-center">
                        <div class="billing-details">
                            <div class="container flex">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="tab quote-list-tab">
                                            <div class="d-flex justify-content-center">
                                                <div class="tabs_item">
                                                    <div>

                                                        <div class="col-12 mt-0">
                                                            <h3>Fonction</h3>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-sm-6 col-md-3">
                                                                <label class="single-check">
                                                                    Eléve

                                                                </label>
                                                            </div>
                                                            <div class="col-lg-3 col-sm-6 col-md-3">
                                                                <label class="single-check">
                                                                    Etudiant

                                                                </label>
                                                            </div>
                                                            <div class="col-lg-3 col-sm-6 col-md-3">
                                                                <label class="single-check">
                                                                    Stagiaire

                                                                </label>
                                                            </div>

                                                        </div>
                                                        <div class="col-12 mt-30">
                                                            <h3>Ecole type</h3>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-sm-6 col-md-3">
                                                                <label class="single-check">
                                                                    Publique

                                                                </label>
                                                            </div>
                                                            <div class="col-lg-3 col-sm-6 col-md-3">
                                                                <label class="single-check">
                                                                    Privé

                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-30">
                                                            <div class="col-lg-6 col-sm-12 col-md-6">
                                                                <label for="type_etablissement_id" class="label">
                                                                    <h3>Le système éducatif</h3>
                                                                </label>

                                                            </div>
                                                            <div class="col-lg-6 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <label for="etablissement_id" class="label">
                                                                        <h3>Établissement d'enseignement ou
                                                                            universitaire
                                                                        </h3>
                                                                    </label>

                                                                </div>
                                                            </div>

                                                            <div class="table-responsive">
                                                                <table class="table table-bordered">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Section</th>
                                                                            <td>{{ $demande_abonnements->section }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Identifiant de l'étudiant</th>
                                                                            <td>{{ $demande_abonnements->idEtudiant }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Nom</th>
                                                                            <td>{{ $demande_abonnements->nom }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Prénom</th>
                                                                            <td>{{ $demande_abonnements->prenom }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Adresse</th>
                                                                            <td>{{ $demande_abonnements->adresse }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Date de naissance</th>
                                                                            <td>{{ $demande_abonnements->date_naissance }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>CIN</th>
                                                                            <td>{{ $demande_abonnements->cin }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Date d'émission</th>
                                                                            <td>{{ $demande_abonnements->date_emission }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Email</th>
                                                                            <td>{{ $demande_abonnements->email }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Numéro de téléphone</th>
                                                                            <td>{{ $demande_abonnements->numero_tl }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Nom du parent</th>
                                                                            <td>{{ $demande_abonnements->nom_parent }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Prénom du parent</th>
                                                                            <td>{{ $demande_abonnements->prenom_parent }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Code Query</th>
                                                                            {{-- <td>{{ $demande_abonnements->code_query }}</td> --}}
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Status</th>
                                                                            {{-- <td>{{ $demande_abonnements->status }}</td> --}}
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Image</th>
                                                                            {{-- <td>{{ $demande_abonnements->image }}</td> --}}
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                            <a
                                                                href="{{ route('demande_abonnements.generate-pdf', ['id' => $demande_abonnements->id]) }}">Télécharger
                                                                en PDF</a>


                                                            <div class="col-12 mt-30">
                                                                <h3>Durée</h3>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-3 col-sm-6 col-md-3">
                                                                    <label class="single-check">
                                                                        Semestre 1/2

                                                                    </label>
                                                                </div>
                                                                <div class="col-lg-3 col-sm-6 col-md-3">
                                                                    <label class="single-check">
                                                                        Annuel

                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="row mt-30">

                                                                <div class="col-lg-6 col-sm-12 col-md-6">
                                                                    <div class="row">
                                                                        <h3>Lignes</h3>


                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="col-12 mt-30">
                                                                <h3>Valable les dimanches et les jours fériés</h3>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-3 col-sm-6 col-md-3">
                                                                    <label class="single-check">
                                                                        Oui

                                                                    </label>
                                                                </div>
                                                                <div class="col-lg-3 col-sm-6 col-md-3">
                                                                    <label class="single-check">
                                                                        Non

                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="col-12 mt-30">
                                                                <h3>Zone</h3>
                                                            </div>
                                                            {{-- <div class="row">
                                                                <div class="get-quote">

                                                                    <a href="demande_abonnements" class="default-btn">
                                                                        <span>Imprimer</span>
                                                                    </a>
                                                                </div> --}}
                                                        </div>

                                                    </div>



                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <section class="checkout-area ptb-100">
                        <div class="">
                            <div class="d-flex justify-content-center">
                                <div class="billing-details">
                                    <div class="container flex">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="tab quote-list-tab">
                                                    <div class="d-flex justify-content-center">
                                                        <div class="tabs_item">

                                                            <div style="float: left; width: 100%; margin-top: 50px;">

                                                                <style>
                                                                    .fieldset1 {
                                                                        border: 2px solid green;
                                                                        -moz-border-radius: 8px;
                                                                        -webkit-border-radius: 8px;
                                                                        border-radius: 8px;
                                                                        width: 29%;
                                                                        margin-left: 2%;
                                                                        margin-right: 2%;
                                                                        float: left;
                                                                        height: 250px;
                                                                    }

                                                                    legend {
                                                                        width: auto;
                                                                        padding: 20px;
                                                                        border-bottom: none
                                                                    }

                                                                    #bank_paiement,
                                                                    #post_paiement,
                                                                    #bon_cmd {
                                                                        display: none;

                                                                    }
                                                                </style>
                                                                <script>
                                                                    function type_paiement(val) {
                                                                        if (val == 0) {
                                                                            document.getElementById("bank_paiement").style.display = "block";
                                                                            document.getElementById("post_paiement").style.display = "none";
                                                                            document.getElementById("bon_cmd").style.display = "none";

                                                                        } else if (val == 1) {
                                                                            document.getElementById("bank_paiement").style.display = "none";
                                                                            document.getElementById("post_paiement").style.display = "block";
                                                                            document.getElementById("bon_cmd").style.display = "none";
                                                                        } else {
                                                                            document.getElementById("bank_paiement").style.display = "none";
                                                                            document.getElementById("post_paiement").style.display = "none";
                                                                            document.getElementById("bon_cmd").style.display = "block";
                                                                        }
                                                                    }
                                                                </script>
                                                                <fieldset class="fieldset1" align="center">
                                                                    <legend>بطاقة بنكية</legend>
                                                                    <img src="https://www.soretras.com.tn/smart/themes/default/assets/img/icon_visa-01.svg"
                                                                        width="162" height="103"><br><b>بطاقة
                                                                        بنكية</b>
                                                                    <p>
                                                                        <label class="radio_input">
                                                                            <input type="radio" value="0"
                                                                                name="paiement" autocomplete="off"
                                                                                style="object-fit: contain !important; object-position: center!important; left:50%; margin-left: -10px;"
                                                                                onclick="type_paiement(0)">
                                                                            <span class="checkmark"
                                                                                style=" left:50%; margin-left: -10px; margin-top: -10px;"></span>
                                                                        </label>
                                                                    </p>
                                                                </fieldset>
                                                                <fieldset class="fieldset1" align="center">
                                                                    <legend>بطاقة بريدية</legend>
                                                                    <img src="https://www.soretras.com.tn/smart/themes/default/assets/img/icon_poste-01.svg"
                                                                        width="162" height="103"><br><b>بطاقة
                                                                        بريدية</b>
                                                                    <p>
                                                                        <label class="radio_input">
                                                                            <input type="radio" value="1"
                                                                                name="paiement" autocomplete="off"
                                                                                style="object-fit: contain !important; object-position: center!important; left:50%; margin-left: -10px;"
                                                                                onclick="type_paiement(1)">
                                                                            <span class="checkmark"
                                                                                style=" left:50%; margin-left: -10px; margin-top: -10px;"></span>
                                                                        </label>
                                                                    </p>
                                                                </fieldset>
                                                                <fieldset class="fieldset1" align="center">
                                                                    <legend>Bon de commande</legend>
                                                                    <br><b> Bon de commande</b>
                                                                    <p>
                                                                        <label class="radio_input">
                                                                            <input type="radio" value="1"
                                                                                name="paiement" autocomplete="off"
                                                                                style="object-fit: contain !important; object-position: center!important; left:50%; margin-left: -10px;"
                                                                                onclick="type_paiement(2)">
                                                                            <span class="checkmark"
                                                                                style=" left:50%; margin-left: -10px; margin-top: -10px;"></span>
                                                                        </label>
                                                                    </p>
                                                                </fieldset>
                                                                <div id="post_paiement">
                                                                    <form
                                                                        action="https://www.soretras.com.tn/cgi-bin/transact.cgi"
                                                                        method="post"
                                                                        style="margin-top: 50px; float: left; width: 100%">
                                                                        <div align="center">
                                                                            <input type="hidden" name="id_tr"
                                                                                value="11000000000001135501"
                                                                                autocomplete="off">
                                                                            <input type="hidden" name="id_fact"
                                                                                value="1135501" autocomplete="off">
                                                                            <input type="hidden" name="nom_client"
                                                                                value="personne" autocomplete="off">
                                                                            <input type="hidden" name="nom_commercant"
                                                                                value="Commerçant" autocomplete="off">
                                                                            <input type="hidden" name="objet"
                                                                                value="Paiement en ligne de ..."
                                                                                autocomplete="off">
                                                                            <input type="hidden" name="url"
                                                                                value="" autocomplete="off">

                                                                            <p align="center" class="Style1"> </p>
                                                                            <div class="col-md-4 ">
                                                                                <b>
                                                                                    <label class="radio_input">
                                                                                        <b><span
                                                                                                class="Style2">e-DINAR</span></b>
                                                                                        <font color="#0000FF"><b> <img
                                                                                                    src="https://www.soretras.com.tn/images_kit/carte_edinar.gif"
                                                                                                    width="50"
                                                                                                    height="27"
                                                                                                    align="absmiddle"
                                                                                                    style="object-fit: contain !important; object-position: left !important;">

                                                                                                <input type="radio"
                                                                                                    value="oui"
                                                                                                    checked=""
                                                                                                    name="carte_edinar"
                                                                                                    autocomplete="off"
                                                                                                    style="object-fit: contain !important; object-position: left !important;">
                                                                                                <span
                                                                                                    class="checkmark"></span>
                                                                                            </b></font>
                                                                                    </label>
                                                                                    <font color="#0000FF"><b>
                                                                                        </b>
                                                                                    </font>
                                                                                </b>
                                                                            </div><b>
                                                                                <font color="#0000FF">
                                                                                    <div class="col-md-4 ">
                                                                                        <b>
                                                                                            <label class="radio_input">
                                                                                                <b><span
                                                                                                        class="Style2">UNIVERSEL</span></b>
                                                                                                <font color="#0000FF">
                                                                                                    <b><img src="https://www.soretras.com.tn/images_kit/carte_universel.gif"
                                                                                                            width="50"
                                                                                                            height="27"
                                                                                                            align="absmiddle"
                                                                                                            style="object-fit: contain !important; object-position: left !important;">


                                                                                                        <input
                                                                                                            type="radio"
                                                                                                            value="oui"
                                                                                                            checked=""
                                                                                                            name="carte_edinar"
                                                                                                            autocomplete="off">
                                                                                                        <span
                                                                                                            class="checkmark"></span>
                                                                                                    </b>
                                                                                                </font>
                                                                                            </label>
                                                                                            <font color="#0000FF"><b>
                                                                                                </b>
                                                                                            </font>
                                                                                        </b>
                                                                                    </div><b>
                                                                                        <font color="#0000FF">
                                                                                            <div class="col-md-4 ">
                                                                                                <b>
                                                                                                    <label
                                                                                                        class="radio_input">
                                                                                                        <b><span
                                                                                                                class="Style2">DINARPOST
                                                                                                                VISA
                                                                                                                Electron
                                                                                                            </span></b>
                                                                                                        <font
                                                                                                            color="#0000FF">
                                                                                                            <b><img src="https://www.soretras.com.tn/images_kit/visa_electron_small.jpg"
                                                                                                                    width="50"
                                                                                                                    height="34"
                                                                                                                    align="absmiddle"
                                                                                                                    style="object-fit: contain !important; object-position: left !important;">


                                                                                                                <input
                                                                                                                    type="radio"
                                                                                                                    value="non"
                                                                                                                    name="carte_edinar"
                                                                                                                    autocomplete="off">
                                                                                                                <span
                                                                                                                    class="checkmark"></span>
                                                                                                            </b>
                                                                                                        </font>
                                                                                                    </label>
                                                                                                    <font color="#0000FF">
                                                                                                        <b>
                                                                                                        </b>
                                                                                                    </font>
                                                                                                </b>
                                                                                            </div><b>
                                                                                                <font color="#0000FF">
                                                                                                    <p></p>

                                                                                                    <input type="submit"
                                                                                                        name="payer"
                                                                                                        value="دفع"
                                                                                                        class="btn_galerie"
                                                                                                        style="margin-bottom: 25px;"
                                                                                                        autocomplete="off">
                                                                                                </font>
                                                                                            </b>
                                                                                        </font>
                                                                                    </b>
                                                                                </font>
                                                                            </b>
                                                                        </div>
                                                                        <font color="#0000FF"><b>
                                                                                <font color="#0000FF"><b>
                                                                                        <font color="#0000FF">

                                                                                        </font>
                                                                                    </b></font>
                                                                            </b></font>
                                                                    </form>
                                                                </div>
                                                                <font color="#0000FF"><b>
                                                                        <font color="#0000FF"><b>
                                                                                <font color="#0000FF">
                                                                                    <div id="bank_paiement">
                                                                                        <div align="center">
                                                                                            <a class="btn_galerie"
                                                                                                href="https://www.soretras.com.tn/Abonnements_payement/paiement/1135501"
                                                                                                style="margin-bottom: 25px;margin-top: 50px; height: 35px; display: inline-block">دفع</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    {{-- <div class="row">
                                                                                        <div class="get-quote">

                                                                                            <a href="demande_abonnements"
                                                                                                class="default-btn">
                                                                                                <span>Imprimer</span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div> --}}

                                                                                    <div id="bon_cmd">
                                                                                        <div align="center">

                                                                                            <a class="btn_galerie"
                                                                                                style="margin-bottom: 25px;margin-top: 50px; height: 35px; display: inline-block"
                                                                                                {{-- href="https://www.soretras.com.tn/abonnements/print_abonne/1135501" --}}>
                                                                                                طباعة </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </font>
                                                                            </b></font>
                                                                    </b></font>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </section>
        </div>

        <!---------------------------------------------------------------------------------------------------------- -->
        @include('footer')
