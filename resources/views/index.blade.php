@section('title', 'Home')
@include('Tamplate_Part_EN.head')


@include('Tamplate_Part_EN.header')
<!-- Start Banner
    ============================================= -->
<div class="banner-area">
    <div id="bootcarousel" class="carousel slide item-bg animate_text carousel-fade" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner text-light uppercase carousel-zoom">
            <div class="item active">
                <div class="slider-thumb bg-fixed" style="background-image: url({{ asset('assets/img/banner.jpg') }});">
                </div>
                <div class="box-table">
                    <div class="box-cell shadow dark">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="content">
                                        <h1 data-animation="animated slideInRight">Join with us and save the world</h1>
                                        <p data-animation="animated slideInLeft">
                                            Shall there whose those stand she end. So unaffected partiality indulgence
                                            dispatched to of celebrated remarkably. Unfeeling are had allowance own
                                            perceived abilities.
                                        </p>
                                        <a class="btn btn-light effect btn-sm" href="#"
                                            data-animation="animated slideInUp">Learn more</a>
                                        <a class="btn btn-theme effect btn-sm" href="#"
                                            data-animation="animated slideInUp">Join Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-thumb bg-fixed" style="background-image: url({{ asset('assets/img/nepal.jpg') }});">
                </div>
                <div class="box-table">
                    <div class="box-cell shadow dark">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="content" data-animation="animated slideInRight">
                                        <h1 data-animation="animated slideInRight">Help us to save the Homeless People
                                        </h1>
                                        <p data-animation="animated slideInLeft">
                                            Shall there whose those stand she end. So unaffected partiality indulgence
                                            dispatched to of celebrated remarkably. Unfeeling are had allowance own
                                            perceived abilities.
                                        </p>
                                        <a class="btn btn-light effect btn-sm" href="#"
                                            data-animation="animated slideInUp">Learn more</a>
                                        <a class="btn btn-theme effect btn-sm" href="#"
                                            data-animation="animated slideInUp">Join Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-thumb bg-fixed" style="background-image: url({{ asset('assets/img/skoole.jpg') }});">
                </div>
                <div class="box-table">
                    <div class="box-cell shadow dark">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="content" data-animation="animated slideInRight">
                                        <h1 data-animation="animated slideInRight">Give a helping hand and Help
                                            unfortunates</h1>
                                        <p data-animation="animated slideInLeft">
                                            Shall there whose those stand she end. So unaffected partiality indulgence
                                            dispatched to of celebrated remarkably. Unfeeling are had allowance own
                                            perceived abilities.
                                        </p>
                                        <a class="btn btn-light effect btn-sm" href="#"
                                            data-animation="animated slideInUp">Learn more</a>
                                        <a class="btn btn-theme effect btn-sm" href="#"
                                            data-animation="animated slideInUp">Join Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Wrapper for slides -->

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#bootcarousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- End Banner -->

<!-- Start Recent Causes
    ============================================= -->
