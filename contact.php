<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Bus Ticket Booking System</title>
    <link rel="stylesheet" href="us.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .photo-section {
            float: left;
            width: 40%;
            padding: 20px;
        }

        .contact-form {
            float: left;
            width: 60%;
            padding: 20px;
        }

        @media screen and (max-width: 768px) {
            .photo-section,
            .contact-form {
                width: 100%;
                float: none;
            }
        }

        .social-media {
            clear: both; /* Ensure it's below the floated elements */
            text-align: center;
            margin-top: 20px; /* Adjust as needed */
        }
    </style>
</head>
<body>
    <header>
        <h1>Contact Us</h1>
    </header>
    <div class="container">
        <div class="photo-section">
            <img src="./images/Contact.jpg" alt="Contact Photo" style="width: 100%;">
            <p><h4>Feel free to check us out; we are here to provide better services.</h4></p>
            <p><h4>We are the dedicated team from Mzumbe University.</h4></p>
        </div>
        <div class="contact-form">
            <form id="contact-form" class="jus" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" name="email" required>
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                <button type="submit" name="submit">Send Message</button>
            </form>
        </div>
    </div>
    <!-- Social Media Icons Section -->
    <div class="social-media mt-4 text-center">
        <footer>
            <div class="icon">
                <h3>Follow Us On</h3>
                <a href="https://wa.me/255675018671" target="_blank" class="social-icon"><img src="./images/whatsapp.png" width="20" height="20" ></a>
                <a href="https://t.me/bk barack" target="_blank" class="social-icon"><img src="./images/telegram.png" width="20" height="20"></a>
                <a href="https://www.instagram.com/bk_barack001" target="_blank" class="social-icon"><img src="./images/instagram.png" alt="Instagram" width="20" height="20"></a>
                <a href="https://www.tik-tok.com/@ricy703" target="_blank" class="social-icon"><img src="./images/tik-tok.png" width="20" height="20" alt="LinkedIn"></a>
            </div>
        </footer>
    </div>
    <script src="./js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
