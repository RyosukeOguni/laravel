<!DOCTYPE html>
<html>
<head>
</head>
<body>
    @for ($i = 0; $i < 10; $i++)
        @if ($i==5)
        <p>100</p>
        @else
        <p>{{$i}}</p>
        @endif
    @endfor
</body>
</html>