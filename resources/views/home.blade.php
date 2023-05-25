@extends('layouts.app')

@section('content')
    <h1 class="text-center my-5">I treni in partenza oggi ({{ $trains[0]->departure_date }}) sono:</h1>
    <div class="trains-container">
        <div class="container">
            <div class="row row-cols-3 g-5">
                @foreach ($trains as $train)
                    
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Azienda: {{ $train->company }}</h5>
                          <p class="card-text"> <span>Stazione di partenza: </span>{{ $train->departure_station }}</p>
                          <p class="card-text"> <span>Stazione di arrivo: </span>{{ $train->arrival_station }}</p>
                          <p class="card-text"> <span>Orario di partenza: </span>{{ $train->departure_time }}</p>
                          <p class="card-text"> <span>Orario di arrivo: </span>{{ $train->arrival_time }}</p>
                          <p class="card-text"> <span>Codice treno: </span>{{ $train->train_code }}</p>
                          <p class="card-text"> <span>Numero carrozze: </span>{{ $train->num_carriages }}</p>
                          <p class="card-text"> <span>In orario: </span>{{ $train->on_time ? 'si' : 'no' }}</p>
                          <p class="card-text"> <span>Cancellato: </span>{{ $train->cancelled ? 'si' : 'no' }}</p>
                          <a href="#" class="btn btn-primary">Acquista biglietto</a>
                        </div>
                      </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection