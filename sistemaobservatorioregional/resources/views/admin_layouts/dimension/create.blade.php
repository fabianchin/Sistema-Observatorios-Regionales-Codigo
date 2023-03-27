@extends('admin_layouts.admin_nav')

@section('crud_content')
<div class="card-body">
    <form role="form text-left" method="post" action="{{route('dimension.insert')}}">
      @csrf
      <div class="mb-3">
          <label for="dimension_name">Nombre de dimension</label>
          <input type="text" name="dimension_name" class="form-control" placeholder="Nombre de dimension" aria-label="dimension_name" required>
      </div>
      <div class="mb-3">
          <label for="acronym">Acrónimo</label>
          <input type="text" name="acronym" class="form-control" placeholder="nombre del acrónimo" aria-label="acronimo" required>
      </div>
      <div class="container text-center">
        <button type="submit" class="btn bg-gradient-success w-30 my-4 mb-2"><a style="color:white">Guardar</a></button>
        <button type="button" class="btn bg-gradient-danger w-30 my-4 mb-2"><a style="color:white" href={{route('dimension.manage')}}>Regresar</a></button>
      </div>
    </form>
  </div>
@endsection