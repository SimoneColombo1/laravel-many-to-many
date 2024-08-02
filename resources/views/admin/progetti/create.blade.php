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




                <form action="{{ route('admin.progetti.store') }}" method="POST" class=" py-5">
                    @method('POST')
                    @csrf
                    <label for="Nome"> Nome</label>

                    <input type="text" id="nome" name="nome" class="form-control form-control-sm mb-3 mt-3">

                    <label for="Specie"> Descrizione</label>
                    <input type="text" id="descrizione" name="descrizione"
                        class="form-control form-control-sm mb-3 mt-3">



                    <label for="DataArrivo"> Data fine</label>
                    <input type="date" id="data_fine" name="data_fine" class="form-control form-control-sm mb-3 mt-3">
                    <span> Completato:</span>
                    <label for="completato">Si</label>
                    <input type="radio" id="1" name="completato" value="1">
                    <label for="completato">No</label>
                    <input type="radio" id="0" name="completato" value="0">
                    <select class="from-select" name="type_id">
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}"> {{ $type->name }} </option>
                        @endforeach
                    </select>
                    <button class="btn  btn-primary mx-4">Crea</button>


                </form>

            </div>

        </div>
    </div>
@endsection
