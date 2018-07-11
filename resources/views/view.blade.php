<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <p>test</p>
    
    @if(Session::get('BeforeRoute') == 'queue-delay')
    <a href="/queue-delay">main</a>
    @elseif(Session::get('BeforeRoute') == 'queue-specify')
    <a href="/queue-specify">main</a>
    @elseif(Session::get('BeforeRoute') == 'null')
    <a href="/">main</a>
    @endif

    @if(Session::has('myVariable'))

    <div class="alert alert-success" role="alert">
        <strong>Success:</strong> {{ Session::get('myVariable') }}
    </div>

    @endif
</body>
</html>