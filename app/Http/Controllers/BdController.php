<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cours;

class BdController extends Controller
{
    public function index()
    {
        $cours = Cours::where('categorie', 'BD')->get();
        return view('bd', compact('cours'));
    }
}
