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
                    <h3>how our professional content creation services work</h3>
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
                    <h3>Our platform makes order placement and content creation simple for both clients and writers with the steps below</strong></h3>
                </div>
                <div class="col-md-3 col-sm-12"></div>
            </div><br><br>
            
            <div class="row">
                <ul class="timeline">
                    <li>
                      <div class="timeline-badge"><img src="img/order.png" alt=""></div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">place order</h4>
                        </div>
                        <div class="timeline-body">
                          <p>Fill in the order from to provide writers with content details you need done. Provide all details pertaining
                            your project including the deadline when its due.</p>
                        </div>
                      </div>
                    </li>
                    <li class="timeline-inverted">
                      <div class="timeline-badge"><img src="img/writer.png" alt=""></div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">writer assigned</h4>
                        </div>
                        <div class="timeline-body">
                          <p>A quality writer is assigned to handle your content as per your specifications. We will choose the right writer whose
                            skill set fully satisfies your job description to ensure high quality results are achieved on your project</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="timeline-badge"><img src="img/progress.png" alt=""></div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">check progress</h4>
                        </div>
                        <div class="timeline-body">
                          <p>Communicate with the writer and check on the project's progress. You can get in touch with the writer for inquiries and checking the job's progress.</p>
                        </div>
                      </div>
                    </li>
                    <li class="timeline-inverted">
                      <div class="timeline-badge"><img src="img/approve.png" alt=""></div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">approve order</h4>
                        </div>
                        <div class="timeline-body">
                          <p>Preview your order and approve it before final submission. Rate the writers as per their services and remember to leave
                            feedback on your customer experience with content shark.</p>
                        </div>
                      </div>
                    </li>
                </ul>
            </div>
        </div>
    </section><br>
@stop