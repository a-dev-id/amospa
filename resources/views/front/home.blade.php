@push('css')
    <style>
        .text-transparent {
            background: rgba(0, 0, 0, 0.5);
        }

        .overlay-zoom {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(140, 93, 161, 0.5);
            overflow: hidden;
            width: 100%;
            height: 100%;
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
            -webkit-transition: .3s ease;
            transition: .3s ease;
        }

        .zoom:hover .overlay-zoom {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }

        .text-zoom {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .slick-prev {
            left: 10px;
            z-index: 1;
        }

        .slick-next {
            right: 10px;
            z-index: 1;
        }
    </style>
@endpush

@push('js')
    <script>
        $(document).ready(function() {
            $('.blog').slick({
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.review').slick({
                dots: true,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: false,
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.category').slick({
                dots: false,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                pauseOnHover: false,
            });
        });
    </script>

    <script>
        $('#readMore').click(function() {
            if ($(this).text() == 'Read Less') $(this).text('Read More');
            else $(this).text('Read Less');
        });
    </script>
@endpush

@section('page_title')
    {!! $page->sub_title !!}
@endsection
@section('page_description')
    {!! $page->description !!}
@endsection

@section('footer_social')
    <section class="container-fluid bg-dark-purple py-lg-3">
        <div class="text-center">
            <a href="{{ url($setting->facebook_url) }}">
                <img src="{{ asset('images/1485341118_06-facebook.png') }}" class="px-lg-2">
            </a>
            <a href="{{ url($setting->instagram_url) }}">
                <img src="{{ asset('images/1485341181_38-instagram.png') }}" class="px-lg-2">
            </a>
            <a href="{{ url($setting->tripadvisor_url) }}">
                <img src="{{ asset('images/tripadvisor-xxl-1.png') }}" class="px-lg-2">
            </a>
            <a href="{{ url($setting->youtube_url) }}">
                <img src="{{ asset('images/youtube-3.png') }}" class="px-lg-2">
            </a>
        </div>
    </section>
@endsection
<x-guest-layout>

    {{-- video header --}}
    <header>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="https://www.amospa.com/wp-content/uploads/2019/03/index.mp4" type="video/mp4">
        </video>
    </header>

    {{-- category --}}
    <section class="container mb-lg-5">
        <h1 class="text-uppercase text-center mt-5 fs-4">amo spa bali</h1>
        <hr class="text-black border-2 opacity-75 mb-5 mb-lg-4">

        <div class="row">
            @foreach ($salon as $data)
                <div class="col-12 col-lg-3 mb-2 px-lg-2 mb-lg-3">
                    <a href="{{ route('home.show', [$data->slug]) }}">
                        <div class="position-relative m-auto">
                            <div class="category">
                                @foreach ($data->page_images as $subdata)
                                    <div>
                                        <img src="{{ asset($subdata->image) }}" class="w-100">
                                    </div>
                                @endforeach
                            </div>
                            <div class="position-absolute bottom-0 text-transparent w-100 text-white text-center py-4">
                                <h2 class="p-0 m-0 fs-5 fw-bold">{{ $data->title }}</h2>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    {{-- gofood --}}
    <section class="container-fluid bg-purple text-center">
        <div class="container row m-auto">
            <div class="col-lg-6">
                <h2 class="my-lg-5 pt-lg-5">{{ $setting->gofood_title }}</h2>
                <img src="{{ asset($setting->gofood_logo) }}" class="m-auto">
                <p class="my-lg-4">
                    {!! $setting->gofood_description !!}
                </p>
                <a href="{{ $setting->gofood_button_link }}" class="btn btn-purple m-auto py-2 px-3 fw-bold text-uppercase">{{ $setting->gofood_button_text }}</a>
            </div>
            <div class="col-lg-6">
                <a href="{{ url($setting->gofood_banner_link) }}">
                    <div class="position-relative my-lg-5 zoom">
                        <img src="{{ $setting->gofood_banner }}" alt="Avatar" class="w-100">
                        <div class="overlay-zoom">
                            <div class="text-zoom text-uppercase fs-4 fw-bold">see our full menu</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- news & information --}}
    <section class="container px-4 py-5">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="row blog">
                    <div class="col-12 mb-2">
                        <div class="position-relative m-auto">
                            <img src="http://via.placeholder.com/400x250" class="w-100 align-middle">
                            <div class="position-absolute bottom-0 text-transparent w-100 text-white text-center text-lg-start px-lg-4 py-lg-3 py-4">
                                <h2 class="p-0 m-0 fs-5 fw-bold mb-lg-2">Heading</h2>
                                <div>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis, itaque deserunt nesciunt...
                                </div>
                                <a href="#" class="btn btn-outline-light px-lg-3 btn-sm mt-lg-2 py-lg-1">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-2">
                        <div class="position-relative m-auto">
                            <img src="http://via.placeholder.com/400x250" class="w-100 align-middle">
                            <div class="position-absolute bottom-0 text-transparent w-100 text-white text-center text-lg-start px-lg-4 py-lg-3 py-4">
                                <h2 class="p-0 m-0 fs-5 fw-bold mb-lg-2">Heading</h2>
                                <div>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis, itaque deserunt nesciunt...
                                </div>
                                <a href="#" class="btn btn-outline-light px-lg-3 btn-sm mt-lg-2 py-lg-1">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-2">
                        <div class="position-relative m-auto">
                            <img src="http://via.placeholder.com/400x250" class="w-100 align-middle">
                            <div class="position-absolute bottom-0 text-transparent w-100 text-white text-center text-lg-start px-lg-4 py-lg-3 py-4">
                                <h2 class="p-0 m-0 fs-5 fw-bold mb-lg-2">Heading</h2>
                                <div>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis, itaque deserunt nesciunt...
                                </div>
                                <a href="#" class="btn btn-outline-light px-lg-3 btn-sm mt-lg-2 py-lg-1">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-2">
                        <div class="position-relative m-auto">
                            <img src="http://via.placeholder.com/400x250" class="w-100 align-middle">
                            <div class="position-absolute bottom-0 text-transparent w-100 text-white text-center text-lg-start px-lg-4 py-lg-3 py-4">
                                <h2 class="p-0 m-0 fs-5 fw-bold mb-lg-2">Heading</h2>
                                <div>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis, itaque deserunt nesciunt...
                                </div>
                                <a href="#" class="btn btn-outline-light px-lg-3 btn-sm mt-lg-2 py-lg-1">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-2">
                        <div class="position-relative m-auto">
                            <img src="http://via.placeholder.com/400x250" class="w-100 align-middle">
                            <div class="position-absolute bottom-0 text-transparent w-100 text-white text-center text-lg-start px-lg-4 py-lg-3 py-4">
                                <h2 class="p-0 m-0 fs-5 fw-bold mb-lg-2">Heading</h2>
                                <div>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis, itaque deserunt nesciunt...
                                </div>
                                <a href="#" class="btn btn-outline-light px-lg-3 btn-sm mt-lg-2 py-lg-1">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 ps-lg-5">
                <h2 class="my-4 my-lg-0 text-lg-center fs-4 mb-lg-3">{{ $setting->news_informations_title }}</h2>
                {!! $setting->news_informations_description !!}
            </div>
        </div>
    </section>

    {{-- reviews --}}
    <section class="container-fluid px-5 bg-purple py-5">
        <div class="container row m-auto">
            <div class="col-lg-12">
                <h1 class="text-uppercase text-center fs-4">customer reviews</h1>
                <hr class="text-black border-2 opacity-75 mb-5">
            </div>
            <div class="col-lg-6">
                <div class="review">
                    <div>
                        <span class="fw-bold d-block">username</span>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <span class="fst-italic d-block">1 year ago - Google</span>
                        <p class="mt-4">
                            I got a month-long membership here. I come to do laps between the dry sauna and the cold pools. It's super relaxing and the crowd is quite friendly. Ginger tea is an also provided. It's nice to sip while I soak in the 15° cold pool.
                        </p>
                    </div>
                    <div>
                        <span class="fw-bold d-block">username</span>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <span class="fst-italic d-block">1 year ago - Google</span>
                        <p class="mt-4">
                            I got a month-long membership here. I come to do laps between the dry sauna and the cold pools. It's super relaxing and the crowd is quite friendly. Ginger tea is an also provided. It's nice to sip while I soak in the 15° cold pool.
                        </p>
                    </div>
                    <div>
                        <span class="fw-bold d-block">username</span>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <span class="fst-italic d-block">1 year ago - Google</span>
                        <p class="mt-4">
                            I got a month-long membership here. I come to do laps between the dry sauna and the cold pools. It's super relaxing and the crowd is quite friendly. Ginger tea is an also provided. It's nice to sip while I soak in the 15° cold pool.
                        </p>
                    </div>
                    <div>
                        <span class="fw-bold d-block">username</span>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <span class="fst-italic d-block">1 year ago - Google</span>
                        <p class="mt-4">
                            I got a month-long membership here. I come to do laps between the dry sauna and the cold pools. It's super relaxing and the crowd is quite friendly. Ginger tea is an also provided. It's nice to sip while I soak in the 15° cold pool.
                        </p>
                    </div>
                    <div>
                        <span class="fw-bold d-block">username</span>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <span class="fst-italic d-block">1 year ago - Google</span>
                        <p class="mt-4">
                            I got a month-long membership here. I come to do laps between the dry sauna and the cold pools. It's super relaxing and the crowd is quite friendly. Ginger tea is an also provided. It's nice to sip while I soak in the 15° cold pool.
                        </p>
                    </div>
                    <div>
                        <span class="fw-bold d-block">username</span>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <span class="fst-italic d-block">1 year ago - Google</span>
                        <p class="mt-4">
                            I got a month-long membership here. I come to do laps between the dry sauna and the cold pools. It's super relaxing and the crowd is quite friendly. Ginger tea is an also provided. It's nice to sip while I soak in the 15° cold pool.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-center pt-4">
                    <span class="fw-bold mb-4 d-block">
                        Please review us on...
                    </span>
                    <div>
                        <a href="{{ $setting->google_url }}" class="text-decoration-none">
                            <img src="{{ asset('images/google_small_icon.png') }}">
                        </a>
                        <a href="{{ $setting->facebook_url }}" class="text-decoration-none">
                            <img src="{{ asset('images/facebook_small_icon.png') }}" class="mx-3">
                        </a>
                        <a href="{{ $setting->tripadvisor_url }}" class="text-decoration-none">
                            <img src="{{ asset('images/tripadvisor_small_icon.png') }}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- instagram --}}
    <section class="container my-5 text-center">

        <!-- SnapWidget -->
        <script src="https://snapwidget.com/js/snapwidget.js"></script>
        <iframe src="https://snapwidget.com/embed/1004400" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; "></iframe>

        <a href="{{ $setting->instagram_url }}" class="btn btn-purple m-auto py-2 px-3 mt-3 fw-bold text-uppercase" style="font-size: 14px;">follow us</a>
    </section>

    {{-- spa service --}}
    <section class="container pt-5">
        <h1 class="text-uppercase text-center fs-4">spa services in canggu - bali</h1>
        <hr class="text-black border-2 opacity-75 mb-3">
        {!! $setting->spa_service_excerpt !!}


        <div class="collapse" id="collapseExample">
            {!! $setting->spa_service_description !!}
        </div>

        <div class="text-center">
            <a id="readMore" class="text-purple text-decoration-none" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Read More
            </a>
        </div>

    </section>

    {{-- canggu map --}}
    <section class="container-fluid pt-5">
        <div class="row">
            <div class="col-lg-6 text-end bg-purple pt-lg-5 pe-lg-4">
                <h2 class="fs-4">AMO SPA - Canggu</h2>
                <p class="fw-bold my-lg-3">
                    Jl. Pantai Batu Bolong No. 69, Canggu, Badung, Bali - Indonesia 80361
                </p>
                <p>
                    AMO Spa Canggu is located at the heart of Jalan Batu Bolong - Canggu's most happening street.
                    As well as the excellent treatments for which AMO is famous, also enjoy healthy and delicious food from our cafe and revitalize yourself in our sauna, steam room and Epsom salt Jacuzzi.
                </p>
            </div>
            <div class="col-lg-6 p-lg-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.422316402524!2d115.13229531478383!3d-8.651322993783419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd238795caccdfb%3A0x5fda743ef00d1c2!2sAMO%20SPA%20-%20LIFE.%20STYLE.%20SPA.%20CAFE!5e0!3m2!1sen!2sid!4v1655908431235!5m2!1sen!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

</x-guest-layout>
