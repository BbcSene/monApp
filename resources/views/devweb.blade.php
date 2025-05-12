@extends('layouts.app')

@section('content')
    <div style="text-align: center; margin-top: 50px; padding: 60px; background: linear-gradient(135deg, #f8f9fa, #ffffff); border-radius: 20px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);">

        <h1 style="font-size: 3em; color: #333; font-weight: bold; text-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
            💻 Développement Web - Ajouter un Cours
        </h1>

        {{-- Affichage du message de succès --}}
        @if(session('success'))
            <div style="color: #28a745; background: #dff0d8; padding: 15px; border-radius: 8px; margin-bottom: 20px; font-size: 1.2em;">
                ✅ {{ session('success') }}
            </div>
        @endif

        {{-- Formulaire d'ajout --}}
        <form action="{{ route('devweb.store') }}" method="POST" enctype="multipart/form-data" style="margin-bottom: 40px; background: #f8f8f8; padding: 30px; border-radius: 10px; box-shadow: 0 5px 10px rgba(0,0,0,0.1);">
            @csrf
            <div style="margin-bottom: 15px;">
                <label for="titre" style="font-size: 1.3em; font-weight: bold;">Titre du cours :</label><br>
                <input type="text" name="titre" id="titre" required style="width: 60%; padding: 10px; border: 2px solid #28a745; border-radius: 8px;">
            </div>
            <div style="margin-bottom: 15px;">
                <label for="fichier" style="font-size: 1.3em; font-weight: bold;">Fichier (PDF ou PowerPoint) :</label><br>
                <input type="file" name="fichier" id="fichier" accept=".pdf,.ppt,.pptx" required style="padding: 10px; border-radius: 8px;">
            </div>
            <button type="submit" style="background: linear-gradient(90deg, #28a745, #218838); color: white; padding: 12px 20px; border: none; border-radius: 8px; font-size: 1.2em; cursor: pointer;">
                ➕ Ajouter Cours
            </button>
        </form>

        {{-- Liste des cours Dev Web --}}
        <h2 style="font-size: 2.5em; color: #444; margin-top: 40px;">📜 Liste des cours Dev Web</h2>

        @if($cours->count() > 0)
            <ul style="list-style: none; padding: 0; font-size: 1.3em;">
                @foreach($cours as $c)
                    <li style="background: #e3f2fd; padding: 15px; border-radius: 8px; margin-bottom: 10px;">
                        <strong>{{ $c->titre }}</strong> —
                        <a href="{{ asset('storage/' . $c->fichier) }}" target="_blank" style="color: #007bff; text-decoration: none;">📂 Voir le fichier</a>
                    </li>
                @endforeach
            </ul>
        @else
            <p style="font-size: 1.4em; color: #888;">⏳ Aucun cours ajouté pour l'instant.</p>
        @endif

    </div>
@endsection
