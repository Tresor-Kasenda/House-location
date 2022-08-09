<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@foreach($sliders as $slider)
    <div class="col-md-4">
        <div class="card">
            <img src="{{ asset('storage/images/'.$slider->image) }}" alt="">
            <div class="card-body">
                <h5 class="card-title">{{ $slider->title }}</h5>
                <p class="card-text">{{ $slider->description }}</p>
                <a href="{{ route('edit_slider', $slider->id) }}" class="btn btn-primary">Edit</a>
                <a href="{{ route('delete_slider', $slider->id) }}" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
@endforeach
</body>
</html>