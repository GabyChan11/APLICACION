@extends('layaout.main_template')

@section('content')

<br><br>
   <div class="text-center fw-bold fs-2">Actualizar venta:</div>
    <br>

    <div class="container-sm">
        <div class="card text-center">
            <div class="card-body">         
                <form action="{{route('sales.update', $sale->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Cliente:</label>
                        <div class="col-sm-2">
                        <input type="int" name="id_client" value="{{$sale->id_client}}" class="form-control" id="">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Producto:</label>
                        <div class="col-sm-2">
                        <input type="int" name="id_product" value="{{$sale->id_product}}" class="form-control" id="">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Fecha:</label>
                        <div class="col-sm-2">
                        <input type="date" name="sale_date" value="{{$sale->sale_date}}" class="form-control" id="">
                        </div>
                    </div>
    
                
                    <button type="submit" class="btn btn-dark">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection