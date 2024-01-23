@extends('frontend.layoutFE')
@section('contentFE')

 <!-- breadcrumb start -->
 <div class="breadcrumb">
    <div class="container">
        <ul class="list-unstyled d-flex align-items-center m-0">
            <li><a href="{{route('fe.home')}}">Home</a></li>
            <li>
                <svg class="icon icon-breadcrumb" width="64" height="64" viewBox="0 0 64 64" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.4">
                        <path
                            d="M25.9375 8.5625L23.0625 11.4375L43.625 32L23.0625 52.5625L25.9375 55.4375L47.9375 33.4375L49.3125 32L47.9375 30.5625L25.9375 8.5625Z"
                            fill="#000" />
                    </g>
                </svg>
            </li>
            <li>FAQ</li>
        </ul>
    </div>
</div>
<!-- breadcrumb end -->

<div class="faq-section mt-100 overflow-hidden">
    <div class="faq-inner">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-heading">Frequently Asked Question</h2>
                <p class="section-subheading">All your questions about LightMyDesk answered </p>
            </div>
            <div class="faq-container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="faq-item rounded">
                            <h2 class="faq-heading heading_18 collapsed d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" data-bs-target="#faq1">
                                I can't log in to the website at LightMyDesk?
                                <span class="faq-heading-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="#F76B6A" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-down">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </span>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse">
                                <p class="faq-body text_14">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.
                                    Sit repellat
                                    quod facere illo esse cumque inventore veniam necessitatibus totam
                                    repudiandae. Hic rerum animi modi sed?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="faq-item rounded">
                            <h2 class="faq-heading heading_18 collapsed d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" data-bs-target="#faq2">
                                Where and how to buy study lamps?
                                <span class="faq-heading-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="#F76B6A" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-down">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </span>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse">
                                <p class="faq-body text_14">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.
                                    Sit repellat
                                    quod facere illo esse cumque inventore veniam necessitatibus totam
                                    repudiandae. Hic rerum animi modi sed?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="faq-item rounded">
                            <h2 class="faq-heading heading_18 collapsed d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" data-bs-target="#faq3">
                                Is LightMyDesk a safe place to shop?
                                <span class="faq-heading-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="#F76B6A" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-down">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </span>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse">
                                <p class="faq-body text_14">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.
                                    Sit repellat
                                    quod facere illo esse cumque inventore veniam necessitatibus totam
                                    repudiandae. Hic rerum animi modi sed?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="faq-item rounded">
                            <h2 class="faq-heading heading_18 collapsed d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" data-bs-target="#faq4">
                                What often will results be reported?
                                <span class="faq-heading-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="#F76B6A" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-down">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </span>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse">
                                <p class="faq-body text_14">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.
                                    Sit repellat
                                    quod facere illo esse cumque inventore veniam necessitatibus totam
                                    repudiandae. Hic rerum animi modi sed?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="faq-item rounded">
                            <h2 class="faq-heading heading_18 collapsed d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" data-bs-target="#faq5">
                                How can I get support?
                                <span class="faq-heading-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="#F76B6A" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-down">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </span>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse">
                                <p class="faq-body text_14">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.
                                    Sit repellat
                                    quod facere illo esse cumque inventore veniam necessitatibus totam
                                    repudiandae. Hic rerum animi modi sed?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="faq-item rounded">
                            <h2 class="faq-heading heading_18 collapsed d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" data-bs-target="#faq6">
                                Who do I contact if I want to order directly?
                                <span class="faq-heading-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="#F76B6A" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-down">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </span>
                            </h2>
                            <div id="faq6" class="accordion-collapse collapse">
                                <p class="faq-body text_14">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.
                                    Sit repellat
                                    quod facere illo esse cumque inventore veniam necessitatibus totam
                                    repudiandae. Hic rerum animi modi sed?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="faq-item rounded">
                            <h2 class="faq-heading heading_18 collapsed d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" data-bs-target="#faq1">
                                How to pay at LightMyDesk?
                                <span class="faq-heading-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="#F76B6A" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-down">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </span>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse">
                                <p class="faq-body text_14">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.
                                    Sit repellat
                                    quod facere illo esse cumque inventore veniam necessitatibus totam
                                    repudiandae. Hic rerum animi modi sed?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="faq-item rounded">
                            <h2 class="faq-heading heading_18 collapsed d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" data-bs-target="#faq2">
                                Why was my account locked?
                                <span class="faq-heading-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="#F76B6A" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-down">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </span>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse">
                                <p class="faq-body text_14">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.
                                    Sit repellat
                                    quod facere illo esse cumque inventore veniam necessitatibus totam
                                    repudiandae. Hic rerum animi modi sed?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="faq-item rounded">
                            <h2 class="faq-heading heading_18 collapsed d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" data-bs-target="#faq3">
                                How long is the warranty period?
                                <span class="faq-heading-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="#F76B6A" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-down">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </span>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse">
                                <p class="faq-body text_14">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.
                                    Sit repellat
                                    quod facere illo esse cumque inventore veniam necessitatibus totam
                                    repudiandae. Hic rerum animi modi sed?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="faq-item rounded">
                            <h2 class="faq-heading heading_18 collapsed d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" data-bs-target="#faq4">
                                Why is the price of LightMyDesk lamp so expensive?
                                <span class="faq-heading-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="#F76B6A" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-down">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </span>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse">
                                <p class="faq-body text_14">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.
                                    Sit repellat
                                    quod facere illo esse cumque inventore veniam necessitatibus totam
                                    repudiandae. Hic rerum animi modi sed?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="faq-item rounded">
                            <h2 class="faq-heading heading_18 collapsed d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" data-bs-target="#faq5">
                                Is LightMyDesk's service good?
                                <span class="faq-heading-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="#F76B6A" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-down">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </span>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse">
                                <p class="faq-body text_14">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.
                                    Sit repellat
                                    quod facere illo esse cumque inventore veniam necessitatibus totam
                                    repudiandae. Hic rerum animi modi sed?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="faq-item rounded">
                            <h2 class="faq-heading heading_18 collapsed d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" data-bs-target="#faq6">
                                Can the product be returned if it is damaged?
                                <span class="faq-heading-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="#F76B6A" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-down">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </span>
                            </h2>
                            <div id="faq6" class="accordion-collapse collapse">
                                <p class="faq-body text_14">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.
                                    Sit repellat
                                    quod facere illo esse cumque inventore veniam necessitatibus totam
                                    repudiandae. Hic rerum animi modi sed?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="view-all text-center" data-aos="fade-up" data-aos-duration="700">
                    <a class="btn-primary" href="{{route('fe.faq')}}">SEE MORE</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
