@extends('user.header_footer2')

@section('main')

{{--    <section class="section breadcrumb-section">--}}
{{--        <div class="w-layout-blockcontainer container w-container">--}}
{{--            <div class="breadcrumb-info-block">--}}
{{--                <a href="{{ route('user.index') }}" class="breadcrumb-link">Bosh sahifa </a>|--}}
{{--                <a href="#" class="breadcrumb-link">Test</a></div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    @foreach ($four as $id => $quiz)--}}
{{--        @if($quiz->photo != "no_photo")--}}
{{--            <div class="big_test">--}}
{{--                <section class="test">--}}
{{--                    <div class="test_questions">--}}
{{--                        <div>--}}
{{--                            <h2 class="test_request"><b>{{ $id+31 }}. </b> {{ $quiz->quiz }}</h2>--}}
{{--                            @foreach ($first_answer[$id] as $item)--}}
{{--                                <label>--}}
{{--                                    <input type="radio" name="answer{{ $id+31 }}" value="{{ $item->id }}">--}}
{{--                                    <span>{{ $item->answer }}</span>--}}
{{--                                </label>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="test_image">--}}
{{--                        <img src="../quiz_images/{{ $quiz->photo }}" alt="" class="test_img">--}}
{{--                    </div>--}}
{{--                </section>--}}
{{--            </div>--}}
{{--        @else--}}
{{--            <div class="small_tests">--}}
{{--                <section class="small_test">--}}
{{--                    <div>--}}
{{--                        <h2 class="test_title">{{ $id+31 }}. </b> {{ $quiz->quiz }}</h2>--}}
{{--                        @foreach ($first_answer[$id] as $item)--}}
{{--                            <label>--}}
{{--                                <input type="radio" name="answer{{ $id+31 }}" value="{{ $item->id }}">--}}
{{--                                <span>{{ $item->answer }}</span>--}}
{{--                            </label>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </section>--}}
{{--            </div>--}}
{{--        @endif--}}
{{--        <hr>--}}
{{--    @endforeach--}}


@endsection

