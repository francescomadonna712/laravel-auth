@extends('layouts.app')

@section('content')
    <div class="p-3 mb-4 bg-light">
        <div class="container py-3">
            <h1 class="display-5 fw-bold">boolfolio Francesco</h1>

        </div>
    </div>

    <div class="container">
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Cover Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>


                    @forelse ($boolfolios as $boolfolio)
                        <tr class="">
                            <td scope="row">{{ $boolfolio->id }}</td>
                            <td>{{ $boolfolio->nome }}</td>
                            <td>
                                <img width="140px" src="{{ $boolfolio->cover_image }}" alt="">
                            </td>
                            <td> views\edit\delete</td>
                        </tr>
                    @empty
                        <tr class="">
                            <td scope="row" colspan="3">niente da mostrare</td>

                        </tr>
                    @endforelse


                </tbody>
            </table>
        </div>

    </div>
@endsection