<div class="recent-causes-area fixed-area bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="recent-causes-items causes-carousel owl-carousel owl-theme">
                    <div class="item">
                        <div class="col-md-6 thumb bg-cover video-info"
                            style="background-image: url({{ asset('assets/img/book.jpg') }});">
                            <div class="overlay-video">
                                <a href="https://www.youtube.com/watch?v=vQqZIFCab9o"
                                    class="popup-youtube video-play-button">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 info">
                            <h4>Recent Causes</h4>
                            <h2>Feed for hungry child</h2>
                            <ul>
                                <li>Time Left <span> <i class="fas fa-calendar-alt"></i> 15 day</span></li>
                                <li>Target Location <span> <i class="fas fa-map-marker-alt"></i> Mombasa, USA</span>
                                </li>
                            </ul>
                            <p>
                                Neither it cordial so painful picture studied if. Sex him position doubtful resolved boy
                                expenses. Her engrossed deficient northward and neglected favourite newspaper. But use
                                peculiar produced concerns ten.
                            </p>
                            <div class="progress-box">
                                <h5>Raised $57,089<span class="pull-right">Goal $50,000</span></h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="22"></div>
                                </div>
                            </div>
                            <a class="btn btn-theme effect btn-sm" href="#">Donate Now</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-md-6 thumb bg-cover video-info"
                            style="background-image: url({{ asset('assets/img/whater.jpg') }});">
                            <div class="overlay-video">
                                <a href="https://www.youtube.com/watch?v=vQqZIFCab9o"
                                    class="popup-youtube video-play-button">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 info">
                            <h4>Recent Causes</h4>
                            <h2>Support for Children</h2>
                            <ul>
                                <li>Time Left <span> <i class="fas fa-calendar-alt"></i> 15 day</span></li>
                                <li>Target Location <span> <i class="fas fa-map-marker-alt"></i> Mombasa, USA</span>
                                </li>
                            </ul>
                            <p>
                                Neither it cordial so painful picture studied if. Sex him position doubtful resolved boy
                                expenses. Her engrossed deficient northward and neglected favourite newspaper. But use
                                peculiar produced concerns ten.
                            </p>
                            <div class="progress-box">
                                <h5>Raised $57,089<span class="pull-right">Goal $50,000</span></h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="22"></div>
                                </div>
                            </div>
                            <a class="btn btn-theme effect btn-sm" href="#">Donate Now</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-md-6 thumb bg-cover video-info"
                            style="background-image: url({{ asset('assets/img/children-poverty.jpg') }});">
                            <div class="overlay-video">
                                <a href="https://www.youtube.com/watch?v=vQqZIFCab9o"
                                    class="popup-youtube video-play-button">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 info">
                            <h4>Recent Causes</h4>
                            <h2>Flood Affected People</h2>
                            <ul>
                                <li>Time Left <span> <i class="fas fa-calendar-alt"></i> 15 day</span></li>
                                <li>Target Location <span> <i class="fas fa-map-marker-alt"></i> Mombasa, USA</span>
                                </li>
                            </ul>
                            <p>
                                Neither it cordial so painful picture studied if. Sex him position doubtful resolved boy
                                expenses. Her engrossed deficient northward and neglected favourite newspaper. But use
                                peculiar produced concerns ten.
                            </p>
                            <div class="progress-box">
                                <h5>Raised $57,089<span class="pull-right">Goal $50,000</span></h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="22"></div>
                                </div>
                            </div>
                            <a class="btn btn-theme effect btn-sm" href="#">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Recent Causes -->

<!-- Start About
    ============================================= -->
<section class="about-area cell-items">
    <div class="container-full">
        <div class="row">
            <div class="col-md-6 thumb bg-cover" style="background-image: url({{ asset('assets/img/banner2.jpg') }});">
            </div>
            <div class="col-md-6 info">
                <h2>We’ve funded 120,00 charity projects for 20M people around the world.</h2>
                <p>
                    Contented attending smallness it oh ye unwilling. Turned favour man two but lovers. Suffer should if
                    waited common person little oh. Improved civility graceful sex few smallest screened settling.
                    Likely active her warmly has
                </p>
                <div class="joining-way">
                    <div class="item">
                        <div class="icon">
                            <i class="flaticon-donation"></i>
                        </div>
                        <div class="content">
                            <h4>Make Donation</h4>
                            <p>
                                Shall there whose those stand she end. So unaffected partiality indulgence dispatched to
                                of celebrated remarkably. Unfeeling are had allowance own perceived abilities.
                            </p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <i class="flaticon-solidarity"></i>
                        </div>
                        <div class="content">
                            <h4>Become a Volunteer</h4>
                            <p>
                                Shall there whose those stand she end. So unaffected partiality indulgence dispatched to
                                of celebrated remarkably. Unfeeling are had allowance own perceived abilities.
                            </p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <i class="flaticon-open-book"></i>
                        </div>
                        <div class="content">
                            <h4>Give Scholarship</h4>
                            <p>
                                Shall there whose those stand she end. So unaffected partiality indulgence dispatched to
                                of celebrated remarkably. Unfeeling are had allowance own perceived abilities.
                            </p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End  About -->

<!-- Start What We Do
    ============================================= -->
