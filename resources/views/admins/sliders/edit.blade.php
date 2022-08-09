<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form enctype = "multipart/form-data" action="{{ route('create_slider') }}" method="post">
        @csrf
        <input type="text" name="title" value="{{$slider->title }}">
        <textarea name="description" id="" cols="30" rows="10">{{$slider->description }}</textarea>
        <input type="file" name="image" >
        <input type="submit" value="enregistrer">

    </form>
</body>
</html>