<?php
include './db/conn.php';  // ab $pdo yahan available hai

// Initialize variables
$first_name = $last_name = $email = $phone_number = $service = $message = '';
$errors = [];
$success_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id=rand(100,1000);
    $first_name   = htmlspecialchars(trim($_POST['first-name']));
    $last_name    = htmlspecialchars(trim($_POST['last-name']));
    $email        = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone_number = htmlspecialchars(trim($_POST['phone-number']));
    $service      = htmlspecialchars(trim($_POST['service']));
    $message      = htmlspecialchars(trim($_POST['message']));

    if (empty($first_name)) $errors[] = "First name is required.";
    if (empty($last_name)) $errors[] = "Last name is required.";
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Valid email is required.";
    if (empty($service)) $errors[] = "Service selection is required.";

    if (empty($errors)) {
        try {
            $stmt = $pdo->prepare("INSERT INTO velora_Hireusfrm 
                (id,first_name, last_name, email, phone_number, service, message) 
                VALUES ($id,?, ?, ?, ?, ?, ?)");
            
            if ($stmt->execute([$first_name, $last_name, $email, $phone_number, $service, $message])) {
                $success_message = "✅ Thank you for your submission! We'll be in touch soon.";
                // Clear form values after successful submission
                $first_name = $last_name = $email = $phone_number = $service = $message = '';
            } else {
                $errors[] = "❌ Sorry, there was an error processing your request.";
            }
        } catch (Exception $e) {
            $errors[] = "Database error: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Toast Notification CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hire Us Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    /* Your existing CSS styles here */
    .form-container {
      display: flex;
      gap: 6px;
      justify-content: center;
      align-items: center;
      min-height: 85vh;
      padding: 20px;
    }

    .left-side {
      background-color: #ADD829;
      width: 620px;
      height: 707px;
      border-radius: 2%;
      position: relative;
      overflow: hidden;
      padding: 20px;
    }

    .text-color {
      color: #102851;
    }

    .hire-tittle {
      padding-top: 30px;
      margin-left: 50px;
      font-size: 28px;
      font-weight: 600;
    }

    .hire-para {
      margin-top: -15px;
      margin-left: 50px;
      font-size: 18px;
      font-weight: 400;
    }

    .contact-info p {
      font-size: 14px;
      margin: 24px 0;
      display: flex;
      align-items: center;
      font-size: 16px;
      font-weight: 400;
    }

    .contact-info i {
      margin-right: 15px !important;
      margin-left: 50px !important;
      color: #0d2341;
      font-size: 16px;
    }

    .circle {
      width: 138px;
      height: 138px;
      background-color: #b5db46d9;
      border-radius: 50%;
      position: absolute;
      top: 110px;
      right: -70px;
      z-index: 2;
    }

    .circle2 {
      width: 269px;
      height: 269px;
      background-color: #bae144d9;
      border-radius: 50%;
      position: absolute;
      top: 150px;
      right: -100px;
      z-index: 1;
    }

    .social-icon {
      display: flex;
      gap: 15px;
      margin-left: 50px;
      margin-top: 310px;
    }

    .social-icon a {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 40px;
      height: 40px;
      background: #fcfcfcff;
      color: #0d2341;
      border-radius: 50%;
      font-size: 18px;
      text-decoration: none;
    }

    .booking-form-wrapper {
      --light-gray: #f7f7f7;
      --medium-gray: #e0e0e0;
      --dark-gray: #333;
      --text-color: #555;
      --green: #a4d23f;
      width: 52%;
      font-family: 'Inter', sans-serif;
      background-color: var(--light-gray);
      color: var(--text-color);
      padding: 1rem;
      box-sizing: border-box;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      background-color: #fff;
      padding: 4rem 2.5rem;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      max-width: 800px;
      width: 100%;
      display: grid;
      gap: 2rem;
    }

    .form-section {
      display: grid;
      gap: 1.5rem;
    }

    .input-group {
      display: flex;
      flex-direction: column;
      width: 100%;
    }

    .input-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 2rem;
    }

    .input-group label {
      font-weight: 500;
      margin-bottom: 0.5rem;
      color: var(--dark-gray);
    }

    .input-group input,
    .input-group textarea {
      width: 100%;
      border: none;
      border-bottom: 2px solid var(--medium-gray);
      background: transparent;
      padding: 0.5rem 0;
      outline: none;
      transition: border-bottom-color 0.3s ease;
      font-size: 1rem;
    }

    .input-group textarea {
      resize: none;
      min-height: 80px;
      border: 2px solid var(--medium-gray);
      border-radius: 10px;
      padding: 1rem;
    }

    .section-title {
      font-weight: 600;
      font-size: 1.25rem;
      color: var(--dark-gray);
      margin-top: 2rem !important;
      border-top: 2px solid var(--medium-gray);
    }

    .section-title:first-of-type {
      border-top: none;
    }

    .service-options {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1rem;
    }

    .option-group {
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .option-group input[type="radio"] {
      -webkit-appearance: none;
      appearance: none;
      background-color: #fff;
      margin: 0;
      font: inherit;
      color: var(--medium-gray);
      width: 1.15em;
      height: 1.15em;
      border: 2px solid var(--medium-gray);
      border-radius: 50%;
      transform: translateY(-0.075em);
      display: grid;
      place-content: center;
      transition: border-color 0.3s ease, background-color 0.3s ease;
    }

    .option-group input[type="radio"]::before {
      content: "";
      width: 0.65em;
      height: 0.65em;
      border-radius: 50%;
      transform: scale(0);
      transition: transform 0.3s ease;
      box-shadow: inset 1em 1em var(--green);
    }

    .option-group input[type="radio"]:checked {
      border-color: var(--green);
    }

    .option-group input[type="radio"]:checked::before {
      transform: scale(1);
    }

    .option-group label {
      margin: 0;
    }

    .message {
      padding-top: 1rem;
      font-weight: 600;
      font-size: 1.25rem;
      color: var(--dark-gray);
    }

    .book-button {
      background-color: var(--green);
      color: white;
      padding: 1rem 2rem;
      border: none;
      border-radius: 10px;
      font-size: 1.15rem;
      font-weight: 600;
      cursor: pointer;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
      margin-top: 2rem;
      margin-left: 30rem;
      margin-right: 0;
    }

    .book-button:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(138, 188, 30, 0.4);
    }

    /* Notification styles */
    .notification {
      padding: 15px;
      margin: 20px 0;
      border-radius: 5px;
      text-align: center;
    }

    .error {
      background-color: #ffebee;
      color: #c62828;
      border: 1px solid #ef9a9a;
    }

    .success {
      background-color: #e8f5e9;
      color: #2e7d32;
      border: 1px solid #a5d6a7;
    }

    /* Tablet (max-width 900px) */
    @media screen and (max-width: 900px) {
      .form-container {
        flex-direction: column;
        align-items: center;
        padding: 10px;
      }

      .left-side,
      .booking-form-wrapper {
        width: 100%;
        height: auto;
        margin: 0;
      }

      .left-side {
        border-radius: 10px;
        padding: 20px;
      }

      .social-icon {
        margin-top: 20px;
        margin-left: 20px;
      }

      .circle,
      .circle2 {
        display: none;
      }

      .book-button {
        width: 100%;
        margin-left: 0;
        justify-self: center;
      }
    }

    /* Tablet Portrait and Mobile (max-width 768px) */
    @media screen and (max-width: 768px) {
      .left-side,
      .booking-form-wrapper {
        padding: 15px;
      }

      .hire-tittle,
      .hire-para {
        margin-left: 20px;
      }

      .contact-info i {
        margin-left: 20px !important;
      }
    }

    /* Mobile (max-width 600px) */
    @media screen and (max-width: 600px) {
      .form-container {
        padding: 5px;
      }

      .left-side,
      .booking-form-wrapper {
        padding: 10px;
      }

      .input-row {
        grid-template-columns: 1fr;
        gap: 1.5rem;
      }

      .service-options {
        grid-template-columns: 1fr;
      }

      .book-button {
        margin-top: 1rem;
      }
    }
  </style>
  <!-- Toast Notification JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script>
    // Initialize toastr
    toastr.options = {
      "closeButton": true,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "timeOut": "5000"
    };

    // Show success/error messages on page load
    document.addEventListener('DOMContentLoaded', function() {
      <?php if (!empty($success_message)): ?>
        toastr.success('<?php echo addslashes($success_message); ?>');
      <?php endif; ?>
      
      <?php if (!empty($errors)): ?>
        <?php foreach ($errors as $error): ?>
          toastr.error('<?php echo addslashes($error); ?>');
        <?php endforeach; ?>
      <?php endif; ?>
    });
  </script>
</head>

<body>
  <div class="form-container">
    <div class="left-side">
      <h2 class="text-color hire-tittle">Hire US</h2>
      <p class="text-color hire-para">Fill the form and submit, Our Representative <br /> will get in touch with you
        soon.</p>
      <div class="contact-info">
        <p><i class="fa fa-phone"></i> +1012 3456 789</p>
        <p><i class="fa fa-envelope"></i> demo@gmail.com</p>
        <p><i class="fa fa-map-marker-alt"></i> 132 Dartmouth Street Boston, <br />Massachusetts 02156 United States</p>
      </div>
      <div class="circle"></div>
      <div class="circle2"></div>
      <div class="social-icon">
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>

    <div class="booking-form-wrapper">
      <div class="container">
        <!-- Display success/error messages -->
        <?php if (!empty($errors)): ?>
          <div class="notification error">
            <?php foreach ($errors as $error): ?>
              <p><?php echo $error; ?></p>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
        
        <?php if (isset($success_message)): ?>
          <div style="display: none;" class="notification success">
            <p style="display: none;"><?php echo $success_message; ?></p>
          </div>
        <?php endif; ?>
        
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <div class="form-section">
            <div class="input-row">
              <div class="input-group">
                <label for="first-name">First Name *</label>
                <input type="text" id="first-name" name="first-name" placeholder="John" value="<?php echo $first_name; ?>" required>
              </div>
              <div class="input-group">
                <label for="last-name">Last Name *</label>
                <input type="text" id="last-name" name="last-name" placeholder="Doe" value="<?php echo $last_name; ?>" required>
              </div>
            </div>
            <div class="input-row">
              <div class="input-group">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
              </div>
              <div class="input-group">
                <label for="phone-number">Phone Number</label>
                <input type="tel" id="phone-number" name="phone-number" placeholder="+1 012 3456 789" value="<?php echo $phone_number; ?>">
              </div>
            </div>
          </div>

          <div class="form-section">
            <h2 class="section-title">Service *</h2>
            <div class="service-options">
              <?php
              $services = [
                "general-inquiry" => "General Inquiry",
                "companion-care" => "Companion Care",
                "homemaker-services" => "Homemaker Services",
                "respite-care" => "Respite Care",
                "transportation" => "Transportation",
                "errands-shopping" => "Errands & Shopping",
                "medication-reminders" => "Medication Reminders",
                "pet-care" => "Pet Care",
                "light-housekeeping" => "Light Housekeeping"
              ];
              
              foreach ($services as $value => $label):
                $checked = ($service == $value) ? 'checked' : (($value == 'general-inquiry' && empty($service)) ? 'checked' : '');
              ?>
                <div class="option-group">
                  <input type="radio" id="<?php echo $value; ?>" name="service" value="<?php echo $value; ?>" <?php echo $checked; ?> required>
                  <label for="<?php echo $value; ?>"><?php echo $label; ?></label>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <div class="form-section">
            <div class="input-group">
              <label class="message" for="message">Message</label>
              <textarea id="message" name="message" placeholder="Write your message.."><?php echo $message; ?></textarea>
            </div>
          </div>

          <button type="submit" class="book-button">Book Now</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>