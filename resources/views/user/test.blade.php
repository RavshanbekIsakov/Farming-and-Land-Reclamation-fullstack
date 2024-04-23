@extends('user.header_footer2')

@section('main')

    <section class="section breadcrumb-section">
        <div class="w-layout-blockcontainer container w-container">
            <div class="breadcrumb-info-block">
                <a href="{{ route('user.index') }}" class="breadcrumb-link">Bosh sahifa </a>|
                <a href="#" class="breadcrumb-link">Test</a></div>
        </div>
    </section>

    <section class="section">
        @foreach ($four as $id => $quiz)
            @if($quiz->photo != "no_photo")
                <div class="big_test">
                    <section class="test">
                        <div class="test_questions">
                            <div>
                                <h2 class="test_request"><b>{{ $id+31 }}. </b> {{ $quiz->quiz }}</h2>
                                @foreach ($first_answer[$id] as $item)
                                    <label>
                                        <input type="radio" name="answer{{ $id+31 }}" value="{{ $item->id }}">
                                        <span>{{ $item->answer }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                        <div class="test_image">
                            <img src="../quiz_images/{{ $quiz->photo }}" alt="" class="test_img">
                        </div>
                    </section>
                </div>
            @else
                <div class="small_tests">
                    <section class="small_test">
                        <div>
                            <h2 class="test_title">{{ $id+31 }}. </b> {{ $quiz->quiz }}</h2>
                            @foreach ($first_answer[$id] as $item)
                                <label>
                                    <input type="radio" name="answer{{ $id+31 }}" value="{{ $item->id }}">
                                    <span>{{ $item->answer }}</span>
                                </label>
                            @endforeach
                        </div>
                    </section>
                </div>
            @endif
            <hr>
        @endforeach

    </section>
{{--    <section class="quiz-section">--}}
{{--        <div class="quiz-container">--}}
{{--            <div class="quiz-quest">--}}
{{--                <h4 class="quiz-question text-white">Isming nima?</h4>--}}
{{--            </div>--}}
{{--            <form id="contact"  data-name="quiz-variants" method="get" class="contact-form" data-wf-page-id="653c85f848128e0b6a34701a" data-wf-element-id="0c77d879-ba91-802c-94e3-5c0920a133e8">--}}
{{--                <div id="w-node-_0c77d879-ba91-802c-94e3-5c0920a133e9-6a34701a" class="field-block">--}}
{{--                    <select required name="quiz-variants" class="quiz-variants" >--}}
{{--                        <option value="0">Variantlardan birini tanlang:</option>--}}
{{--                        <option value="1">sacvskhjcvkjascaks c sldfhbaskhjcbs cgsckjhsvck sacuhsdvcjsa chsabcjsahbc skdcbsdkbcn schbsdklhcs dlsbdclms dc</option>--}}
{{--                        <option value="2">Ravshan</option>--}}
{{--                        <option value="3">Ravshan</option>--}}
{{--                        <option value="4">Ravshan</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </section>--}}




@endsection

