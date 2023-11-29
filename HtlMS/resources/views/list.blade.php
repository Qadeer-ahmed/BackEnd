<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotels list</title>
</head>
<body>
    <!-- resources/views/hotels/list.blade.php -->

    <div class="container">
        <h2>Hotel List (Simplified)</h2>
        <ul class="list-group">
            @foreach ($hotels as $hotel)
                <li class="list-group-item">
                    <strong>Name:</strong> {{ $hotel->name }}<br>
                    <strong>Location:</strong> {{ $hotel->location }}<br>
                    <strong>Rooms:</strong> {{ $hotel->rooms }}<br>
                    <strong>address:</strong> {{ $hotel->address }}<br>
                     
                </li> 
            @endforeach
        </ul>
    </div>


</body>
</html>