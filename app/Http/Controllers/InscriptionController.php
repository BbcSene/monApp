<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription;
use Illuminate\Support\Facades\Hash;

class InscriptionController extends Controller
{
    // Affiche le formulaire d'inscription
    public function showForm()
    {
        return view('inscription');
    }

    // Enregistre les données du formulaire
    public function inscrire(Request $request)
    {
        // Valider les données
        $request->validate([
            'adresse' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
			'email' => 'required|email|unique:inscriptions,email',
            'password' => 'required|confirmed|min:6',
        ]);

        // Enregistrer dans la base de données
        Inscription::create([
            'adresse' => $request->adresse,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
			'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirection avec message de succès
        return redirect('/inscription')->with('success', 'Inscription réussie !');
    }

    // Affiche la liste des inscrits
    public function liste()
    {
        $inscrits = Inscription::all();
        return view('liste_inscrits', compact('inscrits'));
    }
}
