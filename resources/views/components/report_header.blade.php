<h2 class="font-weight-bold text-center mt-2 mb-4">{{ $title }}</h2>
@isset($subTitle)
    <h3 class="text-center">{{ $subTitle }}</h3>
@endisset
<div class="row">
    <div class="col-4">
        <img src="{{ asset($logo) }}" class="w-100" alt="">
    </div>
    <div class="col-4"></div>
    <div class="col-4">
        @isset($type)
            @switch($type)
                @case('leiter')
                    <img src="{{ asset('images/lieter3.png') }}" class="w-100" alt="">
                @break

                @case('abas')
                    <img src="{{ asset('images/lieter3.png') }}" class="w-100" alt="">
                @break
            @endswitch
        @endisset
    </div>
</div>
