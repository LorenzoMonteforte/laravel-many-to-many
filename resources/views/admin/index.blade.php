<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
    <a href="{{ route('admin.portfolios.create') }}">Aggiungi</a>
    @for ($i=0; $i<sizeof($portfolios); $i++)
        <div>{{ $portfolios[$i]["title"] }}</div>
        <div>{{ $portfolios[$i]["description"] }}</div>
        <img src="{{ $portfolios[$i]["thumb"] }}" alt="">
        <a href="{{ route('admin.portfolios.edit', $portfolios[$i]['id'] ) }}">Modifica</a>
        <form action="{{ route('admin.portfolios.destroy', $portfolios[$i]['id'] ) }}" method="POST">
            @csrf
            @method("DELETE")
            <input type="submit" value="Elimina">
        </form>
    @endfor
</body>
</html>