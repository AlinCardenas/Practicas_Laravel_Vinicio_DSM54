<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Practica - 01</title>
    <script src="jquery-3.3.1.js"></script>
    <script>
        $(document).ready(function(){
            $('p.clasdiv, h1').text("<b>DSM-54</b>");
            $('#idp').html("<b>DSM-54</b>");
            $('p.clasdiv').css('color', 'yellow');
            $('p.clasdiv').css('background', 'black');
            $('p.class2').text("<b>DSM-54</b>");
            $('p.class2').css({'color':'blue', 'font-size':'1.3em'});
            
        });
    </script>
</head>
<body>
    <h1>-- -- --</h1>
    <div class="classdiv"></div>
    <p id='idp'></p>
    <div>-- Contenido de DIV --</div>
    <p class="class2">--Contenido de Parrafo --</p>
    <p class="classdiv"></p>
</body>
</html>