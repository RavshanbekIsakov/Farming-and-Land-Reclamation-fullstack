@extends('user.header_footer2')

@section('main')
    <div class="container">
        <h2>Quiz Finished</h2>
        <p>Thank you for taking the quiz!</p>
        <p>You answered {{ $correctAnswers }} questions correctly and {{ $incorrectAnswers }} questions incorrectly.</p>
    </div>
@endsection