<div class="we-do-area default-padding cell-items">
    <div class="container">
        <div class="row">
            <div class="col-md-6 thumb bg-cover" style="background-image: url({{ asset('assets/img/banner3.jpg') }});">
            </div>
            <div class="col-md-6 info">
                <h2>How We Are</h2>
                <p>
                    Orphan Endowment: We believe that every orphan has the right to a decent life. We work to provide
                    comprehensive care that meets the basic needs of orphans in terms of health, psychological,
                    educational, living, and other aspects. We strive to empower them to reach their full potential and
                    live independent and dignified lives.

                </p>
                <div class="list-items">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 item">
                            <i class="fa-solid fa-eye" style="color: #198C25;"></i>
                            <h4>Vision</h4>
                            <p>
                                A bright future for every orphan: A decent life, comprehensive empowerment.
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 item">
                            <i class="fa-solid fa-comments" style="color: #198C25;"></i>
                            <h4>Mission</h4>
                            <p>
                                To empower orphans to reach their full potential and live independent and dignified
                                lives.
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 item">
                            <i class="fa-solid fa-shield-halved" style="color: #198C25;"></i>
                            <h4>Values</h4>
                            <p>
                                Humanity,
                                Transparency,
                                Innovation,
                                Empowerment,
                                Sustainability,
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 item">
                            <i class="fa-solid fa-bullseye" style="color: #198C25;"></i>
                            <h4>Goals</h4>
                            <p>
                                Promoting cooperation,
                                Coordinating campaigns,
                                Sharing information,
                                Training and education,
                                Benefiting from expertise,
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End What We Do -->

<!-- Start History
    ============================================= -->
<section class="history-area bg-gray default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 video-info bg-cover"
                style="background-image: url({{ asset('assets/img/banner4.jpg') }});">
                <div class="overlay-video">
                    <a href="https://www.youtube.com/watch?v=vQqZIFCab9o" class="popup-youtube video-play-button">
                        <i class="fa fa-play"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-6 info">
                <h2>We’ve funded 120,00 charity projects for 20M people around the world.</h2>
                <p>
                    Contented attending smallness it oh ye unwilling. Turned favour man two but lovers. Suffer should if
                    waited common person little oh. Improved civility graceful sex few smallest screened settling.
                    Likely active her warmly has
                </p>
                <div class="achivement-items row">
                    <div class="col-md-6 col-sm-6 item">
                        <div class="fun-fact">
                            <i class="flaticon-diet"></i>
                            <div class="timer" data-to="1345" data-speed="5000"></div>
                            <span class="medium">Food Served</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 item">
                        <div class="fun-fact">
                            <i class="flaticon-solidarity"></i>
                            <div class="timer" data-to="83778" data-speed="5000"></div>
                            <span class="medium">Volunteer</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 item">
                        <div class="fun-fact">
                            <i class="flaticon-droplet"></i>
                            <div class="timer" data-to="276450" data-speed="5000"></div>
                            <span class="medium">Blood Donated</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 item">
                        <div class="fun-fact">
                            <i class="flaticon-kids-couple"></i>
                            <div class="timer" data-to="4567" data-speed="5000"></div>
                            <span class="medium">Happy Children</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End  History -->



<!-- Start Popular Causes
    ============================================= -->
