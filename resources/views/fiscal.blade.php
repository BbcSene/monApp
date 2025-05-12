@extends('layouts.app')

@section('content')
    <h1 style="color: #2c3e50; font-size: 3em; text-align: center; font-weight: bold; text-shadow: 2px 2px 8px rgba(0,0,0,0.3); animation: slideDown 0.7s ease-in-out;">
        📖 Cours de Fiscalité
    </h1>

    @php
        use Illuminate\Support\Facades\Storage;
        $files = Storage::disk('public')->files('fiscal');
    @endphp

    @if(!empty($files) && count($files) > 0)
        <div style="display: flex; flex-direction: column; align-items: center; margin-top: 30px;">
            @foreach($files as $file)
                <div class="course-card" style="background: linear-gradient(135deg, #edf2f7, #ffffff); padding: 25px; border-radius: 12px; width: 75%; box-shadow: 0 5px 10px rgba(0,0,0,0.1); transition: transform 0.3s ease-in-out; text-align: center; margin: 30px auto;">
                    <h2 style="color: #2c3e50; font-size: 1.8em; font-weight: bold;">📖 {{ basename($file) }}</h2>

                    <!-- Bouton Lire -->
                    <a href="{{ asset('storage/fiscal/' . basename($file)) }}" target="_blank" class="btn read" style="display: inline-block; margin-top: 12px; padding: 14px 28px; background: linear-gradient(90deg, #3490dc, #1d4ed8); color: white; border-radius: 8px; font-size: 1.4em; font-weight: bold; text-decoration: none; box-shadow: 0 3px 8px rgba(52, 144, 220, 0.4);">
                        📖 Lire le cours
                    </a>

                    <!-- Bouton Télécharger -->
                    <a href="{{ asset('storage/fiscal/' . basename($file)) }}" download class="btn download" style="display: inline-block; margin-top: 12px; padding: 14px 28px; background: linear-gradient(90deg, #ff9800, #f44336); color: white; border-radius: 8px; font-size: 1.4em; font-weight: bold; text-decoration: none; box-shadow: 0 3px 8px rgba(255, 152, 0, 0.4);">
                        ⬇️ Télécharger le cours
                    </a>
                </div>
            @endforeach
        </div>
    @else
        <p style="font-size: 1.5em; color: #777; text-align: center;">⏳ Aucun cours disponible pour le moment.</p>
    @endif
@endsection
