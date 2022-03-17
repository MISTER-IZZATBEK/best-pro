
@extends ('layouts.main')
@section('content')
    Assalom,
        @if($name){{$name}}@else Admin @endif!
    <hr/>
    @foreach($arr  as $value)
        {{$value}},
        @endforeach
    @switch($name)
        @case('Izzatbek')
        @break
        @case('Orolboy')
        @break
        @default
        @break
        @endswitch

    xayr{{route('first-route')}}
@endsection
