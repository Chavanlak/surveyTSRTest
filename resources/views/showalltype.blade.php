{{-- <!DOCTYPE html>
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
                <th>อิ้ง</th>
             
              
            </tr>
        </thead>
        <tbody>
            @foreach($question as $tt)
                <tr>
                    <td>{{$tt->questionNameTh}}</td>
                    <td>{{$tt->questionNameEn}}</td>
             
                 
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html> --}}
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายการคำถาม</title>
</head>
<body>
    <h1>รายการคำถาม</h1>

    @if ($questions->isNotEmpty())
        {{-- แสดงชื่อหมวดหมู่จากข้อมูลแถวแรก --}}
        <h2>{{ $questions->first()->typeNameTh }}</h2>

        <ul>
            @foreach ($questions as $question)
                <li>{{ $question->questionNameTh }}</li>
            @endforeach
        </ul>
    @else
        <p>ไม่พบข้อมูลคำถาม</p>
    @endif
</body>
</html>