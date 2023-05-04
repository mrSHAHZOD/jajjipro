@extends('admin.layouts.layout')

@section('groups')
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
                            <a href="{{ route('admin.groups.index') }}" class="btn btn-primary"
                                style="position:absolute; right:50;">Back</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <td>IMG : </td>
                                            <td><b><img src="/images/{{ $group->img }}" alt=""width="100px"></b></td>
                                        </tr>
                                        <tr>
                                            <td>Title : </td>
                                            <td><b>{{ $group->title }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>short content : </td>
                                            <td><b>{{ $group->short_content }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>Age : </td>
                                            <td><b>{{ $group->age }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>seat: </td>
                                            <td><b>{{ $group->seat }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>class time : </td>
                                            <td><b>{{ $group->class_time }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>Peyment: </td>
                                            <td><b>{{ $group->peyment }}</b></td>
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
