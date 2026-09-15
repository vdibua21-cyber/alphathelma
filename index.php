<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpha-Thelma | The French Fluently Academy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="shortcut icon" href="dist/images/logo_alpha.png" type="image/x-icon">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nova+Script&display=swap');
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #FDFDFD;
        }

        /* Navbar links hover effect */
        .navbar-nav .nav-link {
            position: relative;
            transition: color 0.25s ease-in-out;
        }

        /* Tints the text color slightly to red on hover */
        .navbar-nav .nav-link:hover {
            color: #A61C24 !important; 
        }

        /* Optional: Adds a subtle animated underline beneath the link text */
        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 1rem; /* Aligns with the px-3 padding */
            background-color: #A61C24;
            transition: width 0.25s ease-in-out;
        }

        .navbar-nav .nav-link:hover::after {
            width: calc(100% - 2rem); /* Expands beautifully across the text width */
        }

        /* Button Hover Tweak (Slight lift and deep glow) */
        .btn-brand-primary {
            background-color: #A61C24;
            color: #ffffff;
            border-radius: 4px;
            font-weight: 700;
            transition: all 0.25s ease-in-out;
        }

        .btn-brand-primary:hover {
            background-color: #8A1319 !important;
            color: #ffffff !important;
            transform: translateY(-2px); /* Lifts the button slightly */
            box-shadow: 0 4px 12px rgba(166, 28, 36, 0.25); /* Adds a premium soft glow */
        }
        
        .hero-title {
            font-weight: 900;
            letter-spacing: -1.5px;
            line-height: 1.1;
            color: #111111;
        }

        /* Custom Carousel Indicator Dots Customization */
        .hero-carousel .carousel-indicators [data-bs-target] {
            background-color: #A61C24;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin: 0 6px;
            opacity: 0.3;
            transition: all 0.3s ease;
        }

        .hero-carousel .carousel-indicators .active {
            opacity: 1;
            transform: scale(1.2);
            width: 28px;
            border-radius: 6px;
        }

        /* Custom Carousel Control Chevron Positions */
        .hero-carousel .carousel-control-prev,
        .hero-carousel .carousel-control-next {
            width: 5%;
            opacity: 0.2;
            transition: opacity 0.2s ease;
        }
        .hero-carousel:hover .carousel-control-prev,
        .hero-carousel:hover .carousel-control-next {
            opacity: 0.8;
        }
        .carousel-control-prev-icon, .carousel-control-next-icon {
            filter: invert(1) sepia(1) saturate(5) hue-rotate(335deg); /* Matches #A61C24 */
        }

        .letter-box {
            background-color: #ffffff;
            border: 1px solid #ECECEC;
            box-shadow: 0 4px 20px rgba(0,0,0,0.02);
        }

        .letter-title {
            font-size: 1.85rem;
            line-height: 1.3;
            font-weight: 800;
            color: #111111;
        }

        .letter-body p {
            font-family: "Georgia", Times, serif;
            font-size: 1.08rem;
            line-height: 1.75;
            color: #333333;
            margin-bottom: 1.5rem;
        }

        .accent-bg-card {
            background-color: #F1E4E2;
            top: 15px;
            left: 15px;
            right: -15px;
            bottom: -15px;
            z-index: 1;
        }

        .offer-container {
            background-color: #0A1629;
            border: 2px solid #E2A83B;
        }

        .trust-badge-icon {
            height: 70px;
            background-color: #E2E8F0;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 4px;
            color: #718096;
            font-size: 1.75rem;
        }

        /* ================================================= */
        /* UNIQUE POPUP DESIGN STYLES                       */
        /* ================================================= */
        .modal-backdrop.show {
            opacity: 0.8;
            background-color: #0a0e14;
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        
        .custom-popup-content {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            background: #11141a;
        }

        .popup-img-side {
            background-image: url('dist/images/popup.jpeg');
            background-size: cover;
            background-position: center;
            min-height: 100%;
        }

        .popup-btn-action {
            background-color: #A61C24;
            color: #ffffff;
            font-weight: 700;
            letter-spacing: 0.5px;
            padding: 14px;
            border-radius: 6px;
            transition: all 0.25s ease-in-out;
        }

        .popup-btn-action:hover {
            background-color: #bd242d;
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(166, 28, 36, 0.4);
        }

        .popup-close-x {
            background: rgba(255, 255, 255, 0.08);
            color: #ffffff;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.2s;
        }

        .popup-close-x:hover {
            background: rgba(255, 255, 255, 0.2);
            color: #ffffff;
        }
    </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 border-bottom border-light sticky-top">
        <div class="container">
 <a class="navbar-brand d-flex flex-column" href="#">
    <img src="dist/images/logo_alpha.png" alt="Alpha Thelma Logo" style="height: 100%; width: 50%; mb-1;">
    <span class="m-0 text-uppercase tracking-wider fw-bold" style="font-size: 0.75rem; color: #333; letter-spacing: 0.8px;">Alpha Thelma</span>
    <span class="m-0 text-uppercase opacity-75" style="font-size: 0.55rem; color: #A61C24; letter-spacing: 0.5px;">French Fluently Academy</span>
</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center gap-2 mt-3 mt-lg-0">
                    <li class="nav-item"><a class="nav-link fw-semibold text-dark px-3" href="#secret">The Secret</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold text-dark px-3" href="#program">The Program</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold text-dark px-3" href="#guarantee">Guarantee</a></li>
                    <li class="nav-item ms-lg-2">
                        <a class="btn btn-brand-primary px-4 py-2" href="#secure">Secure Seat</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="heroSlider" class="carousel slide hero-carousel py-5 bg-white" data-bs-ride="carousel" data-bs-interval="6000">
        
        <!-- Bottom dot indicators -->
        <div class="carousel-indicators mb-0" style="bottom: -10px;">
            <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner text-center py-2">
            
            <!-- Slide 1: Original TEF/TCF Hook -->
            <div class="carousel-item active">
                <div class="container py-3">
                    <div class="d-inline-block px-3 py-1 rounded-pill mb-4" style="background-color: #FBEBEB; border: 1px solid #F3C6C8;">
                        <span class="text-danger fw-bold tracking-wider" style="font-size: 0.75rem; letter-spacing: 1px;">LIMITED SEATS: LAGOS & ABUJA</span>
                    </div>

                    <h1 class="display-4 hero-title mb-4">
                        CRACK THE TEF/TCF <span style="color: #A61C24;">CODE</span> <br> IN 90 DAYS.
                    </h1>

                    <p class="lead text-secondary mx-auto mb-5 px-3" style="max-width: 680px; font-size: 1.1rem; color: #4A5568 !important;">
                        The Weekend Canadian Accelerator for Ambitious Nigerian Professionals (35+) who cannot afford to fail again.
                    </p>

                    <div class="mb-4">
                        <a href="#secure" class="btn btn-brand-primary btn-lg px-5 py-3 shadow-sm text-uppercase" style="font-size: 1.15rem; letter-spacing: 0.5px;">
                            Secure My Seat Now <i class="fas fa-chevron-right ms-2" style="font-size: 1rem;"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Strategic 62 Bonus Points Value Offer -->
            <div class="carousel-item">
                <div class="container py-3">
                    <div class="d-inline-block px-3 py-1 rounded-pill mb-4" style="background-color: #FFF9E6; border: 1px solid #FFEBA3;">
                        <span class="fw-bold tracking-wider" style="font-size: 0.75rem; letter-spacing: 1px; color: #B38600;">EXPRESS ENTRY BYPASS</span>
                    </div>

                    <h1 class="display-4 hero-title mb-4">
                        CLAIM YOUR <span style="color: #A61C24;">62 BONUS POINTS</span> <br> REGARDLESS OF YOUR AGE.
                    </h1>

                    <p class="lead text-secondary mx-auto mb-5 px-3" style="max-width: 710px; font-size: 1.1rem; color: #4A5568 !important;">
                        Stop letting age point deductions stall your immigration profile. Unlock the proven, high-authority blueprint built strictly for corporate executives.
                    </p>

                    <div class="mb-4">
                        <a href="#secure" class="btn btn-brand-primary btn-lg px-5 py-3 shadow-sm text-uppercase" style="font-size: 1.15rem; letter-spacing: 0.5px;">
                            Bypass The Age Penalty <i class="fas fa-shield-halved ms-2" style="font-size: 1rem;"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Iron-Clad Success Guarantee Callout -->
            <div class="carousel-item">
                <div class="container py-3">
                    <div class="d-inline-block px-3 py-1 rounded-pill mb-4" style="background-color: #EBFBEE; border: 1px solid #C6F3CC;">
                        <span class="text-success fw-bold tracking-wider" style="font-size: 0.75rem; letter-spacing: 1px;">100% RISK-FREE TUITION</span>
                    </div>

                    <h1 class="display-4 hero-title mb-4">
                        GET YOUR DESIRED <span style="color: #A61C24;">CLB SCORE</span> <br> OR A COMPLETE REFUND.
                    </h1>

                    <p class="lead text-secondary mx-auto mb-5 px-3" style="max-width: 680px; font-size: 1.1rem; color: #4A5568 !important;">
                        Our "Godfather Offer" means we shoulder all the risk. Master the structural templates that turn complex French modules into predictable patterns.
                    </p>

                    <div class="mb-4">
                        <a href="#secure" class="btn btn-brand-primary btn-lg px-5 py-3 shadow-sm text-uppercase" style="font-size: 1.15rem; letter-spacing: 0.5px;">
                            Read Our Guarantee <i class="fas fa-arrow-down ms-2" style="font-size: 1rem;"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Left & Right Arrow Navigation -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

        <!-- Static trust element underneath the sliding text content -->
        <div class="container text-center">
            <div class="d-flex align-items-center justify-content-center text-uppercase tracking-wider mt-4 gap-2" style="font-size: 0.75rem; font-weight: 700; letter-spacing: 1px; color: #4A5568;">
                <span class="fa-stack" style="font-size: 0.75rem; width: 2em; height: 2em; line-height: 2em;">
                    <i class="fa-solid fa-certificate fa-stack-2x" style="color: #939FA8;"></i>
                    <i class="fa-solid fa-check fa-stack-1x text-white"></i>
                </span> 
                99% Success-Based Guarantee
            </div>
        </div>
    </div>

    <section class="letter-section py-5 bg-light border-top border-bottom border-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    
                    <div class="letter-box p-4 p-sm-5 my-3 rounded-1">
                        <h2 class="text-center letter-title mb-5">
                            An open letter to ambitious Nigerians (35 and above) who want to relocate their family to Canada in 2026.
                        </h2>

                        <div class="letter-body">
                            <p class="fw-bold" style="color: #111111;">Dear Friend,</p>
                            <p>Let’s not mince words. You are tired.</p>
                            <p>You’ve watched the Express Entry points climb higher and higher, like an unreachable mountain. Every birthday feels like a penalty. In the world of Canadian immigration, turning 35 is treated like a crime. You lose 5 points, then 10, then 15...</p>
                            <p>You’ve tried the IELTS four times, but a 0.5 deficit in Speaking keeps you trapped in Nigeria while your younger colleagues are already posting photos from Ontario and Calgary.</p>
                            <p>You feel stuck. You have the skills. You have the funds. You have the ambition. But the "System" is rigged against your age.</p>
                            <p>But what if there was a "backdoor"? A legal, high-authority strategic move that grants you <span class="fw-bold border-bottom border-danger border-2" style="color: #A61C24; padding-bottom: 2px;">62 extra points</span> regardless of your age?</p>
                            <p class="mb-5">This is not about learning to order a croissant in Paris. This is about <strong>The Exam Code.</strong></p>
                        </div>

                        <hr class="text-muted my-4 opacity-25">

                        <div class="d-flex align-items-center gap-3 pt-2">
                            <img src="dist/images/popup.jpeg" 
                                 alt="Aderonke Olu-Abikoye" 
                                 style="width: 55px; height: 55px;">
                            <div>
                                <h5 class="m-0 fw-bold text-dark" style="font-size: 1rem;">Aderonke Olu-Abikoye</h5>
                                <p class="m-0 text-muted small">Coordinator, The French Fluently Academy</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="secret" class="py-5 bg-white">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                
                <div class="col-12 col-lg-6">
                    <h2 class="display-6 fw-bold text-dark mb-4" style="letter-spacing: -1px; line-height: 1.2;">
                        The Age Trap vs.<br>The 62-Point Secret
                    </h2>
                    
                    <p class="text-secondary mb-5" style="font-size: 1.05rem; line-height: 1.6;">
                        While others are begging for 3 points in IELTS, the smart Nigerian professional is leveraging the <strong class="text-dark">TEF/TCF Canada.</strong>
                    </p>

                    <div class="d-flex flex-column gap-4">
                        <div class="d-flex align-items-start gap-3">
                            <i class="far fa-times-circle text-danger fs-5 mt-1"></i>
                            <p class="text-secondary m-0"><strong class="text-dark">Express Entry Age Penalty:</strong> You lose 100+ points by being over 35 compared to a 25-year-old.</p>
                        </div>

                        <div class="d-flex align-items-start gap-3">
                            <i class="far fa-check-circle text-success fs-5 mt-1"></i>
                            <p class="text-secondary m-0"><strong class="text-dark">The French Advantage:</strong> Achieving CLB 7 in French grants you 50 bonus points + 12 points for the language itself.</p>
                        </div>

                        <div class="d-flex align-items-start gap-3">
                            <i class="far fa-check-circle text-success fs-5 mt-1"></i>
                            <p class="text-secondary m-0"><strong class="text-dark">Total Gain:</strong> 62 points. It's the ultimate equalizer that cancels out the "Age Penalty" instantly.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 position-relative mt-4 mt-lg-0">
                    <div class="position-absolute rounded-3 accent-bg-card d-none d-lg-flex"></div>
                    <img src="dist/images/secrit.png" 
                         alt="Ambitious professionals studying" 
                         class="img-fluid rounded-3 position-relative shadow-sm object-fit-cover w-100" 
                         style="z-index: 2; height: 380px;">
                </div>

            </div>
        </div>
    </section>

    <section id="program" class="py-5 bg-light border-top border-bottom border-light">
        <div class="container py-4">
            
            <div class="text-center mb-5">
                <h2 class="display-6 fw-bold text-dark mb-3" style="letter-spacing: -1px;">
                    The "Accelerator" Method
                </h2>
                <p class="text-secondary fst-italic" style="font-family: 'Georgia', serif; font-size: 1.05rem;">
                    We don't teach French. We teach you how to <span class="border-bottom border-secondary pb-1">beat the test.</span>
                </p>
            </div>

            <div class="row g-4 mt-2 justify-content-center">
                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 border-0 p-4 p-sm-5 shadow-sm rounded-3 bg-white">
                        <div class="mb-4"><i class="fa-solid fa-brain" style="color: #A61C24; font-size: 2.2rem;"></i></div>
                        <h4 class="fw-bold text-dark mb-3">Adult Brain Formula</h4>
                        <p class="text-secondary m-0 small lh-lg">
                            You aren't a kid. You can't learn by "immersion." Our method uses cognitive logic and Nigerian phonetic anchors to make French sounds "click" in 14 days.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 border-0 p-4 p-sm-5 shadow-sm rounded-3 bg-white">
                        <div class="mb-4"><i class="fa-solid fa-qrcode" style="color: #A61C24; font-size: 2.2rem;"></i></div>
                        <h4 class="fw-bold text-dark mb-3">The Exam Code</h4>
                        <p class="text-secondary m-0 small lh-lg">
                            TEF is 70% patterns and 30% language. We provide the "Answer Templates" that examiners look for, even if your grammar isn't perfect.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 border-0 p-4 p-sm-5 shadow-sm rounded-3 bg-white">
                        <div class="mb-4"><i class="fa-regular fa-clock" style="color: #A61C24; font-size: 2.2rem;"></i></div>
                        <h4 class="fw-bold text-dark mb-3">No Conversational Fluff</h4>
                        <p class="text-secondary m-0 small lh-lg">
                            We skip the poems, the songs, and the "small talk." We focus 100% on the Reading, Writing, Listening, and Speaking modules of the TCF/TEF.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="guarantee" class="py-5 bg-white">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    
                    <div class="offer-container rounded-3 overflow-hidden shadow-lg">
                        <div class="text-center py-2 px-3 text-uppercase fw-bold text-dark" style="background-color: #E2A83B; font-size: 0.75rem; letter-spacing: 1px;">
                            The Exclusive Weekend Accelerator Bundle
                        </div>

                        <div class="p-4 p-sm-5 text-white">
                            <h2 class="text-center text-uppercase fw-black mb-5 tracking-wide pt-2" style="font-weight: 900; font-size: 2rem; letter-spacing: 0.5px;">
                                The Godfather Offer
                            </h2>

                            <div class="row g-4 px-md-2 mb-5">
                                <div class="col-12 col-md-6">
                                    <div class="d-flex align-items-start gap-3">
                                        <i class="fa-regular fa-circle-check mt-1" style="color: #E2A83B; font-size: 1.1rem;"></i>
                                        <div>
                                            <h6 class="fw-bold mb-1 text-white">12 Weeks Immersive Coaching</h6>
                                            <p class="text-light opacity-75 m-0 small lh-base">Every Saturday & Sunday, 6 hours of high-intensity coaching designed for busy MDs and Executives.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="d-flex align-items-start gap-3">
                                        <i class="fa-regular fa-circle-check mt-1" style="color: #E2A83B; font-size: 1.1rem;"></i>
                                        <div>
                                            <h6 class="fw-bold mb-1 text-white">The "Copy-Paste" Template Vault</h6>
                                            <p class="text-light opacity-75 m-0 small lh-base">Proven writing and speaking structures that have generated B2/C1 results for over 400 Nigerians.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 mt-md-4">
                                    <div class="d-flex align-items-start gap-3">
                                        <i class="fa-regular fa-circle-check mt-1" style="color: #E2A83B; font-size: 1.1rem;"></i>
                                        <div>
                                            <h6 class="fw-bold mb-1 text-white">Naija-Phonetic Audio Vault</h6>
                                            <p class="text-light opacity-75 m-0 small lh-base">Listen while stuck in Lagos traffic. We explain complex French phonetics using Nigerian dialect parallels.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 mt-md-4">
                                    <div class="d-flex align-items-start gap-3">
                                        <i class="fa-regular fa-circle-check mt-1" style="color: #E2A83B; font-size: 1.1rem;"></i>
                                        <div>
                                            <h6 class="fw-bold mb-1 text-white">Weekend Fuel Study Packs</h6>
                                            <p class="text-light opacity-75 m-0 small lh-base">Physical study materials delivered to your doorstep in Lagos or Abuja (Included in fee).</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="border-light opacity-10 my-5">

                            <div class="text-center pt-2">
                                <p class="text-decoration-line-through mb-1 small opacity-50">Standard Tuition: ₦300,000</p>
                                <p class="fw-bold mb-4" style="color: #E2A83B; font-size: 1.4rem;">Current Investment: ₦250,000</p>

                                <div class="mb-4">
                                    <a href="#secure" class="btn btn-brand-primary btn-lg text-uppercase px-5 py-3 shadow" style="font-size: 1.1rem;">
                                         Secure My Weekend Seat
                                    </a>
                                </div>
                                <p class="text-uppercase text-muted small tracking-widest m-0" style="font-size: 0.68rem; font-weight: 700; opacity: 0.7;">
                                    Only 15 Seats Per Cohort To Ensure Focus
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light border-top border-bottom border-light">
        <div class="container pt-4">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 text-center">
                    
                    <div class="mb-4 d-flex justify-content-center align-items-center">
                        <div class="position-relative d-flex align-items-center justify-content-center" style="width: 100px; height: 110px;">
                            <svg class="position-absolute top-0 start-0 w-100 h-100" viewBox="0 0 100 115" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M50 8C72 8 88 16 88 16V52C88 76 68 98 50 106C32 98 12 76 12 52V16C12 16 28 8 50 8Z" 
                                      stroke="#E2DDD3" stroke-width="6" stroke-linejoin="round" fill="none"/>
                                <path d="M35 56L46 67L68 42" 
                                      stroke="#E2DDD3" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            </svg>
                            <span class="fw-bold position-relative" style="font-size: 1.35rem; color: #756323; letter-spacing: -0.5px; top: -4px;">
                                100%
                            </span>
                        </div>
                    </div>

                    <h2 class="text-uppercase fw-black text-dark mb-4" style="font-weight: 900; font-size: 1.75rem; letter-spacing: 0.5px;">
                        The "Iron-Clad" Guarantee
                    </h2>

                    <div class="mx-auto mb-4 px-md-4" style="max-width: 680px;">
                        <p class="text-secondary fst-italic lh-lg mb-4" style="font-family: 'Georgia', serif; font-size: 1.1rem; color: #4A5568 !important;">
                            "If you attend all weekend sessions, complete the assignments, and fail to reach a minimum of CLB 5 in your first attempt—we will refund every single Kobo of your ₦250,000 and write you a letter of apology for wasting your time."
                        </p>
                    </div>

                    <p class="text-danger fw-bold text-uppercase mb-5 small" style="letter-spacing: 1px;">
                        Learn to Speak, Read, Write, and Listen Or Take Your ₦250,000 Back.
                    </p>

                </div>
            </div>
        </div>

        <div class="w-100 text-white py-4 mt-5" style="background-color: #8C0B12; border-top: 1px solid rgba(255,255,255,0.1); border-bottom: 1px solid rgba(255,255,255,0.1);">
            <div class="container">
                <div class="row align-items-center justify-content-between g-3 px-lg-5">
                    
                    <div class="col-12 col-lg-8 d-flex align-items-start justify-content-center justify-content-lg-start gap-3">
                        <i class="fa-solid fa-triangle-exclamation mt-1" style="font-size: 2.2rem; color: #ffffff;"></i>
                        <div>
                            <h3 class="fw-bold m-0 text-white lh-base" style="font-family: 'Playfair Display', 'Georgia', serif; font-size: 1.75rem; letter-spacing: 0.3px;">
                                Warning: The Door is Closing Fast.
                            </h3>
                            <p class="m-0 mt-1" style="font-family: 'Inter', 'Arial', sans-serif; font-size: 0.95rem; color: #E2E8F0; font-weight: 400; opacity: 0.9;">
                                11 of 15 seats are already booked for the next cohort.
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-4 text-center text-lg-end">
                        <div class="d-inline-block px-4 py-3 text-uppercase fw-semibold" 
                             style="font-family: 'Playfair Display', 'Georgia', serif; font-size: 1.45rem; letter-spacing: 1px; border: 1px solid rgba(255, 255, 255, 0.4); background-color: rgba(255, 255, 255, 0.04); color: #ffffff; border-radius: 0px;">
                            04 Seats Left
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="secure" class="py-5 bg-white">
        <div class="container py-4 text-center">
            
            <h2 class="fw-bold text-dark mb-4 mx-auto shadow-none" style="max-width: 550px; font-size: 1.85rem; line-height: 1.3;">
                Ready to secure your family's Canadian future?
            </h2>

            <div class="mb-5 pt-2">
                <a href="article.php" target="_blank" class="btn btn-brand-primary fw-bold px-4 py-3 shadow text-uppercase w-100" style="font-size: 1rem; max-width: 600px; border-bottom: 4px solid #7D1218;">
                    Click Here To Secure Your Weekend Seat 
                </a>
            </div>

            <div class="row g-3 justify-content-center align-items-center mx-auto mt-4" style="max-width: 640px;">
                <div class="col-6 col-sm-3"><div class=""><img src="dist/images/accredited.png" alt="Trust Badge 1" class="img-fluid"></div></div>
                <div class="col-6 col-sm-3"><div class=""><img src="dist/images/alliance.png" alt="Trust Badge 2" class="img-fluid"></div></div>
                <div class="col-6 col-sm-3"><div class=""><img src="dist/images/lagos.png" alt="Trust Badge 3" class="img-fluid"></div></div>
                <div class="col-6 col-sm-3"><div class=""><img src="dist/images/british.png" alt="Trust Badge 4" class="img-fluid"></div></div>
            </div>

        </div>
    </section>

    <footer class="py-5" style="background-color: #2D3131; border-top: 1px solid rgba(255, 255, 255, 0.05);">
        <div class="container text-center text-white">
            
            <h2 class="fw-bold mb-4" style="font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif; font-size: 2rem; letter-spacing: -0.3px; color: #ffffff;">
                The French Fluently Academy
            </h2>

            <div class="d-flex flex-wrap justify-content-center gap-4 mb-4" style="font-family: 'Inter', Arial, sans-serif; font-size: 0.95rem; font-weight: 600;">
                <a href="#" class="text-white text-decoration-none opacity-85 hover-opacity-100 transition-all">Privacy Policy</a>
                <a href="#" class="text-white text-decoration-none opacity-85 hover-opacity-100 transition-all">Terms of Service</a>
                <a href="#" class="text-white text-decoration-none opacity-85 hover-opacity-100 transition-all">Contact Support</a>
            </div>

            <div class="mx-auto pt-3" style="max-width: 720px; font-family: 'Playfair Display', 'Georgia', serif; font-size: 0.95rem; line-height: 1.7; color: #B3B9B9;">
                <p class="m-0 mb-2">
                    &copy; 2026 The French Fluently Academy. All rights reserved. Professional Canadian Immigration Training.
                </p>
                <p class="m-0" style="color: #9AA0A0;">
                    Disclaimer: We are an educational consultancy. We are not IRCC or the Canadian Government.
                </p>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="marketingPopup" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content custom-popup-content position-relative border-0">
                
                <button type="button" class="btn popup-close-x btn-sm position-absolute top-0 end-0 m-3 d-flex align-items-center justify-content-center rounded-circle" 
                        data-bs-dismiss="modal" aria-label="Close" style="width: 32px; height: 32px; z-index: 10;">
                    <i class="fas fa-times small"></i>
                </button>

                <div class="row g-0">
                    <div class="col-md-5 d-none d-md-block position-relative">
                        <div class="popup-img-side"></div>
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to right, rgba(17,20,26,0), rgba(11,14,19,0.4));"></div>
                    </div>

                    <div class="col-12 col-md-7 p-4 p-sm-5 d-flex flex-column justify-content-center">
                        
                        <div class="mb-4">
                            <span class="m-0 text-white d-block" style="font-family: 'Nova Script', cursive; font-size: 28px; line-height: 1;">Alpha Thelma</span>
                            <span class="m-0 text-uppercase tracking-wider fw-bold d-block mt-1" style="font-size: 0.58rem; color: #A61C24; letter-spacing: 1.2px;">The French Fluently Academy</span>
                        </div>

                        <div class="mb-4">
                            <h3 class="fw-bold text-white text-balance mb-3" style="font-size: 1.75rem; line-height: 1.35; letter-spacing: -0.3px;">
                                10 Mistakes People Make While Learning French
                            </h3>
                            <p class="text-secondary m-0" style="font-size: 0.95rem; color: #94a3b8 !important; font-weight: 400; line-height: 1.5;">
                                Learn practical insights to becoming a master.
                            </p>
                        </div>

                        <div>
                            <a href="article.php" class="btn popup-btn-action w-100 text-uppercase shadow-sm text-decoration-none d-block text-center">
                                Get Instant Access
                            </a>    
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var myModal = new bootstrap.Modal(document.getElementById('marketingPopup'), {
                keyboard: true
            });
            
            setTimeout(function () {
                myModal.show();
            }, 3000); 
        });
    </script>
</body>
</html>