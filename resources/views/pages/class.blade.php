@extends('layouts.main')

@section('content')
    <!-- Header Start -->
    <x-header name1="Sinflar" name2="Sinf"></x-header>

    <!-- Header End -->


    <!-- Class Start -->
<x-group name1='Ommabop darslar' name2='bilolmadim'></x-group>
            </div>
            @include('sections.groups')
            @include('sections.groups')
        </div>
    </div>
    <!-- Class End -->


    <!-- Registration Start -->
    @include('sections.order')
    <!-- Registration End -->
@endsection
