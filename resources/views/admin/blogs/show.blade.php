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
              <a href="{{ route('admin.blogs.index') }}" class="btn btn-primary" style="position:absolute; right:50;">Back</a>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                        <td>Title: </td>
                        <td><b>{{ $blog->title }}</b></td>
                    </tr>
                    <tr>
                        <td>Ismi : </td>
                        <td><b>{{ $blog->name }}</b></td>
                    </tr>
                    <tr>
                        <td>img: </td>
                        <td><b><img src="/images/{{ $blog->img }}" alt=""width="60px"></b></td>
                    </tr>
                    <tr>
                        <td>short content: </td>
                        <td><b>{{ $blog->short_content }}</b></td>
                    </tr>


                   {{--  <tr>
                        <td>Rasmi : </td>
                        <td>
                          <img alt="image" src="/images/{{ $teacher->img }}" width="59">
                        </td>
                    </tr> --}}



                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
