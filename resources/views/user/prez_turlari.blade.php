@extends('user.header_footer2')

@section('main')

    <section class="section breadcrumb-section">
        <div class="w-layout-blockcontainer container w-container">
            <div class="breadcrumb-info-block">
                <a href="{{ route('user.index') }}" class="breadcrumb-link">Bosh sahifa </a>|
                <a href="#" class="breadcrumb-link">Prezentatsiya turlari</a></div>
        </div>
    </section>
    <section class="section">
        <div class="w-layout-blockcontainer container w-container">
            <div data-w-id="12a34fd4-70dc-e61d-9cde-bbb0997ddb3f" class="blog-collection-list-wrapper w-dyn-list">
                <div role="list" class="blog-single-collection-list w-dyn-items">
                    <div role="listitem" class="blog-collection-item w-dyn-item">
                        <div class="blog-single-main-block">
                            <div id="w-node-_12a34fd4-70dc-e61d-9cde-bbb0997ddb48-39340b82" class="blog-info">
                                <a href="{{ route('user.deh_prez') }}" class="blog-title-link w-inline-block">
                                    <h3 class="blog-single-title">Dehqonchilik bo'yicha prezentatsiyalar</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="list" class="blog-single-collection-list w-dyn-items">
                    <div role="listitem" class="blog-collection-item w-dyn-item">
                        <div class="blog-single-main-block">
                            <div id="w-node-_12a34fd4-70dc-e61d-9cde-bbb0997ddb46-39340b82" class="blog-info">
                                <a href="{{ route('user.mel_prez') }}" class="blog-title-link w-inline-block">
                                    <h3 class="blog-single-title">Melioratsiya bo'yicha prezentatsiyalar</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
