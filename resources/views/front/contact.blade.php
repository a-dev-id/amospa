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
<script>
    $('#readMore').click(function() {
            if ($(this).text() == 'Read Less') $(this).text('Read More');
            else $(this).text('Read Less');
        });
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
                    <h1 class="fw-light bg-dark bg-opacity-25 py-5 text-uppercase fw-bold text-light-purple">contact us</h1>
                </div>
            </div>
        </div>
    </header>

    <section class="container pt-5">
        <h1 class="text-uppercase text-center fs-4">contact us</h1>
        <hr class="text-black border-lg-2 opacity-75 mb-3">
        <p>Please complete the form below if you would like to send us a message. If you would like to book one of our fabulous packages please go to this page. We offer a selection of individual spa packages plus packages for weddings, birthdays and couples. Booking for groups and mobile services can be made on this page. Group packages are available at our spa or in the comfort of your private villa.</p>
    </section>

    <section class="container pt-5">
        <form class="row justify-content-center">
            <div class="col-lg-4 mb-5 text-center">
                <label for="name" class="form-label fw-bold">Name:</label>
                <input type="text" id="name" class="form-control">
            </div>
            <div class="col-lg-4 mb-5 text-center">
                <label for="name" class="form-label fw-bold">Email:</label>
                <input type="email" id="name" class="form-control">
            </div>
            <div class="col-lg-4 mb-5 text-center">
                <label for="name" class="form-label fw-bold">Subject:</label>
                <input type="text" id="name" class="form-control">
            </div>
            <div class="col-lg-12 mb-3 text-center">
                <label for="name" class="form-label fw-bold">Message:</label>
                <textarea name="" id="" rows="6" class="form-control"></textarea>
            </div>
            <div class="col-lg-3 mb-5">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck">
                    <label class="form-check-label fw-bold" for="disabledFieldsetCheck">
                        Sign me up for the Amo Spa Newsletter
                    </label>
                </div>
                <div class="text-center mt-5">
                    <button class="btn btn-purple">Send Message</button>
                </div>
            </div>
        </form>
    </section>

    <section class="container pt-5">
        <h1 class="text-uppercase text-center fs-4">amospa newsletter</h1>
        <hr class="text-black border-lg-2 opacity-75 mb-3">
    </section>

    <section class="container pt-5">
        <form class="row justify-content-center">
            <div class="col-lg-4 mb-5 text-center">
                <label for="name" class="form-label fw-bold">First Name:</label>
                <input type="text" id="name" class="form-control">
            </div>
            <div class="col-lg-4 mb-5 text-center">
                <label for="name" class="form-label fw-bold">Last Email:</label>
                <input type="email" id="name" class="form-control">
            </div>
            <div class="col-lg-4 mb-5 text-center">
                <label for="name" class="form-label fw-bold">Email Address:</label>
                <input type="text" id="name" class="form-control">
            </div>
            <div class="col-lg-3 mb-5">
                <div class="text-center mt-5">
                    <button class="btn btn-purple">Subscribe Now</button>
                </div>
            </div>
        </form>
    </section>

    <section class="container pt-5">
        <h1 class="text-uppercase text-center fs-4">Some Partner Venues</h1>
        <hr class="text-black border-lg-2 opacity-75 mb-3">
    </section>

    <section class="container pt-5">
        <div class="row">
            <div class="col-lg-2 mb-3">
                <img src="https://via.placeholder.com/250x250" width="100%">
            </div>
            <div class="col-lg-2 mb-3">
                <img src="https://via.placeholder.com/250x250" width="100%">
            </div>
            <div class="col-lg-2 mb-3">
                <img src="https://via.placeholder.com/250x250" width="100%">
            </div>
            <div class="col-lg-2 mb-3">
                <img src="https://via.placeholder.com/250x250" width="100%">
            </div>
            <div class="col-lg-2 mb-3">
                <img src="https://via.placeholder.com/250x250" width="100%">
            </div>
            <div class="col-lg-2 mb-3">
                <img src="https://via.placeholder.com/250x250" width="100%">
            </div>
            <div class="col-lg-2 mb-3">
                <img src="https://via.placeholder.com/250x250" width="100%">
            </div>
            <div class="col-lg-2 mb-3">
                <img src="https://via.placeholder.com/250x250" width="100%">
            </div>
            <div class="col-lg-2 mb-3">
                <img src="https://via.placeholder.com/250x250" width="100%">
            </div>
            <div class="col-lg-2 mb-3">
                <img src="https://via.placeholder.com/250x250" width="100%">
            </div>
            <div class="col-lg-2 mb-3">
                <img src="https://via.placeholder.com/250x250" width="100%">
            </div>
            <div class="col-lg-2 mb-3">
                <img src="https://via.placeholder.com/250x250" width="100%">
            </div>
        </div>
    </section>
</x-guest-layout>