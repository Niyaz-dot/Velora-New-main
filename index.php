<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Website</title>
  <!-- CSS link -->
  <link rel="stylesheet" href="./Assests/style.css">
</head>
<style>
  /* this is the form upper section code of css  */
  .services-wrapper {
    max-width: 86%;
    width: 86%;
    padding: 0 1.5rem;
    margin-left: 7rem;
    margin-top: 6rem;
  }

  @media (max-width: 768px) {
    .services-wrapper {
      max-width: 60%;
      width: 60%;
      padding: 0 1.5rem;
      margin-left: 2rem;
      margin-top: 4rem;
    }
  }

  @media (min-width: 768px) and (max-width: 1024px) {
    .services-wrapper {
      max-width: 86%;
      width: 86%;
      padding: 0 1.5rem;
      margin-left: 2rem;
      margin-top: 4rem;
    }
  }

  .services-header {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    font-family: "Inter", sans-serif;
    font-weight: 600;
    margin-bottom: 2rem;
    margin-left: 6rem;
  }

  .services-header h2 {
    font-size: 2.25rem;
    font-weight: 800;
    letter-spacing: -0.025em;
    color: #111827;
    margin-bottom: 0.5rem;
  }

  .services-header h2 .text-indigo {
    color: black;
  }

  .services-header h2 .text-green {
    color: #ADD829;
  }

  .services-header p {
    font-size: 1rem;
    color: #6b7280;
    max-width: 500px;
  }

  .services-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 2rem;
  }

  @media only screen and (min-width: 768px) {
    .services-header {
      flex-direction: row;
      text-align: left;
      /* margin-left:-6rem; */
      justify-content: space-between;
    }

    .services-header p {
      text-align: left;
    }

    .services-grid {
      grid-template-columns: repeat(3, 1fr);
    }
  }

  .card {
    background-color: #ffffff;
    padding: 6rem;
    gap: 5rem;
    border-radius: 0.75rem;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease-in-out;
    text-align: start;
  }
  @media (max-width: 500px) {
    .card {
       background-color: #ffffff;
      padding: 1rem;
      width: 20rem;
      gap: 3rem;
      border-radius: 0.75rem;
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease-in-out;
      /* margin-left: 3rem; */
      text-align: center;
      align-items: center;
    }
  }

  @media (min-width: 501px) and (max-width: 768px) {
    .services-grid {
  display: grid;
  grid-template-columns: 1fr;
  gap: 2rem;
  justify-items: center; /* This will center the cards horizontally */
}
    .card {
      background-color: white;
      padding: 1rem;
      width: 20rem;
      gap: 3rem;
      border-radius: 0.75rem;
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease-in-out;
      margin-left: 3rem;
      text-align: center;
      align-items: center;
    }
  }

  @media (min-width: 768px) and (max-width: 1024px) {
    .card {
      background-color: #ffffff;
      padding: 2rem;
      gap: 1rem;
      border-radius: 0.75rem;
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease-in-out;
      margin-left: -1rem;
      text-align: center;
      align-items: start !important;
    }
  }

  .card:hover {
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    transform: translateY(-4px);
  }

  .card-icon {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 4rem;
    height: 4rem;
    border-radius: 9999px;
    /* margin: 0 auto 1.5rem auto; */
    border: 2px solid;
  }

  @media (max-width: 768px) {
    .card-icon {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 3.5rem;
      height: 3.5rem;
      border-radius: 9999px;
      margin: 0 auto 1.5rem auto;
      border: 2px solid;
    }
  }

  .card-icon.purple {
    background-color: #f3e8ff;
    border-color: #e9d5ff;
  }

  .card-icon.purple svg {
    color: #9333ea;
  }

  .card-icon.green {
    background-color: #dcfce7;
    border-color: #bbf7d0;
  }

  .card-icon.green svg {
    color: #16a34a;
  }

  .card-icon.blue {
    background-color: #dbeafe;
    border-color: #bfdbfe;
  }

  .card-icon.blue svg {
    color: #3b82f6;
  }

  .card h3 {
    font-size: 1.25rem;
    font-weight: 700;
    color: #111827;
    margin-bottom: 0.5rem;
  }

  .card p {
    font-size: 1rem;
    color: #6b7280;
    transition: transform 0.3s ease-in-out;
  }

  .card:hover p {
    transform: scale(1.1);
  }

  .view-all-button {
    display: block;
    margin: 3rem auto 0 auto;
    background-color: #ADD829;
    color: #ffffff;
    width: fit-content;
    font-family: "Inter", sans-serif;
    font-size: 18px;
    margin-left: 80rem;
    font-weight: 700;
    padding: 1rem 3rem;
    border-radius: 0.75rem;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
      0 4px 6px -2px rgba(0, 0, 0, 0.05);
    transition: background-color 0.3s ease;
    text-decoration: none;
  }

  .view-all-button:hover {
    background-color: #16a34a;
  }

  /* === Responsive Media Queries === */

  /* Mobile: up to 480px */
  @media only screen and (max-width: 480px) {
    .view-all-button {
      font-size: 14px;
      padding: 0.8rem 2rem;
      margin-left: 100px;
      margin-bottom: 2rem;
      text-align: center;
    }
  }

  /* Tablet: 481px – 767px */
  @media only screen and (min-width: 481px) and (max-width: 767px) {
    .view-all-button {
      font-size: 16px;
      padding: 0.9rem 2.5rem;
      margin-left: 9rem;
    }
  }

  /* Laptop: 768px – 1439px */
  @media only screen and (min-width: 768px) and (max-width: 1439px) {
    .view-all-button {
      font-size: 18px;
      padding: 1rem 2.7rem;
      margin-left: 4rem;
    }
  }

  /* Desktop: 1440px and above */
  @media only screen and (min-width: 1440px) {
    .view-all-button {
      font-size: 18px;
      padding: 1rem 3rem;
      margin-left: 70rem;
    }
  }

  /* this is css of form lower section  */
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
</style>