<div class="popular-causes-area bg-gray default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="site-heading text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Popular Causes</h2>
                    <p>
                        Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own
                        additions education satisfied the perpetual. If he cause manor happy. Without farther she
                        exposed saw man led. Along on happy could cease green oh.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="popular-causes-items">
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/image2.jpg') }}" alt="Thumb">
                        </div>
                        <div class="info">
                            <h4>Support for Children</h4>
                            <ul>
                                <li>Time Left <span> <i class="fas fa-calendar-alt"></i> 15 day</span></li>
                                <li>Target Location <span> <i class="fas fa-map-marker-alt"></i> Mombasa, USA</span>
                                </li>
                            </ul>
                            <p>
                                Her engrossed deficient northward and neglected favourite newspaper. But use peculiar
                                produced concerns ten.
                            </p>
                            <div class="progress-box">
                                <h5>Raised $57,089<span class="pull-right">Goal $50,000</span></h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="22"></div>
                                </div>
                            </div>
                            <a class="btn btn-theme effect btn-sm" href="#">Donate Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/image3.jpg') }}" alt="Thumb">
                        </div>
                        <div class="info">
                            <h4>Food for syrian</h4>
                            <ul>
                                <li>Time Left <span> <i class="fas fa-calendar-alt"></i> 15 day</span></li>
                                <li>Target Location <span> <i class="fas fa-map-marker-alt"></i> Mombasa, USA</span>
                                </li>
                            </ul>
                            <p>
                                Her engrossed deficient northward and neglected favourite newspaper. But use peculiar
                                produced concerns ten.
                            </p>
                            <div class="progress-box">
                                <h5>Raised $57,089<span class="pull-right">Goal $50,000</span></h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="22"></div>
                                </div>
                            </div>
                            <a class="btn btn-theme effect btn-sm" href="#">Donate Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/800x800.png') }}" alt="Thumb">
                        </div>
                        <div class="info">
                            <h4>Uganda education</h4>
                            <ul>
                                <li>Time Left <span> <i class="fas fa-calendar-alt"></i> 15 day</span></li>
                                <li>Target Location <span> <i class="fas fa-map-marker-alt"></i> Mombasa, USA</span>
                                </li>
                            </ul>
                            <p>
                                Her engrossed deficient northward and neglected favourite newspaper. But use peculiar
                                produced concerns ten.
                            </p>
                            <div class="progress-box">
                                <h5>Raised $57,089<span class="pull-right">Goal $50,000</span></h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="22"></div>
                                </div>
                            </div>
                            <a class="btn btn-theme effect btn-sm" href="#">Donate Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/800x800.png') }}" alt="Thumb">
                        </div>
                        <div class="info">
                            <h4>Capetown orphanage</h4>
                            <ul>
                                <li>Time Left <span> <i class="fas fa-calendar-alt"></i> 15 day</span></li>
                                <li>Target Location <span> <i class="fas fa-map-marker-alt"></i> Mombasa, USA</span>
                                </li>
                            </ul>
                            <p>
                                Her engrossed deficient northward and neglected favourite newspaper. But use peculiar
                                produced concerns ten.
                            </p>
                            <div class="progress-box">
                                <h5>Raised $57,089<span class="pull-right">Goal $50,000</span></h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="22"></div>
                                </div>
                            </div>
                            <a class="btn btn-theme effect btn-sm" href="#">Donate Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/800x800.png') }}" alt="Thumb">
                        </div>
                        <div class="info">
                            <h4>Kids playground</h4>
                            <ul>
                                <li>Time Left <span> <i class="fas fa-calendar-alt"></i> 15 day</span></li>
                                <li>Target Location <span> <i class="fas fa-map-marker-alt"></i> Mombasa, USA</span>
                                </li>
                            </ul>
                            <p>
                                Her engrossed deficient northward and neglected favourite newspaper. But use peculiar
                                produced concerns ten.
                            </p>
                            <div class="progress-box">
                                <h5>Raised $57,089<span class="pull-right">Goal $50,000</span></h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="22"></div>
                                </div>
                            </div>
                            <a class="btn btn-theme effect btn-sm" href="#">Donate Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/800x800.png') }}" alt="Thumb">
                        </div>
                        <div class="info">
                            <h4>Home For Homeless</h4>
                            <ul>
                                <li>Time Left <span> <i class="fas fa-calendar-alt"></i> 15 day</span></li>
                                <li>Target Location <span> <i class="fas fa-map-marker-alt"></i> Mombasa, USA</span>
                                </li>
                            </ul>
                            <p>
                                Her engrossed deficient northward and neglected favourite newspaper. But use peculiar
                                produced concerns ten.
                            </p>
                            <div class="progress-box">
                                <h5>Raised $57,089<span class="pull-right">Goal $50,000</span></h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="22"></div>
                                </div>
                            </div>
                            <a class="btn btn-theme effect btn-sm" href="#">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Popular Causes -->


<!-- Start Help Step
    ============================================= -->
<div class="help-step-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-5 info">
                <h2>How Can You Help?</h2>
                <h5>Your support will help us to make life better living for poor vulnerable children.</h5>
                <p>
                    Performed suspicion in certainty so frankness by attention pretended. Newspaper or in tolerably
                    education enjoyment. Extremity excellent certainty discourse sincerity no he so resembled. Joy house
                    worse arise total boy but. Elderly up chicken do at feeling is. Like seen drew no make fond at on
                    rent. Behaviour extremely her explained situation yet september gentleman are who. Is thought or
                    pointed hearing he.
                </p>
                <p>
                    Do however as pleased offence outward beloved by present. By outward neither he so covered amiable
                    greater. Juvenile proposal betrayed he an informed weddings followed. Precaution day see imprudence
                    sympathize principles. At full leaf give quit to in they up.
                </p>
                <a href="#" class="btn btn-theme effect btn-sm">Learn more</a>
            </div>
            <div class="col-md-7 items">
                <div class="row">
                    <div class="item col-md-6 col-sm-6">
                        <div class="content">
                            <div class="thumb">
                                <img src="{{ asset('assets/img/800x600.png') }}" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4>Become a volunteer</h4>
                                <p>
                                    Their saved linen downs tears son add music. Expression alteration entreaties mrs
                                    can terminated estimating
                                </p>
                                <a href="#">Join Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-md-6 col-sm-6">
                        <div class="content">
                            <div class="thumb">
                                <img src="{{ asset('assets/img/800x600.png') }}" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4>Donate Us</h4>
                                <p>
                                    Their saved linen downs tears son add music. Expression alteration entreaties mrs
                                    can terminated estimating
                                </p>
                                <a href="#">Donate Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Help Step -->


