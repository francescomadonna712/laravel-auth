@extends('layouts.app')

@section('content')
    <div class="p-3 mb-4 bg-light">
        <div class="container d-flex justify-content-between align-items-center py-3">
            <h1 class="display-5 fw-bold">boolfolio Francesco</h1>
            <a href="{{ route('admin.boolfolios.create') }}" class="btn btn-dark">
                <i>Crea il tuo nuovo progetto</i>
            </a>
        </div>
    </div>



    <div class="container">

        @if (@session('message'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>{{ session('message') }}</strong>
            </div>
        @endif

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
                                @if (Str::startsWith($boolfolio->cover_image, 'http'))
                                    <img width="140px" src="{{ $boolfolio->cover_image }}" alt="">
                                @else
                                    <img width="140px" src="{{ asset('storage/' . $boolfolio->cover_image) }}"
                                        alt="">
                                @endif

                            </td>
                            <td> <a class="btn btn-dark" href="{{ route('admin.boolfolios.show', $boolfolio->id) }}"><i
                                        class="bi bi-card-heading"></i></a>

                                <a class="btn btn-dark" href="{{ route('admin.boolfolios.edit', $boolfolio) }}"><i
                                        class="bi bi-pencil-square"></i></a>

                                <!-- Modal trigger button -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#modal-{{ $boolfolio->id }}">

                                    <i class="bi bi-trash"></i>
                                </button>

                                <!-- Modal Body -->
                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                <div class="modal fade" id="modal-{{ $boolfolio->id }}" tabindex="-1"
                                    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                    aria-labelledby="modalTitle{{ $boolfolio->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTitle{{ $boolfolio->id }}">
                                                    elimina questo progetto
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                stai eliminado questo progetto <strong>{{ $boolfolio->nome }}</strong>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    torna indietro
                                                </button>
                                                <form action="{{ route('admin.boolfolios.destroy', $boolfolio) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger">
                                                        confermi?
                                                    </button>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
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
