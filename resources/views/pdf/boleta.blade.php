<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PREDIOS LA BENDICION - {{$servicio->id}}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style>
    body {
        font-family:  Arial,sans-serif; ;
        font-size: 14px;
        line-height: 20px;
        max-height: 100%;
        width: 100%;
        max-width: 100%;
    }
    .field {
        font-size: 15px;
    }
    .text-data{
        font-size: 14px;
    }
    @page {
        margin-top: 0.5cm;
        margin-bottom: 2cm;
        margin-left: 2cm;
        margin-right: 1cm;
    }

    .separador {
        border-bottom: #3f9ae5;
        border-bottom-width: thick;
    }
    .layer1{
        margin-top: 10px;
    }
    .layer2{
        margin-top: 20px;
    }
    .bg-azul{
        background: #483d8b;
        height:3px;
    }
    #watermark {
        position: fixed;
        bottom:   10cm;
        opacity: 0.3;
        left:     3cm;
        width:    12cm;
        height:   8cm;
        z-index:  -1000;
    }
    footer {
        position: fixed;
        bottom: -115px;
        left: 0px;
        right: 0px;
        height: 450px;
    }
    #type {
        position: fixed;
        top: 3.7cm;
        left: 15.7cm;
    }
</style>
<body>
<div id="watermark">
    <img src="https://i.imgur.com/jM0rIPO.png" height="100%" width="100%" />
</div>

<div class="row">
    <div class="col-xs-2">
        <img src="https://i.imgur.com/jM0rIPO.png" style="height: 80px; width: 100%; margin-top: 5px; line-height: 5px;margin-bottom: 0;" />
    </div>
    <div class="col-xs-9">
        <p>
            <b>SERVICIO DE PREDIO</b><br>
            <b>PEQUEÑO CONTRIBUYENTE</b><br>
            <b>PREDIO LA BENDICION</b><br>
        </p>
        <br>
    </div>
</div>
<div class="row">
    <div class="col-xs-8">
        <b style="font-size: 18px">PILOTO: {{$servicio->piloto->nombre}}</b> <br>
        <b style="font-size: 18px">PLACA: {{$servicio->trailer->placa}}</b><br>
        <b style="font-size: 18px">MARCA: {{$servicio->trailer->marca}}</b><br>
        <b style="font-size: 18px">PLACA CHASSIS: {{$servicio->placa_chassis}}</b>
        <br>
        <b style="font-size: 18px">FECHA: {{$servicio->created_at}}</b>
    </div>
</div>
<div class="bg-azul"></div>
</body>
</html>
