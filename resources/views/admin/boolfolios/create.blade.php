@extends('layouts.app')

@section('content')
    <div class="p-3 mb-4 bg-light">
        <div class="container d-flex justify-content-between align-items-center py-3">
            <h1 class="display-5 fw-bold">Crea il tuo nuovo progetto</h1>
            <a href="{{ route('admin.boolfolios.index') }}" class="btn btn-dark">
                <i class="bi bi-arrow-left">Torna indietro</i>
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
        <form action="{{ route('admin.boolfolios.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Name</label>
                <input type="text" class="form-control" name="nome" id="nome" aria-describedby="nomehelper"
                    placeholder="booolfolio project name" value="{{ old('name') }}" />
                <small id="nomehelper" class="form-text text-muted">scrivi il nome per il tuo progetto</small>
                @error('nome')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="cover_image" class="form-label">Seleziona il file</label>
                <input type="file" class="form-control" name="cover_image" id="cover_image"
                    aria-describedby="coverImageHelper" placeholder="booolfolio project name" />
                <small id="coverImageHelper" class="form-text text-muted">carica un immagine per il tuo progetto</small>
                @error('cover_image')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="Descrizione" class="form-label">Descrizione</label>
                <textarea class="form-control" name="descrizione" id="descrizione" rows="3"{{ old('descrizione') }}></textarea>
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
