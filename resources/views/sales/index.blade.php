@extends('layaout.main_template')

@section('content')
<br><br>
<div class="text-center fw-bold fs-2">PÁGINA DE VENTAS</div>
 <br>

 <div class="text-center">
    <a href="{{route('sales.create')}}" class="btn btn-light">
        <i class="bi bi-plus-square-fill"></i> Registrar Venta</a>
    </div>
    <br>

    <div class="text-center"> 
<table class="table table-bordered border-dark">
    <thead class="table-dark">
        <tr>
            <th>Cliente</th>
            <th>Producto</th>
            <th>Fecha</th>
            <th>Más detalles</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <br>
    <tbody class="table table-light table-striped">
        @foreach ($sales as $s)
            <tr>
                <td> {{$s->ClientFunction->name}}</td>
                <td> {{$s->ProductFunction->nameProduct}}</td>
                <td> {{$s->sale_date}}</td>
        
                <td>
                    <ul class="flex_acciones">
                      <div class="text-center">
                            <a href="{{route('sales.show', $s)}}" class="btn btn-success"><i class="bi bi-binoculars"></i></a>
                        </div>  
                    </ul>
                </td>

                <td>
                    <ul class="flex_acciones">
                        <div class="text-center">
                            <a href="{{route('sales.edit', $s)}}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                        </div>  
                    </ul>
                </td>

                <td>
                    <form action="{{route('sales.destroy', $s)}}" method="POST">
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