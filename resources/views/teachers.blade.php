<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <h1>Boolean's Teachers</h1>
        <ul>
        @foreach ($teachers as $teacher)
            <li>
                {{-- <p> <a href="{{route ('teachers')}}">{{$teacher}}</a></p> --}}
                  <p><a href="{{ route('teacher',['index' => $loop->index]) }}"> {{$teacher}} </a></p>
            </li>  
        @endforeach
        </ul>
    </div>
</body>
</html>