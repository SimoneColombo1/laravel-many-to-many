@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="col-12 row justify-content-center">
            <div class="col-8">
                <h1 class="py-4">Crea Il Tuo Progetto</h1>
                @if ($errors->any())
                    <div class="col-8">
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif




                <form action="{{ route('admin.progetti.store') }}" method="POST" enctype="multipart/form-data" class="py-5 ">
                    @method('POST')
                    @csrf
                    <label for="Nome"> Nome</label>

                    <input type="text" id="nome" name="nome" class="mt-3 mb-3 form-control form-control-sm">

                    <label for="Specie"> Descrizione</label>
                    <input type="text" id="descrizione" name="descrizione"
                        class="mt-3 mb-3 form-control form-control-sm">



                    <label for="DataArrivo"> Data fine</label>
                    <input type="date" id="data_fine" name="data_fine" class="mt-3 mb-3 form-control form-control-sm">
                    <span> Completato:</span>
                    <label for="completato">Si</label>
                    <input type="radio" id="1" name="completato" value="1">
                    <label for="completato">No</label>
                    <input type="radio" id="0" name="completato" value="0">
                    <select class="from-select" name="type_id">
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}"> {{ $type->name }} </option>
                        @endforeach
                        <label for="image">Inserisci un immagine</label>
                        <input type="file" name="image" name="image"><input>
                        @foreach ($technologies as $technology)
                            <input type="checkbox" name="technology" class="btn check"
                                id="technology-check={{ $technology->id }}" autocomplete="off"
                                value="{{ $technology->id }}">
                            <label for="technology-check={{ $technology->id }}">{{ $technology->name }}</label>
                        @endforeach
                    </select>
                    <button class="mx-4 btn btn-primary">Crea</button>


                </form>

            </div>

        </div>
    </div>
@endsection
