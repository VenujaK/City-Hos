<style>
    
/* Footer */

.footer-distributed {
    background: #ffffff;
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
    box-sizing: border-box;
    width: 100%;
    text-align: left;
    font: bold 16px sans-serif;
    padding: 55px 50px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right {
    display: inline-block;
    vertical-align: top;
}


/* Footer left */

.footer-distributed .footer-left {
    width: 40%;
}


/* The company logo */

.footer-distributed h3 {
    color: #000000;
    font: normal 36px 'Open Sans', cursive;
    margin: 0;
    font-weight: 500;
}

.footer-distributed h3 span {
    color: #1178FF;
}


/* Footer links */

.footer-distributed .footer-links {
    color: #000000;
    margin: 20px 0 12px;
    padding: 0;
}

.footer-distributed .footer-links a {
    display: inline-block;
    line-height: 1.8;
    font-weight: 400;
    text-decoration: none;
    color: inherit;
}

.footer-distributed .footer-company-name {
    color: #222;
    font-size: 14px;
    font-weight: normal;
    margin: 0;
}


/* Footer Center */

.footer-distributed .footer-center {
    width: 35%;
}

.footer-distributed .footer-center i {
    background-color: #ffffff;
    color: #1178FF;
    font-size: 25px;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    text-align: center;
    line-height: 42px;
    margin: 10px 15px;
    vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope {
    font-size: 17px;
    line-height: 38px;
}

.footer-distributed .footer-center p {
    display: inline-block;
    color: #474747;
    font-weight: 400;
    vertical-align: middle;
    margin: 0;
}

.footer-distributed .footer-center p span {
    display: block;
    font-weight: normal;
    font-size: 14px;
    line-height: 2;
}

.footer-distributed .footer-center p a {
    color: #1178FF;
    text-decoration: none;
    ;
}

.footer-distributed .footer-links a:before {
    content: "|";
    font-weight: 300;
    font-size: 20px;
    left: 0;
    color: #1178FF;
    display: inline-block;
    padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
    content: none;
}


/* Footer Right */

.footer-distributed .footer-right {
    width: 20%;
}

.footer-distributed .footer-company-about {
    line-height: 20px;
    color: #49494a;
    font-size: 13px;
    font-weight: normal;
    margin: 0;
}

.footer-distributed .footer-company-about span {
    display: block;
    color: #1178FF;
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 20px;
}


/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {
    .footer-distributed {
        font: bold 14px sans-serif;
    }
    .footer-distributed .footer-left,
    .footer-distributed .footer-center,
    .footer-distributed .footer-right {
        display: block;
        width: 100%;
        margin-bottom: 40px;
        text-align: center;
    }
    .footer-distributed .footer-center i {
        margin-left: 0;
    }
}
</style>
<!-- Footer -->

<footer class="footer-distributed">

    <div class="footer-left">

        <h3>City<span>Hospital</span></h3>

        <p class="footer-links">
            <a href="../City-Hos/index.php" class="link-1">Home</a>

            <a href="../City-Hos/HosServices.php">Hospital Services</a>

            <a href="../City-Hos/LabService.php">Lab Services</a>

            <a href="../City-Hos/ContactUs.php">Contact</a>
            <a href="../City-Hos/AdminLogin.php">Admin</a>
        </p>

        <p class="footer-company-name">City Hospital © 2023</p>
    </div>

    <div class="footer-center">

        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>+1.555.555.5555</p>
        </div>

        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:support@company.com">city@hospital.com</a></p>
        </div>

    </div>

    <div class="footer-right">

        <p class="footer-company-about">
            <span>About the company</span> Welcome to City Hospital, where we are dedicated to providing the highest quality healthcare services to our community.
        </p>


    </div>

</footer>