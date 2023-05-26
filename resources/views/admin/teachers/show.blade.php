@extends('admin.layouts.layout')

@section('teachers')
    active
@endsection

@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h4>Show Product</h4>
                            <a href="{{ route('admin.teachers.index') }}" class="btn btn-primary"
                                style="position:absolute; right:50;">Back</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <td>Ismi : </td>
                                            <td><b><img src="/images/{{ $teacher->img }}" alt=""width="100px"></b></td>
                                        </tr>

                                        <tr>
                                            <td>Ismi : </td>
                                            <td><b>{{ $teacher->name }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>Ismi : </td>
                                            <td><b>{{ $teacher->content }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>Ismi : </td>
                                            <td><b>{{ $teacher->telegram }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>Ismi : </td>
                                            <td><b>{{ $teacher->fbook }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>Ismi : </td>
                                            <td><b>{{ $teacher->instagram }}</b></td>
                                        </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
