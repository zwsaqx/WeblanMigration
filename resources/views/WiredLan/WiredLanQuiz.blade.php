<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>WiredLan Quiz</h1>

<form method="POST" action="/SubmitQuiz">
    @csrf
    @foreach ($WRDquizzes as $WRDquiz)
        <div>
            <p>{{ $WRDquiz->Questions }}</p>
            <input type="radio" id="option1" name="WRDquiz{{ $WRDquiz->ID }}" value="{{$WRDquiz->Option1}}">
            <label for="option1">{{ $WRDquiz->Option1 }}</label><br>
            <input type="radio" id="option2" name="WRDquiz{{ $WRDquiz->ID }}" value="{{$WRDquiz->Option2}}">
            <label for="option2">{{ $WRDquiz->Option2 }}</label><br>
            <input type="radio" id="option3" name="WRDquiz{{ $WRDquiz->ID }}" value="{{$WRDquiz->Option3}}">
            <label for="option3">{{ $WRDquiz->Option3 }}</label><br>
            <input type="radio" id="option4" name="WRDquiz{{ $WRDquiz->ID }}" value="{{$WRDquiz->Option4}}">
            <label for="option4">{{ $WRDquiz->Option4 }}</label><br>
        </div>
        <br>
    @endforeach
    <input type="submit" value="SubmitQuiz">
</form>
    
</body>
</html>