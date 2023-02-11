<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($students as $student)
        <h3>{{ $student }}</h3>
    @endforeach
    <h1>Hello</h1>
    <p>{{ route('products') }}</p>
</body>
</html>