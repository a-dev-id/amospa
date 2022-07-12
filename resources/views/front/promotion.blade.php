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

    .slick-prev {
        left: 20px;
        z-index: 1;
    }

    .slick-next {
        right: 20px;
        z-index: 1;
    }

</style>
@endpush

@push('js')
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
        <h1 class="text-uppercase text-center fs-4">Monthly Promotions</h1>
        <hr class="text-black border-lg-2 opacity-75 mb-3">
    </section>

    <section class="container pt-5">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-3 text-center">
                <a href="#" class="fw-bold text-black text-decoration-none fs-5">
                    <img src="https://via.placeholder.com/280x300" class="w-100">
                    <div class="mt-lg-3">
                        Full Body Scrub + Complimentary Sauna Day Pass
                    </div>
                </a>
            </div>
            <div class="col-lg-3 text-center">
                <a href="#" class="fw-bold text-black text-decoration-none fs-5">
                    <img src="https://via.placeholder.com/280x300" class="w-100">
                    <div class="mt-lg-3">
                        Full Body Scrub + Complimentary Sauna Day Pass
                    </div>
                </a>
            </div>
            <div class="col-lg-3 text-center">
                <a href="#" class="fw-bold text-black text-decoration-none fs-5">
                    <img src="https://via.placeholder.com/280x300" class="w-100">
                    <div class="mt-lg-3">
                        Full Body Scrub + Complimentary Sauna Day Pass
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="container pt-5">
        <div class="row d-flex align-items-center">
            <div class="col-lg-12 text-center">
                <div class="fst-italic fw-bold">* deals can not be combined with other promotions or discounts.</div>
            </div>
        </div>
    </section>

</x-guest-layout>