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
        <h1 class="text-uppercase text-center fs-4">news & informations</h1>
        <hr class="text-black border-lg-2 opacity-75 mb-3">
    </section>

    <section class="container pt-5">
        <div class="row d-flex ">
            <div class="col-lg-4 mb-4">
                <a href="#" class="text-black text-decoration-none">
                    <div class="card">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content [...]</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 mb-4">
                <a href="#" class="text-black text-decoration-none">
                    <div class="card">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content [...]</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 mb-4">
                <a href="#" class="text-black text-decoration-none">
                    <div class="card">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content [...]</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 mb-4">
                <a href="#" class="text-black text-decoration-none">
                    <div class="card">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content [...]</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 mb-4">
                <a href="#" class="text-black text-decoration-none">
                    <div class="card">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content [...]</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 mb-4">
                <a href="#" class="text-black text-decoration-none">
                    <div class="card">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content [...]</p>
                        </div>
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