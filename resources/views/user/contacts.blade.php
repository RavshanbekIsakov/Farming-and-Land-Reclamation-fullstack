@extends('user.header_footer2')

@section('main')
    <section class="section breadcrumb-section">
        <div class="w-layout-blockcontainer container w-container">
            <div class="breadcrumb-info-block">
                <a href="{{ route('user.index') }}" class="breadcrumb-link">Bosh sahifa </a>
                |
                <a href="#" class="breadcrumb-link">Aloqa</a></div>
        </div>
    </section>
    <section class="section contact-us-section">
        <div class="w-layout-blockcontainer container w-container">
            <div class="w-layout-grid contact-us-grid">
                <div id="w-node-_1cab6429-3bd3-e009-d04a-4de68a9777f5-6a34701a" data-w-id="1cab6429-3bd3-e009-d04a-4de68a9777f5" class="contact-us-left-side">
                    <img src="images/653c8b8a747d3823e3bd37f3_Mask%20group.png" sizes="(max-width: 479px) 94vw, (max-width: 767px) 96vw, (max-width: 991px) 97vw, (max-width: 1339px) 98vw, 1313px" srcset="images/653c8b8a747d3823e3bd37f3_Mask%20group-p-500.png 500w, images/653c8b8a747d3823e3bd37f3_Mask%20group.png 800w, images/653c8b8a747d3823e3bd37f3_Mask%20group.png 1080w, images/653c8b8a747d3823e3bd37f3_Mask%20group.png 1313w" alt="image" class="contact-us-left-image">
                </div>
                <div id="w-node-bc324298-8862-0438-400b-b174e723eb00-6a34701a" data-w-id="bc324298-8862-0438-400b-b174e723eb00" class="contact-us-right-side">
                    <h3 class="contact-us-heading">Bog'lanish uchun</h3>
                    <div class="contact-us-info-block">
                        <div class="contact-icon-block">
                            <img src="images/653a2fa0b31a3977630eecef_Group.png" loading="lazy" alt="image" class="contact-icon">
                        </div>
                        <div class="contact-icon-info-block">
                            <h3 class="contact-icon-title">manzil:</h3>
                            <div class="contact-icon-sub-title">Toshkent viloyati, Qibray tumani, Universtitet ko'chasi, Toshkent Davlat Agrar Universtiteti</div>
                        </div>
                    </div>
                    <div class="contact-us-info-block center">
                        <div class="contact-icon-block">
                            <img src="images/653a2f9fb31a3977630eecd8_Group%20579.png" loading="lazy" alt="image" class="contact-icon">
                        </div>
                        <div class="contact-icon-info-block">
                            <h3 class="contact-icon-title">Qo'ng'iroq qiling:</h3>
                            <a href="tel:+998901384433" class="contact-icon-sub-title">+998901384433</a>
                        </div>
                    </div>
                    <div class="contact-us-info-block">
                        <div class="contact-icon-block">
                            <img src="images/653a2fa0f6a2ed1863e68731_Group%20580.png" loading="lazy" alt="image" class="contact-icon">
                        </div>
                        <div class="contact-icon-info-block">
                            <h3 class="contact-icon-title">email orqali yozish:</h3>
                            <a href="mailto:risakov0809@gmail.com" class="contact-icon-sub-title">risakov0809@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section contact-form-section">
        <div class="w-layout-blockcontainer container w-container">
            <div class="w-layout-grid contact-form-grid">
                <div id="w-node-e31f0b36-7b62-19bd-9019-b6f57adedb89-6a34701a" class="contact-form-left-side">
                    <h3 class="contact-form-heading"><span class="section-heading-span">Xabar</span> qoldiring</h3>
                    <div class="contact-form-block w-form">
                        <form id="contact" name="email-form" data-name="Email Form" method="get" class="contact-form" data-wf-page-id="653c85f848128e0b6a34701a" data-wf-element-id="0c77d879-ba91-802c-94e3-5c0920a133e8">
                            <div id="w-node-_0c77d879-ba91-802c-94e3-5c0920a133e9-6a34701a" class="field-block">
                                <input class="text-input w-input" maxlength="256" name="name" data-name="Name" placeholder="Ismingiz" type="text" id="name" required="">
                            </div>
                            <div id="w-node-_0c77d879-ba91-802c-94e3-5c0920a133eb-6a34701a" class="field-block">
                                <input class="text-input w-input" maxlength="256" name="email-3" data-name="Email 3" placeholder="Emailingiz" type="email" id="email-3" required="">
                            </div>
                            <div id="w-node-_0c77d879-ba91-802c-94e3-5c0920a133ed-6a34701a" class="field-block">
                                <input class="text-input w-input" maxlength="256" name="phone" data-name="Phone" placeholder="Telefon raqamingiz" type="tel" id="phone" required="">
                            </div>
                            <div id="w-node-_0c77d879-ba91-802c-94e3-5c0920a133ef-6a34701a" class="field-block">
                                <input class="text-input w-input" maxlength="256" name="Subject" data-name="Subject" placeholder="Murjaat mavzusi" type="text" id="Subject" required="">
                            </div>
                            <div id="w-node-_0c77d879-ba91-802c-94e3-5c0920a133f1-6a34701a" class="field-block">
                                <textarea placeholder="Xabar qoldirish" maxlength="5000" id="field" name="field" data-name="Field" class="text-input form w-input"></textarea></div>
                            <input type="submit" data-wait="Please wait..." id="w-node-_0c77d879-ba91-802c-94e3-5c0920a133f3-6a34701a" class="button w-button" value="Submit Now">
                        </form>
                        <div class="w-form-done">
                            <div>Rahmat, xabaringiz yuborildi!</div>
                        </div>
                        <div class="w-form-fail">
                            <div>Oops! Nimadir noto'g'ri ketti!</div>
                        </div>
                    </div>
                </div>
                <div data-w-id="d5cbb3d6-432d-9d35-941c-3b232540f807" class="google-map">
                    <div class="map w-embed w-iframe">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4359.078918146259!2d69.34161253299456!3d41.36134692545785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38aef3840f7be271%3A0xdb32d0828ee7ab8c!2z0KLQsNGI0LrQtdC90YLRgdC60LjQuSDQk9C-0YHRg9C00LDRgNGB0YLQstC10L3QvdGL0Lkg0JDQs9GA0LDRgNC90YvQuSDQo9C90LjQstC10YDRgdC40YLQtdGC!5e0!3m2!1sru!2s!4v1711657489960!5m2!1sru!2s" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
