<!DOCTYPE html>
<html lang="en">
<head>
    <title>Axieon | Home</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./assets/css/axi_style_home.css?version=1593780809" /></head>
<body>
<div class="ax-home">
    <header class="ax-home-header">
        <div class="wrap">
            <a href="#" class="ax-home-header__logo">
                <img src="assets/images/ax-logo.svg" alt="axieon-logo">
            </a>
            <div class="ax-home-header__nav-container">
                <nav class="ax-home-header__navigation" style="text-align: right;">
                    {{--<ul>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">How It Works</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Support</a></li>
                    </ul>--}}

                    <div class="ax-home-header__btns-container" style="flex: auto;">
                        @guest
                            <a href="{{ route('login') }}" class="ax-btn ax-btn--transparent">Sign In</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ax-btn">Sign Up</a>
                            @endif
                        @else
                            <a href="{{ route('analyze_backlinks') }}" class="ax-btn ax-btn--transparent" style="
    border-radius: 3px;
    cursor: pointer;
    padding: 12px 30px;
    text-decoration: none;
    -webkit-transition: all 300ms ease-in-out;
    transition: all 300ms ease-in-out;
    display: inline-block;
    text-align: center;
    background: #3923b3;
    border: 1px solid #3923b3;
    -webkit-box-shadow: 0 3px 6px 0 rgba(244,58,122,0.3);
    box-shadow: 0 3px 6px 0 rgba(33, 209, 178, 0.28);
    color: #3923b3;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 1px;
    font-family: biennaleregular;
                            ">ANALYZE BACKLINKS</a>
                            <a class="ax-btn" href="{{ route('logout') }}" style="display: inline;"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endguest
                    </div>
                </nav>
            </div><!-- end ax-home-header__nav-container-->
            <button id="ax-menu-trigger" class="ax-btn ax-btn--menu hamburger hamburger--slider" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
            </button>
        </div>
    </header><!-- end header -->        <div class="ax-hero">
        <div class="wrap">
            <div class="ax-hero__content">

                <h1>
                    <i>The Easier Way to </i><br />
                    Rank Position #1 <br />
                    <!-- <span>Backlinks</span> -->
                </h1>
                <span class="ax-hero__content__description">We help you analyze and grow your backlinks through competitive analysis.</span>

                <form class="ax-form-field">
                    <fieldset class="ax-has-icon ax-has-icon--left">
                        <input type="text" placeholder="Your Email" />
                        <svg class="ax-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="17" viewBox="0 0 24 17">
                            <path fill-rule="evenodd" d="M22.594 14.507l-6.05-6.07 6.05-6.07v12.14zm-20.16.962l6.015-6.035 2.01 2.016c.824.827 2.258.826 3.082 0l2.01-2.016 6.016 6.035H2.433zm-1.028-.962V2.367l6.05 6.07-6.05 6.07zm20.16-13.1l-9.021 9.05c-.275.276-.815.276-1.09 0l-9.022-9.05h19.134zM21.892 0H2.109C.95 0 0 .944 0 2.11v12.656c0 1.165.95 2.109 2.11 2.109h19.78c1.161 0 2.11-.944 2.11-2.11V2.11C24 .944 23.05 0 21.89 0z"/>
                        </svg>
                    </fieldset>

                    <a href="#" class="ax-btn ax-btn--red ax-hero__btn">Get Started!</a>
                </form>

            </div>
            <div class="ax-hero__img">
                <img src="assets/images/analyze-competitive-img.svg" alt="analyzeCompetitive" />
            </div>
        </div>
    </div>        <div class="ax-backlink-universe">
        <div class="wrap">
            <h2>The Backlink Universe (BU)</h2>
            <h3>Explore a cleaner and more actionable backlink data set from your </br> competition that affects your SEO performance</h3>
            <p>&nbsp;</p>
            <img src="../../assets/images/backlink-universe.png" alt="backlink-universe" class="backlink-universe-img"/>
        </div>
        <!-- end wrap -->
    </div>        <!-- end the-purpose -->
    <div class="ax-compare-backlink ">
        <div class="wrap">
            <h2>Compare Backlinks to Your Competition<br/> in Position #1</h2>

            <h3>Easily campare yourself against the page in position #1 for your<br/> keyword and see what you’re missing opportunities.</h3>
            <p>&nbsp;</p>
            <img src="../../assets/images/compare-backlink.png" alt="backlink-universe" class="backlink-universe-img"/>
        </div>
    </div><!-- end experience -->

    <div class="ax-actionable-backlink">
        <div class="wrap">
            <h2>Actionable Backlink Insights;<br/> Discover Outreach Opportunities</h2>
            <h3>Find the backlinks your missing against your competition and get the <br/> outreach details to connect with journalists and influencers.</h3>
            <p>&nbsp;</p>
            <img src="../../assets/images/competitor-backlink.png" alt="competitor-backlink" />
        </div>
        <!-- end wrap -->
    </div>
    <div class="ax-validation">
        <div class="wrap">
            <h2>The Validation</h2>
            <h3>Don't take our word for it; see how Credit Sesame got their <br />primary keyword "free credit score" to position #1.</h3>
            <div class="ax-validation__testimonial">
                <div class="ax-validation__testimonial__bio">
                    <div class="ax-validation__testimonial__image">
                        <img src="../../assets/images/mike-robert.jpg" alt="Mike Robert" />
                    </div>
                    <div class="ax-validation__testimonial__text">
                        <span class="ax-validation__testimonial__name">Mike Robert</span>
                        <span class="ax-validation__testimonial__company">Credit Seame</span>
                        <span class="ax-validation__testimonial__role">VP of Marketing (Formerly)</span>
                    </div>

                </div>
                <div class="ax-validation__testimonial__content">
                    <p>
                        Using the deviation methods that Axieon provided us we were able to quickly understand what we needed to do and the amount of effort it would take; in less than a year we achieved position #1 for "free credit score" (from position #8) - a keyword that generates <span>250,000 monthly searches.</span>
                    </p>

                    <div class="ax-validation__testimonial__positions">
                        <div class="ax-validation__testimonial__startingPosition">
                            <span class="position-number">#8</span>
                            <span class="position-text">Starting Position</span>
                            <svg class="ax-icon" xmlns="http://www.w3.org/2000/svg" width="40" height="38" viewBox="0 0 40 38">
                                <g fill-rule="evenodd">
                                    <path d="M36.449 18.75h-8.195c-.646 0-1.17-.524-1.17-1.17v-1.372c0-.474-.286-.9-.724-1.081-.437-.181-.94-.082-1.276.253l-3.713 3.714c-.457.457-.457 1.198 0 1.655l5.369 5.37c.457.457.457 1.197 0 1.654l-7.025 7.025c-.457.458-1.197.458-1.655 0-.458-.458-.458-1.198 0-1.655l5.37-5.37c.456-.457.456-1.198 0-1.655l-5.37-5.369c-.456-.456-.456-1.199 0-1.655l9.366-9.366c.73-.73 1.997-.207 1.998.826V15.24c0 .646.525 1.17 1.17 1.17h5.855c.645 0 1.17.526 1.17 1.171 0 .646-.525 1.17-1.17 1.17zM5.666 34.799c-.457.458-1.197.458-1.655 0-.456-.456-.456-1.199 0-1.655l11.707-11.707c.17.355.4.683.686.969l.828.828L5.666 34.798zM21.626 7.35c-.465-.335-1.106-.284-1.512.122l-3.91 3.911c-.458.458-1.198.458-1.656 0-.457-.456-.457-1.198 0-1.655l5.268-5.268c.391-.39 1.008-.453 1.471-.15l4.912 3.4c-.153.11-.296.23-.43.363l-1.314 1.315-2.829-2.038zm10.14-4.99c1.29 0 2.341 1.051 2.341 2.342 0 1.291-1.05 2.342-2.341 2.342-1.291 0-2.341-1.05-2.341-2.342 0-1.291 1.05-2.341 2.341-2.341zm4.683 11.708h-4.683v-3.513-.004c0-.378-.068-.787-.204-1.171 2.682.116 4.887-2.036 4.887-4.678 0-2.582-2.101-4.683-4.683-4.683s-4.683 2.1-4.683 4.683c0 .281.026.556.074.823l-4.548-3.148-.018-.013c-1.389-.923-3.252-.738-4.43.44l-5.269 5.269c-1.37 1.369-1.37 3.597 0 4.966 1.37 1.37 3.598 1.37 4.967 0l3.207-3.207 1.712 1.233-6.374 6.373-14.048 14.05c-1.37 1.368-1.37 3.596 0 4.966 1.373 1.372 3.593 1.373 4.966 0l11.566-11.566 2.058 2.058-4.542 4.541c-1.372 1.373-1.372 3.594 0 4.967 1.373 1.372 3.594 1.373 4.967 0l7.025-7.025c1.372-1.372 1.373-3.594 0-4.966l-4.542-4.541 1.11-1.11c.5 1.33 1.786 2.28 3.29 2.28h8.195c1.937 0 3.512-1.575 3.512-3.512s-1.576-3.512-3.512-3.512zM9.522 4.702H3.668c-.646 0-1.17.524-1.17 1.17 0 .647.524 1.171 1.17 1.171h5.854c.646 0 1.17-.524 1.17-1.17 0-.647-.524-1.171-1.17-1.171"/>
                                    <path d="M9.522 14.068H3.668c-.646 0-1.17.524-1.17 1.17 0 .647.524 1.171 1.17 1.171h5.854c.646 0 1.17-.524 1.17-1.17 0-.647-.524-1.171-1.17-1.171M7.18 9.385H1.17c-.646 0-1.17.524-1.17 1.17 0 .647.524 1.171 1.17 1.171h6.01c.647 0 1.171-.524 1.171-1.17 0-.647-.524-1.171-1.17-1.171"/>
                                </g>
                            </svg>
                        </div>

                        <span class="ax-validation__testimonial__arrow"></span>

                        <div class="ax-validation__testimonial__currentPosition">
                            <span class="position-number">#1</span>
                            <span class="position-text">Current Position</span>
                            <svg class="ax-icon" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <path fill-rule="evenodd" d="M37.656 37.656h-8.953v-1.338c0-.713.919-1.339 1.966-1.339h5.021c1.047 0 1.966.626 1.966 1.339v1.338zm-11.297 0H13.641V35.69c0-1.084.882-1.966 1.966-1.966h8.786c1.084 0 1.967.882 1.967 1.966v1.966zM2.344 36.318c0-.713.919-1.339 1.966-1.339h5.02c1.048 0 1.967.626 1.967 1.339v1.338H2.344v-1.338zm5.413-29.43c-.522-.522-.522-1.37 0-1.893.253-.253.589-.392.946-.392.358 0 .694.14.947.392l6.725 6.725c.22.22.517.344.828.344h5.594c.31 0 .609-.124.828-.344l6.726-6.725c.252-.253.588-.392.946-.392.357 0 .694.14.946.392.522.522.522 1.371 0 1.893l-8.05 8.052c-.22.22-.344.517-.344.828v5.57h-7.698v-5.57c0-.31-.123-.609-.343-.828L7.757 6.888zM20 2.344c2.033 0 3.688 1.654 3.688 3.688 0 2.033-1.655 3.688-3.688 3.688-2.033 0-3.688-1.655-3.688-3.688 0-2.034 1.655-3.688 3.688-3.688zm1.172 27.698v-6.36h2.677v6.36c0 .738-.6 1.338-1.338 1.338-.738 0-1.34-.6-1.34-1.338zm-5.02 0v-6.36h2.676v6.36c0 .738-.6 1.338-1.338 1.338-.738 0-1.339-.6-1.339-1.338zm19.538 2.593h-5.02c-.989 0-1.9.287-2.627.766-.513-.814-1.29-1.445-2.21-1.773.23-.48.36-1.019.36-1.586V16.254l7.708-7.708c.695-.696 1.078-1.62 1.078-2.604s-.383-1.908-1.078-2.604c-.696-.696-1.62-1.078-2.604-1.078s-1.908.382-2.604 1.078L26.031 6C26.014 2.69 23.315 0 20 0c-3.315 0-6.014 2.689-6.03 6l-2.663-2.662c-.695-.696-1.62-1.078-2.604-1.078S6.795 2.642 6.1 3.338c-1.436 1.436-1.436 3.772 0 5.208l7.707 7.708v13.788c0 .568.13 1.106.36 1.586-.92.328-1.697.959-2.21 1.773-.727-.48-1.638-.766-2.626-.766H4.31c-2.377 0-4.31 1.652-4.31 3.683v2.51C0 39.475.525 40 1.172 40h37.656c.647 0 1.172-.525 1.172-1.172v-2.51c0-2.03-1.933-3.683-4.31-3.683z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    </div><!-- end-ax-home -->
