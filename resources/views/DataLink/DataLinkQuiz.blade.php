<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Data Link Protocol Quiz</h1>
    <form method="POST" action="/SubmitQuiz">
        @csrf
        @foreach ($DLquizzes as $DLquiz)
            <div>
                <p>{{ $DLquiz->Questions }}</p>
                <input type="radio" id="option1" name="DLquiz{{ $DLquiz->ID }}" value={{$DLquiz->Option1}}>
                <label for="option1">{{ $DLquiz->Option1 }}</label><br>
                <input type="radio" id="option2" name="DLquiz{{ $DLquiz->ID }}" value={{$DLquiz->Option2}}>
                <label for="option2">{{ $DLquiz->Option2 }}</label><br>
                <input type="radio" id="option3" name="DLquiz{{ $DLquiz->ID }}" value={{$DLquiz->Option3}}>
                <label for="option3">{{ $DLquiz->Option3 }}</label><br>
                <input type="radio" id="option4" name="DLquiz{{ $DLquiz->ID }}" value={{$DLquiz->Option4}}>
                <label for="option4">{{ $DLquiz->Option4 }}</label><br>
            </div>
            <br>
        @endforeach
        <input type="submit" value="SubmitQuiz">
    </form>


</body>
</html>