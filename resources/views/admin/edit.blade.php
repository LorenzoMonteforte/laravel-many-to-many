<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('admin.portfolios.update', $new_portfolio->id) }}" method="POST">
    @csrf
    @method("PUT")
    <input name="title" type="text" value="{{ $new_portfolio->title }}">
    <input name="description" type="text" value="{{ $new_portfolio->description }}">
    <input name="thumb" type="text" value="{{ $new_portfolio->thumb }}">
    <input type="submit" value="Inserisci">
    </form>
</body>
</html>