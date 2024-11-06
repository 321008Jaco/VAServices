<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Virtual Assistant Services</title>
    <link rel="stylesheet" href="Contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="container">
            <a href="index.html" class="logo">VA Services</a>
            <ul class="nav-links">
                <li><a href="../Index.php">Home</a></li>
                <li><a href="Services.php">Services</a></li>
                <li><a href="About.php">About Us</a></li>
                <li><a href="Contact.php" class="active">Contact</a></li>
            </ul>
        </div>
    </nav>

    <header class="header">
        <div class="container">
            <h1 class="main-heading">Get in Touch</h1>
            <p class="sub-heading">Request a consultation or ask us any questions. We’re here to help!</p>
        </div>
    </header>

    <section class="contact-form">
        <div class="container">
            <h2 class="section-title">Request a Free Consultation</h2>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="company">Company Name:</label>
                    <input type="text" id="company" name="company" required>
                </div>
                <div class="form-group">
                    <label for="service">Type of Service Needed:</label>
                    <select id="service" name="service" required>
                        <option value="administrative">Administrative Support</option>
                        <option value="customer-service">Customer Service</option>
                        <option value="social-media">Social Media Management</option>
                        <option value="project-management">Project Management</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="cta-button">Submit</button>
                </div>
            </form>
        </div>
    </section>

    <section class="contact-info">
        <div class="container">
            <h2 class="section-title">Contact Information</h2>
            <p><strong>Email:</strong> support@vaservices.com</p>
            <p><strong>Phone:</strong> +123 456 7890</p>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Virtual Assistant Services. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
