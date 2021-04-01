@extends('base')

@section('main')
<div class="row">
  <div class="col-sm-12">
    <div>
      <a style="margin: 19px;" href="{{ route('cars.create')}}" class="btn btn-primary">Carro nuevo</a>
    </div>
    <div class="col-sm-12">

      @if(session()->get('success'))
      <div  class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session()->get('success') }}
      </div>
      @endif
    </div>
    <h1 class="display-3">Carros <i class="fas fa-car"></i> </h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <td>Placa</td>
          <td>Marca</td>
          <td>Modelo</td>
          <td>Valor Comercial</td>
          <td>Valor Alquiler Diario</td>
          <td>Disponible</td>
          <td colspan=2>Actions</td>
        </tr>
      </thead>
      <tbody>
        @foreach($cars as $car)
        <tr>
          <td>{{$car->id}}</td>
          <td>{{$car->marca}}</td>
          <td>{{$car->modelo}}</td>
          <td>{{$car->valor_comercial}}</td>
          <td>{{$car->valor_alquiler_diario}}</td>
          <td>{{$car->disponible}}</td>
          <td>
            <a href="{{ route('cars.edit',$car->id)}}" class="btn btn-primary">Editar</a>
          </td>
          <td>
            <form action="{{ route('cars.destroy', $car->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit">Borrar</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div>
    </div>
    @endsection