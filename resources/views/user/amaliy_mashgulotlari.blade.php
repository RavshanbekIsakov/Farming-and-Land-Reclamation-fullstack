@extends('user.header_footer2')

@section('main')

    <section class="section breadcrumb-section">
        <div class="w-layout-blockcontainer container w-container">
            <div class="breadcrumb-info-block">
                <a href="{{ route('user.index') }}" class="breadcrumb-link">Bosh sahifa </a>|
                <a href="#" class="breadcrumb-link">Amaliy mashg'ulotlar</a></div>
        </div>
    </section>
    <section class="section">
        <div class="w-layout-blockcontainer container w-container">
            <div data-w-id="12a34fd4-70dc-e61d-9cde-bbb0997ddb3f" class="blog-collection-list-wrapper w-dyn-list">
                <div role="list" class="blog-single-collection-list w-dyn-items">
                    @foreach($amal_mash as $item)
                        <div role="listitem" class="blog-collection-item w-dyn-item">
                            <div class="blog-single-main-block">
                                <a id="w-node-_12a34fd4-70dc-e61d-9cde-bbb0997ddb46-39340b82" href="#" style="border: 1px solid black" class="blog-image-link w-inline-block">
                                    <img alt="image" loading="lazy" src="img/practical_trainings/{{ $item->practical_photo }}" sizes="(max-width: 479px) 94vw, (max-width: 767px) 40vw, (max-width: 991px) 41vw, (max-width: 1439px) 20vw, 276.421875px" srcset="img/practical_trainings/{{ $item->practical_photo }} 500w, img/practical_trainings/{{ $item->practical_photo }} 800w, img/practical_trainings/{{ $item->practical_photo }} 1080w, img/practical_trainings/{{ $item->practical_photo }} 1400w" class="blog-image">
                                </a>
                                <div id="w-node-_12a34fd4-70dc-e61d-9cde-bbb0997ddb48-39340b82" class="blog-info">
                                    <a href="books/{{ $item->practical_file }}" class="blog-title-link w-inline-block">
                                        <h3 class="blog-single-title">{{ $item->practical_name }}</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{ $amal_mash->links() }}
        </div>
    </section>


@endsection

