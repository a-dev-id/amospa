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
        <h1 class="text-uppercase text-center fs-4">Groups & Mobile</h1>
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

    <section class="container py-lg-4">
        <div class="row">
            <div class="col-lg-12">
                <nav class="">
                    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-group-tab" data-bs-toggle="tab" data-bs-target="#nav-group" type="button" role="tab" aria-controls="nav-group" aria-selected="true">Group Booking Form</button>
                        <button class="nav-link" id="nav-mobile-tab" data-bs-toggle="tab" data-bs-target="#nav-mobile" type="button" role="tab" aria-controls="nav-mobile" aria-selected="false">Mobile Booking Form</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active bg-white" id="nav-group" role="tabpanel" aria-labelledby="nav-group-tab" tabindex="0">
                        <form class="row px-4 py-4">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Main Contact Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="date" class="form-label">Date & Time <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="date" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="date" class="form-label">type Of Package <span class="text-danger">*</span></label>
                                    <select class="form-control">
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="tab-pane fade" id="nav-mobile" role="tabpanel" aria-labelledby="nav-mobile-tab" tabindex="0">...</div>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>
