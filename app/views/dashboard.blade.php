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
                        <textarea id="notes" name="notes" rows="20" cols="50" class="form-control">@foreach($notes as $n){{$n->notes}}@endforeach</textarea>
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
                        <textarea id="tbd" name="tbd" rows="20" cols="50" class="form-control">@foreach($notes as $n){{$n->tbd}}@endforeach</textarea>
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
                        @foreach($links as $l)
                            @if($l->hyperlinks != null)
                            <p><a href="http://{{$l->hyperlinks}}">{{$l->hyperlinks}}</a>
                                <textarea id="hyperlinks{{$l->id}}" name="hyperlinks{{$l->id}}" rows="1" cols="50" class="form-control" >{{$l->hyperlinks}}</textarea>
                                <input type="hidden" id="linkid" value="{{$l->id}}" />
                                <a class="btn btn-xs btn-warning" href="{{ URL::to('destroy/' . $l->id ) }}">Delete</a></p>
                            @endif
                        @endforeach

                        {{ Form::text('newhyperlinks', Input::old('newhyperlinks'), array('class' => 'form-control')) }}
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
                                <p><a class="btn btn-xs btn-warning" href="{{ URL::to('destroy/image/' . $i->id ) }}">Delete</a></p>
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
