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
                            <h4>Bazaga toliq boglanganlar</h4>
                            <a href="{{ route('admin.regions.index') }}" class="btn btn-primary"
                                style="position:absolute; right:50;">Back</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>

                                        @foreach ($regions as $region)
                                            <tr>
                                                <td>vloyat : </td>
                                                <td><b>{{ $region->name ?? 'boglanmagan' }}</b></td>
                                            </tr>
                                            <tr>
                                                <td>tuman: </td>
                                                <td><b>{{ $region->noun ?? 'boglanmagan'}}</b></td>
                                            </tr>
                                            <tr>
                                              <td>Mahalla : </td>
                                              <td><b>{{ $region->title ?? 'boglanmagan' }}</b></td>
                                          </tr>

                                        @endforeach

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
