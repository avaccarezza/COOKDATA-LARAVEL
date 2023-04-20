<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    
    <p> <strong>Nombre: </strong>{{$contacto['nombre']}}</p>
    <p> <strong>Email: </strong>{{$contacto['email']}}</p>
    <p> <strong>Telefono: </strong>{{$contacto['telefono']}}</p>
    <p> <strong>Tipo de contacto: </strong>{{$contacto['contacto']}}</p>
    <p> <strong>Empresa: </strong>{{$contacto['empresa']}}</p>
    <p> <strong>Cargo: </strong>{{$contacto['cargo']}}</p>
    <p> <strong>Provincia: </strong>{{$contacto['provincia']}}</p>
    <p> <strong>Población: </strong>{{$contacto['poblacion']}}</p>
    <p> <strong>Codigo postal: </strong>{{$contacto['codigo_postal']}}</p>
    <p> <strong>Servicio de interés: </strong>{{$contacto['asunto']}}</p>
    <p> <strong>Mensaje: </strong>{{$contacto['mensaje']}}</p>

</body>
</html>