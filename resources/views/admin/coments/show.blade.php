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
                            <a href="{{ route('admin.coments.index') }}" class="btn btn-primary"
                                style="position:absolute; right:50;">Back</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <td>ICON : </td>
                                            <td><b><img src="/icons/{{ $coment->icon }}" alt=""width="60px"></b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>short content : </td>
                                            <td><b>{{ $coment->short_content }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>Img : </td>
                                            <td><b><img src="/images/{{ $coment->img }}" alt=""width="60px"></b>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Name : </td>
                                            <td><b>{{ $coment->name }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>work : </td>
                                            <td><b>{{ $coment->work }}</b></td>
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
