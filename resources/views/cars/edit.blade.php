@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Actualizar carro</h1>
        <form method="post" action="{{ route('cars.update', $car->id) }}">
            @method('PUT') 
            @csrf
            <div class="form-group">

                <label for="id">Placa:</label>
                <input type="text" class="form-control" name="id" value={{ $car->id }} />
            </div>

            <div class="form-group">
                <label for="marca">Marca:</label>
                <input type="text" class="form-control" name="marca" value={{ $car->marca }} />
            </div>

            <div class="form-group">
                <label for="modelo">Modelo:</label>
                <input type="text" class="form-control" name="modelo" value={{ $car->modelo }} />
            </div>
            <div class="form-group">
                <label for="valor_comercial">Valor Comercial:</label>
                <input type="text" class="form-control" name="valor_comercial" value={{ $car->valor_comercial }} />
            </div>
            <div class="form-group">
                <label for="valor_alquiler_diario">Valor Alquiler Diario:</label>
                <input type="text" class="form-control" name="valor_alquiler_diario" value={{ $car->valor_alquiler_diario }} />
            </div>
            <div class="form-group">
                <label for="disponible">Disponible:</label>
                <input type="text" class="form-control" name="disponible" value={{ $car->disponible }} />
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection