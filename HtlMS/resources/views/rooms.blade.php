
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Form</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h1>Create A Room</h1>

<div class="container mt-5">
    <form action="{{ route('rooms.create') }}" method="POST">
        @csrf
        @method('POST')
        <!-- Hotel ID -->
        <div class="form-group">
            <label for="hotel_id">Hotel ID:</label>
            <input type="text" class="form-control" id="hotel_id" name="hotel_id" required>
        </div>

        <!-- Room Number -->
        <div class="form-group">
            <label for="room_number">Room Number:</label>
            <input type="text" class="form-control" id="room_number" name="room_number" required>
        </div>

        <!-- Floor -->
        <div class="form-group">
            <label for="floor">Floor:</label>
            <input type="number" class="form-control" id="floor" name="floor" required>
        </div>

        <!-- Status -->
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" class="form-control" id="status" name="status" required>
        </div>

        <!-- Description -->
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>

        <!-- Price per Night -->
        <div class="form-group">
            <label for="price_per_night">Price per Night:</label>
            <input type="text" class="form-control" id="price_per_night" name="price_per_night" required>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Hotel ID</th>
            <th>Room Number</th>
            <th>Floor</th>
            <th>Status</th>
            <th>Description</th>
            <th>Price per Night</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tbody>
            @foreach($rooms as $room)
            <tr>
                <td>{{ $room->id }}</td>
                <td>{{ $room->hotel_id }}</td>
                <td>{{ $room->room_number }}</td>
                <td>{{ $room->floor }}</td>
                <td>{{ $room->status }}</td>
                <td>{{ $room->description }}</td>
                <td>{{ $room->price_per_night }}</td>
                <td>
                    <!-- Edit button -->
                    <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-primary">Edit</a>

                    <!-- Delete button (use a form for proper HTTP method) -->
                    <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Include Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

</body>
</html>