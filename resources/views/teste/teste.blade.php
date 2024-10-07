<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    
    @foreach(range(1, 10) as $i)
    
        <li>Teste {{ $i }}</li>

    @endforeach

</body>
</html>