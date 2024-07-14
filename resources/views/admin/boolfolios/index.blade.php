<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Index 1</h1>
    @foreach ($boolfolios as $boolfolio)
        <li>
            <h2>{{ $boolfolio->nome }}</h2>
            <p><strong>Autore:</strong> {{ $boolfolio->autore }}</p>
            <p><strong>Descrizione:</strong> {{ $boolfolio->descrizione }}</p>
            <p><strong>Inizio:</strong> {{ $boolfolio->inizio }}</p>
            <p><strong>Fine:</strong> {{ $boolfolio->fine }}</p>
        </li>
    @endforeach
</body>

</html>
