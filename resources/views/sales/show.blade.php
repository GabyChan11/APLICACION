@extends('layaout.main_template')

@section('content')
   
<br><br>
<div class="container text-center">
    <div class="row justify-content-md-center">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Detalles venta:</h5>
                <p class="card-text">Cliente: {{$sale->id_client}}</p>
                <p class="card-text">Producto: {{$sale->id_product}}</p>
                <p class="card-text">Fecha: {{$sale->sale_date}}</p>
            </div>
        </div>
    </div>
</div>
    
@endsection