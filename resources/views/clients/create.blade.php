@extends('layaout.main_template')

@section('content')
    

<br><br>
<div class="text-center fw-bold fs-2">Registrar cliente</div>
 <br>

    <div class="container-sm">
        <div class="card text-center">
            <div class="card-body">         
                <form action="{{route('clients.store')}}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Nombre:</label>
                        <div class="col-sm-2">
                        <input  class="form-control" id="" type="text" name="name" required>
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Primer apellido:</label>
                        <div class="col-sm-2">
                        <input type="text" name="last_name" required class="form-control" id="">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Segundo apellido:</label>
                        <div class="col-sm-2">
                        <input type="text" name="s_lastname" required class="form-control" id="">
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Email:</label>
                        <div class="col-sm-2">
                        <input type="email" name="email" required class="form-control" id="">
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Teléfono:</label>
                        <div class="col-sm-2">
                        <input  class="form-control" id="" type="number" name="phone" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Estado:</label>
                        <div class="col-sm-2">
                        <input  class="form-control" id="" type="text" name="state"  required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Ciudad:</label>
                        <div class="col-sm-2">
                        <input  class="form-control" id="" type="text" name="town" required>
                        </div>
                    </div>
                
                    <button type="submit" class="btn btn-dark">Registrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection