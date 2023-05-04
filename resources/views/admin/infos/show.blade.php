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
              <a href="{{ route('admin.infos.index') }}" class="btn btn-primary" style="position:absolute; right:50;">Back</a>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                        <td>Title : </td>
                        <td><b>{{ $info->title }}</b></td>
                    </tr>
                    <tr>
                      <td>Content : </td>
                      <td><b>{{ $info->content }}</b></td>
                  </tr>
                  <tr>
                    <td>Icon : </td>
                    <td><b><img src="/icons/{{ $info->icon }}" alt=""width="70px"></b></td>
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
