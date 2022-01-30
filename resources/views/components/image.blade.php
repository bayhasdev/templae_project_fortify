@props(['src' => '', 'alt' => '', 'height' => '', 'width' => ''])

<img src="{{ $src ?? url('assets/images/placeholder.png') }}" alt="{{ $alt }}" height="{{ $height }}"
    width="{{ $width }}">
