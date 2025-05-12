@extends('layouts.app')

@section('content')
    <div style="text-align: center; margin-top: 50px;">
        <h1 style="font-size: 2.5em; color: #3490dc;">Cours 📚</h1>

        @php
            // Liste des fichiers dans le répertoire 'public/cours'
            $files = Storage::files('public/cours');
        @endphp

        @if(count($files) > 0)
            <div style="display: flex; flex-direction: column; align-items: center; margin-top: 30px;">
                @foreach($files as $file)
                    <div style="background-color: #f1f5f9; padding: 20px; margin: 10px; border-radius: 10px; width: 70%;">
                        <h2>{{ basename($file) }}</h2>
                        <a href="{{ Storage::url($file) }}" target="_blank"
                           style="display: inline-block; margin-top: 10px; padding: 10px 20px; background-color: #38c172; color: white; text-decoration: none; border-radius: 5px;">
                            📖 Lire / Télécharger
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <p>Aucun cours disponible pour le moment.</p>
        @endif
    </div>
@endsection
