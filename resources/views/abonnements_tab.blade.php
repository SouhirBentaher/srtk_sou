<div class="container mb-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="tab quote-list-tab">
                <ul class="tabs">
                    <li>
                        <a href="#">
                            Inscription

                        </a>
                    </li>
                    <li>
                        <a href="#">

                            Renouvellement
                        </a>
                    </li>
                    <li>
                        <a href="#">

                            Changement
                        </a>
                    </li>
                    <li>
                        <a href="#">

                            Réception
                        </a>
                    </li>
                    <li>
                        <a href="#">

                            Impression
                        </a>
                    </li>
                </ul>
                <div class="tab_content">
                    <div class="tabs_item">
                        <form>
                            <div class="col-12 mt-0">
                                <h3>Fonction</h3>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-md-3">
                                    <label class="single-check">
                                        Eléve
                                        <input type="radio" checked="checked" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-md-3">
                                    <label class="single-check">
                                        Etudiant
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-md-3">
                                    <label class="single-check">
                                        Stagiaire
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
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
                                        <input type="radio" checked="checked" class=" required" id="natureEtab"
                                            name="natureEtab">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-md-3">
                                    <label class="single-check">
                                        Privé
                                        <input type="radio" name="natureEtab" class=" required" id="natureEtab">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row mt-30">
                                <div class="col-lg-6 col-sm-12 col-md-6">
                                    <label for="type_etablissement_id" class="label">
                                        <h3>Le système éducatif</h3>
                                    </label>
                                    <div class="form-group">
                                        <select name="type_etablissement_id" id="type_etablissement_id"
                                            class="form-control">
                                            <option value="">-- Sélectionner un TYPE_ETAB --</option>
                                            @foreach ($type_etablissement as $type_etablissement)
                                                <option value="{{ $type_etablissement->id }}">
                                                    {{ $type_etablissement->labelle }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>

                                <div class="col-lg-6 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="etablissement_id" class="label">
                                            <h3>Établissement d'enseignement ou universitaire</h3>
                                        </label>
                                        <select name="etablissement_id" id="etablissement_id" class="form-control">
                                            <option value="">-- Sélectionner un Etab --</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="row mt-30">
                                <div class="col-lg-6 col-sm-12 col-md-6">
                                    <h3>Section</h3>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Section">

                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-md-6">
                                    <h3>Identifiant de l'etudiant</h3>
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            placeholder="Identifiant de l'etudiant">

                                    </div>
                                </div>
                            </div>

                            <div class="row mt-30">
                                <div class="col-lg-6 col-sm-12 col-md-6">
                                    <h3>Nom</h3>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nom">

                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-md-6">
                                    <h3>Prénom</h3>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Prénom">

                                    </div>
                                </div>
                            </div>
                            <div class="row mt-30">
                                <div class="col-lg-6 col-sm-12 col-md-6">
                                    <h3>Adresse</h3>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="adresse">

                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-md-6">
                                    <h3>Date de naissance</h3>
                                    <div class="form-group">
                                        <input type="date" class="form-control">

                                    </div>
                                </div>
                            </div>

                            <div class="row mt-30">
                                <div class="col-lg-6 col-sm-12 col-md-6">
                                    <h3>CIN</h3>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="adresse">

                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-md-6">
                                    <h3>Date d'émission</h3>
                                    <div class="form-group">
                                        <input type="date" class="form-control">

                                    </div>
                                </div>
                            </div>

                            <div class="row mt-30">
                                <div class="col-lg-6 col-sm-12 col-md-6">
                                    <h3>Email</h3>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="email">

                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-md-6">
                                    <h3>Numero tel</h3>
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Numero tel">

                                    </div>
                                </div>
                            </div>

                            <div class="row mt-30">
                                <div class="col-lg-6 col-sm-12 col-md-6">
                                    <h3>Nom parent</h3>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nom parent">

                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-md-6">
                                    <h3>Prénom parent</h3>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Prénom parent">

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-30">
                                <h3>Durée</h3>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-md-3">
                                    <label class="single-check">
                                        Semestre 1/2
                                        <input type="radio" checked="checked" name="radio3">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-md-3">
                                    <label class="single-check">
                                        Annuel
                                        <input type="radio" name="radio3">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="row mt-30">

                                <div class="col-lg-6 col-sm-12 col-md-6">
                                    <div class="row">
                                        <h3>Lignes</h3>

                                        <div class="col-lg-6 col-sm-12 col-md-6">
                                            <label class="single-check">
                                                un ligne
                                                <input type="radio" checked="checked" name="radio4">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-6 col-sm-12 col-md-6">
                                            <label class="single-check">
                                                toutes les lignes du réseau
                                                <input type="radio" name="radio4">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-md-6">
                                    <h3>Choisir ligne</h3>
                                    <div class="form-group">
                                        <select>
                                            <option value="1">Ligne 1</option>
                                            <option value="2">Ligne 2</option>
                                            <option value="0">Ligne 3</option>
                                            <option value="3">Ligne 4</option>

                                        </select>
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
                                        <input type="radio" checked="checked" name="radio5">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-md-3">
                                    <label class="single-check">
                                        Non
                                        <input type="radio" name="radio5">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-12 mt-30">
                                <h3>Zone</h3>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-md-3">
                                    <label class="single-check">
                                        1 & 2
                                        <input type="radio" checked="checked" name="radio6">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-md-3">
                                    <label class="single-check">
                                        3 & 4
                                        <input type="radio" name="radio6">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-md-3">
                                    <label class="single-check">
                                        Plus que 4
                                        <input type="radio" name="radio6">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row mt-30">
                                <div class="col-12">
                                    <h3>Choisir le guichet de réception de l'abonnement</h3>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6 col-md-3">
                                        <label class="single-check">
                                            Guichet 1
                                            <input type="radio" checked="checked" name="radio7">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-md-3">
                                        <label class="single-check">
                                            Guichet 2
                                            <input type="radio" name="radio7">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="get-quote">
                                    <a href="#" class="default-btn">
                                        <span>Inscription</span>
                                    </a>
                                </div>
                            </div>


                        </form>
                    </div>
                    <div class="tabs_item">
                        <form>
                            <div class="row">


                                <div class="col-12">

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="CIN">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="get-quote">
                                    <a href="#" class="default-btn">
                                        <span>Renouvler</span>
                                    </a>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="tabs_item">
                        <form>
                            <div class="row">


                                <div class="col-12">

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="CIN">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="get-quote">
                                    <a href="#" class="default-btn">
                                        <span>Modifier</span>
                                    </a>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="tabs_item">
                        <form>
                            <div class="row">


                                <div class="col-12">

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="CIN">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="get-quote">
                                    <a href="#" class="default-btn">
                                        <span>Envoyer</span>
                                    </a>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="tabs_item">
                        <form>
                            <div class="row">


                                <div class="col-12">

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="CIN">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="get-quote">
                                    <a href="#" class="default-btn">
                                        <span>Imprimer</span>
                                    </a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <script>
    function getEtablissements() {
        type_etablissement_id = $("#type_etablissement_id").val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "get",
            url: ENDPOINT + "/urbain_scolaire",
            data: {
                type_etablissement_id: type_etablissement_id
            },
            dataType: 'json',
            cache: false,
            success: function(result) {
                etablissements = result.etablissements;
                options = "<option value=''>-- Sélectionner un Etab --</option>";
                $.each(etablissements, function(etab, value) {
                    options += "<option value=" + value.id + ">" + value.nom_etablissements +
                        "</option>";
                });
                $("#etablissement_id").html(options);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(xhr.responseText);
                console.log(thrownError);
            }
        });
    }

    $(document).ready(function() {
        getEtablissements();
    });

    $("#type_etablissement_id").change(function() {
        getEtablissements();
    });
