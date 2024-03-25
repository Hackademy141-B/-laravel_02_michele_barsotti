<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail di risposta</title>
</head>
<body>
    {{-- Per la nostra mail non possiamo utilizzare i componenti interni del nostro server poiché la mail viene visualizzata tramita altri server,quindi
    possiamo solo utilizzare al massimo delle CDN
    Su internet esistono moltissimi template di email che potreste utilizzare e personalizzare --}}
        <h1>Ciao {{$data['name']}} abbiamo ricevuto la tua mail, ti risponderemo al piú presto, all'indirizzo che ci hai fornito:</h1>
        <h2>{{$data['email']}}</h2>
        <h2>Il messaggio che abbiamo ricevuto é il seguente:</h2>
        <h3>{{$data['text']}}</h3>
</body>
</html>