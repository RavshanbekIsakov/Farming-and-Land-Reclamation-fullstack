@extends('user.header_footer2')

@section('main')
    <div class="finished-quiz-container" style="align-items: center; text-align: center">
        <h2>test tugadi</h2>
        <p>Test ishlaganingiz uchun tashakkur!</p>
        <p>Siz 50ta savoldan <b><span class="correct-ans">{{ $correct }}</span></b>ta savolga to'gri javob berdingiz va <b><span class="incorrect-ans">{{ $incorrect }}</span></b>tasiga noto'g'ri javob berdingiz</p>
    </div>
@endsection
