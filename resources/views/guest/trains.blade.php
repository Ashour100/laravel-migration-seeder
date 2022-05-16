@extends('layouts.base')

@section('title', 'Trains')

@section('main-content')
<main>
    <div class="container-fluid">
        <div class="row w-100">
            <div class="col-12 m-3 p-5">
                <h1 class="text-center">Treni disponibili attualmente </h1>
            </div>
            @foreach ($trains as $train)
                <div class="col-4">
                    <div class="card p-3 m-2">
                        <div class="card-body">
                            <h5 class="card-title">
                                Treno da {{ $train->Stazione_di_partenza}}, a {{ $train->Stazione_di_arrivo }}
                            </h5>
                            <p class="card-text">
                                Azienda: {{ $train->Azienda }} <br>
                                Numero Carrozza: {{$train->Numero_carrozze}} <br>
                                Orario di partenza: {{ $train->Orario_di_partenza }} <br>
                                Orario di arrivo: {{ $train->Orario_di_arrivo }} <br>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</main>
@endsection

