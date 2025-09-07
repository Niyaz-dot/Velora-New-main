<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<style>
    .about-content {
        position: relative;
        width: 100%;
        height: 590px;
        background: url("Assests/Images/about-us-cover.jpeg");
        background-size: cover;
        background-position: right;

    }

    /* this is css of form upper section  */
    /* === Base Styles === */
    .page-container {
        display: flex;
        /* flex-direction: column; */
        align-items: center;
        justify-content: center;

        background-color: white;
        color: #2d3748;
    }

    .image-section {
        position: relative;
        width: 100%;
        max-width: 24rem;
        margin-top: 2rem;
        margin-bottom: 15rem;
    }

    .image-wrapper {
        position: relative;
        width: 80%;
        height: auto;
    }

    .image-main {
        width: 90%;
        height: auto;
        margin-left: 10rem;
        border-radius: 0.75rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
            0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    .image-overlay {
        position: absolute;
        width: 95%;
        height: auto;
        border-radius: 0.75rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
            0 4px 6px -2px rgba(0, 0, 0, 0.05);
        transform: translate(-50%, 50%);
        top: 20%;
        left: 65%;
        /* bottom: 40%; */
    }

    .text-section :hover {
        display: inline-block;
        /* needed for animation */
        animation: dance 0.6s ease-in-out infinite;
        cursor: pointer;
        /* show pointer on hover */
    }

    .text-section {
        width: 100%;
        max-width: 42rem;
        text-align: center;
        margin-top: 1rem;
        position: relative;
    }

    .main-heading {
        font-size: 2.5rem;
        font-weight: 700;
        text-align: center;
        margin-top: 1rem;
        margin-left: -15rem;
    }

    .heading-blue {
        color: #1a202c;
    }

    .heading-green {
        color: #ADD829;
    }

    .sub-paragraph {
        color: #718096;
        font-family: "Inter", sans-serif;
        font-weight: 500;
        font-size: 1.25rem;
        line-height: 1.5rem;
        letter-spacing: 0;
        /* text-align: center; */
        align-items: center;
        width: 85%;
        margin-top: -1rem;
        margin-left: 6rem;
    }

    /* Mobile Responsive Styles */
    @media screen and (max-width: 768px) {
        .main-heading {
            font-size: 2rem;
            font-weight: 700;
            text-align: center;
            /* margin-top: 0rem; */
            margin-left: 4rem
        }

        .sub-paragraph {
            color: #718096;
            font-family: "Inter", sans-serif;
            font-weight: 500;
            font-size: 1rem;
            line-height: 1.5rem;
            letter-spacing: 0;
            /* text-align: center; */
            align-items: center;
            width: 75%;
            margin-top: -1rem;
            margin-left: 4rem;
        }

        .image-main {
            width: 80%;
            height: auto;
            margin-left: 10rem;
            border-radius: 0.75rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
                0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        .image-overlay {
            position: absolute;
            width: 80%;
            height: auto;
            border-radius: 0.75rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
                0 4px 6px -2px rgba(0, 0, 0, 0.05);
            transform: translate(-50%, 50%);
            top: 20%;
            left: 65%;
            /* bottom: 40%; */
        }

    }


    /* Small Mobile Devices */
    @media screen and (max-width: 480px) {
        .page-container {
            background-color: white;
            height: 30rem;
        }

        .main-heading {
            font-size: 2rem;
            font-weight: 700;
            text-align: center;
            margin-top: -13rem;
            margin-left: -12rem;
        }

        .sub-paragraph {
            color: #718096;
            font-family: "Inter", sans-serif;
            font-weight: 500;
            font-size: 1rem;
            line-height: 1.5rem;
            letter-spacing: 0;
            /* text-align: center; */
            align-items: center;
            width: 129%;
            margin-top: -1rem;
            margin-left: -8rem;
        }


        .image-main {
            width: 90%;
            height: auto;
            /* top: 46%; */
            margin-top: 5rem;
            position: absolute;
            margin-left: 11rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        .image-overlay {
            position: absolute;
            width: 90%;
            height: auto;
            border-radius: 0.75rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            transform: translate(-50%, 50%);
            left: 100%;
            margin-top: 7rem;

        }

    }

    /* Tablet View Adjustments */
    @media screen and (min-width: 769px) and (max-width: 1024px) {
        .main-heading {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            /* margin-top: 0rem; */
            margin-left: 1rem
        }

        .sub-paragraph {
            color: #718096;
            font-family: "Inter", sans-serif;
            font-weight: 500;
            font-size: 1.25rem;
            line-height: 1.5rem;
            letter-spacing: 0;
            /* text-align: center; */
            align-items: center;
            width: 78%;
            margin-top: -1rem;
            margin-left: 4rem;
        }
    }

    /* ========================================================================= */
    /* Hero Section */
    .hero1 {
        min-height: 170vh;
        display: flex;
        align-items: flex-start;
        padding: 60px 5% 0;
        /* color: #333; */
        background-color: #E7F0FF;
        margin-left: 2rem;
    }

    .hero1-content {
        max-width: 600px;
        padding-left: 60px;
        border-radius: 12px;
        /* margin-left: 2.2rem; */
    }

    .hero1-content :hover {
        display: inline-block;
        /* needed for animation */
        animation: dance 0.6s ease-in-out infinite;
        cursor: pointer;
        /* show pointer on hover */
    }

    .hero1 h1 {
        font-size: 40px;
        /* increased from 32px */
        line-height: 1.3;
        font-weight: 700;
        color: #1e3a8a;
        /* navy blue */
        margin-bottom: 20px;
        margin-top: 8rem;

        /* little more spacing */
    }

    .hero1 h1 .highlight {
        color: #a3e635;
        /* lime green */
    }

    .sub1-content {
        margin-left: -14rem;
        display: flex;
        flex-direction: column;
        width: 40.3%;
        gap: 1rem;
        /* space between each point */
        margin-top: 12rem;
    }

    /* Mobile Responsive Styles */
    @media screen and (max-width: 768px) {
        .sub1-content {
            margin-left: -21rem;
            display: flex;
            flex-direction: column;
            width: 99.3%;
            gap: 1rem;
            margin-top: 3rem;
        }

        .hero1 h1 {
            font-size: 40px;
            line-height: 1.3;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 20px;
            margin-top: -2rem;
            padding-left: 3rem;
            width: 98% !important;
        }

    }

    /* Small Mobile Devices */
    @media only screen and (max-width: 480px) {
        .hero1 h1 {
            font-size: 35px;
            line-height: 1.3;
            font-weight: 650;
            color: #1e3a8a;
            margin-bottom: 20px;
            margin-top: -2rem;
            padding-left: 1.4rem;
            width: 98% !important;
        }

        .sub1-content {
            margin-left: -17rem;
            display: flex;
            flex-direction: column;
            width: 99.3%;
            gap: 1rem;
            margin-top: 3rem;
        }

        .container1 {
            display: grid;
            grid-template-columns: repeat(2, minmax(180px, 2fr));
            max-width: 19rem;
            margin-left: 5rem;
            margin-top: -42.2rem;
            /* align-items: center; */
            place-items: center;
            justify-content: end;
            /* justify-content: start; */
        }
    }


    .sub1-item {
        display: flex;
        align-items: flex-start;
        /* icon stays at top if text is multi-line */
        gap: 0.8rem;
        /* space between icon and text */
    }

    .sub1-item i {
        font-size: 1.2rem;
        /* adjust size */
        margin-top: 0.2rem;
        /* tweak for perfect alignment */
    }

    .sub1-item p {
        margin: 0;
        line-height: 1.6;
        /* better readability */
    }

    /* Hover dancing text effect */
    .sub1-item p:hover {
        display: inline-block;
        /* needed for animation */
        animation: dance 0.6s ease-in-out infinite;
        cursor: pointer;
        /* show pointer on hover */
    }

    @keyframes dance {
        0% {
            transform: translateX(0);
        }

        25% {
            transform: translateX(-3px) rotate(-3deg);
        }

        50% {
            transform: translateX(3px) rotate(3deg);
        }

        75% {
            transform: translateX(-3px) rotate(-3deg);
        }

        100% {
            transform: translateX(0);
        }
    }

    /* ================================================================== */
    .container1 {
        display: grid;
        /* position: absolute; */
        grid-template-columns: repeat(2, minmax(292px, 2fr));
        /* gap: 1rem; */
        max-width: 19rem;
        /* max-height: 22rem; */
        margin-left: 48rem;
        margin-top: -81.2rem;
        /* margin-right: auto; */
    }

    /* Tablet View Adjustments */
    @media only screen and (min-width: 769px) and (max-width: 1024px) {
        .container1 {
            display: grid;
            grid-template-columns: repeat(2, minmax(243px, 2fr));
            max-width: 19rem;
            margin-left: 48rem;
            margin-top: -71.2rem;
            align-items: center;
            justify-content: end;
        }

        .hero1 h1 {
            font-size: 35px;
            line-height: 1.3;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: -8px;
            margin-top: -2rem;

            margin-left: -4rem;
        }

        .sub1-content {
            margin-left: -14rem;
            display: flex;
            flex-direction: column;
            width: 40.3%;
            gap: 1rem;
            margin-top: 2rem;
        }
    }

    /* Tablet View Adjustments */
    @media only screen and (max-width: 769px) {
        .container1 {
            display: grid;
            grid-template-columns: repeat(2, minmax(200px, 2fr));
            /* bigger than 180px */
            max-width: 24rem;
            /* larger size */
            margin: 0 auto;
            /* center horizontally */
            margin-top: -42.2rem;
            /* keep your vertical shift if needed */
            place-items: center;
            /* center grid items inside */
        }
    }



        .image-card1 {
            border-radius: 1.5rem;
            /* Matches rounded-3xl */
            /* box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25); */
            /* Matches shadow-2xl */
            overflow: hidden;
            transform: scale(1);
            transition: transform 0.3s ease-in-out;
        }

        .image-card1:hover {
            transform: scale(1.25);
        }

        .image1 {
            width: 100%;
            height: auto;
            object-fit: cover;
        }


        /* ======================================================== */
        .mission-container {
            max-width: 100%;
            /* margin-left: auto;
            margin-right: auto; */
            background-color: #ADD829;
            padding-bottom: 2rem;
        }


        .mission-heading {
            color: white;
            font-size: 2.5rem;
            font-weight: 660;
            margin-bottom: 0rem;
            /* text-align: center; */
            margin-left: 14.3rem;
            padding-top: 5rem;

        }

        .mission-heading-highlight {
            color: #2b3c66;
        }



        .mission-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(292px, 2fr));
            /* gap: 15rem; */
            width: 85%;
        }



        .mission-card {
            background-color: transparent;
            padding-left: 1.5rem;
            border-radius: 0.75rem;
            margin-left: 12rem;
        }

        /* Tablet View Adjustments */
        @media only screen and (min-width: 769px) and (max-width: 1024px) {

            .mission-grid {
                display: grid;
                grid-template-columns: repeat(2, minmax(292px, 2fr));
                /* gap: 15rem; */
                width: fit-content;
            }

            .mission-card {
                background-color: transparent;
                padding-left: 1.5rem;
                border-radius: 0.75rem;
                width: fit-content;
                margin-left: 3rem;
            }

            .mission-heading {
                color: white;
                font-size: 2.5rem;
                font-weight: 660;
                margin-bottom: 0rem;
                /* text-align: center; */
                margin-left: 19.3rem;
                padding-top: 5rem;
            }
        }

        @media only screen and (max-width: 768px) {
            .mission-grid {
                display: grid;
                grid-template-columns: repeat(1, minmax(289px, 2fr));
                /* gap: 15rem; */
                width: fit-content;
                margin-right: 5rem;
                margin-left: -8rem;
            }

            .mission-heading {
                color: white;
                font-size: 2rem;
                font-weight: 660;
                margin-bottom: 0rem;
                /* text-align: center; */
                margin-left: 8.5rem;
                padding-top: 3rem;
            }

            .mission-icon {
                color: #2b3c66;
                font-size: 1 rem;
                margin-top: 1.4rem;
                margin-right: 1rem;
            }


        }

        @media only screen and (max-width:480px) {

            .mission-heading {
                color: white;
                font-size: 2rem;
                font-weight: 660;
                margin-bottom: 0;
                padding-top: 3rem;
                width: 100%;
                text-align: center;
                margin-left: 0;
            }

            .mission-grid {
                display: grid;
                grid-template-columns: repeat(1, minmax(289px, 2fr));
                /* gap: 15rem; */
                width: fit-content;
                margin-right: 2rem;
                margin-left: -10rem;
            }


        }

        .mission-card-header {
            display: flex;
            align-items: flex-start;
            margin-bottom: -1rem;
        }

        .mission-icon {
            color: #2b3c66;
            font-size: 1.7rem;
            margin-top: 1.4rem;
            margin-right: 1rem;
        }

        .mission-card-title {
            font-size: 1.3rem;
            font-weight: 650;
            color: #2b3c66;
        }

        .mission-card-text {
            color: #2b3c66;
            font-size: 1rem;
            line-height: 1.625;
        }
</style>

<body>
    <?php include 'Includes/Topmenu.php'; ?>
    <div class="about-content">
        <!-- <h1>About Us Page</h1> -->
    </div>
    <!-- this is the second button page code -->
    <div class="our-visions-wrapper page-container">

        <!-- Left Section - Images -->
        <div class="image-section">
            <div class="image-wrapper">
                <img src="./Assests/Images/image-02-1.png.png" alt="Two people shaking hands" class="image-main">
                <img src="./Assests/Images/image-01-1.png.png" alt="A hand holding a patient's arm"
                    class="image-overlay">
            </div>
        </div>

        <!-- Right Section - Text -->
        <div class="text-section">
            <h1 class="main-heading">
                <span class="heading-blue">Our&nbsp; </span> <span class="heading-green">Visions</span>
            </h1>
            <p class="sub-paragraph">
                To be a trusted companion for everyone going through difficult times offering presence filled with love,
                empathy, and sincerity, so that no one ever feels alone.
            </p>
        </div>
    </div>

    <!-- Main Content -->
    <section class="hero1">
        <div class="hero1-content">
            <h1>
                <span class="bold">Our <span class="highlight">Mission</span></span>
            </h1>
        </div>
        <!-- main sub content  -->
        <div class="sub1-content">
            <div class="sub1-item">
                <i class="fa-solid fa-circle-check" style="color:#ADD829"></i>
                <p style="color: #1B3C74">
                    To provide compassionate support that uplifts both body and soul.
                </p>
            </div>

            <div class="sub1-item">
                <i class="fa-solid fa-circle-check" style="color:#ADD829"></i>
                <p style="color: #1B3C74">
                    To accompany individuals with genuine care, creating a sense of comfort and peace.
                </p>
            </div>

            <div class="sub1-item">
                <i class="fa-solid fa-circle-check" style="color:#ADD829"></i>
                <p style="color: #1B3C74">
                    To empower people to face challenges with dignity, hope, and strength.
                </p>
            </div>

            <div class="sub1-item">
                <i class="fa-solid fa-circle-check" style="color:#ADD829"></i>
                <p style="color: #1B3C74">
                    To empower people to face challenges with dignity, hope, and strength.
                </p>
            </div>

            <div class="sub1-item">
                <i class="fa-solid fa-circle-check" style="color:#ADD829"></i>
                <p style="color: #1B3C74">
                    To empower people to face challenges with dignity, hope, and strength.
                </p>
            </div>
        </div>
    </section>
    <div class="container1">
        <!-- Image 1 -->
        <div class="image-card1">
            <img class="image1" src="./Assests/Images/leaf.png" alt="A hand holding a patient's arm">
        </div>

        <!-- Image 2 -->
        <div class="image-card1">
            <img class="image1" src="./Assests/Images/umb.png" alt="A hand holding a patient's arm">
        </div>

        <!-- Image 3 -->
        <div class="image-card1">
            <img class="image1" src="./Assests/Images/hand.png" alt="A hand holding a patient's arm">
        </div>

        <!-- Image 4 -->
        <div class="image-card1">
            <img class="image1" src="./Assests/Images/flower.png" alt="A hand holding a patient's arm">
        </div>
    </div>

    <div class="mission-container">
        <h1 class="mission-heading">
            <span class="mission-heading-highlight">Our</span> Mission
        </h1>

        <div class="mission-grid">
            <!-- Love and Sincerity -->
            <div class="mission-card">
                <div class="mission-card-header" style="color:#102851">
                    <i class="fa-solid fa-pen-to-square  mission-icon"></i>
                    <h2 class="mission-card-title">Love and Sincerity</h2>
                </div>
                <p class="mission-card-text">
                    Every service we provide is rooted in love and sincerity, because we believe that genuine presence
                    is the greatest comfort.
                </p>
            </div>

            <!-- Empathy and Compassion -->
            <div class="mission-card">
                <div class="mission-card-header">
                    <i class="fa-solid fa-boxes-stacked  mission-icon"></i>
                    <h2 class="mission-card-title">Empathy and Compassion</h2>
                </div>
                <p class="mission-card-text">
                    We listen and understand without judgment, offering care that truly touches the heart.
                </p>
            </div>

            <!-- Respect for Life -->
            <div class="mission-card">
                <div class="mission-card-header">
                    <span class="mission-icon">&#x1F331;</span>
                    <h2 class="mission-card-title">Respect for Life</h2>
                </div>
                <p class="mission-card-text">
                    Every individual deserves to be valued, accompanied, and to experience a meaningful life.
                </p>
            </div>

            <!-- Commitment to Presence -->
            <div class="mission-card">
                <div class="mission-card-header">
                    <span class="mission-icon">&#x1F4AF;</span>
                    <h2 class="mission-card-title">Commitment to Presence</h2>
                </div>
                <p class="mission-card-text">
                    We strive to always be there when people need us, because no one deserves to feel alone.
                </p>
            </div>
        </div>
    </div>
    <?php include 'Includes/Footer.php'; ?>
</body>

</html>