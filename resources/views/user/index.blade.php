@extends('user.header_footer1')

@section('main')


<section class="section hero-section">
    <div class="w-layout-blockcontainer container-fluid w-container">
        <div class="w-layout-grid hero-grid">
            <img class="hero-left-image" src="images/yer2.jpg" alt="image" sizes="(max-width: 479px) 94vw, (max-width: 767px) 96vw, (max-width: 899px) 100vw, 899px" data-w-id="812263bd-1e8d-f739-a94f-ddae7c5a4ae7" id="w-node-_812263bd-1e8d-f739-a94f-ddae7c5a4ae7-f6a9a61e" loading="lazy" srcset="images/yer2.jpg 500w, images/yer2.jpg 800w, images/yer2.jpg 899w">
            <div id="w-node-f9be58eb-0529-59ff-68c7-7b38e424d817-f6a9a61e" data-w-id="f9be58eb-0529-59ff-68c7-7b38e424d817" class="hero-center-block">
                <div class="hero-title-section text-center">
                    <div class="hero-heading-section-block">
                        <h1 class="hero-heading">Dehqonchilik va Melioratsiya fani <br><span class="hero-heading-span">Elektron darsligi</span></h1>
                    </div>
                </div>
                <div class="hero-center-bottom-block">
                    <img src="images/652e3557532c272ff420c9d4_3.png"  alt="" class="hero-center-bottom-image">
                </div>
                <img src="images/652e35575665c60c9088cca1_png.png"  sizes="(max-width: 479px) 94vw, (max-width: 767px) 96vw, (max-width: 1029px) 100vw, 1029px" srcset="images/652e35575665c60c9088cca1_png.png 500w, images/652e35575665c60c9088cca1_png.png 800w, images/652e35575665c60c9088cca1_png.png 1029w" alt="image" class="hero-bg-image">
            </div>
            <img class="hero-right-image" src="images/652e3558a548181d84f04b4c_2.png" alt="image" sizes="(max-width: 479px) 94vw, (max-width: 767px) 96vw, (max-width: 953px) 100vw, 953px" data-w-id="84881a49-bd7b-b9d3-15d6-5ea151d8a39d" id="w-node-_84881a49-bd7b-b9d3-15d6-5ea151d8a39d-f6a9a61e" srcset="images/652e3558a548181d84f04b4c_2.png 500w, images/652e3558a548181d84f04b4c_2.png 800w, images/652e3558a548181d84f04b4c_2.png 953w">
        </div>
    </div>
