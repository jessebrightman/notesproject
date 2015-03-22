@extends('layouts.basic')

@section('maincontent')

    <form>
    {{ Form::open(array('route' => 'notes.store')) }}
    <h1>{{ Confide::user()->username }}</h1>
    <div class="well">
        <b>email:</b> {{ Confide::user()->email }}
        <b>id:</b> {{ Confide::user()->id }}
        <input type="submit" class="btn btn-lrg btn-success"/>
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
                        @foreach($notes as $n)
                            <ul>
                                <li>{{$n->notes}}</li>
                            </ul>
                        @endforeach
                        {{ Form::label('notes', 'Notes') }}
                        {{ Form::text('notes', Input::old('notes'), array('class' => 'form-control')) }}

                       <input type="text" id="notes"/>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 listing">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>TBD</h4>
                    </div>
                    <div class="panel-body">
                        @foreach($notes as $n)
                            <ul>
                                <li>{{$n->tbd}}</li>
                            </ul>
                        @endforeach
                        {{ Form::label('tbd', 'Tbd') }}
                        {{ Form::text('tbd', Input::old('tbd'), array('class' => 'form-control')) }}
                        <input type="text" id="tbd"/>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 listing">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>HYPERLINKS</h4>
                    </div>
                    <div class="panel-body">
                        @foreach($notes as $n)
                            <ul>
                                <a href="http://{{$n->hyperlinks}}">{{$n->hyperlinks}}</a>
                            </ul>
                        @endforeach
                        {{ Form::label('hyperlinks', 'Hyperlinks') }}
                        {{ Form::text('hyperlinks', Input::old('hyperlinks'), array('class' => 'form-control')) }}
                         <input type="text" id="hyperlinks"/>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 listing">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>IMAGES</h4>
                    </div>
                    <div class="panel-body">
                        @foreach($notes as $n)
                            <div class="thumbnail">
                                {{$n->images}}
                            </div>
                        @endforeach
                        {{ Form::label('images', 'Images') }}
                        {{ Form::file('images', Input::old('images'), array('class' => 'form-control')) }}

                         <input type="file" id="images"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </form>
    {{ Form::close() }}
    @stop
