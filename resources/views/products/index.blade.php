@extends('layaout.main_template')

@section('content')
<br><br>
   <div class="text-center fw-bold fs-2">PÁGINA DE PRODUCTOS</div>
    <br>
    
    <div class="text-center">
    <a href="{{route('products.create')}}" class="btn btn-light">
        <i class="bi bi-plus-square-fill"></i> Registrar Producto</a>
    </div>
    <br>

    <div class="text-center"> 
    <table class="table table-bordered border-dark">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Marca</th>
                <th>Imagen</th>
                <th>Más detalles</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <br>
        <tbody class="table table-light table-striped">
            @foreach ($products as $p)
                <tr>
                    <td> {{$p->nameProduct}}</td>
                    <td> {{$p->stock}}</td>
                    <td>${{$p->unit_price}}</td>
                    <td> {{$p->BrandFunction->brand}}</td>
                    <td> <img src="/image/products/{{$p->image}}" width="100" alt="Dulce.jpeg"></td>
                    
                    <td>
                        <ul class="flex_acciones">
                          <div class="text-center">
                                <a href="{{route('products.show', $p)}}" class="btn btn-success"><i class="bi bi-binoculars"></i></a>
                            </div>  
                        </ul>
                    </td>

                    <td>
                        <ul class="flex_acciones">
                            <div class="text-center">
                                <a href="{{route('products.edit', $p)}}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                            </div>  
                        </ul>
                    </td>

                    <td>
                        <form action="{{route('products.destroy', $p)}}" method="POST">
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
    {{-- {{$products->links()}} --}}
@endsection