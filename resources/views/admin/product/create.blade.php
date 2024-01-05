@extends('layouts.admin.master')
@section('title')
    Add new product
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>@yield('title')</h4>
                </div>
                <div class="card-body">
                    <form class="form" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-5">
                                <img src="{{ asset('assets/no-image.jpeg') }}" class="img-fluid shadow-sm"
                                    style="border-radius: 14px;" id="blah">
                                <div class="mt-3">
                                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                                        <div>
                                            Gambar hanya JPG dan PNG serta Maks Size 2 MB
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="mb-3">
                                    <label class="form-label">Nama Produk</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        name="title" value="{{ old('title') }}" autocomplete="off">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Harga Produk</label>
                                    <input type="number" class="form-control @error('harga') is-invalid @enderror"
                                        name="harga" value="{{ old('harga') }}" autocomplete="off">
                                    @error('harga')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Kategori</label>
                                    <fieldset class="form-group">
                                        <select class="form-select @error('kategori') is-invalid @enderror" id="basicSelect"
                                            name="kategori">
                                            <option value="">-- Pilih Kategori --</option>
                                            <option {{ old('kategori') == 'pants' ? 'selected' : '' }} value="pants">
                                                Pants</option>
                                            <option {{ old('kategori') == 'shirts' ? 'selected' : '' }} value="shirts">Shirts
                                            </option>
                                            <option {{ old('kategori') == 't-shirts' ? 'selected' : '' }} value="t-shirts">T-Shirts</option>
                                            <option {{ old('kategori') == 'jacket' ? 'selected' : '' }} value="jacket">Jacket</option>
                                            <option {{ old('kategori') == 'outerwear' ? 'selected' : '' }} value="outerwear">Outerwear</option>
                                        </select>
                                        @error('kategori')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </fieldset>
                                </div>
                                  <div class="mb-3">
                                    <label class="form-label">Size</label>
                                    <fieldset class="form-group">
                                        <select class="form-select @error('size') is-invalid @enderror" id="basicSelect"
                                            name="size">
                                            <option value="">-- Pilih Size --</option>
                                            <option {{ old('size') == 'S' ? 'selected' : '' }} value="S">
                                                Small (S)</option>
                                            <option {{ old('size') == 'M' ? 'selected' : '' }} value="M">Medium (M)
                                            </option>
                                            <option {{ old('size') == 'L' ? 'selected' : '' }} value="L">Large (L)</option>
                                            <option {{ old('size') == 'XL' ? 'selected' : '' }} value="XL">Extra Large (XL)</option>
                                        </select>
                                        @error('size')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </fieldset>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Pilih Status Produk</label>
                                    <fieldset class="form-group">
                                        <select class="form-select @error('status') is-invalid @enderror" id="basicSelect"
                                            name="status">
                                            <option value="">-- Pilih Status --</option>
                                            <option {{ old('status') == 'publish' ? 'selected' : '' }} value="publish">
                                                Publish</option>
                                            <option {{ old('status') == 'draft' ? 'selected' : '' }} value="draft">Draft
                                            </option>
                                        </select>
                                        @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </fieldset>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Masukan Thumbnail Product</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror"
                                        name="image" autocomplete="off" id="imgInp">
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/extensions/filepond/filepond.css ') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/extensions/toastify-js/src/toastify.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/filepond.css ') }}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endsection

@section('scripts')
    <script src="{{ asset('assets/extensions/filepond/filepond.js') }}"></script>
    <script src="{{ asset('assets/extensions/toastify-js/src/toastify.js') }}"></script>
    <script src="{{ asset('assets/js/pages/filepond.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
    </script>
    <script>
        $('#summernote').summernote({
            placeholder: 'Masukan Deskripsi lengkap produk',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link']],
                ['view', ['codeview']]
            ]
        });
    </script>
@endsection
