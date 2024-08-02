@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-12 row justify-content-center">
            @foreach ($projects as $project)
                <div class="col-5 card card-index">
                    <ul class="list-group">

                        <li class="list-group-item">Nome: {{ $project->nome }} </li>
                        <li class="list-group-item">Tipo: {{ $project->type->name }}</li>
                        <li class="list-group-item">Inizio: {{ $project->data_inizio }} </li>
                        <li class="list-group-item">Fine: {{ $project->data_fine }} </li>

                        <li class="list-group-item">
                            Completato: @if ($project->completato > 0)
                                Si
                            @endif
                            @if ($project->completato < 1)
                                No
                            @endif
                        </li>

                        <li class="list-group-item"><a href="{{ route('admin.admin.progetti.show', $project) }}"
                                class="btn btn-primary">Apri il
                                Progetto</a>
                            <a href="{{ route('admin.admin.progetti.edit', $project) }}" class="btn btn-warning">Modifica
                                Il progetto</a>
                            <form action="{{ route('admin.progetti.destroy', $project) }} " method="POST"
                                class="d-inline-block deleter">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-small btn-danger ">Elimina</button>
                            </form>
                        </li>
                    </ul>

                </div>
            @endforeach
        </div>



        <div class="nav-links col-12">{{ $projects->onEachSide(5)->links() }}</div>

    </div>
@endsection




@section('scripts')
    @vite('resources\js\Project\DeleteProject.js')
@endsection
