@extends('user.header_footer2')


@section('main')

<style>
    .row{
      margin-top: 50px
    }
    .container{
        width: 100%;
        margin:auto
    }
    .video-container iframe{
        width:  450px;
        height: 315px
    }

    @media (max-width: 767px) {
        .video-container iframe{
        width:  350px;
        height: 315px
    }
    }

</style>

    <section class="section breadcrumb-section">
        <div class="w-layout-blockcontainer container w-container">
            <div class="breadcrumb-info-block">
                <a href="{{ route('user.index') }}" class="breadcrumb-link">Bosh sahifa </a>|
                <a href="#" class="breadcrumb-link">video darsliklar</a></div>
        </div>
    </section>
    <section class="row">
        <div class="container">
            <div class="video-container ">
                <iframe src="https://www.youtube.com/embed/92UXKNb2Mmo?si=GFMrYxqkr2nJ_1mf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <iframe  src="https://www.youtube.com/embed/h0C94l7w7Lw?si=JEYzi1asMEmgwjsa" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <iframe  src="https://www.youtube.com/embed/PTVd7DZhMQU?si=TVWlT8Xb9HAdnVOO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    
@endsection
