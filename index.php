<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Hospital</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <?php @include('./Components/header.php');
    @include('config.php') ?>
    <!-- Hero Section -->
    <div class="container overflow-hidden text-center">
        <div class="row gx-5">
            <div class="col pt-5 ">
                <h1 class="bnrh1 mt-5">"Committed to Caring for You and Your Family's Health"</h1>
                <p class="bnrp">Compassionate healthcare for you and your family's well-being.</p>
                <button id="our-services-btn" type="button" class="btn btn-primary">Our Services</button>
                <button id="lab-services-btn" type="button" class="btn btn-primary">Doctors Available</button>
            </div>
            <div class="col pt-2">
                <img src="./IMG/Untitled design (65).png" alt="">
            </div>
        </div>
    </div>
    <!-- about section -->
    <div class="container text-center mt-5">
        <div class="row">
            <div class="col">
                <h1 class="bnrh1">Why You Should Trust Us</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="bnrp">At our hospital, we are committed to caring for you and your family's health.</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col ">
                <div class="row abticon"><i class="fa-solid fa-user-doctor "></i></div>
                <div class="row text-center">
                    <p class="abtp">Talented Doctors</p>
                    <p>Our team of talented doctors are dedicated to providing exceptional care and expertise to help you achieve your best health</p>
                </div>
            </div>
            <div class="col">
                <div class="row abticon"><i class="fa-solid fa-lock"></i></div>
                <div class="row ">
                    <p class="abtp">Secure Service</p>
                    <p>Rest easy knowing that our secure service ensures the protection of your sensitive information.</p>
                </div>
            </div>
            <div class="col mb-5">
                <div class="row abticon"><i class="fa-sharp fa-solid fa-bell-concierge"></i></div>
                <div class="row ">
                    <p class="abtp">24/7 Service</p>
                    <p>Enjoy peace of mind with our 24/7 service availability.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About US Section -->
    <div class="container overflow-hidden text-center mt-5 About">
        <div class="row gx-5">
            <div class="col">
                <img src="./IMG/Untitled design (67).png" alt="">
            </div>
            <div class="col mt-5">
                <h2 class="bnrh1 mb-4">About Us</h2>
                <p class="Aboutp">Welcome to City Hospital, where we are dedicated to providing the highest quality healthcare services to our community. Our state-of-the-art facility, advanced medical technologies, and team of experienced and compassionate healthcare professionals
                    make us a trusted partner in your health and well-being. At City Hospital, we understand that each patient's needs are unique, and we strive to deliver personalized care tailored to your individual needs. We offer a wide range of medical
                    services, including emergency care, diagnostic imaging, laboratory testing, and specialized treatments for chronic conditions.</p>
                <button type="button" id="abtbtn" class="btn btn-primary mt-3">Learn More</button>
            </div>
        </div>
    </div>
    <!-- Footer  -->
    <?php @include('./Components/footer.php'); ?>

</body>
<script>
  // Get references to the buttons
  const ourServicesBtn = document.getElementById('our-services-btn');
  const labServicesBtn = document.getElementById('lab-services-btn');
  const abtBtn = document.getElementById('abtbtn');

  // Define event listeners for each button
  abtBtn.addEventListener('click', function() {
    // Navigate to the HosServices page in the same tab
    window.location.href = './ContactUs.php';
  });
  // Define event listeners for each button
  ourServicesBtn.addEventListener('click', function() {
    // Navigate to the HosServices page in the same tab
    window.location.href = './HosServices.php';
  });

  labServicesBtn.addEventListener('click', function() {
    // Navigate to the LabService page in the same tab
    window.location.href = './DoctorDetails.php';
  });
</script>
</html>