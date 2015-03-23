@extends('layouts.basic')

@section('maincontent')


    {{ Form::open(array('route' => 'notes.store', 'method' => 'post', 'enctype' => 'multipart/form-data')) }}
    <h1>{{ Confide::user()->username }}</h1>
    <div class="jumbotron">
        <b>user:</b> {{ Confide::user()->email }}
        {{ Form::submit('Save!', array('class' => 'btn btn-primary')) }}
    </div>


<div class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-md-3 listing">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>NOTES</h4>
                    </div>
                    <div class="panel-body">
                        {{ Form::label('notes', 'Notes') }}
                        <textarea id="notes" name="notes" rows="10" cols="50" class="form-control">@foreach($notes as $n){{$n->notes}}@endforeach</textarea>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 listing">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>TBD</h4>
                    </div>
                    <div class="panel-body">
                        {{ Form::label('tbd', 'Tbd') }}
                        <textarea id="tbd" name="tbd" rows="10" cols="50" class="form-control">@foreach($notes as $n){{$n->tbd}}@endforeach</textarea>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 listing">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>HYPERLINKS</h4>
                    </div>
                    <div class="panel-body">
                        {{ Form::label('hyperlinks', 'Hyperlinks') }}
                        @foreach($notes as $n)
                            @if($n->hyperlinks != null)
                            <p><a href="http://{{$n->hyperlinks}}">{{$n->hyperlinks}}</a>
                                <textarea id="hyperlinks" name="hyperlinks" rows="1" cols="50" class="form-control">{{$n->hyperlinks}}</textarea>
                                <a class="btn btn-sm btn-warning" href="{{ URL::to('destroy/' . $n->id ) }}">Delete</a></p>
                            @endif
                        @endforeach
                        {{ Form::text('hyperlinks', Input::old('hyperlinks'), array('class' => 'form-control')) }}

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 listing">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>IMAGES</h4>
                    </div>
                    <div class="panel-body">

                        @foreach($images as $i)
                            <div class="thumbnail">
                                <a href="{{ URL::to('image/' . $i->id) }}"><img src="data:image/jpeg;base64,{{$i->images}}" /></a>
                                <p><a class="btn btn-sm btn-warning" href="{{ URL::to('destroy/image/' . $i->id ) }}">Delete</a></p>
                            </div>

                        @endforeach
                        {{ Form::label('images', 'Images') }}
                        {{ Form::file('images', Input::old('images'), array('class' => 'form-control')) }}


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    {{ Form::close() }}
    @stop