</section>
<section class="section service-section section-smaller">
    <div class="w-layout-blockcontainer container w-container">
        <div data-w-id="f261a9bc-359c-d1f6-f558-5e5f72d83b5e" style="opacity:0" class="section-title-block text-center">
            <div class="section-heading-block center">
                <h2 class="section-heading text-white">Dehqonchilik va Melioratsiya darsligi<br>‍<span class="section-heading-span">Bo'limlari</span></h2>
            </div>
        </div>
        <div data-w-id="b1674f25-85f5-9fdd-f190-787293989133" class="service-slider-block">
            <div data-delay="4000" data-animation="slide" class="service-slider w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
                <div class="service-mask w-slider-mask">
                    <div class="service-slide w-slide">
                        <div class="service-collection-list-wrapper w-dyn-list">
                            <div role="list" class="service-collection-list w-dyn-items">
                                <div role="listitem" class="service-collection-item w-dyn-item">
                                    <div class="service-main-block">
                                        <a href="{{ route('user.maruza') }}" class="service-image-link w-inline-block">
                                            <img alt="image" loading="lazy" src="images/lecture.jpg" sizes="(max-width: 479px) 94vw, (max-width: 767px) 260px, (max-width: 991px) 360px, 436px" srcset="images/lecture.jpg 500w, images/lecture.jpg 657w" class="service-image one">
                                        </a>
                                        <div class="service-info-block">
                                            <a href="{{ route('user.maruza') }}" class="service-heading-link w-inline-block">
                                                <h3 class="service-heading">Ma'ruzalar</h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-slide w-slide">
                        <div class="service-collection-list-wrapper w-dyn-list">
                            <div role="list" class="service-collection-list w-dyn-items">
                                <div role="listitem" class="service-collection-item w-dyn-item">
                                    <div class="service-main-block">
                                        <a href="/services/organic-services" class="service-image-link w-inline-block">
                                            <img alt="image" loading="lazy" src="images/presentation.png" sizes="(max-width: 479px) 94vw, (max-width: 767px) 260px, (max-width: 991px) 360px, 436px" srcset="images/presentation.png 500w, images/presentation.png 657w" class="service-image">
                                        </a>
                                        <div class="service-info-block">
                                            <a href="/services/organic-services" class="service-heading-link w-inline-block">
                                                <h3 class="service-heading">Taqdimontlar</h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-slide w-slide">
                        <div class="service-collection-list-wrapper w-dyn-list">
                            <div role="list" class="service-collection-list w-dyn-items">
                                <div role="listitem" class="service-collection-item w-dyn-item">
                                    <div class="service-main-block">
                                        <a href="/services/agriculture-leader" class="service-image-link w-inline-block">
                                            <img alt="image" src="images/6538bee66b3dce952f12d4e7_5.png" sizes="(max-width: 479px) 100vw, (max-width: 767px) 260px, (max-width: 991px) 360px, 436px" srcset="images/6538bee66b3dce952f12d4e7_5.png 500w, images/6538bee66b3dce952f12d4e7_5.png 657w" class="service-image three">
                                        </a>
                                        <div class="service-info-block">
                                            <a href="/services/agriculture-leader" class="service-heading-link w-inline-block">
                                                <h3 class="service-heading">Amaliy mashg'ulot</h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-slide w-slide">
                        <div class="service-collection-list-wrapper w-dyn-list">
                            <div role="list" class="service-collection-list w-dyn-items">
                                <div role="listitem" class="service-collection-item w-dyn-item">
                                    <div class="service-main-block">
                                        <a href="/services/retail-agriculture" class="service-image-link w-inline-block">
                                            <img alt="image"  src="images/laboratory.jpg" sizes="(max-width: 479px) 100vw, (max-width: 767px) 260px, (max-width: 991px) 360px, 436px" srcset="images/laboratory.jpg 500w, images/laboratory.jpg 657w" class="service-image one">
                                        </a>
                                        <div class="service-info-block">
                                            <a href="/services/retail-agriculture" class="service-heading-link w-inline-block">
                                                <h3 class="service-heading">Labaratoriya mashg'ulotlari</h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-slide w-slide">
                        <div class="service-collection-list-wrapper w-dyn-list">
                            <div role="list" class="service-collection-list w-dyn-items">
                                <div role="listitem" class="service-collection-item w-dyn-item">
                                    <div class="service-main-block">
                                        <a href="/services/wholesale-trade" class="service-image-link w-inline-block">
                                            <img alt="image" loading="lazy" src="images/glossary.jpg" sizes="(max-width: 479px) 100vw, (max-width: 767px) 260px, (max-width: 991px) 360px, 436px" srcset="images/glossary.jpg 500w, images/glossary.jpg 657w" class="service-image">
                                        </a>
                                        <div class="service-info-block">
                                            <a href="/services/wholesale-trade" class="service-heading-link w-inline-block">
                                                <h3 class="service-heading">Glossari</h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-slide w-slide">
                        <div class="service-collection-list-wrapper w-dyn-list">
                            <div role="list" class="service-collection-list w-dyn-items">
                                <div role="listitem" class="service-collection-item w-dyn-item">
                                    <div class="service-main-block">
                                        <a href="tests_part.html" class="service-image-link w-inline-block">
                                            <img alt="image"  src="images/exam.png" sizes="(max-width: 479px) 94vw, (max-width: 767px) 260px, (max-width: 991px) 360px, 436px" srcset="images/exam.png 500w, images/exam.png 657w" class="service-image three">
                                        </a>
                                        <div class="service-info-block">
                                            <a href="tests_part.html" class="service-heading-link w-inline-block">
                                                <h3 class="service-heading">Test</h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-slide w-slide">
                        <div class="service-collection-list-wrapper w-dyn-list">
                            <div role="list" class="service-collection-list w-dyn-items">
                                <div role="listitem" class="service-collection-item w-dyn-item">
                                    <div class="service-main-block">
                                        <a href="{{ route('user.references') }}" class="service-image-link w-inline-block">
                                            <img alt="image" src="images/ref.jpg" sizes="(max-width: 479px) 94vw, (max-width: 767px) 260px, (max-width: 991px) 360px, 436px" srcset="images/ref.jpg 500w, images/ref.jpg 657w" class="service-image three">
                                        </a>
                                        <div class="service-info-block">
                                            <a href="{{ route('user.references') }}" class="service-heading-link w-inline-block">
                                                <h3 class="service-heading">Adabiyotlar</h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-left-arrow w-slider-arrow-left">
                    <div class="project-icon w-icon-slider-left"></div>
                </div>
                <div class="project-right-arrow w-slider-arrow-right">
                    <div class="project-icon w-icon-slider-right"></div>
                </div>
                <div class="project-slide-nav w-slider-nav"></div>
            </div>
        </div>
    </div>
