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

    .nav-tabs .nav-link {
        background: #8c5da1;
        color: #fff;
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

<script>
    $(document).ready(function() {
            $('.section').slick({
                dots: false,
                slidesToScroll: 1,
                autoplay: false,
                arrows: true,
            });
        });
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
                <p>Discover perfect pampering with a group spa package from Amo Spa to relax, unwind and reconnect with your closest friends, family or your loved ones. Our packages are designed to give you quality time during a hectic holiday. Whether you're looking for a sophisticated afternoon tea or spa day, or hen's spa day, you're sure to find the perfect package.</p>
                <div class="collapse" id="collapseExample">
                    <p>
                        If you're getting ready for your wedding day in paradise or looking for a day of pampering with the girls, there's no better destination on the island. Our passion is making you look and feel fantastic. Allow yourself to be pampered by our expert staff in one of our specially designed social and high-performance treatment areas. Amo Spa offer a full range of hair, beauty and massage services providing luxurious treatments to take care of your looks and your wellbeing. Amo Spa is known for quality and consistency, with our reputation built by word of mouth and repeat customer satisfaction. Experienced by a truly international clientele, we are pleased to offer you the full spectrum of spa treatments including maintenance, relaxation and indulging therapies. When it comes to looking your best for your wedding, relax and let the Amo professionals take care of all your beauty needs.
                    </p>
                </div>

                <div class="text-center">
                    <a id="readMore" class="text-purple text-decoration-none" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid pt-5">
        <div class="row d-flex align-items-center bg-purple">
            <div class="col-lg-6 p-lg-0">
                <div class="section">
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-lg-0 px-lg-5">
                <h2 class="fs-4 fw-bold text-center">Our Story</h2>
                <p>AMO Café is a lifestyle destination, where delicious healthy food from our roof top garden is used for our scrumptious salads. And at AMO, we don't believe in waste - we also use our home grown products in many of our beauty treatments. With a full range of food, including a wide selection of vegetarian, vegan and gluten free options for breakfast, lunch and dinner, join us in Canggu's leading café.</p>
            </div>
        </div>

        <div class="row d-flex align-items-center bg-purple">
            <div class="col-lg-6 p-lg-0 order-lg-2">
                <div class="section">
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-lg-0 px-lg-5 order-lg-1">
                <h2 class="fs-4 fw-bold text-center">Food</h2>
                <p>AMO Serves up healthy and wholesome food with the finest ingredients, many grown in house. Follow your food's journey from roof top garden to plate. Start your day the right way with a choice from our breakfast menu, and find an inviting variety of salads, main dishes, meats, pastas and more, perfect for lunch, dinner or a snack at anytime of day.</p>

                <a href="#" class="btn btn-purple btn-sm px-lg-3">Food Menu</a>
            </div>
        </div>

        <div class="row d-flex align-items-center bg-purple">
            <div class="col-lg-6 p-lg-0">
                <div class="section">
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-lg-0 px-lg-5">
                <h2 class="fs-4 fw-bold text-center">Drinks</h2>
                <p>Healthy cold pressed juices, teas, Go Green coffee and more, what ever tempts your taste buds to stay hydrated, you'll find it at AMO. Head to our Social Spa and enjoy your favourite alcoholic cocktail to compliment your manicure and pedicure. Beauty, food and beverages combine at AMO Canggu.</p>

                <a href="#" class="btn btn-purple btn-sm px-lg-3">Drinks Menu</a>
            </div>
        </div>

        <div class="row d-flex align-items-center bg-purple">
            <div class="col-lg-6 p-lg-0 order-lg-2">
                <div class="section">
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-lg-0 px-lg-5 order-lg-1">
                <h2 class="fs-4 fw-bold text-center">Venue</h2>
                <p>AMO Canggu is your complete lifestyle destination. AMO Café aims to be the best restaurant in Canggu, and is just part of the AMO experience. Indulge in the sauna, steam room and Epsom salt Jacuzzi, massage treatments, beauty treatments, our Social Spa, High Performance Treatment Area and even our special hangover cure therapies.</p>
            </div>
        </div>
    </section>

    <section class="container py-lg-5">
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
                                    <label for="date" class="form-label">Type Of Package <span class="text-danger">*</span></label>
                                    <select class="form-control">
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Package Items (Please enter the name of each guest and the package they would like to receive)</label>
                                    <textarea class="form-control" rows="7" name=""></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Any Specific Requests?</label>
                                    <textarea class="form-control" rows="7" name=""></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    TERMS AND CONDITIONS:
                                    <ol>
                                        <li>50% deposit is required to secure your booking</li>
                                        <li>If you should need to cancel, modify or reschedule an appointment, 48 hour's notice is required. Less than this will result in a charge of 50% of the cost of the service from the deposit</li>
                                        <li>We require each guest to arrive 15 minutes early for their appointment. If guests are late, their service may be shortened or cancelled depending on time and staff available.</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label fw-bold" for="flexCheckDefault">
                                            I AGREE TO TERMS AND CONDITIONS ABOVE
                                        </label>
                                    </div>
                                    <div class="fw-bold">
                                        Once you select submit your form will be sent to our Group Booking Coordinator. If you require assistance call us at +62 8113 999 806 or email infos@amospa.com
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div class="mb-3">
                                    <button class="btn btn-purple">Send Enquiry</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade bg-white" id="nav-mobile" role="tabpanel" aria-labelledby="nav-mobile-tab" tabindex="0">
                        <form class="row px-4 py-4">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Main Contact Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Package Items (Please enter the name of each guest and the package they would like to receive)</label>
                                    <textarea class="form-control" rows="7" name=""></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Any Specific Requests?</label>
                                    <textarea class="form-control" rows="7" name=""></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    TERMS AND CONDITIONS:
                                    <ol>
                                        <li>50% deposit is required to secure your booking</li>
                                        <li>If you should need to cancel, modify or reschedule an appointment, 48 hour's notice is required. Less than this will result in a charge of 50% of the cost of the service from the deposit</li>
                                        <li>We require each guest to arrive 15 minutes early for their appointment. If guests are late, their service may be shortened or cancelled depending on time and staff available.</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label fw-bold" for="flexCheckDefault">
                                            I AGREE TO TERMS AND CONDITIONS ABOVE
                                        </label>
                                    </div>
                                    <div class="fw-bold">
                                        Once you select submit your form will be sent to our Group Booking Coordinator. If you require assistance call us at +62 8113 999 806 or email infos@amospa.com
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div class="mb-3">
                                    <button class="btn btn-purple">Send Enquiry</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>