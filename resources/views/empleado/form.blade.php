<h1>{{ $modo }} Empleado</h1>

@if(count($errors)>0)

<div class="alert alert-danger" role="alert">
  <ul>
    Content @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>

@endif

<div class="form-group">
  <label for="Nombre">Nombre</label>
  <input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}" id="Nombre">
</div>

<div class="form-group">
  <label for="ApellidoPaterno">Apellido Paterno</label>
  <input type="text" class="form-control" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno') }}" id="ApellidoPaterno">
</div>

<div class="form-group">
  <label for="ApellidoMAterno">Apellido Materno</label>
  <input type="text" class="form-control" name="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno') }}" id="ApellidoMaterno">
</div>

<div class="form-group">
  <label for="Correo">Correo</label>
  <input type="email" class="form-control" name="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo') }}" id="Correo">
</div>

<div class="form-group">
  <br>
  @if(isset($empleado->Foto))
  <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto }}" alt="{{ $empleado->Foto }}" width="100px" height="100px">
  @endif
  <input type="file" class="form-control" name="Foto" value="" id="Foto">
</div>

<input class="btn btn-success" type="submit" value="{{ $modo }} datos">

<a href="{{ url('empleado/') }}" class="btn btn-primary">Regresar</a>