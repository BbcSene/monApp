<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cours;

class DevwebController extends Controller
{
    // Afficher la page Dev Web avec liste des cours
    public function index()
    {
        $cours = Cours::where('categorie', 'Dev Web')->get();
        return view('devweb', compact('cours'));
    }

    // Enregistrer un nouveau cours
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'fichier' => 'required|file|mimes:pdf,ppt,pptx'
        ]);

        $path = $request->file('fichier')->store('cours', 'public');

        Cours::create([
            'titre' => $request->titre,
            'fichier' => $path,
            'categorie' => 'Dev Web'
        ]);

        return redirect()->route('devweb')->with('success', 'Cours ajouté avec succès !');
    }
}
