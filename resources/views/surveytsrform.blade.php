{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($questionType as $qq)
        <h2>{{ $qq->typeNameTh }}</h2>
        <ul>
            @foreach ($question as $q)
                @if ($q->questionType == $qq->questionTypeId)
                    <li>{{ $q->questionNameTh }}</li>
                @endif
            @endforeach
        </ul>
        
    @endforeach
</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($typeList as $type)
        <h2>{{ $type->typeNameTh }}</h2>
        @foreach ($questionList as $qustion)
            {{-- <input type="text" value="{{$qustion->questionId}}>{{$qustion->questionNameTh}}"> --}}
            {{-- {{ $qustion->questionType == $type->questionTypeId ? $qustion->questionNameTh : '' }} --}}
            {{$qustion->questionNameTh}} <br>
        @endforeach
    @endforeach
</body>

</html>
