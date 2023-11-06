<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <script src="{{asset('js/jquery-3.3.1.js') }} "> </script>
    <link href="{{ asset('js/bootstrap.min.css') }}" rel="stylesheet" href="">
    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }
        
        h1 {
            font-size: 36px;
            margin-bottom: 30px;
            color: #008080; /* teal color */
        }
        
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            font-size: 18px;
            border: 2px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: #f5f5f5; /* light gray background */
        }
        
        option {
            font-size: 18px;
            color: #333; /* dark gray color */
        }
    </style>
    <script>
        $(document).ready(function(){
            //-----------------------------
            $("#estados").on('change', function(){
                var id_estado = $(this).find(":selected").val();
                console.log('Este es el elemento seleccionado: '+id_estado);
            if(id_estado == 0){
                $("#municipios").html('<option="0">--Seleccione un estado antes --</option>');
            }
            else{
                $("#municipios").load('js_municipios?id_estado=' + id_estado);
            }
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <h1>Formulario de Registro</h1>
        <select id="estados">
            <option value="0">--Seleccione un estado --</option>
            @foreach($estados as $estado)
                <option value="{{ $estado->id_estados}}">{{$estado->nombre}}</option>
            @endforeach
        </select>
        <select id="municipios">
            <option value="0">--Seleccione un estado antes--</option>
        </select>
    </div>
</body>
</html>


