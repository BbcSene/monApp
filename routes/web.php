<?php

use App\Http\Controllers\DevwebController;
use App\Http\Controllers\FiscalController;
use App\Http\Controllers\BdController;
use Illuminate\Support\Facades\Route;

// ✅ Accueil
Route::get('/', function () {
    return view('accueil');
})->name('accueil');

// ✅ Développement Web
Route::get('/devweb', [DevwebController::class, 'index'])->name('devweb');
Route::post('/devweb', [DevwebController::class, 'store'])->name('devweb.store');

// ✅ Fiscalité (Gestion des cours)
Route::get('/fiscal', [FiscalController::class, 'index'])->name('fiscal');
Route::post('/upload-cours', [FiscalController::class, 'upload'])->name('cours.upload');
Route::delete('/fiscal/{fileName}', [FiscalController::class, 'destroy'])->name('fiscal.destroy');

// ✅ Base de Données
Route::get('/bd', [BdController::class, 'index'])->name('bd');

// ✅ Cours généraux
Route::get('/cours', function () {
    return view('cours.cours');  // on a mis le fichier dans un sous-dossier "cours"
})->name('cours');
