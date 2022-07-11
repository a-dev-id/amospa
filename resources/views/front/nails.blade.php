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

        .border-title-dotted {
            border-bottom: 3px dotted #8c5da1;
            line-height: 0.1em;
            margin: 10px 0 20px;
        }

        .border-dotted {
            border: 2px dotted #8c5da1;
            border-radius: 30px !important;
        }
    </style>
@endpush

@push('js')
    <script>
        $('#readMore').click(function() {
            if ($(this).text() == 'Read Less') $(this).text('Read More');
            else $(this).text('Read Less');
        });
    </script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
@endpush

<x-guest-layout>

    <header class="masthead">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center mt-lg-5">
                <div class="col-12 text-center p-0">
                    <h1 class="fw-light bg-dark bg-opacity-25 py-5 text-uppercase fw-bold text-light-purple">book now</h1>
                </div>
            </div>
        </div>
    </header>

    <section class="container pt-5">
        <h1 class="text-uppercase text-center fs-4">Prices and Bookings</h1>
        <hr class="text-black border-lg-2 opacity-75 mb-3">

    </section>
    <section class="container pt-lg-4">
        <div class="row mb-lg-4">
            <div class="col-lg-12">
                <p>
                    Select your treatments and add each one to your cart. Open the floating cart icon to process your booking enquiry. You will be able to select your preferred date and time plus you may note who the treatment is for. We always reply promptly. If you would like to review our treatments and prices only, please refer to our Pricing page.
                </p>
                <p class="text-danger text-center fw-bold">
                    Please ensure that you make your booking 3 hours prior to your preferred appointment time.
                </p>
            </div>
        </div>
    </section>

    <section class="container py-lg-4 bg-purple">
        <div class="row mb-lg-4">
            <div class="col-lg-12">
                <h1 class="text-uppercase text-center fs-4 text-purple">Nails</h1>
                <hr class="text-purple border-lg-2 opacity-75 mb-3">
            </div>
            <div class="col-lg-12 mt-lg-2">
                <h2 class="fs-6 fw-bold p-2">APRES NAILS</h2>
                <div class="row ps-3 pe-3 mb-1">
                    <div class="col-lg-12 p-3 bg-light-purple">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <h3 class="fs-6 fw-bold text-purple">
                                    APRES with normal polish (90 mins)
                                </h3>
                                <div class="fw-bold"> Rp. 500,000</div>
                            </div>
                            <div class="col-2 text-end align-middle h-100">
                                <a href="" class="btn btn-purple">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ps-3 pe-3 mb-1">
                    <div class="col-lg-12 p-3 bg-light-purple">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <h3 class="fs-6 fw-bold text-purple">
                                    APRES with normal polish (90 mins)
                                </h3>
                                <div class="fw-bold"> Rp. 500,000</div>
                            </div>
                            <div class="col-2 text-end align-middle h-100">
                                <a href="" class="btn btn-purple">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ps-3 pe-3 mb-1">
                    <div class="col-lg-12 p-3 bg-light-purple">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <h3 class="fs-6 fw-bold text-purple">
                                    APRES with normal polish (90 mins)
                                </h3>
                                <div class="fw-bold"> Rp. 500,000</div>
                            </div>
                            <div class="col-2 text-end align-middle h-100">
                                <a href="" class="btn btn-purple">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ps-3 pe-3 mb-1">
                    <div class="col-lg-12 p-3 bg-light-purple">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <h3 class="fs-6 fw-bold text-purple">
                                    APRES with normal polish (90 mins)
                                </h3>
                                <div class="fw-bold"> Rp. 500,000</div>
                            </div>
                            <div class="col-2 text-end align-middle h-100">
                                <a href="" class="btn btn-purple">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-lg-2">
                <h2 class="fs-6 fw-bold p-2">APRES NAILS</h2>
                <div class="row ps-3 pe-3 mb-1">
                    <div class="col-lg-12 p-3 bg-light-purple">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <h3 class="fs-6 fw-bold text-purple">
                                    APRES with normal polish (90 mins)
                                </h3>
                                <div class="fw-bold"> Rp. 500,000</div>
                            </div>
                            <div class="col-2 text-end align-middle h-100">
                                <a href="" class="btn btn-purple">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ps-3 pe-3 mb-1">
                    <div class="col-lg-12 p-3 bg-light-purple">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <h3 class="fs-6 fw-bold text-purple">
                                    APRES with normal polish (90 mins)
                                </h3>
                                <div class="fw-bold"> Rp. 500,000</div>
                            </div>
                            <div class="col-2 text-end align-middle h-100">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-light-purple" data-bs-toggle="collapse" data-bs-placement="left" title="Tooltip on left" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </button>

                                    <button type="button" class="btn btn-purple">
                                        <i class="fa-solid fa-cart-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body border-0 rounded-0 mt-2">
                                        Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container mt-lg-4 py-lg-3 bg-purple">
        <div class="col-lg-12">
            <div class="text-center fw-bold text-purple">
                All prices are quoted in Indonesian Rupiah. 12.5% Tax and 5% Service Charge will be added to your booking.
            </div>
        </div>
    </section>

</x-guest-layout>
