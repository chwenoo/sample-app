<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Articles</h3>
    {{-- @dd($articles); --}}

    <ul>
        @foreach ($articles as $article)
            <li>{{ $article['id'] }}</li>
            <li>{{ $article['name'] }}</li>
        @endforeach
    </ul>
</body>
</html>
