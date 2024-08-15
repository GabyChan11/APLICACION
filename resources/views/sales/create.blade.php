@extends('layaout.main_template')

@section('content')
<br><br>
<div class="text-center fw-bold fs-2">Registrar ventas</div>
 <br>

    <div class="container-sm">
        <div class="card text-center">
            <div class="card-body">         
                <form action="{{route('sales.store')}}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Cliente:</label>
                        <div class="col-sm-2">
                        <input  class="form-control" id="" type="int" name="id_client" required>
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Producto:</label>
                        <div class="col-sm-2">
                        <input type="int" name="id_product" required class="form-control" id="">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Fecha:</label>
                        <div class="col-sm-2">
                        <input type="date" name="sale_date" required class="form-control" id="">
                        </div>
                    </div>
   
                    <button type="submit" class="btn btn-dark">Registrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection