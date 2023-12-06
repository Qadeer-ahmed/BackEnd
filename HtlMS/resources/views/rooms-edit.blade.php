<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Rooms</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    
<div class="container mt-5">
    <h2>Edit Room</h2>

    <!-- Form for editing room details -->
    <form action="{{ route('rooms.update', $room->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Use PUT method for update -->

        <!-- Hotel ID -->
        <div class="form-group">
            <label for="hotel_id">Hotel ID:</label>
            <input type="text" class="form-control" id="hotel_id" name="hotel_id" value="{{ old('hotel_id', $room->hotel_id) }}" required>
        </div>

        <!-- Room Number -->
        <div class="form-group">
            <label for="room_number">Room Number:</label>
            <input type="text" class="form-control" id="room_number" name="room_number" value="{{ old('room_number', $room->room_number) }}" required>
        </div>

        <!-- Floor -->
        <div class="form-group">
            <label for="floor">Floor:</label>
            <input type="number" class="form-control" id="floor" name="floor" value="{{ old('floor', $room->floor) }}" required>
        </div>

        <!-- Status -->
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" class="form-control" id="status" name="status" value="{{ old('status', $room->status) }}" required>
        </div>

        <!-- Description -->
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description">{{ old('description', $room->description) }}</textarea>
        </div>

        <!-- Price per Night -->
        <div class="form-group">
            <label for="price_per_night">Price per Night:</label>
            <input type="text" class="form-control" id="price_per_night" name="price_per_night" value="{{ old('price_per_night', $room->price_per_night) }}" required>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>


</body>
</html>