{{-- sidebar menu item  --}}
@props(['isActive' => '','url' => '#', 'title' => '' ,'featherIcon' =>'minus'])
{{-- <div {{ $attributes->merge(['class' => 'alert alert-'.$type]) }}>
    {{ $message }}
</div> --}}

<li class="nav-item">
    <a class="nav-link {{ $isActive }} " aria-current="page" href="{{ $url }}">
        <span data-feather="{{$featherIcon}}"></span>
        {{ $title }}
    </a>
</li>
