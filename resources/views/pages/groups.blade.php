@extends('layouts.main')

@section('content')
    <!-- Header Start -->
    <x-header name1="  Bizning o'qituvchilarimiz" name2="O'qituvchilar"></x-header>

    <!-- Header End -->


    <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Rahbariyat</span></p>
            </div>
            <div class="row">
                @foreach ($teachers as $teacher)
                    @if ($teacher->level == 0)
                        @include('sections.teacher')
                    @endif
                @endforeach

            </div>




            <div class="text-center mb-2">
                <p class="section-title px-5"><span class="px-5">Bizning o'qituvchilarimiz</span></p>
                <h1 class="mb-5">O'qituvchilarimiz bilan tanishing</h1>
            </div>

            <div class="row">
                @foreach ($teachers1 as $teacher)
                    @if ($teacher->level == 1)
                        @include('sections.teacher')
                    @endif
                @endforeach

            </div>

        </div>
    </div>
    <!-- Team End -->

{{--
      <!-- Testimonial Start -->
    @include('sections.coment')
    <!-- Testimonial End --> --}}
@endsection
