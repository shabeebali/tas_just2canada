@if($href)
    <a href="{{ $href }}" {{$attributes->merge(['class' => $componentClass])}}>{{$label}}</a>
@else
    <button type="{{$type}}" {{$attributes->merge(['class' => $componentClass])}}>{{$label}}</button>
@endif