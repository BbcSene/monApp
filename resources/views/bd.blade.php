@extends('layouts.app')

@section('content')
    <div style="text-align: center; margin-top: 50px; padding: 60px; background: linear-gradient(135deg, #f8f9fa, #ffffff); border-radius: 20px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
        <h1 style="font-size: 3em; color: #3490dc; font-weight: bold; text-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
            🗄️ Cours de Base de Données
        </h1>

        @php
            use Illuminate\Support\Facades\Storage;
            // Récupère les fichiers du dossier bd avec le disque public
            $files = Storage::disk('public')->files('bd');
        @endphp

        @if(!empty($files) && count($files) > 0)
            <div style="display: flex; flex-direction: column; align-items: center; margin-top: 30px;">
                @foreach($files as $file)
                    <div style="background: linear-gradient(135deg, #edf2f7, #ffffff); padding: 20px; margin: 10px; border-radius: 12px; width: 70%; box-shadow: 0 5px 10px rgba(0,0,0,0.1); text-align: center;">
                        <h2 style="color: #444; font-size: 1.6em;">{{ basename($file) }}</h2>

                        <!-- Bouton Lire -->
                        <a href="{{ asset('storage/bd/' . basename($file)) }}"
                           target="_blank"
                           style="display: inline-block; margin-top: 10px; padding: 12px 24px; background: linear-gradient(90deg, #3490dc, #1d4ed8); color: white; text-decoration: none; border-radius: 8px; font-size: 1.2em; font-weight: bold; box-shadow: 0 3px 8px rgba(52, 144, 220, 0.4);">
                            📖 Lire le cours
                        </a>

                        <!-- Bouton Télécharger -->
                        <a href="{{ asset('storage/bd/' . basename($file)) }}"
                           download
                           style="display: inline-block; margin-top: 10px; padding: 12px 24px; background: linear-gradient(90deg, #ff9800, #f44336); color: white; text-decoration: none; border-radius: 8px; font-size: 1.2em; font-weight: bold; box-shadow: 0 3px 8px rgba(255, 152, 0, 0.4);">
                            ⬇️ Télécharger
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <p style="font-size: 1.5em; color: #777;">⏳ Aucun cours disponible pour le moment.</p>
        @endif
    </div>
@endsection