<footer class="ax-home-footer">
    <div class="wrap">
        <div class="ax-home-footer__inner-container">
            <div class="ax-home-footer__footer-content">
                <div class="ax-home-footer__content__logo ax-home-footer__footer-content__logo">
                    <a href="#" class="logo-inner-container">
                        <img src="assets/images/home-footer-logo.svg" alt="logo"/>
                    </a>
                    <ul>
                        <li><a href="#"><span>T</span>(+1) 900 8080</a></li>
                        <li><a href="#"><span>E</span>info@axieon.com</a></li>
                    </ul>
                </div>

                <div class="ax-home-footer__content__copyright-container">
                    <div class="copyright">
                        <span>Copyright © 2020 - Axieon.com - All rights reserved.  </span>
                        <ul>
                            <li><a href="#"> Terms of Services</a></li>
                            <li><a href="#"> Privacy Policy</a></li>
                        </ul>
                    </div><!-- end copyright -->
                    <ul class="social-media">
                        <li>
                            <a href="#">
                                <svg class="ax-icon" xmlns="http://www.w3.org/2000/svg" width="9" height="19" viewBox="0 0 9 19">
                                    <path fill-rule="evenodd" d="M1.924 6.184H0v3.144h1.924v9.339h3.954v-9.34h2.651s.249-1.507.369-3.153H5.892V4.025c0-.322.431-.753.858-.753h2.153V0H5.975c-4.149 0-4.05 3.147-4.05 3.616v2.568z"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg class="ax-icon" xmlns="http://www.w3.org/2000/svg" width="12" height="16" viewBox="0 0 12 16">
                                    <path fill-rule="evenodd" d="M10.058 11.332H6.222c-.533 0-.987-.18-1.36-.545-.373-.365-.558-.805-.558-1.327V8.134H9.77c.493 0 .918-.173 1.27-.515.354-.345.53-.757.53-1.237 0-.481-.176-.892-.53-1.236-.354-.344-.78-.515-1.275-.515H4.304V1.889c0-.518-.19-.963-.57-1.332C3.359.187 2.905 0 2.375 0 1.832 0 1.369.183.993.545.614.909.426 1.358.426 1.891v7.572c0 1.556.566 2.886 1.7 3.99 1.133 1.107 2.5 1.658 4.099 1.658h3.835c.533 0 .99-.186 1.37-.557.38-.369.57-.814.57-1.332 0-.518-.19-.963-.57-1.333-.38-.37-.838-.557-1.372-.557"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg class="ax-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="14" viewBox="0 0 20 14">
                                    <path fill-rule="evenodd" d="M8.054 10.552V3.349l5.752 3.835-5.752 3.368zM17.014.171H3.244C1.8.171.629 1.358.629 2.823v8.354c0 1.465 1.17 2.652 2.615 2.652h13.77c1.444 0 2.615-1.187 2.615-2.652V2.823c0-1.465-1.17-2.652-2.615-2.652z"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg class="ax-icon" width="16px" height="17px" viewBox="0 0 16 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Website" stroke="#fff" stroke-width="1" fill-rule="evenodd">
                                        <g id="Axieon-Home" transform="translate(-1000.000000, -5589.000000)">
                                            <g id="Group-2" transform="translate(790.000000, 5567.000000)">
                                                <path d="M225.964591,37.279757 C225.978298,37.2054826 225.988349,37.130014 226,37.0555008 L226,23.671772 C225.988806,23.5984528 225.979212,23.5248949 225.965505,23.4518145 C225.825469,22.7021442 225.234027,22.1203676 224.507803,22.0164789 C224.477648,22.0124189 224.448179,22.005493 224.418481,22 L211.581519,22 C211.504076,22.0145683 211.426177,22.0255542 211.349876,22.0437049 C210.641014,22.2125539 210.116507,22.8093765 210.015534,23.5602409 C210.011422,23.5915269 210.005254,23.6225741 210,23.6538601 L210,37.0741291 C210.01462,37.1591506 210.026271,37.2448886 210.044547,37.3294325 C210.201259,38.0540263 210.79293,38.6157417 211.496766,38.7103162 C211.530804,38.714615 211.565071,38.7215409 211.599109,38.7272727 L224.400891,38.7272727 C224.484045,38.7124656 224.567427,38.7002856 224.649667,38.6816572 C225.303017,38.5366907 225.836891,37.9668553 225.964591,37.279757 Z M211.73115,36.2537667 C211.73115,36.6098541 212.026071,36.9160272 212.366681,36.9160272 C216.12139,36.916266 219.875869,36.916266 223.630577,36.9160272 C223.974386,36.9160272 224.267708,36.6103318 224.267708,36.2516173 C224.267936,33.7790665 224.267708,31.3067546 224.267708,28.8344427 L224.267708,28.7830954 L222.74033,28.7830954 C222.955982,29.5036291 223.02223,30.2365817 222.937706,30.9836249 C222.852725,31.730907 222.622453,32.4263642 222.247348,33.0685634 C221.872014,33.7114792 221.385428,34.2440579 220.789646,34.6679715 C219.245363,35.7675199 217.21221,35.8642438 215.57358,34.9027361 C214.745242,34.4172058 214.094861,33.7401381 213.6414,32.867712 C212.964977,31.5658792 212.856923,30.1995639 213.25373,28.7819013 C212.747041,28.7823789 212.242408,28.7823789 211.730921,28.7823789 L211.730921,28.8275167 C211.730921,31.3029334 211.730693,33.77835 211.73115,36.2537667 Z M217.925641,33.7513629 C219.737204,33.791963 221.202444,32.2787706 221.240595,30.4383885 C221.279658,28.5404496 219.815331,26.9728052 218.000114,26.9739993 C216.22556,26.9728052 214.782935,28.4654587 214.758035,30.3122891 C214.732449,32.208795 216.184669,33.7121956 217.925641,33.7513629 Z M224.26748,25.6229687 C224.267708,25.0949276 224.267708,24.5666476 224.26748,24.0386065 C224.26748,23.6598307 223.980782,23.3584341 223.618927,23.3581953 C223.115207,23.3579565 222.611488,23.3577177 222.10754,23.3581953 C221.746598,23.358673 221.458987,23.660786 221.458759,24.0395618 C221.45853,24.5630653 221.45716,25.0865687 221.460586,25.610311 C221.461043,25.6884066 221.475207,25.769607 221.498965,25.8436426 C221.589429,26.1223509 221.833636,26.2933493 222.132669,26.2947822 C222.375734,26.2952599 222.618798,26.2945434 222.862091,26.2945434 C223.125259,26.2914387 223.38934,26.2966928 223.652736,26.2900057 C223.991519,26.2811692 224.26748,25.9776232 224.26748,25.6229687 Z" id="Oval-1"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </li>
                    </ul><!-- end social-media -->
                </div>
            </div><!-- end ax-home-footer__content -->
        </div><!-- ax-home-footer-inner-container -->
    </div><!-- end ax-home-container -->
</footer><script src="./assets/js/vendor.min.js?version=1593780809"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="./assets/js/custom.min.js?version=1593780809"></script>
</body>
</html>
