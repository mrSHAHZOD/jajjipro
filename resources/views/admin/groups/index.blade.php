@extends('admin.layouts.layout')

@section('groups')
    active
@endsection

@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    @if ($message = Session::get('danger'))
                    <div class="alert alert-danger">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                
                    <div class="card">
                        <div class="card-header">
                            <h4>Groups</h4>
                            <a href="{{ route('admin.groups.create') }}" class="btn btn-primary"
                                style="position:absolute; right:50;">Create</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>IMG</th>
                                            <th>Title</th>
                                            <th>Short Content</th>
                                            <th>Age</th>
                                            <th>seat</th>
                                            <th>class_time</th>
                                            <th>peyment</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($groups) == 0)
                                            <tr>
                                                <td colspan="5" class="h5 text-center text-muted">Ma'lumot qo'shilmagan
                                                </td>
                                            </tr>
                                        @endif

                                        @foreach ($groups as $group)
                                            <tr>
                                                <td>
                                                    {{ ++$loop->index }}
                                                </td>
                                                <td><img src="/images/{{ $group->img }}" alt=""width="100px"></td>
                                                <td>{{ $group->title }}</td>
                                                <td>{{ $group->short_content }}</td>
                                                <td>{{ $group->age }}</td>
                                                <td>{{ $group->seat }}</td>
                                                <td>{{ $group->class_time }}</td>
                                                <td>{{ $group->payment }}</td>
                                                <td>
                                                    <form action="{{ route('admin.groups.destroy', $group->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('admin.groups.show', $group->id) }}"
                                                            class="btn btn-info">
                                                            <ion-icon class="fas fa-info-circle"></ion-icon>
                                                        </a>
                                                        <a href="{{ route('admin.groups.edit', $group->id) }}" class="btn btn-primary">
                                                            <ion-icon class="far fa-edit"></ion-icon>
                                                        </a>
                                                        <button class="btn btn-danger"
                                                            onclick="return confirm('Rostdan o`chirmoqchimisiz ?')">
                                                            <ion-icon class="fas fa-times"></ion-icon>
                                                        </button>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                {{ $groups->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
