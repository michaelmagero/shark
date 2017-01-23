@extends('layouts.pages')

@section ('header')
    
    Pricing | Content shark
@stop

 @yield('jumbotron')
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12"></div>
                <div class="col-md-6 col-sm-12 text-center">
                    <h3>professional content creation services at flexible pricing</h3>
                </div>
                <div class="col-md-3 col-sm-12"></div>
            </div>
        </div>
    </div>

@section ('content')
    <section id="howitworks">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12"></div>
                <div class="col-md-6 col-sm-12 text-center">
                    <h3>At content shark, we offer <strong>flexible pricing that matches your content needs</strong></h3>
                </div>
                <div class="col-md-3 col-sm-12"></div>
            </div><br><br>
            
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="panel panel-white">
                        <div class="panel-body">
                            <div class="header text-center">
                                <h4>entry level</h4>
                                <div class="charges">
                                    <span class="amount">from &nbsp;<sup>$</sup> <span class="price">2.2</span> </span><br>
                                    <span class="per"><sub>cents/per word</sub></span>
                                </div><br>

                                <div class="text-center">
                                    <a href="{{ url('') }}" class="btn btn-primary">Order now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="panel panel-white">
                        <div class="panel-body">
                            <div class="header text-center">
                                <h4>freelance</h4>
                                <div class="charges">
                                    <span class="amount">from &nbsp;<sup>$</sup> <span class="price">3.5</span> </span><br>
                                    <span class="per"><sub>cents/per word</sub></span>
                                </div><br>

                                <div class="text-center">
                                    <a href="{{ url('') }}" class="btn btn-primary">Order now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="panel panel-white">
                        <div class="panel-body">
                            <div class="header text-center">
                                <h4>professional</h4>
                                <div class="charges">
                                    <span class="amount">from &nbsp;<sup>$</sup> <span class="price">8</span> </span><br>
                                    <span class="per"><sub>cents/per word</sub></span>
                                </div><br>

                                <div class="text-center">
                                    <a href="{{ url('') }}" class="btn btn-primary">Order now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="panel panel-white">
                        <div class="panel-body">
                            <div class="header text-center">
                                <h4>expert</h4>
                                <div class="charges">
                                    <span class="amount">from &nbsp;<sup>$</sup> <span class="price">12</span> </span><br>
                                    <span class="per"><sub>cents/per word</sub></span>
                                </div><br>

                                <div class="text-center">
                                    <a href="{{ url('') }}" class="btn btn-primary">Order now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br>

            <div class="row">
                <div class="col-md-2 col-sm-12"></div>
                <div class="col-md-8 col-sm-12">
                    <div class="panel word-calculator">
                        <div class="text-center">
                           <p> 
                                <strong>$48</strong>
                                <span>for</span>
                                <input class="words-input text-center" type="number" step="50" value="600" style="width: 111px;">&nbsp;
                                <span>words at</span>&nbsp;
                                <span class="level-selector text-center">
                                    <select name="" id="input" required="required">
                                        <option value="">Entry level</option>
                                        <option value="">Freelance level</option>
                                        <option value="">Professional level</option>
                                        <option value="">Expert level</option>
                                    </select>
                                </span>&nbsp;
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12"></div>
            </div>
        </div>
    </section><br>
@stop