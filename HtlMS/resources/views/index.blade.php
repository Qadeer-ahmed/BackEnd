<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <!-- Add these lines to your layout file (e.g., resources/views/layouts/app.blade.php) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>
<body>
  
    <div class="container">
        <h2>Create/Update Hotel</h2>
        <div class="row">
            <div class="col-md-6">
                <form action=" " method="POST">
                    @csrf
                    @if (isset($hotel))
                        @method('PUT')
                    @endif
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($hotel) ? $hotel->name : '') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address:</label>
                        <input type="text" id="address" name="address" class="form-control" value="{{ old('address', isset($hotel) ? $hotel->address : '') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="location" class="form-label">Location:</label>
                        <input type="text" id="location" name="location" class="form-control" value="{{ old('location', isset($hotel) ? $hotel->location : '') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="contact_number" class="form-label">contact_number:</label>
                        <input type="number" id="contact_number" name="contact_number" class="form-control" value="{{ old('contact_number', isset($hotel) ? $hotel->contact_number : '') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">email:</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{ old('email', isset($hotel) ? $hotel->email : '') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">description:</label>
                        <input type="text" id="description" name="description" class="form-control" value="{{ old('description', isset($hotel) ? $hotel->description : '') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="rooms" class="form-label">rooms:</label>
                        <input type="number" id="rooms" name="rooms" class="form-control" value="{{ old('rooms', isset($hotel) ? $hotel->rooms : '') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="facilities" class="form-label">facilities:</label>
                        <input type="text" id="facilities" name="facilities" class="form-control" value="{{ old('facilities', isset($hotel) ? $hotel->facilities : '') }}" required>
                        {{-- <select name="facilities[]"  multiple='multiple'>
                            <option value="Wifi">Wifi</option>
                            <option value="AC">AC</option>
                            <option value="Heater">Heater</option>
                            <option value="laundry">laundry</option> --}}

                        </select>
                    </div>

                    <!-- Add other form fields here -->

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">{{ isset($hotel) ? 'Update' : 'Create' }} Hotel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    


     <div class="container">
        <h2>Hotel List</h2>
        <div class="row">
            {{-- <div class="col-md-6"> --}}
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Location</th>
                            <th>Contact Number</th>
                            <th>Email</th>
                            <th>Description</th>
                            <th>Rooms</th>
                            <th>Facilities</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                         @foreach ($hotels as $hotel) 
                            <tr>
                                <td>{{ $hotel->name }}</td>
                                <td>{{ $hotel->address }}</td>
                                <td>{{ $hotel->location }}</td>
                                <td>{{ $hotel->contact_number }}</td>
                                <td>{{ $hotel->email }}</td>
                                <td>{{ $hotel->description }}</td>
                                <td>{{ $hotel->rooms }}</td>
                                <td>{{ $hotel->facilities }}</td>
                                <div>
                                  
                                </div>
                                <td>
                                    <a href="{{url('/edit',$hotel->id)}}" class="btn btn-warning">Edit</a>
                                    <form action="" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                       <a href="{{url('/delete',$hotel->id)}}"  class="btn btn-danger" >delete</a>
                                      
                                    </form>
                                </td>
                            </tr>
                         @endforeach 
                       
                    </tbody>
                </table>
                <div>  <a href=" {{ route('hotel.show') }}" class="btn btn-info"> hotels summery</a></div>
            </div>
        </div>
    </div> 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-d7I/Dp8Mz9l2R9Xxjtd2iEUsKSW21fBh7a5zD1+2CyHQp1zLg2LCEUvx4zEDXSbH" crossorigin="anonymous"></script>

    
</body>
</html>