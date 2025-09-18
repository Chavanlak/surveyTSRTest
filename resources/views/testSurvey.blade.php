<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>ไทย</th>
                {{-- <th>อิ้ง</th> --}}
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="2">
                    <h2>{{ $questionType->typeNameTh }}</h2>
                </td>
            </tr>
            @foreach ($question as $q)
                <tr>
                    <td>{{ $q->questionNameTh }}</td>
                    {{-- <td>{{ $q->questionNameEn }}</td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
  {{-- <td>{{$tt->questionNameTh}}</td> --}}
                    {{-- <td>{{$type->typeNameTh}}</td> --}}
             
                 {{-- {{$tt->questionType}}->{{$tt->questionNameTh}}<br>
                 {{$tt->questionType}}->{{$tt->questionNameEn}}<br> --}}