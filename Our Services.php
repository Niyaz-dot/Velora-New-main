<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My website</title>

</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
    integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .services-container {
        position: relative;
        width: 100%;
        height: 400px;
        background: url("Assests/Images/HeroSection.jpeg");
        /* background-color: #27AE60; */
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        padding-left: 10%;
        box-sizing: border-box;
        color: #333;
    }

    .services-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /* background-color: rgba(126, 46, 46, 0.7); */
    }

    .content {
        position: relative;
        z-index: 2;
        max-width: 500px;
    }

    .services-title {
        font-size: 3.5em;
        font-weight: bold;
        margin-bottom: -25px;
    }

    .black-text {
        color: black;
    }

    .green-text {
        color: #AED827;
        /* A nice, bright green */
    }

    .services-description {
        font-size: 1.2em;
        line-height: 1.5;
        color: #555;
    }

    .page-container {
        font-family: 'Inter', sans-serif;
        background-color: #f7fafc;
        padding: 2rem;
    }

    .grid-container {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
        max-width: 80rem;
        margin-left: auto;
        margin-right: auto;

        grid-template-columns: repeat(3, 1fr);
    }


    .card {
        border: 1px solid #e2e8f0;
        background-color: white;
        transition: transform 0.2s, box-shadow 0.2s;
        padding: 1.5rem;
        border-radius: 1.5rem;
    }

    .card:hover {
        transform: translateY(-5px) scale(1.03);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    .icon-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 3rem;
        height: 3rem;
        border-radius: 9999px;
        margin-bottom: 1rem;
    }

    .card h3 {
        font-size: 1.25rem;
        font-weight: 600;
        color: #1a202c;
        margin-bottom: 0.5rem;
    }

    .card p {
        color: #4a5568;
        opacity: 0;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-in-out, opacity 0.3s ease-in-out;
    }

    .card:hover p {
        opacity: 1;
        max-height: 100px;
        /* A large enough value to accommodate the text */
        margin-top: 0.5rem;
    }

/* Mobile Responsive Styles */
@media screen and (max-width: 768px) {
    .grid-container {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
        max-width: 80rem;
        margin-left: auto;
        margin-right: auto;

        grid-template-columns: repeat(2, 1fr);
    }


}



/* Small Mobile Devices */
@media screen and (max-width: 480px) {
.grid-container {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
        max-width: 80rem;
        margin-left: auto;
        margin-right: auto;

        grid-template-columns: repeat(1, 1fr);
    }
}


</style>

<body>
    <?php include './Includes/Topmenu.php'; ?>

    <div class="services-container">
        <div class="services-overlay"></div>
        <div class="content">
            <h1 class="services-title">
                <span class="black-text">Our</span>
                <span class="green-text">Services</span>
            </h1>
            <p class="services-description">
                Comprehensive care services designed to support daily living, companionship, health, and comfort with
                compassion and trust.
            </p>
        </div>
    </div>

    <div class="page-container">

        <div class="grid-container">

            <!-- Personal Care Card -->
            <div class="card">
                <div class="icon-wrapper" style="background-color: #F1E9FF; color: #855FCE; font-size: 30px;">
                    <i class="fa-solid fa-hand-holding-medical"></i>
                </div>
                <h3>Personal Care:</h3>
                <p>Assistance with daily activities like bathing, dressing, grooming, and toileting.</p>
            </div>

            <!-- Companion Care Card -->
            <div class="card">
                <div class="icon-wrapper" style="background-color: #E6F3E9; color: #27AE60; font-size: 30px;">
                    <i class="fa-solid fa-hands-bubbles"></i>
                </div>
                <h3>Companion Care</h3>
                <p>Emotional and social support through companionship, engaging in hobbies, watching TV, or simply
                    chatting.</p>
            </div>

            <!-- Homemaker Services Card -->
            <div class="card">
                <div class="icon-wrapper" style="background-color: #E2F2FF; color: #2F80ED; font-size: 30px;">
                    <i class="fa-solid fa-house-chimney-crack"></i>
                </div>
                <h3>Homemaker Services</h3>
                <p>Household tasks including light cleaning, dusting, vacuuming, laundry, and meal planning and
                    preparation.</p>
            </div>

            <!-- Respite Care Card -->
            <div class="card">
                <div class="icon-wrapper" style="background-color: #F1E9FF; color: #855FCE; font-size: 30px;">
                    <i class="fas fa-hand-holding-heart"></i>
                </div>
                <h3>Respite Care</h3>
                <p>Temporary care provided to relieve primary family caregivers, allowing them to take a break.</p>
            </div>

            <!-- Transportation Card -->
            <div class="card">
                <div class="icon-wrapper" style="background-color: #E6F3E9; color: #27AE60; font-size: 30px;">
                    <i class="fa-solid fa-car"></i>
                </div>
                <h3>Transportation</h3>
                <p>Driving to and from medical appointments, grocery stores, and social events.</p>
            </div>

            <!-- Errands & Shopping Card -->
            <div class="card">
                <div class="icon-wrapper" style="background-color: #E2F2FF; color: #2F80ED; font-size: 30px;">
                    <i class="fa-solid fa-bag-shopping"></i>
                </div>
                <h3>Errands & Shopping</h3>
                <p>Assistance with grocery shopping and other household errands.</p>
            </div>

            <!-- Medication Reminders Card -->
            <div class="card">
                <div class="icon-wrapper" style="background-color: #F1E9FF; color: #855FCE; font-size: 30px;">
                    <i class="fa-solid fa-pills"></i>
                </div>
                <h3>Medication Reminders</h3>
                <p>Reminding individuals to take their prescribed medications at the appropriate times.</p>
            </div>

            <!-- Pet Care Card -->
            <div class="card">
                <div class="icon-wrapper" style="background-color: #E6F3E9; color: #27AE60; font-size: 30px;">
                    <i class="fa-solid fa-paw"></i>
                </div>
                <h3>Pet Care</h3>
                <p>Feeding, watering, and providing short walks for household pets.</p>
            </div>

            <!-- Light Housekeeping Card -->
            <div class="card">
                <div class="icon-wrapper" style="background-color: #E2F2FF; color: #2F80ED; font-size: 30px;">
                    <i class="fa-solid fa-house-fire"></i>
                </div>
                <h3>Light Housekeeping</h3>
                <p>Maintaining a clean and orderly home environment.</p>
            </div>

        </div>
    </div>

    <?php include './Includes/Forms.php'; ?>
    <?php include './Includes/Footer.php'; ?>


</body>

</html>