<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <!-- Include any custom CSS here -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>

<body>
    <!-- Header Section -->
    <header>
        <nav>
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="YourBrand Logo">
            </div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li>
                @guest
                    <li><a href="{{ url('/register') }}">Register</a></li>
                    <li><a href="{{ url('/login') }}">Login</a></li>
                @else
                <li><a href="{{ url('/profile') }}">Profile</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <li>
                        <a href="#"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    </li>
                @endguest

            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to Business Automation Limited</h1>
            <p>Your success is our priority. Let us help you reach your goals with our innovative solutions.</p>
            <a href="#" class="cta-button">Get Started</a>
        </div>
    </section>

    <section class="testimonials">
        <h2>What Our Clients Say</h2>
        <div class="testimonial-grid">
            <div class="testimonial-item">
                <p>"Business Automation Limited transformed our operations and helped us achieve remarkable growth.
                    Highly recommend!"</p>
                <h4>Jane Doe</h4>
                <p>CEO, ExampleCorp</p>
            </div>
            <div class="testimonial-item">
                <p>"Their innovative solutions and dedicated support have been invaluable to our success."</p>
                <h4>John Smith</h4>
                <p>Founder, Startup Inc.</p>
            </div>
        </div>
    </section>

    <section class="our-process">
        <h2>How We Work</h2>
        <div class="process-steps">
            <div class="process-step">
                <img src="{{ asset('images/step-1.jpeg') }}" alt="Step 1">
                <h3>Step 1: Consultation</h3>
                <p>We discuss your needs and goals to tailor our solutions to your requirements.</p>
            </div>
            <div class="process-step">
                <img src="{{ asset('images/step-2.png') }}" alt="Step 2">
                <h3>Step 2: Strategy</h3>
                <p>We develop a comprehensive plan to address your challenges and seize opportunities.</p>
            </div>
            <div class="process-step">
                <img src="{{ asset('images/step-3.jpeg') }}" alt="Step 3">
                <h3>Step 3: Implementation</h3>
                <p>Our team executes the plan with precision and efficiency to achieve the desired outcomes.</p>
            </div>
        </div>
    </section>

    <section class="team">
        <h2>Meet Our Team</h2>
        <div class="team-grid">
            <div class="team-member">
                <img src="{{ asset('images/team1.jpeg') }}" alt="Team Member 1">
                <h3>Alice Johnson</h3>
                <p>Chief Executive Officer</p>
            </div>
            <div class="team-member">
                <img src="{{ asset('images/team2.jpg') }}" alt="Team Member 2">
                <h3>Bob Lee</h3>
                <p>Lead Developer</p>
            </div>
        </div>
    </section>

    <section class="blog">
        <h2>Latest Insights</h2>
        <div class="blog-posts">
            <div class="post">
                <img src="{{ asset('images/blog1.png') }}" alt="Blog Post 1">
                <h3>How Automation Can Boost Your Business</h3>
                <p>Learn how automation can streamline your processes and increase productivity.</p>
                <a href="#">Read More</a>
            </div>
            <div class="post">
                <img src="{{ asset('images/blog2.jpeg') }}" alt="Blog Post 2">
                <h3>The Future of Technology in Business</h3>
                <p>Explore the latest trends and innovations shaping the future of business technology.</p>
                <a href="#">Read More</a>
            </div>
        </div>
    </section>

    <section class="cta">
        <h2>Ready to Get Started?</h2>
        <p>Contact us today to discuss how we can help your business thrive.</p>
        <a href="#" class="cta-button">Contact Us</a>
    </section>


    <!-- Features Section -->
    <section class="features">
        <h2>Our Key Features</h2>
        <div class="feature-grid">
            <div class="feature-item">
                <img src="{{ asset('images/2.jpeg') }}" alt="Feature 1">
                <h3>Innovative Strategy</h3>
                <p>We provide cutting-edge strategies that help businesses grow and thrive in the competitive market.
                </p>
            </div>
            <div class="feature-item">
                <img src="{{ asset('images/3.jpeg') }}" alt="Feature 2">
                <h3>Advanced Technology</h3>
                <p>Our solutions leverage the latest technology to deliver efficient and scalable results.</p>
            </div>
            <div class="feature-item">
                <img src="{{ asset('images/4.jpeg') }}" alt="Feature 3">
                <h3>Collaborative Team</h3>
                <p>Our experienced team works closely with clients to ensure their success at every step.</p>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="footer-container">
            <div class="footer-about">
                <h3>About Business Automation Limited</h3>
                <p>Business Automation Limited is dedicated to providing top-notch services and solutions for businesses
                    of all sizes. With years of experience, we bring creativity, innovation, and commitment to each
                    project we undertake.</p>
            </div>
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h3>Contact Us</h3>
                <p>Email: info@business.com</p>
                <p>Phone: +123 456 7890</p>
                <p>Address: 123 Business Road, Dhaka, Bangladesh</p>
            </div>
        </div>
        <p class="footer-credit">&copy; 2024 Business Automation Ltd. All rights reserved. | Designed by Md Sobuj Mia
        </p>
    </footer>
</body>

</html>