</script> --}}
<script>
    //1-------------------------------
    $("#type_etablissement").change(function() {
        type_etablissement_id = $("#type_etablissement_id").val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            processing: true,
            serverSide: true,
            type: "get",
            url: ENDPOINT + "/urbain_scolaire",
            data: {
                type_etablissement_id: type_etablissement_id
            },
            dataType: 'json',
            cache: false,
            success: function(result) {
                etablissements = result.etablissements;
                options = "<option>Choisir Pays</option>";
                $.each(etablissements, function(etab, value) {
                    options += "<option value=" + value.id + ">" + value
                        .nom_etablissements +
                        "</option>";
                });
                $("#etablissements_id").html(options);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(xhr.responseText);
                console.log(thrownError);
            }
        })

    })
    //3-------------------------------
    $(document).ready(function() {
        type_etablissement_id = $("#type_etablissement_id").val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            processing: true,
            serverSide: true,
            type: "get",
            url: ENDPOINT + "/urbain_scolaire",
            data: {
                type_etablissement_id: type_etablissement_id
            },
            dataType: 'json',
            cache: false,
            success: function(result) {
                etablissements = result.etablissements;
                options = "<option>Choisir Pays</option>";
                $.each(etablissements, function(etab, value) {
                    options += "<option value=" + value.id + ">" + value
                        .nom_etablissements +
                        "</option>";
                });
                $("#etablissements_id").html(options);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(xhr.responseText);
                console.log(thrownError);
            }
        })

    })
</script>
