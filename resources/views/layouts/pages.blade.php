
    @include('includes.pages-header')


    @yield ('content')
    

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
