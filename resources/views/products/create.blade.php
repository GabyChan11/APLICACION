@extends('layaout.main_template')

@section('content')

<br><br>
   <div class="text-center fw-bold fs-2">Registrar producto</div>
    <br>
   
    
    @if ($errors->any())
        @foreach ($errors->all() as $e)
            <div class="error">
                {{$e}}
            </div>
        @endforeach
    @endif
    

<div class="container-sm">
    <div class="card text-center">
        <div class="card-body">         
            <form action="{{route('products.store')}}" method="POST">
                @csrf
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Producto:</label>
                    <div class="col-sm-2">
                    <input  class="form-control" id="" type="text" name="nameProduct" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Cantidad:</label>
                    <div class="col-sm-2">
                    <input type="number" name="stock" required class="form-control" id="">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Precio unitario:</label>
                    <div class="col-sm-2">
                    <input type="text" name="unit_price" required class="form-control" id="">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Marca:</label>
                    <select class="form-select w-25" aria-label="Default select example" name="id_brand">
                        <option value="">Seleccionar...</option>
                        @foreach ($brands as $brand => $id)
                            <option value="{{$id}}">{{$brand}}</option>
                        @endforeach
                      </select>
                </div>
            
                <button type="submit" class="btn btn-dark">Registrar</button>
            </form>
        </div>
    </div>
</div>
@endsection