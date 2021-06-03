<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="contenedor">
        <span class="texto">Elige <b>Pais</b>:</span>

        <!--seleccionar un pais del selector-->
        <select id="pais" onchange="ajax();">
            <option value="" selected="seleccionar">Seleccionar</option>
            <option value="argentina">Argentina</option>
            <option value="uruguay">Uruguay</option>
            <option value="paraguay">Paraguay</option>
            <option value="chile">Chile</option>
        </select>

        <span class="texto">Elige <b>Departamento</b>:</span>

        <!--seleccionar un departamento Provincia-->  
        <select  id="agregar" >
            <option value="-">.....</option>
        </select>    
    </div>

    <script src="../js/main.js"></script>
</body>
</html>