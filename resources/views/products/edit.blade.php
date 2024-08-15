@extends('layaout.main_template')

@section('content')
    
<br><br>
   <div class="text-center fw-bold fs-2">Actualizar producto:{{$product->nameProduct}}</div>
    <br>

    <div class="container-sm">
        <div class="card text-center">
            <div class="card-body">         
                <form action="{{route('products.update', $product->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Producto:</label>
                        <div class="col-sm-2">
                        <input  class="form-control" id="" type="text" name="nameProduct" value="{{$product->nameProduct}}">
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Cantidad:</label>
                        <div class="col-sm-2">
                        <input type="number" name="stock" value="{{$product->stock}}" class="form-control" id="">
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Precio unitario:</label>
                        <div class="col-sm-2">
                        <input type="text" name="unit_price" value="{{$product->unit_price}}" class="form-control" id="">
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Marca:</label>
                        <select class="form-select w-25" aria-label="Default select example" name="id_brand">
                            <option value="">Seleccionar...</option>
                            @foreach ($brands as $brand => $id)
                            <option {{$product->id_brand ==$id?'selected': ''}} value="{{$id}}">{{$brand}}</option>
                            @endforeach
                          </select>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Imagen:</label>
                        <div class="col-sm-4">
                        <input type="file" name="image" class="form-control" id="">
                        </div>
                    </div>
                
                    <button type="submit" class="btn btn-dark">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection