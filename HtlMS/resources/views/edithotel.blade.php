<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    


        <h2>Edit Hotel</h2>
        
        <div class="row">
            <div class="col-md-6">
                
                    
                
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{$hotel->name}}"required>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address:</label>
                        <input type="text" id="address" name="address" class="form-control" value="{{$hotel->address}}" required>
                    </div>

                    <div class="mb-3">
                        <label for="location" class="form-label">Location:</label>
                        <input type="text" id="location" name="location" class="form-control" value="{{$hotel->location}}" required>
                    </div>

                    <div class="mb-3">
                        <label for="contact_number" class="form-label">Contact Number:</label>
                        <input type="text" id="contact_number" name="contact_number" class="form-control" value="{{$hotel->contact_number}}" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{$hotel->email}}" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description:</label>
                        <textarea id="description" name="description" class="form-control" value="{{$hotel->description}}" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="rooms" class="form-label">Number of Rooms:</label>
                        <input type="number" id="rooms" name="rooms" class="form-control" value="{{$hotel->rooms}}" required>
                    </div>

                    <div class="mb-3">
                        <label for="facilities" class="form-label">Facilities:</label>
                        <textarea id="facilities" name="facilities" class="form-control" value="{{ $hotel->facilities}}"></textarea>
                    </div>

                    <div class="mb-3">
                        <button f type="submit" class="btn btn-primary">Update Hotel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>
</html>