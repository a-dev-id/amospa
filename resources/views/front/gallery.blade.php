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
        <h1 class="text-uppercase text-center fs-4">media gallery</h1>
        <hr class="text-black border-lg-2 opacity-75 mb-3">
    </section>

    <section class="container pt-5">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <h2 class="text-uppercase fs-5">instagram photo gallery</h2>
            </div>
            <div class="col-lg-12 mb-4">
                <!-- SnapWidget -->
                <script src="https://snapwidget.com/js/snapwidget.js"></script>
                <iframe src="https://snapwidget.com/embed/1003590" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; "></iframe>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <h2 class="text-uppercase fs-5">youtube photo gallery</h2>
            </div>
            <div class="col-lg-6 mb-3">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/Dnrx184m1oQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-lg-6 mb-3">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/OyAaBvExKXM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-lg-6 mb-3">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/L-1HKPN99Z0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-lg-6 mb-3">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/Wk_6Qz5dd9U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-lg-6 mb-3">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/aKN3WfLufDU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-lg-6 mb-3">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/cNClUL7HZI0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-lg-6 mb-3">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/PgTjIIIf6wE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-lg-6 mb-3">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/yYlHFZFpJKw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>



</x-guest-layout>