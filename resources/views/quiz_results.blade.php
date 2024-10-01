<!DOCTYPE html>
<html lang="en">
@auth
    @include('partials.header')


    <body class="body">
        <div class='loggedInBody'>
            <div class="quiz-results">
                <h1>Your Quiz Results</h1>
                <p>Your score is: {{ $score }} / {{ $NumberofQuestions }}</p>
                <p>Your result in percentage: {{ $percentage }}%</p>
                <p>You answered: {{ $NumberofAnswered }} out of {{ $NumberofQuestions }} questions</p>

                <ul>
                    @foreach ($questions as $index => $question)
                        <li>
                            <strong>{{ $question->Questions }}</strong><br>
                            The correct answer is: {{ $CorrectAnswers[$index]->Answer }}<br>
                            Your answer:
                            @if ($chosenOptions[$question->ID] == $CorrectAnswers[$index]->Answer)
                                <span class="correct">Right!</span>
                            @else
                                {{ $chosenOptions[$question->ID] }}
                            @endif
                        </li>
                    @endforeach
                </ul>

                <!-- Redo Quiz Button -->
                <button onclick="window.history.back()">Retake the Quiz</button>
            </div>
        </div>
    </body>
    @include('partials.footer')

    </html>
@endauth
