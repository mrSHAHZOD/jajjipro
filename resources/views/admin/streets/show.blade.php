

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
              <a href="{{ route('admin.streets.index') }}" class="btn btn-primary" style="position:absolute; right:50;">Back</a>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>


                    <tr>
                      <td>vloyat : </td>
                      <td><b>{{ $streets->name}}</b></td>
                  </tr>
                  <td>tuman : </td>
                      <td><b>{{ $streets->noun}}</b></td>
                  </tr>
                      <td>Mahalla : </td>
                      <td><b>{{ $streets->title }}</b></td>
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
