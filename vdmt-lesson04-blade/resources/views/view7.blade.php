<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @verbatim
        <pre>
            @if (count($arr) ===1)
                Have 1
            @elseif (count($arr) > 1)
                have multiple
            @else
                Have no
            @endif
        </pre>
    @endverbatim
    <h2>mang @{{$arr}} :</h2>
        @if (count($arr) ===1)
            Have 1
        @elseif (count($arr) > 1)
            have multiple
        @else
            Have no
        @endif
</body>
</html>