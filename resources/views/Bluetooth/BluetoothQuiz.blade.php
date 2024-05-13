<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="/SubmitQuiz">
        @csrf
        @foreach ($BTquizzes as $BTquiz)
            <div>
                <p>{{ $BTquiz->Questions }}</p>
                <input type="radio" id="option1" name="BTquiz{{ $BTquiz->ID }}" value="{{$BTquiz->Option1}}">
                <label for="option1">{{ $BTquiz->Option1 }}</label><br>
                <input type="radio" id="option2" name="BTquiz{{ $BTquiz->ID }}" value="{{$BTquiz->Option2}}">
                <label for="option2">{{ $BTquiz->Option2 }}</label><br>
                <input type="radio" id="option3" name="BTquiz{{ $BTquiz->ID }}" value="{{$BTquiz->Option3}}">
                <label for="option3">{{ $BTquiz->Option3 }}</label><br>
                <input type="radio" id="option4" name="BTquiz{{ $BTquiz->ID }}" value="{{$BTquiz->Option4}}">
                <label for="option4">{{ $BTquiz->Option4 }}</label><br>
            </div>
            <br>
        @endforeach
        <input type="submit" value="SubmitQuiz">
    </form>
    



    {{-- <table>
        <tr>
            <th>Questions</th>
            <th>Answers</th>
            <!-- Add more columns as needed -->
        </tr>
        @foreach ($quizzes as $quiz)
        <tr>
            <td>{{ $quiz->Questions }}</td>
            <td>{{ $quiz->Answers }}</td>
            <!-- Add more fields as needed -->
        </tr>
        @endforeach
    </table> --}}
<?php


?>
</body>
</html>