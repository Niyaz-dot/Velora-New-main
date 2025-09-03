<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Fixed</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: hidden;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Footer Styling */
        .footer {
            background-color: #07253F;
            color: #fff;
            padding: 25px 20px 15px;
        }

        .footer-container {
            display: grid;
            grid-template-columns: 1.2fr 1fr 1fr 1fr;
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* About Section */
        .footer-about {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

    /* Footer Logo Container Fixed */
    .footer-logo {
        height: 60px; /* Space fix */
        display: flex;
        align-items: center;
        overflow: visible; /* Zoom hone par cut na ho */
    }

    /* Logo Image Zoom */
    .footer-logo img {
        height: 13em; /* Fill container height */
        width: auto;
        transform: scale(1.4); /* Size increase */
        transform-origin: right; /* Left side se zoom */
    }

        .footer p {
            margin: 4px 0;
            font-size: 14px;
            line-height: 1.4;
        }

        .footer h4 {
            margin-bottom: 12px;
            font-size: 16px;
            font-weight: 600;
        }

        .footer ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer ul li {
            margin-bottom: 8px;
        }

        .footer ul li a {
            color: #ddd;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }

        .footer ul li a:hover {
            color: #3ac117;
        }

        /* Social Icons */
        .social-icons {
            margin-top: 10px;
            display: flex;
            gap: 10px;
        }

        .social-icons a {
            color: #fff;
            font-size: 14px;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }

        .social-icons a:hover {
            color: #3ac117;
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        /* Bottom Bar */
        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            text-align: center;
            padding-top: 12px;
            margin-top: 20px;
            font-size: 13px;
            color: #ccc;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Mobile Responsive */
        @media screen and (max-width: 768px) {
    .footer-container {
        grid-template-columns: 1fr;
        gap: 20px;
        text-align: center;
    }

   .footer-logo {
        height: 60px; /* Space fix */
        display: flex;
        align-items: center;
        overflow: visible; /* Zoom hone par cut na ho */
    }

    /* Logo Image Zoom */
    .footer-logo img {
        height: 160px;
        width: auto;
        transform: scale(2.4); /* Size increase */
        transform-origin: center left; /* Left side se zoom */
    }
    .social-icons {
        justify-content: center;
    }
}


        /* Tablet */
        /* Mobile + Tablet (all below 900px) */
@media screen and (max-width: 900px) {
    .footer-container {
        grid-template-columns: 1fr;
        gap: 20px;
        text-align: center;
    }

    .footer-about {
        align-items: center;
    }

    .footer-logo img {
        height: 160px;
        width: auto;
        transform: scale(2.2);
        transform-origin: center;
    }

    .social-icons {
        justify-content: center;
    }
}


        
    </style>
</head>
<body>
    
<footer class="footer">
  <div class="footer-container">

    <!-- Logo + Contact -->
    <div class="footer-col footer-about">
      <div class="footer-logo">
        <img src="./Assests/images/logo.png" alt="Velora Logo">
      </div>
      <p>Full address here</p>
      <p>+91-88787878787</p>
      <p>info@Suryanursinghome.com</p>
      <div class="social-icons">
        <a href=""><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-pinterest"></i></a>
      </div>
    </div>

    <!-- Quick Links -->
    <div class="footer-col">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Our Pricing</a></li>
        <li><a href="#">Our Gallery</a></li>
        <li><a href="#">Appointment</a></li>
        <li><a href="#">Privacy Policy</a></li>
      </ul>
    </div>

    <!-- Department -->
    <div class="footer-col">
      <h4>Department</h4>
      <ul>
        <li><a href="#">Orthology</a></li>
        <li><a href="#">Neurology</a></li>
        <li><a href="#">Dental Care</a></li>
        <li><a href="#">Ophthalmology</a></li>
        <li><a href="#">Cardiology</a></li>
      </ul>
    </div>

    <!-- Useful Links -->
    <div class="footer-col">
      <h4>Useful Links</h4>
      <ul>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Our Pricing</a></li>
        <li><a href="#">Our Gallery</a></li>
        <li><a href="#">Appointment</a></li>
        <li><a href="#">Privacy Policy</a></li>
      </ul>
    </div>
  </div>

  <div class="footer-bottom">
    <p>Copyright ©2025 velorakasihsupport.com. All Rights Reserved</p>
  </div>
</footer>

</body>
</html>
