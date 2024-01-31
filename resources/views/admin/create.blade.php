<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('admin.portfolios.store') }}" method="POST">
    @csrf
    <input name="title" type="text" placeholder="Titolo">
    <input name="description" type="text" placeholder="Descrizione">
    <input name="thumb" type="text" placeholder="Percorso immagine">
    <input type="submit" value="Inserisci">
    </form>
</body>
</html>