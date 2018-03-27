@extends('user.layouts.master')

@section('user-title', 'AI Academy')
@section('seo-description', 'AI Academy')
@section('seo-keyword',  'AI Academy')

@section('user-css')
    <!-- External CSS -->
    <link rel="stylesheet" href="/static/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/static/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/static/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="/static/assets/css/slick.css">
    <link rel="stylesheet" href="/static/assets/css/plyr.css">
    <link rel="stylesheet" href="/static/assets/css/magnific-popup.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/static/css/style.css?id=1">
    <link rel="stylesheet" href="/static/css/scheme/primary.css">
    <link rel="stylesheet" href="/static/css/responsive.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700%7CRoboto+Slab:400,700%7CPacifico" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="/static/images/favicon.png">
    <link rel="apple-touch-icon" href="/static/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/static/images/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/static/images/icon-114x114.png">
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
@endsection

@section('user-nav')
    @include('user.layouts.libraries.navbar')
@endsection

@section('user-banner')
<!-- Banner -->
<div class="elh-page-header elh-img-bg elh-bg-9">
    <div class="elh-overlay">
        <div class="container text-center">
            <h3 class="elh-page-title">Contact</h3>
            <ol class="breadcrumb">
                <li><a href="course_hub.html">Home</a></li>
                <li class="active">Contact</li>
            </ol>
        </div>
    </div>
</div>
<!-- Banner End -->
@endsection

@section('user-content')
<!-- Main wrapper start -->
<div class="elh-main-wrap">

    <!-- Contact Information -->
    <div class="elh-section elh-section-padding elh-bottom-0">
        <div class="container">
            <div class="row">
                <div class="elh-info-boxes">
                    <div class="col-sm-4">
                        <div class="elh-info-box">
                            <div class="elh-infobox-icon">
                                <img src="/static/images/icons/address-book-blue.png" alt="...">
                            </div>
                            <h4 class="infobox-title">Our Address</h4>
                            <p class="infobox-text">177 Christchurch Road (Beside Park)<br/>New York, NY-258463</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="elh-info-box">
                            <div class="elh-infobox-icon">
                                <img src="/static/images/icons/phone-blue.png" alt="...">
                            </div>
                            <h4 class="infobox-title">Phone Call</h4>
                            <p class="infobox-text">+1-2345-678-678 (Query)<br/>+1-2345-678-678 (Library)</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="elh-info-box">
                            <div class="elh-infobox-icon">
                                <img src="/static/images/icons/envelope-blue.png" alt="...">
                            </div>
                            <h4 class="infobox-title">Drop a Mail</h4>
                            <p class="infobox-text">info@example.com<br/>query@example.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Information End -->

    <!-- Office location -->
    <div class="cps-section map-area">

        <div class="contact-location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.6718098646897!2d105.78064625048033!3d21.04581379250303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab32d81a5c59%3A0x6f4104da37c9e43a!2zVHLhu5FuZyDEkOG7k25nIFBhbGFjZQ!5e0!3m2!1svi!2s!4v1522071215663" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    <!-- Office location End -->

    <!-- Contact Form -->
    <div class="elh-section elh-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="quick-contact">
                        <h3>Drop us a Message!</h3>
                        <form id="contactForm" action="#" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" id="name" name="name" placeholder="Name *" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" id="email" name="email" placeholder="Email *" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="tel" id="phone" name="phone" placeholder="Phone">
                                </div>
                                <div class="col-sm-6">
                                    <select id="subject" name="subject" required>
                                        <option selected>Subject *</option>
                                        <option value="admission">Admission</option>
                                        <option value="fess">Fees</option>
                                        <option value="accomodation">Accomodation</option>
                                    </select>
                                </div>
                                <div class="col-xs-12">
                                    <textarea id="message" name="message" placeholder="Message *" rows="5" required></textarea>
                                    <button class="btn" type="submit">Send</button>
                                </div>
                                <div class="col-xs-12">
                                    <p class="input-success">Your message sent. Thanks for contacting</p>
                                    <p class="input-error">Something went wrong. try again later</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form End -->

    <!-- Subscription -->
    <div class="elh-section elh-theme-bg elh-subscribe-section style-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="elh-subscribe-heading">
                        <h3>Subscribe us for Future Updates</h3>
                    </div>
                </div>
                <div class="col-sm-6">
                    <form id="subscription" class="elh-subscribe-form pull-right xs-pull-center" action="#" method="post">
                        <input type="email" name="email" placeholder="Enter your mail here">
                        <button type="submit"><i class="fa fa-paper-plane"></i></button>
                        <p class="newsletter-success"></p>
                        <p class="newsletter-error"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscription End -->

</div>
<!-- Main wrapper start end -->
@endsection

@section('user-script')
    <!-- Script -->
    <script src="/static/assets/js/jquery.min.js"></script>
    <script src="/static/assets/js/bootstrap.min.js"></script>
    <script src="/static/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/static/assets/js/visible.js"></script>
    <script src="/static/assets/js/isotope.pkgd.min.js"></script>
    <script src="/static/assets/js/owl.carousel.min.js"></script>
    <script src="/static/assets/js/slick.min.js"></script>
    <script src="/static/assets/js/plyr.js"></script>
    <script src="/static/assets/js/jquery.countTo.js"></script>
    <script src="/static/assets/js/jquery.countdown.min.js"></script>
    <script src="/static/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/static/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="/static/js/custom.js"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5aa3a4174b401e45400d980c/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
@endsection