@extends('layouts.admin')
@section('content')
    <h1>categorie</h1>
    <ul>
        @foreach ($categorie as $caategoria)
            <li><a href="{{route("admin.categories.show" $categoria)}}"></a>
                <h2>{{ $categoria->name }}</h2>
            </li>
        @endforeach
    </ul>
@endsection
