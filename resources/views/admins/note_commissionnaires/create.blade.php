<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('best-commission.store') }}" method="post">
        @csrf
        <input type="number" name="note" placeholder="note">
        <input type="hidden" name="commissioner_id" value="{{ $commissioner_id }}">
        <input type="submit" value="submit">
    </form>
</body>
</html>