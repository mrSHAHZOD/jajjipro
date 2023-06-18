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
                            <h3> Mentor ma'lumotlari</h3>
                            <a class="create__btn" href="{{ route('admin.infos.index') }}"> <i
                               class='bx bx-arrow-back'></i>Qaytish</a>

                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>


                            <tr>
                              <td>
                                  <p>Info UZ : </p>
                              </td>
                              <td><b>{{ $info->title_uz }}</b></td>
                          </tr>

                          <tr>
                              <td>
                                  <p>Info RU : </p>
                              </td>
                              <td><b>{{ $info->title_ru }}</b></td>
                          </tr>

                          <tr>
                              <td>
                                  <p>Info EN : </p>
                              </td>
                              <td><b>{{ $info->title_en }}</b></td>
                          </tr>

                          <tr>
                              <td>
                                  <p>Des UZ: </p>
                              </td>
                              <td><b>{!! $info->description_uz !!}</b></td>
                          </tr>

                          <tr>
                              <td>
                                  <p>Des RU: </p>
                              </td>
                              <td><b>{!! $info->description_ru !!}</b></td>
                          </tr>

                          <tr>
                              <td>
                                  <p>Des EN: </p>
                              </td>
                              <td><b>{!! $info->description_en !!}</b></td>
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
