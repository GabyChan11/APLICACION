@extends('layaout.main_template')

@section('content')

<br><br>
    <div class="container text-center">
        <div class="row justify-content-md-center">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Detalles cliente:{{$client->name}}</h5>
                    <p class="card-text">Primer apellido: {{$client->last_name}}</p>
                    <p class="card-text">Segundo apellido: {{$client->s_lastname}}</p>
                    <p class="card-text">Email: {{$client->email}}</p>
                    <p class="card-text">Teléfono: {{$client->phone}}</p>
                    <p class="card-text">Estado: {{$client->state}}</p>
                    <p class="card-text">Ciudad: {{$client->town}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection