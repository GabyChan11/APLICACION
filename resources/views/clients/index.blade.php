@extends('layaout.main_template')

@section('content')
<br><br>
<div class="text-center fw-bold fs-2">PÁGINA DE CLIENTES</div>
 <br>

 <div class="text-center">
    <a href="{{route('clients.create')}}" class="btn btn-light">
        <i class="bi bi-plus-square-fill"></i> Registrar Cliente</a>
    </div>
    <br>


    <div class="text-center"> 
        <table class="table table-bordered border-dark">
        <thead class="table-dark">
            <th>Nombre</th>
            <th>Primer apellido</th>
            <th>Segundo apellido</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Estado</th>
            <th>Ciudad</th>
            <th>Más detalles</th>
            <th>Actualizar</th>
            <th>Eliminar</th>

        </thead>
        <br>
        <tbody class="table table-light table-striped">
            @foreach ($clients as $c)
                <tr>
                    <td> {{$c->name}}</td>
                    <td> {{$c->last_name}}</td>
                    <td> {{$c->s_lastname}}</td>
                    <td> {{$c->email}}</td>
                    <td> {{$c->phone}}</td>
                    <td> {{$c->state}}</td>
                    <td> {{$c->town}}</td>
                    
                    <td>
                        <ul class="flex_acciones">
                          <div class="text-center">
                                <a href="{{route('clients.show', $c)}}" class="btn btn-success"><i class="bi bi-binoculars"></i></a>
                            </div>  
                        </ul>
                    </td>

                    <td>
                        <ul class="flex_acciones">
                            <div class="text-center">
                                <a href="{{route('clients.edit', $c)}}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                            </div>  
                        </ul>
                    </td>

                    <td>
                        <form action="{{route('clients.destroy', $c)}}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>

                        </form>  
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection