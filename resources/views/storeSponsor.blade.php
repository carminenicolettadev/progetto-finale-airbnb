<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sponsorizzazioni</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>


<body>

  <h1>Informare l'utente della data di scadenza della sua sponsorizzazione</h1>

  <h3>{{$costo}}</h3>
  <h3>{{$flatid}}</h3>
  <h3>{{$expiration}}</h3>
</body>
</html>
