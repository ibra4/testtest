@extends('layouts.empty')

@section('content')
    <div class="container-fluid login-page-wrapper">
        <div class="row">
            <div class="col-md-4">
                <div class="login-form-wrapper">
                    <div>
                        <div class="text-center">
                            <img src="{{ asset('images/logo.png') }}" alt="" class="mb-5">
                        </div>
                        <h1 class="login-title">Login</h1>
                        @include('auth.login_form')
                    </div>
                    <div class="my-5">
                        <div class="text-center mb-3">Contact Us</div>
                        <ul class="social-media-links mb-3">
                            <li>
                                <a href="#" style="color: #3b5998"><i class="fa-brands fa-facebook fa-2x"></i></a>
                            </li>
                            <li>
                                <a href="#" style="color: #00acee"><i class="fa-brands fa-twitter fa-2x"></i></a>
                            </li>
                            <li>
                                <a href="#" style="color: #ff0000"><i class="fa-brands fa-youtube fa-2x"></i></a>
                            </li>
                        </ul>
                        <div class="text-center text-muted">All Reights Reserved © Bana Center</div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="login-carousel">
                    <div class="carousel-item"
                        style="background-image:url('https://www.testim.io/wp-content/uploads/2019/11/What-Is-Test-Automation.jpg')">
                        <div class="inner">
                            <div class="container">
                                <div class="carousel-title">title here</div>
                                <p class="carousel-description">carousel description here</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item"
                        style="background-image:url('https://www.testim.io/wp-content/uploads/2019/11/What-Is-Test-Automation.jpg')">
                        <div class="inner">
                            <div class="container">
                                <div class="carousel-title">title here</div>
                                <p class="carousel-description">carousel description here</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item"
                        style="background-image:url('https://www.testim.io/wp-content/uploads/2019/11/What-Is-Test-Automation.jpg')">
                        <div class="inner">
                            <div class="container">
                                <div class="carousel-title">title here</div>
                                <p class="carousel-description">carousel description here</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
