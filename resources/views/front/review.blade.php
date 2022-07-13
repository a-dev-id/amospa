@push('css')
    <style>
        .masthead {
            height: 100vh;
            min-height: 500px;
            background-image: url('https://source.unsplash.com/BtbjCFUvBXs/1920x1080');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
@endpush

@push('js')
    <script>
        $(document).ready(function() {
            $('.review').slick({
                dots: true,
                slidesToScroll: 1,
                slidesToShow: 3,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: false,
            });
        });
    </script>
@endpush

<x-guest-layout>

    <header class="masthead">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center mt-lg-5">
                <div class="col-12 text-center p-0">
                    <h1 class="fw-light bg-dark bg-opacity-25 py-5 text-uppercase fw-bold text-light-purple">amo world</h1>
                </div>
            </div>
        </div>
    </header>

    <section class="container pt-5">
        <h1 class="text-uppercase text-center fs-4">Customer Reviews</h1>
        <hr class="text-black border-lg-2 opacity-75 mb-3">
    </section>

    <section class="container pt-5">
        <div class="review row">
            <div class="px-3">
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
            <div class="px-3">
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
            <div class="px-3">
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
            <div class="px-3">
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
            <div class="px-3">
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
            <div class="px-3">
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
    </section>

    <section class="container mb-5">
        <div class="pt-4">
            <span class="fw-bold mb-4 d-block">
                Please review us on...
            </span>
            <div>
                <img src="{{ asset('images/google_small_icon.png') }}">
                <img src="{{ asset('images/facebook_small_icon.png') }}" class="mx-3">
                <img src="{{ asset('images/tripadvisor_small_icon.png') }}">
            </div>
        </div>
    </section>

</x-guest-layout>
