<!-- Hero Section -->
<section id="hero" class="hero">
    <div class="hero-text">
        <div class="brand-badge">J&J's Karinderya</div>
        <h1>Authentic Home-Cooked Meals</h1>
        <p>Mainit, Masarap, at Tunay na Lutong Bahay Araw-Araw!</p>
        <a href="#menu" class="btn">Look at the Menu</a>
    </div>
</section>

<!-- About Us Section -->
<section id="about" class="about-section">
    <h2>About Us</h2>
    <p>Welcome to J&J's Karinderya! We serve authentic, freshly cooked Filipino dishes made with fresh local ingredients. Every meal is cooked with care to bring you the comforting taste of home-style cooking at affordable prices.</p>
</section>

<!-- Menu Section -->
<section id="menu" class="menu-section">
    <h2>Dish for Today</h2>
    <div class="menu-grid">
        <div class="food-card">
            <img src="https://encrypted-tbn3.gstatic.com/licensed-image?q=tbn:ANd9GcTdHLkE_nKWiGGrFUUOdPFqmUYahuN7OCyKMezhM0fmONJcxCyAXc6p1f17_lq-qHTK1qtf4E3Rv8-oDmk" alt="Pork Adobo" class="food-img">
            <h3>Pork Adobo</h3>
            <p class="price">₱70.00</p>
            <p>Classic Pinoy Adobo with a perfect balance of flavors.</p>
        </div>
        <div class="food-card">
            <img src="https://encrypted-tbn1.gstatic.com/licensed-image?q=tbn:ANd9GcQFCaL_kmDsYozu2pc374t_M9WTvx5S0kuJt0KIMPLhPqL8dar0TweYkV90VFTk4OE9keYRZjJprMdelo8" alt="Sinigang na Baboy" class="food-img">
            <h3>Sinigang na Baboy</h3>
            <p class="price">₱80.00</p>
            <p>A hot soup with water spinach and the pure sourness of sampalok.</p>
        </div>
        <div class="food-card">
            <img src="https://encrypted-tbn0.gstatic.com/licensed-image?q=tbn:ANd9GcT3H5u9a0wvKJxJH2hQfX4EjHS7YZUpyWqu9p9F0wWPie2aYCs-ivNHJE9kHRpoWiNcziKtxIVogQzUL0s" alt="Bicol Express" class="food-img">
            <h3>Bicol Express</h3>
            <p class="price">₱75.00</p>
            <p>Spicy and creamy pork dish cooked in coconut milk and chili peppers.</p>
        </div>
        <div class="food-card">
            <img src="https://encrypted-tbn0.gstatic.com/licensed-image?q=tbn:ANd9GcRp4M-6cepRbP7V9efH0n-ba242CxNRc5aN3jyiBnSGOsPlEpOygY6A0WPX4u-u0RdDICQucCG1SjNVZak" alt="Chicken Curry" class="food-img">
            <h3>Chicken Curry</h3>
            <p class="price">₱75.00</p>
            <p>Tender chicken pieces simmered in rich coconut milk and curry spices.</p>
        </div>
        <div class="food-card">
            <img src="https://encrypted-tbn1.gstatic.com/licensed-image?q=tbn:ANd9GcSSvBKtciEq-7HOc5_ralw-JqYwq_gRUIt2eNCcIwWaNk9CQSxZVNZgeOpsAF7_8MsZonFhBQ7NtNuP-HI" alt="Ginataang Kalabasa" class="food-img">
            <h3>Ginataang Kalabasa</h3>
            <p class="price">₱60.00</p>
            <p>Savory squash and string beans stewed in savory coconut cream.</p>
        </div>
        <div class="food-card">
            <img src="https://encrypted-tbn0.gstatic.com/licensed-image?q=tbn:ANd9GcTFkGzu2TwuevUF3fKAV4_7_sJnGfT3H3hHz6zAL5ZTJdrX5hkvMX6Tfp3HQ1N9CwZl_m0iHrVjGseevJc" alt="Pork Afritada" class="food-img">
            <h3>Pork Afritada</h3>
            <p class="price">₱75.00</p>
            <p>Hearty pork stew cooked in tomato sauce with potatoes and carrots.</p>
        </div>
    </div>
</section>

<!-- Order Section -->
<section id="order" class="order-section">
    <h2>Place Your Order</h2>
    <form id="orderForm" class="order-form">
        <input type="text" id="custName" placeholder="Name" required>
        <input type="text" id="custOrder" placeholder="What is your order?" required>
        <button type="submit" class="btn">Submit Order</button>
        <p id="OrderMessage" class="feedback"></p>
    </form>
</section>

<!-- Merged Rate & Reach Us Section -->
<section id="connect" class="connect-section">
    <h2>Rate & Connect With Us</h2>
    
    <div class="connect-grid">
        <!-- Rate Us Box -->
<div class="connect-box">
    <h3>Leave a Rating</h3>
    <form id="rateForm" class="rate-form">
        <input type="text" placeholder="Your Name" required>
        
        <!-- Interactive Star Rating Container -->
        <div class="star-rating">
            <input type="radio" id="star5" name="rating" value="5" required>
            <label for="star5" title="5 stars">&#9733;</label>

            <input type="radio" id="star4" name="rating" value="4">
            <label for="star4" title="4 stars">&#9733;</label>

            <input type="radio" id="star3" name="rating" value="3">
            <label for="star3" title="3 stars">&#9733;</label>

            <input type="radio" id="star2" name="rating" value="2">
            <label for="star2" title="2 stars">&#9733;</label>

            <input type="radio" id="star1" name="rating" value="1">
            <label for="star1" title="1 star">&#9733;</label>
        </div>

        <textarea placeholder="Write your review..." rows="3"></textarea>
        <button type="submit" class="btn">Submit Rating</button>
    </form>
</div>

     <!-- Reach Us & Social Media Box -->
<div class="connect-box contact-info">
    <h3>Reach Us</h3>
    <p>📍 Padilla, Antipolo City, Philippines</p>
    <p>📞 +63 912 345 6789</p>
    <p>📧 contact:@jnjkarinderya.com</p>

    <h4>Follow Our Socials</h4>
    <div class="social-links">
        <a href="#hero" class="social-btn">Facebook</a>
        <a href="#hero" class="social-btn">Instagram</a>
        <a href="#hero" class="social-btn">TikTok</a>
    </div>
</div>
    </div>
</section>