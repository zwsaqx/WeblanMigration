<!DOCTYPE html>
<script type="text/javascript" src="{{ URL::asset('js/Quiz.js') }}"></script>
@auth
    <html lang="en">
    @include('partials.header')

    <body class="body">
        <div class='loggedInBody'>
            <h1 class="header1">Wired Lan Quiz</h1>

            <form method="POST" action="/SubmitQuiz" onsubmit="handleSubmit(event)">
                @csrf
                @foreach ($WRDquizzes as $WRDquiz)
                    <div>
                        <p>{{ $WRDquiz->Questions }}</p>
                        <input type="radio" id="option1" name="WRDquiz{{ $WRDquiz->ID }}" value="{{ $WRDquiz->Option1 }}">
                        <label for="option1">{{ $WRDquiz->Option1 }}</label><br>
                        <input type="radio" id="option2" name="WRDquiz{{ $WRDquiz->ID }}"
                            value="{{ $WRDquiz->Option2 }}">
                        <label for="option2">{{ $WRDquiz->Option2 }}</label><br>
                        <input type="radio" id="option3" name="WRDquiz{{ $WRDquiz->ID }}"
                            value="{{ $WRDquiz->Option3 }}">
                        <label for="option3">{{ $WRDquiz->Option3 }}</label><br>
                        <input type="radio" id="option4" name="WRDquiz{{ $WRDquiz->ID }}"
                            value="{{ $WRDquiz->Option4 }}">
                        <label for="option4">{{ $WRDquiz->Option4 }}</label><br>
                    </div>
                    <br>
                @endforeach
                <input type="submit" value="SubmitQuiz" id="submitBtn" disabled>
            </form>
        </div>
    </body>

    @include('partials.footer')
@else
    <meta http-equiv="refresh" content="0; URL=/">
@endauth

</html>
