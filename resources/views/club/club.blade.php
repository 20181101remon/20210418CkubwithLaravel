<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club</title>
</head>
<body>
    @if(count($clubInfo)>0)
        @foreach($clubInfo as $p)
            <h3>{{$p->club_name}}</h3>
            <h3>{{$p->club_fee}}</h3>
        @endforeach
    @else
        <p>Error</p>
    @endif

</body>
</html>