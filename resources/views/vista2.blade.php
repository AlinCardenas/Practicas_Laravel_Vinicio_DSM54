<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practicas - Javascript</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <style>
        html, body {
            background-color: #fff;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0
        }

        .content { text-align: center; }

        .title { font-size: 84px; }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing:  1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <div class="content">
        <br>
        <br>
        <h1>pattern</h1>
        <br>
        <br>
        <br>
        <br>
        <br>Evaluacion 1<br>
        <input type="text" required pattern="[0-9\/]+"/>
        <br>
        <br>Evaluacion 2: <br>
        <input type="text" id="evaluacion" onblur="fieldSize()">
        <br>
        <p id="error"></p>

        <script>
            const $input = document.querySelector("#evaluacion");
            const patron = /[0-9-zA-Z_@]+/;

            $input.addEventListener("keydown", event=> {
                if (patron.test(event.key)){
                    document.getElementById('evaluacion').style.border = "1px solid #00c00";
                }else{
                    if(event.keyCode==8){

                    }else{
                        event.preventDefault();
                    }
                }
            });

            function fieldSize() {
                var tam = document.getElementById("evaluacion").value;
                if(tam.legth>=2 && tam.legth<=4){
                    document.getElementById("error").innerHTML = "";
                }else{
                    document.getElementById("error").innerHTML="Error: Tamaño del texto";
                    document.getElementById("evaluacion").style.border="1px soild #FF0000";
                }
            }
        </script>
        <br>
        <br>Indica valores textuales/numericos: <br>
        <input type="text" size="40" onkeypress="ifTxt(event)">

        <p id="salida"></p>
        <script>
            function ifTxt(event){
                var vn = event.keyCode;
                var vt = String.fromCharCode(vn);
                document.getElemetnById("salida").innerHTML = "Numerico: "+ vn + "<br>Textual: " +vt;

            }
        </script>
    </div>
</body>
</html>