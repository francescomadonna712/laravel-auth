@extends('layouts.admin')

@section('content')
    <div class="container d-flex py-5 justify-content-center">
        <div class="card" style="width: 65rem;">
            <img src="{{ asset('storage/' . $boolfolio->cover_image) }}" alt="">
            <div class="card-body">
                <h5 class="card-title">{{ $boolfolio->nome }}</h5>
                <p class="card-text">
                <p>{{ $boolfolio->descrizione }}</p>
            </div>
        </div>
    </div>

    <a class="btn btn-primary" href="{{ route('admin.boolfolios.index') }}" role="button">Torna alla lista</a>
@endsection