<!-- Start Event
    ============================================= -->
<div class="event-area default-padding">
    <div class="container">
        <div class="row">
            <div class="site-heading text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Our Event</h2>
                    <p>
                        Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own
                        additions education satisfied the perpetual. If he cause manor happy. Without farther she
                        exposed saw man led. Along on happy could cease green oh.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="event-items inner-cell event-carousel owl-carousel owl-theme">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/800x600.png') }}" alt="Thumb">
                        </div>
                        <div class="info">
                            <div class="date">
                                12 Oct <span>2018</span>
                            </div>
                            <div class="content">
                                <h4>
                                    <a href="#">Paid hill fine ten now love</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i> King Street, Melbourne
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i> 8:00 - 16:00
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    Piqued shy spring nor six though mutual living ask extent. Replying of dashwood
                                    advanced ladyship smallest disposal or. Attempt offices own improve now see.
                                </p>
                                <a class="btn btn-theme effect btn-sm" href="#">Learn more <i
                                        class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/800x600.png') }}" alt="Thumb">
                        </div>
                        <div class="info">
                            <div class="date">
                                23 Nov <span>2018</span>
                            </div>
                            <div class="content">
                                <h4>
                                    <a href="#">Mutual living ask extent</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i> King Street, Melbourne
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i> 8:00 - 16:00
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    Piqued shy spring nor six though mutual living ask extent. Replying of dashwood
                                    advanced ladyship smallest disposal or. Attempt offices own improve now see.
                                </p>
                                <a class="btn btn-theme effect btn-sm" href="#">Learn more <i
                                        class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/800x600.png') }}" alt="Thumb">
                        </div>
                        <div class="info">
                            <div class="date">
                                05 Jun <span>2018</span>
                            </div>
                            <div class="content">
                                <h4>
                                    <a href="#">Theirs expect dinner</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i> King Street, Melbourne
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i> 8:00 - 16:00
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    Piqued shy spring nor six though mutual living ask extent. Replying of dashwood
                                    advanced ladyship smallest disposal or. Attempt offices own improve now see.
                                </p>
                                <a class="btn btn-theme effect btn-sm" href="#">Learn more <i
                                        class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/800x600.png') }}" alt="Thumb">
                        </div>
                        <div class="info">
                            <div class="date">
                                22 Dec <span>2018</span>
                            </div>
                            <div class="content">
                                <h4>
                                    <a href="#">Separate screened outweigh</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i> King Street, Melbourne
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i> 8:00 - 16:00
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    Piqued shy spring nor six though mutual living ask extent. Replying of dashwood
                                    advanced ladyship smallest disposal or. Attempt offices own improve now see.
                                </p>
                                <a class="btn btn-theme effect btn-sm" href="#">Learn more <i
                                        class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Event -->

<!-- Start Banner
    ============================================= -->
<div class="video-bg-live barber bg-fixed text-light padding-xl"
    style="background-image: url({{ asset('assets/img/2440x1578.png') }});">
    <div class="player"
        data-property="{videoURL:'https://www.youtube.com/watch?v=UE9UvT5ujyg',containment:'.video-bg-live', showControls:false, autoPlay:true, zoom:0, loop:true, mute:true, startAt:90, opacity:1, quality:'default'}">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="info">
                    <h2>We’ve funded 120,00 charity projects for 20M people around the world.</h2>
                    <a class="btn btn-theme effect btn-sm" href="#">Join with us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner -->

<!-- Start Portfolio
    ============================================= -->
