@extends('layouts.base')

@section('title', 'Trains')

@section('main-content')
<main>
    <div class="container-fluid">
        <div class="row w-100">
            <div class="col-12 m-3 p-5">
                <h1 class="text-center">Treno da {{ $train->Stazione_di_partenza}}, a {{ $train->Stazione_di_arrivo }}</h1>
            </div>
            <p class="text">
                <h4> Azienda: {{ $train->Azienda }} </h4>
                <h4>Numero Carrozza: {{$train->Numero_carrozze}}</h4>
                <h4>Orario di partenza: {{ $train->Orario_di_partenza }}</h4>
                <h4>Orario di arrivo: {{ $train->Orario_di_arrivo }}</h4>
            </p>
        </div>
    </div>

</main>
@endsection

