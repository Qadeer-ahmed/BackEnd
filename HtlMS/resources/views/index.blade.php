<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
</head>
<body>
    <H1>Create a new hotel</H1>
    <!-- resources/views/hotels/create.blade.php -->

    <div class="container">
        <h2>Create Hotel</h2>
        <form action="" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <br/>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            <br/>
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required>
            <br/>
            <label for="contact_number">Contact Number:</label>
            <input type="text" id="contact_number" name="contact_number" required>
            <br/>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br/>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
            <br/>
            <label for="rooms">Number of Rooms:</label>
            <input type="number" id="rooms" name="rooms" required>
            <br/>
            <label for="facilities">Facilities:</label>
            <textarea id="facilities" name="facilities"></textarea>
            <br/>
            <button type="submit">Create Hotel</button>
        </form>
    </div>


</body>
</html>