
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Views</title>
</head>
<body>
    <h1>welcome to views.</h1>
    <p>{{$name}}</p>
    <p>{{$email}}</p>
    {{-- @switch()
        @case()

            @break

        @default

    @endswitch
    @while ()

    @endwhile
    @foreach ( as )

    @endforeach --}}
    @if ($name == 'xShekztech')
    <p>welcome</p>
    @else
    <p>not welcome</p>
    @endif
</body>
</html>
