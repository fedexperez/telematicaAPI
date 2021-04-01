@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Añadir carro</h1>
  <div>
      <form method="post" action="{{ route('cars.store') }}">
          @csrf
          <div class="form-group">    
              <label for="id">Placa:</label>
              <input type="text" class="form-control" name="id"/>
          </div>

          <div class="form-group">
              <label for="marca">Marca:</label>
              <input type="text" class="form-control" name="marca"/>
          </div>

          <div class="form-group">
              <label for="modelo">Modelo:</label>
              <input type="text" class="form-control" name="modelo"/>
          </div>
          <div class="form-group">
              <label for="valor_comercial">Valor Comercial:</label>
              <input type="text" class="form-control" name="valor_comercial"/>
          </div>
          <div class="form-group">
              <label for="valor_alquiler_diario">Valor Alquiler Diario:</label>
              <input type="text" class="form-control" name="valor_alquiler_diario"/>
          </div>
          <div class="form-group">
              <label for="disponible">Disponible:</label>
              <input type="text" class="form-control" name="disponible"/>
          </div>            
          <button type="submit" class="btn btn-primary">Añadir</button>
      </form>
  </div>
</div>
</div>
@endsection