<!DOCTYPE html>
<html lang="en">
<script type="text/javascript" src="{{ URL::asset('js/Quiz.js') }}"></script>

{{-- <script> src="{{asset('js/Quiz.js')}}"</script> --}}

<head>
    {{-- <script type="text/javascript" src="{{ URL::asset('js/Quiz.js') }}"></script> --}}
</head>


@auth
    @include('partials.header')

    <body class="body">
        <div class='loggedInBody'>
            <h1 class="header1">Bluetooth Quiz</h1>
            <form method="POST" action="/SubmitQuiz" onsubmit="handleSubmit(event)">
                @csrf
                @foreach ($BTquizzes as $BTquiz)
                    <div>
                        <p>{{ $BTquiz->Questions }}</p>
                        <input type="radio" id="option1" name="BTquiz{{ $BTquiz->ID }}" value="{{ $BTquiz->Option1 }}">
                        <label for="option1">{{ $BTquiz->Option1 }}</label><br>
                        <input type="radio" id="option2" name="BTquiz{{ $BTquiz->ID }}"
                            value="{{ $BTquiz->Option2 }}">
                        <label for="option2">{{ $BTquiz->Option2 }}</label><br>
                        <input type="radio" id="option3" name="BTquiz{{ $BTquiz->ID }}"
                            value="{{ $BTquiz->Option3 }}">
                        <label for="option3">{{ $BTquiz->Option3 }}</label><br>
                        <input type="radio" id="option4" name="BTquiz{{ $BTquiz->ID }}"
                            value="{{ $BTquiz->Option4 }}">
                        <label for="option4">{{ $BTquiz->Option4 }}</label><br>
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
