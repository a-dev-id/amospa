@section('title', 'Edit Post')
@section('post_active', 'active')
@section('title_breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">@yield('title')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}" class="font-weight-bold">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('post.index') }}" class="font-weight-bold">Post</a></li>
                        <li class="breadcrumb-item active">@yield('title') - {{ $post->title }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $('#excerpt').summernote({
            tabsize: 2,
            height: 200,
            placeholder: 'Type something'
        });
        $('#description').summernote({
            tabsize: 2,
            height: 200,
            placeholder: 'Type something'
        });
        $('#term_condition').summernote({
            tabsize: 2,
            height: 200,
            placeholder: 'Type something'
        });
    </script>
@endpush

<x-app-layout>
    <section class="content">
        <div class="container-fluid">
            <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data" class="row">
                @csrf
                <div class="col-lg-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">General</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Title</label>
                                <input name="title" type="text" class="form-control" placeholder="Type something" value="{{ $post->title }}">
                            </div>
                            <div class="form-group">
                                <label>Excerpt</label>
                                <textarea name="excerpt" class="form-control" rows="4" id="excerpt" placeholder="Type something">{{ $post->excerpt }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="4" id="description" placeholder="Type something">{{ $post->description }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Banner Image</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('storage/' . $post->banner_image) }}" class="w-100">
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Cover Images</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach ($post_images as $pi)
                                    <div class="col-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <img src="{{ asset('storage/' . $pi->image) }}" class="w-100">
                                            </div>
                                            <div class="card-footer">
                                                {{-- <form method="POST" action="{{ route('post_image.destroy', [$pi->id]) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" name="deleteCoverImage" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
                                                </form> --}}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Button</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Button Label</label>
                                <input name="button_title" type="text" class="form-control" placeholder="Type something" value="{{ $post->button_title }}">
                            </div>
                            <div class="form-group">
                                <label>Button Url</label>
                                <input name="button_url" type="text" class="form-control" placeholder="Type something" value="{{ $post->button_url }}">
                            </div>
                        </div>
                    </div>

                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Detail</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputFile">Banner Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input name="banner_image" type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Cover Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input name="post_images[]" multiple type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>on Page</label>
                                <select name="page_id" class="form-control" required>
                                    <option selected>Choose</option>
                                    @foreach ($pages as $page)
                                        <option value="{{ $page->id }}">{{ $page->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="1" selected>Published</option>
                                    <option value="0">Draft</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-paper-plane"></i> Submit</button>
                            <a href="{{ route('post.index') }}" class="btn btn-danger btn-sm"><i class="fas fa-ban"></i> Cancel</a>
                        </div>
                    </div>

                </div>

            </form>
        </div>
    </section>
</x-app-layout>