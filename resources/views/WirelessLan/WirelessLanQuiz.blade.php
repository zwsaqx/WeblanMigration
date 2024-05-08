<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Wireless Lan Quiz</h1>
    <form method="POST" action="/SubmitQuiz">
        @csrf
        @foreach ($WLquizzes as $WLquiz)
            <div>
                <p>{{ $WLquiz->Questions }}</p>
                <input type="radio" id="option1" name="WLquiz{{ $WLquiz->ID }}" value={{$WLquiz->Option1}}>
                <label for="option1">{{ $WLquiz->Option1 }}</label><br>
                <input type="radio" id="option2" name="WLquiz{{ $WLquiz->ID }}" value={{$WLquiz->Option2}}>
                <label for="option2">{{ $WLquiz->Option2 }}</label><br>
                <input type="radio" id="option3" name="WLquiz{{ $WLquiz->ID }}" value={{$WLquiz->Option3}}>
                <label for="option3">{{ $WLquiz->Option3 }}</label><br>
                <input type="radio" id="option4" name="WLquiz{{ $WLquiz->ID }}" value={{$WLquiz->Option4}}>
                <label for="option4">{{ $WLquiz->Option4 }}</label><br>
            </div>
            <br>
        @endforeach
        <input type="submit" value="SubmitQuiz">
    </form>
</body>
</html>