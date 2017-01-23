@extends('layouts.pages')

@section ('header')
    
    Contact | Content shark
@stop

 @yield('jumbotron')
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12"></div>
                <div class="col-md-6 col-sm-12 text-center">
                    <h3>contact us for professional content creation services</h3>
                </div>
                <div class="col-md-3 col-sm-12"></div>
            </div>
        </div>
    </div>

@section ('content')
    <section id="howitworks">
        <div class="container">
            
            <div class="row">
                <div class="col-md-1 col-sm-12"></div>
                <div class="col-md-4 col-sm-12">
                    <h4>Via telephone</h4><br>
                    <span><i class="fa fa-phone"></i>&nbsp; +1-888-123-4567</span>
                </div>
                <div class="col-md-6 col-sm-12">
                    <h4>Leave a message</h4><br>
                    <form action="" method="POST" role="form">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Firstname</label>
                                    <input type="text" class="form-control" id="" placeholder="enter first name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Lastname</label>
                                    <input type="text" class="form-control" id="" placeholder="enter last name">
                                </div>
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" id="" placeholder="enter email">
                        </div>

                        <div class="form-group">
                            <label for="">Choose a topic</label>
                            <select name="" id="input" required="required" class="form-control">
                                <option value="">Questions from clients/writers</option>
                                <option value="">Techincal issue</option>
                                <option value="">Customer services</option>
                                <option value="">General inquiry</option>
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Phone number</label>
                                    <input type="text" class="form-control" id="" placeholder="enter phone number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Company name</label>
                                    <input type="text" class="form-control" id="" placeholder="enter your company's name">
                                </div>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <input type="text" class="form-control" id="" placeholder="how much is 4+5?">
                        </div><br>

                        <div class="form-group">
                            <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="Message"></textarea>
                        </div>
                    
                        
                    
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-md-1 col-sm-12"></div>
            </div>
        </div>
    </section><br>
@stop