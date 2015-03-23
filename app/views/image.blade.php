@extends('layouts.basic')

@section('maincontent')
<div class="container">
    @foreach($images as $i)
        <img src="data:image/jpeg;base64,{{$i->images}}" alt="large image" />
    @endforeach
</div>

@stop