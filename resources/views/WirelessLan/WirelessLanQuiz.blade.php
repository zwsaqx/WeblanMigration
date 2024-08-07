<!DOCTYPE html>
<script type="text/javascript" src="{{ URL::asset('js/Quiz.js') }}"></script>
@auth
    <html lang="en">
    @include('partials.header')

    <body class="body">
        <div class='loggedInBody'>
            <h1 class='header1'>Wireless Lan Quiz</h1>
            <form method="POST" action="/SubmitQuiz" onsubmit="handleSubmit(event)">
                @csrf
                @foreach ($WLquizzes as $WLquiz)
                    <div>
                        <p>{{ $WLquiz->Questions }}</p>
                        <input type="radio" id="option1" name="WLquiz{{ $WLquiz->ID }}" value="{{ $WLquiz->Option1 }}">
                        <label for="option1">{{ $WLquiz->Option1 }}</label><br>
                        <input type="radio" id="option2" name="WLquiz{{ $WLquiz->ID }}"
                            value="{{ $WLquiz->Option2 }}">
                        <label for="option2">{{ $WLquiz->Option2 }}</label><br>
                        <input type="radio" id="option3" name="WLquiz{{ $WLquiz->ID }}"
                            value="{{ $WLquiz->Option3 }}">
                        <label for="option3">{{ $WLquiz->Option3 }}</label><br>
                        <input type="radio" id="option4" name="WLquiz{{ $WLquiz->ID }}"
                            value="{{ $WLquiz->Option4 }}">
                        <label for="option4">{{ $WLquiz->Option4 }}</label><br>
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
