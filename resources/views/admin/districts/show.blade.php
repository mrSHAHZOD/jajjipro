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
                            <a href="{{ route('admin.regions.index') }}" class="btn btn-primary"
                                style="position:absolute; right:50;">Back</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                      @foreach ($districts as $district )

                                      <tr>
                                        <td>TUman</td>
                                        <td><b>{{ $district->noun  }}</b></td>
                                      </tr>

                                      <tr>
                                        <td>MAhalla</td>


                                        <td><b>{{ $district->title  }}</b></td>
                                      </tr>

                                       {{--
                                          @foreach ($districts as $district)
                                          <tr>
                                              <td>
                                                  {{ ++$loop->index }}
                                              </td>
                                              <td>{{ $district->noun  }}</td>
                                              <td>{{$district->title ?? 'boglanmagan'}}</td> --}}




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
