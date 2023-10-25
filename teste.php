<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .timeline {
            position: relative;
            margin: 50px auto;
            width: 90%;
            height: 4px;
            background: #007bff;
        }

        .event {
            position: absolute;
            width: 24px;
            height: 24px;
            background: #007bff;
            border-radius: 50%;
            transform: translateX(-50%);
            cursor: pointer;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .event:hover {
            background: #ff5733;
        }

        .event-label {
            position: absolute;
            top: 70px;
            text-align: center;
            width: 150px;
            left: 50%;
            transform: translateX(-50%);
            font-weight: bold;
            background: #fff;
            padding: 10px;
            border-radius: 6px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin: 30px 0;
            color: #007bff;
        }
    </style>
</head>
<body>
    <h1>Linha do Tempo da Empresa Fruta Polpa</h1>
    <div class="timeline">
        <div class="event" style="left: 10%;"></div>
        <div class="event-label" style="left: 10%;">Fundação (2005)</div>
        <div class="event" style="left: 30%;"></div>
        <div class="event-label" style="left: 30%;">Expansão Nacional (2010)</div>
        <div class="event" style="left: 50%;"></div>
        <div class="event-label" style="left: 50%;">Lançamento de Novos Produtos (2015)</div>
        <div class="event" style="left: 70%;"></div>
        <div class="event-label" style="left: 70%;">Parceria Global (2018)</div>
        <div class="event" style="left: 90%;"></div>
        <div class="event-label" style="left: 90%;">Hoje</div>
    </div>
</body>
</html>