<body>

  <!-- Top Menu -->
  <?php include './Includes/Topmenu.php'; ?>

  
  <!-- Main Content -->
  <section class="hero">
    <div class="hero-content">
      <h1>
        Heartfelt Non- Medical <br>
        <span class="bold">Support <span class="highlight">Services</span></span>
      </h1>
      <p>
        A trusted companion for everyone going through difficult times—
        offering presence filled with love, empathy, and sincerity,
        so that no one ever feels alone.
      </p>

      <!-- Search Bar -->
      <div class="search-bar">
        <input type="text" placeholder="Ex. Doctor, Hospital">
        <button>Search</button>
      </div>
    </div>
  </section>

  <!-- form upper section  -->
  <!-- this is form upper section code  -->
  <div class="services-wrapper">
    <!-- Header Section -->
    <div class="services-header">
      <div>
        <h2>
          <span class="text-indigo">OUR</span> <span class="text-green">SERVICES</span>
        </h2>
      </div>
      <p>
        Comprehensive care services designed to support daily living, companionship, health, and comfort with compassion
        and trust.
      </p>
    </div>

    <!-- Services Cards -->
    <div class="services-grid">
      <!-- Personal Care Card -->
      <div class="card">
        <div class="card-icon purple"  style=" color: #855FCE; font-size: 30px;">
             <i class="fa-solid fa-hand-holding-medical"></i>
        </div>
        <h3>Personal Care:</h3>
        <p>
          Assistance with daily activities like bathing, dressing, grooming, and toileting.
        </p>
      </div>

      <!-- Companion Care Card -->
      <div class="card">
        <div class="card-icon green" style="color: #27AE60; font-size: 30px;">
                    <i class="fa-solid fa-hands-bubbles"></i>
        </div>
        <h3>Companion Care</h3>
        <p>
          Emotional and social support through companionship, engaging in hobbies, watching TV, or simply chatting.
        </p>
      </div>

      <!-- Homemaker Services Card -->
      <div class="card">
        <div class="card-icon blue" style="color: #2F80ED; font-size: 30px;">
         <i class="fa-solid fa-house-chimney-crack"></i>
        </div>
        <h3>Homemaker Services</h3>
        <p>
          Household tasks including light cleaning, dusting, vacuuming, laundry, and meal planning and preparation.
        </p>
      </div>
    </div>

    <!-- "View All" Button -->
    <a href="#" class="view-all-button">
      View All
    </a>
  </div>
  <!-- the form upper section code end here  -->


  <?php include './Includes\Forms.php'; ?>

  <!-- this is the lower part of form  -->

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
  <!-- the second button page code end here  -->


  <!-- Footer -->
  <?php include './Includes/Footer.php'; ?>
</body>

</html>