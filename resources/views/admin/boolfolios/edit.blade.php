@extends('layouts.app')

@section('content')
    <div class="p-3 mb-4 bg-light">
        <div class="container d-flex justify-content-between align-items-center py-3">
            <h1 class="display-5 fw-bold">Crea il tuo nuovo progetto</h1>
            <a href="{{ route('admin.boolfolios.index') }}" class="btn btn-dark">
                <i>Torna indietro</i>
            </a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all as $errors)
                    <li>{{ $errors }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">

        <form action="{{ route('admin.boolfolios.update', $boolfolio) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nome" class="form-label">Name</label>
                <input type="text" class="form-control" name="nome" id="nome" aria-describedby="nomehelper"
                    placeholder="booolfolio project name" value="{{ old('name', $boolfolio->nome) }}" />
                <small id="nomehelper" class="form-text text-muted">modifica il nome del tuo progetto</small>
                @error('nome')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 d-flex gap-2">

                @if (Str::startsWith($boolfolio->cover_image, 'http'))
                    <img width="140px" src="{{ $boolfolio->cover_image }}" alt="">
                @else
                    <img width="140px" src="{{ asset('storage/' . $boolfolio->cover_image) }}" alt="">
                @endif

                <div> <label for="cover_image" class="form-label">Cambia il file</label>
                    <input type="file" class="form-control" name="cover_image" id="cover_image"
                        aria-describedby="coverImageHelper" placeholder="booolfolio project name" />
                    <small id="coverImageHelper" class="form-text text-muted">carica un immagine per il tuo progetto</small>
                    @error('cover_image')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <div class="mb-3">
                <label for="Descrizione" class="form-label">Descrizione</label>
                <textarea class="form-control" name="descrizione" id="descrizione" rows="3">{{ old('descrizione', $boolfolio->descrizione) }}</textarea>
                @error('descrizione')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                Submit
            </button>




        </form>


    </div>
@endsection