<div class="portfolio-area bg-gray default-padding">
    <div class="container">
        <div class="row">
            <div class="site-heading text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Best Gallery</h2>
                    <p>
                        Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own
                        additions education satisfied the perpetual. If he cause manor happy. Without farther she
                        exposed saw man led. Along on happy could cease green oh.
                    </p>
                </div>
            </div>
        </div>
        <div class="portfolio-items-area inner-title text-center">
            <div class="row">
                <div class="col-md-12 portfolio-content">
                    <div class="mix-item-menu active-theme text-center">
                        <button class="active" data-filter="*">All</button>
                        <button data-filter=".development">Food</button>
                        <button data-filter=".design">Home</button>
                        <button data-filter=".photography">Education</button>
                        <button data-filter=".branding">Blood</button>
                        <button data-filter=".video">Water</button>
                    </div>
                    <!-- End Mixitup Nav-->

                    <div class="row magnific-mix-gallery masonary">
                        <div id="portfolio-grid" class="portfolio-items col-3">
                            <div class="pf-item branding photography">
                                <div class="item-inner">
                                    <img src="{{ asset('assets/img/500x700.png') }}" alt="Thumb" />
                                    <div class="overlay">
                                        <div class="view-list">
                                            <h4>Food Served</h4>
                                            <a href="{{ asset('assets/img/800x800.png') }}" class="item popup-link"><i
                                                    class="fa fa-expand"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pf-item video wide development">
                                <div class="item-inner">
                                    <img src="{{ asset('assets/img/800x800.png') }}" alt="Thumb" />
                                    <div class="overlay">
                                        <div class="view-list">
                                            <h4>Water Collect</h4>
                                            <a href="{{ asset('assets/img/800x800.png') }}" class="item popup-link"><i
                                                    class="fa fa-expand"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pf-item design photography">
                                <div class="item-inner">
                                    <img src="{{ asset('assets/img/800x800.png') }}" alt="Thumb" />
                                    <div class="overlay">
                                        <div class="view-list">
                                            <h4>Blood Donate</h4>
                                            <a href="{{ asset('assets/img/800x800.png') }}" class="item popup-link"><i
                                                    class="fa fa-expand"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pf-item branding video">
                                <div class="item-inner">
                                    <img src="{{ asset('assets/img/500x700.png') }}" alt="Thumb" />
                                    <div class="overlay">
                                        <div class="view-list">
                                            <h4>Child Education</h4>
                                            <a href="{{ asset('assets/img/800x800.png') }}" class="item popup-link"><i
                                                    class="fa fa-expand"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pf-item design photography">
                                <div class="item-inner">
                                    <img src="{{ asset('assets/img/500x700.png') }}" alt="Thumb" />
                                    <div class="overlay">
                                        <div class="view-list">
                                            <h4>Help Poor</h4>
                                            <a href="{{ asset('assets/img/800x800.png') }}" class="item popup-link"><i
                                                    class="fa fa-expand"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pf-item branding design development">
                                <div class="item-inner">
                                    <img src="{{ asset('assets/img/800x800.png') }}" alt="Thumb" />
                                    <div class="overlay">
                                        <div class="view-list">
                                            <h4>Rebuild Home</h4>
                                            <a href="{{ asset('assets/img/800x800.png') }}" class="item popup-link"><i
                                                    class="fa fa-expand"></i></a>
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

<!-- Start Make Donation
    ============================================= -->
