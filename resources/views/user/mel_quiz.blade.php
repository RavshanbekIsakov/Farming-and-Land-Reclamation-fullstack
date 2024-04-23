@extends('user.header_footer2')

@section('main')

    <section class="section breadcrumb-section">
        <div class="w-layout-blockcontainer container w-container">
            <div class="breadcrumb-info-block">
                <a href="{{ route('user.index') }}" class="breadcrumb-link">Bosh sahifa </a>|
                <a href="#" class="breadcrumb-link">Test</a></div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Melioratsiya Quiz</h1>
                <div id="quiz-container">
                    @foreach ($quizzes as $quiz)
                        <div class="quiz-question">
                            <h3>{{ $quiz->questions }}</h3>
                            <img src="{{ $quiz->question_photo ? asset('storage/' . $quiz->question_photo) : asset('img/no_photo.jpg') }}" alt="Question Image">
                            <div class="options">
                                <label><input type="radio" name="quiz-option" value="A">{{ $quiz->option_a }}</label><br>
                                <label><input type="radio" name="quiz-option" value="B">{{ $quiz->option_b }}</label><br>
                                <label><input type="radio" name="quiz-option" value="C">{{ $quiz->option_c }}</label><br>
                                <label><input type="radio" name="quiz-option" value="D">{{ $quiz->option_d }}</label><br>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button id="submit-btn" onclick="submitQuiz()">Submit</button>
                <div id="timer"></div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/quiz.js') }}"></script>
@endsection

