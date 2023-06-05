<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/Services.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Hospital Services</title>
</head>

<body>
    <?php @include('./Components/header.php');
    @include('config.php');
    $db = ''; ?>
    <div class="container mt-3">
    <form action="" method="get">
        <div class="form-group">
            <input type="text" class="form-control" name="search_query" placeholder="Search Services"></br>
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
        
    </form>
</div>
    
    
    <?php
    if(isset($_GET['search_query'])) {
        $search_query = $_GET['search_query'];
        try {
            $sql = "SELECT * FROM `hosservice` WHERE HSNAME LIKE '%$search_query%' ORDER BY RAND() LIMIT 24";
            if ($result = mysqli_query($conn, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        // Display search results
                        echo '<div class="container text-center mt-5  justify-content-center p-5 ">';
                        echo '<div class="row align-items-center ms-5 ">';
                        echo '<div class="card ms-5 mb-3 border border-0" style="width: 18rem;">';
                        echo '<img src="./uploaded_img/'.$row['HIMG'].'" class="card-img-top" alt="...">';
                        echo '<div class="card-body">';
                        echo ' <h5 class="card-title">' . $row['HSNAME'] . '</h5>';
                        echo '<p class="card-text">' . $row['HSDES'] . '</p>';
                        echo '<a href="./ServiceRegister.php" class="btn btn-primary">Register</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "No results found.";
                }
            }
        } catch (Exception $e) {
            echo 'An error occurred: ' . $e->getMessage();
        }
    }
?>
        <!-- <div class="card ms-5 mb-3 border border-0" style="width: 18rem;">
            <img src="./uploaded_img/'.$row['HIMG'].'" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">' . $row['HSNAME'] . '</h5>
                <p class="card-text">' . $row['HSDES'] . '</p>
                <a href="#" class="btn btn-primary">Register</a>
            </div>
        </div> -->
       
    <div class="container text-center mt-5  justify-content-center p-5 ">
    <div class="row align-items-center ms-5 ">
    <?php
    try {
        $sql = "SELECT * FROM `hosservice`  ORDER BY RAND() LIMIT 24";
        if ($result = mysqli_query($conn, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    // Display search results
                    echo '<div class="card ms-5 mb-3 border border-0" style="width: 18rem;">';
                    echo '<img src="./uploaded_img/'.$row['HIMG'].'" class="card-img-top" alt="...">';
                    echo '<div class="card-body">';
                    echo ' <h5 class="card-title">' . $row['HSNAME'] . '</h5>';
                    echo '<p class="card-text">' . $row['HSDES'] . '</p>';
                    echo '<a href="ServiceRegister.php" class="btn btn-primary">Register</a>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "No results found.";
            }
        }
    } catch (Exception $e) {
        echo 'An error occurred: ' . $e->getMessage();
    }
?>
        <!-- <div class="card ms-5 mb-3 border border-0" style="width: 18rem;">
            <img src="./uploaded_img/'.$row['HIMG'].'" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">' . $row['HSNAME'] . '</h5>
                <p class="card-text">' . $row['HSDES'] . '</p>
                <a href="#" class="btn btn-primary">Register</a>
            </div>
        </div> -->
       
    </div>
</div>




    </div>
    <?php @include('./Components/footer.php'); ?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</html>