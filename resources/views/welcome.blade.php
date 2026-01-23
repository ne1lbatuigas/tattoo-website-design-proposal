<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inkgie - Tattoo Studio</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=megrim:400;dosis:400,500,600" rel="stylesheet" />
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --green: #7b7f5d;
            --blue: #405060;
            --beige: #e8e4df;
            --dark: #2a2a2a;
            --light: #fafafa;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Dosis', sans-serif;
            background: url('/images/bg-1.jpg') center/cover fixed no-repeat;
            color: var(--dark);
            line-height: 1.6;
        }

        h1, h2, h3 {
            font-family: 'Megrim', cursive;
            letter-spacing: 3px;
            font-weight: 400;
        }

        /* Navigation */
        nav {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 25px 50px;
            background: transparent;
            position: absolute;
            width: 100%;
            top: 0;
            z-index: 1000;
            height: auto;
            gap: 500px;
        }

        nav .logo {
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            order: 2;
        }

        nav .logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 50px;
            margin: 0;
            padding: 0;
        }

        nav .menu-left {
            order: 1;
        }

        nav .menu-right {
            order: 3;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-size: 11px;
            letter-spacing: 2px;
            transition: color 0.3s ease;
            font-weight: 500;
            cursor: pointer;
        }

        nav li {
            font-family: inherit;
        }

        nav a:hover {
            color: var(--green);
        }

        /* Hero Section */
        .hero {
            width: 100%;
            min-height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), 
                        url('/images/banner.jpg') center/cover no-repeat;
            display: flex;
            flex-direction: column;
            color: white;
            text-align: center;
            margin-top: 0;
            position: relative;
        }

        .hero-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .hero h1 {
            font-size: 72px;
            margin-bottom: 40px;
            letter-spacing: 4px;
            font-weight: 400;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-button-bar {
            background: var(--green);
            width: 100%;
            padding: 18px 0;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 30px;
        }

        .hero-button {
            background: transparent;
            color: white;
            border: none;
            padding: 0 15px;
            text-decoration: none;
            font-size: 11px;
            letter-spacing: 2px;
            transition: all 0.3s ease;
            cursor: pointer;
            display: block;
            width: 100%;
            text-align: center;
            font-weight: 600;
            text-transform: uppercase;
        }

        .hero-button:hover {
            color: rgba(255, 255, 255, 0.8);
            cursor: pointer;
        }

        /* Artists Section */
        .artists-section {
            padding: 0;
            text-align: center;
            box-shadow: 0 20px 60px rgba(6, 52, 97, 0.6);
        }

        .artists-header {
            padding: 80px 50px 50px;
        }

        .artists-section h2 {
            font-size: 48px;
            margin-bottom: 5px;
            color: var(--dark);
        }

        .artists-subtitle {
            font-size: 13px;
            color: var(--dark);
            margin-bottom: 0;
            letter-spacing: 1px;
            font-weight: 500;
        }

        .artists-content {
            box-shadow: 0 -50px 250px rgba(6, 52, 97, 0.6);
            background: linear-gradient(rgba(64, 80, 96, 0.85), rgba(64, 80, 96, 0.85)), url('/images/bg-2.jpg') center/cover no-repeat;
            padding: 100px 50px;
        }

        .artists-button-bar {
            background: var(--green);
            width: calc(100% + 100px);
            padding: 18px 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
            margin-left: -50px;
            margin-right: -50px;
            margin-bottom: -50px;
        }

        .artists-button {
            background: transparent;
            color: white;
            border: none;
            padding: 0px 15px;
            text-decoration: none;
            font-size: 11px;
            letter-spacing: 2px;
            transition: all 0.3s ease;
            cursor: pointer;
            display: block;
            width: 100%;
            text-align: center;
            font-weight: 600;
            text-transform: uppercase;
        }

        .artists-button:hover {
            color: rgba(255, 255, 255, 0.8);
        }

        .artists-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            max-width: 1100px;
            margin: 0 auto;
        }

        .artist-card {
            position: relative;
            overflow: hidden;
            background: white;
            aspect-ratio: 1;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            cursor: pointer;
        }

        .artist-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: opacity 0.4s ease;
        }

        .artist-info {
            position: absolute;
            top: 0;
            left: 0;
            background: rgba(255, 255, 255, 0.69);
            padding: 25px 15px;
            text-align: center;
            writing-mode: sideways-lr;
            text-orientation: mixed;
            opacity: 0;
            transform: translateX(-100%);
            transition: all 0.4s ease;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            gap: 10px;
        }

        .artist-name {
            font-size: 16px;
            font-weight: 400;
            color: var(--dark);
            letter-spacing: 2px;
            font-family: 'Megrim', cursive;
        }

        .artist-specialty {
            font-size: 11px;
            color: #888;
            letter-spacing: 1px;
            font-family: 'Dosis', sans-serif;
        }

        .artist-card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .artist-card:hover .artist-info {
            opacity: 1;
            transform: translateX(0);
        }

        .artist-card:hover img {
            filter: none;
            transform: none;
        }

        /* Services Section */
        .services-section {
            padding: 100px 50px;
            background: linear-gradient(rgba(64, 80, 96, 0.85), rgba(64, 80, 96, 0.85)), url('/images/bg-3.jpg') center/cover no-repeat;
            text-align: center;
            margin-top: 80px;
            box-shadow: 0 20px 60px rgba(6, 52, 97, 0.6);
        }

        .services-section h2 {
            font-size: 48px;
            color: white;
            margin-bottom: 20px;
            letter-spacing: 2px;
        }

        .services-subtitle {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 60px;
            letter-spacing: 1px;
            font-family: 'Dosis', sans-serif;
            font-weight: 400;
        }

        .services-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 500px;
            max-width: 900px;
            margin: 0 auto;
        }

        .service-item {
            text-align: center;
            transition: all 0.4s ease;
            cursor: pointer;
        }

        .service-item:hover {
            background: var(--green);
        }

        .service-item h3 {
            color: white;
            font-size: 26px;
            margin-bottom: 12px;
            letter-spacing: 2px;
        }

        .service-item p {
            color: rgba(255, 255, 255, 0.85);
            font-size: 12px;
            line-height: 1.6;
        }

        /* Works Section */
        .works-section {
            padding: 100px 50px 2px 50px;
        }

        .works-section h2 {
            font-size: 48px;
            text-align: center;
            margin-bottom: 8px;
            color: var(--dark);
        }

        .works-subtitle {
            text-align: center;
            font-size: 12px;
            color: var(--dark);
            margin-bottom: 60px;
            letter-spacing: 1px;
        }

        .carousel-container {
            width: 100vw;
            margin: 0 calc(-50vw + 50%);
            position: relative;
            padding: 0;
            margin-bottom: 0;
            overflow: visible;
        }

        .carousel {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 0;
        }

        .carousel-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            overflow: visible;
            gap: 50px;
            padding: 40px 0;
        }

        .carousel-button {
            background: none;
            border: none;
            font-size: 48px;
            color: var(--dark);
            cursor: pointer;
            padding: 10px 15px;
            transition: all 0.3s ease;
            font-weight: 300;
        }

        .carousel-button:hover {
            color: var(--green);
            transform: scale(1.3);
        }

        .carousel-image {
            height: 700px;
            flex-shrink: 0;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .carousel-image:hover {
            box-shadow: 0 0 30px 5px rgba(6, 52, 97, 0.6), 0 8px 24px rgba(0, 0, 0, 0.1);
        }

        .carousel-image.main {
            width: 50vw;
        }

        .carousel-image.side {
            height: 700px;
            width: 50vw;
            opacity: 0.7;
        }

        .carousel-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.5s ease;
        }

        .carousel-image:hover img {
            filter: none;
            transform: none;
        }

        /* Footer */
        footer {
            background: linear-gradient(rgba(64, 80, 96, 0.85), rgba(64, 80, 96, 0.85)), url('/images/bg-3.jpg') center/cover no-repeat;
            padding: 80px 50px 0 50px;
            color: rgba(255, 255, 255, 0.8);
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 250px;
            align-items: start;
        }

        .footer-section {
            text-align: center;
        }

        .footer-section:nth-child(2) {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .footer-section h3 {
            color: white;
            font-size: 50px;
            //margin-bottom: 10px;
            letter-spacing: 1px;
        }

        .footer-section p {
            font-size: 13px;
            line-height: 1.9;
            margin: 0;
        }

        .footer-logo {
            width: 150px;
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .footer-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .footer-section p.company-name {
            font-size: 50px;
            letter-spacing: 4px;
            font-family: 'Megrim', cursive;
            margin-bottom: -20px;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 18px;
            margin-top: 18px;
        }

        .social-links a {
            width: 26px;
            height: 26px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: black;
            text-decoration: none;
            font-size: 13px;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            color: var(--green);
            border-color: var(--green);
        }

        .footer-map {
            width: 130%;
            height: 250px;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 2px;
            margin-top: 18px;
            margin-left: -5%;
            overflow: hidden;
        }

        .footer-map iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .footer-divider {
            width: 100vw;
            margin: 0 calc(-50vw + 50%);
            height: 1px;
            background: white;
            margin-top: 40px;
        }

        .footer-copyright {
            text-align: center;
            padding: 20px 50px;
            color: white;
            font-size: 15px;
            letter-spacing: 0.5px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            nav {
                padding: 15px 25px;
                height: auto;
            }

            nav ul {
                gap: 25px;
            }

            .hero h1 {
                font-size: 42px;
            }

            .artists-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }

            .carousel {
                gap: 15px;
            }

            .footer-content {
                grid-template-columns: 1fr 1fr;
                gap: 30px;
            }

            .artists-section,
            .services-section,
            .works-section,
            footer {
                padding: 60px 25px;
            }
        }

        /* Utility */
        .hover-scale {
            transition: all 0.3s ease;
        }

        .hover-scale:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <ul class="menu-left">
            <li><a href="#home" class="hover-scale">Home</a></li>
            <li><a href="#artists" class="hover-scale">Artists</a></li>
            <li><a class="hover-scale">Gallery</a></li>
        </ul>
        <div class="logo">
            <img src="/images/logo-header.png" alt="Inkgic">
        </div>
        <ul class="menu-right">
            <li><a href="#services" class="hover-scale">Services</a></li>
            <li><a href="#works" class="hover-scale">Clinic</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>We Turn Skin Into Art;</h1>
        </div>
        <div class="hero-button-bar">
            <a href="#services" class="hero-button">Book Now</a>
        </div>
    </section>

    <!-- Artists Section -->
    <section class="artists-section" id="artists">
        <div class="artists-header">
            <h2>Artists;<br>Masterpieces in motion</h2>
            <p class="artists-subtitle">Crafting Dreams into Stunning, Wearable Art.</p>
        </div>
        
        <div class="artists-content">
            <div class="artists-grid">
                <div class="artist-card" data-color-image="/images/img-artist-1.png">
                    <img src="/images/img-artist-bnw-1.png" alt="Artist 1">
                    <div class="artist-info">
                        <div class="artist-name">Solyna Mercure</div>
                        <div class="artist-specialty">Tattoo Artist</div>
                    </div>
                </div>
                <div class="artist-card" data-color-image="/images/img-artist-2.png">
                    <img src="/images/img-artist-bnw-2.png" alt="Artist 2">
                    <div class="artist-info">
                        <div class="artist-name">Marcus Stone</div>
                        <div class="artist-specialty">Design Artist</div>
                    </div>
                </div>
                <div class="artist-card" data-color-image="/images/img-artist-3.png">
                    <img src="/images/img-artist-bnw-3.png" alt="Artist 3">
                    <div class="artist-info">
                        <div class="artist-name">Jamie Rivers</div>
                        <div class="artist-specialty">Tattoo Artist</div>
                    </div>
                </div>
                <div class="artist-card" data-color-image="/images/img-artist-4.png">
                    <img src="/images/img-artist-bnw-4.png" alt="Artist 4">
                    <div class="artist-info">
                        <div class="artist-name">Alex Phoenix</div>
                        <div class="artist-specialty">Artist</div>
                    </div>
                </div>
                <div class="artist-card" data-color-image="/images/img-artist-5.png">
                    <img src="/images/img-artist-bnw-5.png" alt="Artist 5">
                    <div class="artist-info">
                        <div class="artist-name">River Cole</div>
                        <div class="artist-specialty">Specialist</div>
                    </div>
                </div>
                <div class="artist-card" data-color-image="/images/img-artist-6.png">
                    <img src="/images/img-artist-bnw-6.png" alt="Artist 6">
                    <div class="artist-info">
                        <div class="artist-name">Chris Design</div>
                        <div class="artist-specialty">Tattoo Artist</div>
                    </div>
                </div>
            </div>
            <div class="artists-button-bar">
                <a href="#services" class="artists-button">Enquire Now</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section" id="services">
        <h2>Services;</h2>
        <p class="services-subtitle">Harmonizing Art and Expression</p>
        <div class="services-grid">
            <div class="service-item hover-scale">
                <h3>Tattoos</h3>
            </div>
            <div class="service-item hover-scale">
                <h3>Aesthetics</h3>
            </div>
        </div>
    </section>

    <!-- Works Section -->
    <section class="works-section" id="works">
        <h2>Our Works;</h2>
        <p class="works-subtitle">Ink Your Memories, Wear Your Story.</p>
        
        <div class="carousel-container">
            <div class="carousel">
                <div class="carousel-wrapper">
                    <div class="carousel-image side" id="prevImg" data-color="/images/img-works-3.png">
                        <img src="/images/img-works-bnw-3.png" alt="Previous">
                    </div>
                    
                    <div class="carousel-image main" id="mainImg" data-color="/images/img-works-1.png">
                        <img id="carouselImg" src="/images/img-works-bnw-1.png" alt="Artwork">
                    </div>
                    
                    <div class="carousel-image side" id="nextImg" data-color="/images/img-works-2.png">
                        <img src="/images/img-works-bnw-2.png" alt="Next">
                    </div>
                </div>
                
                <div style="display: flex; gap: 1200px; margin-top: 30px; justify-content: center;">
                    <button class="carousel-button" onclick="changeSlide(-1)">
                        <svg width="80" height="80" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 25H40" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                            <path d="M20 15L10 25L20 35" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <button class="carousel-button" onclick="changeSlide(1)">
                        <svg width="80" height="80" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M40 25H10" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                            <path d="M30 15L40 25L30 35" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
                <div class="artists-button-bar" style="margin-left: 0; margin-right: 0; margin-bottom: 0; width: 100%;">
                    <a href="#contact" class="artists-button">Book Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Location</h3>
                <p>Davao City, Philippines</p>
                <div class="footer-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.50657654718!2d125.59896687585977!3d7.067110292935552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96d7a592d3b75%3A0xb7dd8dc0797ab8aa!2sBankerohan%2C%20Poblacion%20District%2C%20Davao%20City%2C%20Davao%20del%20Sur!5e0!3m2!1sen!2sph!4v1769154638255!5m2!1sen!2sph" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="footer-section">
                <div class="footer-logo">
                    <img src="/images/logo-footer.png" alt="Inkgic">
                </div>
                <p class="company-name">InkGie</p>
                <p>Tattoo & Aesthetics</p>
            </div>

            <div class="footer-section">
                <h3>Hours</h3>
                <p>Mon - Sat: 9AM - 6PM</p>
                <h3>Socials</h3>
                <div class="social-links">
                    <a href="#" title="Facebook">
                        <svg width="50" height="50" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" title="Instagram">
                        <svg width="50" height="50" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.117.626c-.794.297-1.473.772-2.064 1.362-.59.591-1.066 1.27-1.362 2.064-.293.788-.494 1.658-.553 2.936C.015 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.553 2.936.297.792.772 1.473 1.362 2.064.591.59 1.27 1.065 2.064 1.362.788.293 1.658.494 2.936.553C8.333 23.985 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.059 2.148-.26 2.936-.553.792-.297 1.473-.772 2.064-1.362.59-.591 1.065-1.27 1.362-2.064.293-.788.494-1.658.553-2.936.057-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.059-1.277-.26-2.148-.553-2.936-.297-.792-.772-1.473-1.362-2.064-.591-.59-1.27-1.065-2.064-1.362-.788-.293-1.658-.494-2.936-.553C15.667.015 15.26 0 12 0zm0 2.16c3.203 0 3.585.009 4.849.070 1.171.054 1.805.244 2.227.408.56.217.96.477 1.382.896.419.42.679.822.896 1.381.164.422.354 1.057.408 2.227.061 1.266.07 1.646.07 4.849s-.009 3.583-.07 4.849c-.054 1.171-.244 1.805-.408 2.227-.217.56-.477.96-.896 1.382-.42.419-.822.679-1.381.896-.422.164-1.057.354-2.227.408-1.266.061-1.646.07-4.849.07s-3.583-.009-4.849-.07c-1.171-.054-1.805-.244-2.227-.408-.56-.217-.96-.477-1.382-.896-.419-.42-.679-.822-.896-1.381-.164-.422-.354-1.057-.408-2.227-.061-1.266-.07-1.646-.07-4.849s.009-3.583.07-4.849c.054-1.171.244-1.805.408-2.227.217-.56.477-.96.896-1.382.42-.419.822-.679 1.381-.896.422-.164 1.057-.354 2.227-.408 1.266-.061 1.646-.07 4.849-.07z"/>
                            <path d="M12 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a4 4 0 110-8 4 4 0 010 8zm4.965-10.322a1.44 1.44 0 110-2.88 1.44 1.44 0 010 2.88z"/>
                        </svg>
                    </a>
                    <a href="#" title="TikTok">
                        <svg width="50" height="50" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.1 1.75 2.9 2.9 0 0 1 5.1-1.75V9.4a6.84 6.84 0 0 0-6.85 6.87 6.85 6.85 0 0 0 6.85 6.85c3.78 0 6.84-3.06 6.84-6.84V9.74a8.82 8.82 0 0 0 6.25 2.62V9.4a4.84 4.84 0 0 1-3.97-2.71z"/>
                        </svg>
                    </a>
                </div>
                <h3>Contact</h3>
                <p>sample@gmail.com<br>+63 999 492 8190</p>
            </div>
        </div>
        <div class="footer-divider"></div>
        <div class="footer-copyright">
            <p>Copyright © Tattoo Website. All rights reserved. Designed & Developed by R Web Solutions Corp.</p>
        </div>
    </footer>

    <script>
        let currentSlide = 0;
        const slides = [
            '/images/img-works-bnw-1.png',
            '/images/img-works-bnw-2.png',
            '/images/img-works-bnw-3.png'
        ];
        const colorSlides = [
            '/images/img-works-1.png',
            '/images/img-works-2.png',
            '/images/img-works-3.png'
        ];

        function initCarouselHover() {
            document.querySelectorAll('.carousel-image').forEach(card => {
                const img = card.querySelector('img');
                const bnwSrc = img.src;
                const colorSrc = card.getAttribute('data-color');

                if (colorSrc) {
                    card.addEventListener('mouseenter', function() {
                        img.src = colorSrc;
                    });

                    card.addEventListener('mouseleave', function() {
                        img.src = bnwSrc;
                    });
                }
            });
        }

        function changeSlide(direction) {
            currentSlide = (currentSlide + direction + slides.length) % slides.length;
            const prevSlide = (currentSlide - 1 + slides.length) % slides.length;
            const nextSlide = (currentSlide + 1) % slides.length;
            
            document.getElementById('carouselImg').src = slides[currentSlide];
            document.getElementById('prevImg').querySelector('img').src = slides[prevSlide];
            document.getElementById('nextImg').querySelector('img').src = slides[nextSlide];
            
            document.getElementById('mainImg').setAttribute('data-color', colorSlides[currentSlide]);
            document.getElementById('prevImg').setAttribute('data-color', colorSlides[prevSlide]);
            document.getElementById('nextImg').setAttribute('data-color', colorSlides[nextSlide]);
            
            // Reinitialize hover listeners with new current src values
            initCarouselHover();
        }

        // Artist card image swap on hover
        document.querySelectorAll('.artist-card').forEach(card => {
            const img = card.querySelector('img');
            const bnwSrc = img.src;
            const colorSrc = card.getAttribute('data-color-image');

            card.addEventListener('mouseenter', function() {
                img.src = colorSrc;
            });

            card.addEventListener('mouseleave', function() {
                img.src = bnwSrc;
            });
        });

        // Initialize carousel hover on page load
        initCarouselHover();

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    </script>
</body>
</html>
