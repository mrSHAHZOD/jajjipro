@extends('admin.layouts.layout')

@section('teachers')
    active
@endsection

@section('content')


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="section">
        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Yangi o'qituvchi qo'shish</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.infos.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title uzb</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="title_uz" value="{{ old('title_uz') }}">
                                        @error('title_uz')
                                            {{ $message }}
                                        @enderror <br>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title ru</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="title_ru"
                                            value="{{ old('title_ru') }}">
                                        @error('title_ru')
                                            {{ $message }}
                                        @enderror <br>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title Eng</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="title_en"
                                            value="{{ old('title_en') }}">
                                        @error('title_en')
                                            {{ $message }}
                                        @enderror <br>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Short
                                        coment uzb</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="content_uz"
                                            value="{{ old('content_uz') }}">
                                        @error('content_uz')
                                            {{ $message }}
                                        @enderror
                                        <br>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Short
                                        coment RU</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="content_ru"
                                            value="{{ old('content_ru') }}">
                                        @error('content_ru')
                                            {{ $message }}
                                        @enderror
                                        <br>
                                    </div>
                                </div>
                                 <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Short
                                        coment ENG</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="content_en"
                                            value="{{ old('content_en') }}">
                                        @error('content_en')
                                            {{ $message }}
                                        @enderror
                                        <br>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Icon</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="file" class="form-control" name="icon"
                                            value="{{ old('icon') }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

@endsection
