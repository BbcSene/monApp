@extends('layouts.app')

@section('content')
    <div id="app-container" style="text-align: center; margin-top: 50px; background: linear-gradient(135deg, #f8f8f8, #ffffff); padding: 100px; border-radius: 20px; box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15); color: #333;">

        <h1 style="font-size: 4em; font-weight: bold; text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2);">
            🎓 Bienvenue sur Votre Plateforme Académique
        </h1>
        <p style="font-size: 2em; margin-top: 30px; font-style: italic;">
            Accédez à vos cours de L3 dans une interface lumineuse et moderne.
        </p>

        <!-- Barre de recherche -->
        <div style="margin-top: 40px;">
            <input type="text" placeholder="Rechercher un cours..." style="padding: 15px; width: 50%; border-radius: 10px; border: 2px solid #00c6ff; font-size: 1.2em;">
            <button style="padding: 15px 30px; background: #6a11cb; color: white; border: none; border-radius: 10px; font-size: 1.2em; cursor: pointer;">
                🔍 Rechercher
            </button>
        </div>

        <!-- Liste des cours -->
        <div style="display: flex; justify-content: center; margin-top: 60px; gap: 50px;">
            <a href="{{ route('devweb') }}" style="padding: 30px 60px; background: linear-gradient(90deg, #a0d8ef, #80c7ff); color: white; text-decoration: none; border-radius: 20px; font-size: 1.6em;">
                🚀 Développement Web
            </a>
            <a href="{{ route('fiscal') }}" style="padding: 30px 60px; background: linear-gradient(90deg, #ffe082, #ffcc80); color: black; text-decoration: none; border-radius: 20px; font-size: 1.6em;">
                💰 Fiscalité
            </a>
            <a href="{{ route('bd') }}" style="padding: 30px 60px; background: linear-gradient(90deg, #ce93d8, #ba68c8); color: white; text-decoration: none; border-radius: 20px; font-size: 1.6em;">
                📂 Base de Données
            </a>
        </div>
    </div>
@endsection
