@extends('layouts.app')

@section('page-title', 'homepage')

@section('content')
    <div class="container">
        <div class="col-12 row justify-content-center">
            <div class="col-6 pd-2 card">
                <ul class="list-group single-project">
                    <li class="list-group-item">
                        {{ $project->nome }}
                    </li>
                    <li class="list-group-item">
                        {{ $project->type->name }}
                    </li>
                    <li class="list-group-item">
                        {{ $project->descrizione }}
                    </li>
                    <li class="list-group-item">
                        {{ $project->data_inizio }}
                    </li>
                    <li class="list-group-item">
                        {{ $project->data_fine }}
                    </li>
                    <li class="list-group-item">
                        @if ($project->completato > 0)
                            Si
                        @endif
                        @if ($project->completato < 1)
                            No
                        @endif
                    </li>
                    @forelse ($project->technologies as $technology)
                        <li class="list-group-item">
                            {{ $technology->nome }}
                        </li>
                    @empty

                        <li class="list-group-item">
                            Non specificata
                        </li>
                    @endforelse

                </ul>
                <div class="image">
                    <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->nome }} " class="img-fluid">
                </div>
            </div>
        </div>

    </div>



@endsection
