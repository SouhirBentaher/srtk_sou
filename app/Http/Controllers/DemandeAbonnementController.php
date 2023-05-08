<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemandeAbonnement;
use Barryvdh\DomPDF\Facade\Pdf;
//use Barryvdh\DomPDF\Facade\PDF;


class DemandeAbonnementController extends Controller
{
    // public function demande_abonnements()

    // {
    //     $data = [
    //         'title' => ''
    //     ];
    //     $demande_abonnements =  DemandeAbonnement::all();
    //     return view('demande_abonnements', $data)->with('demande_abonnements', $demande_abonnements);
    // }
    public function create()
    {
        return view('urbain_scolaire');
    }
    public function store(Request $request)
    {
        $data = [
            'title' => 'Abonnements urbain scolaire',
        ];
        $demande_abonnements = new DemandeAbonnement();
        $demande_abonnements->section = $request->section;
        $demande_abonnements->idEtudiant = $request->idEtudiant;
        $demande_abonnements->nom = $request->nom;
        $demande_abonnements->prenom = $request->prenom;
        $demande_abonnements->adresse = $request->adresse;
        $demande_abonnements->date_naissance = $request->date_naissance;
        $demande_abonnements->cin = $request->cin;
        $demande_abonnements->date_emission = $request->date_emission;
        $demande_abonnements->email = $request->email;
        $demande_abonnements->numero_tl = $request->numero_tl;
        $demande_abonnements->nom_parent = $request->nom_parent;
        $demande_abonnements->prenom_parent = $request->prenom_parent;
        $demande_abonnements->save();

        $data['demande_abonnements'] = $demande_abonnements;
        // add demande_abonnements to the data array

        return view('demande_abonnements', $data);
    }
    // $pdf = Pdf::loadView('pdf.invoice', $data);
    // return $pdf->download('invoice.pdf');
    // public function generatePdf($id)
    // {
    //     $demande_abonnements = DemandeAbonnement::findOrFail($id);
    //     $pdf = Pdf::loadView('demande_abonnements', compact('demande_abonnements'))->setPaper('a4')->setOrientation('portrait');
    //     return $pdf->download('demande_abonnements.pdf');
    // }
    public function generatePdf($id)
    {
        $demande_abonnements = DemandeAbonnement::findOrFail($id);
        $data = [
            'title' => 'Abonnements',
            'demande_abonnements' => $demande_abonnements,
        ];
        $pdf = Pdf::loadView('pdf', $data);
        return $pdf->download('demande_abonnements.pdf');
    }

    // public function generatePdf($id)
    // {
    //     $demande_abonnements = DemandeAbonnement::findOrFail($id);
    //     $pdf = new PDF();
    //     $pdf->loadView('demande_abonnements', compact('demande_abonnements'))->setPaper('a4', 'landscape');
    //     return $pdf->download('demande_abonnements.pdf');
    // }
    public function index()

    {
        $data = [
            'title' => 'Abonnement'
        ];
        $abonnements =  DemandeAbonnement::all();
        return view('admin.abonnement.index', $data)->with('abonnements', $abonnements);
    }
    //-----edit------------------------------------------------------////
    // public function edit($id)
    // {
    //     $ligne = Ligne::find($id);
    //     return view('admin.ligne.edit')->with('lignes', $ligne);
    // }
    // //-----update-----------------------------------------------////
    // public function update(Request $request, $id)
    // {
    //     $lignes = Ligne::find($id);
    //     $input = $request->all();
    //     $lignes->update($input);
    //     return redirect('ligne')->with('flash_message', 'Ligne Updated!');
    // }
    //-----destroy----------------------------------------------////
    public function destroy($id)
    {
        DemandeAbonnement::destroy($id);
        return redirect('admin/abonnement')->with('success', ' abonnement deleted !');
    }
}
