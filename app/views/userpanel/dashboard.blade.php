@extends('layouts.basic')

@section('maincontent')

<form>
    <h1>{{ Confide::user()->username }}</h1>
    <div class="well">
        <b>email:</b> {{ Confide::user()->email }}
        <b>id:</b> {{ Confide::user()->id }}
        <input type="submit" class="btn btn-lrg btn-success"/>
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

                        <input type="file" id="images"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</form>
    @stop