@extends('layouts.basic')

@section('maincontent')


    <h1>{{ Confide::user()->username }}</h1>
    <div class="well">
        <b>email:</b> {{ Confide::user()->email }}
    </div>


<div class="container-fluid">
    <div id="googleMap" class="jumbotron jumbotron-search" ></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-md-4 listing"><a href="listing1.html">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="spriteicon11"></div>
                            <h4>Notes</h4>
                        </div>
                        <div class="panel-body">
                            <img class="thumbnail" src="content\apartment.jpg"/>
                            <p>Available: April 1</p>
                            <p><img src="content\images\images\icon5.png"/>$865</p>
                            <p><img src="content\images\images\icon2.png"/>Apartment</p>
                            <div style="clear:both">
                                <p>1989 Marine Drive, North Vancouver, BC</p>
                            </div>
                            <h3><img src="content\images\images\icon6.png"/>1<img src="content\images\images\icon7.png"/>1
                                <img class="pull-right" src="content\images\images\icon10.png"/>
                                <img class="pull-right" src="content\images\images\icon4.png"/>
                            </h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 listing">
                <a href="listing2.html">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="spriteicon11"></div>
                            <h4>Apartment in Downtown</h4>
                        </div>
                        <div class="panel-body">
                            <img class="thumbnail" src="content\images\rentline_logo.png"/>
                            <p>Available: April 1</p>
                            <p><img src="content\images\images\icon5.png"/>$1800</p>
                            <p><img src="content\images\images\icon2.png"/>Apartment</p>
                            <div style="clear:both">
                                <p>1800 Burrard St, Vancovuer, BC</p>
                            </div>
                            <h3><img src="content\images\images\icon6.png"/>2<img src="content\images\images\icon7.png"/>2
                                <img class="pull-right" src="content\images\images\icon4.png"/>
                            </h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 listing">
                <a href="listing3.html">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="spriteicon11"></div>
                            <h4>House in Carisbrooke</h4>
                        </div>
                        <div class="panel-body">
                            <img class="thumbnail" src="content\images\rentline_logo.png"/>
                            <p>Available: June 1</p>
                            <p><img src="content\images\images\icon5.png"/>$10,000</p>
                            <p><img src="content\images\images\icon3.png"/>House</p>
                            <div style="clear:both">
                                <p>4285 Arbutus, Vancovuer, BC</p>
                            </div>
                            <h3><img src="content\images\images\icon6.png"/>5<img src="content\images\images\icon7.png"/>4</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4 listing">
                <a href="listing4.html">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="spriteicon11"></div>
                            <h4>Apartment in North Vancouver</h4>
                        </div>
                        <div class="panel-body">
                            <img class="thumbnail" src="content\apartment.jpg"/>
                            <p>Available: May 1</p>
                            <p><img src="content\images\images\icon5.png"/>$1200</p>
                            <p><img src="content\images\images\icon2.png"/>Apartment</p>
                            <div style="clear:both">
                                <p>1989 Marine Drive, North Vancouver, BC</p>
                            </div>
                            <h3><img src="content\images\images\icon6.png"/>2<img src="content\images\images\icon7.png"/>1
                                <img class="pull-right" src="content\images\images\icon10.png"/>
                                <img class="pull-right" src="content\images\images\icon4.png"/>
                            </h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 listing">
                <a href="listing5.html">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="spriteicon11"></div>
                            <h4>Listing-Title</h4>
                        </div>
                        <div class="panel-body">
                            <p class="thumbnail"><img src="content\images\rentline_logo.png"/></p>
                            <p class="">Listing-Availability</p>
                            <p class="">Listing-Price</p>
                            <p class="">Listing-Data</p>
                            <p class="">Listing-Address</p>
                            <p class="">Listing-Info</p>
                            <p class="">Listing-Footer</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

    @stop