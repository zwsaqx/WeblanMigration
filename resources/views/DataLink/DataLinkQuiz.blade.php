<!DOCTYPE html>
<html lang="en">
<script type="text/javascript" src="{{ URL::asset('js/Quiz.js') }}"></script>
@auth
    @include('partials.header')

    <body class="body">
        <div class='loggedInBody'>
            <h1 class='header1'>Data Link Protocol Quiz</h1>
            <form method="POST" action="/SubmitQuiz" onsubmit="handleSubmit(event)">
                @csrf
                @foreach ($DLquizzes as $DLquiz)
                    <div>
                        <p>{{ $DLquiz->Questions }}</p>
                        <input type="radio" id="option1" name="DLquiz{{ $DLquiz->ID }}" value="{{ $DLquiz->Option1 }}">
                        <label for="option1">{{ $DLquiz->Option1 }}</label><br>
                        <input type="radio" id="option2" name="DLquiz{{ $DLquiz->ID }}"
                            value="{{ $DLquiz->Option2 }}">
                        <label for="option2">{{ $DLquiz->Option2 }}</label><br>
                        <input type="radio" id="option3" name="DLquiz{{ $DLquiz->ID }}"
                            value="{{ $DLquiz->Option3 }}">
                        <label for="option3">{{ $DLquiz->Option3 }}</label><br>
                        <input type="radio" id="option4" name="DLquiz{{ $DLquiz->ID }}"
                            value="{{ $DLquiz->Option4 }}">
                        <label for="option4">{{ $DLquiz->Option4 }}</label><br>
                    </div>
                    <br>
                @endforeach
                <input type="submit" value="Submit Quiz" class="button2" id="submitBtn" disabled>
            </form>

        </div>
    </body>
    @include('partials.footer')
@else
    <meta http-equiv="refresh" content="0; URL=/">
@endauth

</html>
