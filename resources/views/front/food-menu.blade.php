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
@endpush

<x-guest-layout>

    <header class="masthead">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center mt-lg-5">
                <div class="col-12 text-center p-0">
                    <h1 class="fw-light bg-dark bg-opacity-25 py-5 text-uppercase fw-bold text-light-purple">amo café</h1>
                </div>
            </div>
        </div>
    </header>

    <section class="container pt-5">
        <h1 class="text-uppercase text-center fs-4">food menu</h1>
        <hr class="text-black border-lg-2 opacity-75 mb-3">

    </section>
    <section class="container pt-lg-4">
        <div class="row mb-lg-4">
            <div class="col-lg-8">
                <div class="border-dotted p-lg-4">
                    <h2 class="w-100 text-center border-title-dotted fs-4">
                        <span class="bg-light-purple px-lg-3">PURE FRUITY AND VEGGIE JUICE EXTRACT 300ml</span>
                    </h2>
                    <div class="row pt-lg-4">
                        <div class="col-lg-6 d-flex justify-content-between fs-menu fw-bold text-purple mb-lg-3">
                            <span>Cucumber</span>
                            <span>30k</span>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-between fs-menu fw-bold text-purple mb-lg-3">
                            <span>Beetroot</span>
                            <span>40k</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="border-dotted p-lg-4">
                    <h2 class="fs-4 text-center">
                        FRUIT JUICE BLEND<br>
                        (with coconut water) 300ml
                    </h2>
                    <div class="row pt-lg-4">
                        <div class="col-lg-12 d-flex justify-content-between fs-menu fw-bold text-purple mb-lg-3">
                            <span>Cucumber</span>
                            <span>30k</span>
                        </div>
                        <div class="col-lg-12 d-flex justify-content-between fs-menu fw-bold text-purple mb-lg-3">
                            <span>Beetroot</span>
                            <span>40k</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-lg-4">
            <div class="col-lg-12">
                <div class="border-dotted p-lg-4">
                    <h2 class="w-100 text-center border-title-dotted fs-4">
                        <span class="bg-light-purple px-lg-3">PARADISE MIXES</span>
                    </h2>
                    <div class="row pt-lg-3">
                        <div class="col-lg-4 row">
                            <div class="col-8">
                                <h3 class="fs-menu fw-bold text-purple">
                                    Pink Berry
                                </h3>
                                <div class="fs-menu-desc mb-lg-3">
                                    Strawberry, cranberry, blueberry, watermelon, goji berry, raspberries
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="float-end fs-menu fw-bold text-purple">45k</div>
                            </div>
                        </div>
                        <div class="col-lg-4 row">
                            <div class="col-8">
                                <h3 class="fs-menu fw-bold text-purple">
                                    Pink Berry
                                </h3>
                                <div class="fs-menu-desc mb-lg-3">
                                    Strawberry, cranberry, blueberry, watermelon, goji berry, raspberries
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="float-end fs-menu fw-bold text-purple">45k</div>
                            </div>
                        </div>
                        <div class="col-lg-4 row">
                            <div class="col-8">
                                <h3 class="fs-menu fw-bold text-purple">
                                    Pink Berry
                                </h3>
                                <div class="fs-menu-desc mb-lg-3">
                                    Strawberry, cranberry, blueberry, watermelon, goji berry, raspberries
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="float-end fs-menu fw-bold text-purple">45k</div>
                            </div>
                        </div>
                        <div class="col-lg-4 row">
                            <div class="col-8">
                                <h3 class="fs-menu fw-bold text-purple">
                                    Pink Berry
                                </h3>
                                <div class="fs-menu-desc mb-lg-3">
                                    Strawberry, cranberry, blueberry, watermelon, goji berry, raspberries
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="float-end fs-menu fw-bold text-purple">45k</div>
                            </div>
                        </div>
                        <div class="col-lg-4 row">
                            <div class="col-8">
                                <h3 class="fs-menu fw-bold text-purple">
                                    Pink Berry
                                </h3>
                                <div class="fs-menu-desc mb-lg-3">
                                    Strawberry, cranberry, blueberry, watermelon, goji berry, raspberries
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="float-end fs-menu fw-bold text-purple">45k</div>
                            </div>
                        </div>
                        <div class="col-lg-4 row">
                            <div class="col-8">
                                <h3 class="fs-menu fw-bold text-purple">
                                    Pink Berry
                                </h3>
                                <div class="fs-menu-desc mb-lg-3">
                                    Strawberry, cranberry, blueberry, watermelon, goji berry, raspberries
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="float-end fs-menu fw-bold text-purple">45k</div>
                            </div>
                        </div>
                        <div class="col-lg-4 row">
                            <div class="col-8">
                                <h3 class="fs-menu fw-bold text-purple">
                                    Pink Berry
                                </h3>
                                <div class="fs-menu-desc mb-lg-3">
                                    Strawberry, cranberry, blueberry, watermelon, goji berry, raspberries
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="float-end fs-menu fw-bold text-purple">45k</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-lg-4">
            <div class="col-lg-12">
                <div class="border-dotted p-lg-4">
                    <h2 class="w-100 text-center border-title-dotted fs-4">
                        <span class="bg-light-purple px-lg-3">PARADISE MIXES</span>
                    </h2>
                    <div class="row pt-lg-3">
                        <div class="col-lg-4 row">
                            <div class="col-8">
                                <h3 class="fs-menu fw-bold text-purple">
                                    Pink Berry
                                </h3>
                                <div class="fs-menu-desc mb-lg-3">
                                    Strawberry, cranberry, blueberry, watermelon, goji berry, raspberries
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="float-end fs-menu fw-bold text-purple">45k</div>
                            </div>
                        </div>
                        <div class="col-lg-4 row">
                            <div class="col-8">
                                <h3 class="fs-menu fw-bold text-purple">
                                    Pink Berry
                                </h3>
                                <div class="fs-menu-desc mb-lg-3">
                                    Strawberry, cranberry, blueberry, watermelon, goji berry, raspberries
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="float-end fs-menu fw-bold text-purple">45k</div>
                            </div>
                        </div>
                        <div class="col-lg-4 row">
                            <div class="col-8">
                                <h3 class="fs-menu fw-bold text-purple">
                                    Pink Berry
                                </h3>
                                <div class="fs-menu-desc mb-lg-3">
                                    Strawberry, cranberry, blueberry, watermelon, goji berry, raspberries
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="float-end fs-menu fw-bold text-purple">45k</div>
                            </div>
                        </div>
                        <div class="col-lg-4 row">
                            <div class="col-8">
                                <h3 class="fs-menu fw-bold text-purple">
                                    Pink Berry
                                </h3>
                                <div class="fs-menu-desc mb-lg-3">
                                    Strawberry, cranberry, blueberry, watermelon, goji berry, raspberries
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="float-end fs-menu fw-bold text-purple">45k</div>
                            </div>
                        </div>
                        <div class="col-lg-4 row">
                            <div class="col-8">
                                <h3 class="fs-menu fw-bold text-purple">
                                    Pink Berry
                                </h3>
                                <div class="fs-menu-desc mb-lg-3">
                                    Strawberry, cranberry, blueberry, watermelon, goji berry, raspberries
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="float-end fs-menu fw-bold text-purple">45k</div>
                            </div>
                        </div>
                        <div class="col-lg-4 row">
                            <div class="col-8">
                                <h3 class="fs-menu fw-bold text-purple">
                                    Pink Berry
                                </h3>
                                <div class="fs-menu-desc mb-lg-3">
                                    Strawberry, cranberry, blueberry, watermelon, goji berry, raspberries
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="float-end fs-menu fw-bold text-purple">45k</div>
                            </div>
                        </div>
                        <div class="col-lg-4 row">
                            <div class="col-8">
                                <h3 class="fs-menu fw-bold text-purple">
                                    Pink Berry
                                </h3>
                                <div class="fs-menu-desc mb-lg-3">
                                    Strawberry, cranberry, blueberry, watermelon, goji berry, raspberries
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="float-end fs-menu fw-bold text-purple">45k</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</x-guest-layout>
