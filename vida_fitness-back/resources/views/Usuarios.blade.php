<div>
<h2>Lista de Usuarios Registrados</h2>
    @foreach ($Listausuarios as $usuarios)   
        {{$usuarios->id}} - {{$usuarios-> Nombre}} {{$usuarios-> Apellido}} <br>
    @endforeach
</div>