<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Oswald', sans-serif;
        font-weight: normal;
    }

    :root {
        --main-color: #1289EA;
        --text-color: #ffffff;
    }

    body {
        background-size: contain;
        background-attachment: local;
    }

    html::-webkit-scrollbar {
        width: 6px;
    }

    html::-webkit-scrollbar-track {
        background: transparent;
    }

    html::-webkit-scrollbar-thumb {
        background: var(--main-color);
    }

    .nav-links {
        display: flex;
        justify-content: center;
        align-items: center;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .nav {
        background-color: rgb(226, 237, 254);
        padding-bottom: 10px;
    }

    .nav-links li {
        margin: 0 10px;
    }

    .nav-links li a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
        font-size: 18px;
    }

    .logo {
        height: 50px;
    }
</style>
<?php
session_start();
$isUserLogged = false;
if (isset($_SESSION['username'])) {
    $isUserLogged = true;
}
@include('config.php');
?>
<div class="container text-center nav rounded-bottom">
    <div class="row col align-self-center">
        <div class="col align-self-start">
            <img class="logo " src="./IMG/Untitled design (63).png" alt="Logo">
        </div>
        <div class="col ">
            <ul class="nav-links ">
                <li><a class="nav-link " aria-current="page" href="./index.php">Home</a></li>
                <li><a class="nav-link" href="../City-Hos/HosServices.php">Services</a></li>
                <li><a class="nav-link" href="../City-Hos/LabService.php">Laboratory</a></li>
                <li><a class="nav-link " href="../City-Hos/ContactUs.php">Contact </a></li>
            </ul>
        </div>
        <div class="col align-self-center">
            <?php
            if ($isUserLogged) {
                echo '<button id="logout-btn" type="button" class="btn btn-primary" onclick="logout()">Logout</button>';
            } else {
                echo '<button id="login-btn" type="button" class="btn btn-primary">Login</button>';
            }
            ?>
            <!-- <button id="login-btn" type="button" class="btn btn-primary">Login</button> -->
        </div>
    </div>
</div>
<script>
  
  // Get a reference to the button
  const loginBtn = document.getElementById('login-btn');
  const logoutBtn = document.getElementById('logout-btn');

  // Define an event listener for the button
  loginBtn.addEventListener('click', function() {
    // Navigate to the DocLogin.php page in the same tab
    window.location.href = 'DocLogin.php';
  });

  function logout() {
  window.location.href = './logout.php';
  }
</script>