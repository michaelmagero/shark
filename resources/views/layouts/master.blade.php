    @include('includes.header')
    
    @yield('jumbotron')
	<div class="jumbotron">
		<div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h2>professional content creation</h2><br>
                    <p>Expert content creators for agencies, brands and individuals.</p>
                    <p id="cta_buttons">
                        <a href="{{ url('/register') }}" class="btn btn-success signup_btn">Get started</a>
                        <a href="{{ url('/register') }}" class="btn btn-success signup_btn" id="learn-btn">Learn more</a>
                    </p>
                </div>

                <div class="col-md-1 col-sm-12"></div>
                <div class="col-md-5 col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="form-group row">
                              <label for="email-input" class="col-xs-2 col-form-label">Email</label>
                              <div class="col-xs-10">
                                <input class="form-control" type="email"  id="example-text-input">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="service-type" class="col-xs-2 col-form-label">Service type</label>
                              <div class="col-xs-10">
                                <select name="" id="input" class="form-control" required="required">
                                    <option value="">Select One</option>
                                    <option value="">Content Solution</option>
                                    <option value="">Academic Solution</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="pages" class="col-xs-2 col-form-label">Pages</label>
                              <div class="col-xs-4">
                                <div class="text-center">     
                                    <div class="input-group">          
                                        <span class="input-group-btn">             
                                            <button type="button" class="btn btn-sm btn-default  btn-number " onclick="OnChangeCountButton(this)" data-type="minus" data-field="quant[1]"><span class="glyphicon glyphicon-minus"></span></button>
                                        </span>          
                                        <input name="quant[1]" onkeydown="inputnumeronkeydown(event)" class="form-control input-sm input-number planQuantity" value="0" min="0" max="100" type="text">         
                                        <span class="input-group-btn">            
                                            <button type="button" class="btn btn-sm btn-default btn-number" onclick="OnChangeCountButton(this)" data-type="plus" data-field="quant[1]"><span class="glyphicon glyphicon-plus"></span></button>         
                                        </span>       
                                    </div>
                                </div>
                              </div>
                                  <h5 id="word-count">275 Words</h5>
                            </div>
                            <div class="form-group row">
                              <label for="deadline" class="col-xs-2 col-form-label">Deadline</label>
                              <div class="col-xs-10">
                                    <div class='input-group date' id='datetimepicker1'>
                                        <input type='text' class="form-control" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="col-xs-2"></div>
                              <div class="col-xs-10">
                                <button type="button" class="btn btn-success">Continue &nbsp; <i class="fa fa-angle-right"></i></button>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
		</div>
	</div>

    @yield ('services')
    <section id="services">
        <div class="container">

            <div class="row"><br><br>
                <div class="col-md-2 col-sm-12"></div>
                <div class="col-md-4 col-sm-12 content_div">    
                    <h3>Content solutions</h3>

                    <p>Reach out to your target audience with fresh and engaging content for your website, newsletters,blog posts etc. Rank high on
                    Google and stamp your brand's presence online.</p>

                    <button class="btn btn-success">Get fresh content</button>
                    </p>
                </div>
                <div class="col-md-1 col-sm-12"></div>
                <div class="col-md-5 col-sm-12 pull-left">
                    <img src="img/content.jpg" alt="">
                </div>
            </div><br><br><br>

            <div class="row">
                <div class="col-md-2 col-sm-12"></div>
                <div class="col-md-4 col-sm-12 pull-left">
                    <img src="img/academic.png" alt="" id="academic_img">
                </div>
                <div class="col-md-5 col-sm-12 content_div">      
                    <h3>Academic solutions</h3>

                    <p>Have any of your academic paper written by a professional writer from content shark. Just place your order and specify
                    the order details and the deadline and let our writers deliver.</p>
                    <p>
                    
                    <button class="btn btn-success">Write my paper</button>
                    </p>
                </div>
                <div class="col-md-1 col-sm-12"></div>
            </div>
        </div>
    </section>

    @yield('intro')
    <section id="intro">
    	<div class="container">
    		<div class="row">
                <div id="carousel-id" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                   
                    <div class="row -fluid">
                        <div class="col-md-2 col-sm-12"></div>
                        <div class="col-md-2 col-sm-12 text-center">
                            <i class="fa fa-3x fa-pencil-square-o"></i>
                            <h4 class="float-left">CV Writing</h4 >
                        </div>

                        <div class="col-md-2 col-sm-12 text-center">
                            <i class="fa fa-3x fa-chrome"></i>
                            <h4 class="float-left">Website content</h4 >
                        </div>

                        <div class="col-md-2 col-sm-12 text-center">
                            <i class="fa fa-3x fa-file-text-o"></i>
                            <h4 class="float-left">Blog posts</h4 >
                        </div>

                        <div class="col-md-2 col-sm-12 text-center">
                            <i class="fa fa-3x fa-envelope-o"></i>
                            <h4 class="float-left">Cover letters</h4 >
                        </div>
                        <div class="col-md-2 col-sm-12"></div>
                    </div>
                </div>

                <div class="item">
                   
                    <div class="row -fluid">
                        <div class="col-md-2 col-sm-12"></div>
                        <div class="col-md-2 col-sm-12 text-center">
                            <i class="fa fa-3x fa-newspaper-o"></i>
                            <h4 class="float-left">Newsletters</h4 >
                        </div>

                        <div class="col-md-2 col-sm-12 text-center">
                            <i class="fa fa-3x fa-shopping-bag"></i>
                            <h4 class="float-left">Product description</h4 >
                        </div>

                        <div class="col-md-2 col-sm-12 text-center">
                            <i class="fa fa-3x fa-laptop"></i>
                            <h4 class="float-left">e Books</h4 >
                        </div>

                        <div class="col-md-2 col-sm-12 text-center">
                            <i class="fa fa-3x fa-copyright"></i>
                            <h4 class="float-left">Copyrighting</h4 >
                        </div>
                        <div class="col-md-2 col-sm-12"></div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
    		</div>
    	</div>

    </section>

    @yield('features')
    <section id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <h3>Why choose content shark?</h3>
                </div>
            </div><br><br>

            <div class="row">
                <div class="col-md-1 col-sm-12"></div>
                <div class="col-md-1 col-sm-12">
                    <img src="img/quality.png" alt="">
                </div>
                <div class="col-md-4 col-sm-12 pull-left">
                    <h4>Quality guaranteed</h4>
                    <p>We have specialized pool of writers who will guarantee you SEO friendly web content and Original content with 0% plagiarism. </p>
                </div>

                <div class="col-md-1 col-sm-12"></div>
                <div class="col-md-1 col-sm-12">
                    <img src="img/laptop.png" alt="">
                </div>
                <div class="col-md-4 col-sm-12 pull-left">
                    <h4>Fast and Simple</h4>
                    <p>We provide you with an instant online ordering platform accessible across all devices. </p>
                </div>
            </div><br><br>

            <div class="row">
                <div class="col-md-1 col-sm-12"></div>
                <div class="col-md-1 col-sm-12">
                    <img src="img/pricing.png" alt="">
                </div>
                <div class="col-md-4 col-sm-12 pull-left">
                    <h4>Competitive pricing</h4>
                    <p>Get flexible pricing with a $2.2 cents per word deal to die for and an option to manage your own accounts. </p>
                </div>

                <div class="col-md-1 col-sm-12"></div>
                <div class="col-md-1 col-sm-12">
                    <img src="img/search.png" alt="">
                </div>
                <div class="col-md-4 col-sm-12 pull-left">
                    <h4>Brand visibility</h4>
                    <p>Rank high on search engines and build authority, credibility and trust and attract inbound traffic with fresh and captivating content. </p>
                </div>
            </div><br>
        </div>
    </section>

    @yield('how')
    <section id="how">
    	<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 text-center">
					<h3>How it works</h3>
				</div>
			</div><br><br>

			<div class="row">
				<div class="col-md-2 col-sm-12 text-center">
                    <img src="img/order.png" alt="">
					<h4> Place order</h4>
					<p>Fill in the order from to provide writers with content details you need done. </p>
				</div>
                <div class="col-md-1 col-sm-12 text-center">
                    <i class="fa fa-arrow-right"></i>
                </div>
				<div class="col-md-2 col-sm-12 text-center">
                    <img src="img/writer.png" alt="">
					<h4>Writer assigned</h4>
					<p>A quality writer is assigned to handle your content as per your specifications.  </p>
				</div>
                <div class="col-md-1 col-sm-12 text-center">
                    <i class="fa fa-arrow-right"></i>
                </div>
                <div class="col-md-2 col-sm-12 text-center">
                    <img src="img/progress.png" alt="">
                    <h4>Check progress</h4>
                    <p>Communicate with the writer and check on the project's progress.  </p>
                </div>
                <div class="col-md-1 col-sm-12 text-center">
                    <i class="fa fa-arrow-right"></i>
                </div>
                <div class="col-md-2 col-sm-12 text-center">
                    <img src="img/approve.png" alt="">
                    <h4>Approve order</h4>
                    <p>Preview your order and approve it before final submission.  </p>
                </div>

			</div>
		</div>
    </section>

    @yield('testimonials')
    
    <section id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-sm-12"></div>
                <div class="col-md-1 col-sm-12 testimony_1">
                    <img src="img/test_2.jpeg" alt="">
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="testimonial">
                        <div class=" text-bubble-one">
                            <p>Contentshark does a very wonderful work. Their work is accurate and timely i highly recommend them to anyone.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="testimonial">
                        <div class=" text-bubble-two">
                            <p>Working as a part-time student i didn't have time for my academic papers but Contentshark had me covered.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 col-sm-12 testimony_2">
                    <img src="img/test_1.jpeg" alt="">
                </div>
            </div>
        </div>
    </section>

    @yield('cta')
    <section id="cta">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12"></div>
                <div class="col-md-5 col-sm-12 text-center">
                    <h2>Hire a professional writer today</h2>
                    
                </div>
                <div class="col-md-3 col-sm-12">
                    <button class="btn btn-success cta_btn">Get writer</button>
                </div>
            </div>
        </div>
    </section>

    
    @include('includes.footer')
