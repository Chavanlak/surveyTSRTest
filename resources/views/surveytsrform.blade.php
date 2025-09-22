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

{{-- ล่าสุด --}}
{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($typeList as $type)
        <h2>{{ $type->typeNameTh }}</h2>
        @foreach ($questionList as $questions)
            @foreach ($questions as $question)
                @if ($question->questiontypeId == $type->questionTypeId)
                    <li>{{ $question->questionNameTh }}</li>
                @endif

            @endforeach
            {{count($questions)}} <br>
        @endforeach

    @endforeach
</body>

</html> --}}

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .star-rating {
            direction: rtl;
            display: inline-flex;
        }

        .star-rating input {
            display: none;
        }

        .star-rating label {
            cursor: pointer;
            font-size: 28px;
            color: #ccc;
            transition: color 0.2s;
        }


        .star-rating label:hover,
        .star-rating label:hover ~ label {
            color: gold;
        }


        .star-rating input:checked ~ label {
            color: gold;
        }
    </style>
</head>

<body>
    @foreach ($typeList as $type)
        <h2>{{ $type->typeNameTh }}</h2>

        @foreach ($questionList as $questions)
            @foreach ($questions as $question)
                @if ($question->questiontypeId == $type->questionTypeId)
                    <li>{{ $question->questionNameTh }}</li>

                    <div class="rating-box">
                        <div class="star-rating">
                            @for ($i = 5; $i >= 1; $i--)
                                <input type="radio" id="star{{ $i }}-q{{ $question->questionId }}"
                                       name="rating_{{ $question->questionId }}" value="{{ $i }}">
                                <label for="star{{ $i }}-q{{ $question->questionId }}">
                                    <i class="fas fa-star"></i>
                                </label>
                            @endfor
                        </div>
                        <div class="mt-3">
                            <span id="rating-value-{{ $question->questionId }}"></span>
                        </div>
                    </div>
                @endif
            @endforeach
        @endforeach
    @endforeach

    <script>
        document.querySelectorAll('.star-rating input').forEach(input => {
            input.addEventListener('change', function () {
                const qid = this.name.split("_")[1];
                document.getElementById("rating-value-" + qid).innerText = this.value;
            });
        });
    </script>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .star-rating {
            direction: rtl;
            display: inline-flex;
        }

        .star-rating input {
            display: none;
        }

        .star-rating label {
            cursor: pointer;
            font-size: 28px;
            color: #ccc;
            transition: color 0.2s;
        }


        .star-rating label:hover,
        .star-rating label:hover~label {
            color: gold;
        }


        .star-rating input:checked~label {
            color: gold;
        }
    </style>
</head>

<body>
    <form action="/submit/survey" method="POST">
        @csrf
    @foreach ($typeList as $type)
        <h2>{{ $type->typeNameTh }}</h2>

        @foreach ($questionList as $questions)
            @foreach ($questions as $question)
                @if ($question->questiontypeId == $type->questionTypeId)
                    <li>{{ $question->questionNameTh }}</li>

                    <div class="rating-box">
                        <div class="star-rating">
                            {{-- @for ($i = 5; $i >= 1; $i--) --}}
                            @foreach ($scoreList->sortByDesc('scoreValueId') as $score)
                                {{-- วนจาก 5 → 1 --}}
                                <input type="radio"
                                    id="star{{ $score->scoreValueId }}-q{{ $question->questionId }}"name="{{ $question->questionId }}"
                                    value="{{ $score->scoreValueId }}" data-scorename="{{ $score->scoreName }}">

                                <label for="star{{ $score->scoreValueId }}-q{{ $question->questionId }}">
                                    <i class="fas fa-star" title="{{ $score->scoreName }}"></i>
                                </label>
                            @endforeach
                            {{-- @endfor --}}
                        </div>
                        <div class="mt-3">
                            <span id="rating-value-{{ $question->questionId }}"></span>
                        </div>
                    </div>
                @endif
            @endforeach
        @endforeach
    @endforeach
    <div class="section">
        <h2>ข้อเสนอแนะเพิ่มเติม (Additional Comments)</h2>
        <div class="form-group">
            <textarea id="comments" name="comments" rows="5"></textarea>
            <p>กรุณาแสดงความคิดเห็นหรือข้อเสนอแนะเพิ่มเติม เพื่อให้เราพัฒนาการบริการให้ดียิ่งขึ้น</p>
        </div>
    </div>

    <button type="submit">ส่งแบบสอบถาม</button>

</form>
    <script>
        // document.querySelectorAll('.star-rating input').forEach(input => {
        //     input.addEventListener('change', function () {
        //         const qid = this.name.split("_")[1];
        //         document.getElementById("rating-value-" + qid).innerText = this.value;
        //     });
        // });
        document.querySelectorAll('.star-rating input').forEach(input => {
            input.addEventListener('change', function() {
                const qid = this.name.split("_")[1];
                const scoreValue = this.value;
                const scoreName = this.dataset.scorename;
                document.getElementById("rating-value-" + qid).innerText =
                    scoreValue + " : " + scoreName;
            });
        });
    </script>
</body>

</html>
