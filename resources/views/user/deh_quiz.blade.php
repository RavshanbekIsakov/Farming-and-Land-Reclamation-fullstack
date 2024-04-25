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
        <div id="timer"></div>
        <div class="row">
            <div class="col-md-12">
                <h1>Dehqonchilik Quiz</h1>
                <form method="POST" action="{{ route('user.quiz_check') }}">
                    @csrf
                    <div id="quiz-container">
                        @foreach ($tests as $count => $item)
                        <div class="quiz-question">
                            <h3>{{ $item->questions }}</h3>
                            <input type="hidden" name="question{{ $count+1 }}" value="{{ $item->id }}">
                            @if($item->question_photo !== 'no_photo')
                                <img src="{{ asset('img/quizzes/' . $item->question_photo) }}" alt="Question Image">
                            @endif
                            <div class="options">
                                <label><input type="radio" name="answer{{ $count+1 }}" value="{{ $item->option_a }}">{{ $item->option_a }}</label><br>
                                <label><input type="radio" name="answer{{ $count+1 }}" value="{{ $item->option_b }}">{{ $item->option_b }}</label><br>
                                <label><input type="radio" name="answer{{ $count+1 }}" value="{{ $item->option_c }}">{{ $item->option_c }}</label><br>
                                <label><input type="radio" name="answer{{ $count+1 }}" value="{{ $item->option_d }}">{{ $item->option_d }}</label><br>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <button id="submit-btn" type="submit" name="s1" value="submit">Submit</button>
                </form>

            </div>
        </div>
    </div>

    <script src="{{ asset('js/quiz.js') }}"></script>
@endsection
