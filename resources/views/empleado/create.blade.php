<h1>Formulario de creación de empleado</h1>
<br>
<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('empleado.form');

</form>