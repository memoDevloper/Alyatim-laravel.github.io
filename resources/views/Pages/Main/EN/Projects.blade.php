@section('title', 'Projects')
@include('Tamplate_Part_EN.head')


@include('Tamplate_Part_EN.header')



  <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 text-left">
                    <h1>Our Projects</h1>
                </div>
                <div class="col-md-6 col-sm-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">Project</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Portfolio
    ============================================= -->
    <div class="portfolio-area default-padding">
        <div class="container">
            <div class="portfolio-items-area text-center">
                <div class="row">
                    <div class="col-md-12 portfolio-content">
                        <div class="mix-item-menu active-theme text-center">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".development">Food</button>
                            <button data-filter=".design">Home</button>
                            <button data-filter=".photography">Education</button>
                            <button data-filter=".branding">Children</button>
                            <button data-filter=".video">Water</button>
                        </div>
                        <!-- End Mixitup Nav-->

                        <div class="row magnific-mix-gallery masonary">
                            <div id="portfolio-grid" class="portfolio-items col-4">
                                <div class="pf-item branding photography">
                                    <div class="item-inner">
                                        <img src="{{ asset('assets/img/800x800.png') }}" alt="Thumb"/>
                                        <div class="overlay">
                                            <div class="view-list">
                                                <a href="{{ asset('assets/img/800x800.png') }}" class="item popup-link"><i class="fa fa-expand"></i></a>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item video development">
                                    <div class="item-inner">
                                        <img src="{{ asset('assets/img/800x600.png') }}" alt="Thumb"/>
                                        <div class="overlay">
                                            <div class="view-list">
                                                <a href="{{ asset('assets/img/800x600.png') }}" class="item popup-link"><i class="fa fa-expand"></i></a>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item design photography">
                                    <div class="item-inner">
                                        <img src="{{ asset('assets/img/800x800.png') }}" alt="Thumb"/>
                                        <div class="overlay">
                                            <div class="view-list">
                                                <a href="{{ asset('assets/img/800x800.png') }}" class="item popup-link"><i class="fa fa-expand"></i></a>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item branding video">
                                    <div class="item-inner">
                                        <img src="{{ asset('assets/img/800x800.png') }}" alt="Thumb"/>
                                        <div class="overlay">
                                            <div class="view-list">
                                                <a href="{{ asset('assets/img/800x800.png') }}" class="item popup-link"><i class="fa fa-expand"></i></a>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item design photography">
                                    <div class="item-inner">
                                        <img src="{{ asset('assets/img/800x800.png') }}" alt="Thumb"/>
                                        <div class="overlay">
                                            <div class="view-list">
                                                <a href="{{ asset('assets/img/800x800.png') }}" class="item popup-link"><i class="fa fa-expand"></i></a>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item branding design development">
                                    <div class="item-inner">
                                        <img src="{{ asset('assets/img/800x600.png') }}" alt="Thumb"/>
                                        <div class="overlay">
                                            <div class="view-list">
                                                <a href="{{ asset('assets/img/800x800.png') }}" class="item popup-link"><i class="fa fa-expand"></i></a>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item photography">
                                    <div class="item-inner">
                                        <img src="{{ asset('assets/img/800x600.png') }}" alt="Thumb"/>
                                        <div class="overlay">
                                            <div class="view-list">
                                                <a href="{{ asset('assets/img/800x800.png') }}" class="item popup-link"><i class="fa fa-expand"></i></a>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item design development">
                                    <div class="item-inner">
                                        <img src="{{ asset('assets/img/800x600.png') }}" alt="Thumb"/>
                                        <div class="overlay">
                                            <div class="view-list">
                                                <a href="{{ asset('assets/img/800x800.png') }}" class="item popup-link"><i class="fa fa-expand"></i></a>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Portfolio -->




@include('Tamplate_Part_EN.footer')
