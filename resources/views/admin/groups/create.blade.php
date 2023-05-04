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
                            <form action="{{ route('admin.groups.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">IMG</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="file" class="form-control" name="img">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">short content</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="short_content">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Age</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" class="form-control" name="age">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">seat</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" class="form-control" name="seat">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">TIME</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="class_time">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Peyment</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" class="form-control" name="payment">
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

@endsection




