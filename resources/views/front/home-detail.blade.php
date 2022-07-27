@push('css')
    <style>
        .masthead {
            height: 100vh;
            min-height: 500px;
            background-image: url('{{ url($page->banner_image) }}');
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

    <header class="masthead">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center mt-lg-5">
                <div class="col-12 text-center p-0">
                    {{-- <h1 class="fw-light bg-dark bg-opacity-25 py-5 text-uppercase fw-bold text-light-purple">amo café</h1> --}}
                </div>
            </div>
        </div>
    </header>

    <section class="container pt-5">
        <h1 class="text-uppercase text-center fs-4">{{ $page->sub_title }}</h1>
        <hr class="text-black border-lg-2 opacity-75 mb-3">
        {{-- <p class="fw-bold text-center">Delivering lovingly prepared, delicious and healthy meals to the heart of Canggu</p> --}}
        {!! $page->excerpt !!}
        <div class="collapse" id="collapseExample">
            {!! $page->description !!}
        </div>

        <div class="text-center">
            <a id="readMore" class="text-purple text-decoration-none" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Read More
            </a>
        </div>
    </section>

    <section class="container-fluid pt-5">

        @foreach ($posts as $key => $data)
            @if ($key % 2 == 0)
                <div class="row d-flex align-items-center bg-purple">
                    <div class="col-lg-6 p-lg-0">
                        <div class="section">
                            @foreach ($data->post_images as $subdata)
                                <div class="col-lg-12">
                                    <img src="{{ asset($subdata->image) }}" class="w-100">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6 p-lg-0 px-lg-5">
                        <h2 class="fs-4 fw-bold text-center">{{ $data->title }}</h2>
                        {!! $data->description !!}
                    </div>
                </div>
            @else
                <div class="row d-flex align-items-center bg-purple">
                    <div class="col-lg-6 p-lg-0 order-lg-2">
                        <div class="section">
                            @foreach ($data->post_images as $subdata)
                                <div class="col-lg-12">
                                    <img src="{{ asset($subdata->image) }}" class="w-100">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6 p-lg-0 px-lg-5 order-lg-1">
                        <h2 class="fs-4 fw-bold text-center">{{ $data->title }}</h2>
                        {!! $data->description !!}

                        {{-- <a href="#" class="btn btn-purple btn-sm px-lg-3">Food Menu</a> --}}
                    </div>
                </div>
            @endif
        @endforeach
    </section>

</x-guest-layout>
