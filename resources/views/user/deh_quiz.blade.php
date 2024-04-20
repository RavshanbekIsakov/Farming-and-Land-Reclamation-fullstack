@extends('user.header_footer2')

@section('main')

    <div class="container">
        <h2>Quiz</h2>
        <h3>{{ $quiz->question }}</h3>

        <!-- Display quiz options -->
        <form method="POST" action="{{ route('submitAnswer') }}">
            @csrf
            <input type="hidden" name="quiz_id" value="{{ $quiz->id }}">

            @foreach(['option_a', 'option_b', 'option_c', 'option_d'] as $option)
                    <?php $isCorrectAnswer = $quizResults && $quizResults['correctAnswer'] === $quiz->$option; ?>
                    <?php $isUserAnswer = $quizResults && $quizResults['selectedAnswer'] === $quiz->$option; ?>
                <div style="color: {{ $isCorrectAnswer ? 'green' : ($isUserAnswer ? 'red' : 'black') }};">
                    <input type="radio" name="answer" value="{{ $option }}" id="{{ $option }}" {{ $isUserAnswer ? 'checked' : '' }}>
                    <label for="{{ $option }}">{{ $quiz->$option }}</label>
                </div>
            @endforeach

            <!-- Submit button -->
            @if (!$quizResults)
                <button type="submit">Submit</button>
            @else
                <button type="button" onclick="window.location.href='{{ route('showQuiz') }}'">Next</button>
            @endif
        </form>

        <!-- Timer -->
        <div>
            Time remaining: {{ $remainingTime }} minutes
        </div>

        <!-- Display user's score -->
        @if($quizResults)
            <p>Correct answers: {{ session('correct_answers') }}</p>
            <p>Incorrect answers: {{ session('incorrect_answers') }}</p>
        @endif
    </div>
    <script>
        let remainingTime = {{ $remainingTime * 60 }}; // Convert minutes to seconds

        function updateTimer() {
            if (remainingTime <= 0) {
                alert('Time is up!');
                window.location.href = "{{ route('quizFinished') }}";
                return;
            }

            // Calculate minutes and seconds
            const minutes = Math.floor(remainingTime / 60);
            const seconds = remainingTime % 60;

            // Update the timer display
            document.getElementById('timer').innerText = `Time remaining: ${minutes} minutes ${seconds} seconds`;

            // Decrement the remaining time by 1 second
            remainingTime--;

            // Call this function every second
            setTimeout(updateTimer, 1000);
        }

        // Start the timer
        updateTimer();
    </script>

    <div id="timer">Time remaining: {{ $remainingTime }} minutes</div>
@endsection
