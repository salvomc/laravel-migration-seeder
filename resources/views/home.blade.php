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

<body>

<div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">Company</th>
                            <th class="text-center" scope="col">Departure Station</th>
                            <th class="text-center" scope="col">Arrival station</th>
                            <th class="text-center" scope="col">Departure time</th>
                            <th class="text-center" scope="col">Arrival time</th>
                            <th class="text-center" scope="col">Train code</th>
                            <th class="text-center" scope="col">Carriages number</th>
                            <th class="text-center" scope="col">In time</th>
                            <th class="text-center" scope="col">Cancelled</th>
                            <th class="text-center" scope="col">Departure date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($trains as $train)
                            @if($train->departure_date == '2023-07-26' && $train->cancelled == 0)   
                                <tr>
                                    <td>{{ $train->company }}</td>
                                    <td>{{ $train->departure_station }}</td>
                                    <td>{{ $train->arrival_station }}</td>
                                    <td>{{ $train->departure_time }}</td>
                                    <td>{{ $train->arrival_time }}</td>
                                    <td>{{ $train->train_code }}</td>
                                    <td>{{ $train->carriages_number }}</td>
                                    <td>@if($train->in_time == 1) in time
                                        @else <strong>late</strong>
                                        @endif
                                    </td>
                                    <td>@if($train->cancelled == 1) <strong>train cancelled</strong>
                                        @else train not cancelled
                                        @endif</td>
                                    <td>{{ $train->departure_date }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html> 