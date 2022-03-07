<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Migration</title>
    {{-- ----CSS---- --}}
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

</head>
<body>
    <div class="container">
        <div class="jumbotron py-5">
            <h1>Bool Travel Agency - Our Packages</h1>
        </div>
        @foreach ($packages_travels as $pack)
        <div class="{{($loop->index%2==0) ? 'row silver' : 'row'}}">
            <h3>Pacchetto: {{$pack->travel_pack_name}}</h3>
            <p>Partenza da: {{$pack->departure}}</p>
            <p>Durata della vacanza: {{$pack->duration}}</p>
            <p>Hotel incluso: {{$pack->hotel}} - {{$pack->hotel_address}}</p>
            <p>Stelle Hotel {{$pack->hotel}}: @for ($i = 0; $i < $pack->hotel_stars; $i++)
                <i class="bi bi-star-fill"></i>
            @endfor</p>
            <p>Descrizione del pacchetto e servizi inclusi: </p>
            <p>{{$pack->description}}</p>
            <p><span class="badge rounded-pill bg-success ">{{$pack->price}} &euro;</span> Per i clienti dell'agenzia Bool</p>
        </div>
        @endforeach
    </div>
</body>
</html>