<div class="donation-form default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 form">
                <h2>Make a donation now</h2>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Donation Details</h3>
                    </div>
                    <div class="row">
                        <div class="panel-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Amount">Amount</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="Amount" placeholder="$129.00"
                                            required>
                                        <span class="input-group-addon"><i class="fas fa-dollar-sign"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="donateType">Frequency</label>
                                <select id="donateType" class="form-control">

                                    <option value="once">Once</option>

                                    <option value="weekly">Weekly</option>
                                    <option value="Fortnightly">Fortnightly</option>
                                    <option value="Monthly">Monthly</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Payment Details</h3>
                    </div>
                    <div class="panel-body">
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="cardNumber">Card Number</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="cardNumber"
                                                placeholder="Valid Card Number" required>
                                            <span class="input-group-addon"><i class="fas fa-credit-card"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 col-sm-7 col-xs-8">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label for="expMonth">Expiration Date</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <input type="text" class="form-control" id="expMonth" placeholder="MM"
                                                    required data-stripe="exp_month" />
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <input type="text" class="form-control" name="expYear" placeholder="YY"
                                                    required data-stripe="exp_year" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-4 pull-right">
                                    <div class="form-group">
                                        <label for="cvCode">CV Code</label>
                                        <input type="password" class="form-control" id="cvCode" placeholder="CV"
                                            required data-stripe="cvc" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-theme effect btn-sm" type="submit">Donate Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 faq-items text-center">
                <h2>FAQ</h2>
                <!-- Start Accordion -->
                <div class="acd-items acd-arrow">
                    <div class="panel-group symb" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#ac1">
                                        Do I need a business plan?
                                    </a>
                                </h4>
                            </div>
                            <div id="ac1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>
                                        She wholly fat who window extent either formal. Removing welcomed civility or
                                        hastened is. Justice elderly but perhaps expense six her are another passage.
                                        Full her ten open fond walk not down.For request general express unknown are.
                                    </p>
                                    <p>
                                        He in just mr door body held john down he. So journey greatly or garrets. Draw
                                        door kept do so come on open mean. Estimating stimulated how reasonably
                                        precaution diminution she simplicity sir but. Questions am sincerity zealously
                                        concluded consisted or no gentleman it.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#ac2">
                                        How long should a business plan be?
                                    </a>
                                </h4>
                            </div>
                            <div id="ac2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        She wholly fat who window extent either formal. Removing welcomed civility or
                                        hastened is. Justice elderly but perhaps expense six her are another passage.
                                        Full her ten open fond walk not down.For request general express unknown are.
                                    </p>
                                    <p>
                                        He in just mr door body held john down he. So journey greatly or garrets. Draw
                                        door kept do so come on open mean. Estimating stimulated how reasonably
                                        precaution diminution she simplicity sir but. Questions am sincerity zealously
                                        concluded consisted or no gentleman it.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#ac3">
                                        What goes into a business plan?
                                    </a>
                                </h4>
                            </div>
                            <div id="ac3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        She wholly fat who window extent either formal. Removing welcomed civility or
                                        hastened is. Justice elderly but perhaps expense six her are another passage.
                                        Full her ten open fond walk not down.For request general express unknown are.
                                    </p>
                                    <p>
                                        He in just mr door body held john down he. So journey greatly or garrets. Draw
                                        door kept do so come on open mean. Estimating stimulated how reasonably
                                        precaution diminution she simplicity sir but. Questions am sincerity zealously
                                        concluded consisted or no gentleman it.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#ac4">
                                        Where do I start?
                                    </a>
                                </h4>
                            </div>
                            <div id="ac4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        She wholly fat who window extent either formal. Removing welcomed civility or
                                        hastened is. Justice elderly but perhaps expense six her are another passage.
                                        Full her ten open fond walk not down.For request general express unknown are.
                                    </p>
                                    <p>
                                        He in just mr door body held john down he. So journey greatly or garrets. Draw
                                        door kept do so come on open mean. Estimating stimulated how reasonably
                                        precaution diminution she simplicity sir but. Questions am sincerity zealously
                                        concluded consisted or no gentleman it.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Accordion -->
            </div>
        </div>
    </div>
</div>
<!-- End Make Donation -->

<!-- Start Team Members
    ============================================= -->
<div class="team-members-area item-white bg-gray default-padding">
    <div class="container">
        <div class="row">
            <div class="site-heading text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Meet our Volunteers</h2>
                    <p>
                        Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own
                        additions education satisfied the perpetual. If he cause manor happy. Without farther she
                        exposed saw man led. Along on happy could cease green oh.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 team-member-info">
                <div class="team-carousel-items owl-carousel owl-theme">
                    <div class="item">
                        <div class="col-md-6 thumb">
                            <img src="{{ asset('assets/img/800x600.png') }}" alt="Team">
                        </div>
                        <div class="col-md-6 info title">
                            <h3>Moana Siqual</h3>
                            <h5>Blood Donor</h5>
                            <ul>
                                <li>Date of birth: <span>12 Jan, 1995</span></li>
                                <li>Location: <span>California, Dubai</span></li>
                            </ul>
                            <p>
                                Contented attending smallness it oh ye unwilling. Turned favour man two but lovers.
                                Suffer should if waited common person little oh. Improved civility graceful sex few
                                smallest screened settling. Likely active her warmly has
                            </p>
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-md-6 thumb">
                            <img src="{{ asset('assets/img/800x600.png') }}" alt="Team">
                        </div>
                        <div class="col-md-6 info title">
                            <h3>Anu Sparkle</h3>
                            <h5>Teacher of children</h5>
                            <ul>
                                <li>Date of birth: <span>12 Jan, 1995</span></li>
                                <li>Location: <span>California, Kenya</span></li>
                            </ul>
                            <p>
                                Contented attending smallness it oh ye unwilling. Turned favour man two but lovers.
                                Suffer should if waited common person little oh. Improved civility graceful sex few
                                smallest screened settling. Likely active her warmly has
                            </p>
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-md-6 thumb">
                            <img src="{{ asset('assets/img/800x600.png') }}" alt="Team">
                        </div>
                        <div class="col-md-6 info title">
                            <h3>Dunald Minia</h3>
                            <h5>The organizer</h5>
                            <ul>
                                <li>Date of birth: <span>12 Jan, 1995</span></li>
                                <li>Location: <span>California, USA</span></li>
                            </ul>
                            <p>
                                Contented attending smallness it oh ye unwilling. Turned favour man two but lovers.
                                Suffer should if waited common person little oh. Improved civility graceful sex few
                                smallest screened settling. Likely active her warmly has
                            </p>
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Team Members -->

