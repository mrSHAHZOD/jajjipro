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
                            <h4>Edit</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.groups.update', $groups->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Img</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="img"
                                            value="{{ $groups->img }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                                        <Title></Title>
                                    </label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="title"
                                            value="{{ $groups->title }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">content</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="short_content"
                                            value="{{ $groups->title }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Age</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="age"
                                            value="{{ $groups->age }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">orindiqlar
                                        soni</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" class="form-control" name="seat"
                                            value="{{ $groups->seat }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">class time</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="class_time"
                                            value="{{ $groups->class_time }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Payment</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" class="form-control" name="payment"
                                            value="{{ $groups->payment }}">
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
