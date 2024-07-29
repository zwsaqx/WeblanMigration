<!DOCTYPE html>
<html lang="en">
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
                <input type="submit" value="SubmitQuiz" id="submitBtn" disabled>
            </form>






            <script>
                //After submission, the radio choices should be reset.
                function handleSubmit(event) {
                    event.preventDefault(); // Prevent the default form submission
                    const form = event.target;
                    form.submit(); // Submit the form
                    form.reset(); // Reset the form
                }


                document.addEventListener('DOMContentLoaded', function() {
                    const submitBtn = document.getElementById('submitBtn');
                    const radios = document.querySelectorAll('input[type="radio"]');

                    function checkRadios() {
                        let isChecked = false;
                        radios.forEach(radio => {
                            if (radio.checked) {
                                isChecked = true;
                            }
                        });
                        submitBtn.disabled = !isChecked;
                    }

                    radios.forEach(radio => {
                        radio.addEventListener('change', checkRadios);
                    });

                    // Check the state of the radio buttons on page load
                    checkRadios();
                });

                window.addEventListener('pageshow', function() {
                    const submitBtn = document.getElementById('submitBtn');
                    const radios = document.querySelectorAll('input[type="radio"]');

                    function checkRadios() {
                        let isChecked = false;
                        radios.forEach(radio => {
                            if (radio.checked) {
                                isChecked = true;
                            }
                        });
                        submitBtn.disabled = !isChecked;
                    }

                    radios.forEach(radio => {
                        radio.addEventListener('change', checkRadios);
                    });

                    // Check the state of the radio buttons on page load

                    checkRadios();
                });
            </script>
        </div>
    </body>
    @include('partials.footer')
@else
    <meta http-equiv="refresh" content="0; URL=/">
@endauth

</html>