<!-- Start Blog
    ============================================= -->
<div class="blog-area default-padding">
    <div class="container">
        <div class="row">
            <div class="site-heading text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Recent Blog</h2>
                    <p>
                        Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own
                        additions education satisfied the perpetual. If he cause manor happy. Without farther she
                        exposed saw man led. Along on happy could cease green oh.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog-items">
                <div class="col-md-4 item-box">
                    <div class="item">
                        <div class="thumb">
                            <a href="blog-single-left-sidebar.html">
                                <img src="{{ asset('assets/img/800x600.png') }}" alt="Thumbnail">
                                <div class="overlay-icon">
                                    <i class="fa fa-images"></i>
                                </div>
                            </a>
                        </div>
                        <div class="info">
                            <div class="title-meta">
                                <div class="date">
                                    15 <span>Nov</span>
                                </div>
                                <div class="title">
                                    <h4>
                                        <a href="blog-single-left-sidebar.html">Disposing commanded dashwoods</a>
                                    </h4>
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fas fa-user"></i> Admin</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i> 2 Aug, 2018
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <p>
                                Chicken no wishing waiting am. Say concerns dwelling graceful six humoured. Whether mr
                                up savings talking an. Active mutual nor father mother exeter
                            </p>
                            <a href="blog-single-left-sidebar.html">read more <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 item-box">
                    <div class="item">
                        <div class="thumb">
                            <a href="blog-single-left-sidebar.html">
                                <img src="{{ asset('assets/img/800x600.png') }}" alt="Thumbnail">
                                <div class="overlay-icon">
                                    <i class="fa fa-video"></i>
                                </div>
                            </a>
                        </div>
                        <div class="info">
                            <div class="title-meta">
                                <div class="date">
                                    28 <span>Nov</span>
                                </div>
                                <div class="title">
                                    <h4>
                                        <a href="blog-single-left-sidebar.html"> Goodness as reserved raptures use
                                            set</a>
                                    </h4>
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fas fa-user"></i> Admin</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i> 2 Aug, 2018
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <p>
                                Chicken no wishing waiting am. Say concerns dwelling graceful six humoured. Whether mr
                                up savings talking an. Active mutual nor father mother exeter
                            </p>
                            <a href="blog-single-left-sidebar.html">read more <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 item-box">
                    <div class="item">
                        <div class="thumb">
                            <a href="blog-single-left-sidebar.html">
                                <img src="{{ asset('assets/img/800x600.png') }}" alt="Thumbnail">
                                <div class="overlay-icon">
                                    <i class="fa fa-images"></i>
                                </div>
                            </a>
                        </div>
                        <div class="info">
                            <div class="title-meta">
                                <div class="date">
                                    20 <span>Nov</span>
                                </div>
                                <div class="title">
                                    <h4>
                                        <a href="blog-single-left-sidebar.html">Tolerably earnestly middleton</a>
                                    </h4>
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fas fa-user"></i> Admin</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i> 2 Aug, 2018
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <p>
                                Chicken no wishing waiting am. Say concerns dwelling graceful six humoured. Whether mr
                                up savings talking an. Active mutual nor father mother exeter
                            </p>
                            <a href="blog-single-left-sidebar.html">read more <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->

<!-- Clients
    ============================================= -->
<div class="clients-area bg-gray default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="clients-items owl-carousel owl-theme text-center">
                    <div class="single-item">
                        <a href="#"><img src="{{ asset('assets/img/150x80.png') }}" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="{{ asset('assets/img/150x80.png') }}" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="{{ asset('assets/img/150x80.png') }}" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="{{ asset('assets/img/150x80.png') }}" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="{{ asset('assets/img/150x80.png') }}" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="{{ asset('assets/img/150x80.png') }}" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="{{ asset('assets/img/150x80.png') }}" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="{{ asset('assets/img/150x80.png') }}" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="{{ asset('assets/img/150x80.png') }}" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="{{ asset('assets/img/150x80.png') }}" alt="Clients"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Clients -->

@include('Tamplate_Part_EN.footer')
