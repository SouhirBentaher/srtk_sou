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
