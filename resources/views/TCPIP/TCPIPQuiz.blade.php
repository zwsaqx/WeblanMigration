<!DOCTYPE html>
<html lang="en">
    @auth
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>TCP/IP Quiz</h1>
    <form method="POST" action="/SubmitQuiz">
        @csrf
        @foreach ($TIquizzes as $TIquiz)
            <div>
                <p>{{ $TIquiz->Questions }}</p>
                <input type="radio" id="option1" name="TIquiz{{ $TIquiz->ID }}" value="{{$TIquiz->Option1}}">
                <label for="option1">{{ $TIquiz->Option1 }}</label><br>
                <input type="radio" id="option2" name="TIquiz{{ $TIquiz->ID }}" value="{{$TIquiz->Option2}}">
                <label for="option2">{{ $TIquiz->Option2 }}</label><br>
                <input type="radio" id="option3" name="TIquiz{{ $TIquiz->ID }}" value="{{$TIquiz->Option3}}">
                <label for="option3">{{ $TIquiz->Option3 }}</label><br>
                <input type="radio" id="option4" name="TIquiz{{ $TIquiz->ID }}" value="{{$TIquiz->Option4}}">
                <label for="option4">{{ $TIquiz->Option4 }}</label><br>
            </div>
            <br>
        @endforeach
        <input type="submit" value="SubmitQuiz">
    </form>
</body>
@else
<meta http-equiv="refresh" content="0; URL=/">
@endauth
</html>