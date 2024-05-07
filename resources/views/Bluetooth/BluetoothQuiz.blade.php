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
        @foreach ($quizzes as $quiz)
            <div>
                <p>{{ $quiz->Questions }}</p>
                <input type="radio" id="option1" name="quiz{{ $quiz->ID }}" value={{$quiz->Option1}}>
                <label for="option1">{{ $quiz->Option1 }}</label><br>
                <input type="radio" id="option2" name="quiz{{ $quiz->ID }}" value={{$quiz->Option2}}>
                <label for="option2">{{ $quiz->Option2 }}</label><br>
                <input type="radio" id="option3" name="quiz{{ $quiz->ID }}" value={{$quiz->Option3}}>
                <label for="option3">{{ $quiz->Option3 }}</label><br>
                <input type="radio" id="option4" name="quiz{{ $quiz->ID }}" value={{$quiz->Option4}}>
                <label for="option4">{{ $quiz->Option4 }}</label><br>
            </div>
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