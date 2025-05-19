<!DOCTYPE html>
<!-- Coding by CodingNepal - youtube.com/@codingnepal -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Coffee Website | CodingNepal</title>
    <!-- Linking Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <!-- Linking Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style1.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  </head>
  <style>
    /* Normal state */
.menu-item a img {
    width: 50px; /* Keep the original size of the logo */
    height: 50px;
    transition: transform 0.3s ease-in-out; /* Smooth transition */
}

/* Hover effect to zoom the logo */
.menu-item a img:hover {
    transform: scale(1.5); /* Zoom the logo when hovered */
}

  </style>
  <body>
    
    <!-- Header / Navbar -->
    <header>
      <nav class="navbar">
        <a href="#" class="nav-logo">
          <h2 class="logo-text">ONE SANTA RITA </h2>
        </a>

        <ul class="nav-menu">
  

          <li class="nav-item">
    <a href="front.php" class="nav-link">HOME</a>
</li>
          

        
      </nav>
    </header>

    

      <!-- Menu section -->
      <section class="menu-section" id="menu">
    <h2 class="section-title">School</h2>
    <div class="section-content">
        <ul class="menu-list">
            <li class="menu-item">
                <img src="picture/srclogo.png" alt="Hot Beverages" class="menu-image" />
                <div class="menu-details">
                    <h3 class="name">SANTA RITA COLLEGE</h3>
                    <p class="text">
                        <a href="https://src.edu.ph/" target="_blank" rel="noopener noreferrer">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook Logo" width="30" height="30">
                            .
                        </a>
                    </p>
                </div>
            </li>
            <li class="menu-item">
                <img src="picture/becuran.png" alt="Cold Beverages" class="menu-image" />
                <div class="menu-details">
                    <h3 class="name">BECURAN HIGH SCHOOL</h3>
                    <p class="text">
                        <a href="https://www.facebook.com/profile.php?id=61562798982382&mibextid=ZbWKwL" target="_blank" rel="noopener noreferrer">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook Logo" width="30" height="30">
                           .
                        </a>
                    </p>
                </div>
            </li>
            <li class="menu-item">
                <img src="picture/catholic.png" alt="Refreshment" class="menu-image" />
                <div class="menu-details">
                    <h3 class="name">SANTA RITA CATHOLIC SCHOOL</h3>
                    <p class="text">
                        <a href="https://www.facebook.com/profile.php?id=100064727018896" target="_blank" rel="noopener noreferrer">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook Logo" width="30" height="30">
                            .
                        </a>
                    </p>
                </div>
            </li>
            <li class="menu-item">
                <img src="picture/diladila.png" alt="Special Combos" class="menu-image" />
                <div class="menu-details">
                    <h3 class="name">DILA-DILA ELEMENTARY SCHOOL</h3>
                    <p class="text">
                        <a href="https://www.facebook.com/DES106289" target="_blank" rel="noopener noreferrer">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook Logo" width="30" height="30">
                            .
                        </a>
                    </p>
                </div>
            </li>
            <li class="menu-item">
                <img src="picture/dominican.jpg" alt="Dessert" class="menu-image" />
                <div class="menu-details">
                    <h3 class="name">DOMINICAN SCHOOL</h3>
                    <p class="text">
                        <a href="https://www.facebook.com/DSSROfficialPage?mibextid=ZbWKwL" target="_blank" rel="noopener noreferrer">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook Logo" width="30" height="30">
                            .
                        </a>
                    </p>
                </div>
            </li>
            <li class="menu-item">
                <img src="picture/asset.png" alt="burger & French Fries" class="menu-image" />
                <div class="menu-details">
                    <h3 class="name">ASSET</h3>
                    <p class="text">
                        <a href="https://www.facebook.com/SSLG.ASSET" target="_blank" rel="noopener noreferrer">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook Logo" width="30" height="30">
                            .
                        </a>
                    

                </p>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <!-- Testimonials section -->
      <section class="testimonials-section" id="testimonials">
        <h2 class="section-title">Testimonials</h2>
        <div class="section-content">
          <div class="slider-container swiper">
            <div class="slider-wrapper">
              <ul class="testimonials-list swiper-wrapper">
                <li class="testimonial swiper-slide">
                  <img src="picture/images/user-1.jpg" alt="User" class="user-image" />
                  <h3 class="name">Sarah Johnson</h3>
                  <i class="feedback">"Loved the French roast. Perfectly balanced and rich. Will order again!"</i>
                </li>
                <li class="testimonial swiper-slide">
                  <img src="picture/user-2.jpg" alt="User" class="user-image" />
                  <h3 class="name">James Wilson</h3>
                  <i class="feedback">"Great espresso blend! Smooth and bold flavor. Fast shipping too!"</i>
                </li>
                <li class="testimonial swiper-slide">
                  <img src="picture/images/user-3.jpg" alt="User" class="user-image" />
                  <h3 class="name">Michael Brown</h3>

                  <i class="feedback">"Fantastic mocha flavor. Fresh and aromatic. Quick shipping!"</i>
                </li>
                <li class="testimonial swiper-slide">
                  <img src="picture/images/user-4.jpg" alt="User" class="user-image" />
                  <h3 class="name">Emily Harris</h3>

                  <i class="feedback">"Excellent quality! Fresh beans and quick delivery. Highly recommend."</i>
                </li>
                <li class="testimonial swiper-slide">
                  <img src="picture/images/user-5.jpg" alt="User" class="user-image" />
                  <h3 class="name">Anthony Thompson</h3>

                  <i class="feedback">"Best decaf I've tried! Smooth and flavorful. Arrived promptly."</i>
                </li>
              </ul>

              <div class="swiper-pagination"></div>
              <div class="swiper-slide-button swiper-button-prev"></div>
              <div class="swiper-slide-button swiper-button-next"></div>
            </div>
          </div>
        </div>
      </section>

      <!-- Gallery section -->
      <section class="gallery-section" id="gallery">
        <h2 class="section-title">Gallery</h2>
        <div class="section-content">
          <ul class="gallery-list">
            <li class="gallery-item">
              <img src="picture/gallery-1.jpg" alt="Gallery Image" class="gallery-image" />
            </li>
            <li class="gallery-item">
              <img src="picture/images/gallery-2.jpg" alt="Gallery Image" class="gallery-image" />
            </li>
            <li class="gallery-item">
              <img src="picture/images/gallery-3.jpg" alt="Gallery Image" class="gallery-image" />
            </li>
            <li class="gallery-item">
              <img src="picture/images/gallery-4.jpg" alt="Gallery Image" class="gallery-image" />
            </li>
            <li class="gallery-item">
              <img src="picture/images/gallery-5.jpg" alt="Gallery Image" class="gallery-image" />
            </li>
            <li class="gallery-item">
              <img src="picture/images/gallery-6.jpg" alt="Gallery Image" class="gallery-image" />
            </li>
          </ul>
        </div>
      </section>

      <!-- Contact section -->
      <section class="contact-section" id="contact">
        <h2 class="section-title">Contact Us</h2>
        <div class="section-content">
          <ul class="contact-info-list">
            <li class="contact-info">
              <i class="fa-solid fa-location-crosshairs"></i>
              <p>123 Campsite Avenue, Wilderness, CA 98765</p>
            </li>
            <li class="contact-info">
              <i class="fa-regular fa-envelope"></i>
              <p>info@coffeeshopwebsite.com</p>
            </li>
            <li class="contact-info">
              <i class="fa-solid fa-phone"></i>
              <p>(123) 456-78909</p>
            </li>
            <li class="contact-info">
              <i class="fa-regular fa-clock"></i>
              <p>Monday - Friday: 9:00 AM - 5:00 PM</p>
            </li>
            <li class="contact-info">
              <i class="fa-regular fa-clock"></i>
              <p>Saturday: 10:00 AM - 3:00 PM</p>
            </li>
            <li class="contact-info">
              <i class="fa-regular fa-clock"></i>
              <p>Sunday: Closed</p>
            </li>
            <li class="contact-info">
              <i class="fa-solid fa-globe"></i>
              <p>www.codingnepalweb.com</p>
            </li>
          </ul>

          <form action="#" class="contact-form">
            <input type="text" placeholder="Your name" class="form-input" required />
            <input type="email" placeholder="Your email" class="form-input" required />
            <textarea placeholder="Your message" class="form-input" required></textarea>
            <button type="submit" class="button submit-button">Submit</button>
          </form>
        </div>
      </section>

      <!-- Footer section -->
      <footer class="footer-section">
        <div class="section-content">
          <p class="copyright-text">© 2024 Coffee Shop</p>

          <div class="social-link-list">
            <a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="social-link"><i class="fa-brands fa-x-twitter"></i></a>
          </div>

          <p class="policy-text">
            <a href="#" class="policy-link">Privacy policy</a>
            <span class="separator">•</span>
            <a href="#" class="policy-link">Refund policy</a>
          </p>
        </div>
      </footer>
    </main>

    <!-- Linking Swiper script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Linking custom script -->
    <script src="script.js"></script>
  </body>
</html>