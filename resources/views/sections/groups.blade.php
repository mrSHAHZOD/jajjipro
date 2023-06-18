@foreach ($groups as $group )
   <div class="row">



            <div class="col-lg-4 mb-5">
                <div class="card border-0 bg-light shadow-sm pb-2">
                    <img class="card-img-top mb-2" src="/images/{{ $group->img }}" alt="">
                    <div class="card-body text-center">
                        <h4 class="card-title">{{ $group->title }}</h4>
                        <p class="card-text">{{ $group->short_content }}</p>
                    </div>
                    <div class="card-footer bg-transparent py-4 px-5">
                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right"><strong>@lang('home.groups_s1')</strong></div>
                            <div class="col-6 py-1">{{ $group->age }} @lang('home.groups_age')</div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right"><strong>@lang('home.groups_s2')</strong></div>
                            <div class="col-6 py-1">{{ $group->seat }} @lang('home.groups_seat')</div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right"><strong>@lang('home.groups_time')</strong></div>
                            <div class="col-6 py-1">08:00 - {{ $group->class_time }}</div>
                        </div>
                        <div class="row">
                            <div class="col-6 py-1 text-right border-right"><strong>@lang('home.groups_payment')</strong></div>
                            <div class="col-6 py-1">{{ $group->payment }} / @lang('home.groups_data')</div>
                        </div>
                    </div>
                    <a href="tel:+998996111300" class="btn btn-primary px-4 mx-auto mb-4">@lang('home.groups_add')</a>
                </div>
            </div>

        </div>

        @endforeach
