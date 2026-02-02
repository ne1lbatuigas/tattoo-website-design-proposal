<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inkgie - Tattoo Studio</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=megrim:400;dosis:400,500,600" rel="stylesheet" />
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Navigation -->
    <nav>
        <ul class="menu-left">
            <li><a href="#home" class="hover-scale">Home</a></li>
            <li><a href="#artists" class="hover-scale">Artists</a></li>
            <li><a href="#works" class="hover-scale">Gallery</a></li>
        </ul>
        <div class="logo">
            <img src="/images/logo-header.png" alt="Inkgic">
        </div>
        <ul class="menu-right">
            <li><a href="#services" class="hover-scale">Services</a></li>
            <li><a href="#info" class="hover-scale">Clinic</a></li>
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
                <div class="works-button-bar">
                    <a href="#services" class="works-button">Book Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="info">
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
                const bnwSrc = img.getAttribute('data-bnw') || img.src;
                const colorSrc = card.getAttribute('data-color');
                
                // Store BNW source in data attribute for later retrieval
                img.setAttribute('data-bnw', bnwSrc);
                
                // Remove old listeners by cloning the card
                const newCard = card.cloneNode(true);
                card.parentNode.replaceChild(newCard, card);
                
                const newImg = newCard.querySelector('img');
                newCard.addEventListener('mouseenter', function() {
                    newImg.src = newCard.getAttribute('data-color');
                });

                newCard.addEventListener('mouseleave', function() {
                    newImg.src = newImg.getAttribute('data-bnw');
                });
            });
        }

        function changeSlide(direction) {
            currentSlide = (currentSlide + direction + slides.length) % slides.length;
            const prevSlide = (currentSlide - 1 + slides.length) % slides.length;
            const nextSlide = (currentSlide + 1) % slides.length;
            
            document.getElementById('carouselImg').src = slides[currentSlide];
            document.getElementById('prevImg').querySelector('img').src = slides[prevSlide];
            document.getElementById('nextImg').querySelector('img').src = slides[nextSlide];
            
            // Store BNW sources in data attributes
            document.getElementById('carouselImg').setAttribute('data-bnw', slides[currentSlide]);
            document.getElementById('prevImg').querySelector('img').setAttribute('data-bnw', slides[prevSlide]);
            document.getElementById('nextImg').querySelector('img').setAttribute('data-bnw', slides[nextSlide]);
            
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
