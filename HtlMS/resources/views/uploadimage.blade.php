<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>upoad image</title>
</head>
<body>
    <!-- resources/views/images/create.blade.php -->
    @if($errors)
    @foreach ($errors as $error)
        <p>{{$error}}</p>
    @endforeach
    @endif
    
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Upload Image') }}</div>

                    <div class="card-body">
                        <form action="{{ route('image.upload') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="hotel_id">Hotel:</label>
                                <select name="hotel_id" id="hotel_id" class="form-control">
                                    <!-- Populate this dropdown with hotels from your database -->
                                    <!-- Example: -->
                                    <option value="1">Hotel A</option>
                                    <option value="2">Hotel B</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" name="image" class="form-control-file">
                            </div>

                            <div class="form-group">
                                <label for="caption">Caption:</label>
                                <input type="text" name="caption" class="form-control" placeholder="Enter caption">
                            </div>

                            <div class="form-group">
                                <label for="alt_text">Alt Text:</label>
                                <input type="text" name="alt_text" class="form-control" placeholder="Enter alt text">
                            </div>

                            <button type="submit" class="btn btn-primary">Upload Image</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    


</body>
</html>