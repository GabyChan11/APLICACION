@extends('layaout.main_template')

@section('content')

<br><br>
   <div class="text-center fw-bold fs-2">Actualizar cliente: {{$client->name}}</div>
    <br>

    <div class="container-sm">
        <div class="card text-center">
            <div class="card-body">         
                <form action="{{route('clients.update', $client->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Nombre:</label>
                        <div class="col-sm-2">
                        <input  class="form-control" id="" type="text" name="name" value="{{$client->name}}">
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Primer apellido:</label>
                        <div class="col-sm-2">
                        <input type="text" name="last_name" value="{{$client->last_name}}" class="form-control" id="">
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Segundo apellido:</label>
                        <div class="col-sm-2">
                        <input type="text" name="s_lastname" value="{{$client->s_lastname}}" class="form-control" id="">
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Email:</label>
                        <div class="col-sm-2">
                        <input type="email" name="email" value="{{$client->email}}" class="form-control" id="">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Teléfono:</label>
                        <div class="col-sm-2">
                        <input type="number" name="phone" value="{{$client->phone}}" class="form-control" id="">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Estado:</label>
                        <div class="col-sm-2">
                        <input type="text" name="state" value="{{$client->state}}" class="form-control" id="">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Ciudad:</label>
                        <div class="col-sm-2">
                        <input type="text" name="town" value="{{$client->town}}" class="form-control" id="">
                        </div>
                    </div>
    
                
                    <button type="submit" class="btn btn-dark">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection