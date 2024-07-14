@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Project</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6">


                @csrf
                <div class="mb-3">
                    <label class="form-label">Inserisci Nome</label>
                    <input type="text" class="form-control" id="" placeholder="nome" name="nome">
                </div>
                <div class="mb-3">
                    <label class="form-label">Inserisci Autore</label>
                    <input type="text" class="form-control" id="" placeholder="Autore" name="autore">
                </div>
                <div class="mb-3">
                    <label class="form-label">Inserisci data inizio</label>
                    <input type="text" class="form-control" id="" placeholder="inizio" name="inizio">
                </div>
                <div class="mb-3">
                    <label class="form-label">Inserisci data fine</label>
                    <input type="text" class="form-control" id="" placeholder="fine" name="fine">
                </div>
                <div class="mb-3">
                    <label class="form-label">Inserisci Descrizione</label>
                    <input type="text" class="form-control" id="" placeholder="descrizione" name="descrizione">
                </div>
                <button type="submit" class="btn btn-primary">Pusha</button>
                </form>
            </div>
        </div>
    </div>
@endsection
