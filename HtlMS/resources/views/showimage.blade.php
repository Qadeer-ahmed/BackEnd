<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Images</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    


        <h2>Images Gallery</h2>

        <div class="row">
            @foreach($images as $image)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('storage/' . $image->filename) }}" class="card-img-top" alt="{{ $image->alt_text }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $image->caption }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    
</body>
</html>