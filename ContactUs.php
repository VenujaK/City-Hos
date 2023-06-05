<?php
include 'config.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Sanitize the input values
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $message = mysqli_real_escape_string($conn, $message);

    // Insert the data into the "query" table
    $sql = "INSERT INTO query (NAME, MSG, MAIL) VALUES ('$name', '$message', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: ";
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta charset="UTF-8" />
    <title>Contact Us</title>

    <link href="https://unpkg.com/cirrus-ui" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./CSS/ContactUs.css">
</head>

<body>
    <?php @include('./Components/header.php'); ?>
    <section class="contact_us">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="contact_inner">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="contact_form_inner">
                                    <div class="contact_field">
                                        <h3>Contatc Us</h3>
                                        <p>Feel Free to contact us any time. We will get back to you as soon as we can!.
                                        </p>
                                        <form method="POST" action="">
                                            <input type="text" class="form-control form-group" placeholder="Name"
                                                name="name" />
                                            <input type="text" class="form-control form-group" placeholder="Email"
                                                name="email" />
                                            <textarea class="form-control form-group" placeholder="Message"
                                                name="message"></textarea>
                                            <button class="contact_form_submit" name="submit">Send</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="right_conatct_social_icon d-flex align-items-end">
                                    <div class="socil_item_inner d-flex">
                                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact_info_sec">
                            <h4>Contact Info</h4>
                            <div class="d-flex info_single align-items-center">
                                <i class="fas fa-headset"></i>
                                <span>+91 8009 054294</span>
                            </div>
                            <div class="d-flex info_single align-items-center">
                                <i class="fas fa-envelope-open-text"></i>
                                <span>info@cityhospital.com</span>
                            </div>
                            <div class="d-flex info_single align-items-center">
                                <i class="fas fa-map-marked-alt"></i>
                                <span>1000+ trusted customers accross the world</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php @include('./Components/footer.php'); ?>
</body>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

</html>