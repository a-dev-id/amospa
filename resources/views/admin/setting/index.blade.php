@section('title', 'Setting')
@section('setting_active', 'active')
@section('title_breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">@yield('title')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}" class="font-weight-bold">Home</a></li>
                        <li class="breadcrumb-item active">@yield('title')</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('vendors/adminlte') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('vendors/adminlte') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('vendors/adminlte') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush
@push('js')
    <script src="{{ asset('vendors/adminlte') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('vendors/adminlte') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('vendors/adminlte') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('vendors/adminlte') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('vendors/adminlte') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('vendors/adminlte') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('vendors/adminlte') }}/plugins/jszip/jszip.min.js"></script>
    <script src="{{ asset('vendors/adminlte') }}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('vendors/adminlte') }}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ asset('vendors/adminlte') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('vendors/adminlte') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('vendors/adminlte') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $('#description').summernote({
            tabsize: 2,
            height: 200,
            placeholder: 'Type something'
        });
    </script>
    <script>
        $(function() {
            $("#list").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#list_wrapper .col-md-6:eq(0)');
        });
    </script>
    <script>
        setTimeout(() => {
            const box = document.getElementById('alert');
            box.style.display = 'none';
        }, 3000);
    </script>
@endpush

<x-app-layout>

    <section class="content">
        <div class="container-fluid">
            <form method="POST" action="{{ route('setting.update', [$setting->id]) }}" enctype="multipart/form-data" class="row">
                @method('PUT')
                @csrf
                <div class="col-lg-12">
                    @if (session('message'))
                        <div class="alert alert-success alert-dismissible" id="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="far fa-times-circle text-white"></i></button>
                            <h5><i class="icon fas fa-check"></i> Success!</h5>
                            {{ session('message') }}
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-body text-right p-2">
                            <button type="submit" class="btn btn-success px-4"><i class="fas fa-save pr-1"></i> Save</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Homepage Video URL</label>
                                <input name="homepage_video_url" type="text" class="form-control" placeholder="Type something" value="{{ $setting->homepage_video_url }}">
                            </div>
                            <div class="form-group">
                                <label>Instagram URL</label>
                                <input name="instagram_url" type="text" class="form-control" placeholder="Type something" value="{{ $setting->instagram_url }}">
                            </div>
                            <div class="form-group">
                                <label>Facebook URL</label>
                                <input name="facebook_url" type="text" class="form-control" placeholder="Type something" value="{{ $setting->facebook_url }}">
                            </div>
                            <div class="form-group">
                                <label>Youtube URL</label>
                                <input name="youtube_url" type="text" class="form-control" placeholder="Type something" value="{{ $setting->youtube_url }}">
                            </div>
                            <div class="form-group">
                                <label>Tripadvisor URL</label>
                                <input name="tripadvisor_url" type="text" class="form-control" placeholder="Type something" value="{{ $setting->tripadvisor_url }}">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

</x-app-layout>
