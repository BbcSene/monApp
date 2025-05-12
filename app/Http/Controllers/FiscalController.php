<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FiscalController extends Controller
{
    // Affichage des cours de fiscalité
    public function index()
    {
        $files = Storage::disk('public')->files('fiscal');
        return view('fiscal', compact('files'));
    }

    // Suppression d'un fichier
    public function destroy($fileName)
    {
        if (Storage::disk('public')->exists("fiscal/{$fileName}")) {
            Storage::disk('public')->delete("fiscal/{$fileName}");
            return back()->with('success', '✅ Cours supprimé avec succès !');
        }

        return back()->with('error', '❌ Fichier introuvable.');
    }
}
