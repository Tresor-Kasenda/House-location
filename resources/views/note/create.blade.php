<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('housenote.store') }}" method="post">
        @csrf
        <input type="number" placeholder="votre note" name="note" id="">
        <textarea name="note_comment" id="" cols="30" rows="10" placeholder="commentaires"></textarea>
        <input type="hidden" name="id_house" value="{{ $house_id }}">
        <input type="submit" value="envoyer">

    </form>
</body>
</html>