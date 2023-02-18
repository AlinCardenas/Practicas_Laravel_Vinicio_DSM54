<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel DSM-54</title>
    <script src={{ asset('jquery-3.3.1.js') }}></script>
    <link rel="stylesheet" href="{{ asset('js/bootsrap.min.css')}}" rel="stylesheet">
    <script>
        $(document).ready(function () {
            $("#estados").on('change', function () {
                var id_estado = $(this).find(":selected").val();
                console.log(id_estado);
                if (id_estado == 0) {
                    $("#municipios").html('<option value=0>-- Seleccione un estado antes --</option>');
                } else {
                    $("#municipios").load('js_municipios?id_estado=' + id_estado);
                }
            });

        });
    </script>
</head>

<body>
    <div class="container">
        <h1>Formulario de registro</h1>
        <hr>
        <select id="estados">
            <option value="0">-- Seleccione un estado --</option>
            @foreach($estados as $estado)
            <option value="{{ $estado->id_estado }}">{{ $estado->nombre }} </option>
            @endforeach
        </select>
        <hr>
        <select id="municipios">
            <option value="0">-- Seleccione un estado antes --</option>
            <br>
        </select>

    </div>

</body>

</html>