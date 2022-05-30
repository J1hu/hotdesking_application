<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body style="background-color: #FFFF;">
    <div id="app">
        @include('layouts.simplenav')
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl">
                        <h3 class="ml-3 pl-3 mt-5 font-weight-bold"> Get started with Hot Desk</h3>
                        <h1 class="ml-3 pl-3 text-warning font-weight-bold">User Guide</h1>
                        <div> <br>
                            <p class=" ml-3 pl-3"> Hot Desk is a web application for Hot Desking procedures and services. <br>
                                If you want to get started in using the website, you can use the guides below. <br> After learning how to use the website, you are now ready to use it.
                            </p>
                        </div>
                        <div class="mt-1 ml-3 pl-3 mr-3 pr-3">
                            <a class="btn btn-outline-warning" href="#text-guide" role="button">Step-by-step Guide</a>
                        </div>
                    </div>

                    <div class="col-xl">
                        <div class="ml-5 pl-5 mr-5 pr-5">
                            <div class="w-450 h-500">
                                <img src="{{ asset('images/user.jpg') }}" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Second section -->
                <div class="m-3" style="background-color:#F4EFEB; border-radius:25px;" id="text-guide">
                    <div class="row m-4">
                        <div class=".col-6 .col-sm-3">
                            <img src="{{URL('images/desk.png') }}" width="550" height="450" class="img-fluid">
                        </div>
                        <div class="col mt-4">
                            <h1 class="text-left mt-5 text-warning font-weight-bold">Hot Desk</>
                                <h1 class="text-left pb-5 font-weight-bold"><strong>Step-by-Step Guide</strong></h1>
                                <p>Start using the Hot Desk and never forget to set your schedules. Don't know how to use the site? <br>Worry no more! Here is our step-by-step guide for you
                                    to follow and get started right away. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Third section -->
            <div class="container">

                <!--account set up guide-->
                <div class="pt-3">
                    <h2 class="text-left pb-5 text-warning"><strong>Setting up your account</strong></h2>
                    <div class="text-left pb-5 mb-3">
                        <h5 class="font-weight-bold">Step 1. Check email for user credentials</h5>
                        <p>Before you access the Hot Desk site, you will receive an email containing your user credentials.
                            After succesfully received the login credentials, you can now try to login to the site through the link provided in the email </p>
                        <img src="{{URL('images/emailnotif.png') }}" width="750" height="350" class="img-fluid">
                    </div>
                    <div class="text-left pb-5 mb-3">
                        <h5 class="font-weight-bold">Step 2. Proceed to login page</h5>
                        <p>Upon clicking the link, you will be redirected to the login page of the where you will enter the email and password provided in your email.</p>
                        <img src="{{URL('images/login.png') }}" width="750" height="350" class="img-fluid">
                    </div>
                    <div class="text-left pb-5 mb-3">
                        <h5 class="font-weight-bold">Privacy Disclaimer page</h5>
                        <p>	The Privacy  Disclaimer page states how the company or website collects, handles, and processes the data of its users. This page explains what personal information they collect from you when you use the website, how they use your information, and the choices you have regarding their use of your information.</p>
                        <img src="{{URL('images/privacy-disclaimer.png') }}" width="750" height="400" class="img-fluid">
                        <p>	<strong>Note:</strong> To view the Privacy Disclaimer page, you need to navigate first to the <strong>Get Help</strong> that you can see in the navigation menu, or for a shortcut, you can click the link in the footer of the website.</p>
                    </div>
                </div>
                <!--Book a desk guide-->
                <div class="pt-3">
                    <h2 class="text-left pb-5 text-warning"><strong>BOOK A DESK</strong></h2>
                    <div class="text-left pb-5 mb-3">
                        <h5><strong>Step 1. Go to the booking page</strong> ( navbar book a desk > reservation )</h5>
                        <p>Before reserving or booking a desk make sure that you are already logged in. After logging in, you will redirect to the dashboard page.
                        <li>On the dashboard page navigate to the <strong>Book a Desk → Reservation</strong> that you will see in the navigation menu.
                        </li><br>
                        <img src="{{URL('images/reservation.png') }}" width="750" height="350" class="img-fluid">
                    </div>
                    <div class="text-left pb-5 mb-3">
                        <h5><strong>Step 2. Fill up the form</strong> ( type in a title for reservation, type in a description, select date, select location )</h5>
                        <p>After navigating to the Book a Desk you will now see the Booking page wherein in this page you can create a reservation of available desks. 
                        <ul>
                            <li>In booking a desk, first is to fill up the <strong>title</strong> and <strong>description</strong> of your booking
                            </li>
                            <li>Second, choose or <strong>select a desk location</strong> that you want to reserve by filling up the first input field. With the help of an Office map & Desk location picture, you can see the available, reserved, and occupied desks so you can easily choose your preferred desk that is available at your time of booking.
                            </li>
                            <li>After that, <strong>select a date</strong> of your preferred and scheduled work to reserve your desk by also filling up the second input field. With the help of a calendar picker, you can easily pick your desired date. With also the help of an embedded calendar view, you can easily see the reserved desks on the dates in the calendar.
                            </li>
                        </ul>
                        </p>
                        <img src="{{URL('images/desk-reservation.png') }}" width="750" height="350" class="img-fluid">
                    </div>
                    <div class="text-left pb-5 mb-3">
                        <h5><strong>Step 3. Click reserve button</strong></h5>
                        <li>Lastly, click the <strong>Reserve desk</strong> button after you finally decide on the desk location you want and the date of your reservation.
                        </li>
                    </div>
                </div>
                <div class="container" id="video-tutorial">
                    <div class="col mt-5 mb-5">
                        <h3 class="font-weight-bold">Get started a lot faster by watching the tutorial</h3>
                        <h1 class="text-warning font-weight-bold">Hot Desk Video Guide</h1>
                        <div> <br>
                            <p> Not fond of reading? We got your back!<br>
                                You can now learn how to use the hot desk through watching the video provided.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Video Tutorial -->
                <div class="container pb-5">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" width="860" height="484" src="https://www.youtube.com/embed/Ve4tF4Y_Fc4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <br>
                    <br>
                </div>

                <div class="container">
                    <div class="card mb-3">
                        <div class="card-header font-weight-bold">
                            User Feedback
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Thank you for your support.</h5>
                            <p class="card-text">Was this article helpful? Submit your feedback about the site for future improvements and fixes.</p>
                            <a class="btn btn-outline-warning active" href="https://tinyurl.com/2p82zkcc" role="button" target="_blank">Submit Feedback</a>
                        </div>
                    </div>
                </div>
                <!--manage bookings guide-->
                <div class="pt-3">
                    <h2 class="text-left pb-3 text-warning"><strong>Manage Bookings</strong></h2>
                    <div class="text-left pb-5 mb-3">
                        <h5 class="font-weight-bold mb-5">Cancel reservation</h5>

                        <p><strong>Step 1.</strong> Situated at the last column of the bookings table in the dashboard, a delete button is available for the user to click in cases that they want to cancel their reservation. Just find the row of the specific reservation that you want to cancel, then simply click the cancel button.</p>
                        <img src="{{URL('images/cancel-bookings-table.jpg') }}" width="750" height="350" class="img-fluid">

                        <p class="pt-4 mt-3"><strong>Step 2.</strong> Click Ok once you are really sure you want to cancel the reservation.</p>
                        <img src="{{URL('images/cancel-confirm.jpg') }}" width="750" height="350" class="img-fluid">
                    </div>
                </div>
                <!--ask for help guide-->
                <div class="pt-3">
                    <h2 class="text-left pb-3 text-warning"><strong>Ask for Help</strong></h2>
                    <div class="text-left pb-5 mb-3">
                        <h5 class="font-weight-bold mb-5">Navigate to Get Help</h5>

                        <p>Simply click <strong>Get Help</strong> at the top-right corner of the navigation bar and you will be taken to the support page for help.</p>
                        <img src="{{URL('images/nav-get-help.jpg') }}" width="750" height="350" class="img-fluid">
                        
                        <p class="pt-4 mt-3">Or simply click the Support link at the right section of the footer at the bottom of the page and you will reach the same page for assistance and guides.</p>
                        <img src="{{URL('images/footer-support.jpg') }}" width="750" height="350" class="img-fluid">
                        
                    </div>
                </div>

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="false">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-dashboard-tab" data-toggle="pill" href="#pills-dashboard" role="tab" aria-controls="pills-dashboard" aria-selected="false">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-reserve-tab" data-toggle="pill" href="#pills-reserve" role="tab" aria-controls="pills-reserve" aria-selected="false">Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-book-tab" data-toggle="pill" href="#pills-book" role="tab" aria-controls="pills-book" aria-selected="false">Bookings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-support-tab" data-toggle="pill" href="#pills-support" role="tab" aria-controls="pills-support" aria-selected="false">Support</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-guide-tab" data-toggle="pill" href="#pills-guide" role="tab" aria-controls="pills-guide" aria-selected="false">User Guide</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-faqs-tab" data-toggle="pill" href="#pills-faqs" role="tab" aria-controls="pills-faqs" aria-selected="false">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-disclaimer-tab" data-toggle="pill" href="#pills-disclaimer" role="tab" aria-controls="pills-disclaimer" aria-selected="false">Privacy Disclaimer</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
                    <div class="tab-pane fade" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">...</div>
                    <div class="tab-pane fade" id="pills-dashboard" role="tabpanel" aria-labelledby="pills-dashboard-tab">...</div>
                    <div class="tab-pane fade" id="pills-reserve" role="tabpanel" aria-labelledby="pills-reserve-tab">...</div>
                    <div class="tab-pane fade" id="pills-book" role="tabpanel" aria-labelledby="pills-book-tab">...</div>
                    <div class="tab-pane fade" id="pills-support" role="tabpanel" aria-labelledby="pills-support-tab">...</div>
                    <div class="tab-pane fade" id="pills-guide" role="tabpanel" aria-labelledby="pills-guide-tab">...</div>

                    <!--faqs-->
                    <div class="tab-pane fade" id="pills-faqs" role="tabpanel" aria-labelledby="pills-faqs-tab">
                        <div class="pt-3">
                            <h2 class="text-left pb-3 text-warning"><strong>Frequently Asked Questions</strong></h2>
                            <div class="text-left pb-5 mb-3">
                                <h5 class="font-weight-bold mb-5">Navigate to the FAQs Page</h5>
                                <p>• To view the FAQs page, you need to navigate first to the Get Help that you can see in the navigation menu.</p>
                                <p>• After navigating to Get Help. you will be redirected to the Support page which includes a user guide, FAQs, and Privacy Disclaimer.</p>
                                <p>• Click the view button under the FAQs card and you will redirect to the Frequently asked questions page.</p>
                                <img src="{{URL('images/faqs-page.png') }}" width="750" height="350" class="img-fluid">
                            </div>
                        </div>
                    </div>

                    <!--disclaimer-->
                    <div class="tab-pane fade" id="pills-disclaimer" role="tabpanel" aria-labelledby="pills-disclaimer-tab">
                        <div class="pt-3">
                            <h2 class="text-left pb-3 text-warning"><strong>Privacy Disclaimer</strong></h2>
                            <div class="text-left pb-5 mb-3">
                                <p>The Privacy  Disclaimer page states how the company or website collects, handles, and processes the data of its users. This page explains what personal information they collect from you when you use the website, how they use your information, and the choices you have regarding their use of your information.</p>
                                <img src="{{URL('images/privacy-disclaimer.png') }}" width="750" height="350" class="img-fluid">

                                <p class="pt-4 mt-3"><strong>Note:</strong> To view the Privacy Disclaimer page, you need to navigate first to the Get Help that you can see in the navigation menu, or for a shortcut, you can click the link in the footer of the website.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
        @include('layouts.footer')
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</html>