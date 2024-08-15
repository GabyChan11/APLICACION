@extends('layaout.main_template')

@section('content')

    <br><br>
    <div class="container text-center">
        <div class="row justify-content-md-center">
            <div class="card text-center mb-3" style="max-width: 900px;">
                <div class="row g-0">
                <div class="col-md-4">
                    <img src="/image/products/{{$product->image}}" width="300" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">Detalles producto:{{$product->nameProduct}}</h5>
                    <p class="card-text">Cantidad: {{$product->stock}}</p>
                    <p class="card-text">Precio: {{$product->unit_price}}</p>
                    <p class="card-text">Marca: {{$product->BrandFunction->brand}}</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection