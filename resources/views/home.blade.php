<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>
@foreach ($filtered_trains as $train)
<div class="col-3 my-5">
    <h5> Company: {{ $train->azienda }}</h5>
    <p>
        Departure station: {{ $train->stazione_di_partenza }}
        Arrival station: {{ $train->stazione_di_arrivo }}
    </p>

    <p>Train identification code: {{ $train->codice_treno }}</p>
    <p>Train carriages number: {{ $train->numero_carrozze }}</p>
    <p>In time: {{ $train->in_orario === 1 ? 'In time' : 'Delayed' }}</p>
    <p>state: {{ $train->cancellato === 1 ? 'Trip cancelled ' : 'Normal' }}</p>

</div>
@endforeach
</html>
