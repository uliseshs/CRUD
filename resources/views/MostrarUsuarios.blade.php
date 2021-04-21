<!DOCTYPE html>
<html>
<head>
    <title>Usuarios registrados</title>
</head>
<body>

<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido paterno</th>
        <th>Apellido materno</th>
        <th>Matricula</th>
        <th>Correo</th>
        <th>Contraseña</th>
    </tr>
    @foreach($usuario as $datos)
<tr>


    <td><a href={{route('usuario.perfil',$datos->Id)}}>{{$datos->Id}}</a></td>
    <td>{{$datos->nombre}}</td>
    <td>{{$datos->apellidoPaterno}}</td>
    <td>{{$datos->apellidoMaterno}}</td>
    <td>{{$datos->Matricula}}</td>
    <td>{{$datos->Correo}}</td>
    <td>{{$datos->Contraseña}}</td>
</tr>
    @endforeach
</table>
</body>
</html>
