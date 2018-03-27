@extends('user.layouts.master')

@section('user-title', 'AI Academy')
@section('seo-description', 'AI Academy')
@section('seo-keyword',  'AI Academy')

@section('user-nav')
    @include('user.layouts.libraries.navbar')
@endsection

@section('user-banner')
<div class="elh-page-header elh-img-bg elh-bg-17">
        <div class="elh-overlay">
            <div class="container text-center">
                <h3 class="elh-page-title">TranVanMy</h3>
                <ol class="breadcrumb">
                    <li class="active">Web &amp; UX Designer</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('user-content')
<div class="elh-main-wrap">

        <!-- Instructor Body -->
        <div class="elh-section elh-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="elh-instructor-thumb">
                            <img class="img-responsive" src="/images/instructor/avatar.jpg" alt="...">
                        </div>
                        <div class="elh-contact-instructor">
                            <a class="btn" href="#">Contact Instructor</a>
                            <a class="btn btn-border" href="#">Subscribe Instructor</a>
                        </div>
                        <div class="elh-instructor-single-socials">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>
                            <a href="#"><i class="fa fa-dribble"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="elh-instructor-entry">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac placerat purus. Phasellus at fermentum lacus. Aenean et ex eget purus laoreet facilisis. Donec vel euismod ex. Nullam sagittis sapien pretium est tempus, vitae facilisis magna pellentesque. Nam bibendum nulla id felis ultrices, sit amet egestas risus placerat. Aliquam laoreet aliquam lorem, sit amet tempor justo viverra eget. Phasellus dignissim, ex ac varius auctor, elit lacus cursus turpis, sit amet tempus lorem dui eget turpis. Suspendisse ex dolor, bibendum nec sagittis sit amet, vestibulum vel ex.</p>
                            <blockquote>Proin varius neque nibh, placerat tempus nisi vestibulum vitae. Duis nec massa ac erat condimentum varius nec sit amet neque. Donec eu ex et massa placerat pellentesque non quis lorem.</blockquote>
                            <p>In hac habitasse platea dictumst. Pellentesque a urna nisi. Mauris ac euismod ipsum. Aenean faucibus sapien odio, ut condimentum dolor imperdiet id. Nam tristique dolor non ex faucibus consequat. Sed maximus sapien purus, eget pellentesque quam dapibus eget. Praesent sodales mauris a sapien vehicula, ac sodales odio volutpat. Etiam tristique orci odio, a bibendum odio convallis id. Morbi quis tempor velit. Nullam suscipit pellentesque quam, id maximus nulla iaculis commodo. In id fermentum sem. Phasellus non hendrerit metus. Etiam ultrices ipsum ut ipsum condimentum tristique.</p>
                        </div>
                        <div class="elh-instructor-facts">
                            <div class="elh-instructor-fact-item">
                                <h5>Students</h5>
                                <p>246,332</p>
                            </div>
                            <div class="elh-instructor-fact-item">
                                <h5>Total Courses</h5>
                                <p>4 Courses</p>
                            </div>
                            <div class="elh-instructor-fact-item">
                                <h5>Reviews</h5>
                                <p>36,352</p>
                            </div>
                            <div class="elh-instructor-fact-item">
                                <h5>Ovarall Rating</h5>
                                <p>4.85 out of 5</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Instructor Body End -->

        <!-- Popular Courses -->
        <div class="elh-section elh-section-padding elh-gray-bg elh-carousel-section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="elh-section-header text-left">
                            <h3 class="elh-section-title"><span>Courses</span> by TRANVANMY</h3>
                            <p class="elh-section-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                            <a class="all-link" href="course.html">See All Courses</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="elh-generic-carousel owl-carousel owl-theme" style="opacity: 1; display: block;">
                        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 3120px; left: 0px; display: block;"><div class="owl-item" style="width: 390px;"><div class="elh-course">
                            <a class="elh-course-thumb" href="course-single.html">
                                <img class="img-responsive" src="/images/course/7.jpg" alt="...">
                            </a>
                            <div class="elh-course-content">
                                <h4 class="elh-course-title"><a href="course-single.html">Advance Method for<br>Adobe Photoshop CC 2018</a></h4>
                            </div>
                            <div class="elh-course-instructor">
                                <div class="elh-instructor-thumb">
                                    <img class="img-responsive" src="/images/instructor/small-5.jpg" alt="...">
                                </div>
                                <h5 class="elh-instructor-name">Z.Alexander</h5>
                            </div>
                            <div class="elh-course-footer">
                                <p class="elh-course-price">
                                    <span class="elh-price-now">$35.00</span>
                                    <span class="elh-price-regular">$45.00</span>
                                </p>
                                <p class="elh-course-metas">
                                    <span class="elh-student-count"><i class="fa fa-users"></i> 25</span>
                                    <span class="elh-comment-count"><i class="fa fa-comments"></i> 5</span>
                                </p>
                            </div>
                        </div></div><div class="owl-item" style="width: 390px;"><div class="elh-course">
                            <a class="elh-course-thumb" href="course-single.html">
                                <img class="img-responsive" src="/images/course/8.jpg" alt="...">
                            </a>
                            <div class="elh-course-content">
                                <h4 class="elh-course-title"><a href="course-single.html">Higher Diploma in<br>Graphic Design &amp; Multimedia</a></h4>
                            </div>
                            <div class="elh-course-instructor">
                                <div class="elh-instructor-thumb">
                                    <img class="img-responsive" src="/images/instructor/small-6.jpg" alt="...">
                                </div>
                                <h5 class="elh-instructor-name">Olivia Chloe</h5>
                            </div>
                            <div class="elh-course-footer">
                                <p class="elh-course-price">
                                    <span class="elh-price-now">$35.00</span>
                                    <span class="elh-price-regular">$45.00</span>
                                </p>
                                <p class="elh-course-metas">
                                    <span class="elh-student-count"><i class="fa fa-users"></i> 25</span>
                                    <span class="elh-comment-count"><i class="fa fa-comments"></i> 5</span>
                                </p>
                            </div>
                        </div></div><div class="owl-item" style="width: 390px;"><div class="elh-course">
                            <a class="elh-course-thumb" href="course-single.html">
                                <img class="img-responsive" src="/images/course/9.jpg" alt="...">
                            </a>
                            <div class="elh-course-content">
                                <h4 class="elh-course-title"><a href="course-single.html">Diploma in<br>Web Design &amp; Development</a></h4>
                            </div>
                            <div class="elh-course-instructor">
                                <div class="elh-instructor-thumb">
                                    <img class="img-responsive" src="/images/instructor/small-7.jpg" alt="...">
                                </div>
                                <h5 class="elh-instructor-name">William Logan</h5>
                            </div>
                            <div class="elh-course-footer">
                                <p class="elh-course-price">
                                    <span class="elh-price-now">$35.00</span>
                                    <span class="elh-price-regular">$45.00</span>
                                </p>
                                <p class="elh-course-metas">
                                    <span class="elh-student-count"><i class="fa fa-users"></i> 25</span>
                                    <span class="elh-comment-count"><i class="fa fa-comments"></i> 5</span>
                                </p>
                            </div>
                        </div></div><div class="owl-item" style="width: 390px;"><div class="elh-course">
                            <a class="elh-course-thumb" href="course-single.html">
                                <img class="img-responsive" src="/images/course/7.jpg" alt="...">
                            </a>
                            <div class="elh-course-content">
                                <h4 class="elh-course-title"><a href="course-single.html">Advance Method for<br>Adobe Photoshop CC 2018</a></h4>
                            </div>
                            <div class="elh-course-instructor">
                                <div class="elh-instructor-thumb">
                                    <img class="img-responsive" src="/images/instructor/small-5.jpg" alt="...">
                                </div>
                                <h5 class="elh-instructor-name">Z.Alexander</h5>
                            </div>
                            <div class="elh-course-footer">
                                <p class="elh-course-price">
                                    <span class="elh-price-now">$35.00</span>
                                    <span class="elh-price-regular">$45.00</span>
                                </p>
                                <p class="elh-course-metas">
                                    <span class="elh-student-count"><i class="fa fa-users"></i> 25</span>
                                    <span class="elh-comment-count"><i class="fa fa-comments"></i> 5</span>
                                </p>
                            </div>
                        </div></div></div></div>





                    <div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div></div></div>
                </div>
            </div>
        </div>
        <!-- Popular Courses End -->

         <!-- Popular Product -->
         <div class="elh-section elh-section-padding elh-gray-bg elh-carousel-section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="elh-section-header text-left">
                            <h3 class="elh-section-title"><span>Product</span> by TRANVANMY</h3>
                            <p class="elh-section-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                            <a class="all-link" href="course.html">See All Product</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="elh-generic-carousel owl-carousel owl-theme" style="opacity: 1; display: block;">
                        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 3120px; left: 0px; display: block;"><div class="owl-item" style="width: 390px;"><div class="elh-course">
                            <a class="elh-course-thumb" href="course-single.html">
                                <img class="img-responsive" src="/images/course/7.jpg" alt="...">
                            </a>
                            <div class="elh-course-content">
                                <h4 class="elh-course-title"><a href="course-single.html">Smart Camera<br>2018</a></h4>
                            </div>
                            <div class="elh-course-footer"></div>
                        </div></div><div class="owl-item" style="width: 390px;"><div class="elh-course">
                            <a class="elh-course-thumb" href="course-single.html">
                                <img class="img-responsive" src="/images/course/8.jpg" alt="...">
                            </a>
                            <div class="elh-course-content">
                                <h4 class="elh-course-title"><a href="course-single.html">NLP<br>Graphic Design &amp; Multimedia</a></h4>
                            </div>
                            <div class="elh-course-instructor">
                            </div>
                            <div class="elh-course-footer">

                            </div>
                        </div></div><div class="owl-item" style="width: 390px;"><div class="elh-course">
                            <a class="elh-course-thumb" href="course-single.html">
                                <img class="img-responsive" src="/images/course/9.jpg" alt="...">
                            </a>
                            <div class="elh-course-content">
                                <h4 class="elh-course-title"><a href="course-single.html">Chat Bot<br>Facebook</a></h4>
                            </div>
                            <div class="elh-course-footer">
                            </div>
                        </div></div><div class="owl-item" style="width: 390px;"><div class="elh-course">
                            <a class="elh-course-thumb" href="course-single.html">
                                <img class="img-responsive" src="/images/course/7.jpg" alt="...">
                            </a>
                            <div class="elh-course-content">
                                <h4 class="elh-course-title"><a href="course-single.html">Data Lab<br>Pro</a></h4>
                            </div>
                            <div class="elh-course-footer">
                            </div>
                        </div></div></div></div>



                    <div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div></div></div>
                </div>
            </div>
        </div>
        <!-- Popular Courses End -->

        <!-- Subscribe -->
        <div class="elh-section elh-theme-bg elh-subscribe-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="elh-subscribe-heading">
                            <h5>for Future Update</h5>
                            <h3>Subscribe Us</h3>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <form id="subscription" class="elh-subscribe-form pull-right xs-pull-center" action="#" method="post" novalidate="true">
                            <input type="email" name="EMAIL" placeholder="Enter your mail">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subscribe End -->

    </div>
@endsection

@section('user-script')
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
