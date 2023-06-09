@extends('layouts.main')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
        <div class="row align-items-center px-3">
            <div class="col-lg-6 text-center text-lg-left">
                <h4 class="text-white mb-4 mt-5 mt-lg-0">@lang('home.president')</h4>
                <h1 class="display-3 font-weight-bold text-white">@lang('home.h_title')</h1>
                <!-- <p class="text-white mb-4">Sea ipsum kasd eirmod kasd magna, est sea et diam ipsum est amet sed sit.
                        Ipsum dolor no justo dolor et, lorem ut dolor erat dolore sed ipsum at ipsum nonumy amet. Clita
                        lorem dolore sed stet et est justo dolore.</p> -->
                <!-- <a href="" class="btn btn-secondary mt-1 py-3 px-5">Ko'proq ma'lumot olish</a> -->
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <img class="img-fluid mt-5" src="/assets/img/header.png" alt="">
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Facilities Start -->
    @include('sections.infos')
    <!-- Facilities Start -->

    <!-- About Start -->
    @include('sections.about')
    <!-- About End -->

    <!-- Class Start -->
    <x-group name1=" {{  __('home.groups_t') }} " name2="{{ __('home.groups_sh') }}"></x-group>
    <div class="row">

                @include('sections.groups')

    </div>
    <!-- Class End -->

    <!-- Registration Start -->
    @include('sections.order')
    <!-- Registration End -->

    <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">@lang('home.teacher_t')</span></p>
                <h1 class="mb-4">@lang('home.teacher_sh')</h1>
            </div>

            @foreach ($teachers as $teacher)
            @if ($teacher->level == 0)
             @include('sections.teacher')
            @endif
            @endforeach

        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    @include('sections.coment')
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">@lang('home.blogs_t')</span></p>
                <h1 class="mb-4">@lang('home.blogs_sh')</h1>
            </div>
            @include('sections.blogs')
        </div>
    </div>
    <!-- Blog End -->
@endsection
