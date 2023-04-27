<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Passes</title>
</head>

<body>
    <div id="header">
        <img class="imgheader" src="{{ public_path('img/logo_gore2.png') }}" height="100" width="100">
        <div class="infoheader">
            <h3>GOBIERNO REGIONAL DE PUNO</h3>
            <h4>Sistema de Papeletas de Salida - PASS</h4>
        </div>
    </div>

    <div id="footer">
        <div class="textfooter">
            <p>Trabajando por un Futuro Mejor</p>
            <p>Derechos Reservados - 2023</p>
        </div>
    </div>

    <div>
        {{-- <div class="prueba">
            <label>Nombre: </label>{{ $pass->user->name }}
            <label>Codigo de Personal: </label>{{ $pass->user->ncard }}
            <label>Cargo: </label>{{ $pass->charge->name_charge }}
            <label>Dependencia: </label>{{ $pass->dependence->name_dependence }}
            <label>Motivo de salida: </label>{{ $pass->motive }}
        </div>
        <div>
            <label>Lugar: </label>{{ $pass->place }}
            <label>Tiempo autorizado: </label>{{ $pass->time }}
            <label>Hora de Salida Registrada: </label>{{ $pass->input }}
            <label>Hora de ingreso registros: </label>{{ $pass->output }}
            <label>Fecha: </label>{{ $pass->date }}
        </div>
        <div>
            <label>Observaciones: </label>{{ $pass->observation }}
        </div> --}}
    </div>

</body>

</html>