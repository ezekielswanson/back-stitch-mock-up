<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

        <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">

        @stack('meta')

        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->siteDescription }}" />
        <meta property="Permissions-policy" content="interest-cohort=()">
        
        <script type="application/ld+json">
            {!! stripslashes($page->siteJsonLd) !!}
        </script>

        @if ($page->production)
            {!! $page->siteAnalytics !!}
        @endif

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    </head>

    <body>
        <!-- Nav & Header -->
        <header>
        <nav>
            <div class="nav-container" id>
                <div class="logo">
                    <a href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 178.081 27.969">
                            <g data-name="Group 145" transform="translate(-56.542 -79.077)">
                                <path fill="#e4f3ed" d="M59.1 81.891c0-.795-.433-.83-.974-.83h-1.584v-1.984h5.667v10.069a12.745 12.745 0 0 1 6.965-2.454c3.9 0 7.363 2.67 7.363 9.781 0 7.759-4.259 10.573-9.529 10.573A38.47 38.47 0 0 1 59.1 106Zm9.239 7.255a11.29 11.29 0 0 0-6.135 2.382v12.416a16.794 16.794 0 0 0 4.4.758c5.268 0 6.711-3.357 6.711-8.121.009-5.234-2.083-7.435-4.971-7.435Z" data-name="Path 1"/>
                                <path fill="#e4f3ed" d="M91.908 95.461v-2.563c0-2.093-1.336-3.969-4.331-3.969-1.408 0-4.259.107-5.052 3.175h-1.589v-4.262a25.367 25.367 0 0 1 6.713-1.155c3.934 0 7.362 1.552 7.362 6.82v9.636a1.332 1.332 0 0 0 1.48 1.48h1.048v1.919a7.979 7.979 0 0 1-2.13.288c-1.515 0-3-.36-3.284-2.2a11.311 11.311 0 0 1-6.532 2.238c-2.923 0-5.883-1.805-5.883-5.6 0-3.212 2.491-5.81 7.652-5.81Zm0 2.166h-4.222c-2.563 0-4.764.758-4.764 3.537 0 2.417 1.659 3.248 3.644 3.248a9.639 9.639 0 0 0 5.342-1.914Z" data-name="Path 2"/>
                                <path fill="#e4f3ed" d="M114.136 101.778h1.7v3.9a14.213 14.213 0 0 1-6.176 1.364c-4.511 0-9.671-2.129-9.671-10.176 0-8.012 5.161-10.177 9.671-10.177a14.973 14.973 0 0 1 6.172 1.371v3.862h-1.8a4.588 4.588 0 0 0-4.476-2.888c-4.115 0-6.316 2.923-6.316 7.833 0 4.546 2.057 7.831 6.423 7.831a4.653 4.653 0 0 0 4.473-2.92Z" data-name="Path 3"/>
                                <path fill="#e4f3ed" d="m131.204 89.181-2.96-.542V87.2h8.049v1.985h-2.166l-5.2 7.038 2.744 4.223c2.057 3.139 4.041 4.115 6.1 4.115v2.057a6.208 6.208 0 0 1-1.768.289c-2.814 0-5.2-2.057-6.892-4.727l-3.428-5.342h-1.373v7.8h2.563v1.984h-8.193v-1.984h1.553c.541 0 .975-.037.975-.867V81.928c0-.831-.434-.867-.975-.867h-1.588v-1.984h5.665V95.1h2.563Z" data-name="Path 4"/>
                                <path fill="#e4f3ed" d="M146.358 107.042a19.4 19.4 0 0 1-6.46-1.19v-4.15h1.624a4.866 4.866 0 0 0 4.729 3.176c2.345 0 4.294-.795 4.294-3.538 0-2.705-2.851-3.428-5.342-4.114-2.563-.722-5.124-1.768-5.124-5.125 0-4.223 3.5-5.412 7.543-5.412a25.568 25.568 0 0 1 5.558.721v4.115h-1.444a4.833 4.833 0 0 0-4.583-2.67c-2.31 0-3.9 1.118-3.9 2.923 0 1.984 2.092 2.561 4.764 3.355 2.561.758 5.774 1.66 5.774 5.594.003 4.515-3.462 6.315-7.433 6.315Z" data-name="Path 5"/>
                                <path fill="#e4f3ed" d="M177.354 104.701a4.8 4.8 0 0 0 .9-.037v2.058a9.956 9.956 0 0 1-1.805.18c-1.984 0-3.825-.758-3.825-3.644v-13.21c0-.829-.433-.866-.974-.866h-1.589v-1.986h5.667v15.267c.002 1.443.362 2.238 1.626 2.238Z" data-name="Path 6"/>
                                <path fill="#e4f3ed" d="M208.894 101.778h1.7v3.9a14.213 14.213 0 0 1-6.175 1.364c-4.511 0-9.671-2.129-9.671-10.176 0-8.012 5.161-10.177 9.671-10.177a14.973 14.973 0 0 1 6.172 1.371v3.862h-1.8a4.588 4.588 0 0 0-4.476-2.888c-4.115 0-6.316 2.923-6.316 7.833 0 4.546 2.057 7.831 6.423 7.831a4.652 4.652 0 0 0 4.472-2.92Z" data-name="Path 7"/>
                                <path fill="#e4f3ed" d="M215.966 81.928c0-.831-.434-.867-.975-.867h-1.588v-1.984h5.67V89.4a14.628 14.628 0 0 1 7.436-2.635c2.959 0 5.558 1.552 5.558 5.666v11.332c0 .83.433.867.974.867h1.587v1.984h-8.191v-1.984h2.526V93.3c0-2.742-1.336-3.717-3.9-3.717a12.638 12.638 0 0 0-5.993 1.949v13.1h2.563v1.984h-8.193v-1.984h1.552c.541 0 .975-.037.975-.867Z" data-name="Path 8"/>
                                <path fill="#e4f3ed" d="M161.982 83.494h-1.967c-.513 2.135-1.433 3.763-3.483 4.425v1.625h2.382v12.378c0 3.825 2.346 5.124 5.089 5.124a14.359 14.359 0 0 0 4.113-.613v-2.454a11.689 11.689 0 0 1-3.139.541c-1.768 0-3-.795-3-2.959V89.544h6.46v-2.348h-6.46Z" data-name="Path 9"/>
                                <path fill="#e4f3ed" d="M192.402 89.544v-2.348h-6.46v-3.7h-1.967c-.513 2.135-1.433 3.763-3.483 4.425v1.623h2.382v12.378c0 3.825 2.346 5.124 5.089 5.124a14.36 14.36 0 0 0 4.114-.613v-2.454a11.69 11.69 0 0 1-3.139.541c-1.768 0-3-.795-3-2.959V89.544Z" data-name="Path 10"/>
                                <rect width="4.951" height="1.908" fill="#e4f3ed" data-name="Rectangle 18" rx=".954" transform="translate(170.848 79.08)"/>
                                <rect width="4.951" height="1.908" fill="#2b8b6f" data-name="Rectangle 19" rx=".954" transform="translate(179.343 79.098)"/>
                                <rect width="4.951" height="1.908" fill="#2b8b6f" data-name="Rectangle 20" rx=".954" transform="translate(188.116 79.098)"/>
                                <rect width="4.951" height="1.908" fill="#2b8b6f" data-name="Rectangle 21" rx=".954" transform="translate(196.89 79.098)"/>
                                <rect width="4.951" height="1.908" fill="#2b8b6f" data-name="Rectangle 22" rx=".954" transform="translate(205.664 79.098)"/>
                                <rect width="4.951" height="1.908" fill="#2b8b6f" data-name="Rectangle 23" rx=".954" transform="translate(161.795 79.098)"/>
                                <rect width="4.951" height="1.908" fill="#2b8b6f" data-name="Rectangle 24" rx=".954" transform="translate(153.021 79.098)"/>
                                <rect width="4.951" height="1.908" fill="#2b8b6f" data-name="Rectangle 25" rx=".954" transform="translate(144.247 79.098)"/>
                                <rect width="4.951" height="1.908" fill="#2b8b6f" data-name="Rectangle 26" rx=".954" transform="translate(135.473 79.098)"/>
                                <rect width="4.951" height="1.908" fill="#2b8b6f" data-name="Rectangle 27" rx=".954" transform="translate(126.699 79.098)"/>
                            </g>
                        </svg>
                    </a>
                </div>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#what-we-do">What We Do</a></li>
                    <li><a href="#who-we-are">Who We Are</a></li>
                    <li><a href="#blog">Blog</a></li> 
                    <li><a href="#contact-us">Contact Us</a></li>
                </ul>
                <!--Mobile Menu-->
                <div class="mobile-menu-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 16">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2" data-name="Group 74">
                        <path d="M1 1h34" data-name="Line 17"/>
                        <path d="M1 8h34" data-name="Line 18"/>
                        <path d="M1 15h34" data-name="Line 19"/>
                    </g>
                </svg>
            </div>
            </div>
        </nav>
        <div class="header-text-wrapper" id="home">
            <div class="header-text-container">
                <h1>
                    Descriptive text about your firm here
                </h1>
                <p> Briefly describe who you serve, what you do, and a differentiator. Mortis mortis engorgio incendio momentum.
                    Briefly describe who you serve, what you do, and a differentiator. Mortis mortis engorgio incendio momentum.
                </p>
                <div class="header-cta-btn">
                    <div class="header-cta-btn-one"><a href="#">Let's Talk About It</a></div>
                    <div class="header-cta-btn-two"><a href="#">Get To Know Us</a></div>
                </div>
            </div>
        </div>
        </header>

        <!-- Our Services Section -->
        <div class="our-services-section" id="what-we-do">
            <div class="our-services-wrapper">
                <div class="our-services-background"></div>
                <div class="our-services-header">
                    <div class="our-services-sub-title"><p>OUR SERVICES</p></div>
                    <div class="our-services-title"><h3>Headline about Your Services</h3></div>
                </div>
                <div class="our-services-container">
                    <div class="our-services-card">
                        <div class="our-services-card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="69" height="74.881" viewBox="0 0 69 74.881">
                                <g id="Group_229" data-name="Group 229" transform="translate(-277.5 -2494.752)">
                                    <g id="Group_66" data-name="Group 66" transform="translate(279.5 2576.199) rotate(-90)">
                                    <line id="Line_13" data-name="Line 13" x2="70.881" transform="translate(8.566 21.001)" fill="none" stroke="#578365" stroke-linecap="round" stroke-width="4"/>
                                    <line id="Line_16" data-name="Line 16" x2="70.881" transform="translate(8.566)" fill="none" stroke="#578365" stroke-linecap="round" stroke-width="4"/>
                                    <line id="Line_14" data-name="Line 14" x2="70.881" transform="translate(8.566 42.999)" fill="none" stroke="#578365" stroke-linecap="round" stroke-width="4"/>
                                    <line id="Line_15" data-name="Line 15" x2="70.881" transform="translate(8.566 65)" fill="none" stroke="#578365" stroke-linecap="round" stroke-width="4"/>
                                    </g>
                                </g>
                                </svg>
                        </div>
                        <div class="our-services-card-txt">
                            <div class="our-services-card-title"><h4>Service 1</h4></div>
                            <p>Brief descriptive text. Avis aparecium petrificus mobilicorpus expecto petrificus engorgio petrificus.</p>
                        </div>
                    </div>
                    <div class="our-services-card">
                        <div class="our-services-card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="66.378" height="74.855" viewBox="0 0 66.378 74.855">
                                <g id="Alternative-Icon" transform="translate(64.783 1.927) rotate(90)">
                                    <path id="Union_4" data-name="Union 4" d="M0,31.814H0c0-.059,0-.116,0-.175s0-.116,0-.175H0C.2-4.021,30.983.151,30.983.151L.171,31.64,30.983,63.132a24.1,24.1,0,0,1-2.918.151C20.382,63.283.162,60.554,0,31.814Z" transform="translate(0 0)" fill="none" stroke="#578365" stroke-width="3"/>
                                    <path id="Union_5" data-name="Union 5" d="M0,31.468H0c0,.059,0,.116,0,.175s0,.116,0,.175H0C.2,67.3,30.983,63.132,30.983,63.132L.171,31.642,30.983.151A24.094,24.094,0,0,0,28.065,0C20.382,0,.162,2.729,0,31.468Z" transform="translate(71 63.283) rotate(180)" fill="none" stroke="#578365" stroke-width="3"/>
                                </g>
                            </svg>
                        </div>
                        <div class="our-services-card-txt">
                            <div class="our-services-card-title"><h4>Service 2</h4></div>
                            <p>Brief descriptive text. Avis aparecium petrificus mobilicorpus expecto petrificus engorgio petrificus.</p>
                        </div>
                    </div>
                    <div class="our-services-card">
                        <div class="our-services-card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="73" height="71.894" viewBox="0 0 73 71.894">
                                <g id="Group_228" data-name="Group 228" transform="translate(17770 8254.685)">
                                    <g id="Ellipse_3" data-name="Ellipse 3" transform="translate(-17770 -8254.685)" fill="none" stroke="#578365" stroke-width="3">
                                    <circle cx="14.932" cy="14.932" r="14.932" stroke="none"/>
                                    <circle cx="14.932" cy="14.932" r="13.432" fill="none"/>
                                    </g>
                                    <g id="Ellipse_6" data-name="Ellipse 6" transform="translate(-17770 -8213.761)" fill="none" stroke="#578365" stroke-width="3">
                                    <ellipse cx="14.932" cy="15.485" rx="14.932" ry="15.485" stroke="none"/>
                                    <ellipse cx="14.932" cy="15.485" rx="13.432" ry="13.985" fill="none"/>
                                    </g>
                                    <g id="Ellipse_4" data-name="Ellipse 4" transform="translate(-17726.863 -8254.685)" fill="none" stroke="#578365" stroke-width="3">
                                    <circle cx="14.932" cy="14.932" r="14.932" stroke="none"/>
                                    <circle cx="14.932" cy="14.932" r="13.432" fill="none"/>
                                    </g>
                                    <g id="Ellipse_5" data-name="Ellipse 5" transform="translate(-17726.863 -8213.761)" fill="none" stroke="#578365" stroke-width="3">
                                    <ellipse cx="14.932" cy="15.485" rx="14.932" ry="15.485" stroke="none"/>
                                    <ellipse cx="14.932" cy="15.485" rx="13.432" ry="13.985" fill="none"/>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="our-services-card-txt">
                            <div class="our-services-card-title"><h4>Service 3</h4></div>
                            <p>Brief descriptive text. Avis aparecium petrificus mobilicorpus expecto petrificus engorgio petrificus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Who We Serve  -->
        <div class="who-we-serve-container">

            <div class="background"></div>
            <div class="who-we-serve-wrapper"> 
                <div class="who-we-serve-txt-box">
                    <div class="who-we-serve-sub-title"><p>WHO WE SERVE</p></div>
                    <div class="who-we-serve-headline"><h3>Headline about Your Clients</h3></div>
                </div>
                <div class="who-we-serve-grid">
                    <div class="who-we-serve-card">
                        <div class="who-we-serve-img-card">
                            <img src="/assets/img/clients-photo-2.jpg" alt="img">
                        </div>
                        <div class="card-info-wrapper">
                            <div class="card-info-display">
                                <div class="card-info-title">Retirees</div>
                                <div class="card-info-txt">
                                    <p>Mortis mortis engorgio incendio momentum.</p>
                                </div>
                                <div class="card-info-btn">
                                    <a href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="who-we-serve-card">
                        <div class="who-we-serve-img-card">
                            <img src="/assets/img/clients-photo-3.jpg" alt="img">
                        </div>
                        <div class="card-info-wrapper">
                            <div class="card-info-display">
                                <div class="card-info-title">Business Owners</div>
                                <div class="card-info-txt">
                                    <p>Mortis mortis engorgio incendio momentum.</p>
                                </div>
                                <div class="card-info-btn">
                                    <a href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="who-we-serve-card">
                        <div class="who-we-serve-img-card">
                            <img src="/assets/img/clients-photo-2.jpg" alt="img">
                        </div>
                        <div class="card-info-wrapper">
                            <div class="card-info-display">
                                <div class="card-info-title">Entrepreneurs</div>
                                <div class="card-info-txt">
                                    <p>Mortis mortis engorgio incendio momentum.</p>
                                </div>
                                <div class="card-info-btn">
                                    <a href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="who-we-serve-card">
                        <div class="who-we-serve-img-card">
                            <img src="/assets/img/clients-photo-3.jpg" alt="img">
                        </div>
                        <div class="card-info-wrapper">
                            <div class="card-info-display">
                                <div class="card-info-title">Professionals</div>
                                <div class="card-info-txt">
                                    <p>Mortis mortis engorgio incendio momentum.</p>
                                </div>
                                <div class="card-info-btn">
                                    <a href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('_modules.testimonials')

        <!-- Skinny CTA with Button -->
        <div class="skinny-cta-container">
            <div class="cta-wrapper">
                <div class="text-wrapper">
                    <div class="cta-sub-title">
                        <p>SHORT DESCRIPTION ABOUT WHERE THIS IS HEADED</p>
                    </div>
                    <div class="cta-title">
                        <h3>Short Text About Contact Info</h3>
                    </div>
                </div>
                <div class="btn-wrapper">
                    <a href="#">Contact Us</a>
                </div>
            </div>
        </div>

        @include('_modules.our-strategy')

        <!-- About Us -->
        <div class="about-us-container" id="who-we-are">
            <div class="about-us-wrapper">
                <div class="about-us-img-wrapper">
                    <img src="/assets/img/pexels-photo-3786605.jpeg" alt="image of wood cabin in snowy woods back drop">
                </div>
                <div class="about-us-txt-wrapper">
                    <div class="about-us-sub-title"><p>ABOUT US</p></div>
                    <div class="about-us-header"><h3>Compelling Headline about Your “Why”</h3></div>
                    <p>Briefly describe who you serve, what you do, and a differentiator. Mortis mortis engorgio incendio momentum.</p>
                    <div class="about-us-btn"><a href="#">See Your Team</a>
                </div>
            </div>
        </div>

        <!-- Blog Section -->
        <div class="blog-section" id="blog">
            <div class="blog-background"></div>
            <div class="blog-wrapper">
                <div class="blog-text-wrapper">
                    <div class="blog-sub-title"><p>BLOG FEATURE MODULE</p></div>
                    <div class="blog-title"><h3>Financial News</h3></div>
                </div>
                <div class="blog-card-container">
                    <div class="blog-card">
                        <div class="blog-img"><img src="/assets/img/blog-img-one.jpeg" alt="aerial shot of trees and river running through the middle"></div>
                        <div class="blog-text">
                            <div class="blog-text-title">
                                <p>Blog title tergeo mobilie ennervate expecto…</p>
                                </div>
                            <div class="blog-text-sub-title">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.236" height="14.236" viewBox="0 0 14.236 14.236">
                                    <g id="Icon_feather-clock" data-name="Icon feather-clock" transform="translate(-2 -2)">
                                        <path id="Path_16" data-name="Path 16" d="M15.236,9.118A6.118,6.118,0,1,1,9.118,3a6.118,6.118,0,0,1,6.118,6.118Z" fill="none" stroke="#578365" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                        <path id="Path_17" data-name="Path 17" d="M18,9v3.671l2.447,1.224" transform="translate(-8.882 -3.553)" fill="none" stroke="#578365" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    </g>
                                    </svg>
                                    <p>10 MINUTES</p>
                            </div>
                            <div class="blog-text-p">
                                <p>3 lines of text. Avis aparecium petr ificus mobilicorpus expecto petrificus engorgio petrificus…</p>
                            </div>
                        </div>
                        <div class="blog-card-btm">
                            <p>Read More</p>
                        </div>
                    </div>
                    <div class="blog-card">
                        <div class="blog-img"><img src="/assets/img/blog-img-two.jpeg" alt="aerial shot of trees and river running through the middle"></div>
                        <div class="blog-text">
                            <div class="blog-text-title">
                                <p>Blog title tergeo mobilie ennervate expecto…</p>
                                </div>
                            <div class="blog-text-sub-title">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.236" height="14.236" viewBox="0 0 14.236 14.236">
                                    <g id="Icon_feather-clock" data-name="Icon feather-clock" transform="translate(-2 -2)">
                                        <path id="Path_16" data-name="Path 16" d="M15.236,9.118A6.118,6.118,0,1,1,9.118,3a6.118,6.118,0,0,1,6.118,6.118Z" fill="none" stroke="#578365" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                        <path id="Path_17" data-name="Path 17" d="M18,9v3.671l2.447,1.224" transform="translate(-8.882 -3.553)" fill="none" stroke="#578365" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    </g>
                                    </svg>
                                    <p>10 MINUTES</p>
                            </div>
                            <div class="blog-text-p">
                                <p>3 lines of text. Avis aparecium petr ificus mobilicorpus expecto petrificus engorgio petrificus…</p>
                            </div>
                        </div>
                        <div class="blog-card-btm">
                            <p>Read More</p>
                        </div>
                    </div>
                    <div class="blog-card">
                        <div class="blog-img"><img src="/assets/img/blog-img-three.jpeg" alt="aerial shot of trees and river running through the middle"></div>
                        <div class="blog-text">
                            <div class="blog-text-title">
                                <p>Blog title tergeo mobilie ennervate expecto…</p>
                                </div>
                            <div class="blog-text-sub-title">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.236" height="14.236" viewBox="0 0 14.236 14.236">
                                    <g id="Icon_feather-clock" data-name="Icon feather-clock" transform="translate(-2 -2)">
                                        <path id="Path_16" data-name="Path 16" d="M15.236,9.118A6.118,6.118,0,1,1,9.118,3a6.118,6.118,0,0,1,6.118,6.118Z" fill="none" stroke="#578365" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                        <path id="Path_17" data-name="Path 17" d="M18,9v3.671l2.447,1.224" transform="translate(-8.882 -3.553)" fill="none" stroke="#578365" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    </g>
                                    </svg>
                                    <p>10 MINUTES</p>
                            </div>
                            <div class="blog-text-p">
                                <p>3 lines of text. Avis aparecium petr ificus mobilicorpus expecto petrificus engorgio petrificus…</p>
                            </div>
                        </div>
                        <div class="blog-card-btm">
                            <p>Read More</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FORM -->
        <div class="form-section" id="contact-us">
            <div class="form-wrapper"> <!-- keep wrapper and make form container on next line-->
                <div class="form-container">
                    <div class="form-col-one">
                        <form action="#" class="form">
                            <div class="form-sub-title"><p>NEED HELP OR ASSISTANCE?</p></div>
                            <div class="form-title"><h2>Contact Us</h2></div>
                            <div class="form-name-section">
                                <div class="input-group first-name-input-group">
                                    <div class="form-name-container">
                                        <label for="first-name" class="label">First Name</label>
                                        <input id="username" type="text" class="input">
                                        <span class="error-message"></span>
                                        <svg class="icon icon-success hidden hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                
                                        <svg class="icon icon-error hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="input-group name-input-group">
                                    <div class="form-name-container">
                                        <label for="last-name" class="label">Last Name</label>
                                        <input id="username" type="text" class="input">
                                        <span class="error-message"></span>
                                        <svg class="icon icon-success hidden hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <svg class="icon icon-error hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="input-group email-input-group">
                                <label for="email" class="email">Email</label>
                                <input id="email" type="email" class="input email-input" autocomplete placeholder="andy@web-crunch.com" required>
                                <span class="error-message"></span>
                                <svg class="icon icon-success hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                        
                                <svg class="icon icon-error hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <button type="submit" class="form-btn" value="Submit">Submit</button>
                        </form>
                    </div>
                    <div class="form-col-two">
                        <img src="/assets/img/form-side-img.jpeg" alt="close up of a brown tree trunk">
                    </div>
                </div>
            </div>
        </div>

        @include('_modules.faq-mockup')

        <!-- Footer -->
        <footer>
            <div class="footer-wrapper">
                <div class="footer-container">
                    <div class="footer-col-1">
                        <div class="footer-logo">
                            <a href="/">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 178.081 27.969">
                                    <g data-name="Group 145" transform="translate(-56.542 -79.077)">
                                        <path fill="#e4f3ed" d="M59.1 81.891c0-.795-.433-.83-.974-.83h-1.584v-1.984h5.667v10.069a12.745 12.745 0 0 1 6.965-2.454c3.9 0 7.363 2.67 7.363 9.781 0 7.759-4.259 10.573-9.529 10.573A38.47 38.47 0 0 1 59.1 106Zm9.239 7.255a11.29 11.29 0 0 0-6.135 2.382v12.416a16.794 16.794 0 0 0 4.4.758c5.268 0 6.711-3.357 6.711-8.121.009-5.234-2.083-7.435-4.971-7.435Z" data-name="Path 1"/>
                                        <path fill="#e4f3ed" d="M91.908 95.461v-2.563c0-2.093-1.336-3.969-4.331-3.969-1.408 0-4.259.107-5.052 3.175h-1.589v-4.262a25.367 25.367 0 0 1 6.713-1.155c3.934 0 7.362 1.552 7.362 6.82v9.636a1.332 1.332 0 0 0 1.48 1.48h1.048v1.919a7.979 7.979 0 0 1-2.13.288c-1.515 0-3-.36-3.284-2.2a11.311 11.311 0 0 1-6.532 2.238c-2.923 0-5.883-1.805-5.883-5.6 0-3.212 2.491-5.81 7.652-5.81Zm0 2.166h-4.222c-2.563 0-4.764.758-4.764 3.537 0 2.417 1.659 3.248 3.644 3.248a9.639 9.639 0 0 0 5.342-1.914Z" data-name="Path 2"/>
                                        <path fill="#e4f3ed" d="M114.136 101.778h1.7v3.9a14.213 14.213 0 0 1-6.176 1.364c-4.511 0-9.671-2.129-9.671-10.176 0-8.012 5.161-10.177 9.671-10.177a14.973 14.973 0 0 1 6.172 1.371v3.862h-1.8a4.588 4.588 0 0 0-4.476-2.888c-4.115 0-6.316 2.923-6.316 7.833 0 4.546 2.057 7.831 6.423 7.831a4.653 4.653 0 0 0 4.473-2.92Z" data-name="Path 3"/>
                                        <path fill="#e4f3ed" d="m131.204 89.181-2.96-.542V87.2h8.049v1.985h-2.166l-5.2 7.038 2.744 4.223c2.057 3.139 4.041 4.115 6.1 4.115v2.057a6.208 6.208 0 0 1-1.768.289c-2.814 0-5.2-2.057-6.892-4.727l-3.428-5.342h-1.373v7.8h2.563v1.984h-8.193v-1.984h1.553c.541 0 .975-.037.975-.867V81.928c0-.831-.434-.867-.975-.867h-1.588v-1.984h5.665V95.1h2.563Z" data-name="Path 4"/>
                                        <path fill="#e4f3ed" d="M146.358 107.042a19.4 19.4 0 0 1-6.46-1.19v-4.15h1.624a4.866 4.866 0 0 0 4.729 3.176c2.345 0 4.294-.795 4.294-3.538 0-2.705-2.851-3.428-5.342-4.114-2.563-.722-5.124-1.768-5.124-5.125 0-4.223 3.5-5.412 7.543-5.412a25.568 25.568 0 0 1 5.558.721v4.115h-1.444a4.833 4.833 0 0 0-4.583-2.67c-2.31 0-3.9 1.118-3.9 2.923 0 1.984 2.092 2.561 4.764 3.355 2.561.758 5.774 1.66 5.774 5.594.003 4.515-3.462 6.315-7.433 6.315Z" data-name="Path 5"/>
                                        <path fill="#e4f3ed" d="M177.354 104.701a4.8 4.8 0 0 0 .9-.037v2.058a9.956 9.956 0 0 1-1.805.18c-1.984 0-3.825-.758-3.825-3.644v-13.21c0-.829-.433-.866-.974-.866h-1.589v-1.986h5.667v15.267c.002 1.443.362 2.238 1.626 2.238Z" data-name="Path 6"/>
                                        <path fill="#e4f3ed" d="M208.894 101.778h1.7v3.9a14.213 14.213 0 0 1-6.175 1.364c-4.511 0-9.671-2.129-9.671-10.176 0-8.012 5.161-10.177 9.671-10.177a14.973 14.973 0 0 1 6.172 1.371v3.862h-1.8a4.588 4.588 0 0 0-4.476-2.888c-4.115 0-6.316 2.923-6.316 7.833 0 4.546 2.057 7.831 6.423 7.831a4.652 4.652 0 0 0 4.472-2.92Z" data-name="Path 7"/>
                                        <path fill="#e4f3ed" d="M215.966 81.928c0-.831-.434-.867-.975-.867h-1.588v-1.984h5.67V89.4a14.628 14.628 0 0 1 7.436-2.635c2.959 0 5.558 1.552 5.558 5.666v11.332c0 .83.433.867.974.867h1.587v1.984h-8.191v-1.984h2.526V93.3c0-2.742-1.336-3.717-3.9-3.717a12.638 12.638 0 0 0-5.993 1.949v13.1h2.563v1.984h-8.193v-1.984h1.552c.541 0 .975-.037.975-.867Z" data-name="Path 8"/>
                                        <path fill="#e4f3ed" d="M161.982 83.494h-1.967c-.513 2.135-1.433 3.763-3.483 4.425v1.625h2.382v12.378c0 3.825 2.346 5.124 5.089 5.124a14.359 14.359 0 0 0 4.113-.613v-2.454a11.689 11.689 0 0 1-3.139.541c-1.768 0-3-.795-3-2.959V89.544h6.46v-2.348h-6.46Z" data-name="Path 9"/>
                                        <path fill="#e4f3ed" d="M192.402 89.544v-2.348h-6.46v-3.7h-1.967c-.513 2.135-1.433 3.763-3.483 4.425v1.623h2.382v12.378c0 3.825 2.346 5.124 5.089 5.124a14.36 14.36 0 0 0 4.114-.613v-2.454a11.69 11.69 0 0 1-3.139.541c-1.768 0-3-.795-3-2.959V89.544Z" data-name="Path 10"/>
                                        <rect width="4.951" height="1.908" fill="#e4f3ed" data-name="Rectangle 18" rx=".954" transform="translate(170.848 79.08)"/>
                                        <rect width="4.951" height="1.908" fill="#2b8b6f" data-name="Rectangle 19" rx=".954" transform="translate(179.343 79.098)"/>
                                        <rect width="4.951" height="1.908" fill="#2b8b6f" data-name="Rectangle 20" rx=".954" transform="translate(188.116 79.098)"/>
                                        <rect width="4.951" height="1.908" fill="#2b8b6f" data-name="Rectangle 21" rx=".954" transform="translate(196.89 79.098)"/>
                                        <rect width="4.951" height="1.908" fill="#2b8b6f" data-name="Rectangle 22" rx=".954" transform="translate(205.664 79.098)"/>
                                        <rect width="4.951" height="1.908" fill="#2b8b6f" data-name="Rectangle 23" rx=".954" transform="translate(161.795 79.098)"/>
                                        <rect width="4.951" height="1.908" fill="#2b8b6f" data-name="Rectangle 24" rx=".954" transform="translate(153.021 79.098)"/>
                                        <rect width="4.951" height="1.908" fill="#2b8b6f" data-name="Rectangle 25" rx=".954" transform="translate(144.247 79.098)"/>
                                        <rect width="4.951" height="1.908" fill="#2b8b6f" data-name="Rectangle 26" rx=".954" transform="translate(135.473 79.098)"/>
                                        <rect width="4.951" height="1.908" fill="#2b8b6f" data-name="Rectangle 27" rx=".954" transform="translate(126.699 79.098)"/>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <address>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="icon icon-tabler icon-tabler-map-pin" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" stroke="none"/><circle cx="12" cy="11" r="3"/><path d="M17.657 16.657 13.414 20.9a2 2 0 0 1-2.827 0l-4.244-4.243a8 8 0 1 1 11.314 0z"/></svg>
                            <p>
                                <span>905 Ave. K</span>
                                <span>Amarillo, Tx 79121</span>
                            </p>
                        </address>
                        <div class="footer-social">
                            <p>Follow Us</p>
                            <a href="#">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 167.657 167.657" style="enable-background:new 0 0 167.657 167.657;" xml:space="preserve">
                                    <g>
                                    <path style="fill:#fff;" d="M83.829,0.349C37.532,0.349,0,37.881,0,84.178c0,41.523,30.222,75.911,69.848,82.57v-65.081H49.626
                                    v-23.42h20.222V60.978c0-20.037,12.238-30.956,30.115-30.956c8.562,0,15.92,0.638,18.056,0.919v20.944l-12.399,0.006
                                    c-9.72,0-11.594,4.618-11.594,11.397v14.947h23.193l-3.025,23.42H94.026v65.653c41.476-5.048,73.631-40.312,73.631-83.154
                                    C167.657,37.881,130.125,0.349,83.829,0.349z"/>
                                    </g>
                                </svg>
                            </a>
                            <a href="#">
                                <svg height="681pt" viewBox="-21 -81 681.33464 681" width="681pt" xmlns="http://www.w3.org/2000/svg"><path d="m200.964844 515.292969c241.050781 0 372.871094-199.703125 372.871094-372.871094 0-5.671875-.117188-11.320313-.371094-16.9375 25.585937-18.5 47.824218-41.585937 65.371094-67.863281-23.480469 10.441406-48.753907 17.460937-75.257813 20.636718 27.054687-16.230468 47.828125-41.894531 57.625-72.488281-25.320313 15.011719-53.363281 25.917969-83.214844 31.808594-23.914062-25.472656-57.964843-41.402344-95.664062-41.402344-72.367188 0-131.058594 58.6875-131.058594 131.03125 0 10.289063 1.152344 20.289063 3.398437 29.882813-108.917968-5.480469-205.503906-57.625-270.132812-136.921875-11.25 19.363281-17.742188 41.863281-17.742188 65.871093 0 45.460938 23.136719 85.605469 58.316407 109.082032-21.5-.660156-41.695313-6.5625-59.351563-16.386719-.019531.550781-.019531 1.085937-.019531 1.671875 0 63.46875 45.171875 116.460938 105.144531 128.46875-11.015625 2.996094-22.605468 4.609375-34.558594 4.609375-8.429687 0-16.648437-.828125-24.632812-2.363281 16.683594 52.070312 65.066406 89.960937 122.425781 91.023437-44.855469 35.15625-101.359375 56.097657-162.769531 56.097657-10.5625 0-21.003906-.605469-31.2617188-1.816407 57.9999998 37.175781 126.8710938 58.871094 200.8867188 58.871094"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="footer-col-2">
                        <p>Subscribe to Our Newsletter</p>
                        <div class="footer-form">
                            <div class="footer-email-input-group">
                                <label for="email" class="email"></label>
                                <input id="email" type="email" class="input email-input" autocomplete placeholder="Enter Email Address" required>
                                <span class="error-message"></span>
                                <svg class="icon icon-success hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <svg class="icon icon-error hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                                </div>
                                <button type="submit" class="footer-btn" value="Submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')

        <!-- leave snippet below to enable prefetching -->
        <!-- basically don't remove it unless you know it is breaking something :) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/quicklink/2.0.0/quicklink.umd.js"></script>
        <script>
            window.addEventListener('load', () => {
                quicklink.listen();
            });
        </script>
    </body>
</html>
