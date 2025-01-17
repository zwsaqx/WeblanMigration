<!DOCTYPE html>
<html lang="en">
<script type="text/javascript" src="{{ URL::asset('js/Quiz.js') }}"></script>
@auth
    @include('partials.header')

    <body class="body">
        <div class='loggedInBody'>
            <h1 class='header1'>TCP/IP Quiz</h1>
            <form method="POST" action="/SubmitQuiz" onsubmit="handleSubmit(event)">
                @csrf
                @foreach ($TIquizzes as $TIquiz)
                    <div>
                        <p>{{ $TIquiz->Questions }}</p>
                        <input type="radio" id="option1" name="TIquiz{{ $TIquiz->ID }}" value="{{ $TIquiz->Option1 }}">
                        <label for="option1">{{ $TIquiz->Option1 }}</label><br>
                        <input type="radio" id="option2" name="TIquiz{{ $TIquiz->ID }}"
                            value="{{ $TIquiz->Option2 }}">
                        <label for="option2">{{ $TIquiz->Option2 }}</label><br>
                        <input type="radio" id="option3" name="TIquiz{{ $TIquiz->ID }}"
                            value="{{ $TIquiz->Option3 }}">
                        <label for="option3">{{ $TIquiz->Option3 }}</label><br>
                        <input type="radio" id="option4" name="TIquiz{{ $TIquiz->ID }}"
                            value="{{ $TIquiz->Option4 }}">
                        <label for="option4">{{ $TIquiz->Option4 }}</label><br>
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