</section>
<section class="section about-section">
    <div class="w-layout-blockcontainer container w-container">
        <img src="images/6530c173b421145fe51a7a1e_2.png"  sizes="(max-width: 479px) 100vw, 320px" srcset="images/6530c173b421145fe51a7a1e_2-p-500.png 500w, images/6530c173b421145fe51a7a1e_2-p-800.png 800w, images/6530c173b421145fe51a7a1e_2.png 827w" alt="image" class="about-vector-image-top">
        <div data-w-id="32067654-460f-7463-9c37-9b7e6337c58a" class="about-info-block">
            <img src="images/6530c1734f1e4949332fa678_3.png"  alt="image" class="about-icon">
            <h3 class="about-heading">Ushbu elektron darslik orqali <span class="section-heading-span">TDAU</span> Professorlari tomonidan ishlab chiqilgan testlar va darsliklar bilan tanishib chiqishingiz mumkin.</h3>
        </div>
        <img src="images/6530c175f5885d89e898cfdb_1.png"  sizes="(max-width: 479px) 100vw, 320px" srcset="images/6530c175f5885d89e898cfdb_1.png 500w, images/6530c175f5885d89e898cfdb_1.png 572w" alt="image" class="about-vector-image-bottom">
    </div>
</section>


<section id="about-us" class="section team-section">
    <div class="w-layout-blockcontainer container w-container">
        <div data-w-id="ecc95b4b-ca13-60ed-1e64-e61956e3aa2a" class="section-title-block text-center">
            <div class="section-heading-block center">
                <h2 class="section-heading">Elektron darslik mualliflari<br>‍<span class="section-heading-span">Professorlar</span></h2>
            </div>
        </div>
        <div data-w-id="1c23fc64-3d18-25e0-62d6-ddc722dfed07" class="w-layout-grid team-grid">
            <div class="team-list-wrapper w-dyn-list">
                <div role="list" class="team-list w-dyn-items">
                    <div role="listitem" class="team-list-item w-dyn-item">
                        <div data-w-id="f76f8214-2108-85c7-0151-3c66b95e33af" class="team-block center">
                            <div style="opacity:0" class="team-social-link-block">
                                <a href="tel:+9989" class="team-social-link">
                                    <img width="50" height="50" src="https://img.icons8.com/ios/50/phone--v1.png" alt="phone--v1"/>
                                </a>
                            </div>
                            <a href="/team/johane-redsa" class="team-image-link w-inline-block">
                                <img alt="image" loading="lazy" src="images/6539ef35fe903bed35e2f846_5.png" sizes="(max-width: 479px) 90vw, (max-width: 767px) 96vw, (max-width: 991px) 97vw, (max-width: 1439px) 98vw, 1370px" srcset="images/6539ef35fe903bed35e2f846_5-p-500.png 500w, images/6539ef35fe903bed35e2f846_5.png 657w" class="team-image">
                            </a>
                            <div class="team-info-block">
                                <a href="/team/johane-redsa" class="team-title-link w-inline-block">
                                    <h3 class="team-title">Norqulov Usmon</h3>
                                </a>
                                <div class="team-position">Qishloq xo‘jaligi fanlari doktori, professor</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-list-wrapper w-dyn-list">
                <div role="list" class="team-list w-dyn-items">
                    <div role="listitem" class="team-list-item w-dyn-item">
                        <div data-w-id="f76f8214-2108-85c7-0151-3c66b95e33af" class="team-block center">
                            <div style="opacity:0" class="team-social-link-block">
                                <a href="tel:+998901384433" class="team-social-link">
                                    <img width="50" height="50" src="https://img.icons8.com/ios/50/phone--v1.png" alt="phone--v1"/>
                                </a>
                            </div>
                            <a href="/team/johane-redsa" class="team-image-link w-inline-block">
                                <img alt="image" loading="lazy" src="images/6539ef35fe903bed35e2f846_5.png" sizes="(max-width: 479px) 90vw, (max-width: 767px) 96vw, (max-width: 991px) 97vw, (max-width: 1439px) 98vw, 1370px" srcset="images/6539ef35fe903bed35e2f846_5-p-500.png 500w, images/6539ef35fe903bed35e2f846_5.png 657w" class="team-image">
                            </a>
                            <div class="team-info-block">
                                <a href="/team/johane-redsa" class="team-title-link w-inline-block">
                                    <h3 class="team-title">Axmurzayev Shavkat Isakovich</h3>
                                </a>
                                <div class="team-position">Qishloq xo‘jaligi fanlari bo‘yicha falsafa doktori (PhD), dotsent</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
